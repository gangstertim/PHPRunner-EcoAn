<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("classes/searchclause.php");

add_nocache_headers();

include("include/componenthistory_variables.php");

CheckPermissionsEvent($strTableName, 'P');

$layout = new TLayout("print","FancyGreen1","MobileGreen1");
$layout->blocks["center"] = array();
$layout->containers["grid"] = array();

$layout->containers["grid"][] = array("name"=>"printgrid","block"=>"grid_block","substyle"=>1);


$layout->skins["grid"] = "empty";
$layout->blocks["center"][] = "grid";$layout->blocks["top"] = array();
$layout->skins["master"] = "empty";
$layout->blocks["top"][] = "master";
$layout->skins["pdf"] = "empty";
$layout->blocks["top"][] = "pdf";$page_layouts["componenthistory_print"] = $layout;


include('include/xtempl.php');
include('classes/runnerpage.php');

$cipherer = new RunnerCipherer($strTableName);

$xt = new Xtempl();
$id = postvalue("id") != "" ? postvalue("id") : 1;
$all = postvalue("all");
$pageName = "print.php";

//array of params for classes
$params = array("id" => $id,
				"tName" => $strTableName,
				"pageType" => PAGE_PRINT);
$params["xt"] = &$xt;
			
$pageObject = new RunnerPage($params);

// add button events if exist
$pageObject->addButtonHandlers();

// Modify query: remove blob fields from fieldlist.
// Blob fields on a print page are shown using imager.php (for example).
// They don't need to be selected from DB in print.php itself.
$noBlobReplace = false;
if(!postvalue("pdf") && !$noBlobReplace)
	$gQuery->ReplaceFieldsWithDummies($pageObject->pSet->getBinaryFieldsIndices());

//	Before Process event
if($eventObj->exists("BeforeProcessPrint"))
	$eventObj->BeforeProcessPrint($conn, $pageObject);

$strWhereClause="";
$strHavingClause="";
$strSearchCriteria="and";

$selected_recs=array();
if (@$_REQUEST["a"]!="") 
{
	$sWhere = "1=0";	
	
//	process selection
	if (@$_REQUEST["mdelete"])
	{
		foreach(@$_REQUEST["mdelete"] as $ind)
		{
			$keys=array();
			$selected_recs[]=$keys;
		}
	}
	elseif(@$_REQUEST["selection"])
	{
		foreach(@$_REQUEST["selection"] as $keyblock)
		{
			$arr=explode("&",refine($keyblock));
			if(count($arr)<0)
				continue;
			$keys=array();
			$selected_recs[]=$keys;
		}
	}

	foreach($selected_recs as $keys)
	{
		$sWhere = $sWhere . " or ";
		$sWhere.=KeyWhere($keys);
	}
	$strSQL = $gQuery->gSQLWhere($sWhere);
	$strWhereClause=$sWhere;
}
else
{
	$strWhereClause=@$_SESSION[$strTableName."_where"];
	$strHavingClause=@$_SESSION[$strTableName."_having"];
	$strSearchCriteria=@$_SESSION[$strTableName."_criteria"];
	$strSQL = $gQuery->gSQLWhere($strWhereClause, $strHavingClause, $strSearchCriteria);
}
if(postvalue("pdf"))
	$strWhereClause = @$_SESSION[$strTableName."_pdfwhere"];

$_SESSION[$strTableName."_pdfwhere"] = $strWhereClause;


$strOrderBy = $_SESSION[$strTableName."_order"];
if(!$strOrderBy)
	$strOrderBy=$gstrOrderBy;
$strSQL.=" ".trim($strOrderBy);

$strSQLbak = $strSQL;
if($eventObj->exists("BeforeQueryPrint"))
	$eventObj->BeforeQueryPrint($strSQL,$strWhereClause,$strOrderBy, $pageObject);

//	Rebuild SQL if needed

if($strSQL!=$strSQLbak)
{
//	changed $strSQL - old style	
	$numrows=GetRowCount($strSQL);
}
else
{
	$strSQL = $gQuery->gSQLWhere($strWhereClause, $strHavingClause, $strSearchCriteria);
	$strSQL.=" ".trim($strOrderBy);
	
	$rowcount=false;
	if($eventObj->exists("ListGetRowCount"))
	{
		$masterKeysReq=array();
		for($i = 0; $i < count($pageObject->detailKeysByM); $i ++)
			$masterKeysReq[]=$_SESSION[$strTableName."_masterkey".($i + 1)];
			$rowcount=$eventObj->ListGetRowCount($pageObject->searchClauseObj,$_SESSION[$strTableName."_mastertable"],$masterKeysReq,$selected_recs, $pageObject);
	}
	if($rowcount!==false)
		$numrows=$rowcount;
	else
	{
		$numrows = $gQuery->gSQLRowCount($strWhereClause, $strHavingClause, $strSearchCriteria);
	}
}

LogInfo($strSQL);

$mypage=(integer)$_SESSION[$strTableName."_pagenumber"];
if(!$mypage)
	$mypage=1;

//	page size
$PageSize=(integer)$_SESSION[$strTableName."_pagesize"];
if(!$PageSize)
	$PageSize = $pageObject->pSet->getInitialPageSize();

if($PageSize<0)
	$all = 1;	
	
$recno = 1;
$records = 0;	
$maxpages = 1;
$pageindex = 1;
$pageno=1;

// build arrays for sort (to support old code in user-defined events)
if($eventObj->exists("ListQuery"))
{
	$arrFieldForSort = array();
	$arrHowFieldSort = array();
	require_once getabspath('classes/orderclause.php');
	$fieldList = unserialize($_SESSION[$strTableName."_orderFieldsList"]);
	for($i = 0; $i < count($fieldList); $i++)
	{
		$arrFieldForSort[] = $fieldList[$i]->fieldIndex; 
		$arrHowFieldSort[] = $fieldList[$i]->orderDirection; 
	}
}

if(!$all)
{	
	if($numrows)
	{
		$maxRecords = $numrows;
		$maxpages = ceil($maxRecords/$PageSize);
					
		if($mypage > $maxpages)
			$mypage = $maxpages;
		
		if($mypage < 1) 
			$mypage = 1;
		
		$maxrecs = $PageSize;
	}
	$listarray = false;
	if($eventObj->exists("ListQuery"))
		$listarray = $eventObj->ListQuery($pageObject->searchClauseObj, $arrFieldForSort, $arrHowFieldSort, 
			$_SESSION[$strTableName."_mastertable"], $masterKeysReq, $selected_recs, $PageSize, $mypage, $pageObject);
	if($listarray!==false)
		$rs = $listarray;
	else
	{
			if($numrows)
		{
			$strSQL.=" limit ".(($mypage-1)*$PageSize).",".$PageSize;
		}
		$rs = db_query($strSQL,$conn);
	}
	
	//	hide colunm headers if needed
	$recordsonpage = $numrows-($mypage-1)*$PageSize;
	if($recordsonpage>$PageSize)
		$recordsonpage = $PageSize;
		
	$xt->assign("page_number",true);
	$xt->assign("maxpages",$maxpages);
	$xt->assign("pageno",$mypage);
}
else
{
	$listarray = false;
	if($eventObj->exists("ListQuery"))
		$listarray=$eventObj->ListQuery($pageObject->searchClauseObj, $arrFieldForSort, $arrHowFieldSort,
			$_SESSION[$strTableName."_mastertable"], $masterKeysReq, $selected_recs, $PageSize, $mypage, $pageObject);
	if($listarray!==false)
		$rs = $listarray;
	else
		$rs = db_query($strSQL,$conn);
	$recordsonpage = $numrows;
	$maxpages = ceil($recordsonpage/30);
	$xt->assign("page_number",true);
	$xt->assign("maxpages",$maxpages);
}


$fieldsArr = array();
$arr = array();
$arr['fName'] = "ComponentNo";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ComponentNo");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "EngName";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("EngName");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ThaiName";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ThaiName");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "DescriptionEng";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("DescriptionEng");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "DescriptionThai";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("DescriptionThai");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "CompTypeNo";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("CompTypeNo");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "UnitEng";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("UnitEng");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "UnitQty";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("UnitQty");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "CompPurchaseUnitEn";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("CompPurchaseUnitEn");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Cost";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Cost");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Density";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Density");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Source";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Source");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "SortOrder";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("SortOrder");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ChangeType";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ChangeType");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ChangeDate";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ChangeDate");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ChangeTime";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ChangeTime");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "SorOrder";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("SorOrder");
$fieldsArr[] = $arr;
$pageObject->setGoogleMapsParams($fieldsArr);

$colsonpage=1;
if($colsonpage>$recordsonpage)
	$colsonpage=$recordsonpage;
if($colsonpage<1)
	$colsonpage=1;


//	fill $rowinfo array
	$pages = array();
	$rowinfo = array();
	$rowinfo["data"] = array();
	if($eventObj->exists("ListFetchArray"))
		$data = $eventObj->ListFetchArray($rs, $pageObject);
	else
		$data = $cipherer->DecryptFetchedArray($rs);

	while($data)
	{
		if($eventObj->exists("BeforeProcessRowPrint"))
		{
			if(!$eventObj->BeforeProcessRowPrint($data, $pageObject))
			{
				if($eventObj->exists("ListFetchArray"))
					$data = $eventObj->ListFetchArray($rs, $pageObject);
				else
					$data = $cipherer->DecryptFetchedArray($rs);
				continue;
			}
		}
		break;
	}
	
	while($data && ($all || $recno<=$PageSize))
	{
		$row = array();
		$row["grid_record"] = array();
		$row["grid_record"]["data"] = array();
		for($col=1;$data && ($all || $recno<=$PageSize) && $col<=1;$col++)
		{
			$record = array();
			$recno++;
			$records++;
			$keylink="";

//	ComponentNo - 
			$record["ComponentNo_value"] = $pageObject->showDBValue("ComponentNo", $data, $keylink);
			$record["ComponentNo_class"] = $pageObject->fieldClass("ComponentNo");
//	EngName - 
			$record["EngName_value"] = $pageObject->showDBValue("EngName", $data, $keylink);
			$record["EngName_class"] = $pageObject->fieldClass("EngName");
//	ThaiName - 
			$record["ThaiName_value"] = $pageObject->showDBValue("ThaiName", $data, $keylink);
			$record["ThaiName_class"] = $pageObject->fieldClass("ThaiName");
//	DescriptionEng - 
			$record["DescriptionEng_value"] = $pageObject->showDBValue("DescriptionEng", $data, $keylink);
			$record["DescriptionEng_class"] = $pageObject->fieldClass("DescriptionEng");
//	DescriptionThai - 
			$record["DescriptionThai_value"] = $pageObject->showDBValue("DescriptionThai", $data, $keylink);
			$record["DescriptionThai_class"] = $pageObject->fieldClass("DescriptionThai");
//	CompTypeNo - Number
			$record["CompTypeNo_value"] = $pageObject->showDBValue("CompTypeNo", $data, $keylink);
			$record["CompTypeNo_class"] = $pageObject->fieldClass("CompTypeNo");
//	UnitEng - 
			$record["UnitEng_value"] = $pageObject->showDBValue("UnitEng", $data, $keylink);
			$record["UnitEng_class"] = $pageObject->fieldClass("UnitEng");
//	UnitQty - Number
			$record["UnitQty_value"] = $pageObject->showDBValue("UnitQty", $data, $keylink);
			$record["UnitQty_class"] = $pageObject->fieldClass("UnitQty");
//	CompPurchaseUnitEn - 
			$record["CompPurchaseUnitEn_value"] = $pageObject->showDBValue("CompPurchaseUnitEn", $data, $keylink);
			$record["CompPurchaseUnitEn_class"] = $pageObject->fieldClass("CompPurchaseUnitEn");
//	Cost - Number
			$record["Cost_value"] = $pageObject->showDBValue("Cost", $data, $keylink);
			$record["Cost_class"] = $pageObject->fieldClass("Cost");
//	Density - Number
			$record["Density_value"] = $pageObject->showDBValue("Density", $data, $keylink);
			$record["Density_class"] = $pageObject->fieldClass("Density");
//	Source - 
			$record["Source_value"] = $pageObject->showDBValue("Source", $data, $keylink);
			$record["Source_class"] = $pageObject->fieldClass("Source");
//	SortOrder - 
			$record["SortOrder_value"] = $pageObject->showDBValue("SortOrder", $data, $keylink);
			$record["SortOrder_class"] = $pageObject->fieldClass("SortOrder");
//	ChangeType - 
			$record["ChangeType_value"] = $pageObject->showDBValue("ChangeType", $data, $keylink);
			$record["ChangeType_class"] = $pageObject->fieldClass("ChangeType");
//	ChangeDate - Short Date
			$record["ChangeDate_value"] = $pageObject->showDBValue("ChangeDate", $data, $keylink);
			$record["ChangeDate_class"] = $pageObject->fieldClass("ChangeDate");
//	ChangeTime - Time
			$record["ChangeTime_value"] = $pageObject->showDBValue("ChangeTime", $data, $keylink);
			$record["ChangeTime_class"] = $pageObject->fieldClass("ChangeTime");
//	SorOrder - 
			$record["SorOrder_value"] = $pageObject->showDBValue("SorOrder", $data, $keylink);
			$record["SorOrder_class"] = $pageObject->fieldClass("SorOrder");
			if($col<$colsonpage)
				$record["endrecord_block"] = true;
			$record["grid_recordheader"] = true;
			$record["grid_vrecord"] = true;
			
			if($eventObj->exists("BeforeMoveNextPrint"))
				$eventObj->BeforeMoveNextPrint($data,$row,$record, $pageObject);
				
			$row["grid_record"]["data"][] = $record;
			
			if($eventObj->exists("ListFetchArray"))
				$data = $eventObj->ListFetchArray($rs, $pageObject);
			else
				$data = $cipherer->DecryptFetchedArray($rs);
				
			while($data)
			{
				if($eventObj->exists("BeforeProcessRowPrint"))
				{
					if(!$eventObj->BeforeProcessRowPrint($data, $pageObject))
					{
						if($eventObj->exists("ListFetchArray"))
							$data = $eventObj->ListFetchArray($rs, $pageObject);
						else
							$data = $cipherer->DecryptFetchedArray($rs);
						continue;
					}
				}
				break;
			}
		}
		if($col <= $colsonpage)
		{
			$row["grid_record"]["data"][count($row["grid_record"]["data"])-1]["endrecord_block"] = false;
		}
		$row["grid_rowspace"]=true;
		$row["grid_recordspace"] = array("data"=>array());
		for($i=0;$i<$colsonpage*2-1;$i++)
			$row["grid_recordspace"]["data"][]=true;
		
		$rowinfo["data"][]=$row;
		
		if($all && $records>=30)
		{
			$page=array("grid_row" =>$rowinfo);
			$page["pageno"]=$pageindex;
			$pageindex++;
			$pages[] = $page;
			$records=0;
			$rowinfo=array();
		}
		
	}
	if(count($rowinfo))
	{
		$page=array("grid_row" =>$rowinfo);
		if($all)
			$page["pageno"]=$pageindex;
		$pages[] = $page;
	}
	
	for($i=0;$i<count($pages);$i++)
	{
	 	if($i<count($pages)-1)
			$pages[$i]["begin"]="<div name=page class=printpage>";
		else
		    $pages[$i]["begin"]="<div name=page>";
			
		$pages[$i]["end"]="</div>";
	}

	$page = array();
	$page["data"] = &$pages;
	$xt->assignbyref("page",$page);

	

$strSQL = $_SESSION[$strTableName."_sql"];

$isPdfView = false;
$hasEvents = false;
if ($pageObject->pSet->isUsebuttonHandlers() || $isPdfView || $hasEvents)
{
	$pageObject->body["begin"] .="<script type=\"text/javascript\" src=\"include/loadfirst.js\"></script>\r\n";
		$pageObject->body["begin"] .= "<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";
	
	$pageObject->fillSetCntrlMaps();
	$pageObject->body['end'] .= '<script>';
	$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
	$pageObject->body['end'] .= "window.viewControlsMap = ".my_json_encode($pageObject->viewControlsHTMLMap).";";
	$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";";
	$pageObject->body['end'] .= '</script>';
		$pageObject->body["end"] .= "<script language=\"JavaScript\" src=\"include/runnerJS/RunnerAll.js\"></script>\r\n";
	$pageObject->addCommonJs();
}


if ($pageObject->pSet->isUsebuttonHandlers() || $isPdfView || $hasEvents)
	$pageObject->body["end"] .= "<script>".$pageObject->PrepareJS()."</script>";

$xt->assignbyref("body",$pageObject->body);
$xt->assign("grid_block",true);

$xt->assign("ComponentNo_fieldheadercolumn",true);
$xt->assign("ComponentNo_fieldheader",true);
$xt->assign("ComponentNo_fieldcolumn",true);
$xt->assign("ComponentNo_fieldfootercolumn",true);
$xt->assign("EngName_fieldheadercolumn",true);
$xt->assign("EngName_fieldheader",true);
$xt->assign("EngName_fieldcolumn",true);
$xt->assign("EngName_fieldfootercolumn",true);
$xt->assign("ThaiName_fieldheadercolumn",true);
$xt->assign("ThaiName_fieldheader",true);
$xt->assign("ThaiName_fieldcolumn",true);
$xt->assign("ThaiName_fieldfootercolumn",true);
$xt->assign("DescriptionEng_fieldheadercolumn",true);
$xt->assign("DescriptionEng_fieldheader",true);
$xt->assign("DescriptionEng_fieldcolumn",true);
$xt->assign("DescriptionEng_fieldfootercolumn",true);
$xt->assign("DescriptionThai_fieldheadercolumn",true);
$xt->assign("DescriptionThai_fieldheader",true);
$xt->assign("DescriptionThai_fieldcolumn",true);
$xt->assign("DescriptionThai_fieldfootercolumn",true);
$xt->assign("CompTypeNo_fieldheadercolumn",true);
$xt->assign("CompTypeNo_fieldheader",true);
$xt->assign("CompTypeNo_fieldcolumn",true);
$xt->assign("CompTypeNo_fieldfootercolumn",true);
$xt->assign("UnitEng_fieldheadercolumn",true);
$xt->assign("UnitEng_fieldheader",true);
$xt->assign("UnitEng_fieldcolumn",true);
$xt->assign("UnitEng_fieldfootercolumn",true);
$xt->assign("UnitQty_fieldheadercolumn",true);
$xt->assign("UnitQty_fieldheader",true);
$xt->assign("UnitQty_fieldcolumn",true);
$xt->assign("UnitQty_fieldfootercolumn",true);
$xt->assign("CompPurchaseUnitEn_fieldheadercolumn",true);
$xt->assign("CompPurchaseUnitEn_fieldheader",true);
$xt->assign("CompPurchaseUnitEn_fieldcolumn",true);
$xt->assign("CompPurchaseUnitEn_fieldfootercolumn",true);
$xt->assign("Cost_fieldheadercolumn",true);
$xt->assign("Cost_fieldheader",true);
$xt->assign("Cost_fieldcolumn",true);
$xt->assign("Cost_fieldfootercolumn",true);
$xt->assign("Density_fieldheadercolumn",true);
$xt->assign("Density_fieldheader",true);
$xt->assign("Density_fieldcolumn",true);
$xt->assign("Density_fieldfootercolumn",true);
$xt->assign("Source_fieldheadercolumn",true);
$xt->assign("Source_fieldheader",true);
$xt->assign("Source_fieldcolumn",true);
$xt->assign("Source_fieldfootercolumn",true);
$xt->assign("SortOrder_fieldheadercolumn",true);
$xt->assign("SortOrder_fieldheader",true);
$xt->assign("SortOrder_fieldcolumn",true);
$xt->assign("SortOrder_fieldfootercolumn",true);
$xt->assign("ChangeType_fieldheadercolumn",true);
$xt->assign("ChangeType_fieldheader",true);
$xt->assign("ChangeType_fieldcolumn",true);
$xt->assign("ChangeType_fieldfootercolumn",true);
$xt->assign("ChangeDate_fieldheadercolumn",true);
$xt->assign("ChangeDate_fieldheader",true);
$xt->assign("ChangeDate_fieldcolumn",true);
$xt->assign("ChangeDate_fieldfootercolumn",true);
$xt->assign("ChangeTime_fieldheadercolumn",true);
$xt->assign("ChangeTime_fieldheader",true);
$xt->assign("ChangeTime_fieldcolumn",true);
$xt->assign("ChangeTime_fieldfootercolumn",true);
$xt->assign("SorOrder_fieldheadercolumn",true);
$xt->assign("SorOrder_fieldheader",true);
$xt->assign("SorOrder_fieldcolumn",true);
$xt->assign("SorOrder_fieldfootercolumn",true);

	$record_header=array("data"=>array());
	$record_footer=array("data"=>array());
	for($i=0;$i<$colsonpage;$i++)
	{
		$rheader=array();
		$rfooter=array();
		if($i<$colsonpage-1)
		{
			$rheader["endrecordheader_block"]=true;
			$rfooter["endrecordheader_block"]=true;
		}
		$record_header["data"][]=$rheader;
		$record_footer["data"][]=$rfooter;
	}
	$xt->assignbyref("record_header",$record_header);
	$xt->assignbyref("record_footer",$record_footer);
	$xt->assign("grid_header",true);
	$xt->assign("grid_footer",true);

if($eventObj->exists("BeforeShowPrint"))
	$eventObj->BeforeShowPrint($xt,$pageObject->templatefile, $pageObject);

if(!postvalue("pdf"))
	$xt->display($pageObject->templatefile);
else
{
	$xt->load_template($pageObject->templatefile);
	$page = $xt->fetch_loaded();
	$pagewidth=postvalue("width")*1.05;
	$pageheight=postvalue("height")*1.05;
	$landscape=false;
		if($pagewidth>$pageheight)
		{
			$landscape=true;
			if($pagewidth/$pageheight<297/210)
				$pagewidth = 297/210*$pageheight;
		}
		else
		{
			if($pagewidth/$pageheight<210/297)
				$pagewidth = 210/297*$pageheight;
		}
}
?>

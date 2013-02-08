<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("classes/searchclause.php");

add_nocache_headers();

include("include/costmodel_variables.php");

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
$layout->blocks["top"][] = "pdf";$page_layouts["costmodel_print"] = $layout;


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
			$keys["ProdGrpCode"]=refine($_REQUEST["mdelete1"][mdeleteIndex($ind)]);
			$selected_recs[]=$keys;
		}
	}
	elseif(@$_REQUEST["selection"])
	{
		foreach(@$_REQUEST["selection"] as $keyblock)
		{
			$arr=explode("&",refine($keyblock));
			if(count($arr)<1)
				continue;
			$keys=array();
			$keys["ProdGrpCode"]=urldecode($arr[0]);
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
$arr['fName'] = "ProdGrpCode";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ProdGrpCode");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Interest";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Interest");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Period";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Period");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "DownPay";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("DownPay");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "DaysWorked";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("DaysWorked");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Qty";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Qty");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "MonthsOfCap";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("MonthsOfCap");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Waste";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Waste");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Maint";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Maint");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Admin";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Admin");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Mgr";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Mgr");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Clerk";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Clerk");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Notes";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Notes");
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
			$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["ProdGrpCode"]));

//	ProdGrpCode - 
			$record["ProdGrpCode_value"] = $pageObject->showDBValue("ProdGrpCode", $data, $keylink);
			$record["ProdGrpCode_class"] = $pageObject->fieldClass("ProdGrpCode");
//	Interest - Number
			$record["Interest_value"] = $pageObject->showDBValue("Interest", $data, $keylink);
			$record["Interest_class"] = $pageObject->fieldClass("Interest");
//	Period - 
			$record["Period_value"] = $pageObject->showDBValue("Period", $data, $keylink);
			$record["Period_class"] = $pageObject->fieldClass("Period");
//	DownPay - Number
			$record["DownPay_value"] = $pageObject->showDBValue("DownPay", $data, $keylink);
			$record["DownPay_class"] = $pageObject->fieldClass("DownPay");
//	DaysWorked - 
			$record["DaysWorked_value"] = $pageObject->showDBValue("DaysWorked", $data, $keylink);
			$record["DaysWorked_class"] = $pageObject->fieldClass("DaysWorked");
//	Qty - 
			$record["Qty_value"] = $pageObject->showDBValue("Qty", $data, $keylink);
			$record["Qty_class"] = $pageObject->fieldClass("Qty");
//	MonthsOfCap - 
			$record["MonthsOfCap_value"] = $pageObject->showDBValue("MonthsOfCap", $data, $keylink);
			$record["MonthsOfCap_class"] = $pageObject->fieldClass("MonthsOfCap");
//	Waste - Number
			$record["Waste_value"] = $pageObject->showDBValue("Waste", $data, $keylink);
			$record["Waste_class"] = $pageObject->fieldClass("Waste");
//	Maint - Number
			$record["Maint_value"] = $pageObject->showDBValue("Maint", $data, $keylink);
			$record["Maint_class"] = $pageObject->fieldClass("Maint");
//	Admin - Number
			$record["Admin_value"] = $pageObject->showDBValue("Admin", $data, $keylink);
			$record["Admin_class"] = $pageObject->fieldClass("Admin");
//	Mgr - 
			$record["Mgr_value"] = $pageObject->showDBValue("Mgr", $data, $keylink);
			$record["Mgr_class"] = $pageObject->fieldClass("Mgr");
//	Clerk - 
			$record["Clerk_value"] = $pageObject->showDBValue("Clerk", $data, $keylink);
			$record["Clerk_class"] = $pageObject->fieldClass("Clerk");
//	Notes - 
			$record["Notes_value"] = $pageObject->showDBValue("Notes", $data, $keylink);
			$record["Notes_class"] = $pageObject->fieldClass("Notes");
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

$xt->assign("ProdGrpCode_fieldheadercolumn",true);
$xt->assign("ProdGrpCode_fieldheader",true);
$xt->assign("ProdGrpCode_fieldcolumn",true);
$xt->assign("ProdGrpCode_fieldfootercolumn",true);
$xt->assign("Interest_fieldheadercolumn",true);
$xt->assign("Interest_fieldheader",true);
$xt->assign("Interest_fieldcolumn",true);
$xt->assign("Interest_fieldfootercolumn",true);
$xt->assign("Period_fieldheadercolumn",true);
$xt->assign("Period_fieldheader",true);
$xt->assign("Period_fieldcolumn",true);
$xt->assign("Period_fieldfootercolumn",true);
$xt->assign("DownPay_fieldheadercolumn",true);
$xt->assign("DownPay_fieldheader",true);
$xt->assign("DownPay_fieldcolumn",true);
$xt->assign("DownPay_fieldfootercolumn",true);
$xt->assign("DaysWorked_fieldheadercolumn",true);
$xt->assign("DaysWorked_fieldheader",true);
$xt->assign("DaysWorked_fieldcolumn",true);
$xt->assign("DaysWorked_fieldfootercolumn",true);
$xt->assign("Qty_fieldheadercolumn",true);
$xt->assign("Qty_fieldheader",true);
$xt->assign("Qty_fieldcolumn",true);
$xt->assign("Qty_fieldfootercolumn",true);
$xt->assign("MonthsOfCap_fieldheadercolumn",true);
$xt->assign("MonthsOfCap_fieldheader",true);
$xt->assign("MonthsOfCap_fieldcolumn",true);
$xt->assign("MonthsOfCap_fieldfootercolumn",true);
$xt->assign("Waste_fieldheadercolumn",true);
$xt->assign("Waste_fieldheader",true);
$xt->assign("Waste_fieldcolumn",true);
$xt->assign("Waste_fieldfootercolumn",true);
$xt->assign("Maint_fieldheadercolumn",true);
$xt->assign("Maint_fieldheader",true);
$xt->assign("Maint_fieldcolumn",true);
$xt->assign("Maint_fieldfootercolumn",true);
$xt->assign("Admin_fieldheadercolumn",true);
$xt->assign("Admin_fieldheader",true);
$xt->assign("Admin_fieldcolumn",true);
$xt->assign("Admin_fieldfootercolumn",true);
$xt->assign("Mgr_fieldheadercolumn",true);
$xt->assign("Mgr_fieldheader",true);
$xt->assign("Mgr_fieldcolumn",true);
$xt->assign("Mgr_fieldfootercolumn",true);
$xt->assign("Clerk_fieldheadercolumn",true);
$xt->assign("Clerk_fieldheader",true);
$xt->assign("Clerk_fieldcolumn",true);
$xt->assign("Clerk_fieldfootercolumn",true);
$xt->assign("Notes_fieldheadercolumn",true);
$xt->assign("Notes_fieldheader",true);
$xt->assign("Notes_fieldcolumn",true);
$xt->assign("Notes_fieldfootercolumn",true);

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

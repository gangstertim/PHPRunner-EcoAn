<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("classes/searchclause.php");

add_nocache_headers();

include("include/prodcosts_variables.php");

CheckPermissionsEvent($strTableName, 'P');

$layout = new TLayout("print","FancyGreen1","MobileGreen1");
$layout->blocks["center"] = array();
$layout->containers["grid"] = array();

$layout->containers["grid"][] = array("name"=>"printgrid","block"=>"grid_block","substyle"=>1);


$layout->skins["grid"] = "empty";
$layout->blocks["center"][] = "grid";$layout->blocks["top"] = array();
$layout->containers["master"] = array();

$layout->containers["master"][] = array("name"=>"masterinfoprint","block"=>"mastertable_block","substyle"=>1);


$layout->skins["master"] = "empty";
$layout->blocks["top"][] = "master";
$layout->skins["pdf"] = "empty";
$layout->blocks["top"][] = "pdf";$page_layouts["prodcosts_print"] = $layout;


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
$arr['fName'] = "ProdGrpCode";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ProdGrpCode");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Status";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Status");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ProdNo";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ProdNo");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "CostType";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("CostType");
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
$arr['fName'] = "Qtty";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Qtty");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "PieceCost";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("PieceCost");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "SortOrder";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("SortOrder");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Cost";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Cost");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "UnitEngRpt";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("UnitEngRpt");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "UnitThaiRpt";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("UnitThaiRpt");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "CompPurchaseUnitEn";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("CompPurchaseUnitEn");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "CostYear";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("CostYear");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "CostMonth";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("CostMonth");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "PercentCost";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("PercentCost");
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

//	ProdGrpCode - 
			$record["ProdGrpCode_value"] = $pageObject->showDBValue("ProdGrpCode", $data, $keylink);
			$record["ProdGrpCode_class"] = $pageObject->fieldClass("ProdGrpCode");
//	Status - 
			$record["Status_value"] = $pageObject->showDBValue("Status", $data, $keylink);
			$record["Status_class"] = $pageObject->fieldClass("Status");
//	ProdNo - 
			$record["ProdNo_value"] = $pageObject->showDBValue("ProdNo", $data, $keylink);
			$record["ProdNo_class"] = $pageObject->fieldClass("ProdNo");
//	CostType - 
			$record["CostType_value"] = $pageObject->showDBValue("CostType", $data, $keylink);
			$record["CostType_class"] = $pageObject->fieldClass("CostType");
//	EngName - 
			$record["EngName_value"] = $pageObject->showDBValue("EngName", $data, $keylink);
			$record["EngName_class"] = $pageObject->fieldClass("EngName");
//	ThaiName - 
			$record["ThaiName_value"] = $pageObject->showDBValue("ThaiName", $data, $keylink);
			$record["ThaiName_class"] = $pageObject->fieldClass("ThaiName");
//	Qtty - Number
			$record["Qtty_value"] = $pageObject->showDBValue("Qtty", $data, $keylink);
			$record["Qtty_class"] = $pageObject->fieldClass("Qtty");
//	PieceCost - Number
			$record["PieceCost_value"] = $pageObject->showDBValue("PieceCost", $data, $keylink);
			$record["PieceCost_class"] = $pageObject->fieldClass("PieceCost");
//	SortOrder - 
			$record["SortOrder_value"] = $pageObject->showDBValue("SortOrder", $data, $keylink);
			$record["SortOrder_class"] = $pageObject->fieldClass("SortOrder");
//	Cost - Number
			$record["Cost_value"] = $pageObject->showDBValue("Cost", $data, $keylink);
			$record["Cost_class"] = $pageObject->fieldClass("Cost");
//	UnitEngRpt - 
			$record["UnitEngRpt_value"] = $pageObject->showDBValue("UnitEngRpt", $data, $keylink);
			$record["UnitEngRpt_class"] = $pageObject->fieldClass("UnitEngRpt");
//	UnitThaiRpt - 
			$record["UnitThaiRpt_value"] = $pageObject->showDBValue("UnitThaiRpt", $data, $keylink);
			$record["UnitThaiRpt_class"] = $pageObject->fieldClass("UnitThaiRpt");
//	CompPurchaseUnitEn - 
			$record["CompPurchaseUnitEn_value"] = $pageObject->showDBValue("CompPurchaseUnitEn", $data, $keylink);
			$record["CompPurchaseUnitEn_class"] = $pageObject->fieldClass("CompPurchaseUnitEn");
//	CostYear - Number
			$record["CostYear_value"] = $pageObject->showDBValue("CostYear", $data, $keylink);
			$record["CostYear_class"] = $pageObject->fieldClass("CostYear");
//	CostMonth - Number
			$record["CostMonth_value"] = $pageObject->showDBValue("CostMonth", $data, $keylink);
			$record["CostMonth_class"] = $pageObject->fieldClass("CostMonth");
//	PercentCost - Number
			$record["PercentCost_value"] = $pageObject->showDBValue("PercentCost", $data, $keylink);
			$record["PercentCost_class"] = $pageObject->fieldClass("PercentCost");
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

	
//	display master table info
$mastertable = $_SESSION[$strTableName."_mastertable"];
$masterkeys = array();

if($mastertable == "products")
{
//	include proper masterprint.php code
	include("include/products_masterprint.php");
	$masterkeys[] = @$_SESSION[$strTableName."_masterkey1"];
	$params = array("detailtable"=>"prodcosts","keys"=>$masterkeys);
	$master = array();
	$master["func"] = "DisplayMasterTableInfo_products";
	$master["params"] = $params;
	$xt->assignbyref("showmasterfile",$master);
	$xt->assign("mastertable_block",true);
	$layout = new TLayout("masterprint","FancyGreen1","MobileGreen1");
$layout->blocks["bare"] = array();
$layout->containers["0"] = array();

$layout->containers["0"][] = array("name"=>"masterprintheader","block"=>"","substyle"=>1);


$layout->skins["0"] = "empty";
$layout->blocks["bare"][] = "0";
$layout->containers["mastergrid"] = array();

$layout->containers["mastergrid"][] = array("name"=>"masterprintfields","block"=>"","substyle"=>1);


$layout->skins["mastergrid"] = "grid";
$layout->blocks["bare"][] = "mastergrid";$page_layouts["products_masterprint"] = $layout;

	$layout = GetPageLayout("products", 'masterprint');
	if($layout)
	{
		$rtl = $pageObject->xt->getReadingOrder() == 'RTL' ? 'RTL' : '';
		$xt->cssFiles[] = array("stylepath" => "styles/".$layout->style.'/style'.$rtl.".css"
			, "pagestylepath" => "pagestyles/".$layout->name.$rtl.".css");
		$xt->IEcssFiles[] = array("stylepathIE" => "styles/".$layout->style.'/styleIE'.".css");
	}	
}

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
$xt->assign("Status_fieldheadercolumn",true);
$xt->assign("Status_fieldheader",true);
$xt->assign("Status_fieldcolumn",true);
$xt->assign("Status_fieldfootercolumn",true);
$xt->assign("ProdNo_fieldheadercolumn",true);
$xt->assign("ProdNo_fieldheader",true);
$xt->assign("ProdNo_fieldcolumn",true);
$xt->assign("ProdNo_fieldfootercolumn",true);
$xt->assign("CostType_fieldheadercolumn",true);
$xt->assign("CostType_fieldheader",true);
$xt->assign("CostType_fieldcolumn",true);
$xt->assign("CostType_fieldfootercolumn",true);
$xt->assign("EngName_fieldheadercolumn",true);
$xt->assign("EngName_fieldheader",true);
$xt->assign("EngName_fieldcolumn",true);
$xt->assign("EngName_fieldfootercolumn",true);
$xt->assign("ThaiName_fieldheadercolumn",true);
$xt->assign("ThaiName_fieldheader",true);
$xt->assign("ThaiName_fieldcolumn",true);
$xt->assign("ThaiName_fieldfootercolumn",true);
$xt->assign("Qtty_fieldheadercolumn",true);
$xt->assign("Qtty_fieldheader",true);
$xt->assign("Qtty_fieldcolumn",true);
$xt->assign("Qtty_fieldfootercolumn",true);
$xt->assign("PieceCost_fieldheadercolumn",true);
$xt->assign("PieceCost_fieldheader",true);
$xt->assign("PieceCost_fieldcolumn",true);
$xt->assign("PieceCost_fieldfootercolumn",true);
$xt->assign("SortOrder_fieldheadercolumn",true);
$xt->assign("SortOrder_fieldheader",true);
$xt->assign("SortOrder_fieldcolumn",true);
$xt->assign("SortOrder_fieldfootercolumn",true);
$xt->assign("Cost_fieldheadercolumn",true);
$xt->assign("Cost_fieldheader",true);
$xt->assign("Cost_fieldcolumn",true);
$xt->assign("Cost_fieldfootercolumn",true);
$xt->assign("UnitEngRpt_fieldheadercolumn",true);
$xt->assign("UnitEngRpt_fieldheader",true);
$xt->assign("UnitEngRpt_fieldcolumn",true);
$xt->assign("UnitEngRpt_fieldfootercolumn",true);
$xt->assign("UnitThaiRpt_fieldheadercolumn",true);
$xt->assign("UnitThaiRpt_fieldheader",true);
$xt->assign("UnitThaiRpt_fieldcolumn",true);
$xt->assign("UnitThaiRpt_fieldfootercolumn",true);
$xt->assign("CompPurchaseUnitEn_fieldheadercolumn",true);
$xt->assign("CompPurchaseUnitEn_fieldheader",true);
$xt->assign("CompPurchaseUnitEn_fieldcolumn",true);
$xt->assign("CompPurchaseUnitEn_fieldfootercolumn",true);
$xt->assign("CostYear_fieldheadercolumn",true);
$xt->assign("CostYear_fieldheader",true);
$xt->assign("CostYear_fieldcolumn",true);
$xt->assign("CostYear_fieldfootercolumn",true);
$xt->assign("CostMonth_fieldheadercolumn",true);
$xt->assign("CostMonth_fieldheader",true);
$xt->assign("CostMonth_fieldcolumn",true);
$xt->assign("CostMonth_fieldfootercolumn",true);
$xt->assign("PercentCost_fieldheadercolumn",true);
$xt->assign("PercentCost_fieldheader",true);
$xt->assign("PercentCost_fieldcolumn",true);
$xt->assign("PercentCost_fieldfootercolumn",true);

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

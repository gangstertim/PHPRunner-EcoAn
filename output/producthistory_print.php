<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("classes/searchclause.php");

add_nocache_headers();

include("include/producthistory_variables.php");

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
$layout->blocks["top"][] = "pdf";$page_layouts["producthistory_print"] = $layout;


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
// Picture
$noBlobReplace = true;
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
$arr['fName'] = "ProdNo";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ProdNo");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ProdGrpCode";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ProdGrpCode");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ProdThaiName";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ProdThaiName");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ProdEngName";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ProdEngName");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Picture";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Picture");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ThaiModel";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ThaiModel");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "EngModel";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("EngModel");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "MixNo";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("MixNo");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ProdWt";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ProdWt");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ColorMixNo";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ColorMixNo");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "FaceWt";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("FaceWt");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Mold";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Mold");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "PiecesPerMould";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("PiecesPerMould");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ProductCost";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ProductCost");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "PriceRetail";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("PriceRetail");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "PriceWholeSale";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("PriceWholeSale");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ProdStockGoal";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ProdStockGoal");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ThaiCom";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ThaiCom");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "EngCom";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("EngCom");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Status";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Status");
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

//	ProdNo - 
			$record["ProdNo_value"] = $pageObject->showDBValue("ProdNo", $data, $keylink);
			$record["ProdNo_class"] = $pageObject->fieldClass("ProdNo");
//	ProdGrpCode - 
			$record["ProdGrpCode_value"] = $pageObject->showDBValue("ProdGrpCode", $data, $keylink);
			$record["ProdGrpCode_class"] = $pageObject->fieldClass("ProdGrpCode");
//	ProdThaiName - 
			$record["ProdThaiName_value"] = $pageObject->showDBValue("ProdThaiName", $data, $keylink);
			$record["ProdThaiName_class"] = $pageObject->fieldClass("ProdThaiName");
//	ProdEngName - 
			$record["ProdEngName_value"] = $pageObject->showDBValue("ProdEngName", $data, $keylink);
			$record["ProdEngName_class"] = $pageObject->fieldClass("ProdEngName");
//	Picture - Database Image
			$record["Picture_value"] = $pageObject->showDBValue("Picture", $data, $keylink);
			$record["Picture_class"] = $pageObject->fieldClass("Picture");
//	ThaiModel - 
			$record["ThaiModel_value"] = $pageObject->showDBValue("ThaiModel", $data, $keylink);
			$record["ThaiModel_class"] = $pageObject->fieldClass("ThaiModel");
//	EngModel - 
			$record["EngModel_value"] = $pageObject->showDBValue("EngModel", $data, $keylink);
			$record["EngModel_class"] = $pageObject->fieldClass("EngModel");
//	MixNo - 
			$record["MixNo_value"] = $pageObject->showDBValue("MixNo", $data, $keylink);
			$record["MixNo_class"] = $pageObject->fieldClass("MixNo");
//	ProdWt - Number
			$record["ProdWt_value"] = $pageObject->showDBValue("ProdWt", $data, $keylink);
			$record["ProdWt_class"] = $pageObject->fieldClass("ProdWt");
//	ColorMixNo - 
			$record["ColorMixNo_value"] = $pageObject->showDBValue("ColorMixNo", $data, $keylink);
			$record["ColorMixNo_class"] = $pageObject->fieldClass("ColorMixNo");
//	FaceWt - Number
			$record["FaceWt_value"] = $pageObject->showDBValue("FaceWt", $data, $keylink);
			$record["FaceWt_class"] = $pageObject->fieldClass("FaceWt");
//	Mold - Number
			$record["Mold_value"] = $pageObject->showDBValue("Mold", $data, $keylink);
			$record["Mold_class"] = $pageObject->fieldClass("Mold");
//	PiecesPerMould - 
			$record["PiecesPerMould_value"] = $pageObject->showDBValue("PiecesPerMould", $data, $keylink);
			$record["PiecesPerMould_class"] = $pageObject->fieldClass("PiecesPerMould");
//	ProductCost - Number
			$record["ProductCost_value"] = $pageObject->showDBValue("ProductCost", $data, $keylink);
			$record["ProductCost_class"] = $pageObject->fieldClass("ProductCost");
//	PriceRetail - Number
			$record["PriceRetail_value"] = $pageObject->showDBValue("PriceRetail", $data, $keylink);
			$record["PriceRetail_class"] = $pageObject->fieldClass("PriceRetail");
//	PriceWholeSale - Number
			$record["PriceWholeSale_value"] = $pageObject->showDBValue("PriceWholeSale", $data, $keylink);
			$record["PriceWholeSale_class"] = $pageObject->fieldClass("PriceWholeSale");
//	ProdStockGoal - 
			$record["ProdStockGoal_value"] = $pageObject->showDBValue("ProdStockGoal", $data, $keylink);
			$record["ProdStockGoal_class"] = $pageObject->fieldClass("ProdStockGoal");
//	ThaiCom - 
			$record["ThaiCom_value"] = $pageObject->showDBValue("ThaiCom", $data, $keylink);
			$record["ThaiCom_class"] = $pageObject->fieldClass("ThaiCom");
//	EngCom - 
			$record["EngCom_value"] = $pageObject->showDBValue("EngCom", $data, $keylink);
			$record["EngCom_class"] = $pageObject->fieldClass("EngCom");
//	Status - 
			$record["Status_value"] = $pageObject->showDBValue("Status", $data, $keylink);
			$record["Status_class"] = $pageObject->fieldClass("Status");
//	ChangeType - 
			$record["ChangeType_value"] = $pageObject->showDBValue("ChangeType", $data, $keylink);
			$record["ChangeType_class"] = $pageObject->fieldClass("ChangeType");
//	ChangeDate - Short Date
			$record["ChangeDate_value"] = $pageObject->showDBValue("ChangeDate", $data, $keylink);
			$record["ChangeDate_class"] = $pageObject->fieldClass("ChangeDate");
//	ChangeTime - Time
			$record["ChangeTime_value"] = $pageObject->showDBValue("ChangeTime", $data, $keylink);
			$record["ChangeTime_class"] = $pageObject->fieldClass("ChangeTime");
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

$xt->assign("ProdNo_fieldheadercolumn",true);
$xt->assign("ProdNo_fieldheader",true);
$xt->assign("ProdNo_fieldcolumn",true);
$xt->assign("ProdNo_fieldfootercolumn",true);
$xt->assign("ProdGrpCode_fieldheadercolumn",true);
$xt->assign("ProdGrpCode_fieldheader",true);
$xt->assign("ProdGrpCode_fieldcolumn",true);
$xt->assign("ProdGrpCode_fieldfootercolumn",true);
$xt->assign("ProdThaiName_fieldheadercolumn",true);
$xt->assign("ProdThaiName_fieldheader",true);
$xt->assign("ProdThaiName_fieldcolumn",true);
$xt->assign("ProdThaiName_fieldfootercolumn",true);
$xt->assign("ProdEngName_fieldheadercolumn",true);
$xt->assign("ProdEngName_fieldheader",true);
$xt->assign("ProdEngName_fieldcolumn",true);
$xt->assign("ProdEngName_fieldfootercolumn",true);
$xt->assign("Picture_fieldheadercolumn",true);
$xt->assign("Picture_fieldheader",true);
$xt->assign("Picture_fieldcolumn",true);
$xt->assign("Picture_fieldfootercolumn",true);
$xt->assign("ThaiModel_fieldheadercolumn",true);
$xt->assign("ThaiModel_fieldheader",true);
$xt->assign("ThaiModel_fieldcolumn",true);
$xt->assign("ThaiModel_fieldfootercolumn",true);
$xt->assign("EngModel_fieldheadercolumn",true);
$xt->assign("EngModel_fieldheader",true);
$xt->assign("EngModel_fieldcolumn",true);
$xt->assign("EngModel_fieldfootercolumn",true);
$xt->assign("MixNo_fieldheadercolumn",true);
$xt->assign("MixNo_fieldheader",true);
$xt->assign("MixNo_fieldcolumn",true);
$xt->assign("MixNo_fieldfootercolumn",true);
$xt->assign("ProdWt_fieldheadercolumn",true);
$xt->assign("ProdWt_fieldheader",true);
$xt->assign("ProdWt_fieldcolumn",true);
$xt->assign("ProdWt_fieldfootercolumn",true);
$xt->assign("ColorMixNo_fieldheadercolumn",true);
$xt->assign("ColorMixNo_fieldheader",true);
$xt->assign("ColorMixNo_fieldcolumn",true);
$xt->assign("ColorMixNo_fieldfootercolumn",true);
$xt->assign("FaceWt_fieldheadercolumn",true);
$xt->assign("FaceWt_fieldheader",true);
$xt->assign("FaceWt_fieldcolumn",true);
$xt->assign("FaceWt_fieldfootercolumn",true);
$xt->assign("Mold_fieldheadercolumn",true);
$xt->assign("Mold_fieldheader",true);
$xt->assign("Mold_fieldcolumn",true);
$xt->assign("Mold_fieldfootercolumn",true);
$xt->assign("PiecesPerMould_fieldheadercolumn",true);
$xt->assign("PiecesPerMould_fieldheader",true);
$xt->assign("PiecesPerMould_fieldcolumn",true);
$xt->assign("PiecesPerMould_fieldfootercolumn",true);
$xt->assign("ProductCost_fieldheadercolumn",true);
$xt->assign("ProductCost_fieldheader",true);
$xt->assign("ProductCost_fieldcolumn",true);
$xt->assign("ProductCost_fieldfootercolumn",true);
$xt->assign("PriceRetail_fieldheadercolumn",true);
$xt->assign("PriceRetail_fieldheader",true);
$xt->assign("PriceRetail_fieldcolumn",true);
$xt->assign("PriceRetail_fieldfootercolumn",true);
$xt->assign("PriceWholeSale_fieldheadercolumn",true);
$xt->assign("PriceWholeSale_fieldheader",true);
$xt->assign("PriceWholeSale_fieldcolumn",true);
$xt->assign("PriceWholeSale_fieldfootercolumn",true);
$xt->assign("ProdStockGoal_fieldheadercolumn",true);
$xt->assign("ProdStockGoal_fieldheader",true);
$xt->assign("ProdStockGoal_fieldcolumn",true);
$xt->assign("ProdStockGoal_fieldfootercolumn",true);
$xt->assign("ThaiCom_fieldheadercolumn",true);
$xt->assign("ThaiCom_fieldheader",true);
$xt->assign("ThaiCom_fieldcolumn",true);
$xt->assign("ThaiCom_fieldfootercolumn",true);
$xt->assign("EngCom_fieldheadercolumn",true);
$xt->assign("EngCom_fieldheader",true);
$xt->assign("EngCom_fieldcolumn",true);
$xt->assign("EngCom_fieldfootercolumn",true);
$xt->assign("Status_fieldheadercolumn",true);
$xt->assign("Status_fieldheader",true);
$xt->assign("Status_fieldcolumn",true);
$xt->assign("Status_fieldfootercolumn",true);
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

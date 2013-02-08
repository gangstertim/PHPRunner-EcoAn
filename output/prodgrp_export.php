<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");
include("include/dbcommon.php");
include("classes/searchclause.php");
session_cache_limiter("none");

include("include/prodgrp_variables.php");

CheckPermissionsEvent($strTableName, 'P');

$layout = new TLayout("export","FancyGreen1","MobileGreen1");
$layout->blocks["top"] = array();
$layout->containers["export"] = array();

$layout->containers["export"][] = array("name"=>"exportheader","block"=>"","substyle"=>2);


$layout->containers["export"][] = array("name"=>"exprange_header","block"=>"rangeheader_block","substyle"=>3);


$layout->containers["export"][] = array("name"=>"exprange","block"=>"range_block","substyle"=>1);


$layout->containers["export"][] = array("name"=>"expoutput_header","block"=>"","substyle"=>3);


$layout->containers["export"][] = array("name"=>"expoutput","block"=>"","substyle"=>1);


$layout->containers["export"][] = array("name"=>"expbuttons","block"=>"","substyle"=>2);


$layout->skins["export"] = "fields";
$layout->blocks["top"][] = "export";$page_layouts["prodgrp_export"] = $layout;


// Modify query: remove blob fields from fieldlist.
// Blob fields on an export page are shown using imager.php (for example).
// They don't need to be selected from DB in export.php itself.
//$gQuery->ReplaceFieldsWithDummies(GetBinaryFieldsIndices());

$cipherer = new RunnerCipherer($strTableName);

$strWhereClause = "";
$strHavingClause = "";
$strSearchCriteria = "and";
$selected_recs = array();
$options = "1";

header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 
include('include/xtempl.php');
include('classes/runnerpage.php');
$xt = new Xtempl();
$id = postvalue("id") != "" ? postvalue("id") : 1;

$phpVersion = (int)substr(phpversion(), 0, 1); 
if($phpVersion > 4)
{
	include("include/export_functions.php");
	$xt->assign("groupExcel", true);
}
else
	$xt->assign("excel", true);

//array of params for classes
$params = array("pageType" => PAGE_EXPORT, "id" => $id, "tName" => $strTableName);
$params["xt"] = &$xt;
if(!$eventObj->exists("ListGetRowCount") && !$eventObj->exists("ListQuery"))
	$params["needSearchClauseObj"] = false;
$pageObject = new RunnerPage($params);

//	Before Process event
if($eventObj->exists("BeforeProcessExport"))
	$eventObj->BeforeProcessExport($conn, $pageObject);

if (@$_REQUEST["a"]!="")
{
	$options = "";
	$sWhere = "1=0";	

//	process selection
	$selected_recs = array();
	if (@$_REQUEST["mdelete"])
	{
		foreach(@$_REQUEST["mdelete"] as $ind)
		{
			$keys=array();
			$selected_recs[] = $keys;
		}
	}
	elseif(@$_REQUEST["selection"])
	{
		foreach(@$_REQUEST["selection"] as $keyblock)
		{
			$arr=explode("&",refine($keyblock));
			if(count($arr)<0)
				continue;
			$keys = array();
			$selected_recs[] = $keys;
		}
	}

	foreach($selected_recs as $keys)
	{
		$sWhere = $sWhere . " or ";
		$sWhere.=KeyWhere($keys);
	}


	$strSQL = $gQuery->gSQLWhere($sWhere);
	$strWhereClause=$sWhere;
	
	$_SESSION[$strTableName."_SelectedSQL"] = $strSQL;
	$_SESSION[$strTableName."_SelectedWhere"] = $sWhere;
	$_SESSION[$strTableName."_SelectedRecords"] = $selected_recs;
}

if ($_SESSION[$strTableName."_SelectedSQL"]!="" && @$_REQUEST["records"]=="") 
{
	$strSQL = $_SESSION[$strTableName."_SelectedSQL"];
	$strWhereClause = @$_SESSION[$strTableName."_SelectedWhere"];
	$selected_recs = $_SESSION[$strTableName."_SelectedRecords"];
}
else
{
	$strWhereClause = @$_SESSION[$strTableName."_where"];
	$strHavingClause = @$_SESSION[$strTableName."_having"];
	$strSearchCriteria = @$_SESSION[$strTableName."_criteria"];
	$strSQL = $gQuery->gSQLWhere($strWhereClause, $strHavingClause, $strSearchCriteria);
}

$mypage = 1;
if(@$_REQUEST["type"])
{
//	order by
	$strOrderBy = $_SESSION[$strTableName."_order"];
	if(!$strOrderBy)
		$strOrderBy = $gstrOrderBy;
	$strSQL.=" ".trim($strOrderBy);

	$strSQLbak = $strSQL;
	if($eventObj->exists("BeforeQueryExport"))
		$eventObj->BeforeQueryExport($strSQL,$strWhereClause,$strOrderBy, $pageObject);
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
				$masterKeysReq[] = $_SESSION[$strTableName."_masterkey".($i + 1)];
			$rowcount = $eventObj->ListGetRowCount($pageObject->searchClauseObj,$_SESSION[$strTableName."_mastertable"],$masterKeysReq,$selected_recs, $pageObject);
		}
		if($rowcount !== false)
			$numrows = $rowcount;
		else
			$numrows = $gQuery->gSQLRowCount($strWhereClause,$strHavingClause,$strSearchCriteria);
	}
	LogInfo($strSQL);

//	 Pagination:

	$nPageSize = 0;
	if(@$_REQUEST["records"]=="page" && $numrows)
	{
		$mypage = (integer)@$_SESSION[$strTableName."_pagenumber"];
		$nPageSize = (integer)@$_SESSION[$strTableName."_pagesize"];
		
		if(!$nPageSize)
			$nPageSize = $gSettings->getInitialPageSize();
				
		if($nPageSize<0)
			$nPageSize = 0;
			
		if($nPageSize>0)
		{
			if($numrows<=($mypage-1)*$nPageSize)
				$mypage = ceil($numrows/$nPageSize);
		
			if(!$mypage)
				$mypage = 1;
			
					$strSQL.=" limit ".(($mypage-1)*$nPageSize).",".$nPageSize;
		}
	}
	$listarray = false;
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
		$listarray = $eventObj->ListQuery($pageObject->searchClauseObj, $arrFieldForSort, $arrHowFieldSort,
			$_SESSION[$strTableName."_mastertable"], $masterKeysReq, $selected_recs, $nPageSize, $mypage, $pageObject);
	}
	if($listarray!==false)
		$rs = $listarray;
	elseif($nPageSize>0)
	{
					$rs = db_query($strSQL,$conn);
	}
	else
		$rs = db_query($strSQL,$conn);

	if(!ini_get("safe_mode"))
		set_time_limit(300);
	
	if(substr(@$_REQUEST["type"],0,5)=="excel")
	{
//	remove grouping
		$locale_info["LOCALE_SGROUPING"]="0";
		$locale_info["LOCALE_SMONGROUPING"]="0";
				if($phpVersion > 4)
			ExportToExcel($cipherer, $pageObject);
		else
			ExportToExcel_old($cipherer);
	}
	else if(@$_REQUEST["type"]=="word")
	{
		ExportToWord($cipherer);
	}
	else if(@$_REQUEST["type"]=="xml")
	{
		ExportToXML($cipherer);
	}
	else if(@$_REQUEST["type"]=="csv")
	{
		$locale_info["LOCALE_SGROUPING"]="0";
		$locale_info["LOCALE_SDECIMAL"]=".";
		$locale_info["LOCALE_SMONGROUPING"]="0";
		$locale_info["LOCALE_SMONDECIMALSEP"]=".";
		ExportToCSV($cipherer);
	}
	db_close($conn);
	return;
}

// add button events if exist
$pageObject->addButtonHandlers();

if($options)
{
	$xt->assign("rangeheader_block",true);
	$xt->assign("range_block",true);
}

$xt->assign("exportlink_attrs", 'id="saveButton'.$pageObject->id.'"');

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

$pageObject->body["end"] .= "<script>".$pageObject->PrepareJS()."</script>";
$xt->assignbyref("body",$pageObject->body);

$xt->display("prodgrp_export.htm");

function ExportToExcel_old($cipherer)
{
	global $cCharset;
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment;Filename=prodgrp.xls");

	echo "<html>";
	echo "<html xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns:x=\"urn:schemas-microsoft-com:office:excel\" xmlns=\"http://www.w3.org/TR/REC-html40\">";
	
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$cCharset."\">";
	echo "<body>";
	echo "<table border=1>";

	WriteTableData($cipherer);

	echo "</table>";
	echo "</body>";
	echo "</html>";
}

function ExportToWord($cipherer)
{
	global $cCharset;
	header("Content-Type: application/vnd.ms-word");
	header("Content-Disposition: attachment;Filename=prodgrp.doc");

	echo "<html>";
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$cCharset."\">";
	echo "<body>";
	echo "<table border=1>";

	WriteTableData($cipherer);

	echo "</table>";
	echo "</body>";
	echo "</html>";
}

function ExportToXML($cipherer)
{
	global $nPageSize,$rs,$strTableName,$conn,$eventObj, $pageObject;
	header("Content-Type: text/xml");
	header("Content-Disposition: attachment;Filename=prodgrp.xml");
	if($eventObj->exists("ListFetchArray"))
		$row = $eventObj->ListFetchArray($rs, $pageObject);
	else
		$row = $cipherer->DecryptFetchedArray($rs);	
	//if(!$row)
	//	return;
		
	global $cCharset;
	
	echo "<?xml version=\"1.0\" encoding=\"".$cCharset."\" standalone=\"yes\"?>\r\n";
	echo "<table>\r\n";
	$i = 0;
	$pageObject->viewControls->forExport = "xml";
	while((!$nPageSize || $i<$nPageSize) && $row)
	{
		$values = array();
			$values["ProdGrpCode"] = $pageObject->showDBValue("ProdGrpCode", $row);
			$values["ThaiProductGroup"] = $pageObject->showDBValue("ThaiProductGroup", $row);
			$values["EngProductGroup"] = $pageObject->showDBValue("EngProductGroup", $row);
			$values["MarkDownWholesale"] = $pageObject->showDBValue("MarkDownWholesale", $row);
			$values["MarkDownRetail"] = $pageObject->showDBValue("MarkDownRetail", $row);
			$values["DaysWorked"] = $pageObject->showDBValue("DaysWorked", $row);
			$values["NumberWorkers"] = $pageObject->showDBValue("NumberWorkers", $row);
			$values["QtyMolds"] = $pageObject->showDBValue("QtyMolds", $row);
			$values["MouldsPerDay"] = $pageObject->showDBValue("MouldsPerDay", $row);
			$values["Interest"] = $pageObject->showDBValue("Interest", $row);
			$values["Period"] = $pageObject->showDBValue("Period", $row);
			$values["DownPay"] = $pageObject->showDBValue("DownPay", $row);
			$values["MonthsOfCap"] = $pageObject->showDBValue("MonthsOfCap", $row);
			$values["Waste"] = $pageObject->showDBValue("Waste", $row);
			$values["Maint"] = $pageObject->showDBValue("Maint", $row);
			$values["ItemNotes"] = $pageObject->showDBValue("ItemNotes", $row);
			$values["CuringTime"] = $pageObject->showDBValue("CuringTime", $row);
			$values["GAP"] = $pageObject->showDBValue("GAP", $row);
		
		$eventRes = true;
		if ($eventObj->exists('BeforeOut'))
			$eventRes = $eventObj->BeforeOut($row, $values, $pageObject);
		
		if ($eventRes)
		{
			$i++;
			echo "<row>\r\n";
			foreach ($values as $fName => $val)
			{
				$field = htmlspecialchars(XMLNameEncode($fName));
				echo "<".$field.">";
				echo $values[$fName];
				echo "</".$field.">\r\n";
			}
			echo "</row>\r\n";
		}
		
		
		if($eventObj->exists("ListFetchArray"))
			$row = $eventObj->ListFetchArray($rs, $pageObject);
		else
			$row = $cipherer->DecryptFetchedArray($rs);
	}
	echo "</table>\r\n";
}

function ExportToCSV($cipherer)
{
	global $rs,$nPageSize,$strTableName,$conn,$eventObj, $pageObject;
	header("Content-Type: application/csv");
	header("Content-Disposition: attachment;Filename=prodgrp.csv");
	
	if($eventObj->exists("ListFetchArray"))
		$row = $eventObj->ListFetchArray($rs, $pageObject);
	else
		$row = $cipherer->DecryptFetchedArray($rs);

// write header
	$outstr = "";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"ProdGrpCode\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"ThaiProductGroup\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"EngProductGroup\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"MarkDownWholesale\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"MarkDownRetail\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"DaysWorked\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"NumberWorkers\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"QtyMolds\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"MouldsPerDay\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Interest\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Period\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"DownPay\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"MonthsOfCap\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Waste\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"Maint\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"ItemNotes\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"CuringTime\"";
	if($outstr!="")
		$outstr.=",";
	$outstr.= "\"GAP\"";
	echo $outstr;
	echo "\r\n";

// write data rows
	$iNumberOfRows = 0;
	$pageObject->viewControls->forExport = "csv";
	while((!$nPageSize || $iNumberOfRows < $nPageSize) && $row)
	{
		$values = array();
			$values["ProdGrpCode"] = $pageObject->getViewControl("ProdGrpCode")->showDBValue($row, "");
			$values["ThaiProductGroup"] = $pageObject->getViewControl("ThaiProductGroup")->showDBValue($row, "");
			$values["EngProductGroup"] = $pageObject->getViewControl("EngProductGroup")->showDBValue($row, "");
			$values["MarkDownWholesale"] = $row["MarkDownWholesale"];
			$values["MarkDownRetail"] = $row["MarkDownRetail"];
			$values["DaysWorked"] = $pageObject->getViewControl("DaysWorked")->showDBValue($row, "");
			$values["NumberWorkers"] = $pageObject->getViewControl("NumberWorkers")->showDBValue($row, "");
			$values["QtyMolds"] = $pageObject->getViewControl("QtyMolds")->showDBValue($row, "");
			$values["MouldsPerDay"] = $pageObject->getViewControl("MouldsPerDay")->showDBValue($row, "");
			$values["Interest"] = $row["Interest"];
			$values["Period"] = $pageObject->getViewControl("Period")->showDBValue($row, "");
			$values["DownPay"] = $row["DownPay"];
			$values["MonthsOfCap"] = $pageObject->getViewControl("MonthsOfCap")->showDBValue($row, "");
			$values["Waste"] = $row["Waste"];
			$values["Maint"] = $row["Maint"];
			$values["ItemNotes"] = $pageObject->getViewControl("ItemNotes")->showDBValue($row, "");
			$values["CuringTime"] = $pageObject->getViewControl("CuringTime")->showDBValue($row, "");
			$values["GAP"] = $row["GAP"];

		$eventRes = true;
		if ($eventObj->exists('BeforeOut'))
		{
			$eventRes = $eventObj->BeforeOut($row,$values, $pageObject);
		}
		if ($eventRes)
		{
			$outstr="";
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["ProdGrpCode"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["ThaiProductGroup"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["EngProductGroup"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["MarkDownWholesale"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["MarkDownRetail"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["DaysWorked"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["NumberWorkers"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["QtyMolds"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["MouldsPerDay"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Interest"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Period"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["DownPay"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["MonthsOfCap"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Waste"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["Maint"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["ItemNotes"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["CuringTime"]).'"';
			if($outstr!="")
				$outstr.=",";
			$outstr.='"'.str_replace('"', '""', $values["GAP"]).'"';
			echo $outstr;
		}
		
		$iNumberOfRows++;
		if($eventObj->exists("ListFetchArray"))
			$row = $eventObj->ListFetchArray($rs, $pageObject);
		else
			$row = $cipherer->DecryptFetchedArray($rs);
			
		if(((!$nPageSize || $iNumberOfRows<$nPageSize) && $row) && $eventRes)
			echo "\r\n";
	}
}

function WriteTableData($cipherer)
{
	global $rs,$nPageSize,$strTableName,$conn,$eventObj, $pageObject;
	
	if($eventObj->exists("ListFetchArray"))
		$row = $eventObj->ListFetchArray($rs, $pageObject);
	else
		$row = $cipherer->DecryptFetchedArray($rs);
//	if(!$row)
//		return;
// write header
	echo "<tr>";
	if($_REQUEST["type"]=="excel")
	{
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Prod Grp Code").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Thai Product Group").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Eng Product Group").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Mark Down Wholesale").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Mark Down Retail").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Days Worked").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Number Workers").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Qty Molds").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Moulds Per Day").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Interest").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Period").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Down Pay").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Months Of Cap").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Waste").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Maint").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Item Notes").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("Curing Time").'</td>';	
		echo '<td style="width: 100" x:str>'.PrepareForExcel("GAP").'</td>';	
	}
	else
	{
		echo "<td>"."Prod Grp Code"."</td>";
		echo "<td>"."Thai Product Group"."</td>";
		echo "<td>"."Eng Product Group"."</td>";
		echo "<td>"."Mark Down Wholesale"."</td>";
		echo "<td>"."Mark Down Retail"."</td>";
		echo "<td>"."Days Worked"."</td>";
		echo "<td>"."Number Workers"."</td>";
		echo "<td>"."Qty Molds"."</td>";
		echo "<td>"."Moulds Per Day"."</td>";
		echo "<td>"."Interest"."</td>";
		echo "<td>"."Period"."</td>";
		echo "<td>"."Down Pay"."</td>";
		echo "<td>"."Months Of Cap"."</td>";
		echo "<td>"."Waste"."</td>";
		echo "<td>"."Maint"."</td>";
		echo "<td>"."Item Notes"."</td>";
		echo "<td>"."Curing Time"."</td>";
		echo "<td>"."GAP"."</td>";
	}
	echo "</tr>";
	
// write data rows
	$iNumberOfRows = 0;
	$pageObject->viewControls->forExport = "export";
	while((!$nPageSize || $iNumberOfRows<$nPageSize) && $row)
	{
		countTotals($totals, $totalsFields, $row);
		
		$values = array();
	
					$values["ProdGrpCode"] = $pageObject->getViewControl("ProdGrpCode")->showDBValue($row, "");
					$values["ThaiProductGroup"] = $pageObject->getViewControl("ThaiProductGroup")->showDBValue($row, "");
					$values["EngProductGroup"] = $pageObject->getViewControl("EngProductGroup")->showDBValue($row, "");
					$values["MarkDownWholesale"] = $pageObject->getViewControl("MarkDownWholesale")->showDBValue($row, "");
					$values["MarkDownRetail"] = $pageObject->getViewControl("MarkDownRetail")->showDBValue($row, "");
					$values["DaysWorked"] = $pageObject->getViewControl("DaysWorked")->showDBValue($row, "");
					$values["NumberWorkers"] = $pageObject->getViewControl("NumberWorkers")->showDBValue($row, "");
					$values["QtyMolds"] = $pageObject->getViewControl("QtyMolds")->showDBValue($row, "");
					$values["MouldsPerDay"] = $pageObject->getViewControl("MouldsPerDay")->showDBValue($row, "");
					$values["Interest"] = $pageObject->getViewControl("Interest")->showDBValue($row, "");
					$values["Period"] = $pageObject->getViewControl("Period")->showDBValue($row, "");
					$values["DownPay"] = $pageObject->getViewControl("DownPay")->showDBValue($row, "");
					$values["MonthsOfCap"] = $pageObject->getViewControl("MonthsOfCap")->showDBValue($row, "");
					$values["Waste"] = $pageObject->getViewControl("Waste")->showDBValue($row, "");
					$values["Maint"] = $pageObject->getViewControl("Maint")->showDBValue($row, "");
					$values["ItemNotes"] = $pageObject->getViewControl("ItemNotes")->showDBValue($row, "");
					$values["CuringTime"] = $pageObject->getViewControl("CuringTime")->showDBValue($row, "");
					$values["GAP"] = $pageObject->getViewControl("GAP")->showDBValue($row, "");
		
		$eventRes = true;
		if ($eventObj->exists('BeforeOut'))
		{
			$eventRes = $eventObj->BeforeOut($row, $values, $pageObject);
		}
		if ($eventRes)
		{
			$iNumberOfRows++;
			echo "<tr>";
		
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["ProdGrpCode"]);
					else
						echo $values["ProdGrpCode"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["ThaiProductGroup"]);
					else
						echo $values["ThaiProductGroup"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["EngProductGroup"]);
					else
						echo $values["EngProductGroup"];
			echo '</td>';
							echo '<td>';
			
									echo $values["MarkDownWholesale"];
			echo '</td>';
							echo '<td>';
			
									echo $values["MarkDownRetail"];
			echo '</td>';
							echo '<td>';
			
									echo $values["DaysWorked"];
			echo '</td>';
							echo '<td>';
			
									echo $values["NumberWorkers"];
			echo '</td>';
							echo '<td>';
			
									echo $values["QtyMolds"];
			echo '</td>';
							echo '<td>';
			
									echo $values["MouldsPerDay"];
			echo '</td>';
							echo '<td>';
			
									echo $values["Interest"];
			echo '</td>';
							echo '<td>';
			
									echo $values["Period"];
			echo '</td>';
							echo '<td>';
			
									echo $values["DownPay"];
			echo '</td>';
							echo '<td>';
			
									echo $values["MonthsOfCap"];
			echo '</td>';
							echo '<td>';
			
									echo $values["Waste"];
			echo '</td>';
							echo '<td>';
			
									echo $values["Maint"];
			echo '</td>';
							if($_REQUEST["type"]=="excel")
					echo '<td x:str>';
				else
					echo '<td>';
			
									if($_REQUEST["type"]=="excel")
						echo PrepareForExcel($values["ItemNotes"]);
					else
						echo $values["ItemNotes"];
			echo '</td>';
							echo '<td>';
			
									echo $values["CuringTime"];
			echo '</td>';
							echo '<td>';
			
									echo $values["GAP"];
			echo '</td>';
			echo "</tr>";
		}
		
		
		if($eventObj->exists("ListFetchArray"))
			$row = $eventObj->ListFetchArray($rs, $pageObject);
		else
			$row = $cipherer->DecryptFetchedArray($rs);
	}
	
}

function XMLNameEncode($strValue)
{
	$search = array(" ","#","'","/","\\","(",")",",","[");
	$ret = str_replace($search,"",$strValue);
	$search = array("]","+","\"","-","_","|","}","{","=");
	$ret = str_replace($search,"",$ret);
	return $ret;
}

function PrepareForExcel($ret)
{
	//$ret = htmlspecialchars($str); commented for bug #6823
	if (substr($ret,0,1)== "=") 
		$ret = "&#61;".substr($ret,1);
	return $ret;

}

function countTotals(&$totals, $totalsFields, $data)
{
	for($i = 0; $i < count($totalsFields); $i ++) 
	{
		if($totalsFields[$i]['totalsType'] == 'COUNT') 
			$totals[$totalsFields[$i]['fName']]["value"] += ($data[$totalsFields[$i]['fName']]!= "");
		else if($totalsFields[$i]['viewFormat'] == "Time") 
		{
			$time = GetTotalsForTime($data[$totalsFields[$i]['fName']]);
			$totals[$totalsFields[$i]['fName']]["value"] += $time[2]+$time[1]*60 + $time[0]*3600;
		} 
		else 
			$totals[$totalsFields[$i]['fName']]["value"] += ($data[$totalsFields[$i]['fName']]+ 0);
		
		if($totalsFields[$i]['totalsType'] == 'AVERAGE')
		{
			if(!is_null($data[$totalsFields[$i]['fName']]) && $data[$totalsFields[$i]['fName']]!=="")
				$totals[$totalsFields[$i]['fName']]['numRows']++;
		}
	}
}
?>

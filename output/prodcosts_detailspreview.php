<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

include("include/prodcosts_variables.php");

$mode = postvalue("mode");


$cipherer = new RunnerCipherer($strTableName);


include('include/xtempl.php');
$xt = new Xtempl();

$layout = new TLayout("detailspreview","FancyGreen1","MobileGreen1");
$layout->blocks["bare"] = array();
$layout->containers["dcount"] = array();

$layout->containers["dcount"][] = array("name"=>"detailspreviewheader","block"=>"","substyle"=>1);


$layout->containers["dcount"][] = array("name"=>"detailspreviewdetailsfount","block"=>"","substyle"=>1);


$layout->containers["dcount"][] = array("name"=>"detailspreviewdispfirst","block"=>"display_first","substyle"=>1);


$layout->skins["dcount"] = "empty";
$layout->blocks["bare"][] = "dcount";
$layout->containers["detailspreviewgrid"] = array();

$layout->containers["detailspreviewgrid"][] = array("name"=>"detailspreviewfields","block"=>"details_data","substyle"=>1);


$layout->skins["detailspreviewgrid"] = "grid";
$layout->blocks["bare"][] = "detailspreviewgrid";$page_layouts["prodcosts_detailspreview"] = $layout;


$recordsCounter = 0;

//	process masterkey value
$mastertable = postvalue("mastertable");
$masterKeys = my_json_decode(postvalue("masterKeys"));
if($mastertable != "")
{
	$_SESSION[$strTableName."_mastertable"]=$mastertable;
//	copy keys to session
	$i = 1;
	if(is_array($masterKeys) && count($masterKeys) > 0)
	{
		while(array_key_exists ("masterkey".$i, $masterKeys))
		{
			$_SESSION[$strTableName."_masterkey".$i] = $masterKeys["masterkey".$i];
			$i++;
		}
	}
	if(isset($_SESSION[$strTableName."_masterkey".$i]))
		unset($_SESSION[$strTableName."_masterkey".$i]);
}
else
	$mastertable = $_SESSION[$strTableName."_mastertable"];

//$strSQL = $gstrSQL;

if($mastertable == "products")
{
	$where = "";
		$where .= GetFullFieldName("ProdNo", $strTableName, false)."=".make_db_value("ProdNo",$_SESSION[$strTableName."_masterkey1"]);
}

$str = SecuritySQL("Search");
if(strlen($str))
	$where.=" and ".$str;
$strSQL = $gQuery->gSQLWhere($where);

$strSQL.=" ".$gstrOrderBy;

$rowcount = $gQuery->gSQLRowCount($where);

$xt->assign("row_count",$rowcount);
if($rowcount) {
	$xt->assign("details_data",true);
	$rs = db_query($strSQL,$conn);

	$display_count = 10;
	if($mode == "inline")
		$display_count*=2;
	if($rowcount>$display_count+2)
	{
		$xt->assign("display_first",true);
		$xt->assign("display_count",$display_count);
	}
	else
		$display_count = $rowcount;

	$rowinfo = array();
	
	$data = $cipherer->DecryptFetchedArray($rs);
	require_once getabspath('classes/controls/ViewControlsContainer.php');
	$pSet = new ProjectSettings($strTableName, PAGE_LIST);
	$viewContainer = new ViewControlsContainer($pSet, PAGE_LIST);
	while($data && $recordsCounter<$display_count) {
		$recordsCounter++;
		$row = array();
		$keylink = "";

	
	//	ProdGrpCode - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ProdGrpCode", $data, $keylink);
			$row["ProdGrpCode_value"] = $value;
	//	Status - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Status", $data, $keylink);
			$row["Status_value"] = $value;
	//	ProdNo - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ProdNo", $data, $keylink);
			$row["ProdNo_value"] = $value;
	//	CostType - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("CostType", $data, $keylink);
			$row["CostType_value"] = $value;
	//	EngName - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("EngName", $data, $keylink);
			$row["EngName_value"] = $value;
	//	ThaiName - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ThaiName", $data, $keylink);
			$row["ThaiName_value"] = $value;
	//	Qtty - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Qtty", $data, $keylink);
			$row["Qtty_value"] = $value;
	//	PieceCost - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PieceCost", $data, $keylink);
			$row["PieceCost_value"] = $value;
	//	SortOrder - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SortOrder", $data, $keylink);
			$row["SortOrder_value"] = $value;
	//	Cost - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Cost", $data, $keylink);
			$row["Cost_value"] = $value;
	//	UnitEngRpt - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("UnitEngRpt", $data, $keylink);
			$row["UnitEngRpt_value"] = $value;
	//	UnitThaiRpt - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("UnitThaiRpt", $data, $keylink);
			$row["UnitThaiRpt_value"] = $value;
	//	CompPurchaseUnitEn - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("CompPurchaseUnitEn", $data, $keylink);
			$row["CompPurchaseUnitEn_value"] = $value;
	//	CostYear - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("CostYear", $data, $keylink);
			$row["CostYear_value"] = $value;
	//	CostMonth - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("CostMonth", $data, $keylink);
			$row["CostMonth_value"] = $value;
	//	PercentCost - Number
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("PercentCost", $data, $keylink);
			$row["PercentCost_value"] = $value;
		$rowinfo[] = $row;
		$data = $cipherer->DecryptFetchedArray($rs);
	}
	$xt->assign_loopsection("details_row",$rowinfo);
}
$returnJSON = array("success" => true);
$xt->load_template("prodcosts_detailspreview.htm");
$returnJSON["body"] = $xt->fetch_loaded();

if($mode!="inline"){
	$returnJSON["counter"] = postvalue("counter");
	$layout = GetPageLayout(GoodFieldName($strTableName), 'detailspreview');
	if($layout)
	{
		$rtl = $xt->getReadingOrder() == 'RTL' ? 'RTL' : '';
		$returnJSON["style"] = "styles/".$layout->style."/style".$rtl.".css";
		$returnJSON["pageStyle"] = "pagestyles/".$layout->name.$rtl.".css";
		$returnJSON["layout"] = $layout->style." page-".$layout->name.".css";
	}	
}	

echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
?>
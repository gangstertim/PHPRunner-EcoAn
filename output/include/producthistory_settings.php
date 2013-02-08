<?php
require_once(getabspath("classes/cipherer.php"));
$tdataproducthistory = array();
	$tdataproducthistory[".NumberOfChars"] = 80; 
	$tdataproducthistory[".ShortName"] = "producthistory";
	$tdataproducthistory[".OwnerID"] = "";
	$tdataproducthistory[".OriginalTable"] = "producthistory";

//	field labels
$fieldLabelsproducthistory = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsproducthistory["English"] = array();
	$fieldToolTipsproducthistory["English"] = array();
	$fieldLabelsproducthistory["English"]["ProdNo"] = "Prod No";
	$fieldToolTipsproducthistory["English"]["ProdNo"] = "";
	$fieldLabelsproducthistory["English"]["ProdGrpCode"] = "Prod Grp Code";
	$fieldToolTipsproducthistory["English"]["ProdGrpCode"] = "";
	$fieldLabelsproducthistory["English"]["ProdThaiName"] = "Prod Thai Name";
	$fieldToolTipsproducthistory["English"]["ProdThaiName"] = "";
	$fieldLabelsproducthistory["English"]["ProdEngName"] = "Prod Eng Name";
	$fieldToolTipsproducthistory["English"]["ProdEngName"] = "";
	$fieldLabelsproducthistory["English"]["Picture"] = "Picture";
	$fieldToolTipsproducthistory["English"]["Picture"] = "";
	$fieldLabelsproducthistory["English"]["ThaiModel"] = "Thai Model";
	$fieldToolTipsproducthistory["English"]["ThaiModel"] = "";
	$fieldLabelsproducthistory["English"]["EngModel"] = "Eng Model";
	$fieldToolTipsproducthistory["English"]["EngModel"] = "";
	$fieldLabelsproducthistory["English"]["MixNo"] = "Mix No";
	$fieldToolTipsproducthistory["English"]["MixNo"] = "";
	$fieldLabelsproducthistory["English"]["ProdWt"] = "Prod Wt";
	$fieldToolTipsproducthistory["English"]["ProdWt"] = "";
	$fieldLabelsproducthistory["English"]["ColorMixNo"] = "Color Mix No";
	$fieldToolTipsproducthistory["English"]["ColorMixNo"] = "";
	$fieldLabelsproducthistory["English"]["FaceWt"] = "Face Wt";
	$fieldToolTipsproducthistory["English"]["FaceWt"] = "";
	$fieldLabelsproducthistory["English"]["Mold"] = "Mold";
	$fieldToolTipsproducthistory["English"]["Mold"] = "";
	$fieldLabelsproducthistory["English"]["PiecesPerMould"] = "Pieces Per Mould";
	$fieldToolTipsproducthistory["English"]["PiecesPerMould"] = "";
	$fieldLabelsproducthistory["English"]["ProductCost"] = "Product Cost";
	$fieldToolTipsproducthistory["English"]["ProductCost"] = "";
	$fieldLabelsproducthistory["English"]["PriceRetail"] = "Price Retail";
	$fieldToolTipsproducthistory["English"]["PriceRetail"] = "";
	$fieldLabelsproducthistory["English"]["PriceWholeSale"] = "Price Whole Sale";
	$fieldToolTipsproducthistory["English"]["PriceWholeSale"] = "";
	$fieldLabelsproducthistory["English"]["ProdStockGoal"] = "Prod Stock Goal";
	$fieldToolTipsproducthistory["English"]["ProdStockGoal"] = "";
	$fieldLabelsproducthistory["English"]["ThaiCom"] = "Thai Com";
	$fieldToolTipsproducthistory["English"]["ThaiCom"] = "";
	$fieldLabelsproducthistory["English"]["EngCom"] = "Eng Com";
	$fieldToolTipsproducthistory["English"]["EngCom"] = "";
	$fieldLabelsproducthistory["English"]["Status"] = "Status";
	$fieldToolTipsproducthistory["English"]["Status"] = "";
	$fieldLabelsproducthistory["English"]["ChangeType"] = "Change Type";
	$fieldToolTipsproducthistory["English"]["ChangeType"] = "";
	$fieldLabelsproducthistory["English"]["ChangeDate"] = "Change Date";
	$fieldToolTipsproducthistory["English"]["ChangeDate"] = "";
	$fieldLabelsproducthistory["English"]["ChangeTime"] = "Change Time";
	$fieldToolTipsproducthistory["English"]["ChangeTime"] = "";
	if (count($fieldToolTipsproducthistory["English"]))
		$tdataproducthistory[".isUseToolTips"] = true;
}
	
	
	$tdataproducthistory[".NCSearch"] = true;



$tdataproducthistory[".shortTableName"] = "producthistory";
$tdataproducthistory[".nSecOptions"] = 0;
$tdataproducthistory[".recsPerRowList"] = 1;
$tdataproducthistory[".mainTableOwnerID"] = "";
$tdataproducthistory[".moveNext"] = 1;
$tdataproducthistory[".nType"] = 0;

$tdataproducthistory[".strOriginalTableName"] = "producthistory";




$tdataproducthistory[".showAddInPopup"] = false;

$tdataproducthistory[".showEditInPopup"] = false;

$tdataproducthistory[".showViewInPopup"] = false;

$tdataproducthistory[".fieldsForRegister"] = array();

$tdataproducthistory[".listAjax"] = false;

	$tdataproducthistory[".audit"] = false;

	$tdataproducthistory[".locking"] = false;

$tdataproducthistory[".listIcons"] = true;

$tdataproducthistory[".exportTo"] = true;

$tdataproducthistory[".printFriendly"] = true;


$tdataproducthistory[".showSimpleSearchOptions"] = false;

$tdataproducthistory[".showSearchPanel"] = true;

if (isMobile())
	$tdataproducthistory[".isUseAjaxSuggest"] = false;
else 
	$tdataproducthistory[".isUseAjaxSuggest"] = true;

$tdataproducthistory[".rowHighlite"] = true;

// button handlers file names

$tdataproducthistory[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproducthistory[".isUseTimeForSearch"] = false;




$tdataproducthistory[".allSearchFields"] = array();

$tdataproducthistory[".allSearchFields"][] = "ProdNo";
$tdataproducthistory[".allSearchFields"][] = "ProdGrpCode";
$tdataproducthistory[".allSearchFields"][] = "ProdThaiName";
$tdataproducthistory[".allSearchFields"][] = "ProdEngName";
$tdataproducthistory[".allSearchFields"][] = "ThaiModel";
$tdataproducthistory[".allSearchFields"][] = "EngModel";
$tdataproducthistory[".allSearchFields"][] = "MixNo";
$tdataproducthistory[".allSearchFields"][] = "ProdWt";
$tdataproducthistory[".allSearchFields"][] = "ColorMixNo";
$tdataproducthistory[".allSearchFields"][] = "FaceWt";
$tdataproducthistory[".allSearchFields"][] = "Mold";
$tdataproducthistory[".allSearchFields"][] = "PiecesPerMould";
$tdataproducthistory[".allSearchFields"][] = "ProductCost";
$tdataproducthistory[".allSearchFields"][] = "PriceRetail";
$tdataproducthistory[".allSearchFields"][] = "PriceWholeSale";
$tdataproducthistory[".allSearchFields"][] = "ProdStockGoal";
$tdataproducthistory[".allSearchFields"][] = "ThaiCom";
$tdataproducthistory[".allSearchFields"][] = "EngCom";
$tdataproducthistory[".allSearchFields"][] = "Status";
$tdataproducthistory[".allSearchFields"][] = "ChangeType";
$tdataproducthistory[".allSearchFields"][] = "ChangeDate";
$tdataproducthistory[".allSearchFields"][] = "ChangeTime";

$tdataproducthistory[".googleLikeFields"][] = "ProdNo";
$tdataproducthistory[".googleLikeFields"][] = "ProdGrpCode";
$tdataproducthistory[".googleLikeFields"][] = "ProdThaiName";
$tdataproducthistory[".googleLikeFields"][] = "ProdEngName";
$tdataproducthistory[".googleLikeFields"][] = "ThaiModel";
$tdataproducthistory[".googleLikeFields"][] = "EngModel";
$tdataproducthistory[".googleLikeFields"][] = "MixNo";
$tdataproducthistory[".googleLikeFields"][] = "ProdWt";
$tdataproducthistory[".googleLikeFields"][] = "ColorMixNo";
$tdataproducthistory[".googleLikeFields"][] = "FaceWt";
$tdataproducthistory[".googleLikeFields"][] = "Mold";
$tdataproducthistory[".googleLikeFields"][] = "PiecesPerMould";
$tdataproducthistory[".googleLikeFields"][] = "ProductCost";
$tdataproducthistory[".googleLikeFields"][] = "PriceRetail";
$tdataproducthistory[".googleLikeFields"][] = "PriceWholeSale";
$tdataproducthistory[".googleLikeFields"][] = "ProdStockGoal";
$tdataproducthistory[".googleLikeFields"][] = "ThaiCom";
$tdataproducthistory[".googleLikeFields"][] = "EngCom";
$tdataproducthistory[".googleLikeFields"][] = "Status";
$tdataproducthistory[".googleLikeFields"][] = "ChangeType";
$tdataproducthistory[".googleLikeFields"][] = "ChangeDate";
$tdataproducthistory[".googleLikeFields"][] = "ChangeTime";


$tdataproducthistory[".advSearchFields"][] = "ProdNo";
$tdataproducthistory[".advSearchFields"][] = "ProdGrpCode";
$tdataproducthistory[".advSearchFields"][] = "ProdThaiName";
$tdataproducthistory[".advSearchFields"][] = "ProdEngName";
$tdataproducthistory[".advSearchFields"][] = "ThaiModel";
$tdataproducthistory[".advSearchFields"][] = "EngModel";
$tdataproducthistory[".advSearchFields"][] = "MixNo";
$tdataproducthistory[".advSearchFields"][] = "ProdWt";
$tdataproducthistory[".advSearchFields"][] = "ColorMixNo";
$tdataproducthistory[".advSearchFields"][] = "FaceWt";
$tdataproducthistory[".advSearchFields"][] = "Mold";
$tdataproducthistory[".advSearchFields"][] = "PiecesPerMould";
$tdataproducthistory[".advSearchFields"][] = "ProductCost";
$tdataproducthistory[".advSearchFields"][] = "PriceRetail";
$tdataproducthistory[".advSearchFields"][] = "PriceWholeSale";
$tdataproducthistory[".advSearchFields"][] = "ProdStockGoal";
$tdataproducthistory[".advSearchFields"][] = "ThaiCom";
$tdataproducthistory[".advSearchFields"][] = "EngCom";
$tdataproducthistory[".advSearchFields"][] = "Status";
$tdataproducthistory[".advSearchFields"][] = "ChangeType";
$tdataproducthistory[".advSearchFields"][] = "ChangeDate";
$tdataproducthistory[".advSearchFields"][] = "ChangeTime";

$tdataproducthistory[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataproducthistory[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataproducthistory[".strOrderBy"] = $tstrOrderBy;

$tdataproducthistory[".orderindexes"] = array();

$tdataproducthistory[".sqlHead"] = "SELECT ProdNo,   ProdGrpCode,   ProdThaiName,   ProdEngName,   Picture,   ThaiModel,   EngModel,   MixNo,   ProdWt,   ColorMixNo,   FaceWt,   Mold,   PiecesPerMould,   ProductCost,   PriceRetail,   PriceWholeSale,   ProdStockGoal,   ThaiCom,   EngCom,   Status,   ChangeType,   ChangeDate,   ChangeTime";
$tdataproducthistory[".sqlFrom"] = "FROM producthistory";
$tdataproducthistory[".sqlWhereExpr"] = "";
$tdataproducthistory[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproducthistory[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproducthistory[".arrGroupsPerPage"] = $arrGPP;

$tableKeysproducthistory = array();
$tdataproducthistory[".Keys"] = $tableKeysproducthistory;

$tdataproducthistory[".listFields"] = array();
$tdataproducthistory[".listFields"][] = "ProdNo";
$tdataproducthistory[".listFields"][] = "ProdGrpCode";
$tdataproducthistory[".listFields"][] = "ProdThaiName";
$tdataproducthistory[".listFields"][] = "ProdEngName";
$tdataproducthistory[".listFields"][] = "Picture";
$tdataproducthistory[".listFields"][] = "ThaiModel";
$tdataproducthistory[".listFields"][] = "EngModel";
$tdataproducthistory[".listFields"][] = "MixNo";
$tdataproducthistory[".listFields"][] = "ProdWt";
$tdataproducthistory[".listFields"][] = "ColorMixNo";
$tdataproducthistory[".listFields"][] = "FaceWt";
$tdataproducthistory[".listFields"][] = "Mold";
$tdataproducthistory[".listFields"][] = "PiecesPerMould";
$tdataproducthistory[".listFields"][] = "ProductCost";
$tdataproducthistory[".listFields"][] = "PriceRetail";
$tdataproducthistory[".listFields"][] = "PriceWholeSale";
$tdataproducthistory[".listFields"][] = "ProdStockGoal";
$tdataproducthistory[".listFields"][] = "ThaiCom";
$tdataproducthistory[".listFields"][] = "EngCom";
$tdataproducthistory[".listFields"][] = "Status";
$tdataproducthistory[".listFields"][] = "ChangeType";
$tdataproducthistory[".listFields"][] = "ChangeDate";
$tdataproducthistory[".listFields"][] = "ChangeTime";

$tdataproducthistory[".viewFields"] = array();
$tdataproducthistory[".viewFields"][] = "ProdNo";
$tdataproducthistory[".viewFields"][] = "ProdGrpCode";
$tdataproducthistory[".viewFields"][] = "ProdThaiName";
$tdataproducthistory[".viewFields"][] = "ProdEngName";
$tdataproducthistory[".viewFields"][] = "Picture";
$tdataproducthistory[".viewFields"][] = "ThaiModel";
$tdataproducthistory[".viewFields"][] = "EngModel";
$tdataproducthistory[".viewFields"][] = "MixNo";
$tdataproducthistory[".viewFields"][] = "ProdWt";
$tdataproducthistory[".viewFields"][] = "ColorMixNo";
$tdataproducthistory[".viewFields"][] = "FaceWt";
$tdataproducthistory[".viewFields"][] = "Mold";
$tdataproducthistory[".viewFields"][] = "PiecesPerMould";
$tdataproducthistory[".viewFields"][] = "ProductCost";
$tdataproducthistory[".viewFields"][] = "PriceRetail";
$tdataproducthistory[".viewFields"][] = "PriceWholeSale";
$tdataproducthistory[".viewFields"][] = "ProdStockGoal";
$tdataproducthistory[".viewFields"][] = "ThaiCom";
$tdataproducthistory[".viewFields"][] = "EngCom";
$tdataproducthistory[".viewFields"][] = "Status";
$tdataproducthistory[".viewFields"][] = "ChangeType";
$tdataproducthistory[".viewFields"][] = "ChangeDate";
$tdataproducthistory[".viewFields"][] = "ChangeTime";

$tdataproducthistory[".addFields"] = array();
$tdataproducthistory[".addFields"][] = "ProdNo";
$tdataproducthistory[".addFields"][] = "ProdGrpCode";
$tdataproducthistory[".addFields"][] = "ProdThaiName";
$tdataproducthistory[".addFields"][] = "ProdEngName";
$tdataproducthistory[".addFields"][] = "Picture";
$tdataproducthistory[".addFields"][] = "ThaiModel";
$tdataproducthistory[".addFields"][] = "EngModel";
$tdataproducthistory[".addFields"][] = "MixNo";
$tdataproducthistory[".addFields"][] = "ProdWt";
$tdataproducthistory[".addFields"][] = "ColorMixNo";
$tdataproducthistory[".addFields"][] = "FaceWt";
$tdataproducthistory[".addFields"][] = "Mold";
$tdataproducthistory[".addFields"][] = "PiecesPerMould";
$tdataproducthistory[".addFields"][] = "ProductCost";
$tdataproducthistory[".addFields"][] = "PriceRetail";
$tdataproducthistory[".addFields"][] = "PriceWholeSale";
$tdataproducthistory[".addFields"][] = "ProdStockGoal";
$tdataproducthistory[".addFields"][] = "ThaiCom";
$tdataproducthistory[".addFields"][] = "EngCom";
$tdataproducthistory[".addFields"][] = "Status";
$tdataproducthistory[".addFields"][] = "ChangeType";
$tdataproducthistory[".addFields"][] = "ChangeDate";
$tdataproducthistory[".addFields"][] = "ChangeTime";

$tdataproducthistory[".inlineAddFields"] = array();
$tdataproducthistory[".inlineAddFields"][] = "ProdNo";
$tdataproducthistory[".inlineAddFields"][] = "ProdGrpCode";
$tdataproducthistory[".inlineAddFields"][] = "ProdThaiName";
$tdataproducthistory[".inlineAddFields"][] = "ProdEngName";
$tdataproducthistory[".inlineAddFields"][] = "Picture";
$tdataproducthistory[".inlineAddFields"][] = "ThaiModel";
$tdataproducthistory[".inlineAddFields"][] = "EngModel";
$tdataproducthistory[".inlineAddFields"][] = "MixNo";
$tdataproducthistory[".inlineAddFields"][] = "ProdWt";
$tdataproducthistory[".inlineAddFields"][] = "ColorMixNo";
$tdataproducthistory[".inlineAddFields"][] = "FaceWt";
$tdataproducthistory[".inlineAddFields"][] = "Mold";
$tdataproducthistory[".inlineAddFields"][] = "PiecesPerMould";
$tdataproducthistory[".inlineAddFields"][] = "ProductCost";
$tdataproducthistory[".inlineAddFields"][] = "PriceRetail";
$tdataproducthistory[".inlineAddFields"][] = "PriceWholeSale";
$tdataproducthistory[".inlineAddFields"][] = "ProdStockGoal";
$tdataproducthistory[".inlineAddFields"][] = "ThaiCom";
$tdataproducthistory[".inlineAddFields"][] = "EngCom";
$tdataproducthistory[".inlineAddFields"][] = "Status";
$tdataproducthistory[".inlineAddFields"][] = "ChangeType";
$tdataproducthistory[".inlineAddFields"][] = "ChangeDate";
$tdataproducthistory[".inlineAddFields"][] = "ChangeTime";

$tdataproducthistory[".editFields"] = array();
$tdataproducthistory[".editFields"][] = "ProdNo";
$tdataproducthistory[".editFields"][] = "ProdGrpCode";
$tdataproducthistory[".editFields"][] = "ProdThaiName";
$tdataproducthistory[".editFields"][] = "ProdEngName";
$tdataproducthistory[".editFields"][] = "Picture";
$tdataproducthistory[".editFields"][] = "ThaiModel";
$tdataproducthistory[".editFields"][] = "EngModel";
$tdataproducthistory[".editFields"][] = "MixNo";
$tdataproducthistory[".editFields"][] = "ProdWt";
$tdataproducthistory[".editFields"][] = "ColorMixNo";
$tdataproducthistory[".editFields"][] = "FaceWt";
$tdataproducthistory[".editFields"][] = "Mold";
$tdataproducthistory[".editFields"][] = "PiecesPerMould";
$tdataproducthistory[".editFields"][] = "ProductCost";
$tdataproducthistory[".editFields"][] = "PriceRetail";
$tdataproducthistory[".editFields"][] = "PriceWholeSale";
$tdataproducthistory[".editFields"][] = "ProdStockGoal";
$tdataproducthistory[".editFields"][] = "ThaiCom";
$tdataproducthistory[".editFields"][] = "EngCom";
$tdataproducthistory[".editFields"][] = "Status";
$tdataproducthistory[".editFields"][] = "ChangeType";
$tdataproducthistory[".editFields"][] = "ChangeDate";
$tdataproducthistory[".editFields"][] = "ChangeTime";

$tdataproducthistory[".inlineEditFields"] = array();
$tdataproducthistory[".inlineEditFields"][] = "ProdNo";
$tdataproducthistory[".inlineEditFields"][] = "ProdGrpCode";
$tdataproducthistory[".inlineEditFields"][] = "ProdThaiName";
$tdataproducthistory[".inlineEditFields"][] = "ProdEngName";
$tdataproducthistory[".inlineEditFields"][] = "Picture";
$tdataproducthistory[".inlineEditFields"][] = "ThaiModel";
$tdataproducthistory[".inlineEditFields"][] = "EngModel";
$tdataproducthistory[".inlineEditFields"][] = "MixNo";
$tdataproducthistory[".inlineEditFields"][] = "ProdWt";
$tdataproducthistory[".inlineEditFields"][] = "ColorMixNo";
$tdataproducthistory[".inlineEditFields"][] = "FaceWt";
$tdataproducthistory[".inlineEditFields"][] = "Mold";
$tdataproducthistory[".inlineEditFields"][] = "PiecesPerMould";
$tdataproducthistory[".inlineEditFields"][] = "ProductCost";
$tdataproducthistory[".inlineEditFields"][] = "PriceRetail";
$tdataproducthistory[".inlineEditFields"][] = "PriceWholeSale";
$tdataproducthistory[".inlineEditFields"][] = "ProdStockGoal";
$tdataproducthistory[".inlineEditFields"][] = "ThaiCom";
$tdataproducthistory[".inlineEditFields"][] = "EngCom";
$tdataproducthistory[".inlineEditFields"][] = "Status";
$tdataproducthistory[".inlineEditFields"][] = "ChangeType";
$tdataproducthistory[".inlineEditFields"][] = "ChangeDate";
$tdataproducthistory[".inlineEditFields"][] = "ChangeTime";

$tdataproducthistory[".exportFields"] = array();
$tdataproducthistory[".exportFields"][] = "ProdNo";
$tdataproducthistory[".exportFields"][] = "ProdGrpCode";
$tdataproducthistory[".exportFields"][] = "ProdThaiName";
$tdataproducthistory[".exportFields"][] = "ProdEngName";
$tdataproducthistory[".exportFields"][] = "ThaiModel";
$tdataproducthistory[".exportFields"][] = "EngModel";
$tdataproducthistory[".exportFields"][] = "MixNo";
$tdataproducthistory[".exportFields"][] = "ProdWt";
$tdataproducthistory[".exportFields"][] = "ColorMixNo";
$tdataproducthistory[".exportFields"][] = "FaceWt";
$tdataproducthistory[".exportFields"][] = "Mold";
$tdataproducthistory[".exportFields"][] = "PiecesPerMould";
$tdataproducthistory[".exportFields"][] = "ProductCost";
$tdataproducthistory[".exportFields"][] = "PriceRetail";
$tdataproducthistory[".exportFields"][] = "PriceWholeSale";
$tdataproducthistory[".exportFields"][] = "ProdStockGoal";
$tdataproducthistory[".exportFields"][] = "ThaiCom";
$tdataproducthistory[".exportFields"][] = "EngCom";
$tdataproducthistory[".exportFields"][] = "Status";
$tdataproducthistory[".exportFields"][] = "ChangeType";
$tdataproducthistory[".exportFields"][] = "ChangeDate";
$tdataproducthistory[".exportFields"][] = "ChangeTime";

$tdataproducthistory[".printFields"] = array();
$tdataproducthistory[".printFields"][] = "ProdNo";
$tdataproducthistory[".printFields"][] = "ProdGrpCode";
$tdataproducthistory[".printFields"][] = "ProdThaiName";
$tdataproducthistory[".printFields"][] = "ProdEngName";
$tdataproducthistory[".printFields"][] = "Picture";
$tdataproducthistory[".printFields"][] = "ThaiModel";
$tdataproducthistory[".printFields"][] = "EngModel";
$tdataproducthistory[".printFields"][] = "MixNo";
$tdataproducthistory[".printFields"][] = "ProdWt";
$tdataproducthistory[".printFields"][] = "ColorMixNo";
$tdataproducthistory[".printFields"][] = "FaceWt";
$tdataproducthistory[".printFields"][] = "Mold";
$tdataproducthistory[".printFields"][] = "PiecesPerMould";
$tdataproducthistory[".printFields"][] = "ProductCost";
$tdataproducthistory[".printFields"][] = "PriceRetail";
$tdataproducthistory[".printFields"][] = "PriceWholeSale";
$tdataproducthistory[".printFields"][] = "ProdStockGoal";
$tdataproducthistory[".printFields"][] = "ThaiCom";
$tdataproducthistory[".printFields"][] = "EngCom";
$tdataproducthistory[".printFields"][] = "Status";
$tdataproducthistory[".printFields"][] = "ChangeType";
$tdataproducthistory[".printFields"][] = "ChangeDate";
$tdataproducthistory[".printFields"][] = "ChangeTime";

//	ProdNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ProdNo";
	$fdata["GoodName"] = "ProdNo";
	$fdata["ownerTable"] = "producthistory";
	$fdata["Label"] = "Prod No"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ProdNo"; 
		$fdata["FullName"] = "ProdNo";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataproducthistory["ProdNo"] = $fdata;
//	ProdGrpCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ProdGrpCode";
	$fdata["GoodName"] = "ProdGrpCode";
	$fdata["ownerTable"] = "producthistory";
	$fdata["Label"] = "Prod Grp Code"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ProdGrpCode"; 
		$fdata["FullName"] = "ProdGrpCode";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=3";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataproducthistory["ProdGrpCode"] = $fdata;
//	ProdThaiName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ProdThaiName";
	$fdata["GoodName"] = "ProdThaiName";
	$fdata["ownerTable"] = "producthistory";
	$fdata["Label"] = "Prod Thai Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ProdThaiName"; 
		$fdata["FullName"] = "ProdThaiName";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=67";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataproducthistory["ProdThaiName"] = $fdata;
//	ProdEngName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ProdEngName";
	$fdata["GoodName"] = "ProdEngName";
	$fdata["ownerTable"] = "producthistory";
	$fdata["Label"] = "Prod Eng Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ProdEngName"; 
		$fdata["FullName"] = "ProdEngName";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=80";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataproducthistory["ProdEngName"] = $fdata;
//	Picture
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Picture";
	$fdata["GoodName"] = "Picture";
	$fdata["ownerTable"] = "producthistory";
	$fdata["Label"] = "Picture"; 
	$fdata["FieldType"] = 128;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "Picture"; 
		$fdata["FullName"] = "Picture";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Database Image");
	
		
		
				$vdata["ImageWidth"] = 0;
	$vdata["ImageHeight"] = 0;
	
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Database image");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataproducthistory["Picture"] = $fdata;
//	ThaiModel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ThaiModel";
	$fdata["GoodName"] = "ThaiModel";
	$fdata["ownerTable"] = "producthistory";
	$fdata["Label"] = "Thai Model"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ThaiModel"; 
		$fdata["FullName"] = "ThaiModel";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataproducthistory["ThaiModel"] = $fdata;
//	EngModel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "EngModel";
	$fdata["GoodName"] = "EngModel";
	$fdata["ownerTable"] = "producthistory";
	$fdata["Label"] = "Eng Model"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "EngModel"; 
		$fdata["FullName"] = "EngModel";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataproducthistory["EngModel"] = $fdata;
//	MixNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "MixNo";
	$fdata["GoodName"] = "MixNo";
	$fdata["ownerTable"] = "producthistory";
	$fdata["Label"] = "Mix No"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "MixNo"; 
		$fdata["FullName"] = "MixNo";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataproducthistory["MixNo"] = $fdata;
//	ProdWt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ProdWt";
	$fdata["GoodName"] = "ProdWt";
	$fdata["ownerTable"] = "producthistory";
	$fdata["Label"] = "Prod Wt"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ProdWt"; 
		$fdata["FullName"] = "ProdWt";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 4;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataproducthistory["ProdWt"] = $fdata;
//	ColorMixNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ColorMixNo";
	$fdata["GoodName"] = "ColorMixNo";
	$fdata["ownerTable"] = "producthistory";
	$fdata["Label"] = "Color Mix No"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ColorMixNo"; 
		$fdata["FullName"] = "ColorMixNo";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataproducthistory["ColorMixNo"] = $fdata;
//	FaceWt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "FaceWt";
	$fdata["GoodName"] = "FaceWt";
	$fdata["ownerTable"] = "producthistory";
	$fdata["Label"] = "Face Wt"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "FaceWt"; 
		$fdata["FullName"] = "FaceWt";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 4;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataproducthistory["FaceWt"] = $fdata;
//	Mold
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Mold";
	$fdata["GoodName"] = "Mold";
	$fdata["ownerTable"] = "producthistory";
	$fdata["Label"] = "Mold"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Mold"; 
		$fdata["FullName"] = "Mold";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 4;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataproducthistory["Mold"] = $fdata;
//	PiecesPerMould
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "PiecesPerMould";
	$fdata["GoodName"] = "PiecesPerMould";
	$fdata["ownerTable"] = "producthistory";
	$fdata["Label"] = "Pieces Per Mould"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "PiecesPerMould"; 
		$fdata["FullName"] = "PiecesPerMould";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataproducthistory["PiecesPerMould"] = $fdata;
//	ProductCost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ProductCost";
	$fdata["GoodName"] = "ProductCost";
	$fdata["ownerTable"] = "producthistory";
	$fdata["Label"] = "Product Cost"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ProductCost"; 
		$fdata["FullName"] = "ProductCost";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 4;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataproducthistory["ProductCost"] = $fdata;
//	PriceRetail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "PriceRetail";
	$fdata["GoodName"] = "PriceRetail";
	$fdata["ownerTable"] = "producthistory";
	$fdata["Label"] = "Price Retail"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "PriceRetail"; 
		$fdata["FullName"] = "PriceRetail";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 4;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataproducthistory["PriceRetail"] = $fdata;
//	PriceWholeSale
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "PriceWholeSale";
	$fdata["GoodName"] = "PriceWholeSale";
	$fdata["ownerTable"] = "producthistory";
	$fdata["Label"] = "Price Whole Sale"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "PriceWholeSale"; 
		$fdata["FullName"] = "PriceWholeSale";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 4;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataproducthistory["PriceWholeSale"] = $fdata;
//	ProdStockGoal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "ProdStockGoal";
	$fdata["GoodName"] = "ProdStockGoal";
	$fdata["ownerTable"] = "producthistory";
	$fdata["Label"] = "Prod Stock Goal"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ProdStockGoal"; 
		$fdata["FullName"] = "ProdStockGoal";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataproducthistory["ProdStockGoal"] = $fdata;
//	ThaiCom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "ThaiCom";
	$fdata["GoodName"] = "ThaiCom";
	$fdata["ownerTable"] = "producthistory";
	$fdata["Label"] = "Thai Com"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ThaiCom"; 
		$fdata["FullName"] = "ThaiCom";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=4092";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataproducthistory["ThaiCom"] = $fdata;
//	EngCom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "EngCom";
	$fdata["GoodName"] = "EngCom";
	$fdata["ownerTable"] = "producthistory";
	$fdata["Label"] = "Eng Com"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "EngCom"; 
		$fdata["FullName"] = "EngCom";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=2500";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataproducthistory["EngCom"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "producthistory";
	$fdata["Label"] = "Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Status"; 
		$fdata["FullName"] = "Status";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=1";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataproducthistory["Status"] = $fdata;
//	ChangeType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "ChangeType";
	$fdata["GoodName"] = "ChangeType";
	$fdata["ownerTable"] = "producthistory";
	$fdata["Label"] = "Change Type"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ChangeType"; 
		$fdata["FullName"] = "ChangeType";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=8";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataproducthistory["ChangeType"] = $fdata;
//	ChangeDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "ChangeDate";
	$fdata["GoodName"] = "ChangeDate";
	$fdata["ownerTable"] = "producthistory";
	$fdata["Label"] = "Change Date"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ChangeDate"; 
		$fdata["FullName"] = "ChangeDate";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataproducthistory["ChangeDate"] = $fdata;
//	ChangeTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "ChangeTime";
	$fdata["GoodName"] = "ChangeTime";
	$fdata["ownerTable"] = "producthistory";
	$fdata["Label"] = "Change Time"; 
	$fdata["FieldType"] = 134;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ChangeTime"; 
		$fdata["FullName"] = "ChangeTime";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Time");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Time");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataproducthistory["ChangeTime"] = $fdata;

	
$tables_data["producthistory"]=&$tdataproducthistory;
$field_labels["producthistory"] = &$fieldLabelsproducthistory;
$fieldToolTips["producthistory"] = &$fieldToolTipsproducthistory;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["producthistory"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["producthistory"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_producthistory()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ProdNo,   ProdGrpCode,   ProdThaiName,   ProdEngName,   Picture,   ThaiModel,   EngModel,   MixNo,   ProdWt,   ColorMixNo,   FaceWt,   Mold,   PiecesPerMould,   ProductCost,   PriceRetail,   PriceWholeSale,   ProdStockGoal,   ThaiCom,   EngCom,   Status,   ChangeType,   ChangeDate,   ChangeTime";
$proto0["m_strFrom"] = "FROM producthistory";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = "0";
$proto1["m_inBrackets"] = "0";
$proto1["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = "0";
$proto3["m_inBrackets"] = "0";
$proto3["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "ProdNo",
	"m_strTable" => "producthistory"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ProdGrpCode",
	"m_strTable" => "producthistory"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ProdThaiName",
	"m_strTable" => "producthistory"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "ProdEngName",
	"m_strTable" => "producthistory"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Picture",
	"m_strTable" => "producthistory"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "ThaiModel",
	"m_strTable" => "producthistory"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "EngModel",
	"m_strTable" => "producthistory"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "MixNo",
	"m_strTable" => "producthistory"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "ProdWt",
	"m_strTable" => "producthistory"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "ColorMixNo",
	"m_strTable" => "producthistory"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "FaceWt",
	"m_strTable" => "producthistory"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "Mold",
	"m_strTable" => "producthistory"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "PiecesPerMould",
	"m_strTable" => "producthistory"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "ProductCost",
	"m_strTable" => "producthistory"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "PriceRetail",
	"m_strTable" => "producthistory"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "PriceWholeSale",
	"m_strTable" => "producthistory"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "ProdStockGoal",
	"m_strTable" => "producthistory"
));

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "ThaiCom",
	"m_strTable" => "producthistory"
));

$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "EngCom",
	"m_strTable" => "producthistory"
));

$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "producthistory"
));

$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "ChangeType",
	"m_strTable" => "producthistory"
));

$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "ChangeDate",
	"m_strTable" => "producthistory"
));

$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "ChangeTime",
	"m_strTable" => "producthistory"
));

$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto51=array();
$proto51["m_link"] = "SQLL_MAIN";
			$proto52=array();
$proto52["m_strName"] = "producthistory";
$proto52["m_columns"] = array();
$proto52["m_columns"][] = "ProdNo";
$proto52["m_columns"][] = "ProdGrpCode";
$proto52["m_columns"][] = "ProdThaiName";
$proto52["m_columns"][] = "ProdEngName";
$proto52["m_columns"][] = "Picture";
$proto52["m_columns"][] = "ThaiModel";
$proto52["m_columns"][] = "EngModel";
$proto52["m_columns"][] = "MixNo";
$proto52["m_columns"][] = "ProdWt";
$proto52["m_columns"][] = "ColorMixNo";
$proto52["m_columns"][] = "FaceWt";
$proto52["m_columns"][] = "Mold";
$proto52["m_columns"][] = "PiecesPerMould";
$proto52["m_columns"][] = "ProductCost";
$proto52["m_columns"][] = "PriceRetail";
$proto52["m_columns"][] = "PriceWholeSale";
$proto52["m_columns"][] = "ProdStockGoal";
$proto52["m_columns"][] = "ThaiCom";
$proto52["m_columns"][] = "EngCom";
$proto52["m_columns"][] = "Status";
$proto52["m_columns"][] = "ChangeType";
$proto52["m_columns"][] = "ChangeDate";
$proto52["m_columns"][] = "ChangeTime";
$obj = new SQLTable($proto52);

$proto51["m_table"] = $obj;
$proto51["m_alias"] = "";
$proto53=array();
$proto53["m_sql"] = "";
$proto53["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto53["m_column"]=$obj;
$proto53["m_contained"] = array();
$proto53["m_strCase"] = "";
$proto53["m_havingmode"] = "0";
$proto53["m_inBrackets"] = "0";
$proto53["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto53);

$proto51["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto51);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_producthistory = createSqlQuery_producthistory();
																							$tdataproducthistory[".sqlquery"] = $queryData_producthistory;
	
if(isset($tdataproducthistory["field2"])){
	$tdataproducthistory["field2"]["LookupTable"] = "carscars_view";
	$tdataproducthistory["field2"]["LookupOrderBy"] = "name";
	$tdataproducthistory["field2"]["LookupType"] = 4;
	$tdataproducthistory["field2"]["LinkField"] = "email";
	$tdataproducthistory["field2"]["DisplayField"] = "name";
	$tdataproducthistory[".hasCustomViewField"] = true;
}

$tableEvents["producthistory"] = new eventsBase;
$tdataproducthistory[".hasEvents"] = false;

$cipherer = new RunnerCipherer("producthistory");

?>
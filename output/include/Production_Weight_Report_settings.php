<?php
require_once(getabspath("classes/cipherer.php"));
$tdataProduction_Weight_Report = array();
	$tdataProduction_Weight_Report[".NumberOfChars"] = 80; 
	$tdataProduction_Weight_Report[".ShortName"] = "Production_Weight_Report";
	$tdataProduction_Weight_Report[".OwnerID"] = "";
	$tdataProduction_Weight_Report[".OriginalTable"] = "products";

//	field labels
$fieldLabelsProduction_Weight_Report = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsProduction_Weight_Report["English"] = array();
	$fieldToolTipsProduction_Weight_Report["English"] = array();
	$fieldLabelsProduction_Weight_Report["English"]["ProdGrpCode"] = "Prod Grp Code";
	$fieldToolTipsProduction_Weight_Report["English"]["ProdGrpCode"] = "";
	$fieldLabelsProduction_Weight_Report["English"]["ProdThaiName"] = "Prod Thai Name";
	$fieldToolTipsProduction_Weight_Report["English"]["ProdThaiName"] = "";
	$fieldLabelsProduction_Weight_Report["English"]["ProdEngName"] = "Prod Eng Name";
	$fieldToolTipsProduction_Weight_Report["English"]["ProdEngName"] = "";
	$fieldLabelsProduction_Weight_Report["English"]["Picture"] = "Picture";
	$fieldToolTipsProduction_Weight_Report["English"]["Picture"] = "";
	$fieldLabelsProduction_Weight_Report["English"]["ThaiModel"] = "Thai Model";
	$fieldToolTipsProduction_Weight_Report["English"]["ThaiModel"] = "";
	$fieldLabelsProduction_Weight_Report["English"]["EngModel"] = "Eng Model";
	$fieldToolTipsProduction_Weight_Report["English"]["EngModel"] = "";
	$fieldLabelsProduction_Weight_Report["English"]["MixNo"] = "Mix No";
	$fieldToolTipsProduction_Weight_Report["English"]["MixNo"] = "";
	$fieldLabelsProduction_Weight_Report["English"]["ProdWt"] = "Prod Wt";
	$fieldToolTipsProduction_Weight_Report["English"]["ProdWt"] = "";
	$fieldLabelsProduction_Weight_Report["English"]["ColorMixNo"] = "Color Mix No";
	$fieldToolTipsProduction_Weight_Report["English"]["ColorMixNo"] = "";
	$fieldLabelsProduction_Weight_Report["English"]["FaceWt"] = "Face Wt";
	$fieldToolTipsProduction_Weight_Report["English"]["FaceWt"] = "";
	$fieldLabelsProduction_Weight_Report["English"]["Mold"] = "Mold";
	$fieldToolTipsProduction_Weight_Report["English"]["Mold"] = "";
	$fieldLabelsProduction_Weight_Report["English"]["PiecesPerMould"] = "Pieces Per Mould";
	$fieldToolTipsProduction_Weight_Report["English"]["PiecesPerMould"] = "";
	$fieldLabelsProduction_Weight_Report["English"]["ProductCost"] = "Product Cost";
	$fieldToolTipsProduction_Weight_Report["English"]["ProductCost"] = "";
	$fieldLabelsProduction_Weight_Report["English"]["PriceRetail"] = "Price Retail";
	$fieldToolTipsProduction_Weight_Report["English"]["PriceRetail"] = "";
	$fieldLabelsProduction_Weight_Report["English"]["PriceWholeSale"] = "Price Whole Sale";
	$fieldToolTipsProduction_Weight_Report["English"]["PriceWholeSale"] = "";
	$fieldLabelsProduction_Weight_Report["English"]["ProdStockGoal"] = "Prod Stock Goal";
	$fieldToolTipsProduction_Weight_Report["English"]["ProdStockGoal"] = "";
	$fieldLabelsProduction_Weight_Report["English"]["ThaiCom"] = "Thai Com";
	$fieldToolTipsProduction_Weight_Report["English"]["ThaiCom"] = "";
	$fieldLabelsProduction_Weight_Report["English"]["EngCom"] = "Eng Com";
	$fieldToolTipsProduction_Weight_Report["English"]["EngCom"] = "";
	$fieldLabelsProduction_Weight_Report["English"]["Status"] = "Status";
	$fieldToolTipsProduction_Weight_Report["English"]["Status"] = "";
	$fieldLabelsProduction_Weight_Report["English"]["MoldWt"] = "Mold Wt";
	$fieldToolTipsProduction_Weight_Report["English"]["MoldWt"] = "";
	$fieldLabelsProduction_Weight_Report["English"]["GrayWtMold"] = "Gray Wt Mold";
	$fieldToolTipsProduction_Weight_Report["English"]["GrayWtMold"] = "";
	$fieldLabelsProduction_Weight_Report["English"]["ColorWtMold"] = "Color Wt Mold";
	$fieldToolTipsProduction_Weight_Report["English"]["ColorWtMold"] = "";
	$fieldLabelsProduction_Weight_Report["English"]["Length"] = "Length";
	$fieldToolTipsProduction_Weight_Report["English"]["Length"] = "";
	$fieldLabelsProduction_Weight_Report["English"]["Width1"] = "Width1";
	$fieldToolTipsProduction_Weight_Report["English"]["Width1"] = "";
	$fieldLabelsProduction_Weight_Report["English"]["Thickness"] = "Thickness";
	$fieldToolTipsProduction_Weight_Report["English"]["Thickness"] = "";
	$fieldLabelsProduction_Weight_Report["English"]["ProdNo"] = "Prod No";
	$fieldToolTipsProduction_Weight_Report["English"]["ProdNo"] = "";
	if (count($fieldToolTipsProduction_Weight_Report["English"]))
		$tdataProduction_Weight_Report[".isUseToolTips"] = true;
}
	
	
	$tdataProduction_Weight_Report[".NCSearch"] = true;



$tdataProduction_Weight_Report[".shortTableName"] = "Production_Weight_Report";
$tdataProduction_Weight_Report[".nSecOptions"] = 0;
$tdataProduction_Weight_Report[".recsPerRowList"] = 1;
$tdataProduction_Weight_Report[".mainTableOwnerID"] = "";
$tdataProduction_Weight_Report[".moveNext"] = 1;
$tdataProduction_Weight_Report[".nType"] = 2;

$tdataProduction_Weight_Report[".strOriginalTableName"] = "products";




$tdataProduction_Weight_Report[".showAddInPopup"] = false;

$tdataProduction_Weight_Report[".showEditInPopup"] = false;

$tdataProduction_Weight_Report[".showViewInPopup"] = false;

$tdataProduction_Weight_Report[".fieldsForRegister"] = array();

$tdataProduction_Weight_Report[".listAjax"] = false;

	$tdataProduction_Weight_Report[".audit"] = false;

	$tdataProduction_Weight_Report[".locking"] = false;

$tdataProduction_Weight_Report[".listIcons"] = true;
$tdataProduction_Weight_Report[".edit"] = true;
$tdataProduction_Weight_Report[".inlineEdit"] = true;
$tdataProduction_Weight_Report[".inlineAdd"] = true;
$tdataProduction_Weight_Report[".view"] = true;

$tdataProduction_Weight_Report[".exportTo"] = true;

$tdataProduction_Weight_Report[".printFriendly"] = true;

$tdataProduction_Weight_Report[".delete"] = true;

$tdataProduction_Weight_Report[".showSimpleSearchOptions"] = false;

$tdataProduction_Weight_Report[".showSearchPanel"] = true;

if (isMobile())
	$tdataProduction_Weight_Report[".isUseAjaxSuggest"] = false;
else 
	$tdataProduction_Weight_Report[".isUseAjaxSuggest"] = true;


// button handlers file names

$tdataProduction_Weight_Report[".addPageEvents"] = false;

// use timepicker for search panel
$tdataProduction_Weight_Report[".isUseTimeForSearch"] = false;




$tdataProduction_Weight_Report[".allSearchFields"] = array();

$tdataProduction_Weight_Report[".allSearchFields"][] = "ProdGrpCode";
$tdataProduction_Weight_Report[".allSearchFields"][] = "ProdThaiName";
$tdataProduction_Weight_Report[".allSearchFields"][] = "ProdEngName";
$tdataProduction_Weight_Report[".allSearchFields"][] = "Picture";
$tdataProduction_Weight_Report[".allSearchFields"][] = "ThaiModel";
$tdataProduction_Weight_Report[".allSearchFields"][] = "EngModel";
$tdataProduction_Weight_Report[".allSearchFields"][] = "MixNo";
$tdataProduction_Weight_Report[".allSearchFields"][] = "ProdWt";
$tdataProduction_Weight_Report[".allSearchFields"][] = "ColorMixNo";
$tdataProduction_Weight_Report[".allSearchFields"][] = "FaceWt";
$tdataProduction_Weight_Report[".allSearchFields"][] = "Mold";
$tdataProduction_Weight_Report[".allSearchFields"][] = "PiecesPerMould";
$tdataProduction_Weight_Report[".allSearchFields"][] = "ProductCost";
$tdataProduction_Weight_Report[".allSearchFields"][] = "PriceRetail";
$tdataProduction_Weight_Report[".allSearchFields"][] = "PriceWholeSale";
$tdataProduction_Weight_Report[".allSearchFields"][] = "ProdStockGoal";
$tdataProduction_Weight_Report[".allSearchFields"][] = "ThaiCom";
$tdataProduction_Weight_Report[".allSearchFields"][] = "EngCom";
$tdataProduction_Weight_Report[".allSearchFields"][] = "Status";
$tdataProduction_Weight_Report[".allSearchFields"][] = "MoldWt";
$tdataProduction_Weight_Report[".allSearchFields"][] = "GrayWtMold";
$tdataProduction_Weight_Report[".allSearchFields"][] = "ColorWtMold";
$tdataProduction_Weight_Report[".allSearchFields"][] = "Length";
$tdataProduction_Weight_Report[".allSearchFields"][] = "Width1";
$tdataProduction_Weight_Report[".allSearchFields"][] = "Thickness";
$tdataProduction_Weight_Report[".allSearchFields"][] = "ProdNo";

$tdataProduction_Weight_Report[".googleLikeFields"][] = "ProdGrpCode";
$tdataProduction_Weight_Report[".googleLikeFields"][] = "ProdThaiName";
$tdataProduction_Weight_Report[".googleLikeFields"][] = "ProdEngName";
$tdataProduction_Weight_Report[".googleLikeFields"][] = "Picture";
$tdataProduction_Weight_Report[".googleLikeFields"][] = "ThaiModel";
$tdataProduction_Weight_Report[".googleLikeFields"][] = "EngModel";
$tdataProduction_Weight_Report[".googleLikeFields"][] = "MixNo";
$tdataProduction_Weight_Report[".googleLikeFields"][] = "ProdWt";
$tdataProduction_Weight_Report[".googleLikeFields"][] = "ColorMixNo";
$tdataProduction_Weight_Report[".googleLikeFields"][] = "FaceWt";
$tdataProduction_Weight_Report[".googleLikeFields"][] = "Mold";
$tdataProduction_Weight_Report[".googleLikeFields"][] = "PiecesPerMould";
$tdataProduction_Weight_Report[".googleLikeFields"][] = "ProductCost";
$tdataProduction_Weight_Report[".googleLikeFields"][] = "PriceRetail";
$tdataProduction_Weight_Report[".googleLikeFields"][] = "PriceWholeSale";
$tdataProduction_Weight_Report[".googleLikeFields"][] = "ProdStockGoal";
$tdataProduction_Weight_Report[".googleLikeFields"][] = "ThaiCom";
$tdataProduction_Weight_Report[".googleLikeFields"][] = "EngCom";
$tdataProduction_Weight_Report[".googleLikeFields"][] = "Status";
$tdataProduction_Weight_Report[".googleLikeFields"][] = "MoldWt";
$tdataProduction_Weight_Report[".googleLikeFields"][] = "GrayWtMold";
$tdataProduction_Weight_Report[".googleLikeFields"][] = "ColorWtMold";
$tdataProduction_Weight_Report[".googleLikeFields"][] = "Length";
$tdataProduction_Weight_Report[".googleLikeFields"][] = "Width1";
$tdataProduction_Weight_Report[".googleLikeFields"][] = "Thickness";
$tdataProduction_Weight_Report[".googleLikeFields"][] = "ProdNo";


$tdataProduction_Weight_Report[".advSearchFields"][] = "ProdGrpCode";
$tdataProduction_Weight_Report[".advSearchFields"][] = "ProdThaiName";
$tdataProduction_Weight_Report[".advSearchFields"][] = "ProdEngName";
$tdataProduction_Weight_Report[".advSearchFields"][] = "Picture";
$tdataProduction_Weight_Report[".advSearchFields"][] = "ThaiModel";
$tdataProduction_Weight_Report[".advSearchFields"][] = "EngModel";
$tdataProduction_Weight_Report[".advSearchFields"][] = "MixNo";
$tdataProduction_Weight_Report[".advSearchFields"][] = "ProdWt";
$tdataProduction_Weight_Report[".advSearchFields"][] = "ColorMixNo";
$tdataProduction_Weight_Report[".advSearchFields"][] = "FaceWt";
$tdataProduction_Weight_Report[".advSearchFields"][] = "Mold";
$tdataProduction_Weight_Report[".advSearchFields"][] = "PiecesPerMould";
$tdataProduction_Weight_Report[".advSearchFields"][] = "ProductCost";
$tdataProduction_Weight_Report[".advSearchFields"][] = "PriceRetail";
$tdataProduction_Weight_Report[".advSearchFields"][] = "PriceWholeSale";
$tdataProduction_Weight_Report[".advSearchFields"][] = "ProdStockGoal";
$tdataProduction_Weight_Report[".advSearchFields"][] = "ThaiCom";
$tdataProduction_Weight_Report[".advSearchFields"][] = "EngCom";
$tdataProduction_Weight_Report[".advSearchFields"][] = "Status";
$tdataProduction_Weight_Report[".advSearchFields"][] = "MoldWt";
$tdataProduction_Weight_Report[".advSearchFields"][] = "GrayWtMold";
$tdataProduction_Weight_Report[".advSearchFields"][] = "ColorWtMold";
$tdataProduction_Weight_Report[".advSearchFields"][] = "Length";
$tdataProduction_Weight_Report[".advSearchFields"][] = "Width1";
$tdataProduction_Weight_Report[".advSearchFields"][] = "Thickness";
$tdataProduction_Weight_Report[".advSearchFields"][] = "ProdNo";

$tdataProduction_Weight_Report[".isTableType"] = "report";

	



// Access doesn't support subqueries from the same table as main




$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataProduction_Weight_Report[".strOrderBy"] = $tstrOrderBy;

$tdataProduction_Weight_Report[".orderindexes"] = array();

$tdataProduction_Weight_Report[".sqlHead"] = "SELECT ProdGrpCode,  ProdThaiName,  ProdEngName,  Picture,  ThaiModel,  EngModel,  MixNo,  ProdWt,  ColorMixNo,  FaceWt,  Mold,  PiecesPerMould,  ProductCost,  PriceRetail,  PriceWholeSale,  ProdStockGoal,  ThaiCom,  EngCom,  Status,  MoldWt,  GrayWtMold,  ColorWtMold,  Length,  Width1,  Thickness,  ProdNo";
$tdataProduction_Weight_Report[".sqlFrom"] = "FROM products";
$tdataProduction_Weight_Report[".sqlWhereExpr"] = "";
$tdataProduction_Weight_Report[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataProduction_Weight_Report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataProduction_Weight_Report[".arrGroupsPerPage"] = $arrGPP;

$tableKeysProduction_Weight_Report = array();
$tableKeysProduction_Weight_Report[] = "ProdNo";
$tdataProduction_Weight_Report[".Keys"] = $tableKeysProduction_Weight_Report;

$tdataProduction_Weight_Report[".listFields"] = array();
$tdataProduction_Weight_Report[".listFields"][] = "ProdGrpCode";
$tdataProduction_Weight_Report[".listFields"][] = "ProdThaiName";
$tdataProduction_Weight_Report[".listFields"][] = "ProdEngName";
$tdataProduction_Weight_Report[".listFields"][] = "Picture";
$tdataProduction_Weight_Report[".listFields"][] = "ThaiModel";
$tdataProduction_Weight_Report[".listFields"][] = "EngModel";
$tdataProduction_Weight_Report[".listFields"][] = "MixNo";
$tdataProduction_Weight_Report[".listFields"][] = "ProdWt";
$tdataProduction_Weight_Report[".listFields"][] = "ColorMixNo";
$tdataProduction_Weight_Report[".listFields"][] = "FaceWt";
$tdataProduction_Weight_Report[".listFields"][] = "Mold";
$tdataProduction_Weight_Report[".listFields"][] = "PiecesPerMould";
$tdataProduction_Weight_Report[".listFields"][] = "ProductCost";
$tdataProduction_Weight_Report[".listFields"][] = "PriceRetail";
$tdataProduction_Weight_Report[".listFields"][] = "PriceWholeSale";
$tdataProduction_Weight_Report[".listFields"][] = "ProdStockGoal";
$tdataProduction_Weight_Report[".listFields"][] = "ThaiCom";
$tdataProduction_Weight_Report[".listFields"][] = "EngCom";
$tdataProduction_Weight_Report[".listFields"][] = "Status";
$tdataProduction_Weight_Report[".listFields"][] = "MoldWt";
$tdataProduction_Weight_Report[".listFields"][] = "GrayWtMold";
$tdataProduction_Weight_Report[".listFields"][] = "ColorWtMold";
$tdataProduction_Weight_Report[".listFields"][] = "Length";
$tdataProduction_Weight_Report[".listFields"][] = "Width1";
$tdataProduction_Weight_Report[".listFields"][] = "Thickness";
$tdataProduction_Weight_Report[".listFields"][] = "ProdNo";

$tdataProduction_Weight_Report[".viewFields"] = array();
$tdataProduction_Weight_Report[".viewFields"][] = "ProdGrpCode";
$tdataProduction_Weight_Report[".viewFields"][] = "ProdThaiName";
$tdataProduction_Weight_Report[".viewFields"][] = "ProdEngName";
$tdataProduction_Weight_Report[".viewFields"][] = "Picture";
$tdataProduction_Weight_Report[".viewFields"][] = "ThaiModel";
$tdataProduction_Weight_Report[".viewFields"][] = "EngModel";
$tdataProduction_Weight_Report[".viewFields"][] = "MixNo";
$tdataProduction_Weight_Report[".viewFields"][] = "ProdWt";
$tdataProduction_Weight_Report[".viewFields"][] = "ColorMixNo";
$tdataProduction_Weight_Report[".viewFields"][] = "FaceWt";
$tdataProduction_Weight_Report[".viewFields"][] = "Mold";
$tdataProduction_Weight_Report[".viewFields"][] = "PiecesPerMould";
$tdataProduction_Weight_Report[".viewFields"][] = "ProductCost";
$tdataProduction_Weight_Report[".viewFields"][] = "PriceRetail";
$tdataProduction_Weight_Report[".viewFields"][] = "PriceWholeSale";
$tdataProduction_Weight_Report[".viewFields"][] = "ProdStockGoal";
$tdataProduction_Weight_Report[".viewFields"][] = "ThaiCom";
$tdataProduction_Weight_Report[".viewFields"][] = "EngCom";
$tdataProduction_Weight_Report[".viewFields"][] = "Status";
$tdataProduction_Weight_Report[".viewFields"][] = "MoldWt";
$tdataProduction_Weight_Report[".viewFields"][] = "GrayWtMold";
$tdataProduction_Weight_Report[".viewFields"][] = "ColorWtMold";
$tdataProduction_Weight_Report[".viewFields"][] = "Length";
$tdataProduction_Weight_Report[".viewFields"][] = "Width1";
$tdataProduction_Weight_Report[".viewFields"][] = "Thickness";
$tdataProduction_Weight_Report[".viewFields"][] = "ProdNo";

$tdataProduction_Weight_Report[".addFields"] = array();
$tdataProduction_Weight_Report[".addFields"][] = "ProdGrpCode";
$tdataProduction_Weight_Report[".addFields"][] = "ProdThaiName";
$tdataProduction_Weight_Report[".addFields"][] = "ProdEngName";
$tdataProduction_Weight_Report[".addFields"][] = "Picture";
$tdataProduction_Weight_Report[".addFields"][] = "ThaiModel";
$tdataProduction_Weight_Report[".addFields"][] = "EngModel";
$tdataProduction_Weight_Report[".addFields"][] = "MixNo";
$tdataProduction_Weight_Report[".addFields"][] = "ProdWt";
$tdataProduction_Weight_Report[".addFields"][] = "ColorMixNo";
$tdataProduction_Weight_Report[".addFields"][] = "FaceWt";
$tdataProduction_Weight_Report[".addFields"][] = "Mold";
$tdataProduction_Weight_Report[".addFields"][] = "PiecesPerMould";
$tdataProduction_Weight_Report[".addFields"][] = "ProductCost";
$tdataProduction_Weight_Report[".addFields"][] = "PriceRetail";
$tdataProduction_Weight_Report[".addFields"][] = "PriceWholeSale";
$tdataProduction_Weight_Report[".addFields"][] = "ProdStockGoal";
$tdataProduction_Weight_Report[".addFields"][] = "ThaiCom";
$tdataProduction_Weight_Report[".addFields"][] = "EngCom";
$tdataProduction_Weight_Report[".addFields"][] = "Status";
$tdataProduction_Weight_Report[".addFields"][] = "MoldWt";
$tdataProduction_Weight_Report[".addFields"][] = "GrayWtMold";
$tdataProduction_Weight_Report[".addFields"][] = "ColorWtMold";
$tdataProduction_Weight_Report[".addFields"][] = "Length";
$tdataProduction_Weight_Report[".addFields"][] = "Width1";
$tdataProduction_Weight_Report[".addFields"][] = "Thickness";

$tdataProduction_Weight_Report[".inlineAddFields"] = array();
$tdataProduction_Weight_Report[".inlineAddFields"][] = "ProdGrpCode";
$tdataProduction_Weight_Report[".inlineAddFields"][] = "ProdThaiName";
$tdataProduction_Weight_Report[".inlineAddFields"][] = "ProdEngName";
$tdataProduction_Weight_Report[".inlineAddFields"][] = "Picture";
$tdataProduction_Weight_Report[".inlineAddFields"][] = "ThaiModel";
$tdataProduction_Weight_Report[".inlineAddFields"][] = "EngModel";
$tdataProduction_Weight_Report[".inlineAddFields"][] = "MixNo";
$tdataProduction_Weight_Report[".inlineAddFields"][] = "ProdWt";
$tdataProduction_Weight_Report[".inlineAddFields"][] = "ColorMixNo";
$tdataProduction_Weight_Report[".inlineAddFields"][] = "FaceWt";
$tdataProduction_Weight_Report[".inlineAddFields"][] = "Mold";
$tdataProduction_Weight_Report[".inlineAddFields"][] = "PiecesPerMould";
$tdataProduction_Weight_Report[".inlineAddFields"][] = "ProductCost";
$tdataProduction_Weight_Report[".inlineAddFields"][] = "PriceRetail";
$tdataProduction_Weight_Report[".inlineAddFields"][] = "PriceWholeSale";
$tdataProduction_Weight_Report[".inlineAddFields"][] = "ProdStockGoal";
$tdataProduction_Weight_Report[".inlineAddFields"][] = "ThaiCom";
$tdataProduction_Weight_Report[".inlineAddFields"][] = "EngCom";
$tdataProduction_Weight_Report[".inlineAddFields"][] = "Status";
$tdataProduction_Weight_Report[".inlineAddFields"][] = "MoldWt";
$tdataProduction_Weight_Report[".inlineAddFields"][] = "GrayWtMold";
$tdataProduction_Weight_Report[".inlineAddFields"][] = "ColorWtMold";
$tdataProduction_Weight_Report[".inlineAddFields"][] = "Length";
$tdataProduction_Weight_Report[".inlineAddFields"][] = "Width1";
$tdataProduction_Weight_Report[".inlineAddFields"][] = "Thickness";

$tdataProduction_Weight_Report[".editFields"] = array();
$tdataProduction_Weight_Report[".editFields"][] = "ProdGrpCode";
$tdataProduction_Weight_Report[".editFields"][] = "ProdThaiName";
$tdataProduction_Weight_Report[".editFields"][] = "ProdEngName";
$tdataProduction_Weight_Report[".editFields"][] = "Picture";
$tdataProduction_Weight_Report[".editFields"][] = "ThaiModel";
$tdataProduction_Weight_Report[".editFields"][] = "EngModel";
$tdataProduction_Weight_Report[".editFields"][] = "MixNo";
$tdataProduction_Weight_Report[".editFields"][] = "ProdWt";
$tdataProduction_Weight_Report[".editFields"][] = "ColorMixNo";
$tdataProduction_Weight_Report[".editFields"][] = "FaceWt";
$tdataProduction_Weight_Report[".editFields"][] = "Mold";
$tdataProduction_Weight_Report[".editFields"][] = "PiecesPerMould";
$tdataProduction_Weight_Report[".editFields"][] = "ProductCost";
$tdataProduction_Weight_Report[".editFields"][] = "PriceRetail";
$tdataProduction_Weight_Report[".editFields"][] = "PriceWholeSale";
$tdataProduction_Weight_Report[".editFields"][] = "ProdStockGoal";
$tdataProduction_Weight_Report[".editFields"][] = "ThaiCom";
$tdataProduction_Weight_Report[".editFields"][] = "EngCom";
$tdataProduction_Weight_Report[".editFields"][] = "Status";
$tdataProduction_Weight_Report[".editFields"][] = "MoldWt";
$tdataProduction_Weight_Report[".editFields"][] = "GrayWtMold";
$tdataProduction_Weight_Report[".editFields"][] = "ColorWtMold";
$tdataProduction_Weight_Report[".editFields"][] = "Length";
$tdataProduction_Weight_Report[".editFields"][] = "Width1";
$tdataProduction_Weight_Report[".editFields"][] = "Thickness";

$tdataProduction_Weight_Report[".inlineEditFields"] = array();
$tdataProduction_Weight_Report[".inlineEditFields"][] = "ProdGrpCode";
$tdataProduction_Weight_Report[".inlineEditFields"][] = "ProdThaiName";
$tdataProduction_Weight_Report[".inlineEditFields"][] = "ProdEngName";
$tdataProduction_Weight_Report[".inlineEditFields"][] = "Picture";
$tdataProduction_Weight_Report[".inlineEditFields"][] = "ThaiModel";
$tdataProduction_Weight_Report[".inlineEditFields"][] = "EngModel";
$tdataProduction_Weight_Report[".inlineEditFields"][] = "MixNo";
$tdataProduction_Weight_Report[".inlineEditFields"][] = "ProdWt";
$tdataProduction_Weight_Report[".inlineEditFields"][] = "ColorMixNo";
$tdataProduction_Weight_Report[".inlineEditFields"][] = "FaceWt";
$tdataProduction_Weight_Report[".inlineEditFields"][] = "Mold";
$tdataProduction_Weight_Report[".inlineEditFields"][] = "PiecesPerMould";
$tdataProduction_Weight_Report[".inlineEditFields"][] = "ProductCost";
$tdataProduction_Weight_Report[".inlineEditFields"][] = "PriceRetail";
$tdataProduction_Weight_Report[".inlineEditFields"][] = "PriceWholeSale";
$tdataProduction_Weight_Report[".inlineEditFields"][] = "ProdStockGoal";
$tdataProduction_Weight_Report[".inlineEditFields"][] = "ThaiCom";
$tdataProduction_Weight_Report[".inlineEditFields"][] = "EngCom";
$tdataProduction_Weight_Report[".inlineEditFields"][] = "Status";
$tdataProduction_Weight_Report[".inlineEditFields"][] = "MoldWt";
$tdataProduction_Weight_Report[".inlineEditFields"][] = "GrayWtMold";
$tdataProduction_Weight_Report[".inlineEditFields"][] = "ColorWtMold";
$tdataProduction_Weight_Report[".inlineEditFields"][] = "Length";
$tdataProduction_Weight_Report[".inlineEditFields"][] = "Width1";
$tdataProduction_Weight_Report[".inlineEditFields"][] = "Thickness";

$tdataProduction_Weight_Report[".exportFields"] = array();
$tdataProduction_Weight_Report[".exportFields"][] = "ProdGrpCode";
$tdataProduction_Weight_Report[".exportFields"][] = "ProdThaiName";
$tdataProduction_Weight_Report[".exportFields"][] = "ProdEngName";
$tdataProduction_Weight_Report[".exportFields"][] = "Picture";
$tdataProduction_Weight_Report[".exportFields"][] = "ThaiModel";
$tdataProduction_Weight_Report[".exportFields"][] = "EngModel";
$tdataProduction_Weight_Report[".exportFields"][] = "MixNo";
$tdataProduction_Weight_Report[".exportFields"][] = "ProdWt";
$tdataProduction_Weight_Report[".exportFields"][] = "ColorMixNo";
$tdataProduction_Weight_Report[".exportFields"][] = "FaceWt";
$tdataProduction_Weight_Report[".exportFields"][] = "Mold";
$tdataProduction_Weight_Report[".exportFields"][] = "PiecesPerMould";
$tdataProduction_Weight_Report[".exportFields"][] = "ProductCost";
$tdataProduction_Weight_Report[".exportFields"][] = "PriceRetail";
$tdataProduction_Weight_Report[".exportFields"][] = "PriceWholeSale";
$tdataProduction_Weight_Report[".exportFields"][] = "ProdStockGoal";
$tdataProduction_Weight_Report[".exportFields"][] = "ThaiCom";
$tdataProduction_Weight_Report[".exportFields"][] = "EngCom";
$tdataProduction_Weight_Report[".exportFields"][] = "Status";
$tdataProduction_Weight_Report[".exportFields"][] = "MoldWt";
$tdataProduction_Weight_Report[".exportFields"][] = "GrayWtMold";
$tdataProduction_Weight_Report[".exportFields"][] = "ColorWtMold";
$tdataProduction_Weight_Report[".exportFields"][] = "Length";
$tdataProduction_Weight_Report[".exportFields"][] = "Width1";
$tdataProduction_Weight_Report[".exportFields"][] = "Thickness";
$tdataProduction_Weight_Report[".exportFields"][] = "ProdNo";

$tdataProduction_Weight_Report[".printFields"] = array();
$tdataProduction_Weight_Report[".printFields"][] = "ProdGrpCode";
$tdataProduction_Weight_Report[".printFields"][] = "ProdThaiName";
$tdataProduction_Weight_Report[".printFields"][] = "ProdEngName";
$tdataProduction_Weight_Report[".printFields"][] = "Picture";
$tdataProduction_Weight_Report[".printFields"][] = "ThaiModel";
$tdataProduction_Weight_Report[".printFields"][] = "EngModel";
$tdataProduction_Weight_Report[".printFields"][] = "MixNo";
$tdataProduction_Weight_Report[".printFields"][] = "ProdWt";
$tdataProduction_Weight_Report[".printFields"][] = "ColorMixNo";
$tdataProduction_Weight_Report[".printFields"][] = "FaceWt";
$tdataProduction_Weight_Report[".printFields"][] = "Mold";
$tdataProduction_Weight_Report[".printFields"][] = "PiecesPerMould";
$tdataProduction_Weight_Report[".printFields"][] = "ProductCost";
$tdataProduction_Weight_Report[".printFields"][] = "PriceRetail";
$tdataProduction_Weight_Report[".printFields"][] = "PriceWholeSale";
$tdataProduction_Weight_Report[".printFields"][] = "ProdStockGoal";
$tdataProduction_Weight_Report[".printFields"][] = "ThaiCom";
$tdataProduction_Weight_Report[".printFields"][] = "EngCom";
$tdataProduction_Weight_Report[".printFields"][] = "Status";
$tdataProduction_Weight_Report[".printFields"][] = "MoldWt";
$tdataProduction_Weight_Report[".printFields"][] = "GrayWtMold";
$tdataProduction_Weight_Report[".printFields"][] = "ColorWtMold";
$tdataProduction_Weight_Report[".printFields"][] = "Length";
$tdataProduction_Weight_Report[".printFields"][] = "Width1";
$tdataProduction_Weight_Report[".printFields"][] = "Thickness";
$tdataProduction_Weight_Report[".printFields"][] = "ProdNo";

//	ProdGrpCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ProdGrpCode";
	$fdata["GoodName"] = "ProdGrpCode";
	$fdata["ownerTable"] = "products";
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduction_Weight_Report["ProdGrpCode"] = $fdata;
//	ProdThaiName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ProdThaiName";
	$fdata["GoodName"] = "ProdThaiName";
	$fdata["ownerTable"] = "products";
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduction_Weight_Report["ProdThaiName"] = $fdata;
//	ProdEngName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ProdEngName";
	$fdata["GoodName"] = "ProdEngName";
	$fdata["ownerTable"] = "products";
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduction_Weight_Report["ProdEngName"] = $fdata;
//	Picture
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Picture";
	$fdata["GoodName"] = "Picture";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = "Picture"; 
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
	
		$fdata["strField"] = "Picture"; 
		$fdata["FullName"] = "Picture";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduction_Weight_Report["Picture"] = $fdata;
//	ThaiModel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ThaiModel";
	$fdata["GoodName"] = "ThaiModel";
	$fdata["ownerTable"] = "products";
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduction_Weight_Report["ThaiModel"] = $fdata;
//	EngModel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "EngModel";
	$fdata["GoodName"] = "EngModel";
	$fdata["ownerTable"] = "products";
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduction_Weight_Report["EngModel"] = $fdata;
//	MixNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "MixNo";
	$fdata["GoodName"] = "MixNo";
	$fdata["ownerTable"] = "products";
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduction_Weight_Report["MixNo"] = $fdata;
//	ProdWt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ProdWt";
	$fdata["GoodName"] = "ProdWt";
	$fdata["ownerTable"] = "products";
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduction_Weight_Report["ProdWt"] = $fdata;
//	ColorMixNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ColorMixNo";
	$fdata["GoodName"] = "ColorMixNo";
	$fdata["ownerTable"] = "products";
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduction_Weight_Report["ColorMixNo"] = $fdata;
//	FaceWt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "FaceWt";
	$fdata["GoodName"] = "FaceWt";
	$fdata["ownerTable"] = "products";
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduction_Weight_Report["FaceWt"] = $fdata;
//	Mold
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Mold";
	$fdata["GoodName"] = "Mold";
	$fdata["ownerTable"] = "products";
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduction_Weight_Report["Mold"] = $fdata;
//	PiecesPerMould
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "PiecesPerMould";
	$fdata["GoodName"] = "PiecesPerMould";
	$fdata["ownerTable"] = "products";
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduction_Weight_Report["PiecesPerMould"] = $fdata;
//	ProductCost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ProductCost";
	$fdata["GoodName"] = "ProductCost";
	$fdata["ownerTable"] = "products";
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduction_Weight_Report["ProductCost"] = $fdata;
//	PriceRetail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "PriceRetail";
	$fdata["GoodName"] = "PriceRetail";
	$fdata["ownerTable"] = "products";
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduction_Weight_Report["PriceRetail"] = $fdata;
//	PriceWholeSale
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "PriceWholeSale";
	$fdata["GoodName"] = "PriceWholeSale";
	$fdata["ownerTable"] = "products";
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduction_Weight_Report["PriceWholeSale"] = $fdata;
//	ProdStockGoal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "ProdStockGoal";
	$fdata["GoodName"] = "ProdStockGoal";
	$fdata["ownerTable"] = "products";
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduction_Weight_Report["ProdStockGoal"] = $fdata;
//	ThaiCom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "ThaiCom";
	$fdata["GoodName"] = "ThaiCom";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = "Thai Com"; 
	$fdata["FieldType"] = 201;
	
		
		
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduction_Weight_Report["ThaiCom"] = $fdata;
//	EngCom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "EngCom";
	$fdata["GoodName"] = "EngCom";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = "Eng Com"; 
	$fdata["FieldType"] = 201;
	
		
		
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduction_Weight_Report["EngCom"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "products";
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduction_Weight_Report["Status"] = $fdata;
//	MoldWt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "MoldWt";
	$fdata["GoodName"] = "MoldWt";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = "Mold Wt"; 
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
	
		$fdata["strField"] = "MoldWt"; 
		$fdata["FullName"] = "MoldWt";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 4;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduction_Weight_Report["MoldWt"] = $fdata;
//	GrayWtMold
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "GrayWtMold";
	$fdata["GoodName"] = "GrayWtMold";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = "Gray Wt Mold"; 
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
	
		$fdata["strField"] = "GrayWtMold"; 
		$fdata["FullName"] = "GrayWtMold";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 4;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduction_Weight_Report["GrayWtMold"] = $fdata;
//	ColorWtMold
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "ColorWtMold";
	$fdata["GoodName"] = "ColorWtMold";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = "Color Wt Mold"; 
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
	
		$fdata["strField"] = "ColorWtMold"; 
		$fdata["FullName"] = "ColorWtMold";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 4;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduction_Weight_Report["ColorWtMold"] = $fdata;
//	Length
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Length";
	$fdata["GoodName"] = "Length";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = "Length"; 
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
	
		$fdata["strField"] = "Length"; 
		$fdata["FullName"] = "Length";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 4;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduction_Weight_Report["Length"] = $fdata;
//	Width1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Width1";
	$fdata["GoodName"] = "Width1";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = "Width1"; 
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
	
		$fdata["strField"] = "Width1"; 
		$fdata["FullName"] = "Width1";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 4;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduction_Weight_Report["Width1"] = $fdata;
//	Thickness
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Thickness";
	$fdata["GoodName"] = "Thickness";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = "Thickness"; 
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
	
		$fdata["strField"] = "Thickness"; 
		$fdata["FullName"] = "Thickness";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 4;
	
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["report"] = $vdata;
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
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduction_Weight_Report["Thickness"] = $fdata;
//	ProdNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "ProdNo";
	$fdata["GoodName"] = "ProdNo";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = "Prod No"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
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
	
	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduction_Weight_Report["ProdNo"] = $fdata;

	
$tables_data["Production Weight Report"]=&$tdataProduction_Weight_Report;
$field_labels["Production_Weight_Report"] = &$fieldLabelsProduction_Weight_Report;
$fieldToolTips["Production Weight Report"] = &$fieldToolTipsProduction_Weight_Report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Production Weight Report"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Production Weight Report"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Production_Weight_Report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ProdGrpCode,  ProdThaiName,  ProdEngName,  Picture,  ThaiModel,  EngModel,  MixNo,  ProdWt,  ColorMixNo,  FaceWt,  Mold,  PiecesPerMould,  ProductCost,  PriceRetail,  PriceWholeSale,  ProdStockGoal,  ThaiCom,  EngCom,  Status,  MoldWt,  GrayWtMold,  ColorWtMold,  Length,  Width1,  Thickness,  ProdNo";
$proto0["m_strFrom"] = "FROM products";
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
	"m_strName" => "ProdGrpCode",
	"m_strTable" => "products"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ProdThaiName",
	"m_strTable" => "products"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ProdEngName",
	"m_strTable" => "products"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Picture",
	"m_strTable" => "products"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "ThaiModel",
	"m_strTable" => "products"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "EngModel",
	"m_strTable" => "products"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "MixNo",
	"m_strTable" => "products"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "ProdWt",
	"m_strTable" => "products"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "ColorMixNo",
	"m_strTable" => "products"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "FaceWt",
	"m_strTable" => "products"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Mold",
	"m_strTable" => "products"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "PiecesPerMould",
	"m_strTable" => "products"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "ProductCost",
	"m_strTable" => "products"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "PriceRetail",
	"m_strTable" => "products"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "PriceWholeSale",
	"m_strTable" => "products"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "ProdStockGoal",
	"m_strTable" => "products"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "ThaiCom",
	"m_strTable" => "products"
));

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "EngCom",
	"m_strTable" => "products"
));

$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "products"
));

$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "MoldWt",
	"m_strTable" => "products"
));

$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "GrayWtMold",
	"m_strTable" => "products"
));

$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "ColorWtMold",
	"m_strTable" => "products"
));

$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "Length",
	"m_strTable" => "products"
));

$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "Width1",
	"m_strTable" => "products"
));

$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "Thickness",
	"m_strTable" => "products"
));

$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "ProdNo",
	"m_strTable" => "products"
));

$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto57=array();
$proto57["m_link"] = "SQLL_MAIN";
			$proto58=array();
$proto58["m_strName"] = "products";
$proto58["m_columns"] = array();
$proto58["m_columns"][] = "ProdGrpCode";
$proto58["m_columns"][] = "ProdThaiName";
$proto58["m_columns"][] = "ProdEngName";
$proto58["m_columns"][] = "Picture";
$proto58["m_columns"][] = "ThaiModel";
$proto58["m_columns"][] = "EngModel";
$proto58["m_columns"][] = "MixNo";
$proto58["m_columns"][] = "ProdWt";
$proto58["m_columns"][] = "ColorMixNo";
$proto58["m_columns"][] = "FaceWt";
$proto58["m_columns"][] = "Mold";
$proto58["m_columns"][] = "PiecesPerMould";
$proto58["m_columns"][] = "ProductCost";
$proto58["m_columns"][] = "PriceRetail";
$proto58["m_columns"][] = "PriceWholeSale";
$proto58["m_columns"][] = "ProdStockGoal";
$proto58["m_columns"][] = "ThaiCom";
$proto58["m_columns"][] = "EngCom";
$proto58["m_columns"][] = "Status";
$proto58["m_columns"][] = "MoldWt";
$proto58["m_columns"][] = "GrayWtMold";
$proto58["m_columns"][] = "ColorWtMold";
$proto58["m_columns"][] = "Length";
$proto58["m_columns"][] = "Width1";
$proto58["m_columns"][] = "Thickness";
$proto58["m_columns"][] = "ProdNo";
$obj = new SQLTable($proto58);

$proto57["m_table"] = $obj;
$proto57["m_alias"] = "";
$proto59=array();
$proto59["m_sql"] = "";
$proto59["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto59["m_column"]=$obj;
$proto59["m_contained"] = array();
$proto59["m_strCase"] = "";
$proto59["m_havingmode"] = "0";
$proto59["m_inBrackets"] = "0";
$proto59["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto59);

$proto57["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto57);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Production_Weight_Report = createSqlQuery_Production_Weight_Report();
																										$tdataProduction_Weight_Report[".sqlquery"] = $queryData_Production_Weight_Report;
	
if(isset($tdataProduction_Weight_Report["field2"])){
	$tdataProduction_Weight_Report["field2"]["LookupTable"] = "carscars_view";
	$tdataProduction_Weight_Report["field2"]["LookupOrderBy"] = "name";
	$tdataProduction_Weight_Report["field2"]["LookupType"] = 4;
	$tdataProduction_Weight_Report["field2"]["LinkField"] = "email";
	$tdataProduction_Weight_Report["field2"]["DisplayField"] = "name";
	$tdataProduction_Weight_Report[".hasCustomViewField"] = true;
}

$tableEvents["Production Weight Report"] = new eventsBase;
$tdataProduction_Weight_Report[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Production Weight Report");

?>
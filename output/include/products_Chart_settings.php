<?php
require_once(getabspath("classes/cipherer.php"));
$tdataproducts_Chart = array();
	$tdataproducts_Chart[".ShortName"] = "products_Chart";
	$tdataproducts_Chart[".OwnerID"] = "";
	$tdataproducts_Chart[".OriginalTable"] = "products";

//	field labels
$fieldLabelsproducts_Chart = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsproducts_Chart["English"] = array();
	$fieldToolTipsproducts_Chart["English"] = array();
	$fieldLabelsproducts_Chart["English"]["ProdGrpCode"] = "Prod Grp Code";
	$fieldToolTipsproducts_Chart["English"]["ProdGrpCode"] = "";
	$fieldLabelsproducts_Chart["English"]["ProdThaiName"] = "Prod Thai Name";
	$fieldToolTipsproducts_Chart["English"]["ProdThaiName"] = "";
	$fieldLabelsproducts_Chart["English"]["ProdEngName"] = "Prod Eng Name";
	$fieldToolTipsproducts_Chart["English"]["ProdEngName"] = "";
	$fieldLabelsproducts_Chart["English"]["Picture"] = "Picture";
	$fieldToolTipsproducts_Chart["English"]["Picture"] = "";
	$fieldLabelsproducts_Chart["English"]["ThaiModel"] = "Thai Model";
	$fieldToolTipsproducts_Chart["English"]["ThaiModel"] = "";
	$fieldLabelsproducts_Chart["English"]["EngModel"] = "Eng Model";
	$fieldToolTipsproducts_Chart["English"]["EngModel"] = "";
	$fieldLabelsproducts_Chart["English"]["MixNo"] = "Mix No";
	$fieldToolTipsproducts_Chart["English"]["MixNo"] = "";
	$fieldLabelsproducts_Chart["English"]["ProdWt"] = "Prod Wt";
	$fieldToolTipsproducts_Chart["English"]["ProdWt"] = "";
	$fieldLabelsproducts_Chart["English"]["ColorMixNo"] = "Color Mix No";
	$fieldToolTipsproducts_Chart["English"]["ColorMixNo"] = "";
	$fieldLabelsproducts_Chart["English"]["FaceWt"] = "Face Wt";
	$fieldToolTipsproducts_Chart["English"]["FaceWt"] = "";
	$fieldLabelsproducts_Chart["English"]["Mold"] = "Mold";
	$fieldToolTipsproducts_Chart["English"]["Mold"] = "";
	$fieldLabelsproducts_Chart["English"]["PiecesPerMould"] = "Pieces Per Mould";
	$fieldToolTipsproducts_Chart["English"]["PiecesPerMould"] = "";
	$fieldLabelsproducts_Chart["English"]["ProductCost"] = "Product Cost";
	$fieldToolTipsproducts_Chart["English"]["ProductCost"] = "";
	$fieldLabelsproducts_Chart["English"]["PriceRetail"] = "Price Retail";
	$fieldToolTipsproducts_Chart["English"]["PriceRetail"] = "";
	$fieldLabelsproducts_Chart["English"]["PriceWholeSale"] = "Price Whole Sale";
	$fieldToolTipsproducts_Chart["English"]["PriceWholeSale"] = "";
	$fieldLabelsproducts_Chart["English"]["ProdStockGoal"] = "Prod Stock Goal";
	$fieldToolTipsproducts_Chart["English"]["ProdStockGoal"] = "";
	$fieldLabelsproducts_Chart["English"]["ThaiCom"] = "Thai Com";
	$fieldToolTipsproducts_Chart["English"]["ThaiCom"] = "";
	$fieldLabelsproducts_Chart["English"]["EngCom"] = "Eng Com";
	$fieldToolTipsproducts_Chart["English"]["EngCom"] = "";
	$fieldLabelsproducts_Chart["English"]["Status"] = "Status";
	$fieldToolTipsproducts_Chart["English"]["Status"] = "";
	$fieldLabelsproducts_Chart["English"]["MoldWt"] = "Mold Wt";
	$fieldToolTipsproducts_Chart["English"]["MoldWt"] = "";
	$fieldLabelsproducts_Chart["English"]["GrayWtMold"] = "Gray Wt Mold";
	$fieldToolTipsproducts_Chart["English"]["GrayWtMold"] = "";
	$fieldLabelsproducts_Chart["English"]["ColorWtMold"] = "Color Wt Mold";
	$fieldToolTipsproducts_Chart["English"]["ColorWtMold"] = "";
	$fieldLabelsproducts_Chart["English"]["Length"] = "Length";
	$fieldToolTipsproducts_Chart["English"]["Length"] = "";
	$fieldLabelsproducts_Chart["English"]["Width1"] = "Width1";
	$fieldToolTipsproducts_Chart["English"]["Width1"] = "";
	$fieldLabelsproducts_Chart["English"]["Thickness"] = "Thickness";
	$fieldToolTipsproducts_Chart["English"]["Thickness"] = "";
	$fieldLabelsproducts_Chart["English"]["ProdNo"] = "Prod No";
	$fieldToolTipsproducts_Chart["English"]["ProdNo"] = "";
	if (count($fieldToolTipsproducts_Chart["English"]))
		$tdataproducts_Chart[".isUseToolTips"] = true;
}
	
	
	$tdataproducts_Chart[".NCSearch"] = true;

	$tdataproducts_Chart[".ChartRefreshTime"] = 0;


$tdataproducts_Chart[".shortTableName"] = "products_Chart";
$tdataproducts_Chart[".nSecOptions"] = 0;
$tdataproducts_Chart[".recsPerRowList"] = 1;
$tdataproducts_Chart[".mainTableOwnerID"] = "";
$tdataproducts_Chart[".moveNext"] = 1;
$tdataproducts_Chart[".nType"] = 3;

$tdataproducts_Chart[".strOriginalTableName"] = "products";




$tdataproducts_Chart[".showAddInPopup"] = false;

$tdataproducts_Chart[".showEditInPopup"] = false;

$tdataproducts_Chart[".showViewInPopup"] = false;

$tdataproducts_Chart[".fieldsForRegister"] = array();

$tdataproducts_Chart[".listAjax"] = false;

	$tdataproducts_Chart[".audit"] = false;

	$tdataproducts_Chart[".locking"] = false;

$tdataproducts_Chart[".listIcons"] = true;
$tdataproducts_Chart[".edit"] = true;
$tdataproducts_Chart[".inlineEdit"] = true;
$tdataproducts_Chart[".inlineAdd"] = true;
$tdataproducts_Chart[".view"] = true;



$tdataproducts_Chart[".delete"] = true;

$tdataproducts_Chart[".showSimpleSearchOptions"] = false;

$tdataproducts_Chart[".showSearchPanel"] = true;

if (isMobile())
	$tdataproducts_Chart[".isUseAjaxSuggest"] = false;
else 
	$tdataproducts_Chart[".isUseAjaxSuggest"] = true;


// button handlers file names

$tdataproducts_Chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproducts_Chart[".isUseTimeForSearch"] = false;




$tdataproducts_Chart[".allSearchFields"] = array();

$tdataproducts_Chart[".allSearchFields"][] = "ProdGrpCode";
$tdataproducts_Chart[".allSearchFields"][] = "ProdThaiName";
$tdataproducts_Chart[".allSearchFields"][] = "ProdEngName";
$tdataproducts_Chart[".allSearchFields"][] = "Picture";
$tdataproducts_Chart[".allSearchFields"][] = "ThaiModel";
$tdataproducts_Chart[".allSearchFields"][] = "EngModel";
$tdataproducts_Chart[".allSearchFields"][] = "MixNo";
$tdataproducts_Chart[".allSearchFields"][] = "ProdWt";
$tdataproducts_Chart[".allSearchFields"][] = "ColorMixNo";
$tdataproducts_Chart[".allSearchFields"][] = "FaceWt";
$tdataproducts_Chart[".allSearchFields"][] = "Mold";
$tdataproducts_Chart[".allSearchFields"][] = "PiecesPerMould";
$tdataproducts_Chart[".allSearchFields"][] = "ProductCost";
$tdataproducts_Chart[".allSearchFields"][] = "PriceRetail";
$tdataproducts_Chart[".allSearchFields"][] = "PriceWholeSale";
$tdataproducts_Chart[".allSearchFields"][] = "ProdStockGoal";
$tdataproducts_Chart[".allSearchFields"][] = "ThaiCom";
$tdataproducts_Chart[".allSearchFields"][] = "EngCom";
$tdataproducts_Chart[".allSearchFields"][] = "Status";
$tdataproducts_Chart[".allSearchFields"][] = "MoldWt";
$tdataproducts_Chart[".allSearchFields"][] = "GrayWtMold";
$tdataproducts_Chart[".allSearchFields"][] = "ColorWtMold";
$tdataproducts_Chart[".allSearchFields"][] = "Length";
$tdataproducts_Chart[".allSearchFields"][] = "Width1";
$tdataproducts_Chart[".allSearchFields"][] = "Thickness";
$tdataproducts_Chart[".allSearchFields"][] = "ProdNo";

$tdataproducts_Chart[".googleLikeFields"][] = "ProdGrpCode";
$tdataproducts_Chart[".googleLikeFields"][] = "ProdThaiName";
$tdataproducts_Chart[".googleLikeFields"][] = "ProdEngName";
$tdataproducts_Chart[".googleLikeFields"][] = "Picture";
$tdataproducts_Chart[".googleLikeFields"][] = "ThaiModel";
$tdataproducts_Chart[".googleLikeFields"][] = "EngModel";
$tdataproducts_Chart[".googleLikeFields"][] = "MixNo";
$tdataproducts_Chart[".googleLikeFields"][] = "ProdWt";
$tdataproducts_Chart[".googleLikeFields"][] = "ColorMixNo";
$tdataproducts_Chart[".googleLikeFields"][] = "FaceWt";
$tdataproducts_Chart[".googleLikeFields"][] = "Mold";
$tdataproducts_Chart[".googleLikeFields"][] = "PiecesPerMould";
$tdataproducts_Chart[".googleLikeFields"][] = "ProductCost";
$tdataproducts_Chart[".googleLikeFields"][] = "PriceRetail";
$tdataproducts_Chart[".googleLikeFields"][] = "PriceWholeSale";
$tdataproducts_Chart[".googleLikeFields"][] = "ProdStockGoal";
$tdataproducts_Chart[".googleLikeFields"][] = "ThaiCom";
$tdataproducts_Chart[".googleLikeFields"][] = "EngCom";
$tdataproducts_Chart[".googleLikeFields"][] = "Status";
$tdataproducts_Chart[".googleLikeFields"][] = "MoldWt";
$tdataproducts_Chart[".googleLikeFields"][] = "GrayWtMold";
$tdataproducts_Chart[".googleLikeFields"][] = "ColorWtMold";
$tdataproducts_Chart[".googleLikeFields"][] = "Length";
$tdataproducts_Chart[".googleLikeFields"][] = "Width1";
$tdataproducts_Chart[".googleLikeFields"][] = "Thickness";
$tdataproducts_Chart[".googleLikeFields"][] = "ProdNo";


$tdataproducts_Chart[".advSearchFields"][] = "ProdGrpCode";
$tdataproducts_Chart[".advSearchFields"][] = "ProdThaiName";
$tdataproducts_Chart[".advSearchFields"][] = "ProdEngName";
$tdataproducts_Chart[".advSearchFields"][] = "Picture";
$tdataproducts_Chart[".advSearchFields"][] = "ThaiModel";
$tdataproducts_Chart[".advSearchFields"][] = "EngModel";
$tdataproducts_Chart[".advSearchFields"][] = "MixNo";
$tdataproducts_Chart[".advSearchFields"][] = "ProdWt";
$tdataproducts_Chart[".advSearchFields"][] = "ColorMixNo";
$tdataproducts_Chart[".advSearchFields"][] = "FaceWt";
$tdataproducts_Chart[".advSearchFields"][] = "Mold";
$tdataproducts_Chart[".advSearchFields"][] = "PiecesPerMould";
$tdataproducts_Chart[".advSearchFields"][] = "ProductCost";
$tdataproducts_Chart[".advSearchFields"][] = "PriceRetail";
$tdataproducts_Chart[".advSearchFields"][] = "PriceWholeSale";
$tdataproducts_Chart[".advSearchFields"][] = "ProdStockGoal";
$tdataproducts_Chart[".advSearchFields"][] = "ThaiCom";
$tdataproducts_Chart[".advSearchFields"][] = "EngCom";
$tdataproducts_Chart[".advSearchFields"][] = "Status";
$tdataproducts_Chart[".advSearchFields"][] = "MoldWt";
$tdataproducts_Chart[".advSearchFields"][] = "GrayWtMold";
$tdataproducts_Chart[".advSearchFields"][] = "ColorWtMold";
$tdataproducts_Chart[".advSearchFields"][] = "Length";
$tdataproducts_Chart[".advSearchFields"][] = "Width1";
$tdataproducts_Chart[".advSearchFields"][] = "Thickness";
$tdataproducts_Chart[".advSearchFields"][] = "ProdNo";

$tdataproducts_Chart[".isTableType"] = "chart";

	



// Access doesn't support subqueries from the same table as main



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataproducts_Chart[".strOrderBy"] = $tstrOrderBy;

$tdataproducts_Chart[".orderindexes"] = array();

$tdataproducts_Chart[".sqlHead"] = "SELECT ProdGrpCode,   ProdThaiName,   ProdEngName,   Picture,   ThaiModel,   EngModel,   MixNo,   ProdWt,   ColorMixNo,   FaceWt,   Mold,   PiecesPerMould,   ProductCost,   PriceRetail,   PriceWholeSale,   ProdStockGoal,   ThaiCom,   EngCom,   Status,   MoldWt,   GrayWtMold,   ColorWtMold,   Length,   Width1,   Thickness,   ProdNo";
$tdataproducts_Chart[".sqlFrom"] = "FROM products";
$tdataproducts_Chart[".sqlWhereExpr"] = "";
$tdataproducts_Chart[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproducts_Chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproducts_Chart[".arrGroupsPerPage"] = $arrGPP;

$tableKeysproducts_Chart = array();
$tableKeysproducts_Chart[] = "ProdNo";
$tdataproducts_Chart[".Keys"] = $tableKeysproducts_Chart;

$tdataproducts_Chart[".listFields"] = array();
$tdataproducts_Chart[".listFields"][] = "ProdGrpCode";
$tdataproducts_Chart[".listFields"][] = "ProdThaiName";
$tdataproducts_Chart[".listFields"][] = "ProdEngName";
$tdataproducts_Chart[".listFields"][] = "Picture";
$tdataproducts_Chart[".listFields"][] = "ThaiModel";
$tdataproducts_Chart[".listFields"][] = "EngModel";
$tdataproducts_Chart[".listFields"][] = "MixNo";
$tdataproducts_Chart[".listFields"][] = "ProdWt";
$tdataproducts_Chart[".listFields"][] = "ColorMixNo";
$tdataproducts_Chart[".listFields"][] = "FaceWt";
$tdataproducts_Chart[".listFields"][] = "Mold";
$tdataproducts_Chart[".listFields"][] = "PiecesPerMould";
$tdataproducts_Chart[".listFields"][] = "ProductCost";
$tdataproducts_Chart[".listFields"][] = "PriceRetail";
$tdataproducts_Chart[".listFields"][] = "PriceWholeSale";
$tdataproducts_Chart[".listFields"][] = "ProdStockGoal";
$tdataproducts_Chart[".listFields"][] = "ThaiCom";
$tdataproducts_Chart[".listFields"][] = "EngCom";
$tdataproducts_Chart[".listFields"][] = "Status";
$tdataproducts_Chart[".listFields"][] = "MoldWt";
$tdataproducts_Chart[".listFields"][] = "GrayWtMold";
$tdataproducts_Chart[".listFields"][] = "ColorWtMold";
$tdataproducts_Chart[".listFields"][] = "Length";
$tdataproducts_Chart[".listFields"][] = "Width1";
$tdataproducts_Chart[".listFields"][] = "Thickness";
$tdataproducts_Chart[".listFields"][] = "ProdNo";

$tdataproducts_Chart[".viewFields"] = array();
$tdataproducts_Chart[".viewFields"][] = "ProdGrpCode";
$tdataproducts_Chart[".viewFields"][] = "ProdThaiName";
$tdataproducts_Chart[".viewFields"][] = "ProdEngName";
$tdataproducts_Chart[".viewFields"][] = "Picture";
$tdataproducts_Chart[".viewFields"][] = "ThaiModel";
$tdataproducts_Chart[".viewFields"][] = "EngModel";
$tdataproducts_Chart[".viewFields"][] = "MixNo";
$tdataproducts_Chart[".viewFields"][] = "ProdWt";
$tdataproducts_Chart[".viewFields"][] = "ColorMixNo";
$tdataproducts_Chart[".viewFields"][] = "FaceWt";
$tdataproducts_Chart[".viewFields"][] = "Mold";
$tdataproducts_Chart[".viewFields"][] = "PiecesPerMould";
$tdataproducts_Chart[".viewFields"][] = "ProductCost";
$tdataproducts_Chart[".viewFields"][] = "PriceRetail";
$tdataproducts_Chart[".viewFields"][] = "PriceWholeSale";
$tdataproducts_Chart[".viewFields"][] = "ProdStockGoal";
$tdataproducts_Chart[".viewFields"][] = "ThaiCom";
$tdataproducts_Chart[".viewFields"][] = "EngCom";
$tdataproducts_Chart[".viewFields"][] = "Status";
$tdataproducts_Chart[".viewFields"][] = "MoldWt";
$tdataproducts_Chart[".viewFields"][] = "GrayWtMold";
$tdataproducts_Chart[".viewFields"][] = "ColorWtMold";
$tdataproducts_Chart[".viewFields"][] = "Length";
$tdataproducts_Chart[".viewFields"][] = "Width1";
$tdataproducts_Chart[".viewFields"][] = "Thickness";
$tdataproducts_Chart[".viewFields"][] = "ProdNo";

$tdataproducts_Chart[".addFields"] = array();
$tdataproducts_Chart[".addFields"][] = "ProdGrpCode";
$tdataproducts_Chart[".addFields"][] = "ProdThaiName";
$tdataproducts_Chart[".addFields"][] = "ProdEngName";
$tdataproducts_Chart[".addFields"][] = "Picture";
$tdataproducts_Chart[".addFields"][] = "ThaiModel";
$tdataproducts_Chart[".addFields"][] = "EngModel";
$tdataproducts_Chart[".addFields"][] = "MixNo";
$tdataproducts_Chart[".addFields"][] = "ProdWt";
$tdataproducts_Chart[".addFields"][] = "ColorMixNo";
$tdataproducts_Chart[".addFields"][] = "FaceWt";
$tdataproducts_Chart[".addFields"][] = "Mold";
$tdataproducts_Chart[".addFields"][] = "PiecesPerMould";
$tdataproducts_Chart[".addFields"][] = "ProductCost";
$tdataproducts_Chart[".addFields"][] = "PriceRetail";
$tdataproducts_Chart[".addFields"][] = "PriceWholeSale";
$tdataproducts_Chart[".addFields"][] = "ProdStockGoal";
$tdataproducts_Chart[".addFields"][] = "ThaiCom";
$tdataproducts_Chart[".addFields"][] = "EngCom";
$tdataproducts_Chart[".addFields"][] = "Status";
$tdataproducts_Chart[".addFields"][] = "MoldWt";
$tdataproducts_Chart[".addFields"][] = "GrayWtMold";
$tdataproducts_Chart[".addFields"][] = "ColorWtMold";
$tdataproducts_Chart[".addFields"][] = "Length";
$tdataproducts_Chart[".addFields"][] = "Width1";
$tdataproducts_Chart[".addFields"][] = "Thickness";

$tdataproducts_Chart[".inlineAddFields"] = array();
$tdataproducts_Chart[".inlineAddFields"][] = "ProdGrpCode";
$tdataproducts_Chart[".inlineAddFields"][] = "ProdThaiName";
$tdataproducts_Chart[".inlineAddFields"][] = "ProdEngName";
$tdataproducts_Chart[".inlineAddFields"][] = "Picture";
$tdataproducts_Chart[".inlineAddFields"][] = "ThaiModel";
$tdataproducts_Chart[".inlineAddFields"][] = "EngModel";
$tdataproducts_Chart[".inlineAddFields"][] = "MixNo";
$tdataproducts_Chart[".inlineAddFields"][] = "ProdWt";
$tdataproducts_Chart[".inlineAddFields"][] = "ColorMixNo";
$tdataproducts_Chart[".inlineAddFields"][] = "FaceWt";
$tdataproducts_Chart[".inlineAddFields"][] = "Mold";
$tdataproducts_Chart[".inlineAddFields"][] = "PiecesPerMould";
$tdataproducts_Chart[".inlineAddFields"][] = "ProductCost";
$tdataproducts_Chart[".inlineAddFields"][] = "PriceRetail";
$tdataproducts_Chart[".inlineAddFields"][] = "PriceWholeSale";
$tdataproducts_Chart[".inlineAddFields"][] = "ProdStockGoal";
$tdataproducts_Chart[".inlineAddFields"][] = "ThaiCom";
$tdataproducts_Chart[".inlineAddFields"][] = "EngCom";
$tdataproducts_Chart[".inlineAddFields"][] = "Status";
$tdataproducts_Chart[".inlineAddFields"][] = "MoldWt";
$tdataproducts_Chart[".inlineAddFields"][] = "GrayWtMold";
$tdataproducts_Chart[".inlineAddFields"][] = "ColorWtMold";
$tdataproducts_Chart[".inlineAddFields"][] = "Length";
$tdataproducts_Chart[".inlineAddFields"][] = "Width1";
$tdataproducts_Chart[".inlineAddFields"][] = "Thickness";

$tdataproducts_Chart[".editFields"] = array();
$tdataproducts_Chart[".editFields"][] = "ProdGrpCode";
$tdataproducts_Chart[".editFields"][] = "ProdThaiName";
$tdataproducts_Chart[".editFields"][] = "ProdEngName";
$tdataproducts_Chart[".editFields"][] = "Picture";
$tdataproducts_Chart[".editFields"][] = "ThaiModel";
$tdataproducts_Chart[".editFields"][] = "EngModel";
$tdataproducts_Chart[".editFields"][] = "MixNo";
$tdataproducts_Chart[".editFields"][] = "ProdWt";
$tdataproducts_Chart[".editFields"][] = "ColorMixNo";
$tdataproducts_Chart[".editFields"][] = "FaceWt";
$tdataproducts_Chart[".editFields"][] = "Mold";
$tdataproducts_Chart[".editFields"][] = "PiecesPerMould";
$tdataproducts_Chart[".editFields"][] = "ProductCost";
$tdataproducts_Chart[".editFields"][] = "PriceRetail";
$tdataproducts_Chart[".editFields"][] = "PriceWholeSale";
$tdataproducts_Chart[".editFields"][] = "ProdStockGoal";
$tdataproducts_Chart[".editFields"][] = "ThaiCom";
$tdataproducts_Chart[".editFields"][] = "EngCom";
$tdataproducts_Chart[".editFields"][] = "Status";
$tdataproducts_Chart[".editFields"][] = "MoldWt";
$tdataproducts_Chart[".editFields"][] = "GrayWtMold";
$tdataproducts_Chart[".editFields"][] = "ColorWtMold";
$tdataproducts_Chart[".editFields"][] = "Length";
$tdataproducts_Chart[".editFields"][] = "Width1";
$tdataproducts_Chart[".editFields"][] = "Thickness";

$tdataproducts_Chart[".inlineEditFields"] = array();
$tdataproducts_Chart[".inlineEditFields"][] = "ProdGrpCode";
$tdataproducts_Chart[".inlineEditFields"][] = "ProdThaiName";
$tdataproducts_Chart[".inlineEditFields"][] = "ProdEngName";
$tdataproducts_Chart[".inlineEditFields"][] = "Picture";
$tdataproducts_Chart[".inlineEditFields"][] = "ThaiModel";
$tdataproducts_Chart[".inlineEditFields"][] = "EngModel";
$tdataproducts_Chart[".inlineEditFields"][] = "MixNo";
$tdataproducts_Chart[".inlineEditFields"][] = "ProdWt";
$tdataproducts_Chart[".inlineEditFields"][] = "ColorMixNo";
$tdataproducts_Chart[".inlineEditFields"][] = "FaceWt";
$tdataproducts_Chart[".inlineEditFields"][] = "Mold";
$tdataproducts_Chart[".inlineEditFields"][] = "PiecesPerMould";
$tdataproducts_Chart[".inlineEditFields"][] = "ProductCost";
$tdataproducts_Chart[".inlineEditFields"][] = "PriceRetail";
$tdataproducts_Chart[".inlineEditFields"][] = "PriceWholeSale";
$tdataproducts_Chart[".inlineEditFields"][] = "ProdStockGoal";
$tdataproducts_Chart[".inlineEditFields"][] = "ThaiCom";
$tdataproducts_Chart[".inlineEditFields"][] = "EngCom";
$tdataproducts_Chart[".inlineEditFields"][] = "Status";
$tdataproducts_Chart[".inlineEditFields"][] = "MoldWt";
$tdataproducts_Chart[".inlineEditFields"][] = "GrayWtMold";
$tdataproducts_Chart[".inlineEditFields"][] = "ColorWtMold";
$tdataproducts_Chart[".inlineEditFields"][] = "Length";
$tdataproducts_Chart[".inlineEditFields"][] = "Width1";
$tdataproducts_Chart[".inlineEditFields"][] = "Thickness";

$tdataproducts_Chart[".exportFields"] = array();
$tdataproducts_Chart[".exportFields"][] = "ProdGrpCode";
$tdataproducts_Chart[".exportFields"][] = "ProdThaiName";
$tdataproducts_Chart[".exportFields"][] = "ProdEngName";
$tdataproducts_Chart[".exportFields"][] = "Picture";
$tdataproducts_Chart[".exportFields"][] = "ThaiModel";
$tdataproducts_Chart[".exportFields"][] = "EngModel";
$tdataproducts_Chart[".exportFields"][] = "MixNo";
$tdataproducts_Chart[".exportFields"][] = "ProdWt";
$tdataproducts_Chart[".exportFields"][] = "ColorMixNo";
$tdataproducts_Chart[".exportFields"][] = "FaceWt";
$tdataproducts_Chart[".exportFields"][] = "Mold";
$tdataproducts_Chart[".exportFields"][] = "PiecesPerMould";
$tdataproducts_Chart[".exportFields"][] = "ProductCost";
$tdataproducts_Chart[".exportFields"][] = "PriceRetail";
$tdataproducts_Chart[".exportFields"][] = "PriceWholeSale";
$tdataproducts_Chart[".exportFields"][] = "ProdStockGoal";
$tdataproducts_Chart[".exportFields"][] = "ThaiCom";
$tdataproducts_Chart[".exportFields"][] = "EngCom";
$tdataproducts_Chart[".exportFields"][] = "Status";
$tdataproducts_Chart[".exportFields"][] = "MoldWt";
$tdataproducts_Chart[".exportFields"][] = "GrayWtMold";
$tdataproducts_Chart[".exportFields"][] = "ColorWtMold";
$tdataproducts_Chart[".exportFields"][] = "Length";
$tdataproducts_Chart[".exportFields"][] = "Width1";
$tdataproducts_Chart[".exportFields"][] = "Thickness";
$tdataproducts_Chart[".exportFields"][] = "ProdNo";

$tdataproducts_Chart[".printFields"] = array();
$tdataproducts_Chart[".printFields"][] = "ProdGrpCode";
$tdataproducts_Chart[".printFields"][] = "ProdThaiName";
$tdataproducts_Chart[".printFields"][] = "ProdEngName";
$tdataproducts_Chart[".printFields"][] = "Picture";
$tdataproducts_Chart[".printFields"][] = "ThaiModel";
$tdataproducts_Chart[".printFields"][] = "EngModel";
$tdataproducts_Chart[".printFields"][] = "MixNo";
$tdataproducts_Chart[".printFields"][] = "ProdWt";
$tdataproducts_Chart[".printFields"][] = "ColorMixNo";
$tdataproducts_Chart[".printFields"][] = "FaceWt";
$tdataproducts_Chart[".printFields"][] = "Mold";
$tdataproducts_Chart[".printFields"][] = "PiecesPerMould";
$tdataproducts_Chart[".printFields"][] = "ProductCost";
$tdataproducts_Chart[".printFields"][] = "PriceRetail";
$tdataproducts_Chart[".printFields"][] = "PriceWholeSale";
$tdataproducts_Chart[".printFields"][] = "ProdStockGoal";
$tdataproducts_Chart[".printFields"][] = "ThaiCom";
$tdataproducts_Chart[".printFields"][] = "EngCom";
$tdataproducts_Chart[".printFields"][] = "Status";
$tdataproducts_Chart[".printFields"][] = "MoldWt";
$tdataproducts_Chart[".printFields"][] = "GrayWtMold";
$tdataproducts_Chart[".printFields"][] = "ColorWtMold";
$tdataproducts_Chart[".printFields"][] = "Length";
$tdataproducts_Chart[".printFields"][] = "Width1";
$tdataproducts_Chart[".printFields"][] = "Thickness";
$tdataproducts_Chart[".printFields"][] = "ProdNo";

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
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdataproducts_Chart["ProdGrpCode"] = $fdata;
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
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdataproducts_Chart["ProdThaiName"] = $fdata;
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
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdataproducts_Chart["ProdEngName"] = $fdata;
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
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdataproducts_Chart["Picture"] = $fdata;
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
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdataproducts_Chart["ThaiModel"] = $fdata;
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
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdataproducts_Chart["EngModel"] = $fdata;
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
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdataproducts_Chart["MixNo"] = $fdata;
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
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdataproducts_Chart["ProdWt"] = $fdata;
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
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdataproducts_Chart["ColorMixNo"] = $fdata;
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
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdataproducts_Chart["FaceWt"] = $fdata;
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
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdataproducts_Chart["Mold"] = $fdata;
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
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdataproducts_Chart["PiecesPerMould"] = $fdata;
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
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdataproducts_Chart["ProductCost"] = $fdata;
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
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdataproducts_Chart["PriceRetail"] = $fdata;
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
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdataproducts_Chart["PriceWholeSale"] = $fdata;
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
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdataproducts_Chart["ProdStockGoal"] = $fdata;
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
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdataproducts_Chart["ThaiCom"] = $fdata;
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
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdataproducts_Chart["EngCom"] = $fdata;
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
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdataproducts_Chart["Status"] = $fdata;
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
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdataproducts_Chart["MoldWt"] = $fdata;
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
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdataproducts_Chart["GrayWtMold"] = $fdata;
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
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdataproducts_Chart["ColorWtMold"] = $fdata;
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
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdataproducts_Chart["Length"] = $fdata;
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
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdataproducts_Chart["Width1"] = $fdata;
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
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdataproducts_Chart["Thickness"] = $fdata;
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
	
	$fdata["ViewFormats"]["chart"] = $vdata;
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
	
		
		
	$tdataproducts_Chart["ProdNo"] = $fdata;

	$tdataproducts_Chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">products Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_pie</attr>
		</attr>
		
		<attr value="parameters">';
	$tdataproducts_Chart[".chartXml"] .= '<attr value="0">
			<attr value="name">ProdWt</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">4</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr"></attr>';
	$tdataproducts_Chart[".chartXml"] .= '</attr>';
	$tdataproducts_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">ProdGrpCode</attr>
	</attr>';
	$tdataproducts_Chart[".chartXml"] .= '</attr>
			<attr value="appearance">';
	$tdataproducts_Chart[".chartXml"] .= '<attr value="scolor11">FF0000</attr>
			<attr value="scolor12">FF0000</attr>';

	$tdataproducts_Chart[".chartXml"] .= '<attr value="head">'.xmlencode("Chart Title").'</attr>
<attr value="foot">'.xmlencode("Legend Title").'</attr>
<attr value="y_axis_label">'.xmlencode("ProdWt").'</attr>

<attr value="color51">49563A</attr>
<attr value="color52">49563A</attr>
<attr value="color61">49563A</attr>
<attr value="color62">49563A</attr>
<attr value="color71">C7CDC1</attr>
<attr value="color72">C7CDC1</attr>
<attr value="color81">ECF0E8</attr>
<attr value="color82">ECF0E8</attr>
<attr value="color91">68838B</attr>
<attr value="color92">68838B</attr>
<attr value="color101">48505A</attr>
<attr value="color102">48505A</attr>
<attr value="color111">45595F</attr>
<attr value="color112">45595F</attr>
<attr value="color121"></attr>
<attr value="color122"></attr>
<attr value="color131">000000</attr>
<attr value="color132">000000</attr>
<attr value="color141">000000</attr>
<attr value="color142">000000</attr>

<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="saxes">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">5</attr>
<attr value="cscroll">true</attr>
<attr value="maxbarscroll">10</attr>';
$tdataproducts_Chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataproducts_Chart[".chartXml"] .= '<attr value="0">
		<attr value="name">ProdGrpCode</attr>
		<attr value="label">'.xmlencode("Prod Grp Code").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataproducts_Chart[".chartXml"] .= '<attr value="1">
		<attr value="name">ProdThaiName</attr>
		<attr value="label">'.xmlencode("Prod Thai Name").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataproducts_Chart[".chartXml"] .= '<attr value="2">
		<attr value="name">ProdEngName</attr>
		<attr value="label">'.xmlencode("Prod Eng Name").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataproducts_Chart[".chartXml"] .= '<attr value="3">
		<attr value="name">Picture</attr>
		<attr value="label">'.xmlencode("Picture").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataproducts_Chart[".chartXml"] .= '<attr value="4">
		<attr value="name">ThaiModel</attr>
		<attr value="label">'.xmlencode("Thai Model").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataproducts_Chart[".chartXml"] .= '<attr value="5">
		<attr value="name">EngModel</attr>
		<attr value="label">'.xmlencode("Eng Model").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataproducts_Chart[".chartXml"] .= '<attr value="6">
		<attr value="name">MixNo</attr>
		<attr value="label">'.xmlencode("Mix No").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataproducts_Chart[".chartXml"] .= '<attr value="7">
		<attr value="name">ProdWt</attr>
		<attr value="label">'.xmlencode("Prod Wt").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataproducts_Chart[".chartXml"] .= '<attr value="8">
		<attr value="name">ColorMixNo</attr>
		<attr value="label">'.xmlencode("Color Mix No").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataproducts_Chart[".chartXml"] .= '<attr value="9">
		<attr value="name">FaceWt</attr>
		<attr value="label">'.xmlencode("Face Wt").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataproducts_Chart[".chartXml"] .= '<attr value="10">
		<attr value="name">Mold</attr>
		<attr value="label">'.xmlencode("Mold").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataproducts_Chart[".chartXml"] .= '<attr value="11">
		<attr value="name">PiecesPerMould</attr>
		<attr value="label">'.xmlencode("Pieces Per Mould").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataproducts_Chart[".chartXml"] .= '<attr value="12">
		<attr value="name">ProductCost</attr>
		<attr value="label">'.xmlencode("Product Cost").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataproducts_Chart[".chartXml"] .= '<attr value="13">
		<attr value="name">PriceRetail</attr>
		<attr value="label">'.xmlencode("Price Retail").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataproducts_Chart[".chartXml"] .= '<attr value="14">
		<attr value="name">PriceWholeSale</attr>
		<attr value="label">'.xmlencode("Price Whole Sale").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataproducts_Chart[".chartXml"] .= '<attr value="15">
		<attr value="name">ProdStockGoal</attr>
		<attr value="label">'.xmlencode("Prod Stock Goal").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataproducts_Chart[".chartXml"] .= '<attr value="16">
		<attr value="name">ThaiCom</attr>
		<attr value="label">'.xmlencode("Thai Com").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataproducts_Chart[".chartXml"] .= '<attr value="17">
		<attr value="name">EngCom</attr>
		<attr value="label">'.xmlencode("Eng Com").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataproducts_Chart[".chartXml"] .= '<attr value="18">
		<attr value="name">Status</attr>
		<attr value="label">'.xmlencode("Status").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataproducts_Chart[".chartXml"] .= '<attr value="19">
		<attr value="name">MoldWt</attr>
		<attr value="label">'.xmlencode("Mold Wt").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataproducts_Chart[".chartXml"] .= '<attr value="20">
		<attr value="name">GrayWtMold</attr>
		<attr value="label">'.xmlencode("Gray Wt Mold").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataproducts_Chart[".chartXml"] .= '<attr value="21">
		<attr value="name">ColorWtMold</attr>
		<attr value="label">'.xmlencode("Color Wt Mold").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataproducts_Chart[".chartXml"] .= '<attr value="22">
		<attr value="name">Length</attr>
		<attr value="label">'.xmlencode("Length").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataproducts_Chart[".chartXml"] .= '<attr value="23">
		<attr value="name">Width1</attr>
		<attr value="label">'.xmlencode("Width1").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataproducts_Chart[".chartXml"] .= '<attr value="24">
		<attr value="name">Thickness</attr>
		<attr value="label">'.xmlencode("Thickness").'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataproducts_Chart[".chartXml"] .= '<attr value="25">
		<attr value="name">ProdNo</attr>
		<attr value="label">'.xmlencode("Prod No").'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataproducts_Chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">products Chart</attr>
<attr value="short_table_name">products_Chart</attr>
</attr>

</chart>';
	
$tables_data["products Chart"]=&$tdataproducts_Chart;
$field_labels["products_Chart"] = &$fieldLabelsproducts_Chart;
$fieldToolTips["products Chart"] = &$fieldToolTipsproducts_Chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["products Chart"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["products Chart"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_products_Chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ProdGrpCode,   ProdThaiName,   ProdEngName,   Picture,   ThaiModel,   EngModel,   MixNo,   ProdWt,   ColorMixNo,   FaceWt,   Mold,   PiecesPerMould,   ProductCost,   PriceRetail,   PriceWholeSale,   ProdStockGoal,   ThaiCom,   EngCom,   Status,   MoldWt,   GrayWtMold,   ColorWtMold,   Length,   Width1,   Thickness,   ProdNo";
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
$queryData_products_Chart = createSqlQuery_products_Chart();
																										$tdataproducts_Chart[".sqlquery"] = $queryData_products_Chart;
	
if(isset($tdataproducts_Chart["field2"])){
	$tdataproducts_Chart["field2"]["LookupTable"] = "carscars_view";
	$tdataproducts_Chart["field2"]["LookupOrderBy"] = "name";
	$tdataproducts_Chart["field2"]["LookupType"] = 4;
	$tdataproducts_Chart["field2"]["LinkField"] = "email";
	$tdataproducts_Chart["field2"]["DisplayField"] = "name";
	$tdataproducts_Chart[".hasCustomViewField"] = true;
}

$tableEvents["products Chart"] = new eventsBase;
$tdataproducts_Chart[".hasEvents"] = false;

$cipherer = new RunnerCipherer("products Chart");

?>
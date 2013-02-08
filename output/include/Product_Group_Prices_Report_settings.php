<?php
require_once(getabspath("classes/cipherer.php"));
$tdataProduct_Group_Prices_Report = array();
	$tdataProduct_Group_Prices_Report[".NumberOfChars"] = 80; 
	$tdataProduct_Group_Prices_Report[".ShortName"] = "Product_Group_Prices_Report";
	$tdataProduct_Group_Prices_Report[".OwnerID"] = "";
	$tdataProduct_Group_Prices_Report[".OriginalTable"] = "products";

//	field labels
$fieldLabelsProduct_Group_Prices_Report = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsProduct_Group_Prices_Report["English"] = array();
	$fieldToolTipsProduct_Group_Prices_Report["English"] = array();
	$fieldLabelsProduct_Group_Prices_Report["English"]["ProdGrpCode"] = "Prod Grp Code";
	$fieldToolTipsProduct_Group_Prices_Report["English"]["ProdGrpCode"] = "";
	$fieldLabelsProduct_Group_Prices_Report["English"]["ProdThaiName"] = "Prod Thai Name";
	$fieldToolTipsProduct_Group_Prices_Report["English"]["ProdThaiName"] = "";
	$fieldLabelsProduct_Group_Prices_Report["English"]["ProdEngName"] = "Prod Eng Name";
	$fieldToolTipsProduct_Group_Prices_Report["English"]["ProdEngName"] = "";
	$fieldLabelsProduct_Group_Prices_Report["English"]["Picture"] = "Picture";
	$fieldToolTipsProduct_Group_Prices_Report["English"]["Picture"] = "";
	$fieldLabelsProduct_Group_Prices_Report["English"]["ThaiModel"] = "Thai Model";
	$fieldToolTipsProduct_Group_Prices_Report["English"]["ThaiModel"] = "";
	$fieldLabelsProduct_Group_Prices_Report["English"]["EngModel"] = "Eng Model";
	$fieldToolTipsProduct_Group_Prices_Report["English"]["EngModel"] = "";
	$fieldLabelsProduct_Group_Prices_Report["English"]["MixNo"] = "Mix No";
	$fieldToolTipsProduct_Group_Prices_Report["English"]["MixNo"] = "";
	$fieldLabelsProduct_Group_Prices_Report["English"]["ProdWt"] = "Prod Wt";
	$fieldToolTipsProduct_Group_Prices_Report["English"]["ProdWt"] = "";
	$fieldLabelsProduct_Group_Prices_Report["English"]["ColorMixNo"] = "Color Mix No";
	$fieldToolTipsProduct_Group_Prices_Report["English"]["ColorMixNo"] = "";
	$fieldLabelsProduct_Group_Prices_Report["English"]["FaceWt"] = "Face Wt";
	$fieldToolTipsProduct_Group_Prices_Report["English"]["FaceWt"] = "";
	$fieldLabelsProduct_Group_Prices_Report["English"]["Mold"] = "Mold";
	$fieldToolTipsProduct_Group_Prices_Report["English"]["Mold"] = "";
	$fieldLabelsProduct_Group_Prices_Report["English"]["PiecesPerMould"] = "Pieces Per Mould";
	$fieldToolTipsProduct_Group_Prices_Report["English"]["PiecesPerMould"] = "";
	$fieldLabelsProduct_Group_Prices_Report["English"]["ProductCost"] = "Product Cost";
	$fieldToolTipsProduct_Group_Prices_Report["English"]["ProductCost"] = "";
	$fieldLabelsProduct_Group_Prices_Report["English"]["PriceRetail"] = "Price Retail";
	$fieldToolTipsProduct_Group_Prices_Report["English"]["PriceRetail"] = "";
	$fieldLabelsProduct_Group_Prices_Report["English"]["PriceWholeSale"] = "Price Whole Sale";
	$fieldToolTipsProduct_Group_Prices_Report["English"]["PriceWholeSale"] = "";
	$fieldLabelsProduct_Group_Prices_Report["English"]["ProdStockGoal"] = "Prod Stock Goal";
	$fieldToolTipsProduct_Group_Prices_Report["English"]["ProdStockGoal"] = "";
	$fieldLabelsProduct_Group_Prices_Report["English"]["ThaiCom"] = "Thai Com";
	$fieldToolTipsProduct_Group_Prices_Report["English"]["ThaiCom"] = "";
	$fieldLabelsProduct_Group_Prices_Report["English"]["EngCom"] = "Eng Com";
	$fieldToolTipsProduct_Group_Prices_Report["English"]["EngCom"] = "";
	$fieldLabelsProduct_Group_Prices_Report["English"]["Status"] = "Status";
	$fieldToolTipsProduct_Group_Prices_Report["English"]["Status"] = "";
	$fieldLabelsProduct_Group_Prices_Report["English"]["MoldWt"] = "Mold Wt";
	$fieldToolTipsProduct_Group_Prices_Report["English"]["MoldWt"] = "";
	$fieldLabelsProduct_Group_Prices_Report["English"]["GrayWtMold"] = "Gray Wt Mold";
	$fieldToolTipsProduct_Group_Prices_Report["English"]["GrayWtMold"] = "";
	$fieldLabelsProduct_Group_Prices_Report["English"]["ColorWtMold"] = "Color Wt Mold";
	$fieldToolTipsProduct_Group_Prices_Report["English"]["ColorWtMold"] = "";
	$fieldLabelsProduct_Group_Prices_Report["English"]["Length"] = "Length";
	$fieldToolTipsProduct_Group_Prices_Report["English"]["Length"] = "";
	$fieldLabelsProduct_Group_Prices_Report["English"]["Width1"] = "Width1";
	$fieldToolTipsProduct_Group_Prices_Report["English"]["Width1"] = "";
	$fieldLabelsProduct_Group_Prices_Report["English"]["Thickness"] = "Thickness";
	$fieldToolTipsProduct_Group_Prices_Report["English"]["Thickness"] = "";
	$fieldLabelsProduct_Group_Prices_Report["English"]["ProdNo"] = "Prod No";
	$fieldToolTipsProduct_Group_Prices_Report["English"]["ProdNo"] = "";
	if (count($fieldToolTipsProduct_Group_Prices_Report["English"]))
		$tdataProduct_Group_Prices_Report[".isUseToolTips"] = true;
}
	
	
	$tdataProduct_Group_Prices_Report[".NCSearch"] = true;



$tdataProduct_Group_Prices_Report[".shortTableName"] = "Product_Group_Prices_Report";
$tdataProduct_Group_Prices_Report[".nSecOptions"] = 0;
$tdataProduct_Group_Prices_Report[".recsPerRowList"] = 1;
$tdataProduct_Group_Prices_Report[".mainTableOwnerID"] = "";
$tdataProduct_Group_Prices_Report[".moveNext"] = 1;
$tdataProduct_Group_Prices_Report[".nType"] = 2;

$tdataProduct_Group_Prices_Report[".strOriginalTableName"] = "products";




$tdataProduct_Group_Prices_Report[".showAddInPopup"] = false;

$tdataProduct_Group_Prices_Report[".showEditInPopup"] = false;

$tdataProduct_Group_Prices_Report[".showViewInPopup"] = false;

$tdataProduct_Group_Prices_Report[".fieldsForRegister"] = array();

$tdataProduct_Group_Prices_Report[".listAjax"] = false;

	$tdataProduct_Group_Prices_Report[".audit"] = false;

	$tdataProduct_Group_Prices_Report[".locking"] = false;

$tdataProduct_Group_Prices_Report[".listIcons"] = true;
$tdataProduct_Group_Prices_Report[".edit"] = true;
$tdataProduct_Group_Prices_Report[".inlineEdit"] = true;
$tdataProduct_Group_Prices_Report[".inlineAdd"] = true;
$tdataProduct_Group_Prices_Report[".view"] = true;

$tdataProduct_Group_Prices_Report[".exportTo"] = true;

$tdataProduct_Group_Prices_Report[".printFriendly"] = true;

$tdataProduct_Group_Prices_Report[".delete"] = true;

$tdataProduct_Group_Prices_Report[".showSimpleSearchOptions"] = false;

$tdataProduct_Group_Prices_Report[".showSearchPanel"] = true;

if (isMobile())
	$tdataProduct_Group_Prices_Report[".isUseAjaxSuggest"] = false;
else 
	$tdataProduct_Group_Prices_Report[".isUseAjaxSuggest"] = true;


// button handlers file names

$tdataProduct_Group_Prices_Report[".addPageEvents"] = false;

// use timepicker for search panel
$tdataProduct_Group_Prices_Report[".isUseTimeForSearch"] = false;




$tdataProduct_Group_Prices_Report[".allSearchFields"] = array();

$tdataProduct_Group_Prices_Report[".allSearchFields"][] = "ProdGrpCode";
$tdataProduct_Group_Prices_Report[".allSearchFields"][] = "ProdThaiName";
$tdataProduct_Group_Prices_Report[".allSearchFields"][] = "ProdEngName";
$tdataProduct_Group_Prices_Report[".allSearchFields"][] = "Picture";
$tdataProduct_Group_Prices_Report[".allSearchFields"][] = "ThaiModel";
$tdataProduct_Group_Prices_Report[".allSearchFields"][] = "EngModel";
$tdataProduct_Group_Prices_Report[".allSearchFields"][] = "MixNo";
$tdataProduct_Group_Prices_Report[".allSearchFields"][] = "ProdWt";
$tdataProduct_Group_Prices_Report[".allSearchFields"][] = "ColorMixNo";
$tdataProduct_Group_Prices_Report[".allSearchFields"][] = "FaceWt";
$tdataProduct_Group_Prices_Report[".allSearchFields"][] = "Mold";
$tdataProduct_Group_Prices_Report[".allSearchFields"][] = "PiecesPerMould";
$tdataProduct_Group_Prices_Report[".allSearchFields"][] = "ProductCost";
$tdataProduct_Group_Prices_Report[".allSearchFields"][] = "PriceRetail";
$tdataProduct_Group_Prices_Report[".allSearchFields"][] = "PriceWholeSale";
$tdataProduct_Group_Prices_Report[".allSearchFields"][] = "ProdStockGoal";
$tdataProduct_Group_Prices_Report[".allSearchFields"][] = "ThaiCom";
$tdataProduct_Group_Prices_Report[".allSearchFields"][] = "EngCom";
$tdataProduct_Group_Prices_Report[".allSearchFields"][] = "Status";
$tdataProduct_Group_Prices_Report[".allSearchFields"][] = "MoldWt";
$tdataProduct_Group_Prices_Report[".allSearchFields"][] = "GrayWtMold";
$tdataProduct_Group_Prices_Report[".allSearchFields"][] = "ColorWtMold";
$tdataProduct_Group_Prices_Report[".allSearchFields"][] = "Length";
$tdataProduct_Group_Prices_Report[".allSearchFields"][] = "Width1";
$tdataProduct_Group_Prices_Report[".allSearchFields"][] = "Thickness";
$tdataProduct_Group_Prices_Report[".allSearchFields"][] = "ProdNo";

$tdataProduct_Group_Prices_Report[".googleLikeFields"][] = "ProdGrpCode";
$tdataProduct_Group_Prices_Report[".googleLikeFields"][] = "ProdThaiName";
$tdataProduct_Group_Prices_Report[".googleLikeFields"][] = "ProdEngName";
$tdataProduct_Group_Prices_Report[".googleLikeFields"][] = "Picture";
$tdataProduct_Group_Prices_Report[".googleLikeFields"][] = "ThaiModel";
$tdataProduct_Group_Prices_Report[".googleLikeFields"][] = "EngModel";
$tdataProduct_Group_Prices_Report[".googleLikeFields"][] = "MixNo";
$tdataProduct_Group_Prices_Report[".googleLikeFields"][] = "ProdWt";
$tdataProduct_Group_Prices_Report[".googleLikeFields"][] = "ColorMixNo";
$tdataProduct_Group_Prices_Report[".googleLikeFields"][] = "FaceWt";
$tdataProduct_Group_Prices_Report[".googleLikeFields"][] = "Mold";
$tdataProduct_Group_Prices_Report[".googleLikeFields"][] = "PiecesPerMould";
$tdataProduct_Group_Prices_Report[".googleLikeFields"][] = "ProductCost";
$tdataProduct_Group_Prices_Report[".googleLikeFields"][] = "PriceRetail";
$tdataProduct_Group_Prices_Report[".googleLikeFields"][] = "PriceWholeSale";
$tdataProduct_Group_Prices_Report[".googleLikeFields"][] = "ProdStockGoal";
$tdataProduct_Group_Prices_Report[".googleLikeFields"][] = "ThaiCom";
$tdataProduct_Group_Prices_Report[".googleLikeFields"][] = "EngCom";
$tdataProduct_Group_Prices_Report[".googleLikeFields"][] = "Status";
$tdataProduct_Group_Prices_Report[".googleLikeFields"][] = "MoldWt";
$tdataProduct_Group_Prices_Report[".googleLikeFields"][] = "GrayWtMold";
$tdataProduct_Group_Prices_Report[".googleLikeFields"][] = "ColorWtMold";
$tdataProduct_Group_Prices_Report[".googleLikeFields"][] = "Length";
$tdataProduct_Group_Prices_Report[".googleLikeFields"][] = "Width1";
$tdataProduct_Group_Prices_Report[".googleLikeFields"][] = "Thickness";
$tdataProduct_Group_Prices_Report[".googleLikeFields"][] = "ProdNo";


$tdataProduct_Group_Prices_Report[".advSearchFields"][] = "ProdGrpCode";
$tdataProduct_Group_Prices_Report[".advSearchFields"][] = "ProdThaiName";
$tdataProduct_Group_Prices_Report[".advSearchFields"][] = "ProdEngName";
$tdataProduct_Group_Prices_Report[".advSearchFields"][] = "Picture";
$tdataProduct_Group_Prices_Report[".advSearchFields"][] = "ThaiModel";
$tdataProduct_Group_Prices_Report[".advSearchFields"][] = "EngModel";
$tdataProduct_Group_Prices_Report[".advSearchFields"][] = "MixNo";
$tdataProduct_Group_Prices_Report[".advSearchFields"][] = "ProdWt";
$tdataProduct_Group_Prices_Report[".advSearchFields"][] = "ColorMixNo";
$tdataProduct_Group_Prices_Report[".advSearchFields"][] = "FaceWt";
$tdataProduct_Group_Prices_Report[".advSearchFields"][] = "Mold";
$tdataProduct_Group_Prices_Report[".advSearchFields"][] = "PiecesPerMould";
$tdataProduct_Group_Prices_Report[".advSearchFields"][] = "ProductCost";
$tdataProduct_Group_Prices_Report[".advSearchFields"][] = "PriceRetail";
$tdataProduct_Group_Prices_Report[".advSearchFields"][] = "PriceWholeSale";
$tdataProduct_Group_Prices_Report[".advSearchFields"][] = "ProdStockGoal";
$tdataProduct_Group_Prices_Report[".advSearchFields"][] = "ThaiCom";
$tdataProduct_Group_Prices_Report[".advSearchFields"][] = "EngCom";
$tdataProduct_Group_Prices_Report[".advSearchFields"][] = "Status";
$tdataProduct_Group_Prices_Report[".advSearchFields"][] = "MoldWt";
$tdataProduct_Group_Prices_Report[".advSearchFields"][] = "GrayWtMold";
$tdataProduct_Group_Prices_Report[".advSearchFields"][] = "ColorWtMold";
$tdataProduct_Group_Prices_Report[".advSearchFields"][] = "Length";
$tdataProduct_Group_Prices_Report[".advSearchFields"][] = "Width1";
$tdataProduct_Group_Prices_Report[".advSearchFields"][] = "Thickness";
$tdataProduct_Group_Prices_Report[".advSearchFields"][] = "ProdNo";

$tdataProduct_Group_Prices_Report[".isTableType"] = "report";

	



// Access doesn't support subqueries from the same table as main




$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataProduct_Group_Prices_Report[".strOrderBy"] = $tstrOrderBy;

$tdataProduct_Group_Prices_Report[".orderindexes"] = array();

$tdataProduct_Group_Prices_Report[".sqlHead"] = "SELECT ProdGrpCode,   ProdThaiName,   ProdEngName,   Picture,   ThaiModel,   EngModel,   MixNo,   ProdWt,   ColorMixNo,   FaceWt,   Mold,   PiecesPerMould,   ProductCost,   PriceRetail,   PriceWholeSale,   ProdStockGoal,   ThaiCom,   EngCom,   Status,   MoldWt,   GrayWtMold,   ColorWtMold,   Length,   Width1,   Thickness,   ProdNo";
$tdataProduct_Group_Prices_Report[".sqlFrom"] = "FROM products";
$tdataProduct_Group_Prices_Report[".sqlWhereExpr"] = "";
$tdataProduct_Group_Prices_Report[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataProduct_Group_Prices_Report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataProduct_Group_Prices_Report[".arrGroupsPerPage"] = $arrGPP;

$tableKeysProduct_Group_Prices_Report = array();
$tableKeysProduct_Group_Prices_Report[] = "ProdNo";
$tdataProduct_Group_Prices_Report[".Keys"] = $tableKeysProduct_Group_Prices_Report;

$tdataProduct_Group_Prices_Report[".listFields"] = array();
$tdataProduct_Group_Prices_Report[".listFields"][] = "ProdGrpCode";
$tdataProduct_Group_Prices_Report[".listFields"][] = "ProdThaiName";
$tdataProduct_Group_Prices_Report[".listFields"][] = "ProdEngName";
$tdataProduct_Group_Prices_Report[".listFields"][] = "Picture";
$tdataProduct_Group_Prices_Report[".listFields"][] = "ThaiModel";
$tdataProduct_Group_Prices_Report[".listFields"][] = "EngModel";
$tdataProduct_Group_Prices_Report[".listFields"][] = "MixNo";
$tdataProduct_Group_Prices_Report[".listFields"][] = "ProdWt";
$tdataProduct_Group_Prices_Report[".listFields"][] = "ColorMixNo";
$tdataProduct_Group_Prices_Report[".listFields"][] = "FaceWt";
$tdataProduct_Group_Prices_Report[".listFields"][] = "Mold";
$tdataProduct_Group_Prices_Report[".listFields"][] = "PiecesPerMould";
$tdataProduct_Group_Prices_Report[".listFields"][] = "ProductCost";
$tdataProduct_Group_Prices_Report[".listFields"][] = "PriceRetail";
$tdataProduct_Group_Prices_Report[".listFields"][] = "PriceWholeSale";
$tdataProduct_Group_Prices_Report[".listFields"][] = "ProdStockGoal";
$tdataProduct_Group_Prices_Report[".listFields"][] = "ThaiCom";
$tdataProduct_Group_Prices_Report[".listFields"][] = "EngCom";
$tdataProduct_Group_Prices_Report[".listFields"][] = "Status";
$tdataProduct_Group_Prices_Report[".listFields"][] = "MoldWt";
$tdataProduct_Group_Prices_Report[".listFields"][] = "GrayWtMold";
$tdataProduct_Group_Prices_Report[".listFields"][] = "ColorWtMold";
$tdataProduct_Group_Prices_Report[".listFields"][] = "Length";
$tdataProduct_Group_Prices_Report[".listFields"][] = "Width1";
$tdataProduct_Group_Prices_Report[".listFields"][] = "Thickness";
$tdataProduct_Group_Prices_Report[".listFields"][] = "ProdNo";

$tdataProduct_Group_Prices_Report[".viewFields"] = array();
$tdataProduct_Group_Prices_Report[".viewFields"][] = "ProdGrpCode";
$tdataProduct_Group_Prices_Report[".viewFields"][] = "ProdThaiName";
$tdataProduct_Group_Prices_Report[".viewFields"][] = "ProdEngName";
$tdataProduct_Group_Prices_Report[".viewFields"][] = "Picture";
$tdataProduct_Group_Prices_Report[".viewFields"][] = "ThaiModel";
$tdataProduct_Group_Prices_Report[".viewFields"][] = "EngModel";
$tdataProduct_Group_Prices_Report[".viewFields"][] = "MixNo";
$tdataProduct_Group_Prices_Report[".viewFields"][] = "ProdWt";
$tdataProduct_Group_Prices_Report[".viewFields"][] = "ColorMixNo";
$tdataProduct_Group_Prices_Report[".viewFields"][] = "FaceWt";
$tdataProduct_Group_Prices_Report[".viewFields"][] = "Mold";
$tdataProduct_Group_Prices_Report[".viewFields"][] = "PiecesPerMould";
$tdataProduct_Group_Prices_Report[".viewFields"][] = "ProductCost";
$tdataProduct_Group_Prices_Report[".viewFields"][] = "PriceRetail";
$tdataProduct_Group_Prices_Report[".viewFields"][] = "PriceWholeSale";
$tdataProduct_Group_Prices_Report[".viewFields"][] = "ProdStockGoal";
$tdataProduct_Group_Prices_Report[".viewFields"][] = "ThaiCom";
$tdataProduct_Group_Prices_Report[".viewFields"][] = "EngCom";
$tdataProduct_Group_Prices_Report[".viewFields"][] = "Status";
$tdataProduct_Group_Prices_Report[".viewFields"][] = "MoldWt";
$tdataProduct_Group_Prices_Report[".viewFields"][] = "GrayWtMold";
$tdataProduct_Group_Prices_Report[".viewFields"][] = "ColorWtMold";
$tdataProduct_Group_Prices_Report[".viewFields"][] = "Length";
$tdataProduct_Group_Prices_Report[".viewFields"][] = "Width1";
$tdataProduct_Group_Prices_Report[".viewFields"][] = "Thickness";
$tdataProduct_Group_Prices_Report[".viewFields"][] = "ProdNo";

$tdataProduct_Group_Prices_Report[".addFields"] = array();
$tdataProduct_Group_Prices_Report[".addFields"][] = "ProdGrpCode";
$tdataProduct_Group_Prices_Report[".addFields"][] = "ProdThaiName";
$tdataProduct_Group_Prices_Report[".addFields"][] = "ProdEngName";
$tdataProduct_Group_Prices_Report[".addFields"][] = "Picture";
$tdataProduct_Group_Prices_Report[".addFields"][] = "ThaiModel";
$tdataProduct_Group_Prices_Report[".addFields"][] = "EngModel";
$tdataProduct_Group_Prices_Report[".addFields"][] = "MixNo";
$tdataProduct_Group_Prices_Report[".addFields"][] = "ProdWt";
$tdataProduct_Group_Prices_Report[".addFields"][] = "ColorMixNo";
$tdataProduct_Group_Prices_Report[".addFields"][] = "FaceWt";
$tdataProduct_Group_Prices_Report[".addFields"][] = "Mold";
$tdataProduct_Group_Prices_Report[".addFields"][] = "PiecesPerMould";
$tdataProduct_Group_Prices_Report[".addFields"][] = "ProductCost";
$tdataProduct_Group_Prices_Report[".addFields"][] = "PriceRetail";
$tdataProduct_Group_Prices_Report[".addFields"][] = "PriceWholeSale";
$tdataProduct_Group_Prices_Report[".addFields"][] = "ProdStockGoal";
$tdataProduct_Group_Prices_Report[".addFields"][] = "ThaiCom";
$tdataProduct_Group_Prices_Report[".addFields"][] = "EngCom";
$tdataProduct_Group_Prices_Report[".addFields"][] = "Status";
$tdataProduct_Group_Prices_Report[".addFields"][] = "MoldWt";
$tdataProduct_Group_Prices_Report[".addFields"][] = "GrayWtMold";
$tdataProduct_Group_Prices_Report[".addFields"][] = "ColorWtMold";
$tdataProduct_Group_Prices_Report[".addFields"][] = "Length";
$tdataProduct_Group_Prices_Report[".addFields"][] = "Width1";
$tdataProduct_Group_Prices_Report[".addFields"][] = "Thickness";

$tdataProduct_Group_Prices_Report[".inlineAddFields"] = array();
$tdataProduct_Group_Prices_Report[".inlineAddFields"][] = "ProdGrpCode";
$tdataProduct_Group_Prices_Report[".inlineAddFields"][] = "ProdThaiName";
$tdataProduct_Group_Prices_Report[".inlineAddFields"][] = "ProdEngName";
$tdataProduct_Group_Prices_Report[".inlineAddFields"][] = "Picture";
$tdataProduct_Group_Prices_Report[".inlineAddFields"][] = "ThaiModel";
$tdataProduct_Group_Prices_Report[".inlineAddFields"][] = "EngModel";
$tdataProduct_Group_Prices_Report[".inlineAddFields"][] = "MixNo";
$tdataProduct_Group_Prices_Report[".inlineAddFields"][] = "ProdWt";
$tdataProduct_Group_Prices_Report[".inlineAddFields"][] = "ColorMixNo";
$tdataProduct_Group_Prices_Report[".inlineAddFields"][] = "FaceWt";
$tdataProduct_Group_Prices_Report[".inlineAddFields"][] = "Mold";
$tdataProduct_Group_Prices_Report[".inlineAddFields"][] = "PiecesPerMould";
$tdataProduct_Group_Prices_Report[".inlineAddFields"][] = "ProductCost";
$tdataProduct_Group_Prices_Report[".inlineAddFields"][] = "PriceRetail";
$tdataProduct_Group_Prices_Report[".inlineAddFields"][] = "PriceWholeSale";
$tdataProduct_Group_Prices_Report[".inlineAddFields"][] = "ProdStockGoal";
$tdataProduct_Group_Prices_Report[".inlineAddFields"][] = "ThaiCom";
$tdataProduct_Group_Prices_Report[".inlineAddFields"][] = "EngCom";
$tdataProduct_Group_Prices_Report[".inlineAddFields"][] = "Status";
$tdataProduct_Group_Prices_Report[".inlineAddFields"][] = "MoldWt";
$tdataProduct_Group_Prices_Report[".inlineAddFields"][] = "GrayWtMold";
$tdataProduct_Group_Prices_Report[".inlineAddFields"][] = "ColorWtMold";
$tdataProduct_Group_Prices_Report[".inlineAddFields"][] = "Length";
$tdataProduct_Group_Prices_Report[".inlineAddFields"][] = "Width1";
$tdataProduct_Group_Prices_Report[".inlineAddFields"][] = "Thickness";

$tdataProduct_Group_Prices_Report[".editFields"] = array();
$tdataProduct_Group_Prices_Report[".editFields"][] = "ProdGrpCode";
$tdataProduct_Group_Prices_Report[".editFields"][] = "ProdThaiName";
$tdataProduct_Group_Prices_Report[".editFields"][] = "ProdEngName";
$tdataProduct_Group_Prices_Report[".editFields"][] = "Picture";
$tdataProduct_Group_Prices_Report[".editFields"][] = "ThaiModel";
$tdataProduct_Group_Prices_Report[".editFields"][] = "EngModel";
$tdataProduct_Group_Prices_Report[".editFields"][] = "MixNo";
$tdataProduct_Group_Prices_Report[".editFields"][] = "ProdWt";
$tdataProduct_Group_Prices_Report[".editFields"][] = "ColorMixNo";
$tdataProduct_Group_Prices_Report[".editFields"][] = "FaceWt";
$tdataProduct_Group_Prices_Report[".editFields"][] = "Mold";
$tdataProduct_Group_Prices_Report[".editFields"][] = "PiecesPerMould";
$tdataProduct_Group_Prices_Report[".editFields"][] = "ProductCost";
$tdataProduct_Group_Prices_Report[".editFields"][] = "PriceRetail";
$tdataProduct_Group_Prices_Report[".editFields"][] = "PriceWholeSale";
$tdataProduct_Group_Prices_Report[".editFields"][] = "ProdStockGoal";
$tdataProduct_Group_Prices_Report[".editFields"][] = "ThaiCom";
$tdataProduct_Group_Prices_Report[".editFields"][] = "EngCom";
$tdataProduct_Group_Prices_Report[".editFields"][] = "Status";
$tdataProduct_Group_Prices_Report[".editFields"][] = "MoldWt";
$tdataProduct_Group_Prices_Report[".editFields"][] = "GrayWtMold";
$tdataProduct_Group_Prices_Report[".editFields"][] = "ColorWtMold";
$tdataProduct_Group_Prices_Report[".editFields"][] = "Length";
$tdataProduct_Group_Prices_Report[".editFields"][] = "Width1";
$tdataProduct_Group_Prices_Report[".editFields"][] = "Thickness";

$tdataProduct_Group_Prices_Report[".inlineEditFields"] = array();
$tdataProduct_Group_Prices_Report[".inlineEditFields"][] = "ProdGrpCode";
$tdataProduct_Group_Prices_Report[".inlineEditFields"][] = "ProdThaiName";
$tdataProduct_Group_Prices_Report[".inlineEditFields"][] = "ProdEngName";
$tdataProduct_Group_Prices_Report[".inlineEditFields"][] = "Picture";
$tdataProduct_Group_Prices_Report[".inlineEditFields"][] = "ThaiModel";
$tdataProduct_Group_Prices_Report[".inlineEditFields"][] = "EngModel";
$tdataProduct_Group_Prices_Report[".inlineEditFields"][] = "MixNo";
$tdataProduct_Group_Prices_Report[".inlineEditFields"][] = "ProdWt";
$tdataProduct_Group_Prices_Report[".inlineEditFields"][] = "ColorMixNo";
$tdataProduct_Group_Prices_Report[".inlineEditFields"][] = "FaceWt";
$tdataProduct_Group_Prices_Report[".inlineEditFields"][] = "Mold";
$tdataProduct_Group_Prices_Report[".inlineEditFields"][] = "PiecesPerMould";
$tdataProduct_Group_Prices_Report[".inlineEditFields"][] = "ProductCost";
$tdataProduct_Group_Prices_Report[".inlineEditFields"][] = "PriceRetail";
$tdataProduct_Group_Prices_Report[".inlineEditFields"][] = "PriceWholeSale";
$tdataProduct_Group_Prices_Report[".inlineEditFields"][] = "ProdStockGoal";
$tdataProduct_Group_Prices_Report[".inlineEditFields"][] = "ThaiCom";
$tdataProduct_Group_Prices_Report[".inlineEditFields"][] = "EngCom";
$tdataProduct_Group_Prices_Report[".inlineEditFields"][] = "Status";
$tdataProduct_Group_Prices_Report[".inlineEditFields"][] = "MoldWt";
$tdataProduct_Group_Prices_Report[".inlineEditFields"][] = "GrayWtMold";
$tdataProduct_Group_Prices_Report[".inlineEditFields"][] = "ColorWtMold";
$tdataProduct_Group_Prices_Report[".inlineEditFields"][] = "Length";
$tdataProduct_Group_Prices_Report[".inlineEditFields"][] = "Width1";
$tdataProduct_Group_Prices_Report[".inlineEditFields"][] = "Thickness";

$tdataProduct_Group_Prices_Report[".exportFields"] = array();
$tdataProduct_Group_Prices_Report[".exportFields"][] = "ProdGrpCode";
$tdataProduct_Group_Prices_Report[".exportFields"][] = "ProdThaiName";
$tdataProduct_Group_Prices_Report[".exportFields"][] = "ProdEngName";
$tdataProduct_Group_Prices_Report[".exportFields"][] = "Picture";
$tdataProduct_Group_Prices_Report[".exportFields"][] = "ThaiModel";
$tdataProduct_Group_Prices_Report[".exportFields"][] = "EngModel";
$tdataProduct_Group_Prices_Report[".exportFields"][] = "MixNo";
$tdataProduct_Group_Prices_Report[".exportFields"][] = "ProdWt";
$tdataProduct_Group_Prices_Report[".exportFields"][] = "ColorMixNo";
$tdataProduct_Group_Prices_Report[".exportFields"][] = "FaceWt";
$tdataProduct_Group_Prices_Report[".exportFields"][] = "Mold";
$tdataProduct_Group_Prices_Report[".exportFields"][] = "PiecesPerMould";
$tdataProduct_Group_Prices_Report[".exportFields"][] = "ProductCost";
$tdataProduct_Group_Prices_Report[".exportFields"][] = "PriceRetail";
$tdataProduct_Group_Prices_Report[".exportFields"][] = "PriceWholeSale";
$tdataProduct_Group_Prices_Report[".exportFields"][] = "ProdStockGoal";
$tdataProduct_Group_Prices_Report[".exportFields"][] = "ThaiCom";
$tdataProduct_Group_Prices_Report[".exportFields"][] = "EngCom";
$tdataProduct_Group_Prices_Report[".exportFields"][] = "Status";
$tdataProduct_Group_Prices_Report[".exportFields"][] = "MoldWt";
$tdataProduct_Group_Prices_Report[".exportFields"][] = "GrayWtMold";
$tdataProduct_Group_Prices_Report[".exportFields"][] = "ColorWtMold";
$tdataProduct_Group_Prices_Report[".exportFields"][] = "Length";
$tdataProduct_Group_Prices_Report[".exportFields"][] = "Width1";
$tdataProduct_Group_Prices_Report[".exportFields"][] = "Thickness";
$tdataProduct_Group_Prices_Report[".exportFields"][] = "ProdNo";

$tdataProduct_Group_Prices_Report[".printFields"] = array();
$tdataProduct_Group_Prices_Report[".printFields"][] = "ProdGrpCode";
$tdataProduct_Group_Prices_Report[".printFields"][] = "ProdThaiName";
$tdataProduct_Group_Prices_Report[".printFields"][] = "ProdEngName";
$tdataProduct_Group_Prices_Report[".printFields"][] = "Picture";
$tdataProduct_Group_Prices_Report[".printFields"][] = "ThaiModel";
$tdataProduct_Group_Prices_Report[".printFields"][] = "EngModel";
$tdataProduct_Group_Prices_Report[".printFields"][] = "MixNo";
$tdataProduct_Group_Prices_Report[".printFields"][] = "ProdWt";
$tdataProduct_Group_Prices_Report[".printFields"][] = "ColorMixNo";
$tdataProduct_Group_Prices_Report[".printFields"][] = "FaceWt";
$tdataProduct_Group_Prices_Report[".printFields"][] = "Mold";
$tdataProduct_Group_Prices_Report[".printFields"][] = "PiecesPerMould";
$tdataProduct_Group_Prices_Report[".printFields"][] = "ProductCost";
$tdataProduct_Group_Prices_Report[".printFields"][] = "PriceRetail";
$tdataProduct_Group_Prices_Report[".printFields"][] = "PriceWholeSale";
$tdataProduct_Group_Prices_Report[".printFields"][] = "ProdStockGoal";
$tdataProduct_Group_Prices_Report[".printFields"][] = "ThaiCom";
$tdataProduct_Group_Prices_Report[".printFields"][] = "EngCom";
$tdataProduct_Group_Prices_Report[".printFields"][] = "Status";
$tdataProduct_Group_Prices_Report[".printFields"][] = "MoldWt";
$tdataProduct_Group_Prices_Report[".printFields"][] = "GrayWtMold";
$tdataProduct_Group_Prices_Report[".printFields"][] = "ColorWtMold";
$tdataProduct_Group_Prices_Report[".printFields"][] = "Length";
$tdataProduct_Group_Prices_Report[".printFields"][] = "Width1";
$tdataProduct_Group_Prices_Report[".printFields"][] = "Thickness";
$tdataProduct_Group_Prices_Report[".printFields"][] = "ProdNo";

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
	
		
		
	$tdataProduct_Group_Prices_Report["ProdGrpCode"] = $fdata;
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
	
		
		
	$tdataProduct_Group_Prices_Report["ProdThaiName"] = $fdata;
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
	
		
		
	$tdataProduct_Group_Prices_Report["ProdEngName"] = $fdata;
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
	
		
		
	$tdataProduct_Group_Prices_Report["Picture"] = $fdata;
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
	
		
		
	$tdataProduct_Group_Prices_Report["ThaiModel"] = $fdata;
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
	
		
		
	$tdataProduct_Group_Prices_Report["EngModel"] = $fdata;
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
	
		
		
	$tdataProduct_Group_Prices_Report["MixNo"] = $fdata;
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
	
		
		
	$tdataProduct_Group_Prices_Report["ProdWt"] = $fdata;
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
	
		
		
	$tdataProduct_Group_Prices_Report["ColorMixNo"] = $fdata;
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
	
		
		
	$tdataProduct_Group_Prices_Report["FaceWt"] = $fdata;
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
	
		
		
	$tdataProduct_Group_Prices_Report["Mold"] = $fdata;
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
	
		
		
	$tdataProduct_Group_Prices_Report["PiecesPerMould"] = $fdata;
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
	
		
		
	$tdataProduct_Group_Prices_Report["ProductCost"] = $fdata;
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
	
		
		
	$tdataProduct_Group_Prices_Report["PriceRetail"] = $fdata;
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
	
		
		
	$tdataProduct_Group_Prices_Report["PriceWholeSale"] = $fdata;
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
	
		
		
	$tdataProduct_Group_Prices_Report["ProdStockGoal"] = $fdata;
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
	
		
		
	$tdataProduct_Group_Prices_Report["ThaiCom"] = $fdata;
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
	
		
		
	$tdataProduct_Group_Prices_Report["EngCom"] = $fdata;
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
	
		
		
	$tdataProduct_Group_Prices_Report["Status"] = $fdata;
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
	
		
		
	$tdataProduct_Group_Prices_Report["MoldWt"] = $fdata;
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
	
		
		
	$tdataProduct_Group_Prices_Report["GrayWtMold"] = $fdata;
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
	
		
		
	$tdataProduct_Group_Prices_Report["ColorWtMold"] = $fdata;
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
	
		
		
	$tdataProduct_Group_Prices_Report["Length"] = $fdata;
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
	
		
		
	$tdataProduct_Group_Prices_Report["Width1"] = $fdata;
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
	
		
		
	$tdataProduct_Group_Prices_Report["Thickness"] = $fdata;
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
	
		
		
	$tdataProduct_Group_Prices_Report["ProdNo"] = $fdata;

	
$tables_data["Product Group Prices Report"]=&$tdataProduct_Group_Prices_Report;
$field_labels["Product_Group_Prices_Report"] = &$fieldLabelsProduct_Group_Prices_Report;
$fieldToolTips["Product Group Prices Report"] = &$fieldToolTipsProduct_Group_Prices_Report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Product Group Prices Report"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Product Group Prices Report"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Product_Group_Prices_Report()
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
$queryData_Product_Group_Prices_Report = createSqlQuery_Product_Group_Prices_Report();
																										$tdataProduct_Group_Prices_Report[".sqlquery"] = $queryData_Product_Group_Prices_Report;
	
if(isset($tdataProduct_Group_Prices_Report["field2"])){
	$tdataProduct_Group_Prices_Report["field2"]["LookupTable"] = "carscars_view";
	$tdataProduct_Group_Prices_Report["field2"]["LookupOrderBy"] = "name";
	$tdataProduct_Group_Prices_Report["field2"]["LookupType"] = 4;
	$tdataProduct_Group_Prices_Report["field2"]["LinkField"] = "email";
	$tdataProduct_Group_Prices_Report["field2"]["DisplayField"] = "name";
	$tdataProduct_Group_Prices_Report[".hasCustomViewField"] = true;
}

$tableEvents["Product Group Prices Report"] = new eventsBase;
$tdataProduct_Group_Prices_Report[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Product Group Prices Report");

?>
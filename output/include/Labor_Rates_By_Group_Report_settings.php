<?php
require_once(getabspath("classes/cipherer.php"));
$tdataLabor_Rates_By_Group_Report = array();
	$tdataLabor_Rates_By_Group_Report[".NumberOfChars"] = 80; 
	$tdataLabor_Rates_By_Group_Report[".ShortName"] = "Labor_Rates_By_Group_Report";
	$tdataLabor_Rates_By_Group_Report[".OwnerID"] = "";
	$tdataLabor_Rates_By_Group_Report[".OriginalTable"] = "products";

//	field labels
$fieldLabelsLabor_Rates_By_Group_Report = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsLabor_Rates_By_Group_Report["English"] = array();
	$fieldToolTipsLabor_Rates_By_Group_Report["English"] = array();
	$fieldLabelsLabor_Rates_By_Group_Report["English"]["ProdGrpCode"] = "Prod Grp Code";
	$fieldToolTipsLabor_Rates_By_Group_Report["English"]["ProdGrpCode"] = "";
	$fieldLabelsLabor_Rates_By_Group_Report["English"]["ProdThaiName"] = "Prod Thai Name";
	$fieldToolTipsLabor_Rates_By_Group_Report["English"]["ProdThaiName"] = "";
	$fieldLabelsLabor_Rates_By_Group_Report["English"]["ProdEngName"] = "Prod Eng Name";
	$fieldToolTipsLabor_Rates_By_Group_Report["English"]["ProdEngName"] = "";
	$fieldLabelsLabor_Rates_By_Group_Report["English"]["Picture"] = "Picture";
	$fieldToolTipsLabor_Rates_By_Group_Report["English"]["Picture"] = "";
	$fieldLabelsLabor_Rates_By_Group_Report["English"]["ThaiModel"] = "Thai Model";
	$fieldToolTipsLabor_Rates_By_Group_Report["English"]["ThaiModel"] = "";
	$fieldLabelsLabor_Rates_By_Group_Report["English"]["EngModel"] = "Eng Model";
	$fieldToolTipsLabor_Rates_By_Group_Report["English"]["EngModel"] = "";
	$fieldLabelsLabor_Rates_By_Group_Report["English"]["MixNo"] = "Mix No";
	$fieldToolTipsLabor_Rates_By_Group_Report["English"]["MixNo"] = "";
	$fieldLabelsLabor_Rates_By_Group_Report["English"]["ProdWt"] = "Prod Wt";
	$fieldToolTipsLabor_Rates_By_Group_Report["English"]["ProdWt"] = "";
	$fieldLabelsLabor_Rates_By_Group_Report["English"]["ColorMixNo"] = "Color Mix No";
	$fieldToolTipsLabor_Rates_By_Group_Report["English"]["ColorMixNo"] = "";
	$fieldLabelsLabor_Rates_By_Group_Report["English"]["FaceWt"] = "Face Wt";
	$fieldToolTipsLabor_Rates_By_Group_Report["English"]["FaceWt"] = "";
	$fieldLabelsLabor_Rates_By_Group_Report["English"]["Mold"] = "Mold";
	$fieldToolTipsLabor_Rates_By_Group_Report["English"]["Mold"] = "";
	$fieldLabelsLabor_Rates_By_Group_Report["English"]["PiecesPerMould"] = "Pieces Per Mould";
	$fieldToolTipsLabor_Rates_By_Group_Report["English"]["PiecesPerMould"] = "";
	$fieldLabelsLabor_Rates_By_Group_Report["English"]["ProductCost"] = "Product Cost";
	$fieldToolTipsLabor_Rates_By_Group_Report["English"]["ProductCost"] = "";
	$fieldLabelsLabor_Rates_By_Group_Report["English"]["PriceRetail"] = "Price Retail";
	$fieldToolTipsLabor_Rates_By_Group_Report["English"]["PriceRetail"] = "";
	$fieldLabelsLabor_Rates_By_Group_Report["English"]["PriceWholeSale"] = "Price Whole Sale";
	$fieldToolTipsLabor_Rates_By_Group_Report["English"]["PriceWholeSale"] = "";
	$fieldLabelsLabor_Rates_By_Group_Report["English"]["ProdStockGoal"] = "Prod Stock Goal";
	$fieldToolTipsLabor_Rates_By_Group_Report["English"]["ProdStockGoal"] = "";
	$fieldLabelsLabor_Rates_By_Group_Report["English"]["ThaiCom"] = "Thai Com";
	$fieldToolTipsLabor_Rates_By_Group_Report["English"]["ThaiCom"] = "";
	$fieldLabelsLabor_Rates_By_Group_Report["English"]["EngCom"] = "Eng Com";
	$fieldToolTipsLabor_Rates_By_Group_Report["English"]["EngCom"] = "";
	$fieldLabelsLabor_Rates_By_Group_Report["English"]["Status"] = "Status";
	$fieldToolTipsLabor_Rates_By_Group_Report["English"]["Status"] = "";
	$fieldLabelsLabor_Rates_By_Group_Report["English"]["MoldWt"] = "Mold Wt";
	$fieldToolTipsLabor_Rates_By_Group_Report["English"]["MoldWt"] = "";
	$fieldLabelsLabor_Rates_By_Group_Report["English"]["GrayWtMold"] = "Gray Wt Mold";
	$fieldToolTipsLabor_Rates_By_Group_Report["English"]["GrayWtMold"] = "";
	$fieldLabelsLabor_Rates_By_Group_Report["English"]["ColorWtMold"] = "Color Wt Mold";
	$fieldToolTipsLabor_Rates_By_Group_Report["English"]["ColorWtMold"] = "";
	$fieldLabelsLabor_Rates_By_Group_Report["English"]["Length"] = "Length";
	$fieldToolTipsLabor_Rates_By_Group_Report["English"]["Length"] = "";
	$fieldLabelsLabor_Rates_By_Group_Report["English"]["Width1"] = "Width1";
	$fieldToolTipsLabor_Rates_By_Group_Report["English"]["Width1"] = "";
	$fieldLabelsLabor_Rates_By_Group_Report["English"]["Thickness"] = "Thickness";
	$fieldToolTipsLabor_Rates_By_Group_Report["English"]["Thickness"] = "";
	$fieldLabelsLabor_Rates_By_Group_Report["English"]["ProdNo"] = "Prod No";
	$fieldToolTipsLabor_Rates_By_Group_Report["English"]["ProdNo"] = "";
	if (count($fieldToolTipsLabor_Rates_By_Group_Report["English"]))
		$tdataLabor_Rates_By_Group_Report[".isUseToolTips"] = true;
}
	
	
	$tdataLabor_Rates_By_Group_Report[".NCSearch"] = true;



$tdataLabor_Rates_By_Group_Report[".shortTableName"] = "Labor_Rates_By_Group_Report";
$tdataLabor_Rates_By_Group_Report[".nSecOptions"] = 0;
$tdataLabor_Rates_By_Group_Report[".recsPerRowList"] = 1;
$tdataLabor_Rates_By_Group_Report[".mainTableOwnerID"] = "";
$tdataLabor_Rates_By_Group_Report[".moveNext"] = 1;
$tdataLabor_Rates_By_Group_Report[".nType"] = 2;

$tdataLabor_Rates_By_Group_Report[".strOriginalTableName"] = "products";




$tdataLabor_Rates_By_Group_Report[".showAddInPopup"] = false;

$tdataLabor_Rates_By_Group_Report[".showEditInPopup"] = false;

$tdataLabor_Rates_By_Group_Report[".showViewInPopup"] = false;

$tdataLabor_Rates_By_Group_Report[".fieldsForRegister"] = array();

$tdataLabor_Rates_By_Group_Report[".listAjax"] = false;

	$tdataLabor_Rates_By_Group_Report[".audit"] = false;

	$tdataLabor_Rates_By_Group_Report[".locking"] = false;

$tdataLabor_Rates_By_Group_Report[".listIcons"] = true;
$tdataLabor_Rates_By_Group_Report[".edit"] = true;
$tdataLabor_Rates_By_Group_Report[".inlineEdit"] = true;
$tdataLabor_Rates_By_Group_Report[".inlineAdd"] = true;
$tdataLabor_Rates_By_Group_Report[".view"] = true;

$tdataLabor_Rates_By_Group_Report[".exportTo"] = true;

$tdataLabor_Rates_By_Group_Report[".printFriendly"] = true;

$tdataLabor_Rates_By_Group_Report[".delete"] = true;

$tdataLabor_Rates_By_Group_Report[".showSimpleSearchOptions"] = false;

$tdataLabor_Rates_By_Group_Report[".showSearchPanel"] = true;

if (isMobile())
	$tdataLabor_Rates_By_Group_Report[".isUseAjaxSuggest"] = false;
else 
	$tdataLabor_Rates_By_Group_Report[".isUseAjaxSuggest"] = true;


// button handlers file names

$tdataLabor_Rates_By_Group_Report[".addPageEvents"] = false;

// use timepicker for search panel
$tdataLabor_Rates_By_Group_Report[".isUseTimeForSearch"] = false;




$tdataLabor_Rates_By_Group_Report[".allSearchFields"] = array();

$tdataLabor_Rates_By_Group_Report[".allSearchFields"][] = "ProdGrpCode";
$tdataLabor_Rates_By_Group_Report[".allSearchFields"][] = "ProdThaiName";
$tdataLabor_Rates_By_Group_Report[".allSearchFields"][] = "ProdEngName";
$tdataLabor_Rates_By_Group_Report[".allSearchFields"][] = "Picture";
$tdataLabor_Rates_By_Group_Report[".allSearchFields"][] = "ThaiModel";
$tdataLabor_Rates_By_Group_Report[".allSearchFields"][] = "EngModel";
$tdataLabor_Rates_By_Group_Report[".allSearchFields"][] = "MixNo";
$tdataLabor_Rates_By_Group_Report[".allSearchFields"][] = "ProdWt";
$tdataLabor_Rates_By_Group_Report[".allSearchFields"][] = "ColorMixNo";
$tdataLabor_Rates_By_Group_Report[".allSearchFields"][] = "FaceWt";
$tdataLabor_Rates_By_Group_Report[".allSearchFields"][] = "Mold";
$tdataLabor_Rates_By_Group_Report[".allSearchFields"][] = "PiecesPerMould";
$tdataLabor_Rates_By_Group_Report[".allSearchFields"][] = "ProductCost";
$tdataLabor_Rates_By_Group_Report[".allSearchFields"][] = "PriceRetail";
$tdataLabor_Rates_By_Group_Report[".allSearchFields"][] = "PriceWholeSale";
$tdataLabor_Rates_By_Group_Report[".allSearchFields"][] = "ProdStockGoal";
$tdataLabor_Rates_By_Group_Report[".allSearchFields"][] = "ThaiCom";
$tdataLabor_Rates_By_Group_Report[".allSearchFields"][] = "EngCom";
$tdataLabor_Rates_By_Group_Report[".allSearchFields"][] = "Status";
$tdataLabor_Rates_By_Group_Report[".allSearchFields"][] = "MoldWt";
$tdataLabor_Rates_By_Group_Report[".allSearchFields"][] = "GrayWtMold";
$tdataLabor_Rates_By_Group_Report[".allSearchFields"][] = "ColorWtMold";
$tdataLabor_Rates_By_Group_Report[".allSearchFields"][] = "Length";
$tdataLabor_Rates_By_Group_Report[".allSearchFields"][] = "Width1";
$tdataLabor_Rates_By_Group_Report[".allSearchFields"][] = "Thickness";
$tdataLabor_Rates_By_Group_Report[".allSearchFields"][] = "ProdNo";

$tdataLabor_Rates_By_Group_Report[".googleLikeFields"][] = "ProdGrpCode";
$tdataLabor_Rates_By_Group_Report[".googleLikeFields"][] = "ProdThaiName";
$tdataLabor_Rates_By_Group_Report[".googleLikeFields"][] = "ProdEngName";
$tdataLabor_Rates_By_Group_Report[".googleLikeFields"][] = "Picture";
$tdataLabor_Rates_By_Group_Report[".googleLikeFields"][] = "ThaiModel";
$tdataLabor_Rates_By_Group_Report[".googleLikeFields"][] = "EngModel";
$tdataLabor_Rates_By_Group_Report[".googleLikeFields"][] = "MixNo";
$tdataLabor_Rates_By_Group_Report[".googleLikeFields"][] = "ProdWt";
$tdataLabor_Rates_By_Group_Report[".googleLikeFields"][] = "ColorMixNo";
$tdataLabor_Rates_By_Group_Report[".googleLikeFields"][] = "FaceWt";
$tdataLabor_Rates_By_Group_Report[".googleLikeFields"][] = "Mold";
$tdataLabor_Rates_By_Group_Report[".googleLikeFields"][] = "PiecesPerMould";
$tdataLabor_Rates_By_Group_Report[".googleLikeFields"][] = "ProductCost";
$tdataLabor_Rates_By_Group_Report[".googleLikeFields"][] = "PriceRetail";
$tdataLabor_Rates_By_Group_Report[".googleLikeFields"][] = "PriceWholeSale";
$tdataLabor_Rates_By_Group_Report[".googleLikeFields"][] = "ProdStockGoal";
$tdataLabor_Rates_By_Group_Report[".googleLikeFields"][] = "ThaiCom";
$tdataLabor_Rates_By_Group_Report[".googleLikeFields"][] = "EngCom";
$tdataLabor_Rates_By_Group_Report[".googleLikeFields"][] = "Status";
$tdataLabor_Rates_By_Group_Report[".googleLikeFields"][] = "MoldWt";
$tdataLabor_Rates_By_Group_Report[".googleLikeFields"][] = "GrayWtMold";
$tdataLabor_Rates_By_Group_Report[".googleLikeFields"][] = "ColorWtMold";
$tdataLabor_Rates_By_Group_Report[".googleLikeFields"][] = "Length";
$tdataLabor_Rates_By_Group_Report[".googleLikeFields"][] = "Width1";
$tdataLabor_Rates_By_Group_Report[".googleLikeFields"][] = "Thickness";
$tdataLabor_Rates_By_Group_Report[".googleLikeFields"][] = "ProdNo";


$tdataLabor_Rates_By_Group_Report[".advSearchFields"][] = "ProdGrpCode";
$tdataLabor_Rates_By_Group_Report[".advSearchFields"][] = "ProdThaiName";
$tdataLabor_Rates_By_Group_Report[".advSearchFields"][] = "ProdEngName";
$tdataLabor_Rates_By_Group_Report[".advSearchFields"][] = "Picture";
$tdataLabor_Rates_By_Group_Report[".advSearchFields"][] = "ThaiModel";
$tdataLabor_Rates_By_Group_Report[".advSearchFields"][] = "EngModel";
$tdataLabor_Rates_By_Group_Report[".advSearchFields"][] = "MixNo";
$tdataLabor_Rates_By_Group_Report[".advSearchFields"][] = "ProdWt";
$tdataLabor_Rates_By_Group_Report[".advSearchFields"][] = "ColorMixNo";
$tdataLabor_Rates_By_Group_Report[".advSearchFields"][] = "FaceWt";
$tdataLabor_Rates_By_Group_Report[".advSearchFields"][] = "Mold";
$tdataLabor_Rates_By_Group_Report[".advSearchFields"][] = "PiecesPerMould";
$tdataLabor_Rates_By_Group_Report[".advSearchFields"][] = "ProductCost";
$tdataLabor_Rates_By_Group_Report[".advSearchFields"][] = "PriceRetail";
$tdataLabor_Rates_By_Group_Report[".advSearchFields"][] = "PriceWholeSale";
$tdataLabor_Rates_By_Group_Report[".advSearchFields"][] = "ProdStockGoal";
$tdataLabor_Rates_By_Group_Report[".advSearchFields"][] = "ThaiCom";
$tdataLabor_Rates_By_Group_Report[".advSearchFields"][] = "EngCom";
$tdataLabor_Rates_By_Group_Report[".advSearchFields"][] = "Status";
$tdataLabor_Rates_By_Group_Report[".advSearchFields"][] = "MoldWt";
$tdataLabor_Rates_By_Group_Report[".advSearchFields"][] = "GrayWtMold";
$tdataLabor_Rates_By_Group_Report[".advSearchFields"][] = "ColorWtMold";
$tdataLabor_Rates_By_Group_Report[".advSearchFields"][] = "Length";
$tdataLabor_Rates_By_Group_Report[".advSearchFields"][] = "Width1";
$tdataLabor_Rates_By_Group_Report[".advSearchFields"][] = "Thickness";
$tdataLabor_Rates_By_Group_Report[".advSearchFields"][] = "ProdNo";

$tdataLabor_Rates_By_Group_Report[".isTableType"] = "report";

	



// Access doesn't support subqueries from the same table as main




$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataLabor_Rates_By_Group_Report[".strOrderBy"] = $tstrOrderBy;

$tdataLabor_Rates_By_Group_Report[".orderindexes"] = array();

$tdataLabor_Rates_By_Group_Report[".sqlHead"] = "SELECT ProdGrpCode,   ProdThaiName,   ProdEngName,   Picture,   ThaiModel,   EngModel,   MixNo,   ProdWt,   ColorMixNo,   FaceWt,   Mold,   PiecesPerMould,   ProductCost,   PriceRetail,   PriceWholeSale,   ProdStockGoal,   ThaiCom,   EngCom,   Status,   MoldWt,   GrayWtMold,   ColorWtMold,   Length,   Width1,   Thickness,   ProdNo";
$tdataLabor_Rates_By_Group_Report[".sqlFrom"] = "FROM products";
$tdataLabor_Rates_By_Group_Report[".sqlWhereExpr"] = "";
$tdataLabor_Rates_By_Group_Report[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataLabor_Rates_By_Group_Report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataLabor_Rates_By_Group_Report[".arrGroupsPerPage"] = $arrGPP;

$tableKeysLabor_Rates_By_Group_Report = array();
$tableKeysLabor_Rates_By_Group_Report[] = "ProdNo";
$tdataLabor_Rates_By_Group_Report[".Keys"] = $tableKeysLabor_Rates_By_Group_Report;

$tdataLabor_Rates_By_Group_Report[".listFields"] = array();
$tdataLabor_Rates_By_Group_Report[".listFields"][] = "ProdGrpCode";
$tdataLabor_Rates_By_Group_Report[".listFields"][] = "ProdThaiName";
$tdataLabor_Rates_By_Group_Report[".listFields"][] = "ProdEngName";
$tdataLabor_Rates_By_Group_Report[".listFields"][] = "Picture";
$tdataLabor_Rates_By_Group_Report[".listFields"][] = "ThaiModel";
$tdataLabor_Rates_By_Group_Report[".listFields"][] = "EngModel";
$tdataLabor_Rates_By_Group_Report[".listFields"][] = "MixNo";
$tdataLabor_Rates_By_Group_Report[".listFields"][] = "ProdWt";
$tdataLabor_Rates_By_Group_Report[".listFields"][] = "ColorMixNo";
$tdataLabor_Rates_By_Group_Report[".listFields"][] = "FaceWt";
$tdataLabor_Rates_By_Group_Report[".listFields"][] = "Mold";
$tdataLabor_Rates_By_Group_Report[".listFields"][] = "PiecesPerMould";
$tdataLabor_Rates_By_Group_Report[".listFields"][] = "ProductCost";
$tdataLabor_Rates_By_Group_Report[".listFields"][] = "PriceRetail";
$tdataLabor_Rates_By_Group_Report[".listFields"][] = "PriceWholeSale";
$tdataLabor_Rates_By_Group_Report[".listFields"][] = "ProdStockGoal";
$tdataLabor_Rates_By_Group_Report[".listFields"][] = "ThaiCom";
$tdataLabor_Rates_By_Group_Report[".listFields"][] = "EngCom";
$tdataLabor_Rates_By_Group_Report[".listFields"][] = "Status";
$tdataLabor_Rates_By_Group_Report[".listFields"][] = "MoldWt";
$tdataLabor_Rates_By_Group_Report[".listFields"][] = "GrayWtMold";
$tdataLabor_Rates_By_Group_Report[".listFields"][] = "ColorWtMold";
$tdataLabor_Rates_By_Group_Report[".listFields"][] = "Length";
$tdataLabor_Rates_By_Group_Report[".listFields"][] = "Width1";
$tdataLabor_Rates_By_Group_Report[".listFields"][] = "Thickness";
$tdataLabor_Rates_By_Group_Report[".listFields"][] = "ProdNo";

$tdataLabor_Rates_By_Group_Report[".viewFields"] = array();
$tdataLabor_Rates_By_Group_Report[".viewFields"][] = "ProdGrpCode";
$tdataLabor_Rates_By_Group_Report[".viewFields"][] = "ProdThaiName";
$tdataLabor_Rates_By_Group_Report[".viewFields"][] = "ProdEngName";
$tdataLabor_Rates_By_Group_Report[".viewFields"][] = "Picture";
$tdataLabor_Rates_By_Group_Report[".viewFields"][] = "ThaiModel";
$tdataLabor_Rates_By_Group_Report[".viewFields"][] = "EngModel";
$tdataLabor_Rates_By_Group_Report[".viewFields"][] = "MixNo";
$tdataLabor_Rates_By_Group_Report[".viewFields"][] = "ProdWt";
$tdataLabor_Rates_By_Group_Report[".viewFields"][] = "ColorMixNo";
$tdataLabor_Rates_By_Group_Report[".viewFields"][] = "FaceWt";
$tdataLabor_Rates_By_Group_Report[".viewFields"][] = "Mold";
$tdataLabor_Rates_By_Group_Report[".viewFields"][] = "PiecesPerMould";
$tdataLabor_Rates_By_Group_Report[".viewFields"][] = "ProductCost";
$tdataLabor_Rates_By_Group_Report[".viewFields"][] = "PriceRetail";
$tdataLabor_Rates_By_Group_Report[".viewFields"][] = "PriceWholeSale";
$tdataLabor_Rates_By_Group_Report[".viewFields"][] = "ProdStockGoal";
$tdataLabor_Rates_By_Group_Report[".viewFields"][] = "ThaiCom";
$tdataLabor_Rates_By_Group_Report[".viewFields"][] = "EngCom";
$tdataLabor_Rates_By_Group_Report[".viewFields"][] = "Status";
$tdataLabor_Rates_By_Group_Report[".viewFields"][] = "MoldWt";
$tdataLabor_Rates_By_Group_Report[".viewFields"][] = "GrayWtMold";
$tdataLabor_Rates_By_Group_Report[".viewFields"][] = "ColorWtMold";
$tdataLabor_Rates_By_Group_Report[".viewFields"][] = "Length";
$tdataLabor_Rates_By_Group_Report[".viewFields"][] = "Width1";
$tdataLabor_Rates_By_Group_Report[".viewFields"][] = "Thickness";
$tdataLabor_Rates_By_Group_Report[".viewFields"][] = "ProdNo";

$tdataLabor_Rates_By_Group_Report[".addFields"] = array();
$tdataLabor_Rates_By_Group_Report[".addFields"][] = "ProdGrpCode";
$tdataLabor_Rates_By_Group_Report[".addFields"][] = "ProdThaiName";
$tdataLabor_Rates_By_Group_Report[".addFields"][] = "ProdEngName";
$tdataLabor_Rates_By_Group_Report[".addFields"][] = "Picture";
$tdataLabor_Rates_By_Group_Report[".addFields"][] = "ThaiModel";
$tdataLabor_Rates_By_Group_Report[".addFields"][] = "EngModel";
$tdataLabor_Rates_By_Group_Report[".addFields"][] = "MixNo";
$tdataLabor_Rates_By_Group_Report[".addFields"][] = "ProdWt";
$tdataLabor_Rates_By_Group_Report[".addFields"][] = "ColorMixNo";
$tdataLabor_Rates_By_Group_Report[".addFields"][] = "FaceWt";
$tdataLabor_Rates_By_Group_Report[".addFields"][] = "Mold";
$tdataLabor_Rates_By_Group_Report[".addFields"][] = "PiecesPerMould";
$tdataLabor_Rates_By_Group_Report[".addFields"][] = "ProductCost";
$tdataLabor_Rates_By_Group_Report[".addFields"][] = "PriceRetail";
$tdataLabor_Rates_By_Group_Report[".addFields"][] = "PriceWholeSale";
$tdataLabor_Rates_By_Group_Report[".addFields"][] = "ProdStockGoal";
$tdataLabor_Rates_By_Group_Report[".addFields"][] = "ThaiCom";
$tdataLabor_Rates_By_Group_Report[".addFields"][] = "EngCom";
$tdataLabor_Rates_By_Group_Report[".addFields"][] = "Status";
$tdataLabor_Rates_By_Group_Report[".addFields"][] = "MoldWt";
$tdataLabor_Rates_By_Group_Report[".addFields"][] = "GrayWtMold";
$tdataLabor_Rates_By_Group_Report[".addFields"][] = "ColorWtMold";
$tdataLabor_Rates_By_Group_Report[".addFields"][] = "Length";
$tdataLabor_Rates_By_Group_Report[".addFields"][] = "Width1";
$tdataLabor_Rates_By_Group_Report[".addFields"][] = "Thickness";

$tdataLabor_Rates_By_Group_Report[".inlineAddFields"] = array();
$tdataLabor_Rates_By_Group_Report[".inlineAddFields"][] = "ProdGrpCode";
$tdataLabor_Rates_By_Group_Report[".inlineAddFields"][] = "ProdThaiName";
$tdataLabor_Rates_By_Group_Report[".inlineAddFields"][] = "ProdEngName";
$tdataLabor_Rates_By_Group_Report[".inlineAddFields"][] = "Picture";
$tdataLabor_Rates_By_Group_Report[".inlineAddFields"][] = "ThaiModel";
$tdataLabor_Rates_By_Group_Report[".inlineAddFields"][] = "EngModel";
$tdataLabor_Rates_By_Group_Report[".inlineAddFields"][] = "MixNo";
$tdataLabor_Rates_By_Group_Report[".inlineAddFields"][] = "ProdWt";
$tdataLabor_Rates_By_Group_Report[".inlineAddFields"][] = "ColorMixNo";
$tdataLabor_Rates_By_Group_Report[".inlineAddFields"][] = "FaceWt";
$tdataLabor_Rates_By_Group_Report[".inlineAddFields"][] = "Mold";
$tdataLabor_Rates_By_Group_Report[".inlineAddFields"][] = "PiecesPerMould";
$tdataLabor_Rates_By_Group_Report[".inlineAddFields"][] = "ProductCost";
$tdataLabor_Rates_By_Group_Report[".inlineAddFields"][] = "PriceRetail";
$tdataLabor_Rates_By_Group_Report[".inlineAddFields"][] = "PriceWholeSale";
$tdataLabor_Rates_By_Group_Report[".inlineAddFields"][] = "ProdStockGoal";
$tdataLabor_Rates_By_Group_Report[".inlineAddFields"][] = "ThaiCom";
$tdataLabor_Rates_By_Group_Report[".inlineAddFields"][] = "EngCom";
$tdataLabor_Rates_By_Group_Report[".inlineAddFields"][] = "Status";
$tdataLabor_Rates_By_Group_Report[".inlineAddFields"][] = "MoldWt";
$tdataLabor_Rates_By_Group_Report[".inlineAddFields"][] = "GrayWtMold";
$tdataLabor_Rates_By_Group_Report[".inlineAddFields"][] = "ColorWtMold";
$tdataLabor_Rates_By_Group_Report[".inlineAddFields"][] = "Length";
$tdataLabor_Rates_By_Group_Report[".inlineAddFields"][] = "Width1";
$tdataLabor_Rates_By_Group_Report[".inlineAddFields"][] = "Thickness";

$tdataLabor_Rates_By_Group_Report[".editFields"] = array();
$tdataLabor_Rates_By_Group_Report[".editFields"][] = "ProdGrpCode";
$tdataLabor_Rates_By_Group_Report[".editFields"][] = "ProdThaiName";
$tdataLabor_Rates_By_Group_Report[".editFields"][] = "ProdEngName";
$tdataLabor_Rates_By_Group_Report[".editFields"][] = "Picture";
$tdataLabor_Rates_By_Group_Report[".editFields"][] = "ThaiModel";
$tdataLabor_Rates_By_Group_Report[".editFields"][] = "EngModel";
$tdataLabor_Rates_By_Group_Report[".editFields"][] = "MixNo";
$tdataLabor_Rates_By_Group_Report[".editFields"][] = "ProdWt";
$tdataLabor_Rates_By_Group_Report[".editFields"][] = "ColorMixNo";
$tdataLabor_Rates_By_Group_Report[".editFields"][] = "FaceWt";
$tdataLabor_Rates_By_Group_Report[".editFields"][] = "Mold";
$tdataLabor_Rates_By_Group_Report[".editFields"][] = "PiecesPerMould";
$tdataLabor_Rates_By_Group_Report[".editFields"][] = "ProductCost";
$tdataLabor_Rates_By_Group_Report[".editFields"][] = "PriceRetail";
$tdataLabor_Rates_By_Group_Report[".editFields"][] = "PriceWholeSale";
$tdataLabor_Rates_By_Group_Report[".editFields"][] = "ProdStockGoal";
$tdataLabor_Rates_By_Group_Report[".editFields"][] = "ThaiCom";
$tdataLabor_Rates_By_Group_Report[".editFields"][] = "EngCom";
$tdataLabor_Rates_By_Group_Report[".editFields"][] = "Status";
$tdataLabor_Rates_By_Group_Report[".editFields"][] = "MoldWt";
$tdataLabor_Rates_By_Group_Report[".editFields"][] = "GrayWtMold";
$tdataLabor_Rates_By_Group_Report[".editFields"][] = "ColorWtMold";
$tdataLabor_Rates_By_Group_Report[".editFields"][] = "Length";
$tdataLabor_Rates_By_Group_Report[".editFields"][] = "Width1";
$tdataLabor_Rates_By_Group_Report[".editFields"][] = "Thickness";

$tdataLabor_Rates_By_Group_Report[".inlineEditFields"] = array();
$tdataLabor_Rates_By_Group_Report[".inlineEditFields"][] = "ProdGrpCode";
$tdataLabor_Rates_By_Group_Report[".inlineEditFields"][] = "ProdThaiName";
$tdataLabor_Rates_By_Group_Report[".inlineEditFields"][] = "ProdEngName";
$tdataLabor_Rates_By_Group_Report[".inlineEditFields"][] = "Picture";
$tdataLabor_Rates_By_Group_Report[".inlineEditFields"][] = "ThaiModel";
$tdataLabor_Rates_By_Group_Report[".inlineEditFields"][] = "EngModel";
$tdataLabor_Rates_By_Group_Report[".inlineEditFields"][] = "MixNo";
$tdataLabor_Rates_By_Group_Report[".inlineEditFields"][] = "ProdWt";
$tdataLabor_Rates_By_Group_Report[".inlineEditFields"][] = "ColorMixNo";
$tdataLabor_Rates_By_Group_Report[".inlineEditFields"][] = "FaceWt";
$tdataLabor_Rates_By_Group_Report[".inlineEditFields"][] = "Mold";
$tdataLabor_Rates_By_Group_Report[".inlineEditFields"][] = "PiecesPerMould";
$tdataLabor_Rates_By_Group_Report[".inlineEditFields"][] = "ProductCost";
$tdataLabor_Rates_By_Group_Report[".inlineEditFields"][] = "PriceRetail";
$tdataLabor_Rates_By_Group_Report[".inlineEditFields"][] = "PriceWholeSale";
$tdataLabor_Rates_By_Group_Report[".inlineEditFields"][] = "ProdStockGoal";
$tdataLabor_Rates_By_Group_Report[".inlineEditFields"][] = "ThaiCom";
$tdataLabor_Rates_By_Group_Report[".inlineEditFields"][] = "EngCom";
$tdataLabor_Rates_By_Group_Report[".inlineEditFields"][] = "Status";
$tdataLabor_Rates_By_Group_Report[".inlineEditFields"][] = "MoldWt";
$tdataLabor_Rates_By_Group_Report[".inlineEditFields"][] = "GrayWtMold";
$tdataLabor_Rates_By_Group_Report[".inlineEditFields"][] = "ColorWtMold";
$tdataLabor_Rates_By_Group_Report[".inlineEditFields"][] = "Length";
$tdataLabor_Rates_By_Group_Report[".inlineEditFields"][] = "Width1";
$tdataLabor_Rates_By_Group_Report[".inlineEditFields"][] = "Thickness";

$tdataLabor_Rates_By_Group_Report[".exportFields"] = array();
$tdataLabor_Rates_By_Group_Report[".exportFields"][] = "ProdGrpCode";
$tdataLabor_Rates_By_Group_Report[".exportFields"][] = "ProdThaiName";
$tdataLabor_Rates_By_Group_Report[".exportFields"][] = "ProdEngName";
$tdataLabor_Rates_By_Group_Report[".exportFields"][] = "Picture";
$tdataLabor_Rates_By_Group_Report[".exportFields"][] = "ThaiModel";
$tdataLabor_Rates_By_Group_Report[".exportFields"][] = "EngModel";
$tdataLabor_Rates_By_Group_Report[".exportFields"][] = "MixNo";
$tdataLabor_Rates_By_Group_Report[".exportFields"][] = "ProdWt";
$tdataLabor_Rates_By_Group_Report[".exportFields"][] = "ColorMixNo";
$tdataLabor_Rates_By_Group_Report[".exportFields"][] = "FaceWt";
$tdataLabor_Rates_By_Group_Report[".exportFields"][] = "Mold";
$tdataLabor_Rates_By_Group_Report[".exportFields"][] = "PiecesPerMould";
$tdataLabor_Rates_By_Group_Report[".exportFields"][] = "ProductCost";
$tdataLabor_Rates_By_Group_Report[".exportFields"][] = "PriceRetail";
$tdataLabor_Rates_By_Group_Report[".exportFields"][] = "PriceWholeSale";
$tdataLabor_Rates_By_Group_Report[".exportFields"][] = "ProdStockGoal";
$tdataLabor_Rates_By_Group_Report[".exportFields"][] = "ThaiCom";
$tdataLabor_Rates_By_Group_Report[".exportFields"][] = "EngCom";
$tdataLabor_Rates_By_Group_Report[".exportFields"][] = "Status";
$tdataLabor_Rates_By_Group_Report[".exportFields"][] = "MoldWt";
$tdataLabor_Rates_By_Group_Report[".exportFields"][] = "GrayWtMold";
$tdataLabor_Rates_By_Group_Report[".exportFields"][] = "ColorWtMold";
$tdataLabor_Rates_By_Group_Report[".exportFields"][] = "Length";
$tdataLabor_Rates_By_Group_Report[".exportFields"][] = "Width1";
$tdataLabor_Rates_By_Group_Report[".exportFields"][] = "Thickness";
$tdataLabor_Rates_By_Group_Report[".exportFields"][] = "ProdNo";

$tdataLabor_Rates_By_Group_Report[".printFields"] = array();
$tdataLabor_Rates_By_Group_Report[".printFields"][] = "ProdGrpCode";
$tdataLabor_Rates_By_Group_Report[".printFields"][] = "ProdThaiName";
$tdataLabor_Rates_By_Group_Report[".printFields"][] = "ProdEngName";
$tdataLabor_Rates_By_Group_Report[".printFields"][] = "Picture";
$tdataLabor_Rates_By_Group_Report[".printFields"][] = "ThaiModel";
$tdataLabor_Rates_By_Group_Report[".printFields"][] = "EngModel";
$tdataLabor_Rates_By_Group_Report[".printFields"][] = "MixNo";
$tdataLabor_Rates_By_Group_Report[".printFields"][] = "ProdWt";
$tdataLabor_Rates_By_Group_Report[".printFields"][] = "ColorMixNo";
$tdataLabor_Rates_By_Group_Report[".printFields"][] = "FaceWt";
$tdataLabor_Rates_By_Group_Report[".printFields"][] = "Mold";
$tdataLabor_Rates_By_Group_Report[".printFields"][] = "PiecesPerMould";
$tdataLabor_Rates_By_Group_Report[".printFields"][] = "ProductCost";
$tdataLabor_Rates_By_Group_Report[".printFields"][] = "PriceRetail";
$tdataLabor_Rates_By_Group_Report[".printFields"][] = "PriceWholeSale";
$tdataLabor_Rates_By_Group_Report[".printFields"][] = "ProdStockGoal";
$tdataLabor_Rates_By_Group_Report[".printFields"][] = "ThaiCom";
$tdataLabor_Rates_By_Group_Report[".printFields"][] = "EngCom";
$tdataLabor_Rates_By_Group_Report[".printFields"][] = "Status";
$tdataLabor_Rates_By_Group_Report[".printFields"][] = "MoldWt";
$tdataLabor_Rates_By_Group_Report[".printFields"][] = "GrayWtMold";
$tdataLabor_Rates_By_Group_Report[".printFields"][] = "ColorWtMold";
$tdataLabor_Rates_By_Group_Report[".printFields"][] = "Length";
$tdataLabor_Rates_By_Group_Report[".printFields"][] = "Width1";
$tdataLabor_Rates_By_Group_Report[".printFields"][] = "Thickness";
$tdataLabor_Rates_By_Group_Report[".printFields"][] = "ProdNo";

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
	
		
		
	$tdataLabor_Rates_By_Group_Report["ProdGrpCode"] = $fdata;
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
	
		
		
	$tdataLabor_Rates_By_Group_Report["ProdThaiName"] = $fdata;
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
	
		
		
	$tdataLabor_Rates_By_Group_Report["ProdEngName"] = $fdata;
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
	
		
		
	$tdataLabor_Rates_By_Group_Report["Picture"] = $fdata;
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
	
		
		
	$tdataLabor_Rates_By_Group_Report["ThaiModel"] = $fdata;
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
	
		
		
	$tdataLabor_Rates_By_Group_Report["EngModel"] = $fdata;
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
	
		
		
	$tdataLabor_Rates_By_Group_Report["MixNo"] = $fdata;
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
	
		
		
	$tdataLabor_Rates_By_Group_Report["ProdWt"] = $fdata;
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
	
		
		
	$tdataLabor_Rates_By_Group_Report["ColorMixNo"] = $fdata;
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
	
		
		
	$tdataLabor_Rates_By_Group_Report["FaceWt"] = $fdata;
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
	
		
		
	$tdataLabor_Rates_By_Group_Report["Mold"] = $fdata;
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
	
		
		
	$tdataLabor_Rates_By_Group_Report["PiecesPerMould"] = $fdata;
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
	
		
		
	$tdataLabor_Rates_By_Group_Report["ProductCost"] = $fdata;
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
	
		
		
	$tdataLabor_Rates_By_Group_Report["PriceRetail"] = $fdata;
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
	
		
		
	$tdataLabor_Rates_By_Group_Report["PriceWholeSale"] = $fdata;
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
	
		
		
	$tdataLabor_Rates_By_Group_Report["ProdStockGoal"] = $fdata;
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
	
		
		
	$tdataLabor_Rates_By_Group_Report["ThaiCom"] = $fdata;
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
	
		
		
	$tdataLabor_Rates_By_Group_Report["EngCom"] = $fdata;
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
	
		
		
	$tdataLabor_Rates_By_Group_Report["Status"] = $fdata;
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
	
		
		
	$tdataLabor_Rates_By_Group_Report["MoldWt"] = $fdata;
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
	
		
		
	$tdataLabor_Rates_By_Group_Report["GrayWtMold"] = $fdata;
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
	
		
		
	$tdataLabor_Rates_By_Group_Report["ColorWtMold"] = $fdata;
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
	
		
		
	$tdataLabor_Rates_By_Group_Report["Length"] = $fdata;
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
	
		
		
	$tdataLabor_Rates_By_Group_Report["Width1"] = $fdata;
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
	
		
		
	$tdataLabor_Rates_By_Group_Report["Thickness"] = $fdata;
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
	
		
		
	$tdataLabor_Rates_By_Group_Report["ProdNo"] = $fdata;

	
$tables_data["Labor Rates By Group Report"]=&$tdataLabor_Rates_By_Group_Report;
$field_labels["Labor_Rates_By_Group_Report"] = &$fieldLabelsLabor_Rates_By_Group_Report;
$fieldToolTips["Labor Rates By Group Report"] = &$fieldToolTipsLabor_Rates_By_Group_Report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Labor Rates By Group Report"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Labor Rates By Group Report"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Labor_Rates_By_Group_Report()
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
$queryData_Labor_Rates_By_Group_Report = createSqlQuery_Labor_Rates_By_Group_Report();
																										$tdataLabor_Rates_By_Group_Report[".sqlquery"] = $queryData_Labor_Rates_By_Group_Report;
	
if(isset($tdataLabor_Rates_By_Group_Report["field2"])){
	$tdataLabor_Rates_By_Group_Report["field2"]["LookupTable"] = "carscars_view";
	$tdataLabor_Rates_By_Group_Report["field2"]["LookupOrderBy"] = "name";
	$tdataLabor_Rates_By_Group_Report["field2"]["LookupType"] = 4;
	$tdataLabor_Rates_By_Group_Report["field2"]["LinkField"] = "email";
	$tdataLabor_Rates_By_Group_Report["field2"]["DisplayField"] = "name";
	$tdataLabor_Rates_By_Group_Report[".hasCustomViewField"] = true;
}

$tableEvents["Labor Rates By Group Report"] = new eventsBase;
$tdataLabor_Rates_By_Group_Report[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Labor Rates By Group Report");

?>
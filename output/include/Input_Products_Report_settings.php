<?php
require_once(getabspath("classes/cipherer.php"));
$tdataInput_Products_Report = array();
	$tdataInput_Products_Report[".NumberOfChars"] = 80; 
	$tdataInput_Products_Report[".ShortName"] = "Input_Products_Report";
	$tdataInput_Products_Report[".OwnerID"] = "";
	$tdataInput_Products_Report[".OriginalTable"] = "prodcosts";

//	field labels
$fieldLabelsInput_Products_Report = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsInput_Products_Report["English"] = array();
	$fieldToolTipsInput_Products_Report["English"] = array();
	$fieldLabelsInput_Products_Report["English"]["ProdGrpCode"] = "Prod Grp Code";
	$fieldToolTipsInput_Products_Report["English"]["ProdGrpCode"] = "";
	$fieldLabelsInput_Products_Report["English"]["Status"] = "Status";
	$fieldToolTipsInput_Products_Report["English"]["Status"] = "";
	$fieldLabelsInput_Products_Report["English"]["ProdNo"] = "Prod No";
	$fieldToolTipsInput_Products_Report["English"]["ProdNo"] = "";
	$fieldLabelsInput_Products_Report["English"]["CostType"] = "Cost Type";
	$fieldToolTipsInput_Products_Report["English"]["CostType"] = "";
	$fieldLabelsInput_Products_Report["English"]["EngName"] = "Eng Name";
	$fieldToolTipsInput_Products_Report["English"]["EngName"] = "";
	$fieldLabelsInput_Products_Report["English"]["ThaiName"] = "Thai Name";
	$fieldToolTipsInput_Products_Report["English"]["ThaiName"] = "";
	$fieldLabelsInput_Products_Report["English"]["Qtty"] = "Qtty";
	$fieldToolTipsInput_Products_Report["English"]["Qtty"] = "";
	$fieldLabelsInput_Products_Report["English"]["PieceCost"] = "Piece Cost";
	$fieldToolTipsInput_Products_Report["English"]["PieceCost"] = "";
	$fieldLabelsInput_Products_Report["English"]["SortOrder"] = "Sort Order";
	$fieldToolTipsInput_Products_Report["English"]["SortOrder"] = "";
	$fieldLabelsInput_Products_Report["English"]["Cost"] = "Cost";
	$fieldToolTipsInput_Products_Report["English"]["Cost"] = "";
	$fieldLabelsInput_Products_Report["English"]["UnitEngRpt"] = "Unit Eng Rpt";
	$fieldToolTipsInput_Products_Report["English"]["UnitEngRpt"] = "";
	$fieldLabelsInput_Products_Report["English"]["UnitThaiRpt"] = "Unit Thai Rpt";
	$fieldToolTipsInput_Products_Report["English"]["UnitThaiRpt"] = "";
	$fieldLabelsInput_Products_Report["English"]["CompPurchaseUnitEn"] = "Comp Purchase Unit En";
	$fieldToolTipsInput_Products_Report["English"]["CompPurchaseUnitEn"] = "";
	$fieldLabelsInput_Products_Report["English"]["CostYear"] = "Cost Year";
	$fieldToolTipsInput_Products_Report["English"]["CostYear"] = "";
	$fieldLabelsInput_Products_Report["English"]["CostMonth"] = "Cost Month";
	$fieldToolTipsInput_Products_Report["English"]["CostMonth"] = "";
	$fieldLabelsInput_Products_Report["English"]["PercentCost"] = "Percent Cost";
	$fieldToolTipsInput_Products_Report["English"]["PercentCost"] = "";
	if (count($fieldToolTipsInput_Products_Report["English"]))
		$tdataInput_Products_Report[".isUseToolTips"] = true;
}
	
	
	$tdataInput_Products_Report[".NCSearch"] = true;



$tdataInput_Products_Report[".shortTableName"] = "Input_Products_Report";
$tdataInput_Products_Report[".nSecOptions"] = 0;
$tdataInput_Products_Report[".recsPerRowList"] = 1;
$tdataInput_Products_Report[".mainTableOwnerID"] = "";
$tdataInput_Products_Report[".moveNext"] = 1;
$tdataInput_Products_Report[".nType"] = 2;

$tdataInput_Products_Report[".strOriginalTableName"] = "prodcosts";




$tdataInput_Products_Report[".showAddInPopup"] = false;

$tdataInput_Products_Report[".showEditInPopup"] = false;

$tdataInput_Products_Report[".showViewInPopup"] = false;

$tdataInput_Products_Report[".fieldsForRegister"] = array();

$tdataInput_Products_Report[".listAjax"] = false;

	$tdataInput_Products_Report[".audit"] = false;

	$tdataInput_Products_Report[".locking"] = false;

$tdataInput_Products_Report[".listIcons"] = true;

$tdataInput_Products_Report[".exportTo"] = true;

$tdataInput_Products_Report[".printFriendly"] = true;


$tdataInput_Products_Report[".showSimpleSearchOptions"] = false;

$tdataInput_Products_Report[".showSearchPanel"] = true;

if (isMobile())
	$tdataInput_Products_Report[".isUseAjaxSuggest"] = false;
else 
	$tdataInput_Products_Report[".isUseAjaxSuggest"] = true;


// button handlers file names

$tdataInput_Products_Report[".addPageEvents"] = false;

// use timepicker for search panel
$tdataInput_Products_Report[".isUseTimeForSearch"] = false;




$tdataInput_Products_Report[".allSearchFields"] = array();

$tdataInput_Products_Report[".allSearchFields"][] = "ProdGrpCode";
$tdataInput_Products_Report[".allSearchFields"][] = "Status";
$tdataInput_Products_Report[".allSearchFields"][] = "ProdNo";
$tdataInput_Products_Report[".allSearchFields"][] = "CostType";
$tdataInput_Products_Report[".allSearchFields"][] = "EngName";
$tdataInput_Products_Report[".allSearchFields"][] = "ThaiName";
$tdataInput_Products_Report[".allSearchFields"][] = "Qtty";
$tdataInput_Products_Report[".allSearchFields"][] = "PieceCost";
$tdataInput_Products_Report[".allSearchFields"][] = "SortOrder";
$tdataInput_Products_Report[".allSearchFields"][] = "Cost";
$tdataInput_Products_Report[".allSearchFields"][] = "UnitEngRpt";
$tdataInput_Products_Report[".allSearchFields"][] = "UnitThaiRpt";
$tdataInput_Products_Report[".allSearchFields"][] = "CompPurchaseUnitEn";
$tdataInput_Products_Report[".allSearchFields"][] = "CostYear";
$tdataInput_Products_Report[".allSearchFields"][] = "CostMonth";
$tdataInput_Products_Report[".allSearchFields"][] = "PercentCost";

$tdataInput_Products_Report[".googleLikeFields"][] = "ProdGrpCode";
$tdataInput_Products_Report[".googleLikeFields"][] = "Status";
$tdataInput_Products_Report[".googleLikeFields"][] = "ProdNo";
$tdataInput_Products_Report[".googleLikeFields"][] = "CostType";
$tdataInput_Products_Report[".googleLikeFields"][] = "EngName";
$tdataInput_Products_Report[".googleLikeFields"][] = "ThaiName";
$tdataInput_Products_Report[".googleLikeFields"][] = "Qtty";
$tdataInput_Products_Report[".googleLikeFields"][] = "PieceCost";
$tdataInput_Products_Report[".googleLikeFields"][] = "SortOrder";
$tdataInput_Products_Report[".googleLikeFields"][] = "Cost";
$tdataInput_Products_Report[".googleLikeFields"][] = "UnitEngRpt";
$tdataInput_Products_Report[".googleLikeFields"][] = "UnitThaiRpt";
$tdataInput_Products_Report[".googleLikeFields"][] = "CompPurchaseUnitEn";
$tdataInput_Products_Report[".googleLikeFields"][] = "CostYear";
$tdataInput_Products_Report[".googleLikeFields"][] = "CostMonth";
$tdataInput_Products_Report[".googleLikeFields"][] = "PercentCost";


$tdataInput_Products_Report[".advSearchFields"][] = "ProdGrpCode";
$tdataInput_Products_Report[".advSearchFields"][] = "Status";
$tdataInput_Products_Report[".advSearchFields"][] = "ProdNo";
$tdataInput_Products_Report[".advSearchFields"][] = "CostType";
$tdataInput_Products_Report[".advSearchFields"][] = "EngName";
$tdataInput_Products_Report[".advSearchFields"][] = "ThaiName";
$tdataInput_Products_Report[".advSearchFields"][] = "Qtty";
$tdataInput_Products_Report[".advSearchFields"][] = "PieceCost";
$tdataInput_Products_Report[".advSearchFields"][] = "SortOrder";
$tdataInput_Products_Report[".advSearchFields"][] = "Cost";
$tdataInput_Products_Report[".advSearchFields"][] = "UnitEngRpt";
$tdataInput_Products_Report[".advSearchFields"][] = "UnitThaiRpt";
$tdataInput_Products_Report[".advSearchFields"][] = "CompPurchaseUnitEn";
$tdataInput_Products_Report[".advSearchFields"][] = "CostYear";
$tdataInput_Products_Report[".advSearchFields"][] = "CostMonth";
$tdataInput_Products_Report[".advSearchFields"][] = "PercentCost";

$tdataInput_Products_Report[".isTableType"] = "report";

	



// Access doesn't support subqueries from the same table as main




$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataInput_Products_Report[".strOrderBy"] = $tstrOrderBy;

$tdataInput_Products_Report[".orderindexes"] = array();

$tdataInput_Products_Report[".sqlHead"] = "SELECT ProdGrpCode,   Status,   ProdNo,   CostType,   EngName,   ThaiName,   Qtty,   PieceCost,   SortOrder,   Cost,   UnitEngRpt,   UnitThaiRpt,   CompPurchaseUnitEn,   CostYear,   CostMonth,   PercentCost";
$tdataInput_Products_Report[".sqlFrom"] = "FROM prodcosts";
$tdataInput_Products_Report[".sqlWhereExpr"] = "";
$tdataInput_Products_Report[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataInput_Products_Report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataInput_Products_Report[".arrGroupsPerPage"] = $arrGPP;

$tableKeysInput_Products_Report = array();
$tdataInput_Products_Report[".Keys"] = $tableKeysInput_Products_Report;

$tdataInput_Products_Report[".listFields"] = array();
$tdataInput_Products_Report[".listFields"][] = "ProdGrpCode";
$tdataInput_Products_Report[".listFields"][] = "Status";
$tdataInput_Products_Report[".listFields"][] = "ProdNo";
$tdataInput_Products_Report[".listFields"][] = "CostType";
$tdataInput_Products_Report[".listFields"][] = "EngName";
$tdataInput_Products_Report[".listFields"][] = "ThaiName";
$tdataInput_Products_Report[".listFields"][] = "Qtty";
$tdataInput_Products_Report[".listFields"][] = "PieceCost";
$tdataInput_Products_Report[".listFields"][] = "SortOrder";
$tdataInput_Products_Report[".listFields"][] = "Cost";
$tdataInput_Products_Report[".listFields"][] = "UnitEngRpt";
$tdataInput_Products_Report[".listFields"][] = "UnitThaiRpt";
$tdataInput_Products_Report[".listFields"][] = "CompPurchaseUnitEn";
$tdataInput_Products_Report[".listFields"][] = "CostYear";
$tdataInput_Products_Report[".listFields"][] = "CostMonth";
$tdataInput_Products_Report[".listFields"][] = "PercentCost";

$tdataInput_Products_Report[".viewFields"] = array();
$tdataInput_Products_Report[".viewFields"][] = "ProdGrpCode";
$tdataInput_Products_Report[".viewFields"][] = "Status";
$tdataInput_Products_Report[".viewFields"][] = "ProdNo";
$tdataInput_Products_Report[".viewFields"][] = "CostType";
$tdataInput_Products_Report[".viewFields"][] = "EngName";
$tdataInput_Products_Report[".viewFields"][] = "ThaiName";
$tdataInput_Products_Report[".viewFields"][] = "Qtty";
$tdataInput_Products_Report[".viewFields"][] = "PieceCost";
$tdataInput_Products_Report[".viewFields"][] = "SortOrder";
$tdataInput_Products_Report[".viewFields"][] = "Cost";
$tdataInput_Products_Report[".viewFields"][] = "UnitEngRpt";
$tdataInput_Products_Report[".viewFields"][] = "UnitThaiRpt";
$tdataInput_Products_Report[".viewFields"][] = "CompPurchaseUnitEn";
$tdataInput_Products_Report[".viewFields"][] = "CostYear";
$tdataInput_Products_Report[".viewFields"][] = "CostMonth";
$tdataInput_Products_Report[".viewFields"][] = "PercentCost";

$tdataInput_Products_Report[".addFields"] = array();
$tdataInput_Products_Report[".addFields"][] = "ProdGrpCode";
$tdataInput_Products_Report[".addFields"][] = "Status";
$tdataInput_Products_Report[".addFields"][] = "ProdNo";
$tdataInput_Products_Report[".addFields"][] = "CostType";
$tdataInput_Products_Report[".addFields"][] = "EngName";
$tdataInput_Products_Report[".addFields"][] = "ThaiName";
$tdataInput_Products_Report[".addFields"][] = "Qtty";
$tdataInput_Products_Report[".addFields"][] = "PieceCost";
$tdataInput_Products_Report[".addFields"][] = "SortOrder";
$tdataInput_Products_Report[".addFields"][] = "Cost";
$tdataInput_Products_Report[".addFields"][] = "UnitEngRpt";
$tdataInput_Products_Report[".addFields"][] = "UnitThaiRpt";
$tdataInput_Products_Report[".addFields"][] = "CompPurchaseUnitEn";
$tdataInput_Products_Report[".addFields"][] = "CostYear";
$tdataInput_Products_Report[".addFields"][] = "CostMonth";
$tdataInput_Products_Report[".addFields"][] = "PercentCost";

$tdataInput_Products_Report[".inlineAddFields"] = array();
$tdataInput_Products_Report[".inlineAddFields"][] = "ProdGrpCode";
$tdataInput_Products_Report[".inlineAddFields"][] = "Status";
$tdataInput_Products_Report[".inlineAddFields"][] = "ProdNo";
$tdataInput_Products_Report[".inlineAddFields"][] = "CostType";
$tdataInput_Products_Report[".inlineAddFields"][] = "EngName";
$tdataInput_Products_Report[".inlineAddFields"][] = "ThaiName";
$tdataInput_Products_Report[".inlineAddFields"][] = "Qtty";
$tdataInput_Products_Report[".inlineAddFields"][] = "PieceCost";
$tdataInput_Products_Report[".inlineAddFields"][] = "SortOrder";
$tdataInput_Products_Report[".inlineAddFields"][] = "Cost";
$tdataInput_Products_Report[".inlineAddFields"][] = "UnitEngRpt";
$tdataInput_Products_Report[".inlineAddFields"][] = "UnitThaiRpt";
$tdataInput_Products_Report[".inlineAddFields"][] = "CompPurchaseUnitEn";
$tdataInput_Products_Report[".inlineAddFields"][] = "CostYear";
$tdataInput_Products_Report[".inlineAddFields"][] = "CostMonth";
$tdataInput_Products_Report[".inlineAddFields"][] = "PercentCost";

$tdataInput_Products_Report[".editFields"] = array();
$tdataInput_Products_Report[".editFields"][] = "ProdGrpCode";
$tdataInput_Products_Report[".editFields"][] = "Status";
$tdataInput_Products_Report[".editFields"][] = "ProdNo";
$tdataInput_Products_Report[".editFields"][] = "CostType";
$tdataInput_Products_Report[".editFields"][] = "EngName";
$tdataInput_Products_Report[".editFields"][] = "ThaiName";
$tdataInput_Products_Report[".editFields"][] = "Qtty";
$tdataInput_Products_Report[".editFields"][] = "PieceCost";
$tdataInput_Products_Report[".editFields"][] = "SortOrder";
$tdataInput_Products_Report[".editFields"][] = "Cost";
$tdataInput_Products_Report[".editFields"][] = "UnitEngRpt";
$tdataInput_Products_Report[".editFields"][] = "UnitThaiRpt";
$tdataInput_Products_Report[".editFields"][] = "CompPurchaseUnitEn";
$tdataInput_Products_Report[".editFields"][] = "CostYear";
$tdataInput_Products_Report[".editFields"][] = "CostMonth";
$tdataInput_Products_Report[".editFields"][] = "PercentCost";

$tdataInput_Products_Report[".inlineEditFields"] = array();
$tdataInput_Products_Report[".inlineEditFields"][] = "ProdGrpCode";
$tdataInput_Products_Report[".inlineEditFields"][] = "Status";
$tdataInput_Products_Report[".inlineEditFields"][] = "ProdNo";
$tdataInput_Products_Report[".inlineEditFields"][] = "CostType";
$tdataInput_Products_Report[".inlineEditFields"][] = "EngName";
$tdataInput_Products_Report[".inlineEditFields"][] = "ThaiName";
$tdataInput_Products_Report[".inlineEditFields"][] = "Qtty";
$tdataInput_Products_Report[".inlineEditFields"][] = "PieceCost";
$tdataInput_Products_Report[".inlineEditFields"][] = "SortOrder";
$tdataInput_Products_Report[".inlineEditFields"][] = "Cost";
$tdataInput_Products_Report[".inlineEditFields"][] = "UnitEngRpt";
$tdataInput_Products_Report[".inlineEditFields"][] = "UnitThaiRpt";
$tdataInput_Products_Report[".inlineEditFields"][] = "CompPurchaseUnitEn";
$tdataInput_Products_Report[".inlineEditFields"][] = "CostYear";
$tdataInput_Products_Report[".inlineEditFields"][] = "CostMonth";
$tdataInput_Products_Report[".inlineEditFields"][] = "PercentCost";

$tdataInput_Products_Report[".exportFields"] = array();
$tdataInput_Products_Report[".exportFields"][] = "ProdGrpCode";
$tdataInput_Products_Report[".exportFields"][] = "Status";
$tdataInput_Products_Report[".exportFields"][] = "ProdNo";
$tdataInput_Products_Report[".exportFields"][] = "CostType";
$tdataInput_Products_Report[".exportFields"][] = "EngName";
$tdataInput_Products_Report[".exportFields"][] = "ThaiName";
$tdataInput_Products_Report[".exportFields"][] = "Qtty";
$tdataInput_Products_Report[".exportFields"][] = "PieceCost";
$tdataInput_Products_Report[".exportFields"][] = "SortOrder";
$tdataInput_Products_Report[".exportFields"][] = "Cost";
$tdataInput_Products_Report[".exportFields"][] = "UnitEngRpt";
$tdataInput_Products_Report[".exportFields"][] = "UnitThaiRpt";
$tdataInput_Products_Report[".exportFields"][] = "CompPurchaseUnitEn";
$tdataInput_Products_Report[".exportFields"][] = "CostYear";
$tdataInput_Products_Report[".exportFields"][] = "CostMonth";
$tdataInput_Products_Report[".exportFields"][] = "PercentCost";

$tdataInput_Products_Report[".printFields"] = array();
$tdataInput_Products_Report[".printFields"][] = "ProdGrpCode";
$tdataInput_Products_Report[".printFields"][] = "Status";
$tdataInput_Products_Report[".printFields"][] = "ProdNo";
$tdataInput_Products_Report[".printFields"][] = "CostType";
$tdataInput_Products_Report[".printFields"][] = "EngName";
$tdataInput_Products_Report[".printFields"][] = "ThaiName";
$tdataInput_Products_Report[".printFields"][] = "Qtty";
$tdataInput_Products_Report[".printFields"][] = "PieceCost";
$tdataInput_Products_Report[".printFields"][] = "SortOrder";
$tdataInput_Products_Report[".printFields"][] = "Cost";
$tdataInput_Products_Report[".printFields"][] = "UnitEngRpt";
$tdataInput_Products_Report[".printFields"][] = "UnitThaiRpt";
$tdataInput_Products_Report[".printFields"][] = "CompPurchaseUnitEn";
$tdataInput_Products_Report[".printFields"][] = "CostYear";
$tdataInput_Products_Report[".printFields"][] = "CostMonth";
$tdataInput_Products_Report[".printFields"][] = "PercentCost";

//	ProdGrpCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ProdGrpCode";
	$fdata["GoodName"] = "ProdGrpCode";
	$fdata["ownerTable"] = "prodcosts";
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
	
		
		
	$tdataInput_Products_Report["ProdGrpCode"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "prodcosts";
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
	
		
		
	$tdataInput_Products_Report["Status"] = $fdata;
//	ProdNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ProdNo";
	$fdata["GoodName"] = "ProdNo";
	$fdata["ownerTable"] = "prodcosts";
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
	
		
		
	$tdataInput_Products_Report["ProdNo"] = $fdata;
//	CostType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CostType";
	$fdata["GoodName"] = "CostType";
	$fdata["ownerTable"] = "prodcosts";
	$fdata["Label"] = "Cost Type"; 
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
	
		$fdata["strField"] = "CostType"; 
		$fdata["FullName"] = "CostType";
	
		
		
				
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
			$edata["EditParams"].= " maxlength=20";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataInput_Products_Report["CostType"] = $fdata;
//	EngName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "EngName";
	$fdata["GoodName"] = "EngName";
	$fdata["ownerTable"] = "prodcosts";
	$fdata["Label"] = "Eng Name"; 
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
	
		$fdata["strField"] = "EngName"; 
		$fdata["FullName"] = "EngName";
	
		
		
				
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
			$edata["EditParams"].= " maxlength=70";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataInput_Products_Report["EngName"] = $fdata;
//	ThaiName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ThaiName";
	$fdata["GoodName"] = "ThaiName";
	$fdata["ownerTable"] = "prodcosts";
	$fdata["Label"] = "Thai Name"; 
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
	
		$fdata["strField"] = "ThaiName"; 
		$fdata["FullName"] = "ThaiName";
	
		
		
				
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
			$edata["EditParams"].= " maxlength=70";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataInput_Products_Report["ThaiName"] = $fdata;
//	Qtty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Qtty";
	$fdata["GoodName"] = "Qtty";
	$fdata["ownerTable"] = "prodcosts";
	$fdata["Label"] = "Qtty"; 
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
	
		$fdata["strField"] = "Qtty"; 
		$fdata["FullName"] = "Qtty";
	
		
		
				
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
	
		
		
	$tdataInput_Products_Report["Qtty"] = $fdata;
//	PieceCost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "PieceCost";
	$fdata["GoodName"] = "PieceCost";
	$fdata["ownerTable"] = "prodcosts";
	$fdata["Label"] = "Piece Cost"; 
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
	
		$fdata["strField"] = "PieceCost"; 
		$fdata["FullName"] = "PieceCost";
	
		
		
				
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
	
		
		
	$tdataInput_Products_Report["PieceCost"] = $fdata;
//	SortOrder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "SortOrder";
	$fdata["GoodName"] = "SortOrder";
	$fdata["ownerTable"] = "prodcosts";
	$fdata["Label"] = "Sort Order"; 
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
	
		$fdata["strField"] = "SortOrder"; 
		$fdata["FullName"] = "SortOrder";
	
		
		
				
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
	
		
		
	$tdataInput_Products_Report["SortOrder"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "prodcosts";
	$fdata["Label"] = "Cost"; 
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
	
		$fdata["strField"] = "Cost"; 
		$fdata["FullName"] = "Cost";
	
		
		
				
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
	
		
		
	$tdataInput_Products_Report["Cost"] = $fdata;
//	UnitEngRpt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "UnitEngRpt";
	$fdata["GoodName"] = "UnitEngRpt";
	$fdata["ownerTable"] = "prodcosts";
	$fdata["Label"] = "Unit Eng Rpt"; 
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
	
		$fdata["strField"] = "UnitEngRpt"; 
		$fdata["FullName"] = "UnitEngRpt";
	
		
		
				
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
			$edata["EditParams"].= " maxlength=25";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataInput_Products_Report["UnitEngRpt"] = $fdata;
//	UnitThaiRpt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "UnitThaiRpt";
	$fdata["GoodName"] = "UnitThaiRpt";
	$fdata["ownerTable"] = "prodcosts";
	$fdata["Label"] = "Unit Thai Rpt"; 
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
	
		$fdata["strField"] = "UnitThaiRpt"; 
		$fdata["FullName"] = "UnitThaiRpt";
	
		
		
				
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
			$edata["EditParams"].= " maxlength=25";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataInput_Products_Report["UnitThaiRpt"] = $fdata;
//	CompPurchaseUnitEn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "CompPurchaseUnitEn";
	$fdata["GoodName"] = "CompPurchaseUnitEn";
	$fdata["ownerTable"] = "prodcosts";
	$fdata["Label"] = "Comp Purchase Unit En"; 
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
	
		$fdata["strField"] = "CompPurchaseUnitEn"; 
		$fdata["FullName"] = "CompPurchaseUnitEn";
	
		
		
				
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
			$edata["EditParams"].= " maxlength=25";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataInput_Products_Report["CompPurchaseUnitEn"] = $fdata;
//	CostYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "CostYear";
	$fdata["GoodName"] = "CostYear";
	$fdata["ownerTable"] = "prodcosts";
	$fdata["Label"] = "Cost Year"; 
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
	
		$fdata["strField"] = "CostYear"; 
		$fdata["FullName"] = "CostYear";
	
		
		
				
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
	
		
		
	$tdataInput_Products_Report["CostYear"] = $fdata;
//	CostMonth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "CostMonth";
	$fdata["GoodName"] = "CostMonth";
	$fdata["ownerTable"] = "prodcosts";
	$fdata["Label"] = "Cost Month"; 
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
	
		$fdata["strField"] = "CostMonth"; 
		$fdata["FullName"] = "CostMonth";
	
		
		
				
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
	
		
		
	$tdataInput_Products_Report["CostMonth"] = $fdata;
//	PercentCost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "PercentCost";
	$fdata["GoodName"] = "PercentCost";
	$fdata["ownerTable"] = "prodcosts";
	$fdata["Label"] = "Percent Cost"; 
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
	
		$fdata["strField"] = "PercentCost"; 
		$fdata["FullName"] = "PercentCost";
	
		
		
				
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
	
		
		
	$tdataInput_Products_Report["PercentCost"] = $fdata;

	
$tables_data["Input Products Report"]=&$tdataInput_Products_Report;
$field_labels["Input_Products_Report"] = &$fieldLabelsInput_Products_Report;
$fieldToolTips["Input Products Report"] = &$fieldToolTipsInput_Products_Report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Input Products Report"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Input Products Report"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Input_Products_Report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ProdGrpCode,   Status,   ProdNo,   CostType,   EngName,   ThaiName,   Qtty,   PieceCost,   SortOrder,   Cost,   UnitEngRpt,   UnitThaiRpt,   CompPurchaseUnitEn,   CostYear,   CostMonth,   PercentCost";
$proto0["m_strFrom"] = "FROM prodcosts";
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
	"m_strTable" => "prodcosts"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "prodcosts"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ProdNo",
	"m_strTable" => "prodcosts"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "CostType",
	"m_strTable" => "prodcosts"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "EngName",
	"m_strTable" => "prodcosts"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "ThaiName",
	"m_strTable" => "prodcosts"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Qtty",
	"m_strTable" => "prodcosts"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "PieceCost",
	"m_strTable" => "prodcosts"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "SortOrder",
	"m_strTable" => "prodcosts"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "prodcosts"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitEngRpt",
	"m_strTable" => "prodcosts"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitThaiRpt",
	"m_strTable" => "prodcosts"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "CompPurchaseUnitEn",
	"m_strTable" => "prodcosts"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "CostYear",
	"m_strTable" => "prodcosts"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "CostMonth",
	"m_strTable" => "prodcosts"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "PercentCost",
	"m_strTable" => "prodcosts"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto37=array();
$proto37["m_link"] = "SQLL_MAIN";
			$proto38=array();
$proto38["m_strName"] = "prodcosts";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "ProdGrpCode";
$proto38["m_columns"][] = "Status";
$proto38["m_columns"][] = "ProdNo";
$proto38["m_columns"][] = "CostType";
$proto38["m_columns"][] = "EngName";
$proto38["m_columns"][] = "ThaiName";
$proto38["m_columns"][] = "Qtty";
$proto38["m_columns"][] = "PieceCost";
$proto38["m_columns"][] = "SortOrder";
$proto38["m_columns"][] = "Cost";
$proto38["m_columns"][] = "UnitEngRpt";
$proto38["m_columns"][] = "UnitThaiRpt";
$proto38["m_columns"][] = "CompPurchaseUnitEn";
$proto38["m_columns"][] = "CostYear";
$proto38["m_columns"][] = "CostMonth";
$proto38["m_columns"][] = "PercentCost";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_alias"] = "";
$proto39=array();
$proto39["m_sql"] = "";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "";
$proto39["m_havingmode"] = "0";
$proto39["m_inBrackets"] = "0";
$proto39["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto39);

$proto37["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto37);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Input_Products_Report = createSqlQuery_Input_Products_Report();
																$tdataInput_Products_Report[".sqlquery"] = $queryData_Input_Products_Report;
	
if(isset($tdataInput_Products_Report["field2"])){
	$tdataInput_Products_Report["field2"]["LookupTable"] = "carscars_view";
	$tdataInput_Products_Report["field2"]["LookupOrderBy"] = "name";
	$tdataInput_Products_Report["field2"]["LookupType"] = 4;
	$tdataInput_Products_Report["field2"]["LinkField"] = "email";
	$tdataInput_Products_Report["field2"]["DisplayField"] = "name";
	$tdataInput_Products_Report[".hasCustomViewField"] = true;
}

$tableEvents["Input Products Report"] = new eventsBase;
$tdataInput_Products_Report[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Input Products Report");

?>
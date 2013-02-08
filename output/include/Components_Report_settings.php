<?php
require_once(getabspath("classes/cipherer.php"));
$tdataComponents_Report = array();
	$tdataComponents_Report[".NumberOfChars"] = 80; 
	$tdataComponents_Report[".ShortName"] = "Components_Report";
	$tdataComponents_Report[".OwnerID"] = "";
	$tdataComponents_Report[".OriginalTable"] = "componentrep";

//	field labels
$fieldLabelsComponents_Report = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsComponents_Report["English"] = array();
	$fieldToolTipsComponents_Report["English"] = array();
	$fieldLabelsComponents_Report["English"]["CompTypeEng"] = "Comp Type Eng";
	$fieldToolTipsComponents_Report["English"]["CompTypeEng"] = "";
	$fieldLabelsComponents_Report["English"]["CompTypeLL"] = "Comp Type LL";
	$fieldToolTipsComponents_Report["English"]["CompTypeLL"] = "";
	$fieldLabelsComponents_Report["English"]["EngName"] = "Eng Name";
	$fieldToolTipsComponents_Report["English"]["EngName"] = "";
	$fieldLabelsComponents_Report["English"]["ThaiName"] = "Thai Name";
	$fieldToolTipsComponents_Report["English"]["ThaiName"] = "";
	$fieldLabelsComponents_Report["English"]["UnitEng"] = "Unit Eng";
	$fieldToolTipsComponents_Report["English"]["UnitEng"] = "";
	$fieldLabelsComponents_Report["English"]["CompPurchaseUnitEn"] = "Comp Purchase Unit En";
	$fieldToolTipsComponents_Report["English"]["CompPurchaseUnitEn"] = "";
	$fieldLabelsComponents_Report["English"]["UnitQty"] = "Unit Qty";
	$fieldToolTipsComponents_Report["English"]["UnitQty"] = "";
	$fieldLabelsComponents_Report["English"]["Cost"] = "Cost";
	$fieldToolTipsComponents_Report["English"]["Cost"] = "";
	$fieldLabelsComponents_Report["English"]["Density"] = "Density";
	$fieldToolTipsComponents_Report["English"]["Density"] = "";
	$fieldLabelsComponents_Report["English"]["Source"] = "Source";
	$fieldToolTipsComponents_Report["English"]["Source"] = "";
	$fieldLabelsComponents_Report["English"]["Unit_LL"] = "Unit LL";
	$fieldToolTipsComponents_Report["English"]["Unit_LL"] = "";
	$fieldLabelsComponents_Report["English"]["CompTypeNo"] = "Comp Type No";
	$fieldToolTipsComponents_Report["English"]["CompTypeNo"] = "";
	if (count($fieldToolTipsComponents_Report["English"]))
		$tdataComponents_Report[".isUseToolTips"] = true;
}
	
	
	$tdataComponents_Report[".NCSearch"] = true;



$tdataComponents_Report[".shortTableName"] = "Components_Report";
$tdataComponents_Report[".nSecOptions"] = 0;
$tdataComponents_Report[".recsPerRowList"] = 1;
$tdataComponents_Report[".mainTableOwnerID"] = "";
$tdataComponents_Report[".moveNext"] = 1;
$tdataComponents_Report[".nType"] = 2;

$tdataComponents_Report[".strOriginalTableName"] = "componentrep";




$tdataComponents_Report[".showAddInPopup"] = false;

$tdataComponents_Report[".showEditInPopup"] = false;

$tdataComponents_Report[".showViewInPopup"] = false;

$tdataComponents_Report[".fieldsForRegister"] = array();

$tdataComponents_Report[".listAjax"] = false;

	$tdataComponents_Report[".audit"] = false;

	$tdataComponents_Report[".locking"] = false;

$tdataComponents_Report[".listIcons"] = true;

$tdataComponents_Report[".exportTo"] = true;

$tdataComponents_Report[".printFriendly"] = true;


$tdataComponents_Report[".showSimpleSearchOptions"] = false;

$tdataComponents_Report[".showSearchPanel"] = true;

if (isMobile())
	$tdataComponents_Report[".isUseAjaxSuggest"] = false;
else 
	$tdataComponents_Report[".isUseAjaxSuggest"] = true;


// button handlers file names

$tdataComponents_Report[".addPageEvents"] = false;

// use timepicker for search panel
$tdataComponents_Report[".isUseTimeForSearch"] = false;




$tdataComponents_Report[".allSearchFields"] = array();

$tdataComponents_Report[".allSearchFields"][] = "CompTypeEng";
$tdataComponents_Report[".allSearchFields"][] = "CompTypeLL";
$tdataComponents_Report[".allSearchFields"][] = "EngName";
$tdataComponents_Report[".allSearchFields"][] = "ThaiName";
$tdataComponents_Report[".allSearchFields"][] = "UnitEng";
$tdataComponents_Report[".allSearchFields"][] = "CompPurchaseUnitEn";
$tdataComponents_Report[".allSearchFields"][] = "UnitQty";
$tdataComponents_Report[".allSearchFields"][] = "Cost";
$tdataComponents_Report[".allSearchFields"][] = "Density";
$tdataComponents_Report[".allSearchFields"][] = "Source";
$tdataComponents_Report[".allSearchFields"][] = "Unit_LL";
$tdataComponents_Report[".allSearchFields"][] = "CompTypeNo";

$tdataComponents_Report[".googleLikeFields"][] = "CompTypeEng";
$tdataComponents_Report[".googleLikeFields"][] = "CompTypeLL";
$tdataComponents_Report[".googleLikeFields"][] = "EngName";
$tdataComponents_Report[".googleLikeFields"][] = "ThaiName";
$tdataComponents_Report[".googleLikeFields"][] = "UnitEng";
$tdataComponents_Report[".googleLikeFields"][] = "CompPurchaseUnitEn";
$tdataComponents_Report[".googleLikeFields"][] = "UnitQty";
$tdataComponents_Report[".googleLikeFields"][] = "Cost";
$tdataComponents_Report[".googleLikeFields"][] = "Density";
$tdataComponents_Report[".googleLikeFields"][] = "Source";
$tdataComponents_Report[".googleLikeFields"][] = "Unit_LL";
$tdataComponents_Report[".googleLikeFields"][] = "CompTypeNo";


$tdataComponents_Report[".advSearchFields"][] = "CompTypeEng";
$tdataComponents_Report[".advSearchFields"][] = "CompTypeLL";
$tdataComponents_Report[".advSearchFields"][] = "EngName";
$tdataComponents_Report[".advSearchFields"][] = "ThaiName";
$tdataComponents_Report[".advSearchFields"][] = "UnitEng";
$tdataComponents_Report[".advSearchFields"][] = "CompPurchaseUnitEn";
$tdataComponents_Report[".advSearchFields"][] = "UnitQty";
$tdataComponents_Report[".advSearchFields"][] = "Cost";
$tdataComponents_Report[".advSearchFields"][] = "Density";
$tdataComponents_Report[".advSearchFields"][] = "Source";
$tdataComponents_Report[".advSearchFields"][] = "Unit_LL";
$tdataComponents_Report[".advSearchFields"][] = "CompTypeNo";

$tdataComponents_Report[".isTableType"] = "report";

	



// Access doesn't support subqueries from the same table as main




$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataComponents_Report[".strOrderBy"] = $tstrOrderBy;

$tdataComponents_Report[".orderindexes"] = array();

$tdataComponents_Report[".sqlHead"] = "SELECT CompTypeEng,   CompTypeLL,   EngName,   ThaiName,   UnitEng,   CompPurchaseUnitEn,   UnitQty,   Cost,   Density,   Source,   Unit_LL,   CompTypeNo";
$tdataComponents_Report[".sqlFrom"] = "FROM componentrep";
$tdataComponents_Report[".sqlWhereExpr"] = "";
$tdataComponents_Report[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataComponents_Report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataComponents_Report[".arrGroupsPerPage"] = $arrGPP;

$tableKeysComponents_Report = array();
$tdataComponents_Report[".Keys"] = $tableKeysComponents_Report;

$tdataComponents_Report[".listFields"] = array();
$tdataComponents_Report[".listFields"][] = "CompTypeEng";
$tdataComponents_Report[".listFields"][] = "CompTypeLL";
$tdataComponents_Report[".listFields"][] = "EngName";
$tdataComponents_Report[".listFields"][] = "ThaiName";
$tdataComponents_Report[".listFields"][] = "UnitEng";
$tdataComponents_Report[".listFields"][] = "CompPurchaseUnitEn";
$tdataComponents_Report[".listFields"][] = "UnitQty";
$tdataComponents_Report[".listFields"][] = "Cost";
$tdataComponents_Report[".listFields"][] = "Density";
$tdataComponents_Report[".listFields"][] = "Source";
$tdataComponents_Report[".listFields"][] = "Unit_LL";
$tdataComponents_Report[".listFields"][] = "CompTypeNo";

$tdataComponents_Report[".viewFields"] = array();
$tdataComponents_Report[".viewFields"][] = "CompTypeEng";
$tdataComponents_Report[".viewFields"][] = "CompTypeLL";
$tdataComponents_Report[".viewFields"][] = "EngName";
$tdataComponents_Report[".viewFields"][] = "ThaiName";
$tdataComponents_Report[".viewFields"][] = "UnitEng";
$tdataComponents_Report[".viewFields"][] = "CompPurchaseUnitEn";
$tdataComponents_Report[".viewFields"][] = "UnitQty";
$tdataComponents_Report[".viewFields"][] = "Cost";
$tdataComponents_Report[".viewFields"][] = "Density";
$tdataComponents_Report[".viewFields"][] = "Source";
$tdataComponents_Report[".viewFields"][] = "Unit_LL";
$tdataComponents_Report[".viewFields"][] = "CompTypeNo";

$tdataComponents_Report[".addFields"] = array();
$tdataComponents_Report[".addFields"][] = "CompTypeEng";
$tdataComponents_Report[".addFields"][] = "CompTypeLL";
$tdataComponents_Report[".addFields"][] = "EngName";
$tdataComponents_Report[".addFields"][] = "ThaiName";
$tdataComponents_Report[".addFields"][] = "UnitEng";
$tdataComponents_Report[".addFields"][] = "CompPurchaseUnitEn";
$tdataComponents_Report[".addFields"][] = "UnitQty";
$tdataComponents_Report[".addFields"][] = "Cost";
$tdataComponents_Report[".addFields"][] = "Density";
$tdataComponents_Report[".addFields"][] = "Source";
$tdataComponents_Report[".addFields"][] = "Unit_LL";
$tdataComponents_Report[".addFields"][] = "CompTypeNo";

$tdataComponents_Report[".inlineAddFields"] = array();
$tdataComponents_Report[".inlineAddFields"][] = "CompTypeEng";
$tdataComponents_Report[".inlineAddFields"][] = "CompTypeLL";
$tdataComponents_Report[".inlineAddFields"][] = "EngName";
$tdataComponents_Report[".inlineAddFields"][] = "ThaiName";
$tdataComponents_Report[".inlineAddFields"][] = "UnitEng";
$tdataComponents_Report[".inlineAddFields"][] = "CompPurchaseUnitEn";
$tdataComponents_Report[".inlineAddFields"][] = "UnitQty";
$tdataComponents_Report[".inlineAddFields"][] = "Cost";
$tdataComponents_Report[".inlineAddFields"][] = "Density";
$tdataComponents_Report[".inlineAddFields"][] = "Source";
$tdataComponents_Report[".inlineAddFields"][] = "Unit_LL";
$tdataComponents_Report[".inlineAddFields"][] = "CompTypeNo";

$tdataComponents_Report[".editFields"] = array();
$tdataComponents_Report[".editFields"][] = "CompTypeEng";
$tdataComponents_Report[".editFields"][] = "CompTypeLL";
$tdataComponents_Report[".editFields"][] = "EngName";
$tdataComponents_Report[".editFields"][] = "ThaiName";
$tdataComponents_Report[".editFields"][] = "UnitEng";
$tdataComponents_Report[".editFields"][] = "CompPurchaseUnitEn";
$tdataComponents_Report[".editFields"][] = "UnitQty";
$tdataComponents_Report[".editFields"][] = "Cost";
$tdataComponents_Report[".editFields"][] = "Density";
$tdataComponents_Report[".editFields"][] = "Source";
$tdataComponents_Report[".editFields"][] = "Unit_LL";
$tdataComponents_Report[".editFields"][] = "CompTypeNo";

$tdataComponents_Report[".inlineEditFields"] = array();
$tdataComponents_Report[".inlineEditFields"][] = "CompTypeEng";
$tdataComponents_Report[".inlineEditFields"][] = "CompTypeLL";
$tdataComponents_Report[".inlineEditFields"][] = "EngName";
$tdataComponents_Report[".inlineEditFields"][] = "ThaiName";
$tdataComponents_Report[".inlineEditFields"][] = "UnitEng";
$tdataComponents_Report[".inlineEditFields"][] = "CompPurchaseUnitEn";
$tdataComponents_Report[".inlineEditFields"][] = "UnitQty";
$tdataComponents_Report[".inlineEditFields"][] = "Cost";
$tdataComponents_Report[".inlineEditFields"][] = "Density";
$tdataComponents_Report[".inlineEditFields"][] = "Source";
$tdataComponents_Report[".inlineEditFields"][] = "Unit_LL";
$tdataComponents_Report[".inlineEditFields"][] = "CompTypeNo";

$tdataComponents_Report[".exportFields"] = array();
$tdataComponents_Report[".exportFields"][] = "CompTypeEng";
$tdataComponents_Report[".exportFields"][] = "CompTypeLL";
$tdataComponents_Report[".exportFields"][] = "EngName";
$tdataComponents_Report[".exportFields"][] = "ThaiName";
$tdataComponents_Report[".exportFields"][] = "UnitEng";
$tdataComponents_Report[".exportFields"][] = "CompPurchaseUnitEn";
$tdataComponents_Report[".exportFields"][] = "UnitQty";
$tdataComponents_Report[".exportFields"][] = "Cost";
$tdataComponents_Report[".exportFields"][] = "Density";
$tdataComponents_Report[".exportFields"][] = "Source";
$tdataComponents_Report[".exportFields"][] = "Unit_LL";
$tdataComponents_Report[".exportFields"][] = "CompTypeNo";

$tdataComponents_Report[".printFields"] = array();
$tdataComponents_Report[".printFields"][] = "CompTypeEng";
$tdataComponents_Report[".printFields"][] = "CompTypeLL";
$tdataComponents_Report[".printFields"][] = "EngName";
$tdataComponents_Report[".printFields"][] = "ThaiName";
$tdataComponents_Report[".printFields"][] = "UnitEng";
$tdataComponents_Report[".printFields"][] = "CompPurchaseUnitEn";
$tdataComponents_Report[".printFields"][] = "UnitQty";
$tdataComponents_Report[".printFields"][] = "Cost";
$tdataComponents_Report[".printFields"][] = "Density";
$tdataComponents_Report[".printFields"][] = "Source";
$tdataComponents_Report[".printFields"][] = "Unit_LL";
$tdataComponents_Report[".printFields"][] = "CompTypeNo";

//	CompTypeEng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CompTypeEng";
	$fdata["GoodName"] = "CompTypeEng";
	$fdata["ownerTable"] = "componentrep";
	$fdata["Label"] = "Comp Type Eng"; 
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
	
		$fdata["strField"] = "CompTypeEng"; 
		$fdata["FullName"] = "CompTypeEng";
	
		
		
				
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
			$edata["EditParams"].= " maxlength=12";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataComponents_Report["CompTypeEng"] = $fdata;
//	CompTypeLL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CompTypeLL";
	$fdata["GoodName"] = "CompTypeLL";
	$fdata["ownerTable"] = "componentrep";
	$fdata["Label"] = "Comp Type LL"; 
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
	
		$fdata["strField"] = "CompTypeLL"; 
		$fdata["FullName"] = "CompTypeLL";
	
		
		
				
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
			$edata["EditParams"].= " maxlength=12";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataComponents_Report["CompTypeLL"] = $fdata;
//	EngName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "EngName";
	$fdata["GoodName"] = "EngName";
	$fdata["ownerTable"] = "componentrep";
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
	
		
		
	$tdataComponents_Report["EngName"] = $fdata;
//	ThaiName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ThaiName";
	$fdata["GoodName"] = "ThaiName";
	$fdata["ownerTable"] = "componentrep";
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
	
		
		
	$tdataComponents_Report["ThaiName"] = $fdata;
//	UnitEng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "UnitEng";
	$fdata["GoodName"] = "UnitEng";
	$fdata["ownerTable"] = "componentrep";
	$fdata["Label"] = "Unit Eng"; 
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
	
		$fdata["strField"] = "UnitEng"; 
		$fdata["FullName"] = "UnitEng";
	
		
		
				
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
	
		
		
	$tdataComponents_Report["UnitEng"] = $fdata;
//	CompPurchaseUnitEn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CompPurchaseUnitEn";
	$fdata["GoodName"] = "CompPurchaseUnitEn";
	$fdata["ownerTable"] = "componentrep";
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
	
		
		
	$tdataComponents_Report["CompPurchaseUnitEn"] = $fdata;
//	UnitQty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "UnitQty";
	$fdata["GoodName"] = "UnitQty";
	$fdata["ownerTable"] = "componentrep";
	$fdata["Label"] = "Unit Qty"; 
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
	
		$fdata["strField"] = "UnitQty"; 
		$fdata["FullName"] = "UnitQty";
	
		
		
				
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
	
		
		
	$tdataComponents_Report["UnitQty"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "componentrep";
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
	
		
		
	$tdataComponents_Report["Cost"] = $fdata;
//	Density
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Density";
	$fdata["GoodName"] = "Density";
	$fdata["ownerTable"] = "componentrep";
	$fdata["Label"] = "Density"; 
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
	
		$fdata["strField"] = "Density"; 
		$fdata["FullName"] = "Density";
	
		
		
				
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
	
		
		
	$tdataComponents_Report["Density"] = $fdata;
//	Source
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Source";
	$fdata["GoodName"] = "Source";
	$fdata["ownerTable"] = "componentrep";
	$fdata["Label"] = "Source"; 
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
	
		$fdata["strField"] = "Source"; 
		$fdata["FullName"] = "Source";
	
		
		
				
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
	
		
		
	$tdataComponents_Report["Source"] = $fdata;
//	Unit_LL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Unit_LL";
	$fdata["GoodName"] = "Unit_LL";
	$fdata["ownerTable"] = "componentrep";
	$fdata["Label"] = "Unit LL"; 
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
	
		$fdata["strField"] = "Unit_LL"; 
		$fdata["FullName"] = "Unit_LL";
	
		
		
				
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
			$edata["EditParams"].= " maxlength=6";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataComponents_Report["Unit_LL"] = $fdata;
//	CompTypeNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "CompTypeNo";
	$fdata["GoodName"] = "CompTypeNo";
	$fdata["ownerTable"] = "componentrep";
	$fdata["Label"] = "Comp Type No"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "CompTypeNo"; 
		$fdata["FullName"] = "CompTypeNo";
	
		
		
				
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
	
		
		
	$tdataComponents_Report["CompTypeNo"] = $fdata;

	
$tables_data["Components Report"]=&$tdataComponents_Report;
$field_labels["Components_Report"] = &$fieldLabelsComponents_Report;
$fieldToolTips["Components Report"] = &$fieldToolTipsComponents_Report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Components Report"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Components Report"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Components_Report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CompTypeEng,   CompTypeLL,   EngName,   ThaiName,   UnitEng,   CompPurchaseUnitEn,   UnitQty,   Cost,   Density,   Source,   Unit_LL,   CompTypeNo";
$proto0["m_strFrom"] = "FROM componentrep";
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
	"m_strName" => "CompTypeEng",
	"m_strTable" => "componentrep"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "CompTypeLL",
	"m_strTable" => "componentrep"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "EngName",
	"m_strTable" => "componentrep"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "ThaiName",
	"m_strTable" => "componentrep"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitEng",
	"m_strTable" => "componentrep"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "CompPurchaseUnitEn",
	"m_strTable" => "componentrep"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitQty",
	"m_strTable" => "componentrep"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "componentrep"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Density",
	"m_strTable" => "componentrep"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Source",
	"m_strTable" => "componentrep"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Unit_LL",
	"m_strTable" => "componentrep"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "CompTypeNo",
	"m_strTable" => "componentrep"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto29=array();
$proto29["m_link"] = "SQLL_MAIN";
			$proto30=array();
$proto30["m_strName"] = "componentrep";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "CompTypeEng";
$proto30["m_columns"][] = "CompTypeLL";
$proto30["m_columns"][] = "EngName";
$proto30["m_columns"][] = "ThaiName";
$proto30["m_columns"][] = "UnitEng";
$proto30["m_columns"][] = "CompPurchaseUnitEn";
$proto30["m_columns"][] = "UnitQty";
$proto30["m_columns"][] = "Cost";
$proto30["m_columns"][] = "Density";
$proto30["m_columns"][] = "Source";
$proto30["m_columns"][] = "Unit_LL";
$proto30["m_columns"][] = "CompTypeNo";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_alias"] = "";
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = "0";
$proto31["m_inBrackets"] = "0";
$proto31["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Components_Report = createSqlQuery_Components_Report();
												$tdataComponents_Report[".sqlquery"] = $queryData_Components_Report;
	
if(isset($tdataComponents_Report["field2"])){
	$tdataComponents_Report["field2"]["LookupTable"] = "carscars_view";
	$tdataComponents_Report["field2"]["LookupOrderBy"] = "name";
	$tdataComponents_Report["field2"]["LookupType"] = 4;
	$tdataComponents_Report["field2"]["LinkField"] = "email";
	$tdataComponents_Report["field2"]["DisplayField"] = "name";
	$tdataComponents_Report[".hasCustomViewField"] = true;
}

$tableEvents["Components Report"] = new eventsBase;
$tdataComponents_Report[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Components Report");

?>
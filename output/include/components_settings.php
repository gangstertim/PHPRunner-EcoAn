<?php
require_once(getabspath("classes/cipherer.php"));
$tdatacomponents = array();
	$tdatacomponents[".NumberOfChars"] = 80; 
	$tdatacomponents[".ShortName"] = "components";
	$tdatacomponents[".OwnerID"] = "";
	$tdatacomponents[".OriginalTable"] = "components";

//	field labels
$fieldLabelscomponents = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscomponents["English"] = array();
	$fieldToolTipscomponents["English"] = array();
	$fieldLabelscomponents["English"]["ComponentNo"] = "Component No";
	$fieldToolTipscomponents["English"]["ComponentNo"] = "";
	$fieldLabelscomponents["English"]["EngName"] = "Eng Name";
	$fieldToolTipscomponents["English"]["EngName"] = "";
	$fieldLabelscomponents["English"]["ThaiName"] = "Thai Name";
	$fieldToolTipscomponents["English"]["ThaiName"] = "";
	$fieldLabelscomponents["English"]["DescriptionEng"] = "Description Eng";
	$fieldToolTipscomponents["English"]["DescriptionEng"] = "";
	$fieldLabelscomponents["English"]["DescriptionThai"] = "Description Thai";
	$fieldToolTipscomponents["English"]["DescriptionThai"] = "";
	$fieldLabelscomponents["English"]["CompTypeNo"] = "Comp Type No";
	$fieldToolTipscomponents["English"]["CompTypeNo"] = "";
	$fieldLabelscomponents["English"]["UnitEng"] = "Unit Eng";
	$fieldToolTipscomponents["English"]["UnitEng"] = "";
	$fieldLabelscomponents["English"]["UnitQty"] = "Unit Qty";
	$fieldToolTipscomponents["English"]["UnitQty"] = "";
	$fieldLabelscomponents["English"]["CompPurchaseUnitEn"] = "Comp Purchase Unit En";
	$fieldToolTipscomponents["English"]["CompPurchaseUnitEn"] = "";
	$fieldLabelscomponents["English"]["Cost"] = "Cost";
	$fieldToolTipscomponents["English"]["Cost"] = "";
	$fieldLabelscomponents["English"]["PriceSell"] = "Price Sell";
	$fieldToolTipscomponents["English"]["PriceSell"] = "";
	if (count($fieldToolTipscomponents["English"]))
		$tdatacomponents[".isUseToolTips"] = true;
}
	
	
	$tdatacomponents[".NCSearch"] = true;



$tdatacomponents[".shortTableName"] = "components";
$tdatacomponents[".nSecOptions"] = 0;
$tdatacomponents[".recsPerRowList"] = 1;
$tdatacomponents[".mainTableOwnerID"] = "";
$tdatacomponents[".moveNext"] = 1;
$tdatacomponents[".nType"] = 0;

$tdatacomponents[".strOriginalTableName"] = "components";




$tdatacomponents[".showAddInPopup"] = false;

$tdatacomponents[".showEditInPopup"] = false;

$tdatacomponents[".showViewInPopup"] = false;

$tdatacomponents[".fieldsForRegister"] = array();

$tdatacomponents[".listAjax"] = false;

	$tdatacomponents[".audit"] = false;

	$tdatacomponents[".locking"] = false;

$tdatacomponents[".listIcons"] = true;
$tdatacomponents[".edit"] = true;
$tdatacomponents[".inlineEdit"] = true;
$tdatacomponents[".inlineAdd"] = true;
$tdatacomponents[".view"] = true;

$tdatacomponents[".exportTo"] = true;

$tdatacomponents[".printFriendly"] = true;

$tdatacomponents[".delete"] = true;

$tdatacomponents[".showSimpleSearchOptions"] = false;

$tdatacomponents[".showSearchPanel"] = true;

if (isMobile())
	$tdatacomponents[".isUseAjaxSuggest"] = false;
else 
	$tdatacomponents[".isUseAjaxSuggest"] = true;

$tdatacomponents[".rowHighlite"] = true;

// button handlers file names

$tdatacomponents[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacomponents[".isUseTimeForSearch"] = false;




$tdatacomponents[".allSearchFields"] = array();

$tdatacomponents[".allSearchFields"][] = "ComponentNo";
$tdatacomponents[".allSearchFields"][] = "EngName";
$tdatacomponents[".allSearchFields"][] = "ThaiName";
$tdatacomponents[".allSearchFields"][] = "DescriptionEng";
$tdatacomponents[".allSearchFields"][] = "DescriptionThai";
$tdatacomponents[".allSearchFields"][] = "CompTypeNo";
$tdatacomponents[".allSearchFields"][] = "UnitEng";
$tdatacomponents[".allSearchFields"][] = "UnitQty";
$tdatacomponents[".allSearchFields"][] = "CompPurchaseUnitEn";
$tdatacomponents[".allSearchFields"][] = "Cost";
$tdatacomponents[".allSearchFields"][] = "PriceSell";

$tdatacomponents[".googleLikeFields"][] = "ComponentNo";
$tdatacomponents[".googleLikeFields"][] = "EngName";
$tdatacomponents[".googleLikeFields"][] = "ThaiName";
$tdatacomponents[".googleLikeFields"][] = "DescriptionEng";
$tdatacomponents[".googleLikeFields"][] = "DescriptionThai";
$tdatacomponents[".googleLikeFields"][] = "CompTypeNo";
$tdatacomponents[".googleLikeFields"][] = "UnitEng";
$tdatacomponents[".googleLikeFields"][] = "UnitQty";
$tdatacomponents[".googleLikeFields"][] = "CompPurchaseUnitEn";
$tdatacomponents[".googleLikeFields"][] = "Cost";
$tdatacomponents[".googleLikeFields"][] = "PriceSell";


$tdatacomponents[".advSearchFields"][] = "ComponentNo";
$tdatacomponents[".advSearchFields"][] = "EngName";
$tdatacomponents[".advSearchFields"][] = "ThaiName";
$tdatacomponents[".advSearchFields"][] = "DescriptionEng";
$tdatacomponents[".advSearchFields"][] = "DescriptionThai";
$tdatacomponents[".advSearchFields"][] = "CompTypeNo";
$tdatacomponents[".advSearchFields"][] = "UnitEng";
$tdatacomponents[".advSearchFields"][] = "UnitQty";
$tdatacomponents[".advSearchFields"][] = "CompPurchaseUnitEn";
$tdatacomponents[".advSearchFields"][] = "Cost";
$tdatacomponents[".advSearchFields"][] = "PriceSell";

$tdatacomponents[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatacomponents[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacomponents[".strOrderBy"] = $tstrOrderBy;

$tdatacomponents[".orderindexes"] = array();

$tdatacomponents[".sqlHead"] = "SELECT ComponentNo,  EngName,  ThaiName,  DescriptionEng,  DescriptionThai,  CompTypeNo,  UnitEng,  UnitQty,  CompPurchaseUnitEn,  Cost,  PriceSell";
$tdatacomponents[".sqlFrom"] = "FROM components";
$tdatacomponents[".sqlWhereExpr"] = "";
$tdatacomponents[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacomponents[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacomponents[".arrGroupsPerPage"] = $arrGPP;

$tableKeyscomponents = array();
$tableKeyscomponents[] = "ComponentNo";
$tdatacomponents[".Keys"] = $tableKeyscomponents;

$tdatacomponents[".listFields"] = array();
$tdatacomponents[".listFields"][] = "ComponentNo";
$tdatacomponents[".listFields"][] = "EngName";
$tdatacomponents[".listFields"][] = "ThaiName";
$tdatacomponents[".listFields"][] = "DescriptionEng";
$tdatacomponents[".listFields"][] = "DescriptionThai";
$tdatacomponents[".listFields"][] = "CompTypeNo";
$tdatacomponents[".listFields"][] = "UnitEng";
$tdatacomponents[".listFields"][] = "UnitQty";
$tdatacomponents[".listFields"][] = "CompPurchaseUnitEn";
$tdatacomponents[".listFields"][] = "Cost";
$tdatacomponents[".listFields"][] = "PriceSell";

$tdatacomponents[".viewFields"] = array();
$tdatacomponents[".viewFields"][] = "ComponentNo";
$tdatacomponents[".viewFields"][] = "EngName";
$tdatacomponents[".viewFields"][] = "ThaiName";
$tdatacomponents[".viewFields"][] = "DescriptionEng";
$tdatacomponents[".viewFields"][] = "DescriptionThai";
$tdatacomponents[".viewFields"][] = "CompTypeNo";
$tdatacomponents[".viewFields"][] = "UnitEng";
$tdatacomponents[".viewFields"][] = "UnitQty";
$tdatacomponents[".viewFields"][] = "CompPurchaseUnitEn";
$tdatacomponents[".viewFields"][] = "Cost";
$tdatacomponents[".viewFields"][] = "PriceSell";

$tdatacomponents[".addFields"] = array();
$tdatacomponents[".addFields"][] = "EngName";
$tdatacomponents[".addFields"][] = "ThaiName";
$tdatacomponents[".addFields"][] = "DescriptionEng";
$tdatacomponents[".addFields"][] = "DescriptionThai";
$tdatacomponents[".addFields"][] = "CompTypeNo";
$tdatacomponents[".addFields"][] = "UnitEng";
$tdatacomponents[".addFields"][] = "UnitQty";
$tdatacomponents[".addFields"][] = "CompPurchaseUnitEn";
$tdatacomponents[".addFields"][] = "Cost";
$tdatacomponents[".addFields"][] = "PriceSell";

$tdatacomponents[".inlineAddFields"] = array();
$tdatacomponents[".inlineAddFields"][] = "EngName";
$tdatacomponents[".inlineAddFields"][] = "ThaiName";
$tdatacomponents[".inlineAddFields"][] = "DescriptionEng";
$tdatacomponents[".inlineAddFields"][] = "DescriptionThai";
$tdatacomponents[".inlineAddFields"][] = "CompTypeNo";
$tdatacomponents[".inlineAddFields"][] = "UnitEng";
$tdatacomponents[".inlineAddFields"][] = "UnitQty";
$tdatacomponents[".inlineAddFields"][] = "CompPurchaseUnitEn";
$tdatacomponents[".inlineAddFields"][] = "Cost";
$tdatacomponents[".inlineAddFields"][] = "PriceSell";

$tdatacomponents[".editFields"] = array();
$tdatacomponents[".editFields"][] = "EngName";
$tdatacomponents[".editFields"][] = "ThaiName";
$tdatacomponents[".editFields"][] = "DescriptionEng";
$tdatacomponents[".editFields"][] = "DescriptionThai";
$tdatacomponents[".editFields"][] = "CompTypeNo";
$tdatacomponents[".editFields"][] = "UnitEng";
$tdatacomponents[".editFields"][] = "UnitQty";
$tdatacomponents[".editFields"][] = "CompPurchaseUnitEn";
$tdatacomponents[".editFields"][] = "Cost";
$tdatacomponents[".editFields"][] = "PriceSell";

$tdatacomponents[".inlineEditFields"] = array();
$tdatacomponents[".inlineEditFields"][] = "EngName";
$tdatacomponents[".inlineEditFields"][] = "ThaiName";
$tdatacomponents[".inlineEditFields"][] = "DescriptionEng";
$tdatacomponents[".inlineEditFields"][] = "DescriptionThai";
$tdatacomponents[".inlineEditFields"][] = "CompTypeNo";
$tdatacomponents[".inlineEditFields"][] = "UnitEng";
$tdatacomponents[".inlineEditFields"][] = "UnitQty";
$tdatacomponents[".inlineEditFields"][] = "CompPurchaseUnitEn";
$tdatacomponents[".inlineEditFields"][] = "Cost";
$tdatacomponents[".inlineEditFields"][] = "PriceSell";

$tdatacomponents[".exportFields"] = array();
$tdatacomponents[".exportFields"][] = "ComponentNo";
$tdatacomponents[".exportFields"][] = "EngName";
$tdatacomponents[".exportFields"][] = "ThaiName";
$tdatacomponents[".exportFields"][] = "DescriptionEng";
$tdatacomponents[".exportFields"][] = "DescriptionThai";
$tdatacomponents[".exportFields"][] = "CompTypeNo";
$tdatacomponents[".exportFields"][] = "UnitEng";
$tdatacomponents[".exportFields"][] = "UnitQty";
$tdatacomponents[".exportFields"][] = "CompPurchaseUnitEn";
$tdatacomponents[".exportFields"][] = "Cost";
$tdatacomponents[".exportFields"][] = "PriceSell";

$tdatacomponents[".printFields"] = array();
$tdatacomponents[".printFields"][] = "ComponentNo";
$tdatacomponents[".printFields"][] = "EngName";
$tdatacomponents[".printFields"][] = "ThaiName";
$tdatacomponents[".printFields"][] = "DescriptionEng";
$tdatacomponents[".printFields"][] = "DescriptionThai";
$tdatacomponents[".printFields"][] = "CompTypeNo";
$tdatacomponents[".printFields"][] = "UnitEng";
$tdatacomponents[".printFields"][] = "UnitQty";
$tdatacomponents[".printFields"][] = "CompPurchaseUnitEn";
$tdatacomponents[".printFields"][] = "Cost";
$tdatacomponents[".printFields"][] = "PriceSell";

//	ComponentNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ComponentNo";
	$fdata["GoodName"] = "ComponentNo";
	$fdata["ownerTable"] = "components";
	$fdata["Label"] = "Component No"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ComponentNo"; 
		$fdata["FullName"] = "ComponentNo";
	
		
		
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

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacomponents["ComponentNo"] = $fdata;
//	EngName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "EngName";
	$fdata["GoodName"] = "EngName";
	$fdata["ownerTable"] = "components";
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
			$edata["EditParams"].= " maxlength=70";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacomponents["EngName"] = $fdata;
//	ThaiName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ThaiName";
	$fdata["GoodName"] = "ThaiName";
	$fdata["ownerTable"] = "components";
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
			$edata["EditParams"].= " maxlength=70";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacomponents["ThaiName"] = $fdata;
//	DescriptionEng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DescriptionEng";
	$fdata["GoodName"] = "DescriptionEng";
	$fdata["ownerTable"] = "components";
	$fdata["Label"] = "Description Eng"; 
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
	
		$fdata["strField"] = "DescriptionEng"; 
		$fdata["FullName"] = "DescriptionEng";
	
		
		
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
	
		
		
	$tdatacomponents["DescriptionEng"] = $fdata;
//	DescriptionThai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DescriptionThai";
	$fdata["GoodName"] = "DescriptionThai";
	$fdata["ownerTable"] = "components";
	$fdata["Label"] = "Description Thai"; 
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
	
		$fdata["strField"] = "DescriptionThai"; 
		$fdata["FullName"] = "DescriptionThai";
	
		
		
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
	
		
		
	$tdatacomponents["DescriptionThai"] = $fdata;
//	CompTypeNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CompTypeNo";
	$fdata["GoodName"] = "CompTypeNo";
	$fdata["ownerTable"] = "components";
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
	
		
		
	$tdatacomponents["CompTypeNo"] = $fdata;
//	UnitEng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "UnitEng";
	$fdata["GoodName"] = "UnitEng";
	$fdata["ownerTable"] = "components";
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
	
		
		
	$tdatacomponents["UnitEng"] = $fdata;
//	UnitQty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "UnitQty";
	$fdata["GoodName"] = "UnitQty";
	$fdata["ownerTable"] = "components";
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

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacomponents["UnitQty"] = $fdata;
//	CompPurchaseUnitEn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CompPurchaseUnitEn";
	$fdata["GoodName"] = "CompPurchaseUnitEn";
	$fdata["ownerTable"] = "components";
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
			$edata["EditParams"].= " maxlength=25";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacomponents["CompPurchaseUnitEn"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "components";
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

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacomponents["Cost"] = $fdata;
//	PriceSell
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "PriceSell";
	$fdata["GoodName"] = "PriceSell";
	$fdata["ownerTable"] = "components";
	$fdata["Label"] = "Price Sell"; 
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
	
		$fdata["strField"] = "PriceSell"; 
		$fdata["FullName"] = "PriceSell";
	
		
		
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
	
		
		
	$tdatacomponents["PriceSell"] = $fdata;

	
$tables_data["components"]=&$tdatacomponents;
$field_labels["components"] = &$fieldLabelscomponents;
$fieldToolTips["components"] = &$fieldToolTipscomponents;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["components"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["components"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_components()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ComponentNo,  EngName,  ThaiName,  DescriptionEng,  DescriptionThai,  CompTypeNo,  UnitEng,  UnitQty,  CompPurchaseUnitEn,  Cost,  PriceSell";
$proto0["m_strFrom"] = "FROM components";
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
	"m_strName" => "ComponentNo",
	"m_strTable" => "components"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "EngName",
	"m_strTable" => "components"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ThaiName",
	"m_strTable" => "components"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "DescriptionEng",
	"m_strTable" => "components"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "DescriptionThai",
	"m_strTable" => "components"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "CompTypeNo",
	"m_strTable" => "components"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitEng",
	"m_strTable" => "components"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitQty",
	"m_strTable" => "components"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "CompPurchaseUnitEn",
	"m_strTable" => "components"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "components"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "PriceSell",
	"m_strTable" => "components"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "components";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "ComponentNo";
$proto28["m_columns"][] = "EngName";
$proto28["m_columns"][] = "ThaiName";
$proto28["m_columns"][] = "DescriptionEng";
$proto28["m_columns"][] = "DescriptionThai";
$proto28["m_columns"][] = "CompTypeNo";
$proto28["m_columns"][] = "UnitEng";
$proto28["m_columns"][] = "UnitQty";
$proto28["m_columns"][] = "CompPurchaseUnitEn";
$proto28["m_columns"][] = "Cost";
$proto28["m_columns"][] = "PriceSell";
$proto28["m_columns"][] = "Source";
$proto28["m_columns"][] = "Density";
$proto28["m_columns"][] = "SortOrder";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_alias"] = "";
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = "0";
$proto29["m_inBrackets"] = "0";
$proto29["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_components = createSqlQuery_components();
											$tdatacomponents[".sqlquery"] = $queryData_components;
	
if(isset($tdatacomponents["field2"])){
	$tdatacomponents["field2"]["LookupTable"] = "carscars_view";
	$tdatacomponents["field2"]["LookupOrderBy"] = "name";
	$tdatacomponents["field2"]["LookupType"] = 4;
	$tdatacomponents["field2"]["LinkField"] = "email";
	$tdatacomponents["field2"]["DisplayField"] = "name";
	$tdatacomponents[".hasCustomViewField"] = true;
}

$tableEvents["components"] = new eventsBase;
$tdatacomponents[".hasEvents"] = false;

$cipherer = new RunnerCipherer("components");

?>
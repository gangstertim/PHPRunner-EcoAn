<?php
require_once(getabspath("classes/cipherer.php"));
$tdatacomponenthistory = array();
	$tdatacomponenthistory[".NumberOfChars"] = 80; 
	$tdatacomponenthistory[".ShortName"] = "componenthistory";
	$tdatacomponenthistory[".OwnerID"] = "";
	$tdatacomponenthistory[".OriginalTable"] = "componenthistory";

//	field labels
$fieldLabelscomponenthistory = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscomponenthistory["English"] = array();
	$fieldToolTipscomponenthistory["English"] = array();
	$fieldLabelscomponenthistory["English"]["ComponentNo"] = "Component No";
	$fieldToolTipscomponenthistory["English"]["ComponentNo"] = "";
	$fieldLabelscomponenthistory["English"]["EngName"] = "Eng Name";
	$fieldToolTipscomponenthistory["English"]["EngName"] = "";
	$fieldLabelscomponenthistory["English"]["ThaiName"] = "Thai Name";
	$fieldToolTipscomponenthistory["English"]["ThaiName"] = "";
	$fieldLabelscomponenthistory["English"]["DescriptionEng"] = "Description Eng";
	$fieldToolTipscomponenthistory["English"]["DescriptionEng"] = "";
	$fieldLabelscomponenthistory["English"]["DescriptionThai"] = "Description Thai";
	$fieldToolTipscomponenthistory["English"]["DescriptionThai"] = "";
	$fieldLabelscomponenthistory["English"]["CompTypeNo"] = "Comp Type No";
	$fieldToolTipscomponenthistory["English"]["CompTypeNo"] = "";
	$fieldLabelscomponenthistory["English"]["UnitEng"] = "Unit Eng";
	$fieldToolTipscomponenthistory["English"]["UnitEng"] = "";
	$fieldLabelscomponenthistory["English"]["UnitQty"] = "Unit Qty";
	$fieldToolTipscomponenthistory["English"]["UnitQty"] = "";
	$fieldLabelscomponenthistory["English"]["CompPurchaseUnitEn"] = "Comp Purchase Unit En";
	$fieldToolTipscomponenthistory["English"]["CompPurchaseUnitEn"] = "";
	$fieldLabelscomponenthistory["English"]["Cost"] = "Cost";
	$fieldToolTipscomponenthistory["English"]["Cost"] = "";
	$fieldLabelscomponenthistory["English"]["Density"] = "Density";
	$fieldToolTipscomponenthistory["English"]["Density"] = "";
	$fieldLabelscomponenthistory["English"]["Source"] = "Source";
	$fieldToolTipscomponenthistory["English"]["Source"] = "";
	$fieldLabelscomponenthistory["English"]["SortOrder"] = "Sort Order";
	$fieldToolTipscomponenthistory["English"]["SortOrder"] = "";
	$fieldLabelscomponenthistory["English"]["ChangeType"] = "Change Type";
	$fieldToolTipscomponenthistory["English"]["ChangeType"] = "";
	$fieldLabelscomponenthistory["English"]["ChangeDate"] = "Change Date";
	$fieldToolTipscomponenthistory["English"]["ChangeDate"] = "";
	$fieldLabelscomponenthistory["English"]["ChangeTime"] = "Change Time";
	$fieldToolTipscomponenthistory["English"]["ChangeTime"] = "";
	$fieldLabelscomponenthistory["English"]["SorOrder"] = "Sor Order";
	$fieldToolTipscomponenthistory["English"]["SorOrder"] = "";
	if (count($fieldToolTipscomponenthistory["English"]))
		$tdatacomponenthistory[".isUseToolTips"] = true;
}
	
	
	$tdatacomponenthistory[".NCSearch"] = true;



$tdatacomponenthistory[".shortTableName"] = "componenthistory";
$tdatacomponenthistory[".nSecOptions"] = 0;
$tdatacomponenthistory[".recsPerRowList"] = 1;
$tdatacomponenthistory[".mainTableOwnerID"] = "";
$tdatacomponenthistory[".moveNext"] = 1;
$tdatacomponenthistory[".nType"] = 0;

$tdatacomponenthistory[".strOriginalTableName"] = "componenthistory";




$tdatacomponenthistory[".showAddInPopup"] = false;

$tdatacomponenthistory[".showEditInPopup"] = false;

$tdatacomponenthistory[".showViewInPopup"] = false;

$tdatacomponenthistory[".fieldsForRegister"] = array();

$tdatacomponenthistory[".listAjax"] = false;

	$tdatacomponenthistory[".audit"] = false;

	$tdatacomponenthistory[".locking"] = false;

$tdatacomponenthistory[".listIcons"] = true;

$tdatacomponenthistory[".exportTo"] = true;

$tdatacomponenthistory[".printFriendly"] = true;


$tdatacomponenthistory[".showSimpleSearchOptions"] = false;

$tdatacomponenthistory[".showSearchPanel"] = true;

if (isMobile())
	$tdatacomponenthistory[".isUseAjaxSuggest"] = false;
else 
	$tdatacomponenthistory[".isUseAjaxSuggest"] = true;

$tdatacomponenthistory[".rowHighlite"] = true;

// button handlers file names

$tdatacomponenthistory[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacomponenthistory[".isUseTimeForSearch"] = false;




$tdatacomponenthistory[".allSearchFields"] = array();

$tdatacomponenthistory[".allSearchFields"][] = "ComponentNo";
$tdatacomponenthistory[".allSearchFields"][] = "EngName";
$tdatacomponenthistory[".allSearchFields"][] = "ThaiName";
$tdatacomponenthistory[".allSearchFields"][] = "DescriptionEng";
$tdatacomponenthistory[".allSearchFields"][] = "DescriptionThai";
$tdatacomponenthistory[".allSearchFields"][] = "CompTypeNo";
$tdatacomponenthistory[".allSearchFields"][] = "UnitEng";
$tdatacomponenthistory[".allSearchFields"][] = "UnitQty";
$tdatacomponenthistory[".allSearchFields"][] = "CompPurchaseUnitEn";
$tdatacomponenthistory[".allSearchFields"][] = "Cost";
$tdatacomponenthistory[".allSearchFields"][] = "Density";
$tdatacomponenthistory[".allSearchFields"][] = "Source";
$tdatacomponenthistory[".allSearchFields"][] = "SortOrder";
$tdatacomponenthistory[".allSearchFields"][] = "ChangeType";
$tdatacomponenthistory[".allSearchFields"][] = "ChangeDate";
$tdatacomponenthistory[".allSearchFields"][] = "ChangeTime";
$tdatacomponenthistory[".allSearchFields"][] = "SorOrder";

$tdatacomponenthistory[".googleLikeFields"][] = "ComponentNo";
$tdatacomponenthistory[".googleLikeFields"][] = "EngName";
$tdatacomponenthistory[".googleLikeFields"][] = "ThaiName";
$tdatacomponenthistory[".googleLikeFields"][] = "DescriptionEng";
$tdatacomponenthistory[".googleLikeFields"][] = "DescriptionThai";
$tdatacomponenthistory[".googleLikeFields"][] = "CompTypeNo";
$tdatacomponenthistory[".googleLikeFields"][] = "UnitEng";
$tdatacomponenthistory[".googleLikeFields"][] = "UnitQty";
$tdatacomponenthistory[".googleLikeFields"][] = "CompPurchaseUnitEn";
$tdatacomponenthistory[".googleLikeFields"][] = "Cost";
$tdatacomponenthistory[".googleLikeFields"][] = "Density";
$tdatacomponenthistory[".googleLikeFields"][] = "Source";
$tdatacomponenthistory[".googleLikeFields"][] = "SortOrder";
$tdatacomponenthistory[".googleLikeFields"][] = "ChangeType";
$tdatacomponenthistory[".googleLikeFields"][] = "ChangeDate";
$tdatacomponenthistory[".googleLikeFields"][] = "ChangeTime";
$tdatacomponenthistory[".googleLikeFields"][] = "SorOrder";


$tdatacomponenthistory[".advSearchFields"][] = "ComponentNo";
$tdatacomponenthistory[".advSearchFields"][] = "EngName";
$tdatacomponenthistory[".advSearchFields"][] = "ThaiName";
$tdatacomponenthistory[".advSearchFields"][] = "DescriptionEng";
$tdatacomponenthistory[".advSearchFields"][] = "DescriptionThai";
$tdatacomponenthistory[".advSearchFields"][] = "CompTypeNo";
$tdatacomponenthistory[".advSearchFields"][] = "UnitEng";
$tdatacomponenthistory[".advSearchFields"][] = "UnitQty";
$tdatacomponenthistory[".advSearchFields"][] = "CompPurchaseUnitEn";
$tdatacomponenthistory[".advSearchFields"][] = "Cost";
$tdatacomponenthistory[".advSearchFields"][] = "Density";
$tdatacomponenthistory[".advSearchFields"][] = "Source";
$tdatacomponenthistory[".advSearchFields"][] = "SortOrder";
$tdatacomponenthistory[".advSearchFields"][] = "ChangeType";
$tdatacomponenthistory[".advSearchFields"][] = "ChangeDate";
$tdatacomponenthistory[".advSearchFields"][] = "ChangeTime";
$tdatacomponenthistory[".advSearchFields"][] = "SorOrder";

$tdatacomponenthistory[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatacomponenthistory[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacomponenthistory[".strOrderBy"] = $tstrOrderBy;

$tdatacomponenthistory[".orderindexes"] = array();

$tdatacomponenthistory[".sqlHead"] = "SELECT ComponentNo,   EngName,   ThaiName,   DescriptionEng,   DescriptionThai,   CompTypeNo,   UnitEng,   UnitQty,   CompPurchaseUnitEn,   Cost,   Density,   Source,   SortOrder,   ChangeType,   ChangeDate,   ChangeTime,   SorOrder";
$tdatacomponenthistory[".sqlFrom"] = "FROM componenthistory";
$tdatacomponenthistory[".sqlWhereExpr"] = "";
$tdatacomponenthistory[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacomponenthistory[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacomponenthistory[".arrGroupsPerPage"] = $arrGPP;

$tableKeyscomponenthistory = array();
$tdatacomponenthistory[".Keys"] = $tableKeyscomponenthistory;

$tdatacomponenthistory[".listFields"] = array();
$tdatacomponenthistory[".listFields"][] = "ComponentNo";
$tdatacomponenthistory[".listFields"][] = "EngName";
$tdatacomponenthistory[".listFields"][] = "ThaiName";
$tdatacomponenthistory[".listFields"][] = "DescriptionEng";
$tdatacomponenthistory[".listFields"][] = "DescriptionThai";
$tdatacomponenthistory[".listFields"][] = "CompTypeNo";
$tdatacomponenthistory[".listFields"][] = "UnitEng";
$tdatacomponenthistory[".listFields"][] = "UnitQty";
$tdatacomponenthistory[".listFields"][] = "CompPurchaseUnitEn";
$tdatacomponenthistory[".listFields"][] = "Cost";
$tdatacomponenthistory[".listFields"][] = "Density";
$tdatacomponenthistory[".listFields"][] = "Source";
$tdatacomponenthistory[".listFields"][] = "SortOrder";
$tdatacomponenthistory[".listFields"][] = "ChangeType";
$tdatacomponenthistory[".listFields"][] = "ChangeDate";
$tdatacomponenthistory[".listFields"][] = "ChangeTime";
$tdatacomponenthistory[".listFields"][] = "SorOrder";

$tdatacomponenthistory[".viewFields"] = array();
$tdatacomponenthistory[".viewFields"][] = "ComponentNo";
$tdatacomponenthistory[".viewFields"][] = "EngName";
$tdatacomponenthistory[".viewFields"][] = "ThaiName";
$tdatacomponenthistory[".viewFields"][] = "DescriptionEng";
$tdatacomponenthistory[".viewFields"][] = "DescriptionThai";
$tdatacomponenthistory[".viewFields"][] = "CompTypeNo";
$tdatacomponenthistory[".viewFields"][] = "UnitEng";
$tdatacomponenthistory[".viewFields"][] = "UnitQty";
$tdatacomponenthistory[".viewFields"][] = "CompPurchaseUnitEn";
$tdatacomponenthistory[".viewFields"][] = "Cost";
$tdatacomponenthistory[".viewFields"][] = "Density";
$tdatacomponenthistory[".viewFields"][] = "Source";
$tdatacomponenthistory[".viewFields"][] = "SortOrder";
$tdatacomponenthistory[".viewFields"][] = "ChangeType";
$tdatacomponenthistory[".viewFields"][] = "ChangeDate";
$tdatacomponenthistory[".viewFields"][] = "ChangeTime";
$tdatacomponenthistory[".viewFields"][] = "SorOrder";

$tdatacomponenthistory[".addFields"] = array();
$tdatacomponenthistory[".addFields"][] = "ComponentNo";
$tdatacomponenthistory[".addFields"][] = "EngName";
$tdatacomponenthistory[".addFields"][] = "ThaiName";
$tdatacomponenthistory[".addFields"][] = "DescriptionEng";
$tdatacomponenthistory[".addFields"][] = "DescriptionThai";
$tdatacomponenthistory[".addFields"][] = "CompTypeNo";
$tdatacomponenthistory[".addFields"][] = "UnitEng";
$tdatacomponenthistory[".addFields"][] = "UnitQty";
$tdatacomponenthistory[".addFields"][] = "CompPurchaseUnitEn";
$tdatacomponenthistory[".addFields"][] = "Cost";
$tdatacomponenthistory[".addFields"][] = "Density";
$tdatacomponenthistory[".addFields"][] = "Source";
$tdatacomponenthistory[".addFields"][] = "SortOrder";
$tdatacomponenthistory[".addFields"][] = "ChangeType";
$tdatacomponenthistory[".addFields"][] = "ChangeDate";
$tdatacomponenthistory[".addFields"][] = "ChangeTime";
$tdatacomponenthistory[".addFields"][] = "SorOrder";

$tdatacomponenthistory[".inlineAddFields"] = array();
$tdatacomponenthistory[".inlineAddFields"][] = "ComponentNo";
$tdatacomponenthistory[".inlineAddFields"][] = "EngName";
$tdatacomponenthistory[".inlineAddFields"][] = "ThaiName";
$tdatacomponenthistory[".inlineAddFields"][] = "DescriptionEng";
$tdatacomponenthistory[".inlineAddFields"][] = "DescriptionThai";
$tdatacomponenthistory[".inlineAddFields"][] = "CompTypeNo";
$tdatacomponenthistory[".inlineAddFields"][] = "UnitEng";
$tdatacomponenthistory[".inlineAddFields"][] = "UnitQty";
$tdatacomponenthistory[".inlineAddFields"][] = "CompPurchaseUnitEn";
$tdatacomponenthistory[".inlineAddFields"][] = "Cost";
$tdatacomponenthistory[".inlineAddFields"][] = "Density";
$tdatacomponenthistory[".inlineAddFields"][] = "Source";
$tdatacomponenthistory[".inlineAddFields"][] = "SortOrder";
$tdatacomponenthistory[".inlineAddFields"][] = "ChangeType";
$tdatacomponenthistory[".inlineAddFields"][] = "ChangeDate";
$tdatacomponenthistory[".inlineAddFields"][] = "ChangeTime";
$tdatacomponenthistory[".inlineAddFields"][] = "SorOrder";

$tdatacomponenthistory[".editFields"] = array();
$tdatacomponenthistory[".editFields"][] = "ComponentNo";
$tdatacomponenthistory[".editFields"][] = "EngName";
$tdatacomponenthistory[".editFields"][] = "ThaiName";
$tdatacomponenthistory[".editFields"][] = "DescriptionEng";
$tdatacomponenthistory[".editFields"][] = "DescriptionThai";
$tdatacomponenthistory[".editFields"][] = "CompTypeNo";
$tdatacomponenthistory[".editFields"][] = "UnitEng";
$tdatacomponenthistory[".editFields"][] = "UnitQty";
$tdatacomponenthistory[".editFields"][] = "CompPurchaseUnitEn";
$tdatacomponenthistory[".editFields"][] = "Cost";
$tdatacomponenthistory[".editFields"][] = "Density";
$tdatacomponenthistory[".editFields"][] = "Source";
$tdatacomponenthistory[".editFields"][] = "SortOrder";
$tdatacomponenthistory[".editFields"][] = "ChangeType";
$tdatacomponenthistory[".editFields"][] = "ChangeDate";
$tdatacomponenthistory[".editFields"][] = "ChangeTime";
$tdatacomponenthistory[".editFields"][] = "SorOrder";

$tdatacomponenthistory[".inlineEditFields"] = array();
$tdatacomponenthistory[".inlineEditFields"][] = "ComponentNo";
$tdatacomponenthistory[".inlineEditFields"][] = "EngName";
$tdatacomponenthistory[".inlineEditFields"][] = "ThaiName";
$tdatacomponenthistory[".inlineEditFields"][] = "DescriptionEng";
$tdatacomponenthistory[".inlineEditFields"][] = "DescriptionThai";
$tdatacomponenthistory[".inlineEditFields"][] = "CompTypeNo";
$tdatacomponenthistory[".inlineEditFields"][] = "UnitEng";
$tdatacomponenthistory[".inlineEditFields"][] = "UnitQty";
$tdatacomponenthistory[".inlineEditFields"][] = "CompPurchaseUnitEn";
$tdatacomponenthistory[".inlineEditFields"][] = "Cost";
$tdatacomponenthistory[".inlineEditFields"][] = "Density";
$tdatacomponenthistory[".inlineEditFields"][] = "Source";
$tdatacomponenthistory[".inlineEditFields"][] = "SortOrder";
$tdatacomponenthistory[".inlineEditFields"][] = "ChangeType";
$tdatacomponenthistory[".inlineEditFields"][] = "ChangeDate";
$tdatacomponenthistory[".inlineEditFields"][] = "ChangeTime";
$tdatacomponenthistory[".inlineEditFields"][] = "SorOrder";

$tdatacomponenthistory[".exportFields"] = array();
$tdatacomponenthistory[".exportFields"][] = "ComponentNo";
$tdatacomponenthistory[".exportFields"][] = "EngName";
$tdatacomponenthistory[".exportFields"][] = "ThaiName";
$tdatacomponenthistory[".exportFields"][] = "DescriptionEng";
$tdatacomponenthistory[".exportFields"][] = "DescriptionThai";
$tdatacomponenthistory[".exportFields"][] = "CompTypeNo";
$tdatacomponenthistory[".exportFields"][] = "UnitEng";
$tdatacomponenthistory[".exportFields"][] = "UnitQty";
$tdatacomponenthistory[".exportFields"][] = "CompPurchaseUnitEn";
$tdatacomponenthistory[".exportFields"][] = "Cost";
$tdatacomponenthistory[".exportFields"][] = "Density";
$tdatacomponenthistory[".exportFields"][] = "Source";
$tdatacomponenthistory[".exportFields"][] = "SortOrder";
$tdatacomponenthistory[".exportFields"][] = "ChangeType";
$tdatacomponenthistory[".exportFields"][] = "ChangeDate";
$tdatacomponenthistory[".exportFields"][] = "ChangeTime";
$tdatacomponenthistory[".exportFields"][] = "SorOrder";

$tdatacomponenthistory[".printFields"] = array();
$tdatacomponenthistory[".printFields"][] = "ComponentNo";
$tdatacomponenthistory[".printFields"][] = "EngName";
$tdatacomponenthistory[".printFields"][] = "ThaiName";
$tdatacomponenthistory[".printFields"][] = "DescriptionEng";
$tdatacomponenthistory[".printFields"][] = "DescriptionThai";
$tdatacomponenthistory[".printFields"][] = "CompTypeNo";
$tdatacomponenthistory[".printFields"][] = "UnitEng";
$tdatacomponenthistory[".printFields"][] = "UnitQty";
$tdatacomponenthistory[".printFields"][] = "CompPurchaseUnitEn";
$tdatacomponenthistory[".printFields"][] = "Cost";
$tdatacomponenthistory[".printFields"][] = "Density";
$tdatacomponenthistory[".printFields"][] = "Source";
$tdatacomponenthistory[".printFields"][] = "SortOrder";
$tdatacomponenthistory[".printFields"][] = "ChangeType";
$tdatacomponenthistory[".printFields"][] = "ChangeDate";
$tdatacomponenthistory[".printFields"][] = "ChangeTime";
$tdatacomponenthistory[".printFields"][] = "SorOrder";

//	ComponentNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ComponentNo";
	$fdata["GoodName"] = "ComponentNo";
	$fdata["ownerTable"] = "componenthistory";
	$fdata["Label"] = "Component No"; 
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
	
		
		
	$tdatacomponenthistory["ComponentNo"] = $fdata;
//	EngName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "EngName";
	$fdata["GoodName"] = "EngName";
	$fdata["ownerTable"] = "componenthistory";
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
	
		
		
	$tdatacomponenthistory["EngName"] = $fdata;
//	ThaiName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ThaiName";
	$fdata["GoodName"] = "ThaiName";
	$fdata["ownerTable"] = "componenthistory";
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
	
		
		
	$tdatacomponenthistory["ThaiName"] = $fdata;
//	DescriptionEng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DescriptionEng";
	$fdata["GoodName"] = "DescriptionEng";
	$fdata["ownerTable"] = "componenthistory";
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
	
		
		
	$tdatacomponenthistory["DescriptionEng"] = $fdata;
//	DescriptionThai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DescriptionThai";
	$fdata["GoodName"] = "DescriptionThai";
	$fdata["ownerTable"] = "componenthistory";
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
	
		
		
	$tdatacomponenthistory["DescriptionThai"] = $fdata;
//	CompTypeNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CompTypeNo";
	$fdata["GoodName"] = "CompTypeNo";
	$fdata["ownerTable"] = "componenthistory";
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
	
		
		
	$tdatacomponenthistory["CompTypeNo"] = $fdata;
//	UnitEng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "UnitEng";
	$fdata["GoodName"] = "UnitEng";
	$fdata["ownerTable"] = "componenthistory";
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
	
		
		
	$tdatacomponenthistory["UnitEng"] = $fdata;
//	UnitQty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "UnitQty";
	$fdata["GoodName"] = "UnitQty";
	$fdata["ownerTable"] = "componenthistory";
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
	
		
		
	$tdatacomponenthistory["UnitQty"] = $fdata;
//	CompPurchaseUnitEn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CompPurchaseUnitEn";
	$fdata["GoodName"] = "CompPurchaseUnitEn";
	$fdata["ownerTable"] = "componenthistory";
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
	
		
		
	$tdatacomponenthistory["CompPurchaseUnitEn"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "componenthistory";
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
	
		
		
	$tdatacomponenthistory["Cost"] = $fdata;
//	Density
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Density";
	$fdata["GoodName"] = "Density";
	$fdata["ownerTable"] = "componenthistory";
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
	
		
		
	$tdatacomponenthistory["Density"] = $fdata;
//	Source
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Source";
	$fdata["GoodName"] = "Source";
	$fdata["ownerTable"] = "componenthistory";
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
	
		
		
	$tdatacomponenthistory["Source"] = $fdata;
//	SortOrder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "SortOrder";
	$fdata["GoodName"] = "SortOrder";
	$fdata["ownerTable"] = "componenthistory";
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
	
		
		
	$tdatacomponenthistory["SortOrder"] = $fdata;
//	ChangeType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ChangeType";
	$fdata["GoodName"] = "ChangeType";
	$fdata["ownerTable"] = "componenthistory";
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
	
		
		
	$tdatacomponenthistory["ChangeType"] = $fdata;
//	ChangeDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "ChangeDate";
	$fdata["GoodName"] = "ChangeDate";
	$fdata["ownerTable"] = "componenthistory";
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
	
		
		
	$tdatacomponenthistory["ChangeDate"] = $fdata;
//	ChangeTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "ChangeTime";
	$fdata["GoodName"] = "ChangeTime";
	$fdata["ownerTable"] = "componenthistory";
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
	
		
		
	$tdatacomponenthistory["ChangeTime"] = $fdata;
//	SorOrder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "SorOrder";
	$fdata["GoodName"] = "SorOrder";
	$fdata["ownerTable"] = "componenthistory";
	$fdata["Label"] = "Sor Order"; 
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
	
		$fdata["strField"] = "SorOrder"; 
		$fdata["FullName"] = "SorOrder";
	
		
		
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
	
		
		
	$tdatacomponenthistory["SorOrder"] = $fdata;

	
$tables_data["componenthistory"]=&$tdatacomponenthistory;
$field_labels["componenthistory"] = &$fieldLabelscomponenthistory;
$fieldToolTips["componenthistory"] = &$fieldToolTipscomponenthistory;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["componenthistory"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["componenthistory"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_componenthistory()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ComponentNo,   EngName,   ThaiName,   DescriptionEng,   DescriptionThai,   CompTypeNo,   UnitEng,   UnitQty,   CompPurchaseUnitEn,   Cost,   Density,   Source,   SortOrder,   ChangeType,   ChangeDate,   ChangeTime,   SorOrder";
$proto0["m_strFrom"] = "FROM componenthistory";
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
	"m_strTable" => "componenthistory"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "EngName",
	"m_strTable" => "componenthistory"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ThaiName",
	"m_strTable" => "componenthistory"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "DescriptionEng",
	"m_strTable" => "componenthistory"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "DescriptionThai",
	"m_strTable" => "componenthistory"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "CompTypeNo",
	"m_strTable" => "componenthistory"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitEng",
	"m_strTable" => "componenthistory"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitQty",
	"m_strTable" => "componenthistory"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "CompPurchaseUnitEn",
	"m_strTable" => "componenthistory"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "componenthistory"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Density",
	"m_strTable" => "componenthistory"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "Source",
	"m_strTable" => "componenthistory"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "SortOrder",
	"m_strTable" => "componenthistory"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "ChangeType",
	"m_strTable" => "componenthistory"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "ChangeDate",
	"m_strTable" => "componenthistory"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "ChangeTime",
	"m_strTable" => "componenthistory"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "SorOrder",
	"m_strTable" => "componenthistory"
));

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto39=array();
$proto39["m_link"] = "SQLL_MAIN";
			$proto40=array();
$proto40["m_strName"] = "componenthistory";
$proto40["m_columns"] = array();
$proto40["m_columns"][] = "ComponentNo";
$proto40["m_columns"][] = "EngName";
$proto40["m_columns"][] = "ThaiName";
$proto40["m_columns"][] = "DescriptionEng";
$proto40["m_columns"][] = "DescriptionThai";
$proto40["m_columns"][] = "CompTypeNo";
$proto40["m_columns"][] = "UnitEng";
$proto40["m_columns"][] = "UnitQty";
$proto40["m_columns"][] = "CompPurchaseUnitEn";
$proto40["m_columns"][] = "Cost";
$proto40["m_columns"][] = "Density";
$proto40["m_columns"][] = "Source";
$proto40["m_columns"][] = "SortOrder";
$proto40["m_columns"][] = "ChangeType";
$proto40["m_columns"][] = "ChangeDate";
$proto40["m_columns"][] = "ChangeTime";
$proto40["m_columns"][] = "SorOrder";
$obj = new SQLTable($proto40);

$proto39["m_table"] = $obj;
$proto39["m_alias"] = "";
$proto41=array();
$proto41["m_sql"] = "";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "";
$proto41["m_havingmode"] = "0";
$proto41["m_inBrackets"] = "0";
$proto41["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto41);

$proto39["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto39);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_componenthistory = createSqlQuery_componenthistory();
																	$tdatacomponenthistory[".sqlquery"] = $queryData_componenthistory;
	
if(isset($tdatacomponenthistory["field2"])){
	$tdatacomponenthistory["field2"]["LookupTable"] = "carscars_view";
	$tdatacomponenthistory["field2"]["LookupOrderBy"] = "name";
	$tdatacomponenthistory["field2"]["LookupType"] = 4;
	$tdatacomponenthistory["field2"]["LinkField"] = "email";
	$tdatacomponenthistory["field2"]["DisplayField"] = "name";
	$tdatacomponenthistory[".hasCustomViewField"] = true;
}

$tableEvents["componenthistory"] = new eventsBase;
$tdatacomponenthistory[".hasEvents"] = false;

$cipherer = new RunnerCipherer("componenthistory");

?>
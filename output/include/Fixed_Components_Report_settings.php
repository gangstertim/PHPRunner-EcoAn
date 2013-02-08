<?php
require_once(getabspath("classes/cipherer.php"));
$tdataFixed_Components_Report = array();
	$tdataFixed_Components_Report[".NumberOfChars"] = 80; 
	$tdataFixed_Components_Report[".ShortName"] = "Fixed_Components_Report";
	$tdataFixed_Components_Report[".OwnerID"] = "";
	$tdataFixed_Components_Report[".OriginalTable"] = "fixedcompcost";

//	field labels
$fieldLabelsFixed_Components_Report = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsFixed_Components_Report["English"] = array();
	$fieldToolTipsFixed_Components_Report["English"] = array();
	$fieldLabelsFixed_Components_Report["English"]["ProdGrpCode"] = "Prod Grp Code";
	$fieldToolTipsFixed_Components_Report["English"]["ProdGrpCode"] = "";
	$fieldLabelsFixed_Components_Report["English"]["EngName"] = "Eng Name";
	$fieldToolTipsFixed_Components_Report["English"]["EngName"] = "";
	$fieldLabelsFixed_Components_Report["English"]["ThaiName"] = "Thai Name";
	$fieldToolTipsFixed_Components_Report["English"]["ThaiName"] = "";
	$fieldLabelsFixed_Components_Report["English"]["Cost"] = "Cost";
	$fieldToolTipsFixed_Components_Report["English"]["Cost"] = "";
	$fieldLabelsFixed_Components_Report["English"]["Qty"] = "Qty";
	$fieldToolTipsFixed_Components_Report["English"]["Qty"] = "";
	$fieldLabelsFixed_Components_Report["English"]["_T2_Cost__T1_Qty__"] = "(T2.Cost *T1.Qty )";
	$fieldToolTipsFixed_Components_Report["English"]["(T2.Cost *T1.Qty )"] = "";
	$fieldLabelsFixed_Components_Report["English"]["UnitEng"] = "Unit Eng";
	$fieldToolTipsFixed_Components_Report["English"]["UnitEng"] = "";
	$fieldLabelsFixed_Components_Report["English"]["CompTypeNo"] = "Comp Type No";
	$fieldToolTipsFixed_Components_Report["English"]["CompTypeNo"] = "";
	if (count($fieldToolTipsFixed_Components_Report["English"]))
		$tdataFixed_Components_Report[".isUseToolTips"] = true;
}
	
	
	$tdataFixed_Components_Report[".NCSearch"] = true;



$tdataFixed_Components_Report[".shortTableName"] = "Fixed_Components_Report";
$tdataFixed_Components_Report[".nSecOptions"] = 0;
$tdataFixed_Components_Report[".recsPerRowList"] = 1;
$tdataFixed_Components_Report[".mainTableOwnerID"] = "";
$tdataFixed_Components_Report[".moveNext"] = 1;
$tdataFixed_Components_Report[".nType"] = 2;

$tdataFixed_Components_Report[".strOriginalTableName"] = "fixedcompcost";




$tdataFixed_Components_Report[".showAddInPopup"] = false;

$tdataFixed_Components_Report[".showEditInPopup"] = false;

$tdataFixed_Components_Report[".showViewInPopup"] = false;

$tdataFixed_Components_Report[".fieldsForRegister"] = array();

$tdataFixed_Components_Report[".listAjax"] = false;

	$tdataFixed_Components_Report[".audit"] = false;

	$tdataFixed_Components_Report[".locking"] = false;

$tdataFixed_Components_Report[".listIcons"] = true;

$tdataFixed_Components_Report[".exportTo"] = true;

$tdataFixed_Components_Report[".printFriendly"] = true;


$tdataFixed_Components_Report[".showSimpleSearchOptions"] = false;

$tdataFixed_Components_Report[".showSearchPanel"] = true;

if (isMobile())
	$tdataFixed_Components_Report[".isUseAjaxSuggest"] = false;
else 
	$tdataFixed_Components_Report[".isUseAjaxSuggest"] = true;


// button handlers file names

$tdataFixed_Components_Report[".addPageEvents"] = false;

// use timepicker for search panel
$tdataFixed_Components_Report[".isUseTimeForSearch"] = false;




$tdataFixed_Components_Report[".allSearchFields"] = array();

$tdataFixed_Components_Report[".allSearchFields"][] = "ProdGrpCode";
$tdataFixed_Components_Report[".allSearchFields"][] = "EngName";
$tdataFixed_Components_Report[".allSearchFields"][] = "ThaiName";
$tdataFixed_Components_Report[".allSearchFields"][] = "Cost";
$tdataFixed_Components_Report[".allSearchFields"][] = "Qty";
$tdataFixed_Components_Report[".allSearchFields"][] = "(T2.Cost *T1.Qty )";
$tdataFixed_Components_Report[".allSearchFields"][] = "UnitEng";
$tdataFixed_Components_Report[".allSearchFields"][] = "CompTypeNo";

$tdataFixed_Components_Report[".googleLikeFields"][] = "ProdGrpCode";
$tdataFixed_Components_Report[".googleLikeFields"][] = "EngName";
$tdataFixed_Components_Report[".googleLikeFields"][] = "ThaiName";
$tdataFixed_Components_Report[".googleLikeFields"][] = "Cost";
$tdataFixed_Components_Report[".googleLikeFields"][] = "Qty";
$tdataFixed_Components_Report[".googleLikeFields"][] = "(T2.Cost *T1.Qty )";
$tdataFixed_Components_Report[".googleLikeFields"][] = "UnitEng";
$tdataFixed_Components_Report[".googleLikeFields"][] = "CompTypeNo";


$tdataFixed_Components_Report[".advSearchFields"][] = "ProdGrpCode";
$tdataFixed_Components_Report[".advSearchFields"][] = "EngName";
$tdataFixed_Components_Report[".advSearchFields"][] = "ThaiName";
$tdataFixed_Components_Report[".advSearchFields"][] = "Cost";
$tdataFixed_Components_Report[".advSearchFields"][] = "Qty";
$tdataFixed_Components_Report[".advSearchFields"][] = "(T2.Cost *T1.Qty )";
$tdataFixed_Components_Report[".advSearchFields"][] = "UnitEng";
$tdataFixed_Components_Report[".advSearchFields"][] = "CompTypeNo";

$tdataFixed_Components_Report[".isTableType"] = "report";

	



// Access doesn't support subqueries from the same table as main




$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataFixed_Components_Report[".strOrderBy"] = $tstrOrderBy;

$tdataFixed_Components_Report[".orderindexes"] = array();

$tdataFixed_Components_Report[".sqlHead"] = "SELECT ProdGrpCode,   EngName,   ThaiName,   Cost,   Qty,   `(T2.Cost *T1.Qty )`,   UnitEng,   CompTypeNo";
$tdataFixed_Components_Report[".sqlFrom"] = "FROM fixedcompcost";
$tdataFixed_Components_Report[".sqlWhereExpr"] = "";
$tdataFixed_Components_Report[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataFixed_Components_Report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataFixed_Components_Report[".arrGroupsPerPage"] = $arrGPP;

$tableKeysFixed_Components_Report = array();
$tdataFixed_Components_Report[".Keys"] = $tableKeysFixed_Components_Report;

$tdataFixed_Components_Report[".listFields"] = array();
$tdataFixed_Components_Report[".listFields"][] = "ProdGrpCode";
$tdataFixed_Components_Report[".listFields"][] = "EngName";
$tdataFixed_Components_Report[".listFields"][] = "ThaiName";
$tdataFixed_Components_Report[".listFields"][] = "Cost";
$tdataFixed_Components_Report[".listFields"][] = "Qty";
$tdataFixed_Components_Report[".listFields"][] = "(T2.Cost *T1.Qty )";
$tdataFixed_Components_Report[".listFields"][] = "UnitEng";
$tdataFixed_Components_Report[".listFields"][] = "CompTypeNo";

$tdataFixed_Components_Report[".viewFields"] = array();
$tdataFixed_Components_Report[".viewFields"][] = "ProdGrpCode";
$tdataFixed_Components_Report[".viewFields"][] = "EngName";
$tdataFixed_Components_Report[".viewFields"][] = "ThaiName";
$tdataFixed_Components_Report[".viewFields"][] = "Cost";
$tdataFixed_Components_Report[".viewFields"][] = "Qty";
$tdataFixed_Components_Report[".viewFields"][] = "(T2.Cost *T1.Qty )";
$tdataFixed_Components_Report[".viewFields"][] = "UnitEng";
$tdataFixed_Components_Report[".viewFields"][] = "CompTypeNo";

$tdataFixed_Components_Report[".addFields"] = array();
$tdataFixed_Components_Report[".addFields"][] = "ProdGrpCode";
$tdataFixed_Components_Report[".addFields"][] = "EngName";
$tdataFixed_Components_Report[".addFields"][] = "ThaiName";
$tdataFixed_Components_Report[".addFields"][] = "Cost";
$tdataFixed_Components_Report[".addFields"][] = "Qty";
$tdataFixed_Components_Report[".addFields"][] = "(T2.Cost *T1.Qty )";
$tdataFixed_Components_Report[".addFields"][] = "UnitEng";
$tdataFixed_Components_Report[".addFields"][] = "CompTypeNo";

$tdataFixed_Components_Report[".inlineAddFields"] = array();
$tdataFixed_Components_Report[".inlineAddFields"][] = "ProdGrpCode";
$tdataFixed_Components_Report[".inlineAddFields"][] = "EngName";
$tdataFixed_Components_Report[".inlineAddFields"][] = "ThaiName";
$tdataFixed_Components_Report[".inlineAddFields"][] = "Cost";
$tdataFixed_Components_Report[".inlineAddFields"][] = "Qty";
$tdataFixed_Components_Report[".inlineAddFields"][] = "(T2.Cost *T1.Qty )";
$tdataFixed_Components_Report[".inlineAddFields"][] = "UnitEng";
$tdataFixed_Components_Report[".inlineAddFields"][] = "CompTypeNo";

$tdataFixed_Components_Report[".editFields"] = array();
$tdataFixed_Components_Report[".editFields"][] = "ProdGrpCode";
$tdataFixed_Components_Report[".editFields"][] = "EngName";
$tdataFixed_Components_Report[".editFields"][] = "ThaiName";
$tdataFixed_Components_Report[".editFields"][] = "Cost";
$tdataFixed_Components_Report[".editFields"][] = "Qty";
$tdataFixed_Components_Report[".editFields"][] = "(T2.Cost *T1.Qty )";
$tdataFixed_Components_Report[".editFields"][] = "UnitEng";
$tdataFixed_Components_Report[".editFields"][] = "CompTypeNo";

$tdataFixed_Components_Report[".inlineEditFields"] = array();
$tdataFixed_Components_Report[".inlineEditFields"][] = "ProdGrpCode";
$tdataFixed_Components_Report[".inlineEditFields"][] = "EngName";
$tdataFixed_Components_Report[".inlineEditFields"][] = "ThaiName";
$tdataFixed_Components_Report[".inlineEditFields"][] = "Cost";
$tdataFixed_Components_Report[".inlineEditFields"][] = "Qty";
$tdataFixed_Components_Report[".inlineEditFields"][] = "(T2.Cost *T1.Qty )";
$tdataFixed_Components_Report[".inlineEditFields"][] = "UnitEng";
$tdataFixed_Components_Report[".inlineEditFields"][] = "CompTypeNo";

$tdataFixed_Components_Report[".exportFields"] = array();
$tdataFixed_Components_Report[".exportFields"][] = "ProdGrpCode";
$tdataFixed_Components_Report[".exportFields"][] = "EngName";
$tdataFixed_Components_Report[".exportFields"][] = "ThaiName";
$tdataFixed_Components_Report[".exportFields"][] = "Cost";
$tdataFixed_Components_Report[".exportFields"][] = "Qty";
$tdataFixed_Components_Report[".exportFields"][] = "(T2.Cost *T1.Qty )";
$tdataFixed_Components_Report[".exportFields"][] = "UnitEng";
$tdataFixed_Components_Report[".exportFields"][] = "CompTypeNo";

$tdataFixed_Components_Report[".printFields"] = array();
$tdataFixed_Components_Report[".printFields"][] = "ProdGrpCode";
$tdataFixed_Components_Report[".printFields"][] = "EngName";
$tdataFixed_Components_Report[".printFields"][] = "ThaiName";
$tdataFixed_Components_Report[".printFields"][] = "Cost";
$tdataFixed_Components_Report[".printFields"][] = "Qty";
$tdataFixed_Components_Report[".printFields"][] = "(T2.Cost *T1.Qty )";
$tdataFixed_Components_Report[".printFields"][] = "UnitEng";
$tdataFixed_Components_Report[".printFields"][] = "CompTypeNo";

//	ProdGrpCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ProdGrpCode";
	$fdata["GoodName"] = "ProdGrpCode";
	$fdata["ownerTable"] = "fixedcompcost";
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
	
		
		
	$tdataFixed_Components_Report["ProdGrpCode"] = $fdata;
//	EngName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "EngName";
	$fdata["GoodName"] = "EngName";
	$fdata["ownerTable"] = "fixedcompcost";
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
	
		
		
	$tdataFixed_Components_Report["EngName"] = $fdata;
//	ThaiName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ThaiName";
	$fdata["GoodName"] = "ThaiName";
	$fdata["ownerTable"] = "fixedcompcost";
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
	
		
		
	$tdataFixed_Components_Report["ThaiName"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Cost";
	$fdata["GoodName"] = "Cost";
	$fdata["ownerTable"] = "fixedcompcost";
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
	
		
		
	$tdataFixed_Components_Report["Cost"] = $fdata;
//	Qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Qty";
	$fdata["GoodName"] = "Qty";
	$fdata["ownerTable"] = "fixedcompcost";
	$fdata["Label"] = "Qty"; 
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
	
		$fdata["strField"] = "Qty"; 
		$fdata["FullName"] = "Qty";
	
		
		
				
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
	
		
		
	$tdataFixed_Components_Report["Qty"] = $fdata;
//	(T2.Cost *T1.Qty )
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "(T2.Cost *T1.Qty )";
	$fdata["GoodName"] = "_T2_Cost__T1_Qty__";
	$fdata["ownerTable"] = "fixedcompcost";
	$fdata["Label"] = "(T2.Cost *T1.Qty )"; 
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
	
		$fdata["strField"] = "(T2.Cost *T1.Qty )"; 
		$fdata["FullName"] = "`(T2.Cost *T1.Qty )`";
	
		
		
				
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
	
		
		
	$tdataFixed_Components_Report["(T2.Cost *T1.Qty )"] = $fdata;
//	UnitEng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "UnitEng";
	$fdata["GoodName"] = "UnitEng";
	$fdata["ownerTable"] = "fixedcompcost";
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
	
		
		
	$tdataFixed_Components_Report["UnitEng"] = $fdata;
//	CompTypeNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CompTypeNo";
	$fdata["GoodName"] = "CompTypeNo";
	$fdata["ownerTable"] = "fixedcompcost";
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
	
		
		
	$tdataFixed_Components_Report["CompTypeNo"] = $fdata;

	
$tables_data["Fixed Components Report"]=&$tdataFixed_Components_Report;
$field_labels["Fixed_Components_Report"] = &$fieldLabelsFixed_Components_Report;
$fieldToolTips["Fixed Components Report"] = &$fieldToolTipsFixed_Components_Report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Fixed Components Report"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Fixed Components Report"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Fixed_Components_Report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ProdGrpCode,   EngName,   ThaiName,   Cost,   Qty,   `(T2.Cost *T1.Qty )`,   UnitEng,   CompTypeNo";
$proto0["m_strFrom"] = "FROM fixedcompcost";
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
	"m_strTable" => "fixedcompcost"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "EngName",
	"m_strTable" => "fixedcompcost"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ThaiName",
	"m_strTable" => "fixedcompcost"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "fixedcompcost"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Qty",
	"m_strTable" => "fixedcompcost"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "(T2.Cost *T1.Qty )",
	"m_strTable" => "fixedcompcost"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitEng",
	"m_strTable" => "fixedcompcost"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "CompTypeNo",
	"m_strTable" => "fixedcompcost"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "fixedcompcost";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "ProdGrpCode";
$proto22["m_columns"][] = "EngName";
$proto22["m_columns"][] = "ThaiName";
$proto22["m_columns"][] = "Cost";
$proto22["m_columns"][] = "Qty";
$proto22["m_columns"][] = "(T2.Cost *T1.Qty )";
$proto22["m_columns"][] = "UnitEng";
$proto22["m_columns"][] = "CompTypeNo";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_alias"] = "";
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = "0";
$proto23["m_inBrackets"] = "0";
$proto23["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Fixed_Components_Report = createSqlQuery_Fixed_Components_Report();
								$tdataFixed_Components_Report[".sqlquery"] = $queryData_Fixed_Components_Report;
	
if(isset($tdataFixed_Components_Report["field2"])){
	$tdataFixed_Components_Report["field2"]["LookupTable"] = "carscars_view";
	$tdataFixed_Components_Report["field2"]["LookupOrderBy"] = "name";
	$tdataFixed_Components_Report["field2"]["LookupType"] = 4;
	$tdataFixed_Components_Report["field2"]["LinkField"] = "email";
	$tdataFixed_Components_Report["field2"]["DisplayField"] = "name";
	$tdataFixed_Components_Report[".hasCustomViewField"] = true;
}

$tableEvents["Fixed Components Report"] = new eventsBase;
$tdataFixed_Components_Report[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Fixed Components Report");

?>
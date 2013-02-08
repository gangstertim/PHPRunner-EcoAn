<?php
require_once(getabspath("classes/cipherer.php"));
$tdatacostmodel = array();
	$tdatacostmodel[".NumberOfChars"] = 80; 
	$tdatacostmodel[".ShortName"] = "costmodel";
	$tdatacostmodel[".OwnerID"] = "";
	$tdatacostmodel[".OriginalTable"] = "costmodel";

//	field labels
$fieldLabelscostmodel = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscostmodel["English"] = array();
	$fieldToolTipscostmodel["English"] = array();
	$fieldLabelscostmodel["English"]["ProdGrpCode"] = "Prod Grp Code";
	$fieldToolTipscostmodel["English"]["ProdGrpCode"] = "";
	$fieldLabelscostmodel["English"]["Interest"] = "Interest";
	$fieldToolTipscostmodel["English"]["Interest"] = "";
	$fieldLabelscostmodel["English"]["Period"] = "Period";
	$fieldToolTipscostmodel["English"]["Period"] = "";
	$fieldLabelscostmodel["English"]["DownPay"] = "Down Pay";
	$fieldToolTipscostmodel["English"]["DownPay"] = "";
	$fieldLabelscostmodel["English"]["DaysWorked"] = "Days Worked";
	$fieldToolTipscostmodel["English"]["DaysWorked"] = "";
	$fieldLabelscostmodel["English"]["Qty"] = "Qty";
	$fieldToolTipscostmodel["English"]["Qty"] = "";
	$fieldLabelscostmodel["English"]["MonthsOfCap"] = "Months Of Cap";
	$fieldToolTipscostmodel["English"]["MonthsOfCap"] = "";
	$fieldLabelscostmodel["English"]["Waste"] = "Waste";
	$fieldToolTipscostmodel["English"]["Waste"] = "";
	$fieldLabelscostmodel["English"]["Maint"] = "Maint";
	$fieldToolTipscostmodel["English"]["Maint"] = "";
	$fieldLabelscostmodel["English"]["Admin"] = "Admin";
	$fieldToolTipscostmodel["English"]["Admin"] = "";
	$fieldLabelscostmodel["English"]["Mgr"] = "Mgr";
	$fieldToolTipscostmodel["English"]["Mgr"] = "";
	$fieldLabelscostmodel["English"]["Clerk"] = "Clerk";
	$fieldToolTipscostmodel["English"]["Clerk"] = "";
	$fieldLabelscostmodel["English"]["Notes"] = "Notes";
	$fieldToolTipscostmodel["English"]["Notes"] = "";
	if (count($fieldToolTipscostmodel["English"]))
		$tdatacostmodel[".isUseToolTips"] = true;
}
	
	
	$tdatacostmodel[".NCSearch"] = true;



$tdatacostmodel[".shortTableName"] = "costmodel";
$tdatacostmodel[".nSecOptions"] = 0;
$tdatacostmodel[".recsPerRowList"] = 1;
$tdatacostmodel[".mainTableOwnerID"] = "";
$tdatacostmodel[".moveNext"] = 1;
$tdatacostmodel[".nType"] = 0;

$tdatacostmodel[".strOriginalTableName"] = "costmodel";




$tdatacostmodel[".showAddInPopup"] = false;

$tdatacostmodel[".showEditInPopup"] = false;

$tdatacostmodel[".showViewInPopup"] = false;

$tdatacostmodel[".fieldsForRegister"] = array();

$tdatacostmodel[".listAjax"] = false;

	$tdatacostmodel[".audit"] = false;

	$tdatacostmodel[".locking"] = false;

$tdatacostmodel[".listIcons"] = true;
$tdatacostmodel[".edit"] = true;
$tdatacostmodel[".inlineEdit"] = true;
$tdatacostmodel[".inlineAdd"] = true;
$tdatacostmodel[".view"] = true;

$tdatacostmodel[".exportTo"] = true;

$tdatacostmodel[".printFriendly"] = true;

$tdatacostmodel[".delete"] = true;

$tdatacostmodel[".showSimpleSearchOptions"] = false;

$tdatacostmodel[".showSearchPanel"] = true;

if (isMobile())
	$tdatacostmodel[".isUseAjaxSuggest"] = false;
else 
	$tdatacostmodel[".isUseAjaxSuggest"] = true;

$tdatacostmodel[".rowHighlite"] = true;

// button handlers file names

$tdatacostmodel[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacostmodel[".isUseTimeForSearch"] = false;




$tdatacostmodel[".allSearchFields"] = array();

$tdatacostmodel[".allSearchFields"][] = "ProdGrpCode";
$tdatacostmodel[".allSearchFields"][] = "Interest";
$tdatacostmodel[".allSearchFields"][] = "Period";
$tdatacostmodel[".allSearchFields"][] = "DownPay";
$tdatacostmodel[".allSearchFields"][] = "DaysWorked";
$tdatacostmodel[".allSearchFields"][] = "Qty";
$tdatacostmodel[".allSearchFields"][] = "MonthsOfCap";
$tdatacostmodel[".allSearchFields"][] = "Waste";
$tdatacostmodel[".allSearchFields"][] = "Maint";
$tdatacostmodel[".allSearchFields"][] = "Admin";
$tdatacostmodel[".allSearchFields"][] = "Mgr";
$tdatacostmodel[".allSearchFields"][] = "Clerk";
$tdatacostmodel[".allSearchFields"][] = "Notes";

$tdatacostmodel[".googleLikeFields"][] = "ProdGrpCode";
$tdatacostmodel[".googleLikeFields"][] = "Interest";
$tdatacostmodel[".googleLikeFields"][] = "Period";
$tdatacostmodel[".googleLikeFields"][] = "DownPay";
$tdatacostmodel[".googleLikeFields"][] = "DaysWorked";
$tdatacostmodel[".googleLikeFields"][] = "Qty";
$tdatacostmodel[".googleLikeFields"][] = "MonthsOfCap";
$tdatacostmodel[".googleLikeFields"][] = "Waste";
$tdatacostmodel[".googleLikeFields"][] = "Maint";
$tdatacostmodel[".googleLikeFields"][] = "Admin";
$tdatacostmodel[".googleLikeFields"][] = "Mgr";
$tdatacostmodel[".googleLikeFields"][] = "Clerk";
$tdatacostmodel[".googleLikeFields"][] = "Notes";


$tdatacostmodel[".advSearchFields"][] = "ProdGrpCode";
$tdatacostmodel[".advSearchFields"][] = "Interest";
$tdatacostmodel[".advSearchFields"][] = "Period";
$tdatacostmodel[".advSearchFields"][] = "DownPay";
$tdatacostmodel[".advSearchFields"][] = "DaysWorked";
$tdatacostmodel[".advSearchFields"][] = "Qty";
$tdatacostmodel[".advSearchFields"][] = "MonthsOfCap";
$tdatacostmodel[".advSearchFields"][] = "Waste";
$tdatacostmodel[".advSearchFields"][] = "Maint";
$tdatacostmodel[".advSearchFields"][] = "Admin";
$tdatacostmodel[".advSearchFields"][] = "Mgr";
$tdatacostmodel[".advSearchFields"][] = "Clerk";
$tdatacostmodel[".advSearchFields"][] = "Notes";

$tdatacostmodel[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatacostmodel[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacostmodel[".strOrderBy"] = $tstrOrderBy;

$tdatacostmodel[".orderindexes"] = array();

$tdatacostmodel[".sqlHead"] = "SELECT ProdGrpCode,   Interest,   Period,   DownPay,   DaysWorked,   Qty,   MonthsOfCap,   Waste,   Maint,   `Admin`,   Mgr,   Clerk,   Notes";
$tdatacostmodel[".sqlFrom"] = "FROM costmodel";
$tdatacostmodel[".sqlWhereExpr"] = "";
$tdatacostmodel[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacostmodel[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacostmodel[".arrGroupsPerPage"] = $arrGPP;

$tableKeyscostmodel = array();
$tableKeyscostmodel[] = "ProdGrpCode";
$tdatacostmodel[".Keys"] = $tableKeyscostmodel;

$tdatacostmodel[".listFields"] = array();
$tdatacostmodel[".listFields"][] = "ProdGrpCode";
$tdatacostmodel[".listFields"][] = "Interest";
$tdatacostmodel[".listFields"][] = "Period";
$tdatacostmodel[".listFields"][] = "DownPay";
$tdatacostmodel[".listFields"][] = "DaysWorked";
$tdatacostmodel[".listFields"][] = "Qty";
$tdatacostmodel[".listFields"][] = "MonthsOfCap";
$tdatacostmodel[".listFields"][] = "Waste";
$tdatacostmodel[".listFields"][] = "Maint";
$tdatacostmodel[".listFields"][] = "Admin";
$tdatacostmodel[".listFields"][] = "Mgr";
$tdatacostmodel[".listFields"][] = "Clerk";
$tdatacostmodel[".listFields"][] = "Notes";

$tdatacostmodel[".viewFields"] = array();
$tdatacostmodel[".viewFields"][] = "ProdGrpCode";
$tdatacostmodel[".viewFields"][] = "Interest";
$tdatacostmodel[".viewFields"][] = "Period";
$tdatacostmodel[".viewFields"][] = "DownPay";
$tdatacostmodel[".viewFields"][] = "DaysWorked";
$tdatacostmodel[".viewFields"][] = "Qty";
$tdatacostmodel[".viewFields"][] = "MonthsOfCap";
$tdatacostmodel[".viewFields"][] = "Waste";
$tdatacostmodel[".viewFields"][] = "Maint";
$tdatacostmodel[".viewFields"][] = "Admin";
$tdatacostmodel[".viewFields"][] = "Mgr";
$tdatacostmodel[".viewFields"][] = "Clerk";
$tdatacostmodel[".viewFields"][] = "Notes";

$tdatacostmodel[".addFields"] = array();
$tdatacostmodel[".addFields"][] = "ProdGrpCode";
$tdatacostmodel[".addFields"][] = "Interest";
$tdatacostmodel[".addFields"][] = "Period";
$tdatacostmodel[".addFields"][] = "DownPay";
$tdatacostmodel[".addFields"][] = "DaysWorked";
$tdatacostmodel[".addFields"][] = "Qty";
$tdatacostmodel[".addFields"][] = "MonthsOfCap";
$tdatacostmodel[".addFields"][] = "Waste";
$tdatacostmodel[".addFields"][] = "Maint";
$tdatacostmodel[".addFields"][] = "Admin";
$tdatacostmodel[".addFields"][] = "Mgr";
$tdatacostmodel[".addFields"][] = "Clerk";
$tdatacostmodel[".addFields"][] = "Notes";

$tdatacostmodel[".inlineAddFields"] = array();
$tdatacostmodel[".inlineAddFields"][] = "ProdGrpCode";
$tdatacostmodel[".inlineAddFields"][] = "Interest";
$tdatacostmodel[".inlineAddFields"][] = "Period";
$tdatacostmodel[".inlineAddFields"][] = "DownPay";
$tdatacostmodel[".inlineAddFields"][] = "DaysWorked";
$tdatacostmodel[".inlineAddFields"][] = "Qty";
$tdatacostmodel[".inlineAddFields"][] = "MonthsOfCap";
$tdatacostmodel[".inlineAddFields"][] = "Waste";
$tdatacostmodel[".inlineAddFields"][] = "Maint";
$tdatacostmodel[".inlineAddFields"][] = "Admin";
$tdatacostmodel[".inlineAddFields"][] = "Mgr";
$tdatacostmodel[".inlineAddFields"][] = "Clerk";
$tdatacostmodel[".inlineAddFields"][] = "Notes";

$tdatacostmodel[".editFields"] = array();
$tdatacostmodel[".editFields"][] = "ProdGrpCode";
$tdatacostmodel[".editFields"][] = "Interest";
$tdatacostmodel[".editFields"][] = "Period";
$tdatacostmodel[".editFields"][] = "DownPay";
$tdatacostmodel[".editFields"][] = "DaysWorked";
$tdatacostmodel[".editFields"][] = "Qty";
$tdatacostmodel[".editFields"][] = "MonthsOfCap";
$tdatacostmodel[".editFields"][] = "Waste";
$tdatacostmodel[".editFields"][] = "Maint";
$tdatacostmodel[".editFields"][] = "Admin";
$tdatacostmodel[".editFields"][] = "Mgr";
$tdatacostmodel[".editFields"][] = "Clerk";
$tdatacostmodel[".editFields"][] = "Notes";

$tdatacostmodel[".inlineEditFields"] = array();
$tdatacostmodel[".inlineEditFields"][] = "ProdGrpCode";
$tdatacostmodel[".inlineEditFields"][] = "Interest";
$tdatacostmodel[".inlineEditFields"][] = "Period";
$tdatacostmodel[".inlineEditFields"][] = "DownPay";
$tdatacostmodel[".inlineEditFields"][] = "DaysWorked";
$tdatacostmodel[".inlineEditFields"][] = "Qty";
$tdatacostmodel[".inlineEditFields"][] = "MonthsOfCap";
$tdatacostmodel[".inlineEditFields"][] = "Waste";
$tdatacostmodel[".inlineEditFields"][] = "Maint";
$tdatacostmodel[".inlineEditFields"][] = "Admin";
$tdatacostmodel[".inlineEditFields"][] = "Mgr";
$tdatacostmodel[".inlineEditFields"][] = "Clerk";
$tdatacostmodel[".inlineEditFields"][] = "Notes";

$tdatacostmodel[".exportFields"] = array();
$tdatacostmodel[".exportFields"][] = "ProdGrpCode";
$tdatacostmodel[".exportFields"][] = "Interest";
$tdatacostmodel[".exportFields"][] = "Period";
$tdatacostmodel[".exportFields"][] = "DownPay";
$tdatacostmodel[".exportFields"][] = "DaysWorked";
$tdatacostmodel[".exportFields"][] = "Qty";
$tdatacostmodel[".exportFields"][] = "MonthsOfCap";
$tdatacostmodel[".exportFields"][] = "Waste";
$tdatacostmodel[".exportFields"][] = "Maint";
$tdatacostmodel[".exportFields"][] = "Admin";
$tdatacostmodel[".exportFields"][] = "Mgr";
$tdatacostmodel[".exportFields"][] = "Clerk";
$tdatacostmodel[".exportFields"][] = "Notes";

$tdatacostmodel[".printFields"] = array();
$tdatacostmodel[".printFields"][] = "ProdGrpCode";
$tdatacostmodel[".printFields"][] = "Interest";
$tdatacostmodel[".printFields"][] = "Period";
$tdatacostmodel[".printFields"][] = "DownPay";
$tdatacostmodel[".printFields"][] = "DaysWorked";
$tdatacostmodel[".printFields"][] = "Qty";
$tdatacostmodel[".printFields"][] = "MonthsOfCap";
$tdatacostmodel[".printFields"][] = "Waste";
$tdatacostmodel[".printFields"][] = "Maint";
$tdatacostmodel[".printFields"][] = "Admin";
$tdatacostmodel[".printFields"][] = "Mgr";
$tdatacostmodel[".printFields"][] = "Clerk";
$tdatacostmodel[".printFields"][] = "Notes";

//	ProdGrpCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ProdGrpCode";
	$fdata["GoodName"] = "ProdGrpCode";
	$fdata["ownerTable"] = "costmodel";
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
	
		
		
	$tdatacostmodel["ProdGrpCode"] = $fdata;
//	Interest
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Interest";
	$fdata["GoodName"] = "Interest";
	$fdata["ownerTable"] = "costmodel";
	$fdata["Label"] = "Interest"; 
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
	
		$fdata["strField"] = "Interest"; 
		$fdata["FullName"] = "Interest";
	
		
		
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
	
		
		
	$tdatacostmodel["Interest"] = $fdata;
//	Period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Period";
	$fdata["GoodName"] = "Period";
	$fdata["ownerTable"] = "costmodel";
	$fdata["Label"] = "Period"; 
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
	
		$fdata["strField"] = "Period"; 
		$fdata["FullName"] = "Period";
	
		
		
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
	
		
		
	$tdatacostmodel["Period"] = $fdata;
//	DownPay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DownPay";
	$fdata["GoodName"] = "DownPay";
	$fdata["ownerTable"] = "costmodel";
	$fdata["Label"] = "Down Pay"; 
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
	
		$fdata["strField"] = "DownPay"; 
		$fdata["FullName"] = "DownPay";
	
		
		
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
	
		
		
	$tdatacostmodel["DownPay"] = $fdata;
//	DaysWorked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DaysWorked";
	$fdata["GoodName"] = "DaysWorked";
	$fdata["ownerTable"] = "costmodel";
	$fdata["Label"] = "Days Worked"; 
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
	
		$fdata["strField"] = "DaysWorked"; 
		$fdata["FullName"] = "DaysWorked";
	
		
		
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
	
		
		
	$tdatacostmodel["DaysWorked"] = $fdata;
//	Qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Qty";
	$fdata["GoodName"] = "Qty";
	$fdata["ownerTable"] = "costmodel";
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
	
		
		
	$tdatacostmodel["Qty"] = $fdata;
//	MonthsOfCap
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "MonthsOfCap";
	$fdata["GoodName"] = "MonthsOfCap";
	$fdata["ownerTable"] = "costmodel";
	$fdata["Label"] = "Months Of Cap"; 
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
	
		$fdata["strField"] = "MonthsOfCap"; 
		$fdata["FullName"] = "MonthsOfCap";
	
		
		
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
	
		
		
	$tdatacostmodel["MonthsOfCap"] = $fdata;
//	Waste
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Waste";
	$fdata["GoodName"] = "Waste";
	$fdata["ownerTable"] = "costmodel";
	$fdata["Label"] = "Waste"; 
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
	
		$fdata["strField"] = "Waste"; 
		$fdata["FullName"] = "Waste";
	
		
		
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
	
		
		
	$tdatacostmodel["Waste"] = $fdata;
//	Maint
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Maint";
	$fdata["GoodName"] = "Maint";
	$fdata["ownerTable"] = "costmodel";
	$fdata["Label"] = "Maint"; 
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
	
		$fdata["strField"] = "Maint"; 
		$fdata["FullName"] = "Maint";
	
		
		
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
	
		
		
	$tdatacostmodel["Maint"] = $fdata;
//	Admin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Admin";
	$fdata["GoodName"] = "Admin";
	$fdata["ownerTable"] = "costmodel";
	$fdata["Label"] = "Admin"; 
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
	
		$fdata["strField"] = "Admin"; 
		$fdata["FullName"] = "`Admin`";
	
		
		
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
	
		
		
	$tdatacostmodel["Admin"] = $fdata;
//	Mgr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Mgr";
	$fdata["GoodName"] = "Mgr";
	$fdata["ownerTable"] = "costmodel";
	$fdata["Label"] = "Mgr"; 
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
	
		$fdata["strField"] = "Mgr"; 
		$fdata["FullName"] = "Mgr";
	
		
		
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
	
		
		
	$tdatacostmodel["Mgr"] = $fdata;
//	Clerk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Clerk";
	$fdata["GoodName"] = "Clerk";
	$fdata["ownerTable"] = "costmodel";
	$fdata["Label"] = "Clerk"; 
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
	
		$fdata["strField"] = "Clerk"; 
		$fdata["FullName"] = "Clerk";
	
		
		
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
	
		
		
	$tdatacostmodel["Clerk"] = $fdata;
//	Notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Notes";
	$fdata["GoodName"] = "Notes";
	$fdata["ownerTable"] = "costmodel";
	$fdata["Label"] = "Notes"; 
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
	
		$fdata["strField"] = "Notes"; 
		$fdata["FullName"] = "Notes";
	
		
		
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
			$edata["EditParams"].= " maxlength=100";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacostmodel["Notes"] = $fdata;

	
$tables_data["costmodel"]=&$tdatacostmodel;
$field_labels["costmodel"] = &$fieldLabelscostmodel;
$fieldToolTips["costmodel"] = &$fieldToolTipscostmodel;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["costmodel"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["costmodel"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_costmodel()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ProdGrpCode,   Interest,   Period,   DownPay,   DaysWorked,   Qty,   MonthsOfCap,   Waste,   Maint,   `Admin`,   Mgr,   Clerk,   Notes";
$proto0["m_strFrom"] = "FROM costmodel";
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
	"m_strTable" => "costmodel"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Interest",
	"m_strTable" => "costmodel"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Period",
	"m_strTable" => "costmodel"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "DownPay",
	"m_strTable" => "costmodel"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "DaysWorked",
	"m_strTable" => "costmodel"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Qty",
	"m_strTable" => "costmodel"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "MonthsOfCap",
	"m_strTable" => "costmodel"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Waste",
	"m_strTable" => "costmodel"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Maint",
	"m_strTable" => "costmodel"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Admin",
	"m_strTable" => "costmodel"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Mgr",
	"m_strTable" => "costmodel"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "Clerk",
	"m_strTable" => "costmodel"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "Notes",
	"m_strTable" => "costmodel"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto31=array();
$proto31["m_link"] = "SQLL_MAIN";
			$proto32=array();
$proto32["m_strName"] = "costmodel";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "ProdGrpCode";
$proto32["m_columns"][] = "Interest";
$proto32["m_columns"][] = "Period";
$proto32["m_columns"][] = "DownPay";
$proto32["m_columns"][] = "DaysWorked";
$proto32["m_columns"][] = "Qty";
$proto32["m_columns"][] = "MonthsOfCap";
$proto32["m_columns"][] = "Waste";
$proto32["m_columns"][] = "Maint";
$proto32["m_columns"][] = "Admin";
$proto32["m_columns"][] = "Mgr";
$proto32["m_columns"][] = "Clerk";
$proto32["m_columns"][] = "Notes";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_alias"] = "";
$proto33=array();
$proto33["m_sql"] = "";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "";
$proto33["m_havingmode"] = "0";
$proto33["m_inBrackets"] = "0";
$proto33["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_costmodel = createSqlQuery_costmodel();
													$tdatacostmodel[".sqlquery"] = $queryData_costmodel;
	
if(isset($tdatacostmodel["field2"])){
	$tdatacostmodel["field2"]["LookupTable"] = "carscars_view";
	$tdatacostmodel["field2"]["LookupOrderBy"] = "name";
	$tdatacostmodel["field2"]["LookupType"] = 4;
	$tdatacostmodel["field2"]["LinkField"] = "email";
	$tdatacostmodel["field2"]["DisplayField"] = "name";
	$tdatacostmodel[".hasCustomViewField"] = true;
}

$tableEvents["costmodel"] = new eventsBase;
$tdatacostmodel[".hasEvents"] = false;

$cipherer = new RunnerCipherer("costmodel");

?>
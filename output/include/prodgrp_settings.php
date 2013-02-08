<?php
require_once(getabspath("classes/cipherer.php"));
$tdataprodgrp = array();
	$tdataprodgrp[".NumberOfChars"] = 80; 
	$tdataprodgrp[".ShortName"] = "prodgrp";
	$tdataprodgrp[".OwnerID"] = "";
	$tdataprodgrp[".OriginalTable"] = "prodgrp";

//	field labels
$fieldLabelsprodgrp = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprodgrp["English"] = array();
	$fieldToolTipsprodgrp["English"] = array();
	$fieldLabelsprodgrp["English"]["ProdGrpCode"] = "Prod Grp Code";
	$fieldToolTipsprodgrp["English"]["ProdGrpCode"] = "";
	$fieldLabelsprodgrp["English"]["ThaiProductGroup"] = "Thai Product Group";
	$fieldToolTipsprodgrp["English"]["ThaiProductGroup"] = "";
	$fieldLabelsprodgrp["English"]["EngProductGroup"] = "Eng Product Group";
	$fieldToolTipsprodgrp["English"]["EngProductGroup"] = "";
	$fieldLabelsprodgrp["English"]["MarkDownWholesale"] = "Mark Down Wholesale";
	$fieldToolTipsprodgrp["English"]["MarkDownWholesale"] = "";
	$fieldLabelsprodgrp["English"]["MarkDownRetail"] = "Mark Down Retail";
	$fieldToolTipsprodgrp["English"]["MarkDownRetail"] = "";
	$fieldLabelsprodgrp["English"]["DaysWorked"] = "Days Worked";
	$fieldToolTipsprodgrp["English"]["DaysWorked"] = "";
	$fieldLabelsprodgrp["English"]["NumberWorkers"] = "Number Workers";
	$fieldToolTipsprodgrp["English"]["NumberWorkers"] = "";
	$fieldLabelsprodgrp["English"]["QtyMolds"] = "Qty Molds";
	$fieldToolTipsprodgrp["English"]["QtyMolds"] = "";
	$fieldLabelsprodgrp["English"]["MouldsPerDay"] = "Moulds Per Day";
	$fieldToolTipsprodgrp["English"]["MouldsPerDay"] = "";
	$fieldLabelsprodgrp["English"]["Interest"] = "Interest";
	$fieldToolTipsprodgrp["English"]["Interest"] = "";
	$fieldLabelsprodgrp["English"]["Period"] = "Period";
	$fieldToolTipsprodgrp["English"]["Period"] = "";
	$fieldLabelsprodgrp["English"]["DownPay"] = "Down Pay";
	$fieldToolTipsprodgrp["English"]["DownPay"] = "";
	$fieldLabelsprodgrp["English"]["MonthsOfCap"] = "Months Of Cap";
	$fieldToolTipsprodgrp["English"]["MonthsOfCap"] = "";
	$fieldLabelsprodgrp["English"]["Waste"] = "Waste";
	$fieldToolTipsprodgrp["English"]["Waste"] = "";
	$fieldLabelsprodgrp["English"]["Maint"] = "Maint";
	$fieldToolTipsprodgrp["English"]["Maint"] = "";
	$fieldLabelsprodgrp["English"]["ItemNotes"] = "Item Notes";
	$fieldToolTipsprodgrp["English"]["ItemNotes"] = "";
	$fieldLabelsprodgrp["English"]["CuringTime"] = "Curing Time";
	$fieldToolTipsprodgrp["English"]["CuringTime"] = "";
	$fieldLabelsprodgrp["English"]["GAP"] = "GAP";
	$fieldToolTipsprodgrp["English"]["GAP"] = "";
	if (count($fieldToolTipsprodgrp["English"]))
		$tdataprodgrp[".isUseToolTips"] = true;
}
	
	
	$tdataprodgrp[".NCSearch"] = true;



$tdataprodgrp[".shortTableName"] = "prodgrp";
$tdataprodgrp[".nSecOptions"] = 0;
$tdataprodgrp[".recsPerRowList"] = 1;
$tdataprodgrp[".mainTableOwnerID"] = "";
$tdataprodgrp[".moveNext"] = 1;
$tdataprodgrp[".nType"] = 0;

$tdataprodgrp[".strOriginalTableName"] = "prodgrp";




$tdataprodgrp[".showAddInPopup"] = false;

$tdataprodgrp[".showEditInPopup"] = false;

$tdataprodgrp[".showViewInPopup"] = false;

$tdataprodgrp[".fieldsForRegister"] = array();

$tdataprodgrp[".listAjax"] = false;

	$tdataprodgrp[".audit"] = false;

	$tdataprodgrp[".locking"] = false;

$tdataprodgrp[".listIcons"] = true;

$tdataprodgrp[".exportTo"] = true;

$tdataprodgrp[".printFriendly"] = true;


$tdataprodgrp[".showSimpleSearchOptions"] = false;

$tdataprodgrp[".showSearchPanel"] = true;

if (isMobile())
	$tdataprodgrp[".isUseAjaxSuggest"] = false;
else 
	$tdataprodgrp[".isUseAjaxSuggest"] = true;

$tdataprodgrp[".rowHighlite"] = true;

// button handlers file names

$tdataprodgrp[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprodgrp[".isUseTimeForSearch"] = false;




$tdataprodgrp[".allSearchFields"] = array();

$tdataprodgrp[".allSearchFields"][] = "ProdGrpCode";
$tdataprodgrp[".allSearchFields"][] = "ThaiProductGroup";
$tdataprodgrp[".allSearchFields"][] = "EngProductGroup";
$tdataprodgrp[".allSearchFields"][] = "MarkDownWholesale";
$tdataprodgrp[".allSearchFields"][] = "MarkDownRetail";
$tdataprodgrp[".allSearchFields"][] = "DaysWorked";
$tdataprodgrp[".allSearchFields"][] = "NumberWorkers";
$tdataprodgrp[".allSearchFields"][] = "QtyMolds";
$tdataprodgrp[".allSearchFields"][] = "MouldsPerDay";
$tdataprodgrp[".allSearchFields"][] = "Interest";
$tdataprodgrp[".allSearchFields"][] = "Period";
$tdataprodgrp[".allSearchFields"][] = "DownPay";
$tdataprodgrp[".allSearchFields"][] = "MonthsOfCap";
$tdataprodgrp[".allSearchFields"][] = "Waste";
$tdataprodgrp[".allSearchFields"][] = "Maint";
$tdataprodgrp[".allSearchFields"][] = "ItemNotes";
$tdataprodgrp[".allSearchFields"][] = "CuringTime";
$tdataprodgrp[".allSearchFields"][] = "GAP";

$tdataprodgrp[".googleLikeFields"][] = "ProdGrpCode";
$tdataprodgrp[".googleLikeFields"][] = "ThaiProductGroup";
$tdataprodgrp[".googleLikeFields"][] = "EngProductGroup";
$tdataprodgrp[".googleLikeFields"][] = "MarkDownWholesale";
$tdataprodgrp[".googleLikeFields"][] = "MarkDownRetail";
$tdataprodgrp[".googleLikeFields"][] = "DaysWorked";
$tdataprodgrp[".googleLikeFields"][] = "NumberWorkers";
$tdataprodgrp[".googleLikeFields"][] = "QtyMolds";
$tdataprodgrp[".googleLikeFields"][] = "MouldsPerDay";
$tdataprodgrp[".googleLikeFields"][] = "Interest";
$tdataprodgrp[".googleLikeFields"][] = "Period";
$tdataprodgrp[".googleLikeFields"][] = "DownPay";
$tdataprodgrp[".googleLikeFields"][] = "MonthsOfCap";
$tdataprodgrp[".googleLikeFields"][] = "Waste";
$tdataprodgrp[".googleLikeFields"][] = "Maint";
$tdataprodgrp[".googleLikeFields"][] = "ItemNotes";
$tdataprodgrp[".googleLikeFields"][] = "CuringTime";
$tdataprodgrp[".googleLikeFields"][] = "GAP";


$tdataprodgrp[".advSearchFields"][] = "ProdGrpCode";
$tdataprodgrp[".advSearchFields"][] = "ThaiProductGroup";
$tdataprodgrp[".advSearchFields"][] = "EngProductGroup";
$tdataprodgrp[".advSearchFields"][] = "MarkDownWholesale";
$tdataprodgrp[".advSearchFields"][] = "MarkDownRetail";
$tdataprodgrp[".advSearchFields"][] = "DaysWorked";
$tdataprodgrp[".advSearchFields"][] = "NumberWorkers";
$tdataprodgrp[".advSearchFields"][] = "QtyMolds";
$tdataprodgrp[".advSearchFields"][] = "MouldsPerDay";
$tdataprodgrp[".advSearchFields"][] = "Interest";
$tdataprodgrp[".advSearchFields"][] = "Period";
$tdataprodgrp[".advSearchFields"][] = "DownPay";
$tdataprodgrp[".advSearchFields"][] = "MonthsOfCap";
$tdataprodgrp[".advSearchFields"][] = "Waste";
$tdataprodgrp[".advSearchFields"][] = "Maint";
$tdataprodgrp[".advSearchFields"][] = "ItemNotes";
$tdataprodgrp[".advSearchFields"][] = "CuringTime";
$tdataprodgrp[".advSearchFields"][] = "GAP";

$tdataprodgrp[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataprodgrp[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataprodgrp[".strOrderBy"] = $tstrOrderBy;

$tdataprodgrp[".orderindexes"] = array();

$tdataprodgrp[".sqlHead"] = "SELECT ProdGrpCode,   ThaiProductGroup,   EngProductGroup,   MarkDownWholesale,   MarkDownRetail,   DaysWorked,   NumberWorkers,   QtyMolds,   MouldsPerDay,   Interest,   Period,   DownPay,   MonthsOfCap,   Waste,   Maint,   ItemNotes,   CuringTime,   GAP";
$tdataprodgrp[".sqlFrom"] = "FROM prodgrp";
$tdataprodgrp[".sqlWhereExpr"] = "";
$tdataprodgrp[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprodgrp[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprodgrp[".arrGroupsPerPage"] = $arrGPP;

$tableKeysprodgrp = array();
$tdataprodgrp[".Keys"] = $tableKeysprodgrp;

$tdataprodgrp[".listFields"] = array();
$tdataprodgrp[".listFields"][] = "ProdGrpCode";
$tdataprodgrp[".listFields"][] = "ThaiProductGroup";
$tdataprodgrp[".listFields"][] = "EngProductGroup";
$tdataprodgrp[".listFields"][] = "MarkDownWholesale";
$tdataprodgrp[".listFields"][] = "MarkDownRetail";
$tdataprodgrp[".listFields"][] = "DaysWorked";
$tdataprodgrp[".listFields"][] = "NumberWorkers";
$tdataprodgrp[".listFields"][] = "QtyMolds";
$tdataprodgrp[".listFields"][] = "MouldsPerDay";
$tdataprodgrp[".listFields"][] = "Interest";
$tdataprodgrp[".listFields"][] = "Period";
$tdataprodgrp[".listFields"][] = "DownPay";
$tdataprodgrp[".listFields"][] = "MonthsOfCap";
$tdataprodgrp[".listFields"][] = "Waste";
$tdataprodgrp[".listFields"][] = "Maint";
$tdataprodgrp[".listFields"][] = "ItemNotes";
$tdataprodgrp[".listFields"][] = "CuringTime";
$tdataprodgrp[".listFields"][] = "GAP";

$tdataprodgrp[".viewFields"] = array();
$tdataprodgrp[".viewFields"][] = "ProdGrpCode";
$tdataprodgrp[".viewFields"][] = "ThaiProductGroup";
$tdataprodgrp[".viewFields"][] = "EngProductGroup";
$tdataprodgrp[".viewFields"][] = "MarkDownWholesale";
$tdataprodgrp[".viewFields"][] = "MarkDownRetail";
$tdataprodgrp[".viewFields"][] = "DaysWorked";
$tdataprodgrp[".viewFields"][] = "NumberWorkers";
$tdataprodgrp[".viewFields"][] = "QtyMolds";
$tdataprodgrp[".viewFields"][] = "MouldsPerDay";
$tdataprodgrp[".viewFields"][] = "Interest";
$tdataprodgrp[".viewFields"][] = "Period";
$tdataprodgrp[".viewFields"][] = "DownPay";
$tdataprodgrp[".viewFields"][] = "MonthsOfCap";
$tdataprodgrp[".viewFields"][] = "Waste";
$tdataprodgrp[".viewFields"][] = "Maint";
$tdataprodgrp[".viewFields"][] = "ItemNotes";
$tdataprodgrp[".viewFields"][] = "CuringTime";
$tdataprodgrp[".viewFields"][] = "GAP";

$tdataprodgrp[".addFields"] = array();
$tdataprodgrp[".addFields"][] = "ProdGrpCode";
$tdataprodgrp[".addFields"][] = "ThaiProductGroup";
$tdataprodgrp[".addFields"][] = "EngProductGroup";
$tdataprodgrp[".addFields"][] = "MarkDownWholesale";
$tdataprodgrp[".addFields"][] = "MarkDownRetail";
$tdataprodgrp[".addFields"][] = "DaysWorked";
$tdataprodgrp[".addFields"][] = "NumberWorkers";
$tdataprodgrp[".addFields"][] = "QtyMolds";
$tdataprodgrp[".addFields"][] = "MouldsPerDay";
$tdataprodgrp[".addFields"][] = "Interest";
$tdataprodgrp[".addFields"][] = "Period";
$tdataprodgrp[".addFields"][] = "DownPay";
$tdataprodgrp[".addFields"][] = "MonthsOfCap";
$tdataprodgrp[".addFields"][] = "Waste";
$tdataprodgrp[".addFields"][] = "Maint";
$tdataprodgrp[".addFields"][] = "ItemNotes";
$tdataprodgrp[".addFields"][] = "CuringTime";
$tdataprodgrp[".addFields"][] = "GAP";

$tdataprodgrp[".inlineAddFields"] = array();
$tdataprodgrp[".inlineAddFields"][] = "ProdGrpCode";
$tdataprodgrp[".inlineAddFields"][] = "ThaiProductGroup";
$tdataprodgrp[".inlineAddFields"][] = "EngProductGroup";
$tdataprodgrp[".inlineAddFields"][] = "MarkDownWholesale";
$tdataprodgrp[".inlineAddFields"][] = "MarkDownRetail";
$tdataprodgrp[".inlineAddFields"][] = "DaysWorked";
$tdataprodgrp[".inlineAddFields"][] = "NumberWorkers";
$tdataprodgrp[".inlineAddFields"][] = "QtyMolds";
$tdataprodgrp[".inlineAddFields"][] = "MouldsPerDay";
$tdataprodgrp[".inlineAddFields"][] = "Interest";
$tdataprodgrp[".inlineAddFields"][] = "Period";
$tdataprodgrp[".inlineAddFields"][] = "DownPay";
$tdataprodgrp[".inlineAddFields"][] = "MonthsOfCap";
$tdataprodgrp[".inlineAddFields"][] = "Waste";
$tdataprodgrp[".inlineAddFields"][] = "Maint";
$tdataprodgrp[".inlineAddFields"][] = "ItemNotes";
$tdataprodgrp[".inlineAddFields"][] = "CuringTime";
$tdataprodgrp[".inlineAddFields"][] = "GAP";

$tdataprodgrp[".editFields"] = array();
$tdataprodgrp[".editFields"][] = "ProdGrpCode";
$tdataprodgrp[".editFields"][] = "ThaiProductGroup";
$tdataprodgrp[".editFields"][] = "EngProductGroup";
$tdataprodgrp[".editFields"][] = "MarkDownWholesale";
$tdataprodgrp[".editFields"][] = "MarkDownRetail";
$tdataprodgrp[".editFields"][] = "DaysWorked";
$tdataprodgrp[".editFields"][] = "NumberWorkers";
$tdataprodgrp[".editFields"][] = "QtyMolds";
$tdataprodgrp[".editFields"][] = "MouldsPerDay";
$tdataprodgrp[".editFields"][] = "Interest";
$tdataprodgrp[".editFields"][] = "Period";
$tdataprodgrp[".editFields"][] = "DownPay";
$tdataprodgrp[".editFields"][] = "MonthsOfCap";
$tdataprodgrp[".editFields"][] = "Waste";
$tdataprodgrp[".editFields"][] = "Maint";
$tdataprodgrp[".editFields"][] = "ItemNotes";
$tdataprodgrp[".editFields"][] = "CuringTime";
$tdataprodgrp[".editFields"][] = "GAP";

$tdataprodgrp[".inlineEditFields"] = array();
$tdataprodgrp[".inlineEditFields"][] = "ProdGrpCode";
$tdataprodgrp[".inlineEditFields"][] = "ThaiProductGroup";
$tdataprodgrp[".inlineEditFields"][] = "EngProductGroup";
$tdataprodgrp[".inlineEditFields"][] = "MarkDownWholesale";
$tdataprodgrp[".inlineEditFields"][] = "MarkDownRetail";
$tdataprodgrp[".inlineEditFields"][] = "DaysWorked";
$tdataprodgrp[".inlineEditFields"][] = "NumberWorkers";
$tdataprodgrp[".inlineEditFields"][] = "QtyMolds";
$tdataprodgrp[".inlineEditFields"][] = "MouldsPerDay";
$tdataprodgrp[".inlineEditFields"][] = "Interest";
$tdataprodgrp[".inlineEditFields"][] = "Period";
$tdataprodgrp[".inlineEditFields"][] = "DownPay";
$tdataprodgrp[".inlineEditFields"][] = "MonthsOfCap";
$tdataprodgrp[".inlineEditFields"][] = "Waste";
$tdataprodgrp[".inlineEditFields"][] = "Maint";
$tdataprodgrp[".inlineEditFields"][] = "ItemNotes";
$tdataprodgrp[".inlineEditFields"][] = "CuringTime";
$tdataprodgrp[".inlineEditFields"][] = "GAP";

$tdataprodgrp[".exportFields"] = array();
$tdataprodgrp[".exportFields"][] = "ProdGrpCode";
$tdataprodgrp[".exportFields"][] = "ThaiProductGroup";
$tdataprodgrp[".exportFields"][] = "EngProductGroup";
$tdataprodgrp[".exportFields"][] = "MarkDownWholesale";
$tdataprodgrp[".exportFields"][] = "MarkDownRetail";
$tdataprodgrp[".exportFields"][] = "DaysWorked";
$tdataprodgrp[".exportFields"][] = "NumberWorkers";
$tdataprodgrp[".exportFields"][] = "QtyMolds";
$tdataprodgrp[".exportFields"][] = "MouldsPerDay";
$tdataprodgrp[".exportFields"][] = "Interest";
$tdataprodgrp[".exportFields"][] = "Period";
$tdataprodgrp[".exportFields"][] = "DownPay";
$tdataprodgrp[".exportFields"][] = "MonthsOfCap";
$tdataprodgrp[".exportFields"][] = "Waste";
$tdataprodgrp[".exportFields"][] = "Maint";
$tdataprodgrp[".exportFields"][] = "ItemNotes";
$tdataprodgrp[".exportFields"][] = "CuringTime";
$tdataprodgrp[".exportFields"][] = "GAP";

$tdataprodgrp[".printFields"] = array();
$tdataprodgrp[".printFields"][] = "ProdGrpCode";
$tdataprodgrp[".printFields"][] = "ThaiProductGroup";
$tdataprodgrp[".printFields"][] = "EngProductGroup";
$tdataprodgrp[".printFields"][] = "MarkDownWholesale";
$tdataprodgrp[".printFields"][] = "MarkDownRetail";
$tdataprodgrp[".printFields"][] = "DaysWorked";
$tdataprodgrp[".printFields"][] = "NumberWorkers";
$tdataprodgrp[".printFields"][] = "QtyMolds";
$tdataprodgrp[".printFields"][] = "MouldsPerDay";
$tdataprodgrp[".printFields"][] = "Interest";
$tdataprodgrp[".printFields"][] = "Period";
$tdataprodgrp[".printFields"][] = "DownPay";
$tdataprodgrp[".printFields"][] = "MonthsOfCap";
$tdataprodgrp[".printFields"][] = "Waste";
$tdataprodgrp[".printFields"][] = "Maint";
$tdataprodgrp[".printFields"][] = "ItemNotes";
$tdataprodgrp[".printFields"][] = "CuringTime";
$tdataprodgrp[".printFields"][] = "GAP";

//	ProdGrpCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ProdGrpCode";
	$fdata["GoodName"] = "ProdGrpCode";
	$fdata["ownerTable"] = "prodgrp";
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
	
		
		
	$tdataprodgrp["ProdGrpCode"] = $fdata;
//	ThaiProductGroup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ThaiProductGroup";
	$fdata["GoodName"] = "ThaiProductGroup";
	$fdata["ownerTable"] = "prodgrp";
	$fdata["Label"] = "Thai Product Group"; 
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
	
		$fdata["strField"] = "ThaiProductGroup"; 
		$fdata["FullName"] = "ThaiProductGroup";
	
		
		
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
			$edata["EditParams"].= " maxlength=67";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprodgrp["ThaiProductGroup"] = $fdata;
//	EngProductGroup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "EngProductGroup";
	$fdata["GoodName"] = "EngProductGroup";
	$fdata["ownerTable"] = "prodgrp";
	$fdata["Label"] = "Eng Product Group"; 
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
	
		$fdata["strField"] = "EngProductGroup"; 
		$fdata["FullName"] = "EngProductGroup";
	
		
		
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
			$edata["EditParams"].= " maxlength=35";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprodgrp["EngProductGroup"] = $fdata;
//	MarkDownWholesale
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "MarkDownWholesale";
	$fdata["GoodName"] = "MarkDownWholesale";
	$fdata["ownerTable"] = "prodgrp";
	$fdata["Label"] = "Mark Down Wholesale"; 
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
	
		$fdata["strField"] = "MarkDownWholesale"; 
		$fdata["FullName"] = "MarkDownWholesale";
	
		
		
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
	
		
		
	$tdataprodgrp["MarkDownWholesale"] = $fdata;
//	MarkDownRetail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MarkDownRetail";
	$fdata["GoodName"] = "MarkDownRetail";
	$fdata["ownerTable"] = "prodgrp";
	$fdata["Label"] = "Mark Down Retail"; 
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
	
		$fdata["strField"] = "MarkDownRetail"; 
		$fdata["FullName"] = "MarkDownRetail";
	
		
		
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
	
		
		
	$tdataprodgrp["MarkDownRetail"] = $fdata;
//	DaysWorked
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DaysWorked";
	$fdata["GoodName"] = "DaysWorked";
	$fdata["ownerTable"] = "prodgrp";
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
	
		
		
	$tdataprodgrp["DaysWorked"] = $fdata;
//	NumberWorkers
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "NumberWorkers";
	$fdata["GoodName"] = "NumberWorkers";
	$fdata["ownerTable"] = "prodgrp";
	$fdata["Label"] = "Number Workers"; 
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
	
		$fdata["strField"] = "NumberWorkers"; 
		$fdata["FullName"] = "NumberWorkers";
	
		
		
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
	
		
		
	$tdataprodgrp["NumberWorkers"] = $fdata;
//	QtyMolds
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "QtyMolds";
	$fdata["GoodName"] = "QtyMolds";
	$fdata["ownerTable"] = "prodgrp";
	$fdata["Label"] = "Qty Molds"; 
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
	
		$fdata["strField"] = "QtyMolds"; 
		$fdata["FullName"] = "QtyMolds";
	
		
		
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
	
		
		
	$tdataprodgrp["QtyMolds"] = $fdata;
//	MouldsPerDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "MouldsPerDay";
	$fdata["GoodName"] = "MouldsPerDay";
	$fdata["ownerTable"] = "prodgrp";
	$fdata["Label"] = "Moulds Per Day"; 
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
	
		$fdata["strField"] = "MouldsPerDay"; 
		$fdata["FullName"] = "MouldsPerDay";
	
		
		
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
	
		
		
	$tdataprodgrp["MouldsPerDay"] = $fdata;
//	Interest
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Interest";
	$fdata["GoodName"] = "Interest";
	$fdata["ownerTable"] = "prodgrp";
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
	
		
		
	$tdataprodgrp["Interest"] = $fdata;
//	Period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Period";
	$fdata["GoodName"] = "Period";
	$fdata["ownerTable"] = "prodgrp";
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
	
		
		
	$tdataprodgrp["Period"] = $fdata;
//	DownPay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "DownPay";
	$fdata["GoodName"] = "DownPay";
	$fdata["ownerTable"] = "prodgrp";
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
	
		
		
	$tdataprodgrp["DownPay"] = $fdata;
//	MonthsOfCap
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "MonthsOfCap";
	$fdata["GoodName"] = "MonthsOfCap";
	$fdata["ownerTable"] = "prodgrp";
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
	
		
		
	$tdataprodgrp["MonthsOfCap"] = $fdata;
//	Waste
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Waste";
	$fdata["GoodName"] = "Waste";
	$fdata["ownerTable"] = "prodgrp";
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
	
		
		
	$tdataprodgrp["Waste"] = $fdata;
//	Maint
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Maint";
	$fdata["GoodName"] = "Maint";
	$fdata["ownerTable"] = "prodgrp";
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
	
		
		
	$tdataprodgrp["Maint"] = $fdata;
//	ItemNotes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "ItemNotes";
	$fdata["GoodName"] = "ItemNotes";
	$fdata["ownerTable"] = "prodgrp";
	$fdata["Label"] = "Item Notes"; 
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
	
		$fdata["strField"] = "ItemNotes"; 
		$fdata["FullName"] = "ItemNotes";
	
		
		
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
			$edata["EditParams"].= " maxlength=1500";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprodgrp["ItemNotes"] = $fdata;
//	CuringTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "CuringTime";
	$fdata["GoodName"] = "CuringTime";
	$fdata["ownerTable"] = "prodgrp";
	$fdata["Label"] = "Curing Time"; 
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
	
		$fdata["strField"] = "CuringTime"; 
		$fdata["FullName"] = "CuringTime";
	
		
		
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
	
		
		
	$tdataprodgrp["CuringTime"] = $fdata;
//	GAP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "GAP";
	$fdata["GoodName"] = "GAP";
	$fdata["ownerTable"] = "prodgrp";
	$fdata["Label"] = "GAP"; 
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
	
		$fdata["strField"] = "GAP"; 
		$fdata["FullName"] = "GAP";
	
		
		
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
	
		
		
	$tdataprodgrp["GAP"] = $fdata;

	
$tables_data["prodgrp"]=&$tdataprodgrp;
$field_labels["prodgrp"] = &$fieldLabelsprodgrp;
$fieldToolTips["prodgrp"] = &$fieldToolTipsprodgrp;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["prodgrp"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["prodgrp"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_prodgrp()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ProdGrpCode,   ThaiProductGroup,   EngProductGroup,   MarkDownWholesale,   MarkDownRetail,   DaysWorked,   NumberWorkers,   QtyMolds,   MouldsPerDay,   Interest,   Period,   DownPay,   MonthsOfCap,   Waste,   Maint,   ItemNotes,   CuringTime,   GAP";
$proto0["m_strFrom"] = "FROM prodgrp";
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
	"m_strTable" => "prodgrp"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ThaiProductGroup",
	"m_strTable" => "prodgrp"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "EngProductGroup",
	"m_strTable" => "prodgrp"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "MarkDownWholesale",
	"m_strTable" => "prodgrp"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "MarkDownRetail",
	"m_strTable" => "prodgrp"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "DaysWorked",
	"m_strTable" => "prodgrp"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "NumberWorkers",
	"m_strTable" => "prodgrp"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "QtyMolds",
	"m_strTable" => "prodgrp"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "MouldsPerDay",
	"m_strTable" => "prodgrp"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Interest",
	"m_strTable" => "prodgrp"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Period",
	"m_strTable" => "prodgrp"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "DownPay",
	"m_strTable" => "prodgrp"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "MonthsOfCap",
	"m_strTable" => "prodgrp"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "Waste",
	"m_strTable" => "prodgrp"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "Maint",
	"m_strTable" => "prodgrp"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "ItemNotes",
	"m_strTable" => "prodgrp"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "CuringTime",
	"m_strTable" => "prodgrp"
));

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "GAP",
	"m_strTable" => "prodgrp"
));

$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto41=array();
$proto41["m_link"] = "SQLL_MAIN";
			$proto42=array();
$proto42["m_strName"] = "prodgrp";
$proto42["m_columns"] = array();
$proto42["m_columns"][] = "ProdGrpCode";
$proto42["m_columns"][] = "ThaiProductGroup";
$proto42["m_columns"][] = "EngProductGroup";
$proto42["m_columns"][] = "MarkDownWholesale";
$proto42["m_columns"][] = "MarkDownRetail";
$proto42["m_columns"][] = "DaysWorked";
$proto42["m_columns"][] = "NumberWorkers";
$proto42["m_columns"][] = "QtyMolds";
$proto42["m_columns"][] = "MouldsPerDay";
$proto42["m_columns"][] = "Interest";
$proto42["m_columns"][] = "Period";
$proto42["m_columns"][] = "DownPay";
$proto42["m_columns"][] = "MonthsOfCap";
$proto42["m_columns"][] = "Waste";
$proto42["m_columns"][] = "Maint";
$proto42["m_columns"][] = "ItemNotes";
$proto42["m_columns"][] = "CuringTime";
$proto42["m_columns"][] = "GAP";
$obj = new SQLTable($proto42);

$proto41["m_table"] = $obj;
$proto41["m_alias"] = "";
$proto43=array();
$proto43["m_sql"] = "";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
$proto43["m_strCase"] = "";
$proto43["m_havingmode"] = "0";
$proto43["m_inBrackets"] = "0";
$proto43["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto43);

$proto41["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto41);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_prodgrp = createSqlQuery_prodgrp();
																		$tdataprodgrp[".sqlquery"] = $queryData_prodgrp;
	
if(isset($tdataprodgrp["field2"])){
	$tdataprodgrp["field2"]["LookupTable"] = "carscars_view";
	$tdataprodgrp["field2"]["LookupOrderBy"] = "name";
	$tdataprodgrp["field2"]["LookupType"] = 4;
	$tdataprodgrp["field2"]["LinkField"] = "email";
	$tdataprodgrp["field2"]["DisplayField"] = "name";
	$tdataprodgrp[".hasCustomViewField"] = true;
}

$tableEvents["prodgrp"] = new eventsBase;
$tdataprodgrp[".hasEvents"] = false;

$cipherer = new RunnerCipherer("prodgrp");

?>
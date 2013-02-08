<?php
require_once(getabspath("classes/cipherer.php"));
$tdataprodcosts = array();
	$tdataprodcosts[".NumberOfChars"] = 80; 
	$tdataprodcosts[".ShortName"] = "prodcosts";
	$tdataprodcosts[".OwnerID"] = "";
	$tdataprodcosts[".OriginalTable"] = "prodcosts";

//	field labels
$fieldLabelsprodcosts = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsprodcosts["English"] = array();
	$fieldToolTipsprodcosts["English"] = array();
	$fieldLabelsprodcosts["English"]["ProdGrpCode"] = "Prod Grp Code";
	$fieldToolTipsprodcosts["English"]["ProdGrpCode"] = "";
	$fieldLabelsprodcosts["English"]["Status"] = "Status";
	$fieldToolTipsprodcosts["English"]["Status"] = "";
	$fieldLabelsprodcosts["English"]["ProdNo"] = "Prod No";
	$fieldToolTipsprodcosts["English"]["ProdNo"] = "";
	$fieldLabelsprodcosts["English"]["CostType"] = "Cost Type";
	$fieldToolTipsprodcosts["English"]["CostType"] = "";
	$fieldLabelsprodcosts["English"]["EngName"] = "Eng Name";
	$fieldToolTipsprodcosts["English"]["EngName"] = "";
	$fieldLabelsprodcosts["English"]["ThaiName"] = "Thai Name";
	$fieldToolTipsprodcosts["English"]["ThaiName"] = "";
	$fieldLabelsprodcosts["English"]["Qtty"] = "Qtty";
	$fieldToolTipsprodcosts["English"]["Qtty"] = "";
	$fieldLabelsprodcosts["English"]["PieceCost"] = "Piece Cost";
	$fieldToolTipsprodcosts["English"]["PieceCost"] = "";
	$fieldLabelsprodcosts["English"]["SortOrder"] = "Sort Order";
	$fieldToolTipsprodcosts["English"]["SortOrder"] = "";
	$fieldLabelsprodcosts["English"]["Cost"] = "Cost";
	$fieldToolTipsprodcosts["English"]["Cost"] = "";
	$fieldLabelsprodcosts["English"]["UnitEngRpt"] = "Unit Eng Rpt";
	$fieldToolTipsprodcosts["English"]["UnitEngRpt"] = "";
	$fieldLabelsprodcosts["English"]["UnitThaiRpt"] = "Unit Thai Rpt";
	$fieldToolTipsprodcosts["English"]["UnitThaiRpt"] = "";
	$fieldLabelsprodcosts["English"]["CompPurchaseUnitEn"] = "Comp Purchase Unit En";
	$fieldToolTipsprodcosts["English"]["CompPurchaseUnitEn"] = "";
	$fieldLabelsprodcosts["English"]["CostYear"] = "Cost Year";
	$fieldToolTipsprodcosts["English"]["CostYear"] = "";
	$fieldLabelsprodcosts["English"]["CostMonth"] = "Cost Month";
	$fieldToolTipsprodcosts["English"]["CostMonth"] = "";
	$fieldLabelsprodcosts["English"]["PercentCost"] = "Percent Cost";
	$fieldToolTipsprodcosts["English"]["PercentCost"] = "";
	if (count($fieldToolTipsprodcosts["English"]))
		$tdataprodcosts[".isUseToolTips"] = true;
}
	
	
	$tdataprodcosts[".NCSearch"] = true;



$tdataprodcosts[".shortTableName"] = "prodcosts";
$tdataprodcosts[".nSecOptions"] = 0;
$tdataprodcosts[".recsPerRowList"] = 1;
$tdataprodcosts[".mainTableOwnerID"] = "";
$tdataprodcosts[".moveNext"] = 1;
$tdataprodcosts[".nType"] = 0;

$tdataprodcosts[".strOriginalTableName"] = "prodcosts";




$tdataprodcosts[".showAddInPopup"] = false;

$tdataprodcosts[".showEditInPopup"] = false;

$tdataprodcosts[".showViewInPopup"] = false;

$tdataprodcosts[".fieldsForRegister"] = array();

$tdataprodcosts[".listAjax"] = false;

	$tdataprodcosts[".audit"] = false;

	$tdataprodcosts[".locking"] = false;

$tdataprodcosts[".listIcons"] = true;

$tdataprodcosts[".exportTo"] = true;

$tdataprodcosts[".printFriendly"] = true;


$tdataprodcosts[".showSimpleSearchOptions"] = false;

$tdataprodcosts[".showSearchPanel"] = true;

if (isMobile())
	$tdataprodcosts[".isUseAjaxSuggest"] = false;
else 
	$tdataprodcosts[".isUseAjaxSuggest"] = true;

$tdataprodcosts[".rowHighlite"] = true;

// button handlers file names

$tdataprodcosts[".addPageEvents"] = false;

// use timepicker for search panel
$tdataprodcosts[".isUseTimeForSearch"] = false;




$tdataprodcosts[".allSearchFields"] = array();

$tdataprodcosts[".allSearchFields"][] = "ProdGrpCode";
$tdataprodcosts[".allSearchFields"][] = "Status";
$tdataprodcosts[".allSearchFields"][] = "ProdNo";
$tdataprodcosts[".allSearchFields"][] = "CostType";
$tdataprodcosts[".allSearchFields"][] = "EngName";
$tdataprodcosts[".allSearchFields"][] = "ThaiName";
$tdataprodcosts[".allSearchFields"][] = "Qtty";
$tdataprodcosts[".allSearchFields"][] = "PieceCost";
$tdataprodcosts[".allSearchFields"][] = "SortOrder";
$tdataprodcosts[".allSearchFields"][] = "Cost";
$tdataprodcosts[".allSearchFields"][] = "UnitEngRpt";
$tdataprodcosts[".allSearchFields"][] = "UnitThaiRpt";
$tdataprodcosts[".allSearchFields"][] = "CompPurchaseUnitEn";
$tdataprodcosts[".allSearchFields"][] = "CostYear";
$tdataprodcosts[".allSearchFields"][] = "CostMonth";
$tdataprodcosts[".allSearchFields"][] = "PercentCost";

$tdataprodcosts[".googleLikeFields"][] = "ProdGrpCode";
$tdataprodcosts[".googleLikeFields"][] = "Status";
$tdataprodcosts[".googleLikeFields"][] = "ProdNo";
$tdataprodcosts[".googleLikeFields"][] = "CostType";
$tdataprodcosts[".googleLikeFields"][] = "EngName";
$tdataprodcosts[".googleLikeFields"][] = "ThaiName";
$tdataprodcosts[".googleLikeFields"][] = "Qtty";
$tdataprodcosts[".googleLikeFields"][] = "PieceCost";
$tdataprodcosts[".googleLikeFields"][] = "SortOrder";
$tdataprodcosts[".googleLikeFields"][] = "Cost";
$tdataprodcosts[".googleLikeFields"][] = "UnitEngRpt";
$tdataprodcosts[".googleLikeFields"][] = "UnitThaiRpt";
$tdataprodcosts[".googleLikeFields"][] = "CompPurchaseUnitEn";
$tdataprodcosts[".googleLikeFields"][] = "CostYear";
$tdataprodcosts[".googleLikeFields"][] = "CostMonth";
$tdataprodcosts[".googleLikeFields"][] = "PercentCost";


$tdataprodcosts[".advSearchFields"][] = "ProdGrpCode";
$tdataprodcosts[".advSearchFields"][] = "Status";
$tdataprodcosts[".advSearchFields"][] = "ProdNo";
$tdataprodcosts[".advSearchFields"][] = "CostType";
$tdataprodcosts[".advSearchFields"][] = "EngName";
$tdataprodcosts[".advSearchFields"][] = "ThaiName";
$tdataprodcosts[".advSearchFields"][] = "Qtty";
$tdataprodcosts[".advSearchFields"][] = "PieceCost";
$tdataprodcosts[".advSearchFields"][] = "SortOrder";
$tdataprodcosts[".advSearchFields"][] = "Cost";
$tdataprodcosts[".advSearchFields"][] = "UnitEngRpt";
$tdataprodcosts[".advSearchFields"][] = "UnitThaiRpt";
$tdataprodcosts[".advSearchFields"][] = "CompPurchaseUnitEn";
$tdataprodcosts[".advSearchFields"][] = "CostYear";
$tdataprodcosts[".advSearchFields"][] = "CostMonth";
$tdataprodcosts[".advSearchFields"][] = "PercentCost";

$tdataprodcosts[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataprodcosts[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataprodcosts[".strOrderBy"] = $tstrOrderBy;

$tdataprodcosts[".orderindexes"] = array();

$tdataprodcosts[".sqlHead"] = "SELECT ProdGrpCode,  Status,  ProdNo,  CostType,  EngName,  ThaiName,  Qtty,  PieceCost,  SortOrder,  Cost,  UnitEngRpt,  UnitThaiRpt,  CompPurchaseUnitEn,  CostYear,  CostMonth,  PercentCost";
$tdataprodcosts[".sqlFrom"] = "FROM prodcosts";
$tdataprodcosts[".sqlWhereExpr"] = "";
$tdataprodcosts[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataprodcosts[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataprodcosts[".arrGroupsPerPage"] = $arrGPP;

$tableKeysprodcosts = array();
$tdataprodcosts[".Keys"] = $tableKeysprodcosts;

$tdataprodcosts[".listFields"] = array();
$tdataprodcosts[".listFields"][] = "ProdGrpCode";
$tdataprodcosts[".listFields"][] = "Status";
$tdataprodcosts[".listFields"][] = "ProdNo";
$tdataprodcosts[".listFields"][] = "CostType";
$tdataprodcosts[".listFields"][] = "EngName";
$tdataprodcosts[".listFields"][] = "ThaiName";
$tdataprodcosts[".listFields"][] = "Qtty";
$tdataprodcosts[".listFields"][] = "PieceCost";
$tdataprodcosts[".listFields"][] = "SortOrder";
$tdataprodcosts[".listFields"][] = "Cost";
$tdataprodcosts[".listFields"][] = "UnitEngRpt";
$tdataprodcosts[".listFields"][] = "UnitThaiRpt";
$tdataprodcosts[".listFields"][] = "CompPurchaseUnitEn";
$tdataprodcosts[".listFields"][] = "CostYear";
$tdataprodcosts[".listFields"][] = "CostMonth";
$tdataprodcosts[".listFields"][] = "PercentCost";

$tdataprodcosts[".viewFields"] = array();
$tdataprodcosts[".viewFields"][] = "ProdGrpCode";
$tdataprodcosts[".viewFields"][] = "Status";
$tdataprodcosts[".viewFields"][] = "ProdNo";
$tdataprodcosts[".viewFields"][] = "CostType";
$tdataprodcosts[".viewFields"][] = "EngName";
$tdataprodcosts[".viewFields"][] = "ThaiName";
$tdataprodcosts[".viewFields"][] = "Qtty";
$tdataprodcosts[".viewFields"][] = "PieceCost";
$tdataprodcosts[".viewFields"][] = "SortOrder";
$tdataprodcosts[".viewFields"][] = "Cost";
$tdataprodcosts[".viewFields"][] = "UnitEngRpt";
$tdataprodcosts[".viewFields"][] = "UnitThaiRpt";
$tdataprodcosts[".viewFields"][] = "CompPurchaseUnitEn";
$tdataprodcosts[".viewFields"][] = "CostYear";
$tdataprodcosts[".viewFields"][] = "CostMonth";
$tdataprodcosts[".viewFields"][] = "PercentCost";

$tdataprodcosts[".addFields"] = array();
$tdataprodcosts[".addFields"][] = "ProdGrpCode";
$tdataprodcosts[".addFields"][] = "Status";
$tdataprodcosts[".addFields"][] = "ProdNo";
$tdataprodcosts[".addFields"][] = "CostType";
$tdataprodcosts[".addFields"][] = "EngName";
$tdataprodcosts[".addFields"][] = "ThaiName";
$tdataprodcosts[".addFields"][] = "Qtty";
$tdataprodcosts[".addFields"][] = "PieceCost";
$tdataprodcosts[".addFields"][] = "SortOrder";
$tdataprodcosts[".addFields"][] = "Cost";
$tdataprodcosts[".addFields"][] = "UnitEngRpt";
$tdataprodcosts[".addFields"][] = "UnitThaiRpt";
$tdataprodcosts[".addFields"][] = "CompPurchaseUnitEn";
$tdataprodcosts[".addFields"][] = "CostYear";
$tdataprodcosts[".addFields"][] = "CostMonth";
$tdataprodcosts[".addFields"][] = "PercentCost";

$tdataprodcosts[".inlineAddFields"] = array();
$tdataprodcosts[".inlineAddFields"][] = "ProdGrpCode";
$tdataprodcosts[".inlineAddFields"][] = "Status";
$tdataprodcosts[".inlineAddFields"][] = "ProdNo";
$tdataprodcosts[".inlineAddFields"][] = "CostType";
$tdataprodcosts[".inlineAddFields"][] = "EngName";
$tdataprodcosts[".inlineAddFields"][] = "ThaiName";
$tdataprodcosts[".inlineAddFields"][] = "Qtty";
$tdataprodcosts[".inlineAddFields"][] = "PieceCost";
$tdataprodcosts[".inlineAddFields"][] = "SortOrder";
$tdataprodcosts[".inlineAddFields"][] = "Cost";
$tdataprodcosts[".inlineAddFields"][] = "UnitEngRpt";
$tdataprodcosts[".inlineAddFields"][] = "UnitThaiRpt";
$tdataprodcosts[".inlineAddFields"][] = "CompPurchaseUnitEn";
$tdataprodcosts[".inlineAddFields"][] = "CostYear";
$tdataprodcosts[".inlineAddFields"][] = "CostMonth";
$tdataprodcosts[".inlineAddFields"][] = "PercentCost";

$tdataprodcosts[".editFields"] = array();
$tdataprodcosts[".editFields"][] = "ProdGrpCode";
$tdataprodcosts[".editFields"][] = "Status";
$tdataprodcosts[".editFields"][] = "ProdNo";
$tdataprodcosts[".editFields"][] = "CostType";
$tdataprodcosts[".editFields"][] = "EngName";
$tdataprodcosts[".editFields"][] = "ThaiName";
$tdataprodcosts[".editFields"][] = "Qtty";
$tdataprodcosts[".editFields"][] = "PieceCost";
$tdataprodcosts[".editFields"][] = "SortOrder";
$tdataprodcosts[".editFields"][] = "Cost";
$tdataprodcosts[".editFields"][] = "UnitEngRpt";
$tdataprodcosts[".editFields"][] = "UnitThaiRpt";
$tdataprodcosts[".editFields"][] = "CompPurchaseUnitEn";
$tdataprodcosts[".editFields"][] = "CostYear";
$tdataprodcosts[".editFields"][] = "CostMonth";
$tdataprodcosts[".editFields"][] = "PercentCost";

$tdataprodcosts[".inlineEditFields"] = array();
$tdataprodcosts[".inlineEditFields"][] = "ProdGrpCode";
$tdataprodcosts[".inlineEditFields"][] = "Status";
$tdataprodcosts[".inlineEditFields"][] = "ProdNo";
$tdataprodcosts[".inlineEditFields"][] = "CostType";
$tdataprodcosts[".inlineEditFields"][] = "EngName";
$tdataprodcosts[".inlineEditFields"][] = "ThaiName";
$tdataprodcosts[".inlineEditFields"][] = "Qtty";
$tdataprodcosts[".inlineEditFields"][] = "PieceCost";
$tdataprodcosts[".inlineEditFields"][] = "SortOrder";
$tdataprodcosts[".inlineEditFields"][] = "Cost";
$tdataprodcosts[".inlineEditFields"][] = "UnitEngRpt";
$tdataprodcosts[".inlineEditFields"][] = "UnitThaiRpt";
$tdataprodcosts[".inlineEditFields"][] = "CompPurchaseUnitEn";
$tdataprodcosts[".inlineEditFields"][] = "CostYear";
$tdataprodcosts[".inlineEditFields"][] = "CostMonth";
$tdataprodcosts[".inlineEditFields"][] = "PercentCost";

$tdataprodcosts[".exportFields"] = array();
$tdataprodcosts[".exportFields"][] = "ProdGrpCode";
$tdataprodcosts[".exportFields"][] = "Status";
$tdataprodcosts[".exportFields"][] = "ProdNo";
$tdataprodcosts[".exportFields"][] = "CostType";
$tdataprodcosts[".exportFields"][] = "EngName";
$tdataprodcosts[".exportFields"][] = "ThaiName";
$tdataprodcosts[".exportFields"][] = "Qtty";
$tdataprodcosts[".exportFields"][] = "PieceCost";
$tdataprodcosts[".exportFields"][] = "SortOrder";
$tdataprodcosts[".exportFields"][] = "Cost";
$tdataprodcosts[".exportFields"][] = "UnitEngRpt";
$tdataprodcosts[".exportFields"][] = "UnitThaiRpt";
$tdataprodcosts[".exportFields"][] = "CompPurchaseUnitEn";
$tdataprodcosts[".exportFields"][] = "CostYear";
$tdataprodcosts[".exportFields"][] = "CostMonth";
$tdataprodcosts[".exportFields"][] = "PercentCost";

$tdataprodcosts[".printFields"] = array();
$tdataprodcosts[".printFields"][] = "ProdGrpCode";
$tdataprodcosts[".printFields"][] = "Status";
$tdataprodcosts[".printFields"][] = "ProdNo";
$tdataprodcosts[".printFields"][] = "CostType";
$tdataprodcosts[".printFields"][] = "EngName";
$tdataprodcosts[".printFields"][] = "ThaiName";
$tdataprodcosts[".printFields"][] = "Qtty";
$tdataprodcosts[".printFields"][] = "PieceCost";
$tdataprodcosts[".printFields"][] = "SortOrder";
$tdataprodcosts[".printFields"][] = "Cost";
$tdataprodcosts[".printFields"][] = "UnitEngRpt";
$tdataprodcosts[".printFields"][] = "UnitThaiRpt";
$tdataprodcosts[".printFields"][] = "CompPurchaseUnitEn";
$tdataprodcosts[".printFields"][] = "CostYear";
$tdataprodcosts[".printFields"][] = "CostMonth";
$tdataprodcosts[".printFields"][] = "PercentCost";

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
	
		
		
	$tdataprodcosts["ProdGrpCode"] = $fdata;
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
			$edata["EditParams"].= " maxlength=1";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprodcosts["Status"] = $fdata;
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
	
		
		
	$tdataprodcosts["ProdNo"] = $fdata;
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
			$edata["EditParams"].= " maxlength=20";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataprodcosts["CostType"] = $fdata;
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
	
		
		
	$tdataprodcosts["EngName"] = $fdata;
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
	
		
		
	$tdataprodcosts["ThaiName"] = $fdata;
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
	
		
		
	$tdataprodcosts["Qtty"] = $fdata;
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
	
		
		
	$tdataprodcosts["PieceCost"] = $fdata;
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
	
		
		
	$tdataprodcosts["SortOrder"] = $fdata;
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
	
		
		
	$tdataprodcosts["Cost"] = $fdata;
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
	
		
		
	$tdataprodcosts["UnitEngRpt"] = $fdata;
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
	
		
		
	$tdataprodcosts["UnitThaiRpt"] = $fdata;
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
	
		
		
	$tdataprodcosts["CompPurchaseUnitEn"] = $fdata;
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
	
		
		
	$tdataprodcosts["CostYear"] = $fdata;
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
	
		
		
	$tdataprodcosts["CostMonth"] = $fdata;
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
	
		
		
	$tdataprodcosts["PercentCost"] = $fdata;

	
$tables_data["prodcosts"]=&$tdataprodcosts;
$field_labels["prodcosts"] = &$fieldLabelsprodcosts;
$fieldToolTips["prodcosts"] = &$fieldToolTipsprodcosts;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["prodcosts"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["prodcosts"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="products";
	$masterParams["mDataSourceTable"]="products";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "products";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["prodcosts"][$mIndex] = $masterParams;	
		$masterTablesData["prodcosts"][$mIndex]["masterKeys"][]="ProdNo";
		$masterTablesData["prodcosts"][$mIndex]["detailKeys"][]="ProdNo";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_prodcosts()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ProdGrpCode,  Status,  ProdNo,  CostType,  EngName,  ThaiName,  Qtty,  PieceCost,  SortOrder,  Cost,  UnitEngRpt,  UnitThaiRpt,  CompPurchaseUnitEn,  CostYear,  CostMonth,  PercentCost";
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
$queryData_prodcosts = createSqlQuery_prodcosts();
																$tdataprodcosts[".sqlquery"] = $queryData_prodcosts;
	
if(isset($tdataprodcosts["field2"])){
	$tdataprodcosts["field2"]["LookupTable"] = "carscars_view";
	$tdataprodcosts["field2"]["LookupOrderBy"] = "name";
	$tdataprodcosts["field2"]["LookupType"] = 4;
	$tdataprodcosts["field2"]["LinkField"] = "email";
	$tdataprodcosts["field2"]["DisplayField"] = "name";
	$tdataprodcosts[".hasCustomViewField"] = true;
}

$tableEvents["prodcosts"] = new eventsBase;
$tdataprodcosts[".hasEvents"] = false;

$cipherer = new RunnerCipherer("prodcosts");

?>
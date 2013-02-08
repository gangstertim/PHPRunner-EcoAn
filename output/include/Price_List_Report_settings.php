<?php
require_once(getabspath("classes/cipherer.php"));
$tdataPrice_List_Report = array();
	$tdataPrice_List_Report[".NumberOfChars"] = 80; 
	$tdataPrice_List_Report[".ShortName"] = "Price_List_Report";
	$tdataPrice_List_Report[".OwnerID"] = "";
	$tdataPrice_List_Report[".OriginalTable"] = "prodcosts";

//	field labels
$fieldLabelsPrice_List_Report = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPrice_List_Report["English"] = array();
	$fieldToolTipsPrice_List_Report["English"] = array();
	$fieldLabelsPrice_List_Report["English"]["ThaiName"] = "Thai Name";
	$fieldToolTipsPrice_List_Report["English"]["ThaiName"] = "";
	$fieldLabelsPrice_List_Report["English"]["EngName"] = "Eng Name";
	$fieldToolTipsPrice_List_Report["English"]["EngName"] = "";
	$fieldLabelsPrice_List_Report["English"]["ProdNo"] = "Prod No";
	$fieldToolTipsPrice_List_Report["English"]["ProdNo"] = "";
	$fieldLabelsPrice_List_Report["English"]["PieceCost"] = "Piece Cost";
	$fieldToolTipsPrice_List_Report["English"]["PieceCost"] = "";
	$fieldLabelsPrice_List_Report["English"]["Cost"] = "Cost";
	$fieldToolTipsPrice_List_Report["English"]["Cost"] = "";
	$fieldLabelsPrice_List_Report["English"]["ProdEngName"] = "Prod Eng Name";
	$fieldToolTipsPrice_List_Report["English"]["ProdEngName"] = "";
	$fieldLabelsPrice_List_Report["English"]["ProdThaiName"] = "Prod Thai Name";
	$fieldToolTipsPrice_List_Report["English"]["ProdThaiName"] = "";
	$fieldLabelsPrice_List_Report["English"]["CostYear"] = "Cost Year";
	$fieldToolTipsPrice_List_Report["English"]["CostYear"] = "";
	$fieldLabelsPrice_List_Report["English"]["CostMonth"] = "Cost Month";
	$fieldToolTipsPrice_List_Report["English"]["CostMonth"] = "";
	$fieldLabelsPrice_List_Report["English"]["PercentCost"] = "Percent Cost";
	$fieldToolTipsPrice_List_Report["English"]["PercentCost"] = "";
	$fieldLabelsPrice_List_Report["English"]["Qtty"] = "Qtty";
	$fieldToolTipsPrice_List_Report["English"]["Qtty"] = "";
	$fieldLabelsPrice_List_Report["English"]["CostType"] = "Cost Type";
	$fieldToolTipsPrice_List_Report["English"]["CostType"] = "";
	$fieldLabelsPrice_List_Report["English"]["UnitEngRpt"] = "Unit Eng Rpt";
	$fieldToolTipsPrice_List_Report["English"]["UnitEngRpt"] = "";
	$fieldLabelsPrice_List_Report["English"]["SortOrder"] = "Sort Order";
	$fieldToolTipsPrice_List_Report["English"]["SortOrder"] = "";
	if (count($fieldToolTipsPrice_List_Report["English"]))
		$tdataPrice_List_Report[".isUseToolTips"] = true;
}
	
	
	$tdataPrice_List_Report[".NCSearch"] = true;



$tdataPrice_List_Report[".shortTableName"] = "Price_List_Report";
$tdataPrice_List_Report[".nSecOptions"] = 0;
$tdataPrice_List_Report[".recsPerRowList"] = 1;
$tdataPrice_List_Report[".mainTableOwnerID"] = "";
$tdataPrice_List_Report[".moveNext"] = 1;
$tdataPrice_List_Report[".nType"] = 2;

$tdataPrice_List_Report[".strOriginalTableName"] = "prodcosts";




$tdataPrice_List_Report[".showAddInPopup"] = false;

$tdataPrice_List_Report[".showEditInPopup"] = false;

$tdataPrice_List_Report[".showViewInPopup"] = false;

$tdataPrice_List_Report[".fieldsForRegister"] = array();

$tdataPrice_List_Report[".listAjax"] = false;

	$tdataPrice_List_Report[".audit"] = false;

	$tdataPrice_List_Report[".locking"] = false;

$tdataPrice_List_Report[".listIcons"] = true;

$tdataPrice_List_Report[".exportTo"] = true;

$tdataPrice_List_Report[".printFriendly"] = true;


$tdataPrice_List_Report[".showSimpleSearchOptions"] = false;

$tdataPrice_List_Report[".showSearchPanel"] = true;

if (isMobile())
	$tdataPrice_List_Report[".isUseAjaxSuggest"] = false;
else 
	$tdataPrice_List_Report[".isUseAjaxSuggest"] = true;


// button handlers file names

$tdataPrice_List_Report[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPrice_List_Report[".isUseTimeForSearch"] = false;




$tdataPrice_List_Report[".allSearchFields"] = array();

$tdataPrice_List_Report[".allSearchFields"][] = "ProdNo";
$tdataPrice_List_Report[".allSearchFields"][] = "EngName";
$tdataPrice_List_Report[".allSearchFields"][] = "ThaiName";
$tdataPrice_List_Report[".allSearchFields"][] = "ProdEngName";
$tdataPrice_List_Report[".allSearchFields"][] = "ProdThaiName";

$tdataPrice_List_Report[".googleLikeFields"][] = "ProdNo";
$tdataPrice_List_Report[".googleLikeFields"][] = "EngName";
$tdataPrice_List_Report[".googleLikeFields"][] = "ThaiName";
$tdataPrice_List_Report[".googleLikeFields"][] = "ProdEngName";
$tdataPrice_List_Report[".googleLikeFields"][] = "ProdThaiName";
$tdataPrice_List_Report[".googleLikeFields"][] = "CostYear";
$tdataPrice_List_Report[".googleLikeFields"][] = "CostMonth";
$tdataPrice_List_Report[".googleLikeFields"][] = "PercentCost";
$tdataPrice_List_Report[".googleLikeFields"][] = "Qtty";
$tdataPrice_List_Report[".googleLikeFields"][] = "CostType";
$tdataPrice_List_Report[".googleLikeFields"][] = "UnitEngRpt";
$tdataPrice_List_Report[".googleLikeFields"][] = "SortOrder";

$tdataPrice_List_Report[".panelSearchFields"][] = "ProdNo";

$tdataPrice_List_Report[".advSearchFields"][] = "ProdNo";
$tdataPrice_List_Report[".advSearchFields"][] = "EngName";
$tdataPrice_List_Report[".advSearchFields"][] = "ThaiName";
$tdataPrice_List_Report[".advSearchFields"][] = "ProdEngName";
$tdataPrice_List_Report[".advSearchFields"][] = "ProdThaiName";
$tdataPrice_List_Report[".advSearchFields"][] = "CostYear";
$tdataPrice_List_Report[".advSearchFields"][] = "CostMonth";
$tdataPrice_List_Report[".advSearchFields"][] = "PercentCost";
$tdataPrice_List_Report[".advSearchFields"][] = "Qtty";
$tdataPrice_List_Report[".advSearchFields"][] = "CostType";
$tdataPrice_List_Report[".advSearchFields"][] = "UnitEngRpt";
$tdataPrice_List_Report[".advSearchFields"][] = "SortOrder";

$tdataPrice_List_Report[".isTableType"] = "report";

$tdataPrice_List_Report[".reportGroupFields"] = true;
	



// Access doesn't support subqueries from the same table as main




$tstrOrderBy = "ORDER BY prodcosts.ProdNo, prodcosts.CostType";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPrice_List_Report[".strOrderBy"] = $tstrOrderBy;

$tdataPrice_List_Report[".orderindexes"] = array();
$tdataPrice_List_Report[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "prodcosts.ProdNo");
$tdataPrice_List_Report[".orderindexes"][] = array(12, (1 ? "ASC" : "DESC"), "prodcosts.CostType");

$tdataPrice_List_Report[".sqlHead"] = "SELECT prodcosts.ProdNo,  prodcosts.EngName,  prodcosts.ThaiName,  prodcosts.PieceCost,  prodcosts.Cost,  products.ProdEngName,  products.ProdThaiName,  prodcosts.CostYear,  prodcosts.CostMonth,  prodcosts.PercentCost,  prodcosts.Qtty,  prodcosts.CostType,  prodcosts.UnitEngRpt,  prodcosts.SortOrder";
$tdataPrice_List_Report[".sqlFrom"] = "FROM prodcosts  INNER JOIN products ON prodcosts.ProdNo = products.ProdNo";
$tdataPrice_List_Report[".sqlWhereExpr"] = "";
$tdataPrice_List_Report[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPrice_List_Report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$tdataPrice_List_Report[".arrGroupsPerPage"] = $arrGPP;

$tableKeysPrice_List_Report = array();
$tdataPrice_List_Report[".Keys"] = $tableKeysPrice_List_Report;

$tdataPrice_List_Report[".listFields"] = array();
$tdataPrice_List_Report[".listFields"][] = "ProdNo";
$tdataPrice_List_Report[".listFields"][] = "EngName";
$tdataPrice_List_Report[".listFields"][] = "ThaiName";
$tdataPrice_List_Report[".listFields"][] = "PieceCost";
$tdataPrice_List_Report[".listFields"][] = "Cost";
$tdataPrice_List_Report[".listFields"][] = "ProdEngName";
$tdataPrice_List_Report[".listFields"][] = "ProdThaiName";
$tdataPrice_List_Report[".listFields"][] = "CostYear";
$tdataPrice_List_Report[".listFields"][] = "CostMonth";
$tdataPrice_List_Report[".listFields"][] = "PercentCost";
$tdataPrice_List_Report[".listFields"][] = "Qtty";
$tdataPrice_List_Report[".listFields"][] = "CostType";
$tdataPrice_List_Report[".listFields"][] = "UnitEngRpt";
$tdataPrice_List_Report[".listFields"][] = "SortOrder";

$tdataPrice_List_Report[".viewFields"] = array();
$tdataPrice_List_Report[".viewFields"][] = "ProdNo";
$tdataPrice_List_Report[".viewFields"][] = "EngName";
$tdataPrice_List_Report[".viewFields"][] = "ThaiName";
$tdataPrice_List_Report[".viewFields"][] = "PieceCost";
$tdataPrice_List_Report[".viewFields"][] = "Cost";
$tdataPrice_List_Report[".viewFields"][] = "ProdEngName";
$tdataPrice_List_Report[".viewFields"][] = "ProdThaiName";
$tdataPrice_List_Report[".viewFields"][] = "CostYear";
$tdataPrice_List_Report[".viewFields"][] = "CostMonth";
$tdataPrice_List_Report[".viewFields"][] = "PercentCost";
$tdataPrice_List_Report[".viewFields"][] = "Qtty";
$tdataPrice_List_Report[".viewFields"][] = "CostType";
$tdataPrice_List_Report[".viewFields"][] = "UnitEngRpt";
$tdataPrice_List_Report[".viewFields"][] = "SortOrder";

$tdataPrice_List_Report[".addFields"] = array();
$tdataPrice_List_Report[".addFields"][] = "ProdNo";
$tdataPrice_List_Report[".addFields"][] = "EngName";
$tdataPrice_List_Report[".addFields"][] = "ThaiName";
$tdataPrice_List_Report[".addFields"][] = "PieceCost";
$tdataPrice_List_Report[".addFields"][] = "Cost";
$tdataPrice_List_Report[".addFields"][] = "CostYear";
$tdataPrice_List_Report[".addFields"][] = "CostMonth";
$tdataPrice_List_Report[".addFields"][] = "PercentCost";
$tdataPrice_List_Report[".addFields"][] = "Qtty";
$tdataPrice_List_Report[".addFields"][] = "CostType";
$tdataPrice_List_Report[".addFields"][] = "UnitEngRpt";
$tdataPrice_List_Report[".addFields"][] = "SortOrder";

$tdataPrice_List_Report[".inlineAddFields"] = array();
$tdataPrice_List_Report[".inlineAddFields"][] = "ProdNo";
$tdataPrice_List_Report[".inlineAddFields"][] = "EngName";
$tdataPrice_List_Report[".inlineAddFields"][] = "ThaiName";
$tdataPrice_List_Report[".inlineAddFields"][] = "PieceCost";
$tdataPrice_List_Report[".inlineAddFields"][] = "Cost";
$tdataPrice_List_Report[".inlineAddFields"][] = "ProdEngName";
$tdataPrice_List_Report[".inlineAddFields"][] = "ProdThaiName";
$tdataPrice_List_Report[".inlineAddFields"][] = "CostYear";
$tdataPrice_List_Report[".inlineAddFields"][] = "CostMonth";
$tdataPrice_List_Report[".inlineAddFields"][] = "PercentCost";
$tdataPrice_List_Report[".inlineAddFields"][] = "Qtty";
$tdataPrice_List_Report[".inlineAddFields"][] = "CostType";
$tdataPrice_List_Report[".inlineAddFields"][] = "UnitEngRpt";
$tdataPrice_List_Report[".inlineAddFields"][] = "SortOrder";

$tdataPrice_List_Report[".editFields"] = array();
$tdataPrice_List_Report[".editFields"][] = "ProdNo";
$tdataPrice_List_Report[".editFields"][] = "EngName";
$tdataPrice_List_Report[".editFields"][] = "ThaiName";
$tdataPrice_List_Report[".editFields"][] = "PieceCost";
$tdataPrice_List_Report[".editFields"][] = "Cost";
$tdataPrice_List_Report[".editFields"][] = "CostYear";
$tdataPrice_List_Report[".editFields"][] = "CostMonth";
$tdataPrice_List_Report[".editFields"][] = "PercentCost";
$tdataPrice_List_Report[".editFields"][] = "Qtty";
$tdataPrice_List_Report[".editFields"][] = "CostType";
$tdataPrice_List_Report[".editFields"][] = "UnitEngRpt";
$tdataPrice_List_Report[".editFields"][] = "SortOrder";

$tdataPrice_List_Report[".inlineEditFields"] = array();
$tdataPrice_List_Report[".inlineEditFields"][] = "ProdNo";
$tdataPrice_List_Report[".inlineEditFields"][] = "EngName";
$tdataPrice_List_Report[".inlineEditFields"][] = "ThaiName";
$tdataPrice_List_Report[".inlineEditFields"][] = "PieceCost";
$tdataPrice_List_Report[".inlineEditFields"][] = "Cost";
$tdataPrice_List_Report[".inlineEditFields"][] = "ProdEngName";
$tdataPrice_List_Report[".inlineEditFields"][] = "ProdThaiName";
$tdataPrice_List_Report[".inlineEditFields"][] = "CostYear";
$tdataPrice_List_Report[".inlineEditFields"][] = "CostMonth";
$tdataPrice_List_Report[".inlineEditFields"][] = "PercentCost";
$tdataPrice_List_Report[".inlineEditFields"][] = "Qtty";
$tdataPrice_List_Report[".inlineEditFields"][] = "CostType";
$tdataPrice_List_Report[".inlineEditFields"][] = "UnitEngRpt";
$tdataPrice_List_Report[".inlineEditFields"][] = "SortOrder";

$tdataPrice_List_Report[".exportFields"] = array();
$tdataPrice_List_Report[".exportFields"][] = "ProdNo";
$tdataPrice_List_Report[".exportFields"][] = "EngName";
$tdataPrice_List_Report[".exportFields"][] = "ThaiName";
$tdataPrice_List_Report[".exportFields"][] = "PieceCost";
$tdataPrice_List_Report[".exportFields"][] = "Cost";
$tdataPrice_List_Report[".exportFields"][] = "ProdEngName";
$tdataPrice_List_Report[".exportFields"][] = "ProdThaiName";
$tdataPrice_List_Report[".exportFields"][] = "CostYear";
$tdataPrice_List_Report[".exportFields"][] = "CostMonth";
$tdataPrice_List_Report[".exportFields"][] = "PercentCost";
$tdataPrice_List_Report[".exportFields"][] = "Qtty";
$tdataPrice_List_Report[".exportFields"][] = "CostType";
$tdataPrice_List_Report[".exportFields"][] = "UnitEngRpt";
$tdataPrice_List_Report[".exportFields"][] = "SortOrder";

$tdataPrice_List_Report[".printFields"] = array();
$tdataPrice_List_Report[".printFields"][] = "ProdNo";
$tdataPrice_List_Report[".printFields"][] = "EngName";
$tdataPrice_List_Report[".printFields"][] = "ThaiName";
$tdataPrice_List_Report[".printFields"][] = "PieceCost";
$tdataPrice_List_Report[".printFields"][] = "Cost";
$tdataPrice_List_Report[".printFields"][] = "ProdEngName";
$tdataPrice_List_Report[".printFields"][] = "ProdThaiName";
$tdataPrice_List_Report[".printFields"][] = "CostYear";
$tdataPrice_List_Report[".printFields"][] = "CostMonth";
$tdataPrice_List_Report[".printFields"][] = "PercentCost";
$tdataPrice_List_Report[".printFields"][] = "Qtty";
$tdataPrice_List_Report[".printFields"][] = "CostType";
$tdataPrice_List_Report[".printFields"][] = "UnitEngRpt";
$tdataPrice_List_Report[".printFields"][] = "SortOrder";

//	ProdNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
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
		$fdata["FullName"] = "prodcosts.ProdNo";
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "ProdNo";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "ProdNo";
	
		
	$edata["LookupTable"] = "products";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataPrice_List_Report["ProdNo"] = $fdata;
//	EngName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
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
		$fdata["FullName"] = "prodcosts.EngName";
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "EngName";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "EngName";
	
		
	$edata["LookupTable"] = "prodcosts";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataPrice_List_Report["EngName"] = $fdata;
//	ThaiName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
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
		$fdata["FullName"] = "prodcosts.ThaiName";
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "ThaiName";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "ThaiName";
	
		
	$edata["LookupTable"] = "prodcosts";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataPrice_List_Report["ThaiName"] = $fdata;
//	PieceCost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
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
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "PieceCost"; 
		$fdata["FullName"] = "prodcosts.PieceCost";
	
		
		
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
	
		
		
	$tdataPrice_List_Report["PieceCost"] = $fdata;
//	Cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
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
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Cost"; 
		$fdata["FullName"] = "prodcosts.Cost";
	
		
		
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
	
		
		
	$tdataPrice_List_Report["Cost"] = $fdata;
//	ProdEngName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ProdEngName";
	$fdata["GoodName"] = "ProdEngName";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = "Prod Eng Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ProdEngName"; 
		$fdata["FullName"] = "products.ProdEngName";
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "ProdEngName";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "ProdEngName";
	
		
	$edata["LookupTable"] = "products";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataPrice_List_Report["ProdEngName"] = $fdata;
//	ProdThaiName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ProdThaiName";
	$fdata["GoodName"] = "ProdThaiName";
	$fdata["ownerTable"] = "products";
	$fdata["Label"] = "Prod Thai Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ProdThaiName"; 
		$fdata["FullName"] = "products.ProdThaiName";
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "ProdThaiName";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "ProdThaiName";
	
		
	$edata["LookupTable"] = "products";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataPrice_List_Report["ProdThaiName"] = $fdata;
//	CostYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
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
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "CostYear"; 
		$fdata["FullName"] = "prodcosts.CostYear";
	
		
		
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
	
		
		
	$tdataPrice_List_Report["CostYear"] = $fdata;
//	CostMonth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
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
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "CostMonth"; 
		$fdata["FullName"] = "prodcosts.CostMonth";
	
		
		
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
	
		
		
	$tdataPrice_List_Report["CostMonth"] = $fdata;
//	PercentCost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
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
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "PercentCost"; 
		$fdata["FullName"] = "prodcosts.PercentCost";
	
		
		
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
	
		
		
	$tdataPrice_List_Report["PercentCost"] = $fdata;
//	Qtty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
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
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Qtty"; 
		$fdata["FullName"] = "prodcosts.Qtty";
	
		
		
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
	
		
		
	$tdataPrice_List_Report["Qtty"] = $fdata;
//	CostType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
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
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "CostType"; 
		$fdata["FullName"] = "prodcosts.CostType";
	
		
		
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
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataPrice_List_Report["CostType"] = $fdata;
//	UnitEngRpt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
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
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "UnitEngRpt"; 
		$fdata["FullName"] = "prodcosts.UnitEngRpt";
	
		
		
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
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataPrice_List_Report["UnitEngRpt"] = $fdata;
//	SortOrder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
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
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "SortOrder"; 
		$fdata["FullName"] = "prodcosts.SortOrder";
	
		
		
				
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
	
		
		
	$tdataPrice_List_Report["SortOrder"] = $fdata;

	
$tables_data["Price List Report"]=&$tdataPrice_List_Report;
$field_labels["Price_List_Report"] = &$fieldLabelsPrice_List_Report;
$fieldToolTips["Price List Report"] = &$fieldToolTipsPrice_List_Report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Price List Report"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Price List Report"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Price_List_Report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "prodcosts.ProdNo,  prodcosts.EngName,  prodcosts.ThaiName,  prodcosts.PieceCost,  prodcosts.Cost,  products.ProdEngName,  products.ProdThaiName,  prodcosts.CostYear,  prodcosts.CostMonth,  prodcosts.PercentCost,  prodcosts.Qtty,  prodcosts.CostType,  prodcosts.UnitEngRpt,  prodcosts.SortOrder";
$proto0["m_strFrom"] = "FROM prodcosts  INNER JOIN products ON prodcosts.ProdNo = products.ProdNo";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY prodcosts.ProdNo, prodcosts.CostType";
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
	"m_strName" => "ProdNo",
	"m_strTable" => "prodcosts"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "EngName",
	"m_strTable" => "prodcosts"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ThaiName",
	"m_strTable" => "prodcosts"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "PieceCost",
	"m_strTable" => "prodcosts"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost",
	"m_strTable" => "prodcosts"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "ProdEngName",
	"m_strTable" => "products"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "ProdThaiName",
	"m_strTable" => "products"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "CostYear",
	"m_strTable" => "prodcosts"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "CostMonth",
	"m_strTable" => "prodcosts"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "PercentCost",
	"m_strTable" => "prodcosts"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Qtty",
	"m_strTable" => "prodcosts"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "CostType",
	"m_strTable" => "prodcosts"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitEngRpt",
	"m_strTable" => "prodcosts"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "SortOrder",
	"m_strTable" => "prodcosts"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto33=array();
$proto33["m_link"] = "SQLL_MAIN";
			$proto34=array();
$proto34["m_strName"] = "prodcosts";
$proto34["m_columns"] = array();
$proto34["m_columns"][] = "ProdGrpCode";
$proto34["m_columns"][] = "Status";
$proto34["m_columns"][] = "ProdNo";
$proto34["m_columns"][] = "CostType";
$proto34["m_columns"][] = "EngName";
$proto34["m_columns"][] = "ThaiName";
$proto34["m_columns"][] = "Qtty";
$proto34["m_columns"][] = "PieceCost";
$proto34["m_columns"][] = "SortOrder";
$proto34["m_columns"][] = "Cost";
$proto34["m_columns"][] = "UnitEngRpt";
$proto34["m_columns"][] = "UnitThaiRpt";
$proto34["m_columns"][] = "CompPurchaseUnitEn";
$proto34["m_columns"][] = "CostYear";
$proto34["m_columns"][] = "CostMonth";
$proto34["m_columns"][] = "PercentCost";
$obj = new SQLTable($proto34);

$proto33["m_table"] = $obj;
$proto33["m_alias"] = "";
$proto35=array();
$proto35["m_sql"] = "";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "";
$proto35["m_havingmode"] = "0";
$proto35["m_inBrackets"] = "0";
$proto35["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto35);

$proto33["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto33);

$proto0["m_fromlist"][]=$obj;
												$proto37=array();
$proto37["m_link"] = "SQLL_INNERJOIN";
			$proto38=array();
$proto38["m_strName"] = "products";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "ProdGrpCode";
$proto38["m_columns"][] = "ProdThaiName";
$proto38["m_columns"][] = "ProdEngName";
$proto38["m_columns"][] = "Picture";
$proto38["m_columns"][] = "ThaiModel";
$proto38["m_columns"][] = "EngModel";
$proto38["m_columns"][] = "MixNo";
$proto38["m_columns"][] = "ProdWt";
$proto38["m_columns"][] = "ColorMixNo";
$proto38["m_columns"][] = "FaceWt";
$proto38["m_columns"][] = "Mold";
$proto38["m_columns"][] = "PiecesPerMould";
$proto38["m_columns"][] = "ProductCost";
$proto38["m_columns"][] = "PriceRetail";
$proto38["m_columns"][] = "PriceWholeSale";
$proto38["m_columns"][] = "ProdStockGoal";
$proto38["m_columns"][] = "ThaiCom";
$proto38["m_columns"][] = "EngCom";
$proto38["m_columns"][] = "Status";
$proto38["m_columns"][] = "MoldWt";
$proto38["m_columns"][] = "GrayWtMold";
$proto38["m_columns"][] = "ColorWtMold";
$proto38["m_columns"][] = "Length";
$proto38["m_columns"][] = "Width1";
$proto38["m_columns"][] = "Thickness";
$proto38["m_columns"][] = "ProdNo";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_alias"] = "";
$proto39=array();
$proto39["m_sql"] = "prodcosts.ProdNo = products.ProdNo";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ProdNo",
	"m_strTable" => "prodcosts"
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "= products.ProdNo";
$proto39["m_havingmode"] = "0";
$proto39["m_inBrackets"] = "0";
$proto39["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto39);

$proto37["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto37);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto41=array();
						$obj = new SQLField(array(
	"m_strName" => "ProdNo",
	"m_strTable" => "prodcosts"
));

$proto41["m_column"]=$obj;
$proto41["m_bAsc"] = 1;
$proto41["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto41);

$proto0["m_orderby"][]=$obj;					
												$proto43=array();
						$obj = new SQLField(array(
	"m_strName" => "CostType",
	"m_strTable" => "prodcosts"
));

$proto43["m_column"]=$obj;
$proto43["m_bAsc"] = 1;
$proto43["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto43);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Price_List_Report = createSqlQuery_Price_List_Report();
														$tdataPrice_List_Report[".sqlquery"] = $queryData_Price_List_Report;
	
if(isset($tdataPrice_List_Report["field2"])){
	$tdataPrice_List_Report["field2"]["LookupTable"] = "carscars_view";
	$tdataPrice_List_Report["field2"]["LookupOrderBy"] = "name";
	$tdataPrice_List_Report["field2"]["LookupType"] = 4;
	$tdataPrice_List_Report["field2"]["LinkField"] = "email";
	$tdataPrice_List_Report["field2"]["DisplayField"] = "name";
	$tdataPrice_List_Report[".hasCustomViewField"] = true;
}

include_once(getabspath("include/Price_List_Report_events.php"));
$tableEvents["Price List Report"] = new eventclass_Price_List_Report;
$tdataPrice_List_Report[".hasEvents"] = true;

$cipherer = new RunnerCipherer("Price List Report");

?>
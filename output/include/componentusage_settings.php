<?php
require_once(getabspath("classes/cipherer.php"));
$tdatacomponentusage = array();
	$tdatacomponentusage[".NumberOfChars"] = 80; 
	$tdatacomponentusage[".ShortName"] = "componentusage";
	$tdatacomponentusage[".OwnerID"] = "";
	$tdatacomponentusage[".OriginalTable"] = "componentusage";

//	field labels
$fieldLabelscomponentusage = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscomponentusage["English"] = array();
	$fieldToolTipscomponentusage["English"] = array();
	$fieldLabelscomponentusage["English"]["ProdNo"] = "Prod No";
	$fieldToolTipscomponentusage["English"]["ProdNo"] = "";
	$fieldLabelscomponentusage["English"]["ComponentNo"] = "Component No";
	$fieldToolTipscomponentusage["English"]["ComponentNo"] = "";
	$fieldLabelscomponentusage["English"]["ComponentQty"] = "Component Qty";
	$fieldToolTipscomponentusage["English"]["ComponentQty"] = "";
	if (count($fieldToolTipscomponentusage["English"]))
		$tdatacomponentusage[".isUseToolTips"] = true;
}
	
	
	$tdatacomponentusage[".NCSearch"] = true;



$tdatacomponentusage[".shortTableName"] = "componentusage";
$tdatacomponentusage[".nSecOptions"] = 0;
$tdatacomponentusage[".recsPerRowList"] = 1;
$tdatacomponentusage[".mainTableOwnerID"] = "";
$tdatacomponentusage[".moveNext"] = 1;
$tdatacomponentusage[".nType"] = 0;

$tdatacomponentusage[".strOriginalTableName"] = "componentusage";




$tdatacomponentusage[".showAddInPopup"] = false;

$tdatacomponentusage[".showEditInPopup"] = false;

$tdatacomponentusage[".showViewInPopup"] = false;

$tdatacomponentusage[".fieldsForRegister"] = array();

$tdatacomponentusage[".listAjax"] = false;

	$tdatacomponentusage[".audit"] = false;

	$tdatacomponentusage[".locking"] = false;

$tdatacomponentusage[".listIcons"] = true;

$tdatacomponentusage[".exportTo"] = true;

$tdatacomponentusage[".printFriendly"] = true;


$tdatacomponentusage[".showSimpleSearchOptions"] = false;

$tdatacomponentusage[".showSearchPanel"] = true;

if (isMobile())
	$tdatacomponentusage[".isUseAjaxSuggest"] = false;
else 
	$tdatacomponentusage[".isUseAjaxSuggest"] = true;

$tdatacomponentusage[".rowHighlite"] = true;

// button handlers file names

$tdatacomponentusage[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacomponentusage[".isUseTimeForSearch"] = false;




$tdatacomponentusage[".allSearchFields"] = array();

$tdatacomponentusage[".allSearchFields"][] = "ProdNo";
$tdatacomponentusage[".allSearchFields"][] = "ComponentNo";
$tdatacomponentusage[".allSearchFields"][] = "ComponentQty";

$tdatacomponentusage[".googleLikeFields"][] = "ProdNo";
$tdatacomponentusage[".googleLikeFields"][] = "ComponentNo";
$tdatacomponentusage[".googleLikeFields"][] = "ComponentQty";


$tdatacomponentusage[".advSearchFields"][] = "ProdNo";
$tdatacomponentusage[".advSearchFields"][] = "ComponentNo";
$tdatacomponentusage[".advSearchFields"][] = "ComponentQty";

$tdatacomponentusage[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatacomponentusage[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacomponentusage[".strOrderBy"] = $tstrOrderBy;

$tdatacomponentusage[".orderindexes"] = array();

$tdatacomponentusage[".sqlHead"] = "SELECT ProdNo,   ComponentNo,   ComponentQty";
$tdatacomponentusage[".sqlFrom"] = "FROM componentusage";
$tdatacomponentusage[".sqlWhereExpr"] = "";
$tdatacomponentusage[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacomponentusage[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacomponentusage[".arrGroupsPerPage"] = $arrGPP;

$tableKeyscomponentusage = array();
$tdatacomponentusage[".Keys"] = $tableKeyscomponentusage;

$tdatacomponentusage[".listFields"] = array();
$tdatacomponentusage[".listFields"][] = "ProdNo";
$tdatacomponentusage[".listFields"][] = "ComponentNo";
$tdatacomponentusage[".listFields"][] = "ComponentQty";

$tdatacomponentusage[".viewFields"] = array();
$tdatacomponentusage[".viewFields"][] = "ProdNo";
$tdatacomponentusage[".viewFields"][] = "ComponentNo";
$tdatacomponentusage[".viewFields"][] = "ComponentQty";

$tdatacomponentusage[".addFields"] = array();
$tdatacomponentusage[".addFields"][] = "ProdNo";
$tdatacomponentusage[".addFields"][] = "ComponentNo";
$tdatacomponentusage[".addFields"][] = "ComponentQty";

$tdatacomponentusage[".inlineAddFields"] = array();
$tdatacomponentusage[".inlineAddFields"][] = "ProdNo";
$tdatacomponentusage[".inlineAddFields"][] = "ComponentNo";
$tdatacomponentusage[".inlineAddFields"][] = "ComponentQty";

$tdatacomponentusage[".editFields"] = array();
$tdatacomponentusage[".editFields"][] = "ProdNo";
$tdatacomponentusage[".editFields"][] = "ComponentNo";
$tdatacomponentusage[".editFields"][] = "ComponentQty";

$tdatacomponentusage[".inlineEditFields"] = array();
$tdatacomponentusage[".inlineEditFields"][] = "ProdNo";
$tdatacomponentusage[".inlineEditFields"][] = "ComponentNo";
$tdatacomponentusage[".inlineEditFields"][] = "ComponentQty";

$tdatacomponentusage[".exportFields"] = array();
$tdatacomponentusage[".exportFields"][] = "ProdNo";
$tdatacomponentusage[".exportFields"][] = "ComponentNo";
$tdatacomponentusage[".exportFields"][] = "ComponentQty";

$tdatacomponentusage[".printFields"] = array();
$tdatacomponentusage[".printFields"][] = "ProdNo";
$tdatacomponentusage[".printFields"][] = "ComponentNo";
$tdatacomponentusage[".printFields"][] = "ComponentQty";

//	ProdNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ProdNo";
	$fdata["GoodName"] = "ProdNo";
	$fdata["ownerTable"] = "componentusage";
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
	
		
		
	$tdatacomponentusage["ProdNo"] = $fdata;
//	ComponentNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ComponentNo";
	$fdata["GoodName"] = "ComponentNo";
	$fdata["ownerTable"] = "componentusage";
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
	
		
		
	$tdatacomponentusage["ComponentNo"] = $fdata;
//	ComponentQty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ComponentQty";
	$fdata["GoodName"] = "ComponentQty";
	$fdata["ownerTable"] = "componentusage";
	$fdata["Label"] = "Component Qty"; 
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
	
		$fdata["strField"] = "ComponentQty"; 
		$fdata["FullName"] = "ComponentQty";
	
		
		
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
	
		
		
	$tdatacomponentusage["ComponentQty"] = $fdata;

	
$tables_data["componentusage"]=&$tdatacomponentusage;
$field_labels["componentusage"] = &$fieldLabelscomponentusage;
$fieldToolTips["componentusage"] = &$fieldToolTipscomponentusage;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["componentusage"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["componentusage"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_componentusage()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ProdNo,   ComponentNo,   ComponentQty";
$proto0["m_strFrom"] = "FROM componentusage";
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
	"m_strName" => "ProdNo",
	"m_strTable" => "componentusage"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ComponentNo",
	"m_strTable" => "componentusage"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ComponentQty",
	"m_strTable" => "componentusage"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "componentusage";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "ProdNo";
$proto12["m_columns"][] = "ComponentNo";
$proto12["m_columns"][] = "ComponentQty";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_alias"] = "";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = "0";
$proto13["m_inBrackets"] = "0";
$proto13["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_componentusage = createSqlQuery_componentusage();
			$tdatacomponentusage[".sqlquery"] = $queryData_componentusage;
	
if(isset($tdatacomponentusage["field2"])){
	$tdatacomponentusage["field2"]["LookupTable"] = "carscars_view";
	$tdatacomponentusage["field2"]["LookupOrderBy"] = "name";
	$tdatacomponentusage["field2"]["LookupType"] = 4;
	$tdatacomponentusage["field2"]["LinkField"] = "email";
	$tdatacomponentusage["field2"]["DisplayField"] = "name";
	$tdatacomponentusage[".hasCustomViewField"] = true;
}

$tableEvents["componentusage"] = new eventsBase;
$tdatacomponentusage[".hasEvents"] = false;

$cipherer = new RunnerCipherer("componentusage");

?>
<?php
require_once(getabspath("classes/cipherer.php"));
$tdataunittype = array();
	$tdataunittype[".NumberOfChars"] = 80; 
	$tdataunittype[".ShortName"] = "unittype";
	$tdataunittype[".OwnerID"] = "";
	$tdataunittype[".OriginalTable"] = "unittype";

//	field labels
$fieldLabelsunittype = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsunittype["English"] = array();
	$fieldToolTipsunittype["English"] = array();
	$fieldLabelsunittype["English"]["Unit_Type_English"] = "Unit Type English";
	$fieldToolTipsunittype["English"]["Unit_Type_English"] = "";
	$fieldLabelsunittype["English"]["Unit_Type_LL"] = "Unit Type LL";
	$fieldToolTipsunittype["English"]["Unit_Type_LL"] = "";
	if (count($fieldToolTipsunittype["English"]))
		$tdataunittype[".isUseToolTips"] = true;
}
	
	
	$tdataunittype[".NCSearch"] = true;



$tdataunittype[".shortTableName"] = "unittype";
$tdataunittype[".nSecOptions"] = 0;
$tdataunittype[".recsPerRowList"] = 1;
$tdataunittype[".mainTableOwnerID"] = "";
$tdataunittype[".moveNext"] = 1;
$tdataunittype[".nType"] = 0;

$tdataunittype[".strOriginalTableName"] = "unittype";




$tdataunittype[".showAddInPopup"] = false;

$tdataunittype[".showEditInPopup"] = false;

$tdataunittype[".showViewInPopup"] = false;

$tdataunittype[".fieldsForRegister"] = array();

$tdataunittype[".listAjax"] = false;

	$tdataunittype[".audit"] = false;

	$tdataunittype[".locking"] = false;

$tdataunittype[".listIcons"] = true;
$tdataunittype[".edit"] = true;
$tdataunittype[".inlineEdit"] = true;
$tdataunittype[".inlineAdd"] = true;
$tdataunittype[".view"] = true;

$tdataunittype[".exportTo"] = true;

$tdataunittype[".printFriendly"] = true;

$tdataunittype[".delete"] = true;

$tdataunittype[".showSimpleSearchOptions"] = false;

$tdataunittype[".showSearchPanel"] = true;

if (isMobile())
	$tdataunittype[".isUseAjaxSuggest"] = false;
else 
	$tdataunittype[".isUseAjaxSuggest"] = true;

$tdataunittype[".rowHighlite"] = true;

// button handlers file names

$tdataunittype[".addPageEvents"] = false;

// use timepicker for search panel
$tdataunittype[".isUseTimeForSearch"] = false;




$tdataunittype[".allSearchFields"] = array();

$tdataunittype[".allSearchFields"][] = "Unit_Type_English";
$tdataunittype[".allSearchFields"][] = "Unit_Type_LL";

$tdataunittype[".googleLikeFields"][] = "Unit_Type_English";
$tdataunittype[".googleLikeFields"][] = "Unit_Type_LL";


$tdataunittype[".advSearchFields"][] = "Unit_Type_English";
$tdataunittype[".advSearchFields"][] = "Unit_Type_LL";

$tdataunittype[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataunittype[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataunittype[".strOrderBy"] = $tstrOrderBy;

$tdataunittype[".orderindexes"] = array();

$tdataunittype[".sqlHead"] = "SELECT Unit_Type_English,   Unit_Type_LL";
$tdataunittype[".sqlFrom"] = "FROM unittype";
$tdataunittype[".sqlWhereExpr"] = "";
$tdataunittype[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataunittype[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataunittype[".arrGroupsPerPage"] = $arrGPP;

$tableKeysunittype = array();
$tableKeysunittype[] = "Unit_Type_English";
$tdataunittype[".Keys"] = $tableKeysunittype;

$tdataunittype[".listFields"] = array();
$tdataunittype[".listFields"][] = "Unit_Type_English";
$tdataunittype[".listFields"][] = "Unit_Type_LL";

$tdataunittype[".viewFields"] = array();
$tdataunittype[".viewFields"][] = "Unit_Type_English";
$tdataunittype[".viewFields"][] = "Unit_Type_LL";

$tdataunittype[".addFields"] = array();
$tdataunittype[".addFields"][] = "Unit_Type_English";
$tdataunittype[".addFields"][] = "Unit_Type_LL";

$tdataunittype[".inlineAddFields"] = array();
$tdataunittype[".inlineAddFields"][] = "Unit_Type_English";
$tdataunittype[".inlineAddFields"][] = "Unit_Type_LL";

$tdataunittype[".editFields"] = array();
$tdataunittype[".editFields"][] = "Unit_Type_English";
$tdataunittype[".editFields"][] = "Unit_Type_LL";

$tdataunittype[".inlineEditFields"] = array();
$tdataunittype[".inlineEditFields"][] = "Unit_Type_English";
$tdataunittype[".inlineEditFields"][] = "Unit_Type_LL";

$tdataunittype[".exportFields"] = array();
$tdataunittype[".exportFields"][] = "Unit_Type_English";
$tdataunittype[".exportFields"][] = "Unit_Type_LL";

$tdataunittype[".printFields"] = array();
$tdataunittype[".printFields"][] = "Unit_Type_English";
$tdataunittype[".printFields"][] = "Unit_Type_LL";

//	Unit_Type_English
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Unit_Type_English";
	$fdata["GoodName"] = "Unit_Type_English";
	$fdata["ownerTable"] = "unittype";
	$fdata["Label"] = "Unit Type English"; 
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
	
		$fdata["strField"] = "Unit_Type_English"; 
		$fdata["FullName"] = "Unit_Type_English";
	
		
		
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
	
		
		
	$tdataunittype["Unit_Type_English"] = $fdata;
//	Unit_Type_LL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Unit_Type_LL";
	$fdata["GoodName"] = "Unit_Type_LL";
	$fdata["ownerTable"] = "unittype";
	$fdata["Label"] = "Unit Type LL"; 
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
	
		$fdata["strField"] = "Unit_Type_LL"; 
		$fdata["FullName"] = "Unit_Type_LL";
	
		
		
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
	
		
		
	$tdataunittype["Unit_Type_LL"] = $fdata;

	
$tables_data["unittype"]=&$tdataunittype;
$field_labels["unittype"] = &$fieldLabelsunittype;
$fieldToolTips["unittype"] = &$fieldToolTipsunittype;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["unittype"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["unittype"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_unittype()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Unit_Type_English,   Unit_Type_LL";
$proto0["m_strFrom"] = "FROM unittype";
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
	"m_strName" => "Unit_Type_English",
	"m_strTable" => "unittype"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Unit_Type_LL",
	"m_strTable" => "unittype"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "unittype";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "Unit_Type_English";
$proto10["m_columns"][] = "Unit_Type_LL";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_alias"] = "";
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = "0";
$proto11["m_inBrackets"] = "0";
$proto11["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto11);

$proto9["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto9);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_unittype = createSqlQuery_unittype();
		$tdataunittype[".sqlquery"] = $queryData_unittype;
	
if(isset($tdataunittype["field2"])){
	$tdataunittype["field2"]["LookupTable"] = "carscars_view";
	$tdataunittype["field2"]["LookupOrderBy"] = "name";
	$tdataunittype["field2"]["LookupType"] = 4;
	$tdataunittype["field2"]["LinkField"] = "email";
	$tdataunittype["field2"]["DisplayField"] = "name";
	$tdataunittype[".hasCustomViewField"] = true;
}

$tableEvents["unittype"] = new eventsBase;
$tdataunittype[".hasEvents"] = false;

$cipherer = new RunnerCipherer("unittype");

?>
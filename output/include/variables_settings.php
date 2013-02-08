<?php
require_once(getabspath("classes/cipherer.php"));
$tdatavariables = array();
	$tdatavariables[".NumberOfChars"] = 80; 
	$tdatavariables[".ShortName"] = "variables";
	$tdatavariables[".OwnerID"] = "";
	$tdatavariables[".OriginalTable"] = "variables";

//	field labels
$fieldLabelsvariables = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvariables["English"] = array();
	$fieldToolTipsvariables["English"] = array();
	$fieldLabelsvariables["English"]["ID"] = "ID";
	$fieldToolTipsvariables["English"]["ID"] = "";
	$fieldLabelsvariables["English"]["Status"] = "Status";
	$fieldToolTipsvariables["English"]["Status"] = "";
	$fieldLabelsvariables["English"]["ProdGrp"] = "Prod Grp";
	$fieldToolTipsvariables["English"]["ProdGrp"] = "";
	if (count($fieldToolTipsvariables["English"]))
		$tdatavariables[".isUseToolTips"] = true;
}
	
	
	$tdatavariables[".NCSearch"] = true;



$tdatavariables[".shortTableName"] = "variables";
$tdatavariables[".nSecOptions"] = 0;
$tdatavariables[".recsPerRowList"] = 1;
$tdatavariables[".mainTableOwnerID"] = "";
$tdatavariables[".moveNext"] = 1;
$tdatavariables[".nType"] = 0;

$tdatavariables[".strOriginalTableName"] = "variables";




$tdatavariables[".showAddInPopup"] = false;

$tdatavariables[".showEditInPopup"] = false;

$tdatavariables[".showViewInPopup"] = false;

$tdatavariables[".fieldsForRegister"] = array();

$tdatavariables[".listAjax"] = false;

	$tdatavariables[".audit"] = false;

	$tdatavariables[".locking"] = false;

$tdatavariables[".listIcons"] = true;
$tdatavariables[".edit"] = true;
$tdatavariables[".inlineEdit"] = true;
$tdatavariables[".inlineAdd"] = true;
$tdatavariables[".view"] = true;

$tdatavariables[".exportTo"] = true;

$tdatavariables[".printFriendly"] = true;

$tdatavariables[".delete"] = true;

$tdatavariables[".showSimpleSearchOptions"] = false;

$tdatavariables[".showSearchPanel"] = true;

if (isMobile())
	$tdatavariables[".isUseAjaxSuggest"] = false;
else 
	$tdatavariables[".isUseAjaxSuggest"] = true;

$tdatavariables[".rowHighlite"] = true;

// button handlers file names

$tdatavariables[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavariables[".isUseTimeForSearch"] = false;




$tdatavariables[".allSearchFields"] = array();

$tdatavariables[".allSearchFields"][] = "ID";
$tdatavariables[".allSearchFields"][] = "Status";
$tdatavariables[".allSearchFields"][] = "ProdGrp";

$tdatavariables[".googleLikeFields"][] = "ID";
$tdatavariables[".googleLikeFields"][] = "Status";
$tdatavariables[".googleLikeFields"][] = "ProdGrp";


$tdatavariables[".advSearchFields"][] = "ID";
$tdatavariables[".advSearchFields"][] = "Status";
$tdatavariables[".advSearchFields"][] = "ProdGrp";

$tdatavariables[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatavariables[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavariables[".strOrderBy"] = $tstrOrderBy;

$tdatavariables[".orderindexes"] = array();

$tdatavariables[".sqlHead"] = "SELECT ID,  Status,  ProdGrp";
$tdatavariables[".sqlFrom"] = "FROM variables";
$tdatavariables[".sqlWhereExpr"] = "";
$tdatavariables[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavariables[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavariables[".arrGroupsPerPage"] = $arrGPP;

$tableKeysvariables = array();
$tableKeysvariables[] = "ID";
$tdatavariables[".Keys"] = $tableKeysvariables;

$tdatavariables[".listFields"] = array();
$tdatavariables[".listFields"][] = "ID";
$tdatavariables[".listFields"][] = "Status";
$tdatavariables[".listFields"][] = "ProdGrp";

$tdatavariables[".viewFields"] = array();
$tdatavariables[".viewFields"][] = "ID";
$tdatavariables[".viewFields"][] = "Status";
$tdatavariables[".viewFields"][] = "ProdGrp";

$tdatavariables[".addFields"] = array();

$tdatavariables[".inlineAddFields"] = array();

$tdatavariables[".editFields"] = array();
$tdatavariables[".editFields"][] = "Status";
$tdatavariables[".editFields"][] = "ProdGrp";

$tdatavariables[".inlineEditFields"] = array();

$tdatavariables[".exportFields"] = array();

$tdatavariables[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "variables";
	$fdata["Label"] = "ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "ID"; 
		$fdata["FullName"] = "ID";
	
		
		
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
	
		
		
	$tdatavariables["ID"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "variables";
	$fdata["Label"] = "Status"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatavariables["Status"] = $fdata;
//	ProdGrp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ProdGrp";
	$fdata["GoodName"] = "ProdGrp";
	$fdata["ownerTable"] = "variables";
	$fdata["Label"] = "Prod Grp"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "ProdGrp"; 
		$fdata["FullName"] = "ProdGrp";
	
		
		
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
	
		
		
	$tdatavariables["ProdGrp"] = $fdata;

	
$tables_data["variables"]=&$tdatavariables;
$field_labels["variables"] = &$fieldLabelsvariables;
$fieldToolTips["variables"] = &$fieldToolTipsvariables;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["variables"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["variables"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_variables()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  Status,  ProdGrp";
$proto0["m_strFrom"] = "FROM variables";
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
	"m_strName" => "ID",
	"m_strTable" => "variables"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "variables"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ProdGrp",
	"m_strTable" => "variables"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "variables";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "ID";
$proto12["m_columns"][] = "Status";
$proto12["m_columns"][] = "ProdGrp";
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
$queryData_variables = createSqlQuery_variables();
			$tdatavariables[".sqlquery"] = $queryData_variables;
	
if(isset($tdatavariables["field2"])){
	$tdatavariables["field2"]["LookupTable"] = "carscars_view";
	$tdatavariables["field2"]["LookupOrderBy"] = "name";
	$tdatavariables["field2"]["LookupType"] = 4;
	$tdatavariables["field2"]["LinkField"] = "email";
	$tdatavariables["field2"]["DisplayField"] = "name";
	$tdatavariables[".hasCustomViewField"] = true;
}

$tableEvents["variables"] = new eventsBase;
$tdatavariables[".hasEvents"] = false;

$cipherer = new RunnerCipherer("variables");

?>
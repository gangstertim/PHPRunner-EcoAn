<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastatus = array();
	$tdatastatus[".NumberOfChars"] = 80; 
	$tdatastatus[".ShortName"] = "status";
	$tdatastatus[".OwnerID"] = "";
	$tdatastatus[".OriginalTable"] = "status";

//	field labels
$fieldLabelsstatus = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstatus["English"] = array();
	$fieldToolTipsstatus["English"] = array();
	$fieldLabelsstatus["English"]["StatusCode"] = "Status Code";
	$fieldToolTipsstatus["English"]["StatusCode"] = "";
	$fieldLabelsstatus["English"]["CodeDescription"] = "Code Description";
	$fieldToolTipsstatus["English"]["CodeDescription"] = "";
	$fieldLabelsstatus["English"]["ThaiDescription"] = "Thai Description";
	$fieldToolTipsstatus["English"]["ThaiDescription"] = "";
	if (count($fieldToolTipsstatus["English"]))
		$tdatastatus[".isUseToolTips"] = true;
}
	
	
	$tdatastatus[".NCSearch"] = true;



$tdatastatus[".shortTableName"] = "status";
$tdatastatus[".nSecOptions"] = 0;
$tdatastatus[".recsPerRowList"] = 1;
$tdatastatus[".mainTableOwnerID"] = "";
$tdatastatus[".moveNext"] = 1;
$tdatastatus[".nType"] = 0;

$tdatastatus[".strOriginalTableName"] = "status";




$tdatastatus[".showAddInPopup"] = false;

$tdatastatus[".showEditInPopup"] = false;

$tdatastatus[".showViewInPopup"] = false;

$tdatastatus[".fieldsForRegister"] = array();

$tdatastatus[".listAjax"] = false;

	$tdatastatus[".audit"] = false;

	$tdatastatus[".locking"] = false;

$tdatastatus[".listIcons"] = true;

$tdatastatus[".exportTo"] = true;

$tdatastatus[".printFriendly"] = true;


$tdatastatus[".showSimpleSearchOptions"] = false;

$tdatastatus[".showSearchPanel"] = true;

if (isMobile())
	$tdatastatus[".isUseAjaxSuggest"] = false;
else 
	$tdatastatus[".isUseAjaxSuggest"] = true;

$tdatastatus[".rowHighlite"] = true;

// button handlers file names

$tdatastatus[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastatus[".isUseTimeForSearch"] = false;




$tdatastatus[".allSearchFields"] = array();

$tdatastatus[".allSearchFields"][] = "StatusCode";
$tdatastatus[".allSearchFields"][] = "CodeDescription";
$tdatastatus[".allSearchFields"][] = "ThaiDescription";

$tdatastatus[".googleLikeFields"][] = "StatusCode";
$tdatastatus[".googleLikeFields"][] = "CodeDescription";
$tdatastatus[".googleLikeFields"][] = "ThaiDescription";


$tdatastatus[".advSearchFields"][] = "StatusCode";
$tdatastatus[".advSearchFields"][] = "CodeDescription";
$tdatastatus[".advSearchFields"][] = "ThaiDescription";

$tdatastatus[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatastatus[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastatus[".strOrderBy"] = $tstrOrderBy;

$tdatastatus[".orderindexes"] = array();

$tdatastatus[".sqlHead"] = "SELECT StatusCode,   CodeDescription,   ThaiDescription";
$tdatastatus[".sqlFrom"] = "FROM status";
$tdatastatus[".sqlWhereExpr"] = "";
$tdatastatus[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastatus[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastatus[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstatus = array();
$tdatastatus[".Keys"] = $tableKeysstatus;

$tdatastatus[".listFields"] = array();
$tdatastatus[".listFields"][] = "StatusCode";
$tdatastatus[".listFields"][] = "CodeDescription";
$tdatastatus[".listFields"][] = "ThaiDescription";

$tdatastatus[".viewFields"] = array();
$tdatastatus[".viewFields"][] = "StatusCode";
$tdatastatus[".viewFields"][] = "CodeDescription";
$tdatastatus[".viewFields"][] = "ThaiDescription";

$tdatastatus[".addFields"] = array();
$tdatastatus[".addFields"][] = "StatusCode";
$tdatastatus[".addFields"][] = "CodeDescription";
$tdatastatus[".addFields"][] = "ThaiDescription";

$tdatastatus[".inlineAddFields"] = array();
$tdatastatus[".inlineAddFields"][] = "StatusCode";
$tdatastatus[".inlineAddFields"][] = "CodeDescription";
$tdatastatus[".inlineAddFields"][] = "ThaiDescription";

$tdatastatus[".editFields"] = array();
$tdatastatus[".editFields"][] = "StatusCode";
$tdatastatus[".editFields"][] = "CodeDescription";
$tdatastatus[".editFields"][] = "ThaiDescription";

$tdatastatus[".inlineEditFields"] = array();
$tdatastatus[".inlineEditFields"][] = "StatusCode";
$tdatastatus[".inlineEditFields"][] = "CodeDescription";
$tdatastatus[".inlineEditFields"][] = "ThaiDescription";

$tdatastatus[".exportFields"] = array();
$tdatastatus[".exportFields"][] = "StatusCode";
$tdatastatus[".exportFields"][] = "CodeDescription";
$tdatastatus[".exportFields"][] = "ThaiDescription";

$tdatastatus[".printFields"] = array();
$tdatastatus[".printFields"][] = "StatusCode";
$tdatastatus[".printFields"][] = "CodeDescription";
$tdatastatus[".printFields"][] = "ThaiDescription";

//	StatusCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "StatusCode";
	$fdata["GoodName"] = "StatusCode";
	$fdata["ownerTable"] = "status";
	$fdata["Label"] = "Status Code"; 
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
	
		$fdata["strField"] = "StatusCode"; 
		$fdata["FullName"] = "StatusCode";
	
		
		
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
	
		
		
	$tdatastatus["StatusCode"] = $fdata;
//	CodeDescription
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CodeDescription";
	$fdata["GoodName"] = "CodeDescription";
	$fdata["ownerTable"] = "status";
	$fdata["Label"] = "Code Description"; 
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
	
		$fdata["strField"] = "CodeDescription"; 
		$fdata["FullName"] = "CodeDescription";
	
		
		
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
			$edata["EditParams"].= " maxlength=15";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastatus["CodeDescription"] = $fdata;
//	ThaiDescription
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ThaiDescription";
	$fdata["GoodName"] = "ThaiDescription";
	$fdata["ownerTable"] = "status";
	$fdata["Label"] = "Thai Description"; 
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
	
		$fdata["strField"] = "ThaiDescription"; 
		$fdata["FullName"] = "ThaiDescription";
	
		
		
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
			$edata["EditParams"].= " maxlength=15";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastatus["ThaiDescription"] = $fdata;

	
$tables_data["status"]=&$tdatastatus;
$field_labels["status"] = &$fieldLabelsstatus;
$fieldToolTips["status"] = &$fieldToolTipsstatus;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["status"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["status"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_status()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "StatusCode,   CodeDescription,   ThaiDescription";
$proto0["m_strFrom"] = "FROM status";
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
	"m_strName" => "StatusCode",
	"m_strTable" => "status"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "CodeDescription",
	"m_strTable" => "status"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ThaiDescription",
	"m_strTable" => "status"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "status";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "StatusCode";
$proto12["m_columns"][] = "CodeDescription";
$proto12["m_columns"][] = "ThaiDescription";
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
$queryData_status = createSqlQuery_status();
			$tdatastatus[".sqlquery"] = $queryData_status;
	
if(isset($tdatastatus["field2"])){
	$tdatastatus["field2"]["LookupTable"] = "carscars_view";
	$tdatastatus["field2"]["LookupOrderBy"] = "name";
	$tdatastatus["field2"]["LookupType"] = 4;
	$tdatastatus["field2"]["LinkField"] = "email";
	$tdatastatus["field2"]["DisplayField"] = "name";
	$tdatastatus[".hasCustomViewField"] = true;
}

$tableEvents["status"] = new eventsBase;
$tdatastatus[".hasEvents"] = false;

$cipherer = new RunnerCipherer("status");

?>
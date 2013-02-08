<?php
require_once(getabspath("classes/cipherer.php"));
$tdatafixedcomponents = array();
	$tdatafixedcomponents[".NumberOfChars"] = 80; 
	$tdatafixedcomponents[".ShortName"] = "fixedcomponents";
	$tdatafixedcomponents[".OwnerID"] = "";
	$tdatafixedcomponents[".OriginalTable"] = "fixedcomponents";

//	field labels
$fieldLabelsfixedcomponents = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfixedcomponents["English"] = array();
	$fieldToolTipsfixedcomponents["English"] = array();
	$fieldLabelsfixedcomponents["English"]["ComponentNo"] = "Component No";
	$fieldToolTipsfixedcomponents["English"]["ComponentNo"] = "";
	$fieldLabelsfixedcomponents["English"]["Qty"] = "Qty";
	$fieldToolTipsfixedcomponents["English"]["Qty"] = "";
	$fieldLabelsfixedcomponents["English"]["Thainame"] = "Thainame";
	$fieldToolTipsfixedcomponents["English"]["Thainame"] = "";
	$fieldLabelsfixedcomponents["English"]["ProdGrpCode"] = "Prod Grp Code";
	$fieldToolTipsfixedcomponents["English"]["ProdGrpCode"] = "";
	if (count($fieldToolTipsfixedcomponents["English"]))
		$tdatafixedcomponents[".isUseToolTips"] = true;
}
	
	
	$tdatafixedcomponents[".NCSearch"] = true;



$tdatafixedcomponents[".shortTableName"] = "fixedcomponents";
$tdatafixedcomponents[".nSecOptions"] = 0;
$tdatafixedcomponents[".recsPerRowList"] = 1;
$tdatafixedcomponents[".mainTableOwnerID"] = "";
$tdatafixedcomponents[".moveNext"] = 1;
$tdatafixedcomponents[".nType"] = 0;

$tdatafixedcomponents[".strOriginalTableName"] = "fixedcomponents";




$tdatafixedcomponents[".showAddInPopup"] = false;

$tdatafixedcomponents[".showEditInPopup"] = false;

$tdatafixedcomponents[".showViewInPopup"] = false;

$tdatafixedcomponents[".fieldsForRegister"] = array();

$tdatafixedcomponents[".listAjax"] = false;

	$tdatafixedcomponents[".audit"] = false;

	$tdatafixedcomponents[".locking"] = false;

$tdatafixedcomponents[".listIcons"] = true;

$tdatafixedcomponents[".exportTo"] = true;

$tdatafixedcomponents[".printFriendly"] = true;


$tdatafixedcomponents[".showSimpleSearchOptions"] = false;

$tdatafixedcomponents[".showSearchPanel"] = true;

if (isMobile())
	$tdatafixedcomponents[".isUseAjaxSuggest"] = false;
else 
	$tdatafixedcomponents[".isUseAjaxSuggest"] = true;

$tdatafixedcomponents[".rowHighlite"] = true;

// button handlers file names

$tdatafixedcomponents[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafixedcomponents[".isUseTimeForSearch"] = false;




$tdatafixedcomponents[".allSearchFields"] = array();

$tdatafixedcomponents[".allSearchFields"][] = "ComponentNo";
$tdatafixedcomponents[".allSearchFields"][] = "Qty";
$tdatafixedcomponents[".allSearchFields"][] = "Thainame";
$tdatafixedcomponents[".allSearchFields"][] = "ProdGrpCode";

$tdatafixedcomponents[".googleLikeFields"][] = "ComponentNo";
$tdatafixedcomponents[".googleLikeFields"][] = "Qty";
$tdatafixedcomponents[".googleLikeFields"][] = "Thainame";
$tdatafixedcomponents[".googleLikeFields"][] = "ProdGrpCode";


$tdatafixedcomponents[".advSearchFields"][] = "ComponentNo";
$tdatafixedcomponents[".advSearchFields"][] = "Qty";
$tdatafixedcomponents[".advSearchFields"][] = "Thainame";
$tdatafixedcomponents[".advSearchFields"][] = "ProdGrpCode";

$tdatafixedcomponents[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatafixedcomponents[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafixedcomponents[".strOrderBy"] = $tstrOrderBy;

$tdatafixedcomponents[".orderindexes"] = array();

$tdatafixedcomponents[".sqlHead"] = "SELECT ComponentNo,   Qty,   Thainame,   ProdGrpCode";
$tdatafixedcomponents[".sqlFrom"] = "FROM fixedcomponents";
$tdatafixedcomponents[".sqlWhereExpr"] = "";
$tdatafixedcomponents[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafixedcomponents[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafixedcomponents[".arrGroupsPerPage"] = $arrGPP;

$tableKeysfixedcomponents = array();
$tdatafixedcomponents[".Keys"] = $tableKeysfixedcomponents;

$tdatafixedcomponents[".listFields"] = array();
$tdatafixedcomponents[".listFields"][] = "ComponentNo";
$tdatafixedcomponents[".listFields"][] = "Qty";
$tdatafixedcomponents[".listFields"][] = "Thainame";
$tdatafixedcomponents[".listFields"][] = "ProdGrpCode";

$tdatafixedcomponents[".viewFields"] = array();
$tdatafixedcomponents[".viewFields"][] = "ComponentNo";
$tdatafixedcomponents[".viewFields"][] = "Qty";
$tdatafixedcomponents[".viewFields"][] = "Thainame";
$tdatafixedcomponents[".viewFields"][] = "ProdGrpCode";

$tdatafixedcomponents[".addFields"] = array();
$tdatafixedcomponents[".addFields"][] = "ComponentNo";
$tdatafixedcomponents[".addFields"][] = "Qty";
$tdatafixedcomponents[".addFields"][] = "Thainame";
$tdatafixedcomponents[".addFields"][] = "ProdGrpCode";

$tdatafixedcomponents[".inlineAddFields"] = array();
$tdatafixedcomponents[".inlineAddFields"][] = "ComponentNo";
$tdatafixedcomponents[".inlineAddFields"][] = "Qty";
$tdatafixedcomponents[".inlineAddFields"][] = "Thainame";
$tdatafixedcomponents[".inlineAddFields"][] = "ProdGrpCode";

$tdatafixedcomponents[".editFields"] = array();
$tdatafixedcomponents[".editFields"][] = "ComponentNo";
$tdatafixedcomponents[".editFields"][] = "Qty";
$tdatafixedcomponents[".editFields"][] = "Thainame";
$tdatafixedcomponents[".editFields"][] = "ProdGrpCode";

$tdatafixedcomponents[".inlineEditFields"] = array();
$tdatafixedcomponents[".inlineEditFields"][] = "ComponentNo";
$tdatafixedcomponents[".inlineEditFields"][] = "Qty";
$tdatafixedcomponents[".inlineEditFields"][] = "Thainame";
$tdatafixedcomponents[".inlineEditFields"][] = "ProdGrpCode";

$tdatafixedcomponents[".exportFields"] = array();
$tdatafixedcomponents[".exportFields"][] = "ComponentNo";
$tdatafixedcomponents[".exportFields"][] = "Qty";
$tdatafixedcomponents[".exportFields"][] = "Thainame";
$tdatafixedcomponents[".exportFields"][] = "ProdGrpCode";

$tdatafixedcomponents[".printFields"] = array();
$tdatafixedcomponents[".printFields"][] = "ComponentNo";
$tdatafixedcomponents[".printFields"][] = "Qty";
$tdatafixedcomponents[".printFields"][] = "Thainame";
$tdatafixedcomponents[".printFields"][] = "ProdGrpCode";

//	ComponentNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ComponentNo";
	$fdata["GoodName"] = "ComponentNo";
	$fdata["ownerTable"] = "fixedcomponents";
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
	
		
		
	$tdatafixedcomponents["ComponentNo"] = $fdata;
//	Qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Qty";
	$fdata["GoodName"] = "Qty";
	$fdata["ownerTable"] = "fixedcomponents";
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
	
		
		
	$tdatafixedcomponents["Qty"] = $fdata;
//	Thainame
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Thainame";
	$fdata["GoodName"] = "Thainame";
	$fdata["ownerTable"] = "fixedcomponents";
	$fdata["Label"] = "Thainame"; 
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
	
		$fdata["strField"] = "Thainame"; 
		$fdata["FullName"] = "Thainame";
	
		
		
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
	
		
		
	$tdatafixedcomponents["Thainame"] = $fdata;
//	ProdGrpCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ProdGrpCode";
	$fdata["GoodName"] = "ProdGrpCode";
	$fdata["ownerTable"] = "fixedcomponents";
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
	
		
		
	$tdatafixedcomponents["ProdGrpCode"] = $fdata;

	
$tables_data["fixedcomponents"]=&$tdatafixedcomponents;
$field_labels["fixedcomponents"] = &$fieldLabelsfixedcomponents;
$fieldToolTips["fixedcomponents"] = &$fieldToolTipsfixedcomponents;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["fixedcomponents"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["fixedcomponents"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_fixedcomponents()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ComponentNo,   Qty,   Thainame,   ProdGrpCode";
$proto0["m_strFrom"] = "FROM fixedcomponents";
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
	"m_strTable" => "fixedcomponents"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Qty",
	"m_strTable" => "fixedcomponents"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Thainame",
	"m_strTable" => "fixedcomponents"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "ProdGrpCode",
	"m_strTable" => "fixedcomponents"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "fixedcomponents";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "ComponentNo";
$proto14["m_columns"][] = "Qty";
$proto14["m_columns"][] = "Thainame";
$proto14["m_columns"][] = "ProdGrpCode";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_alias"] = "";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = "0";
$proto15["m_inBrackets"] = "0";
$proto15["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_fixedcomponents = createSqlQuery_fixedcomponents();
				$tdatafixedcomponents[".sqlquery"] = $queryData_fixedcomponents;
	
if(isset($tdatafixedcomponents["field2"])){
	$tdatafixedcomponents["field2"]["LookupTable"] = "carscars_view";
	$tdatafixedcomponents["field2"]["LookupOrderBy"] = "name";
	$tdatafixedcomponents["field2"]["LookupType"] = 4;
	$tdatafixedcomponents["field2"]["LinkField"] = "email";
	$tdatafixedcomponents["field2"]["DisplayField"] = "name";
	$tdatafixedcomponents[".hasCustomViewField"] = true;
}

$tableEvents["fixedcomponents"] = new eventsBase;
$tdatafixedcomponents[".hasEvents"] = false;

$cipherer = new RunnerCipherer("fixedcomponents");

?>
<?php
require_once(getabspath("classes/cipherer.php"));
$tdataproductcolorcostjg = array();
	$tdataproductcolorcostjg[".NumberOfChars"] = 80; 
	$tdataproductcolorcostjg[".ShortName"] = "productcolorcostjg";
	$tdataproductcolorcostjg[".OwnerID"] = "";
	$tdataproductcolorcostjg[".OriginalTable"] = "productcolorcostjg";

//	field labels
$fieldLabelsproductcolorcostjg = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsproductcolorcostjg["English"] = array();
	$fieldToolTipsproductcolorcostjg["English"] = array();
	$fieldLabelsproductcolorcostjg["English"]["ProductColor"] = "Product Color";
	$fieldToolTipsproductcolorcostjg["English"]["ProductColor"] = "";
	$fieldLabelsproductcolorcostjg["English"]["ProdGrpCode"] = "Prod Grp Code";
	$fieldToolTipsproductcolorcostjg["English"]["ProdGrpCode"] = "";
	$fieldLabelsproductcolorcostjg["English"]["Cost4"] = "Cost4";
	$fieldToolTipsproductcolorcostjg["English"]["Cost4"] = "";
	if (count($fieldToolTipsproductcolorcostjg["English"]))
		$tdataproductcolorcostjg[".isUseToolTips"] = true;
}
	
	
	$tdataproductcolorcostjg[".NCSearch"] = true;



$tdataproductcolorcostjg[".shortTableName"] = "productcolorcostjg";
$tdataproductcolorcostjg[".nSecOptions"] = 0;
$tdataproductcolorcostjg[".recsPerRowList"] = 1;
$tdataproductcolorcostjg[".mainTableOwnerID"] = "";
$tdataproductcolorcostjg[".moveNext"] = 1;
$tdataproductcolorcostjg[".nType"] = 0;

$tdataproductcolorcostjg[".strOriginalTableName"] = "productcolorcostjg";




$tdataproductcolorcostjg[".showAddInPopup"] = false;

$tdataproductcolorcostjg[".showEditInPopup"] = false;

$tdataproductcolorcostjg[".showViewInPopup"] = false;

$tdataproductcolorcostjg[".fieldsForRegister"] = array();

$tdataproductcolorcostjg[".listAjax"] = false;

	$tdataproductcolorcostjg[".audit"] = false;

	$tdataproductcolorcostjg[".locking"] = false;

$tdataproductcolorcostjg[".listIcons"] = true;

$tdataproductcolorcostjg[".exportTo"] = true;

$tdataproductcolorcostjg[".printFriendly"] = true;


$tdataproductcolorcostjg[".showSimpleSearchOptions"] = false;

$tdataproductcolorcostjg[".showSearchPanel"] = true;

if (isMobile())
	$tdataproductcolorcostjg[".isUseAjaxSuggest"] = false;
else 
	$tdataproductcolorcostjg[".isUseAjaxSuggest"] = true;

$tdataproductcolorcostjg[".rowHighlite"] = true;

// button handlers file names

$tdataproductcolorcostjg[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproductcolorcostjg[".isUseTimeForSearch"] = false;




$tdataproductcolorcostjg[".allSearchFields"] = array();

$tdataproductcolorcostjg[".allSearchFields"][] = "ProductColor";
$tdataproductcolorcostjg[".allSearchFields"][] = "ProdGrpCode";
$tdataproductcolorcostjg[".allSearchFields"][] = "Cost4";

$tdataproductcolorcostjg[".googleLikeFields"][] = "ProductColor";
$tdataproductcolorcostjg[".googleLikeFields"][] = "ProdGrpCode";
$tdataproductcolorcostjg[".googleLikeFields"][] = "Cost4";


$tdataproductcolorcostjg[".advSearchFields"][] = "ProductColor";
$tdataproductcolorcostjg[".advSearchFields"][] = "ProdGrpCode";
$tdataproductcolorcostjg[".advSearchFields"][] = "Cost4";

$tdataproductcolorcostjg[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataproductcolorcostjg[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataproductcolorcostjg[".strOrderBy"] = $tstrOrderBy;

$tdataproductcolorcostjg[".orderindexes"] = array();

$tdataproductcolorcostjg[".sqlHead"] = "SELECT ProductColor,   ProdGrpCode,   Cost4";
$tdataproductcolorcostjg[".sqlFrom"] = "FROM productcolorcostjg";
$tdataproductcolorcostjg[".sqlWhereExpr"] = "";
$tdataproductcolorcostjg[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproductcolorcostjg[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproductcolorcostjg[".arrGroupsPerPage"] = $arrGPP;

$tableKeysproductcolorcostjg = array();
$tdataproductcolorcostjg[".Keys"] = $tableKeysproductcolorcostjg;

$tdataproductcolorcostjg[".listFields"] = array();
$tdataproductcolorcostjg[".listFields"][] = "ProductColor";
$tdataproductcolorcostjg[".listFields"][] = "ProdGrpCode";
$tdataproductcolorcostjg[".listFields"][] = "Cost4";

$tdataproductcolorcostjg[".viewFields"] = array();
$tdataproductcolorcostjg[".viewFields"][] = "ProductColor";
$tdataproductcolorcostjg[".viewFields"][] = "ProdGrpCode";
$tdataproductcolorcostjg[".viewFields"][] = "Cost4";

$tdataproductcolorcostjg[".addFields"] = array();
$tdataproductcolorcostjg[".addFields"][] = "ProductColor";
$tdataproductcolorcostjg[".addFields"][] = "ProdGrpCode";
$tdataproductcolorcostjg[".addFields"][] = "Cost4";

$tdataproductcolorcostjg[".inlineAddFields"] = array();
$tdataproductcolorcostjg[".inlineAddFields"][] = "ProductColor";
$tdataproductcolorcostjg[".inlineAddFields"][] = "ProdGrpCode";
$tdataproductcolorcostjg[".inlineAddFields"][] = "Cost4";

$tdataproductcolorcostjg[".editFields"] = array();
$tdataproductcolorcostjg[".editFields"][] = "ProductColor";
$tdataproductcolorcostjg[".editFields"][] = "ProdGrpCode";
$tdataproductcolorcostjg[".editFields"][] = "Cost4";

$tdataproductcolorcostjg[".inlineEditFields"] = array();
$tdataproductcolorcostjg[".inlineEditFields"][] = "ProductColor";
$tdataproductcolorcostjg[".inlineEditFields"][] = "ProdGrpCode";
$tdataproductcolorcostjg[".inlineEditFields"][] = "Cost4";

$tdataproductcolorcostjg[".exportFields"] = array();
$tdataproductcolorcostjg[".exportFields"][] = "ProductColor";
$tdataproductcolorcostjg[".exportFields"][] = "ProdGrpCode";
$tdataproductcolorcostjg[".exportFields"][] = "Cost4";

$tdataproductcolorcostjg[".printFields"] = array();
$tdataproductcolorcostjg[".printFields"][] = "ProductColor";
$tdataproductcolorcostjg[".printFields"][] = "ProdGrpCode";
$tdataproductcolorcostjg[".printFields"][] = "Cost4";

//	ProductColor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ProductColor";
	$fdata["GoodName"] = "ProductColor";
	$fdata["ownerTable"] = "productcolorcostjg";
	$fdata["Label"] = "Product Color"; 
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
	
		$fdata["strField"] = "ProductColor"; 
		$fdata["FullName"] = "ProductColor";
	
		
		
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
	
		
		
	$tdataproductcolorcostjg["ProductColor"] = $fdata;
//	ProdGrpCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ProdGrpCode";
	$fdata["GoodName"] = "ProdGrpCode";
	$fdata["ownerTable"] = "productcolorcostjg";
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
	
		
		
	$tdataproductcolorcostjg["ProdGrpCode"] = $fdata;
//	Cost4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Cost4";
	$fdata["GoodName"] = "Cost4";
	$fdata["ownerTable"] = "productcolorcostjg";
	$fdata["Label"] = "Cost4"; 
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
	
		$fdata["strField"] = "Cost4"; 
		$fdata["FullName"] = "Cost4";
	
		
		
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
	
		
		
	$tdataproductcolorcostjg["Cost4"] = $fdata;

	
$tables_data["productcolorcostjg"]=&$tdataproductcolorcostjg;
$field_labels["productcolorcostjg"] = &$fieldLabelsproductcolorcostjg;
$fieldToolTips["productcolorcostjg"] = &$fieldToolTipsproductcolorcostjg;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["productcolorcostjg"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["productcolorcostjg"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_productcolorcostjg()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ProductColor,   ProdGrpCode,   Cost4";
$proto0["m_strFrom"] = "FROM productcolorcostjg";
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
	"m_strName" => "ProductColor",
	"m_strTable" => "productcolorcostjg"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ProdGrpCode",
	"m_strTable" => "productcolorcostjg"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Cost4",
	"m_strTable" => "productcolorcostjg"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "productcolorcostjg";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "ProductColor";
$proto12["m_columns"][] = "ProdGrpCode";
$proto12["m_columns"][] = "Cost4";
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
$queryData_productcolorcostjg = createSqlQuery_productcolorcostjg();
			$tdataproductcolorcostjg[".sqlquery"] = $queryData_productcolorcostjg;
	
if(isset($tdataproductcolorcostjg["field2"])){
	$tdataproductcolorcostjg["field2"]["LookupTable"] = "carscars_view";
	$tdataproductcolorcostjg["field2"]["LookupOrderBy"] = "name";
	$tdataproductcolorcostjg["field2"]["LookupType"] = 4;
	$tdataproductcolorcostjg["field2"]["LinkField"] = "email";
	$tdataproductcolorcostjg["field2"]["DisplayField"] = "name";
	$tdataproductcolorcostjg[".hasCustomViewField"] = true;
}

$tableEvents["productcolorcostjg"] = new eventsBase;
$tdataproductcolorcostjg[".hasEvents"] = false;

$cipherer = new RunnerCipherer("productcolorcostjg");

?>
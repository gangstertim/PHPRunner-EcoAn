<?php
require_once(getabspath("classes/cipherer.php"));
$tdatafixedassyuse = array();
	$tdatafixedassyuse[".NumberOfChars"] = 80; 
	$tdatafixedassyuse[".ShortName"] = "fixedassyuse";
	$tdatafixedassyuse[".OwnerID"] = "";
	$tdatafixedassyuse[".OriginalTable"] = "fixedassyuse";

//	field labels
$fieldLabelsfixedassyuse = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfixedassyuse["English"] = array();
	$fieldToolTipsfixedassyuse["English"] = array();
	$fieldLabelsfixedassyuse["English"]["ProdGrpCode"] = "Prod Grp Code";
	$fieldToolTipsfixedassyuse["English"]["ProdGrpCode"] = "";
	$fieldLabelsfixedassyuse["English"]["ProdNo"] = "Prod No";
	$fieldToolTipsfixedassyuse["English"]["ProdNo"] = "";
	$fieldLabelsfixedassyuse["English"]["Qty"] = "Qty";
	$fieldToolTipsfixedassyuse["English"]["Qty"] = "";
	if (count($fieldToolTipsfixedassyuse["English"]))
		$tdatafixedassyuse[".isUseToolTips"] = true;
}
	
	
	$tdatafixedassyuse[".NCSearch"] = true;



$tdatafixedassyuse[".shortTableName"] = "fixedassyuse";
$tdatafixedassyuse[".nSecOptions"] = 0;
$tdatafixedassyuse[".recsPerRowList"] = 1;
$tdatafixedassyuse[".mainTableOwnerID"] = "";
$tdatafixedassyuse[".moveNext"] = 1;
$tdatafixedassyuse[".nType"] = 0;

$tdatafixedassyuse[".strOriginalTableName"] = "fixedassyuse";




$tdatafixedassyuse[".showAddInPopup"] = false;

$tdatafixedassyuse[".showEditInPopup"] = false;

$tdatafixedassyuse[".showViewInPopup"] = false;

$tdatafixedassyuse[".fieldsForRegister"] = array();

$tdatafixedassyuse[".listAjax"] = false;

	$tdatafixedassyuse[".audit"] = false;

	$tdatafixedassyuse[".locking"] = false;

$tdatafixedassyuse[".listIcons"] = true;

$tdatafixedassyuse[".exportTo"] = true;

$tdatafixedassyuse[".printFriendly"] = true;


$tdatafixedassyuse[".showSimpleSearchOptions"] = false;

$tdatafixedassyuse[".showSearchPanel"] = true;

if (isMobile())
	$tdatafixedassyuse[".isUseAjaxSuggest"] = false;
else 
	$tdatafixedassyuse[".isUseAjaxSuggest"] = true;

$tdatafixedassyuse[".rowHighlite"] = true;

// button handlers file names

$tdatafixedassyuse[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafixedassyuse[".isUseTimeForSearch"] = false;




$tdatafixedassyuse[".allSearchFields"] = array();

$tdatafixedassyuse[".allSearchFields"][] = "ProdGrpCode";
$tdatafixedassyuse[".allSearchFields"][] = "ProdNo";
$tdatafixedassyuse[".allSearchFields"][] = "Qty";

$tdatafixedassyuse[".googleLikeFields"][] = "ProdGrpCode";
$tdatafixedassyuse[".googleLikeFields"][] = "ProdNo";
$tdatafixedassyuse[".googleLikeFields"][] = "Qty";


$tdatafixedassyuse[".advSearchFields"][] = "ProdGrpCode";
$tdatafixedassyuse[".advSearchFields"][] = "ProdNo";
$tdatafixedassyuse[".advSearchFields"][] = "Qty";

$tdatafixedassyuse[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatafixedassyuse[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafixedassyuse[".strOrderBy"] = $tstrOrderBy;

$tdatafixedassyuse[".orderindexes"] = array();

$tdatafixedassyuse[".sqlHead"] = "SELECT ProdGrpCode,   ProdNo,   Qty";
$tdatafixedassyuse[".sqlFrom"] = "FROM fixedassyuse";
$tdatafixedassyuse[".sqlWhereExpr"] = "";
$tdatafixedassyuse[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafixedassyuse[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafixedassyuse[".arrGroupsPerPage"] = $arrGPP;

$tableKeysfixedassyuse = array();
$tdatafixedassyuse[".Keys"] = $tableKeysfixedassyuse;

$tdatafixedassyuse[".listFields"] = array();
$tdatafixedassyuse[".listFields"][] = "ProdGrpCode";
$tdatafixedassyuse[".listFields"][] = "ProdNo";
$tdatafixedassyuse[".listFields"][] = "Qty";

$tdatafixedassyuse[".viewFields"] = array();
$tdatafixedassyuse[".viewFields"][] = "ProdGrpCode";
$tdatafixedassyuse[".viewFields"][] = "ProdNo";
$tdatafixedassyuse[".viewFields"][] = "Qty";

$tdatafixedassyuse[".addFields"] = array();
$tdatafixedassyuse[".addFields"][] = "ProdGrpCode";
$tdatafixedassyuse[".addFields"][] = "ProdNo";
$tdatafixedassyuse[".addFields"][] = "Qty";

$tdatafixedassyuse[".inlineAddFields"] = array();
$tdatafixedassyuse[".inlineAddFields"][] = "ProdGrpCode";
$tdatafixedassyuse[".inlineAddFields"][] = "ProdNo";
$tdatafixedassyuse[".inlineAddFields"][] = "Qty";

$tdatafixedassyuse[".editFields"] = array();
$tdatafixedassyuse[".editFields"][] = "ProdGrpCode";
$tdatafixedassyuse[".editFields"][] = "ProdNo";
$tdatafixedassyuse[".editFields"][] = "Qty";

$tdatafixedassyuse[".inlineEditFields"] = array();
$tdatafixedassyuse[".inlineEditFields"][] = "ProdGrpCode";
$tdatafixedassyuse[".inlineEditFields"][] = "ProdNo";
$tdatafixedassyuse[".inlineEditFields"][] = "Qty";

$tdatafixedassyuse[".exportFields"] = array();
$tdatafixedassyuse[".exportFields"][] = "ProdGrpCode";
$tdatafixedassyuse[".exportFields"][] = "ProdNo";
$tdatafixedassyuse[".exportFields"][] = "Qty";

$tdatafixedassyuse[".printFields"] = array();
$tdatafixedassyuse[".printFields"][] = "ProdGrpCode";
$tdatafixedassyuse[".printFields"][] = "ProdNo";
$tdatafixedassyuse[".printFields"][] = "Qty";

//	ProdGrpCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ProdGrpCode";
	$fdata["GoodName"] = "ProdGrpCode";
	$fdata["ownerTable"] = "fixedassyuse";
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
	
		
		
	$tdatafixedassyuse["ProdGrpCode"] = $fdata;
//	ProdNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ProdNo";
	$fdata["GoodName"] = "ProdNo";
	$fdata["ownerTable"] = "fixedassyuse";
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
	
		
		
	$tdatafixedassyuse["ProdNo"] = $fdata;
//	Qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Qty";
	$fdata["GoodName"] = "Qty";
	$fdata["ownerTable"] = "fixedassyuse";
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
	
		
		
	$tdatafixedassyuse["Qty"] = $fdata;

	
$tables_data["fixedassyuse"]=&$tdatafixedassyuse;
$field_labels["fixedassyuse"] = &$fieldLabelsfixedassyuse;
$fieldToolTips["fixedassyuse"] = &$fieldToolTipsfixedassyuse;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["fixedassyuse"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["fixedassyuse"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_fixedassyuse()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ProdGrpCode,   ProdNo,   Qty";
$proto0["m_strFrom"] = "FROM fixedassyuse";
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
	"m_strTable" => "fixedassyuse"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ProdNo",
	"m_strTable" => "fixedassyuse"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Qty",
	"m_strTable" => "fixedassyuse"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "fixedassyuse";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "ProdGrpCode";
$proto12["m_columns"][] = "ProdNo";
$proto12["m_columns"][] = "Qty";
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
$queryData_fixedassyuse = createSqlQuery_fixedassyuse();
			$tdatafixedassyuse[".sqlquery"] = $queryData_fixedassyuse;
	
if(isset($tdatafixedassyuse["field2"])){
	$tdatafixedassyuse["field2"]["LookupTable"] = "carscars_view";
	$tdatafixedassyuse["field2"]["LookupOrderBy"] = "name";
	$tdatafixedassyuse["field2"]["LookupType"] = 4;
	$tdatafixedassyuse["field2"]["LinkField"] = "email";
	$tdatafixedassyuse["field2"]["DisplayField"] = "name";
	$tdatafixedassyuse[".hasCustomViewField"] = true;
}

$tableEvents["fixedassyuse"] = new eventsBase;
$tdatafixedassyuse[".hasEvents"] = false;

$cipherer = new RunnerCipherer("fixedassyuse");

?>
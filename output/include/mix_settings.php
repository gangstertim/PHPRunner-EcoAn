<?php
require_once(getabspath("classes/cipherer.php"));
$tdatamix = array();
	$tdatamix[".NumberOfChars"] = 80; 
	$tdatamix[".ShortName"] = "mix";
	$tdatamix[".OwnerID"] = "";
	$tdatamix[".OriginalTable"] = "mix";

//	field labels
$fieldLabelsmix = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmix["English"] = array();
	$fieldToolTipsmix["English"] = array();
	$fieldLabelsmix["English"]["MixNo"] = "Mix No";
	$fieldToolTipsmix["English"]["MixNo"] = "";
	$fieldLabelsmix["English"]["ComponentNo"] = "Component No";
	$fieldToolTipsmix["English"]["ComponentNo"] = "";
	$fieldLabelsmix["English"]["Qtty"] = "Qtty";
	$fieldToolTipsmix["English"]["Qtty"] = "";
	$fieldLabelsmix["English"]["UnitOrBucket"] = "Unit Or Bucket";
	$fieldToolTipsmix["English"]["UnitOrBucket"] = "";
	if (count($fieldToolTipsmix["English"]))
		$tdatamix[".isUseToolTips"] = true;
}
	
	
	$tdatamix[".NCSearch"] = true;



$tdatamix[".shortTableName"] = "mix";
$tdatamix[".nSecOptions"] = 0;
$tdatamix[".recsPerRowList"] = 1;
$tdatamix[".mainTableOwnerID"] = "";
$tdatamix[".moveNext"] = 1;
$tdatamix[".nType"] = 0;

$tdatamix[".strOriginalTableName"] = "mix";




$tdatamix[".showAddInPopup"] = false;

$tdatamix[".showEditInPopup"] = false;

$tdatamix[".showViewInPopup"] = false;

$tdatamix[".fieldsForRegister"] = array();

$tdatamix[".listAjax"] = false;

	$tdatamix[".audit"] = false;

	$tdatamix[".locking"] = false;

$tdatamix[".listIcons"] = true;

$tdatamix[".exportTo"] = true;

$tdatamix[".printFriendly"] = true;


$tdatamix[".showSimpleSearchOptions"] = false;

$tdatamix[".showSearchPanel"] = true;

if (isMobile())
	$tdatamix[".isUseAjaxSuggest"] = false;
else 
	$tdatamix[".isUseAjaxSuggest"] = true;

$tdatamix[".rowHighlite"] = true;

// button handlers file names

$tdatamix[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamix[".isUseTimeForSearch"] = false;




$tdatamix[".allSearchFields"] = array();

$tdatamix[".allSearchFields"][] = "MixNo";
$tdatamix[".allSearchFields"][] = "ComponentNo";
$tdatamix[".allSearchFields"][] = "Qtty";
$tdatamix[".allSearchFields"][] = "UnitOrBucket";

$tdatamix[".googleLikeFields"][] = "MixNo";
$tdatamix[".googleLikeFields"][] = "ComponentNo";
$tdatamix[".googleLikeFields"][] = "Qtty";
$tdatamix[".googleLikeFields"][] = "UnitOrBucket";


$tdatamix[".advSearchFields"][] = "MixNo";
$tdatamix[".advSearchFields"][] = "ComponentNo";
$tdatamix[".advSearchFields"][] = "Qtty";
$tdatamix[".advSearchFields"][] = "UnitOrBucket";

$tdatamix[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatamix[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamix[".strOrderBy"] = $tstrOrderBy;

$tdatamix[".orderindexes"] = array();

$tdatamix[".sqlHead"] = "SELECT MixNo,   ComponentNo,   Qtty,   UnitOrBucket";
$tdatamix[".sqlFrom"] = "FROM mix";
$tdatamix[".sqlWhereExpr"] = "";
$tdatamix[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamix[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamix[".arrGroupsPerPage"] = $arrGPP;

$tableKeysmix = array();
$tdatamix[".Keys"] = $tableKeysmix;

$tdatamix[".listFields"] = array();
$tdatamix[".listFields"][] = "MixNo";
$tdatamix[".listFields"][] = "ComponentNo";
$tdatamix[".listFields"][] = "Qtty";
$tdatamix[".listFields"][] = "UnitOrBucket";

$tdatamix[".viewFields"] = array();
$tdatamix[".viewFields"][] = "MixNo";
$tdatamix[".viewFields"][] = "ComponentNo";
$tdatamix[".viewFields"][] = "Qtty";
$tdatamix[".viewFields"][] = "UnitOrBucket";

$tdatamix[".addFields"] = array();
$tdatamix[".addFields"][] = "MixNo";
$tdatamix[".addFields"][] = "ComponentNo";
$tdatamix[".addFields"][] = "Qtty";
$tdatamix[".addFields"][] = "UnitOrBucket";

$tdatamix[".inlineAddFields"] = array();
$tdatamix[".inlineAddFields"][] = "MixNo";
$tdatamix[".inlineAddFields"][] = "ComponentNo";
$tdatamix[".inlineAddFields"][] = "Qtty";
$tdatamix[".inlineAddFields"][] = "UnitOrBucket";

$tdatamix[".editFields"] = array();
$tdatamix[".editFields"][] = "MixNo";
$tdatamix[".editFields"][] = "ComponentNo";
$tdatamix[".editFields"][] = "Qtty";
$tdatamix[".editFields"][] = "UnitOrBucket";

$tdatamix[".inlineEditFields"] = array();
$tdatamix[".inlineEditFields"][] = "MixNo";
$tdatamix[".inlineEditFields"][] = "ComponentNo";
$tdatamix[".inlineEditFields"][] = "Qtty";
$tdatamix[".inlineEditFields"][] = "UnitOrBucket";

$tdatamix[".exportFields"] = array();
$tdatamix[".exportFields"][] = "MixNo";
$tdatamix[".exportFields"][] = "ComponentNo";
$tdatamix[".exportFields"][] = "Qtty";
$tdatamix[".exportFields"][] = "UnitOrBucket";

$tdatamix[".printFields"] = array();
$tdatamix[".printFields"][] = "MixNo";
$tdatamix[".printFields"][] = "ComponentNo";
$tdatamix[".printFields"][] = "Qtty";
$tdatamix[".printFields"][] = "UnitOrBucket";

//	MixNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MixNo";
	$fdata["GoodName"] = "MixNo";
	$fdata["ownerTable"] = "mix";
	$fdata["Label"] = "Mix No"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "MixNo"; 
		$fdata["FullName"] = "MixNo";
	
		
		
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
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamix["MixNo"] = $fdata;
//	ComponentNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ComponentNo";
	$fdata["GoodName"] = "ComponentNo";
	$fdata["ownerTable"] = "mix";
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
	
		
		
	$tdatamix["ComponentNo"] = $fdata;
//	Qtty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Qtty";
	$fdata["GoodName"] = "Qtty";
	$fdata["ownerTable"] = "mix";
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
	
		
		
	$tdatamix["Qtty"] = $fdata;
//	UnitOrBucket
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "UnitOrBucket";
	$fdata["GoodName"] = "UnitOrBucket";
	$fdata["ownerTable"] = "mix";
	$fdata["Label"] = "Unit Or Bucket"; 
	$fdata["FieldType"] = 201;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "UnitOrBucket"; 
		$fdata["FullName"] = "UnitOrBucket";
	
		
		
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
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamix["UnitOrBucket"] = $fdata;

	
$tables_data["mix"]=&$tdatamix;
$field_labels["mix"] = &$fieldLabelsmix;
$fieldToolTips["mix"] = &$fieldToolTipsmix;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mix"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["mix"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mix()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MixNo,   ComponentNo,   Qtty,   UnitOrBucket";
$proto0["m_strFrom"] = "FROM mix";
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
	"m_strName" => "MixNo",
	"m_strTable" => "mix"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ComponentNo",
	"m_strTable" => "mix"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Qtty",
	"m_strTable" => "mix"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitOrBucket",
	"m_strTable" => "mix"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "mix";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "MixNo";
$proto14["m_columns"][] = "ComponentNo";
$proto14["m_columns"][] = "Qtty";
$proto14["m_columns"][] = "UnitOrBucket";
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
$queryData_mix = createSqlQuery_mix();
				$tdatamix[".sqlquery"] = $queryData_mix;
	
if(isset($tdatamix["field2"])){
	$tdatamix["field2"]["LookupTable"] = "carscars_view";
	$tdatamix["field2"]["LookupOrderBy"] = "name";
	$tdatamix["field2"]["LookupType"] = 4;
	$tdatamix["field2"]["LinkField"] = "email";
	$tdatamix["field2"]["DisplayField"] = "name";
	$tdatamix[".hasCustomViewField"] = true;
}

$tableEvents["mix"] = new eventsBase;
$tdatamix[".hasEvents"] = false;

$cipherer = new RunnerCipherer("mix");

?>
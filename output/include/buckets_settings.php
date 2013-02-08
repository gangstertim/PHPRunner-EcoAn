<?php
require_once(getabspath("classes/cipherer.php"));
$tdatabuckets = array();
	$tdatabuckets[".NumberOfChars"] = 80; 
	$tdatabuckets[".ShortName"] = "buckets";
	$tdatabuckets[".OwnerID"] = "";
	$tdatabuckets[".OriginalTable"] = "buckets";

//	field labels
$fieldLabelsbuckets = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsbuckets["English"] = array();
	$fieldToolTipsbuckets["English"] = array();
	$fieldLabelsbuckets["English"]["UnitEng"] = "Unit Eng";
	$fieldToolTipsbuckets["English"]["UnitEng"] = "";
	$fieldLabelsbuckets["English"]["Volume"] = "Volume";
	$fieldToolTipsbuckets["English"]["Volume"] = "";
	$fieldLabelsbuckets["English"]["DryWeight"] = "Dry Weight";
	$fieldToolTipsbuckets["English"]["DryWeight"] = "";
	$fieldLabelsbuckets["English"]["BucketNo"] = "Bucket No";
	$fieldToolTipsbuckets["English"]["BucketNo"] = "";
	if (count($fieldToolTipsbuckets["English"]))
		$tdatabuckets[".isUseToolTips"] = true;
}
	
	
	$tdatabuckets[".NCSearch"] = true;



$tdatabuckets[".shortTableName"] = "buckets";
$tdatabuckets[".nSecOptions"] = 0;
$tdatabuckets[".recsPerRowList"] = 1;
$tdatabuckets[".mainTableOwnerID"] = "";
$tdatabuckets[".moveNext"] = 1;
$tdatabuckets[".nType"] = 0;

$tdatabuckets[".strOriginalTableName"] = "buckets";




$tdatabuckets[".showAddInPopup"] = false;

$tdatabuckets[".showEditInPopup"] = false;

$tdatabuckets[".showViewInPopup"] = false;

$tdatabuckets[".fieldsForRegister"] = array();

$tdatabuckets[".listAjax"] = false;

	$tdatabuckets[".audit"] = false;

	$tdatabuckets[".locking"] = false;

$tdatabuckets[".listIcons"] = true;
$tdatabuckets[".edit"] = true;

$tdatabuckets[".exportTo"] = true;

$tdatabuckets[".printFriendly"] = true;


$tdatabuckets[".showSimpleSearchOptions"] = false;

$tdatabuckets[".showSearchPanel"] = true;

if (isMobile())
	$tdatabuckets[".isUseAjaxSuggest"] = false;
else 
	$tdatabuckets[".isUseAjaxSuggest"] = true;

$tdatabuckets[".rowHighlite"] = true;

// button handlers file names

$tdatabuckets[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabuckets[".isUseTimeForSearch"] = false;




$tdatabuckets[".allSearchFields"] = array();

$tdatabuckets[".allSearchFields"][] = "UnitEng";
$tdatabuckets[".allSearchFields"][] = "Volume";
$tdatabuckets[".allSearchFields"][] = "DryWeight";
$tdatabuckets[".allSearchFields"][] = "BucketNo";

$tdatabuckets[".googleLikeFields"][] = "UnitEng";
$tdatabuckets[".googleLikeFields"][] = "Volume";
$tdatabuckets[".googleLikeFields"][] = "DryWeight";
$tdatabuckets[".googleLikeFields"][] = "BucketNo";


$tdatabuckets[".advSearchFields"][] = "UnitEng";
$tdatabuckets[".advSearchFields"][] = "Volume";
$tdatabuckets[".advSearchFields"][] = "DryWeight";
$tdatabuckets[".advSearchFields"][] = "BucketNo";

$tdatabuckets[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatabuckets[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabuckets[".strOrderBy"] = $tstrOrderBy;

$tdatabuckets[".orderindexes"] = array();

$tdatabuckets[".sqlHead"] = "SELECT UnitEng,  Volume,  DryWeight,  BucketNo";
$tdatabuckets[".sqlFrom"] = "FROM buckets";
$tdatabuckets[".sqlWhereExpr"] = "";
$tdatabuckets[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabuckets[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabuckets[".arrGroupsPerPage"] = $arrGPP;

$tableKeysbuckets = array();
$tableKeysbuckets[] = "BucketNo";
$tdatabuckets[".Keys"] = $tableKeysbuckets;

$tdatabuckets[".listFields"] = array();
$tdatabuckets[".listFields"][] = "BucketNo";
$tdatabuckets[".listFields"][] = "UnitEng";
$tdatabuckets[".listFields"][] = "Volume";
$tdatabuckets[".listFields"][] = "DryWeight";

$tdatabuckets[".viewFields"] = array();

$tdatabuckets[".addFields"] = array();
$tdatabuckets[".addFields"][] = "BucketNo";
$tdatabuckets[".addFields"][] = "UnitEng";
$tdatabuckets[".addFields"][] = "Volume";
$tdatabuckets[".addFields"][] = "DryWeight";

$tdatabuckets[".inlineAddFields"] = array();

$tdatabuckets[".editFields"] = array();
$tdatabuckets[".editFields"][] = "BucketNo";
$tdatabuckets[".editFields"][] = "UnitEng";
$tdatabuckets[".editFields"][] = "Volume";
$tdatabuckets[".editFields"][] = "DryWeight";

$tdatabuckets[".inlineEditFields"] = array();

$tdatabuckets[".exportFields"] = array();
$tdatabuckets[".exportFields"][] = "UnitEng";
$tdatabuckets[".exportFields"][] = "Volume";
$tdatabuckets[".exportFields"][] = "DryWeight";
$tdatabuckets[".exportFields"][] = "BucketNo";

$tdatabuckets[".printFields"] = array();
$tdatabuckets[".printFields"][] = "UnitEng";
$tdatabuckets[".printFields"][] = "Volume";
$tdatabuckets[".printFields"][] = "DryWeight";
$tdatabuckets[".printFields"][] = "BucketNo";

//	UnitEng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "UnitEng";
	$fdata["GoodName"] = "UnitEng";
	$fdata["ownerTable"] = "buckets";
	$fdata["Label"] = "Unit Eng"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "UnitEng"; 
		$fdata["FullName"] = "UnitEng";
	
		
		
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
			$edata["EditParams"].= " maxlength=10";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatabuckets["UnitEng"] = $fdata;
//	Volume
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Volume";
	$fdata["GoodName"] = "Volume";
	$fdata["ownerTable"] = "buckets";
	$fdata["Label"] = "Volume"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Volume"; 
		$fdata["FullName"] = "Volume";
	
		
		
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
	
		
		
	$tdatabuckets["Volume"] = $fdata;
//	DryWeight
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DryWeight";
	$fdata["GoodName"] = "DryWeight";
	$fdata["ownerTable"] = "buckets";
	$fdata["Label"] = "Dry Weight"; 
	$fdata["FieldType"] = 5;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "DryWeight"; 
		$fdata["FullName"] = "DryWeight";
	
		
		
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
	
		
		
	$tdatabuckets["DryWeight"] = $fdata;
//	BucketNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "BucketNo";
	$fdata["GoodName"] = "BucketNo";
	$fdata["ownerTable"] = "buckets";
	$fdata["Label"] = "Bucket No"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "BucketNo"; 
		$fdata["FullName"] = "BucketNo";
	
		
		
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
	
		
		
	$tdatabuckets["BucketNo"] = $fdata;

	
$tables_data["buckets"]=&$tdatabuckets;
$field_labels["buckets"] = &$fieldLabelsbuckets;
$fieldToolTips["buckets"] = &$fieldToolTipsbuckets;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["buckets"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["buckets"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_buckets()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "UnitEng,  Volume,  DryWeight,  BucketNo";
$proto0["m_strFrom"] = "FROM buckets";
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
	"m_strName" => "UnitEng",
	"m_strTable" => "buckets"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Volume",
	"m_strTable" => "buckets"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "DryWeight",
	"m_strTable" => "buckets"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "BucketNo",
	"m_strTable" => "buckets"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "buckets";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "UnitEng";
$proto14["m_columns"][] = "BucketNo";
$proto14["m_columns"][] = "Volume";
$proto14["m_columns"][] = "ComponentNo";
$proto14["m_columns"][] = "DryWeight";
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
$queryData_buckets = createSqlQuery_buckets();
				$tdatabuckets[".sqlquery"] = $queryData_buckets;
	
if(isset($tdatabuckets["field2"])){
	$tdatabuckets["field2"]["LookupTable"] = "carscars_view";
	$tdatabuckets["field2"]["LookupOrderBy"] = "name";
	$tdatabuckets["field2"]["LookupType"] = 4;
	$tdatabuckets["field2"]["LinkField"] = "email";
	$tdatabuckets["field2"]["DisplayField"] = "name";
	$tdatabuckets[".hasCustomViewField"] = true;
}

$tableEvents["buckets"] = new eventsBase;
$tdatabuckets[".hasEvents"] = false;

$cipherer = new RunnerCipherer("buckets");

?>
<?php
require_once(getabspath("classes/cipherer.php"));
$tdataMix_Registry_Report = array();
	$tdataMix_Registry_Report[".NumberOfChars"] = 80; 
	$tdataMix_Registry_Report[".ShortName"] = "Mix_Registry_Report";
	$tdataMix_Registry_Report[".OwnerID"] = "";
	$tdataMix_Registry_Report[".OriginalTable"] = "mixregistry";

//	field labels
$fieldLabelsMix_Registry_Report = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsMix_Registry_Report["English"] = array();
	$fieldToolTipsMix_Registry_Report["English"] = array();
	$fieldLabelsMix_Registry_Report["English"]["MixNo"] = "Mix No";
	$fieldToolTipsMix_Registry_Report["English"]["MixNo"] = "";
	$fieldLabelsMix_Registry_Report["English"]["MixColor"] = "Mix Color";
	$fieldToolTipsMix_Registry_Report["English"]["MixColor"] = "";
	$fieldLabelsMix_Registry_Report["English"]["ProdGrpCode"] = "Prod Grp Code";
	$fieldToolTipsMix_Registry_Report["English"]["ProdGrpCode"] = "";
	$fieldLabelsMix_Registry_Report["English"]["Notes"] = "Notes";
	$fieldToolTipsMix_Registry_Report["English"]["Notes"] = "";
	$fieldLabelsMix_Registry_Report["English"]["Status"] = "Status";
	$fieldToolTipsMix_Registry_Report["English"]["Status"] = "";
	if (count($fieldToolTipsMix_Registry_Report["English"]))
		$tdataMix_Registry_Report[".isUseToolTips"] = true;
}
	
	
	$tdataMix_Registry_Report[".NCSearch"] = true;



$tdataMix_Registry_Report[".shortTableName"] = "Mix_Registry_Report";
$tdataMix_Registry_Report[".nSecOptions"] = 0;
$tdataMix_Registry_Report[".recsPerRowList"] = 1;
$tdataMix_Registry_Report[".mainTableOwnerID"] = "";
$tdataMix_Registry_Report[".moveNext"] = 1;
$tdataMix_Registry_Report[".nType"] = 2;

$tdataMix_Registry_Report[".strOriginalTableName"] = "mixregistry";




$tdataMix_Registry_Report[".showAddInPopup"] = false;

$tdataMix_Registry_Report[".showEditInPopup"] = false;

$tdataMix_Registry_Report[".showViewInPopup"] = false;

$tdataMix_Registry_Report[".fieldsForRegister"] = array();

$tdataMix_Registry_Report[".listAjax"] = false;

	$tdataMix_Registry_Report[".audit"] = false;

	$tdataMix_Registry_Report[".locking"] = false;

$tdataMix_Registry_Report[".listIcons"] = true;

$tdataMix_Registry_Report[".exportTo"] = true;

$tdataMix_Registry_Report[".printFriendly"] = true;


$tdataMix_Registry_Report[".showSimpleSearchOptions"] = false;

$tdataMix_Registry_Report[".showSearchPanel"] = true;

if (isMobile())
	$tdataMix_Registry_Report[".isUseAjaxSuggest"] = false;
else 
	$tdataMix_Registry_Report[".isUseAjaxSuggest"] = true;


// button handlers file names

$tdataMix_Registry_Report[".addPageEvents"] = false;

// use timepicker for search panel
$tdataMix_Registry_Report[".isUseTimeForSearch"] = false;




$tdataMix_Registry_Report[".allSearchFields"] = array();

$tdataMix_Registry_Report[".allSearchFields"][] = "MixNo";
$tdataMix_Registry_Report[".allSearchFields"][] = "MixColor";
$tdataMix_Registry_Report[".allSearchFields"][] = "ProdGrpCode";
$tdataMix_Registry_Report[".allSearchFields"][] = "Notes";
$tdataMix_Registry_Report[".allSearchFields"][] = "Status";

$tdataMix_Registry_Report[".googleLikeFields"][] = "MixNo";
$tdataMix_Registry_Report[".googleLikeFields"][] = "MixColor";
$tdataMix_Registry_Report[".googleLikeFields"][] = "ProdGrpCode";
$tdataMix_Registry_Report[".googleLikeFields"][] = "Notes";
$tdataMix_Registry_Report[".googleLikeFields"][] = "Status";


$tdataMix_Registry_Report[".advSearchFields"][] = "MixNo";
$tdataMix_Registry_Report[".advSearchFields"][] = "MixColor";
$tdataMix_Registry_Report[".advSearchFields"][] = "ProdGrpCode";
$tdataMix_Registry_Report[".advSearchFields"][] = "Notes";
$tdataMix_Registry_Report[".advSearchFields"][] = "Status";

$tdataMix_Registry_Report[".isTableType"] = "report";

	



// Access doesn't support subqueries from the same table as main




$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataMix_Registry_Report[".strOrderBy"] = $tstrOrderBy;

$tdataMix_Registry_Report[".orderindexes"] = array();

$tdataMix_Registry_Report[".sqlHead"] = "SELECT MixNo,  MixColor,  ProdGrpCode,  Notes,  Status";
$tdataMix_Registry_Report[".sqlFrom"] = "FROM mixregistry";
$tdataMix_Registry_Report[".sqlWhereExpr"] = "";
$tdataMix_Registry_Report[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataMix_Registry_Report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataMix_Registry_Report[".arrGroupsPerPage"] = $arrGPP;

$tableKeysMix_Registry_Report = array();
$tdataMix_Registry_Report[".Keys"] = $tableKeysMix_Registry_Report;

$tdataMix_Registry_Report[".listFields"] = array();
$tdataMix_Registry_Report[".listFields"][] = "MixNo";
$tdataMix_Registry_Report[".listFields"][] = "MixColor";
$tdataMix_Registry_Report[".listFields"][] = "ProdGrpCode";
$tdataMix_Registry_Report[".listFields"][] = "Notes";
$tdataMix_Registry_Report[".listFields"][] = "Status";

$tdataMix_Registry_Report[".viewFields"] = array();
$tdataMix_Registry_Report[".viewFields"][] = "MixNo";
$tdataMix_Registry_Report[".viewFields"][] = "MixColor";
$tdataMix_Registry_Report[".viewFields"][] = "ProdGrpCode";
$tdataMix_Registry_Report[".viewFields"][] = "Notes";
$tdataMix_Registry_Report[".viewFields"][] = "Status";

$tdataMix_Registry_Report[".addFields"] = array();
$tdataMix_Registry_Report[".addFields"][] = "MixNo";
$tdataMix_Registry_Report[".addFields"][] = "MixColor";
$tdataMix_Registry_Report[".addFields"][] = "ProdGrpCode";
$tdataMix_Registry_Report[".addFields"][] = "Notes";
$tdataMix_Registry_Report[".addFields"][] = "Status";

$tdataMix_Registry_Report[".inlineAddFields"] = array();
$tdataMix_Registry_Report[".inlineAddFields"][] = "MixNo";
$tdataMix_Registry_Report[".inlineAddFields"][] = "MixColor";
$tdataMix_Registry_Report[".inlineAddFields"][] = "ProdGrpCode";
$tdataMix_Registry_Report[".inlineAddFields"][] = "Notes";
$tdataMix_Registry_Report[".inlineAddFields"][] = "Status";

$tdataMix_Registry_Report[".editFields"] = array();
$tdataMix_Registry_Report[".editFields"][] = "MixNo";
$tdataMix_Registry_Report[".editFields"][] = "MixColor";
$tdataMix_Registry_Report[".editFields"][] = "ProdGrpCode";
$tdataMix_Registry_Report[".editFields"][] = "Notes";
$tdataMix_Registry_Report[".editFields"][] = "Status";

$tdataMix_Registry_Report[".inlineEditFields"] = array();
$tdataMix_Registry_Report[".inlineEditFields"][] = "MixNo";
$tdataMix_Registry_Report[".inlineEditFields"][] = "MixColor";
$tdataMix_Registry_Report[".inlineEditFields"][] = "ProdGrpCode";
$tdataMix_Registry_Report[".inlineEditFields"][] = "Notes";
$tdataMix_Registry_Report[".inlineEditFields"][] = "Status";

$tdataMix_Registry_Report[".exportFields"] = array();
$tdataMix_Registry_Report[".exportFields"][] = "MixNo";
$tdataMix_Registry_Report[".exportFields"][] = "MixColor";
$tdataMix_Registry_Report[".exportFields"][] = "ProdGrpCode";
$tdataMix_Registry_Report[".exportFields"][] = "Notes";
$tdataMix_Registry_Report[".exportFields"][] = "Status";

$tdataMix_Registry_Report[".printFields"] = array();
$tdataMix_Registry_Report[".printFields"][] = "MixNo";
$tdataMix_Registry_Report[".printFields"][] = "MixColor";
$tdataMix_Registry_Report[".printFields"][] = "ProdGrpCode";
$tdataMix_Registry_Report[".printFields"][] = "Notes";
$tdataMix_Registry_Report[".printFields"][] = "Status";

//	MixNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MixNo";
	$fdata["GoodName"] = "MixNo";
	$fdata["ownerTable"] = "mixregistry";
	$fdata["Label"] = "Mix No"; 
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
	
		$fdata["strField"] = "MixNo"; 
		$fdata["FullName"] = "MixNo";
	
		
		
				
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
			$edata["EditParams"].= " maxlength=10";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMix_Registry_Report["MixNo"] = $fdata;
//	MixColor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MixColor";
	$fdata["GoodName"] = "MixColor";
	$fdata["ownerTable"] = "mixregistry";
	$fdata["Label"] = "Mix Color"; 
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
	
		$fdata["strField"] = "MixColor"; 
		$fdata["FullName"] = "MixColor";
	
		
		
				
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
			$edata["EditParams"].= " maxlength=50";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMix_Registry_Report["MixColor"] = $fdata;
//	ProdGrpCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ProdGrpCode";
	$fdata["GoodName"] = "ProdGrpCode";
	$fdata["ownerTable"] = "mixregistry";
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
			$edata["EditParams"].= " maxlength=3";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMix_Registry_Report["ProdGrpCode"] = $fdata;
//	Notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Notes";
	$fdata["GoodName"] = "Notes";
	$fdata["ownerTable"] = "mixregistry";
	$fdata["Label"] = "Notes"; 
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
	
		$fdata["strField"] = "Notes"; 
		$fdata["FullName"] = "Notes";
	
		
		
				
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
			$edata["EditParams"].= " maxlength=100";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMix_Registry_Report["Notes"] = $fdata;
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "mixregistry";
	$fdata["Label"] = "Status"; 
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
	
		$fdata["strField"] = "Status"; 
		$fdata["FullName"] = "Status";
	
		
		
				
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
			$edata["EditParams"].= " maxlength=1";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
		
		$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataMix_Registry_Report["Status"] = $fdata;

	
$tables_data["Mix Registry Report"]=&$tdataMix_Registry_Report;
$field_labels["Mix_Registry_Report"] = &$fieldLabelsMix_Registry_Report;
$fieldToolTips["Mix Registry Report"] = &$fieldToolTipsMix_Registry_Report;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Mix Registry Report"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Mix Registry Report"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Mix_Registry_Report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MixNo,  MixColor,  ProdGrpCode,  Notes,  Status";
$proto0["m_strFrom"] = "FROM mixregistry";
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
	"m_strTable" => "mixregistry"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "MixColor",
	"m_strTable" => "mixregistry"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ProdGrpCode",
	"m_strTable" => "mixregistry"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Notes",
	"m_strTable" => "mixregistry"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "mixregistry"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "mixregistry";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "MixNo";
$proto16["m_columns"][] = "MixColor";
$proto16["m_columns"][] = "ProdGrpCode";
$proto16["m_columns"][] = "Notes";
$proto16["m_columns"][] = "Status";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_alias"] = "";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = "0";
$proto17["m_inBrackets"] = "0";
$proto17["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Mix_Registry_Report = createSqlQuery_Mix_Registry_Report();
					$tdataMix_Registry_Report[".sqlquery"] = $queryData_Mix_Registry_Report;
	
if(isset($tdataMix_Registry_Report["field2"])){
	$tdataMix_Registry_Report["field2"]["LookupTable"] = "carscars_view";
	$tdataMix_Registry_Report["field2"]["LookupOrderBy"] = "name";
	$tdataMix_Registry_Report["field2"]["LookupType"] = 4;
	$tdataMix_Registry_Report["field2"]["LinkField"] = "email";
	$tdataMix_Registry_Report["field2"]["DisplayField"] = "name";
	$tdataMix_Registry_Report[".hasCustomViewField"] = true;
}

$tableEvents["Mix Registry Report"] = new eventsBase;
$tdataMix_Registry_Report[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Mix Registry Report");

?>
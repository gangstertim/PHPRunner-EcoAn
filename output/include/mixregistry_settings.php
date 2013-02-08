<?php
require_once(getabspath("classes/cipherer.php"));
$tdatamixregistry = array();
	$tdatamixregistry[".NumberOfChars"] = 80; 
	$tdatamixregistry[".ShortName"] = "mixregistry";
	$tdatamixregistry[".OwnerID"] = "";
	$tdatamixregistry[".OriginalTable"] = "mixregistry";

//	field labels
$fieldLabelsmixregistry = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmixregistry["English"] = array();
	$fieldToolTipsmixregistry["English"] = array();
	$fieldLabelsmixregistry["English"]["MixNo"] = "Mix No";
	$fieldToolTipsmixregistry["English"]["MixNo"] = "";
	$fieldLabelsmixregistry["English"]["MixColor"] = "Mix Color";
	$fieldToolTipsmixregistry["English"]["MixColor"] = "";
	$fieldLabelsmixregistry["English"]["ProdGrpCode"] = "Prod Grp Code";
	$fieldToolTipsmixregistry["English"]["ProdGrpCode"] = "";
	$fieldLabelsmixregistry["English"]["Notes"] = "Notes";
	$fieldToolTipsmixregistry["English"]["Notes"] = "";
	$fieldLabelsmixregistry["English"]["Status"] = "Status";
	$fieldToolTipsmixregistry["English"]["Status"] = "";
	if (count($fieldToolTipsmixregistry["English"]))
		$tdatamixregistry[".isUseToolTips"] = true;
}
	
	
	$tdatamixregistry[".NCSearch"] = true;



$tdatamixregistry[".shortTableName"] = "mixregistry";
$tdatamixregistry[".nSecOptions"] = 0;
$tdatamixregistry[".recsPerRowList"] = 1;
$tdatamixregistry[".mainTableOwnerID"] = "";
$tdatamixregistry[".moveNext"] = 1;
$tdatamixregistry[".nType"] = 0;

$tdatamixregistry[".strOriginalTableName"] = "mixregistry";




$tdatamixregistry[".showAddInPopup"] = false;

$tdatamixregistry[".showEditInPopup"] = false;

$tdatamixregistry[".showViewInPopup"] = false;

$tdatamixregistry[".fieldsForRegister"] = array();

$tdatamixregistry[".listAjax"] = false;

	$tdatamixregistry[".audit"] = false;

	$tdatamixregistry[".locking"] = false;

$tdatamixregistry[".listIcons"] = true;

$tdatamixregistry[".exportTo"] = true;

$tdatamixregistry[".printFriendly"] = true;


$tdatamixregistry[".showSimpleSearchOptions"] = false;

$tdatamixregistry[".showSearchPanel"] = true;

if (isMobile())
	$tdatamixregistry[".isUseAjaxSuggest"] = false;
else 
	$tdatamixregistry[".isUseAjaxSuggest"] = true;

$tdatamixregistry[".rowHighlite"] = true;

// button handlers file names

$tdatamixregistry[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamixregistry[".isUseTimeForSearch"] = false;




$tdatamixregistry[".allSearchFields"] = array();

$tdatamixregistry[".allSearchFields"][] = "MixNo";
$tdatamixregistry[".allSearchFields"][] = "MixColor";
$tdatamixregistry[".allSearchFields"][] = "ProdGrpCode";
$tdatamixregistry[".allSearchFields"][] = "Notes";
$tdatamixregistry[".allSearchFields"][] = "Status";

$tdatamixregistry[".googleLikeFields"][] = "MixNo";
$tdatamixregistry[".googleLikeFields"][] = "MixColor";
$tdatamixregistry[".googleLikeFields"][] = "ProdGrpCode";
$tdatamixregistry[".googleLikeFields"][] = "Notes";
$tdatamixregistry[".googleLikeFields"][] = "Status";


$tdatamixregistry[".advSearchFields"][] = "MixNo";
$tdatamixregistry[".advSearchFields"][] = "MixColor";
$tdatamixregistry[".advSearchFields"][] = "ProdGrpCode";
$tdatamixregistry[".advSearchFields"][] = "Notes";
$tdatamixregistry[".advSearchFields"][] = "Status";

$tdatamixregistry[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatamixregistry[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamixregistry[".strOrderBy"] = $tstrOrderBy;

$tdatamixregistry[".orderindexes"] = array();

$tdatamixregistry[".sqlHead"] = "SELECT MixNo,   MixColor,   ProdGrpCode,   Notes,   Status";
$tdatamixregistry[".sqlFrom"] = "FROM mixregistry";
$tdatamixregistry[".sqlWhereExpr"] = "";
$tdatamixregistry[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamixregistry[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamixregistry[".arrGroupsPerPage"] = $arrGPP;

$tableKeysmixregistry = array();
$tdatamixregistry[".Keys"] = $tableKeysmixregistry;

$tdatamixregistry[".listFields"] = array();
$tdatamixregistry[".listFields"][] = "MixNo";
$tdatamixregistry[".listFields"][] = "MixColor";
$tdatamixregistry[".listFields"][] = "ProdGrpCode";
$tdatamixregistry[".listFields"][] = "Notes";
$tdatamixregistry[".listFields"][] = "Status";

$tdatamixregistry[".viewFields"] = array();
$tdatamixregistry[".viewFields"][] = "MixNo";
$tdatamixregistry[".viewFields"][] = "MixColor";
$tdatamixregistry[".viewFields"][] = "ProdGrpCode";
$tdatamixregistry[".viewFields"][] = "Notes";
$tdatamixregistry[".viewFields"][] = "Status";

$tdatamixregistry[".addFields"] = array();
$tdatamixregistry[".addFields"][] = "MixNo";
$tdatamixregistry[".addFields"][] = "MixColor";
$tdatamixregistry[".addFields"][] = "ProdGrpCode";
$tdatamixregistry[".addFields"][] = "Notes";
$tdatamixregistry[".addFields"][] = "Status";

$tdatamixregistry[".inlineAddFields"] = array();
$tdatamixregistry[".inlineAddFields"][] = "MixNo";
$tdatamixregistry[".inlineAddFields"][] = "MixColor";
$tdatamixregistry[".inlineAddFields"][] = "ProdGrpCode";
$tdatamixregistry[".inlineAddFields"][] = "Notes";
$tdatamixregistry[".inlineAddFields"][] = "Status";

$tdatamixregistry[".editFields"] = array();
$tdatamixregistry[".editFields"][] = "MixNo";
$tdatamixregistry[".editFields"][] = "MixColor";
$tdatamixregistry[".editFields"][] = "ProdGrpCode";
$tdatamixregistry[".editFields"][] = "Notes";
$tdatamixregistry[".editFields"][] = "Status";

$tdatamixregistry[".inlineEditFields"] = array();
$tdatamixregistry[".inlineEditFields"][] = "MixNo";
$tdatamixregistry[".inlineEditFields"][] = "MixColor";
$tdatamixregistry[".inlineEditFields"][] = "ProdGrpCode";
$tdatamixregistry[".inlineEditFields"][] = "Notes";
$tdatamixregistry[".inlineEditFields"][] = "Status";

$tdatamixregistry[".exportFields"] = array();
$tdatamixregistry[".exportFields"][] = "MixNo";
$tdatamixregistry[".exportFields"][] = "MixColor";
$tdatamixregistry[".exportFields"][] = "ProdGrpCode";
$tdatamixregistry[".exportFields"][] = "Notes";
$tdatamixregistry[".exportFields"][] = "Status";

$tdatamixregistry[".printFields"] = array();
$tdatamixregistry[".printFields"][] = "MixNo";
$tdatamixregistry[".printFields"][] = "MixColor";
$tdatamixregistry[".printFields"][] = "ProdGrpCode";
$tdatamixregistry[".printFields"][] = "Notes";
$tdatamixregistry[".printFields"][] = "Status";

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
	
		
		
	$tdatamixregistry["MixNo"] = $fdata;
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
	
		
		
	$tdatamixregistry["MixColor"] = $fdata;
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
	
		
		
	$tdatamixregistry["ProdGrpCode"] = $fdata;
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
			$edata["EditParams"].= " maxlength=100";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamixregistry["Notes"] = $fdata;
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
			$edata["EditParams"].= " maxlength=1";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatamixregistry["Status"] = $fdata;

	
$tables_data["mixregistry"]=&$tdatamixregistry;
$field_labels["mixregistry"] = &$fieldLabelsmixregistry;
$fieldToolTips["mixregistry"] = &$fieldToolTipsmixregistry;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mixregistry"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["mixregistry"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mixregistry()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MixNo,   MixColor,   ProdGrpCode,   Notes,   Status";
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
$queryData_mixregistry = createSqlQuery_mixregistry();
					$tdatamixregistry[".sqlquery"] = $queryData_mixregistry;
	
if(isset($tdatamixregistry["field2"])){
	$tdatamixregistry["field2"]["LookupTable"] = "carscars_view";
	$tdatamixregistry["field2"]["LookupOrderBy"] = "name";
	$tdatamixregistry["field2"]["LookupType"] = 4;
	$tdatamixregistry["field2"]["LinkField"] = "email";
	$tdatamixregistry["field2"]["DisplayField"] = "name";
	$tdatamixregistry[".hasCustomViewField"] = true;
}

$tableEvents["mixregistry"] = new eventsBase;
$tdatamixregistry[".hasEvents"] = false;

$cipherer = new RunnerCipherer("mixregistry");

?>
<?php
require_once(getabspath("classes/cipherer.php"));
$tdatacomptype = array();
	$tdatacomptype[".NumberOfChars"] = 80; 
	$tdatacomptype[".ShortName"] = "comptype";
	$tdatacomptype[".OwnerID"] = "";
	$tdatacomptype[".OriginalTable"] = "comptype";

//	field labels
$fieldLabelscomptype = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscomptype["English"] = array();
	$fieldToolTipscomptype["English"] = array();
	$fieldLabelscomptype["English"]["CompTypeEng"] = "Comp Type Eng";
	$fieldToolTipscomptype["English"]["CompTypeEng"] = "";
	$fieldLabelscomptype["English"]["CompTypeLL"] = "Comp Type LL";
	$fieldToolTipscomptype["English"]["CompTypeLL"] = "";
	$fieldLabelscomptype["English"]["DetailsEng"] = "Details Eng";
	$fieldToolTipscomptype["English"]["DetailsEng"] = "";
	$fieldLabelscomptype["English"]["detailsLL"] = "Details LL";
	$fieldToolTipscomptype["English"]["detailsLL"] = "";
	$fieldLabelscomptype["English"]["CompTypeNo"] = "Comp Type No";
	$fieldToolTipscomptype["English"]["CompTypeNo"] = "";
	if (count($fieldToolTipscomptype["English"]))
		$tdatacomptype[".isUseToolTips"] = true;
}
	
	
	$tdatacomptype[".NCSearch"] = true;



$tdatacomptype[".shortTableName"] = "comptype";
$tdatacomptype[".nSecOptions"] = 0;
$tdatacomptype[".recsPerRowList"] = 1;
$tdatacomptype[".mainTableOwnerID"] = "";
$tdatacomptype[".moveNext"] = 1;
$tdatacomptype[".nType"] = 0;

$tdatacomptype[".strOriginalTableName"] = "comptype";




$tdatacomptype[".showAddInPopup"] = false;

$tdatacomptype[".showEditInPopup"] = false;

$tdatacomptype[".showViewInPopup"] = false;

$tdatacomptype[".fieldsForRegister"] = array();

$tdatacomptype[".listAjax"] = false;

	$tdatacomptype[".audit"] = false;

	$tdatacomptype[".locking"] = false;

$tdatacomptype[".listIcons"] = true;
$tdatacomptype[".edit"] = true;
$tdatacomptype[".inlineEdit"] = true;
$tdatacomptype[".inlineAdd"] = true;
$tdatacomptype[".view"] = true;

$tdatacomptype[".exportTo"] = true;

$tdatacomptype[".printFriendly"] = true;

$tdatacomptype[".delete"] = true;

$tdatacomptype[".showSimpleSearchOptions"] = false;

$tdatacomptype[".showSearchPanel"] = true;

if (isMobile())
	$tdatacomptype[".isUseAjaxSuggest"] = false;
else 
	$tdatacomptype[".isUseAjaxSuggest"] = true;

$tdatacomptype[".rowHighlite"] = true;

// button handlers file names

$tdatacomptype[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacomptype[".isUseTimeForSearch"] = false;




$tdatacomptype[".allSearchFields"] = array();

$tdatacomptype[".allSearchFields"][] = "CompTypeEng";
$tdatacomptype[".allSearchFields"][] = "CompTypeLL";
$tdatacomptype[".allSearchFields"][] = "DetailsEng";
$tdatacomptype[".allSearchFields"][] = "detailsLL";
$tdatacomptype[".allSearchFields"][] = "CompTypeNo";

$tdatacomptype[".googleLikeFields"][] = "CompTypeEng";
$tdatacomptype[".googleLikeFields"][] = "CompTypeLL";
$tdatacomptype[".googleLikeFields"][] = "DetailsEng";
$tdatacomptype[".googleLikeFields"][] = "detailsLL";
$tdatacomptype[".googleLikeFields"][] = "CompTypeNo";


$tdatacomptype[".advSearchFields"][] = "CompTypeEng";
$tdatacomptype[".advSearchFields"][] = "CompTypeLL";
$tdatacomptype[".advSearchFields"][] = "DetailsEng";
$tdatacomptype[".advSearchFields"][] = "detailsLL";
$tdatacomptype[".advSearchFields"][] = "CompTypeNo";

$tdatacomptype[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatacomptype[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacomptype[".strOrderBy"] = $tstrOrderBy;

$tdatacomptype[".orderindexes"] = array();

$tdatacomptype[".sqlHead"] = "SELECT CompTypeEng,   CompTypeLL,   DetailsEng,   detailsLL,   CompTypeNo";
$tdatacomptype[".sqlFrom"] = "FROM comptype";
$tdatacomptype[".sqlWhereExpr"] = "";
$tdatacomptype[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacomptype[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacomptype[".arrGroupsPerPage"] = $arrGPP;

$tableKeyscomptype = array();
$tableKeyscomptype[] = "CompTypeNo";
$tdatacomptype[".Keys"] = $tableKeyscomptype;

$tdatacomptype[".listFields"] = array();
$tdatacomptype[".listFields"][] = "CompTypeEng";
$tdatacomptype[".listFields"][] = "CompTypeLL";
$tdatacomptype[".listFields"][] = "DetailsEng";
$tdatacomptype[".listFields"][] = "detailsLL";
$tdatacomptype[".listFields"][] = "CompTypeNo";

$tdatacomptype[".viewFields"] = array();
$tdatacomptype[".viewFields"][] = "CompTypeEng";
$tdatacomptype[".viewFields"][] = "CompTypeLL";
$tdatacomptype[".viewFields"][] = "DetailsEng";
$tdatacomptype[".viewFields"][] = "detailsLL";
$tdatacomptype[".viewFields"][] = "CompTypeNo";

$tdatacomptype[".addFields"] = array();
$tdatacomptype[".addFields"][] = "CompTypeEng";
$tdatacomptype[".addFields"][] = "CompTypeLL";
$tdatacomptype[".addFields"][] = "DetailsEng";
$tdatacomptype[".addFields"][] = "detailsLL";

$tdatacomptype[".inlineAddFields"] = array();
$tdatacomptype[".inlineAddFields"][] = "CompTypeEng";
$tdatacomptype[".inlineAddFields"][] = "CompTypeLL";
$tdatacomptype[".inlineAddFields"][] = "DetailsEng";
$tdatacomptype[".inlineAddFields"][] = "detailsLL";

$tdatacomptype[".editFields"] = array();
$tdatacomptype[".editFields"][] = "CompTypeEng";
$tdatacomptype[".editFields"][] = "CompTypeLL";
$tdatacomptype[".editFields"][] = "DetailsEng";
$tdatacomptype[".editFields"][] = "detailsLL";

$tdatacomptype[".inlineEditFields"] = array();
$tdatacomptype[".inlineEditFields"][] = "CompTypeEng";
$tdatacomptype[".inlineEditFields"][] = "CompTypeLL";
$tdatacomptype[".inlineEditFields"][] = "DetailsEng";
$tdatacomptype[".inlineEditFields"][] = "detailsLL";

$tdatacomptype[".exportFields"] = array();
$tdatacomptype[".exportFields"][] = "CompTypeEng";
$tdatacomptype[".exportFields"][] = "CompTypeLL";
$tdatacomptype[".exportFields"][] = "DetailsEng";
$tdatacomptype[".exportFields"][] = "detailsLL";
$tdatacomptype[".exportFields"][] = "CompTypeNo";

$tdatacomptype[".printFields"] = array();
$tdatacomptype[".printFields"][] = "CompTypeEng";
$tdatacomptype[".printFields"][] = "CompTypeLL";
$tdatacomptype[".printFields"][] = "DetailsEng";
$tdatacomptype[".printFields"][] = "detailsLL";
$tdatacomptype[".printFields"][] = "CompTypeNo";

//	CompTypeEng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CompTypeEng";
	$fdata["GoodName"] = "CompTypeEng";
	$fdata["ownerTable"] = "comptype";
	$fdata["Label"] = "Comp Type Eng"; 
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
	
		$fdata["strField"] = "CompTypeEng"; 
		$fdata["FullName"] = "CompTypeEng";
	
		
		
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
			$edata["EditParams"].= " maxlength=12";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacomptype["CompTypeEng"] = $fdata;
//	CompTypeLL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CompTypeLL";
	$fdata["GoodName"] = "CompTypeLL";
	$fdata["ownerTable"] = "comptype";
	$fdata["Label"] = "Comp Type LL"; 
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
	
		$fdata["strField"] = "CompTypeLL"; 
		$fdata["FullName"] = "CompTypeLL";
	
		
		
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
			$edata["EditParams"].= " maxlength=12";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacomptype["CompTypeLL"] = $fdata;
//	DetailsEng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DetailsEng";
	$fdata["GoodName"] = "DetailsEng";
	$fdata["ownerTable"] = "comptype";
	$fdata["Label"] = "Details Eng"; 
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
	
		$fdata["strField"] = "DetailsEng"; 
		$fdata["FullName"] = "DetailsEng";
	
		
		
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
			$edata["EditParams"].= " maxlength=30";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacomptype["DetailsEng"] = $fdata;
//	detailsLL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "detailsLL";
	$fdata["GoodName"] = "detailsLL";
	$fdata["ownerTable"] = "comptype";
	$fdata["Label"] = "Details LL"; 
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
	
		$fdata["strField"] = "detailsLL"; 
		$fdata["FullName"] = "detailsLL";
	
		
		
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
			$edata["EditParams"].= " maxlength=30";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacomptype["detailsLL"] = $fdata;
//	CompTypeNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CompTypeNo";
	$fdata["GoodName"] = "CompTypeNo";
	$fdata["ownerTable"] = "comptype";
	$fdata["Label"] = "Comp Type No"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "CompTypeNo"; 
		$fdata["FullName"] = "CompTypeNo";
	
		
		
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
	
		
		
	$tdatacomptype["CompTypeNo"] = $fdata;

	
$tables_data["comptype"]=&$tdatacomptype;
$field_labels["comptype"] = &$fieldLabelscomptype;
$fieldToolTips["comptype"] = &$fieldToolTipscomptype;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["comptype"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["comptype"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_comptype()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CompTypeEng,   CompTypeLL,   DetailsEng,   detailsLL,   CompTypeNo";
$proto0["m_strFrom"] = "FROM comptype";
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
	"m_strName" => "CompTypeEng",
	"m_strTable" => "comptype"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "CompTypeLL",
	"m_strTable" => "comptype"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "DetailsEng",
	"m_strTable" => "comptype"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "detailsLL",
	"m_strTable" => "comptype"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "CompTypeNo",
	"m_strTable" => "comptype"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "comptype";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "CompTypeEng";
$proto16["m_columns"][] = "CompTypeLL";
$proto16["m_columns"][] = "DetailsEng";
$proto16["m_columns"][] = "detailsLL";
$proto16["m_columns"][] = "CompTypeNo";
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
$queryData_comptype = createSqlQuery_comptype();
					$tdatacomptype[".sqlquery"] = $queryData_comptype;
	
if(isset($tdatacomptype["field2"])){
	$tdatacomptype["field2"]["LookupTable"] = "carscars_view";
	$tdatacomptype["field2"]["LookupOrderBy"] = "name";
	$tdatacomptype["field2"]["LookupType"] = 4;
	$tdatacomptype["field2"]["LinkField"] = "email";
	$tdatacomptype["field2"]["DisplayField"] = "name";
	$tdatacomptype[".hasCustomViewField"] = true;
}

$tableEvents["comptype"] = new eventsBase;
$tdatacomptype[".hasEvents"] = false;

$cipherer = new RunnerCipherer("comptype");

?>
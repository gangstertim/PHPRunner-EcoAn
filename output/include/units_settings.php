<?php
require_once(getabspath("classes/cipherer.php"));
$tdataunits = array();
	$tdataunits[".NumberOfChars"] = 80; 
	$tdataunits[".ShortName"] = "units";
	$tdataunits[".OwnerID"] = "";
	$tdataunits[".OriginalTable"] = "units";

//	field labels
$fieldLabelsunits = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsunits["English"] = array();
	$fieldToolTipsunits["English"] = array();
	$fieldLabelsunits["English"]["UnitEng"] = "Unit Eng";
	$fieldToolTipsunits["English"]["UnitEng"] = "";
	$fieldLabelsunits["English"]["Unit_LL"] = "Unit LL";
	$fieldToolTipsunits["English"]["Unit_LL"] = "";
	$fieldLabelsunits["English"]["Unit_English_Full"] = "Unit English Full";
	$fieldToolTipsunits["English"]["Unit_English_Full"] = "";
	$fieldLabelsunits["English"]["Unit_LL_Full"] = "Unit LL Full";
	$fieldToolTipsunits["English"]["Unit_LL_Full"] = "";
	$fieldLabelsunits["English"]["Unit_Type_English"] = "Unit Type English";
	$fieldToolTipsunits["English"]["Unit_Type_English"] = "";
	$fieldLabelsunits["English"]["Rel_to_Base"] = "Rel To Base";
	$fieldToolTipsunits["English"]["Rel_to_Base"] = "";
	if (count($fieldToolTipsunits["English"]))
		$tdataunits[".isUseToolTips"] = true;
}
	
	
	$tdataunits[".NCSearch"] = true;



$tdataunits[".shortTableName"] = "units";
$tdataunits[".nSecOptions"] = 0;
$tdataunits[".recsPerRowList"] = 1;
$tdataunits[".mainTableOwnerID"] = "";
$tdataunits[".moveNext"] = 1;
$tdataunits[".nType"] = 0;

$tdataunits[".strOriginalTableName"] = "units";




$tdataunits[".showAddInPopup"] = false;

$tdataunits[".showEditInPopup"] = false;

$tdataunits[".showViewInPopup"] = false;

$tdataunits[".fieldsForRegister"] = array();

$tdataunits[".listAjax"] = false;

	$tdataunits[".audit"] = false;

	$tdataunits[".locking"] = false;

$tdataunits[".listIcons"] = true;
$tdataunits[".edit"] = true;
$tdataunits[".inlineEdit"] = true;
$tdataunits[".inlineAdd"] = true;
$tdataunits[".view"] = true;

$tdataunits[".exportTo"] = true;

$tdataunits[".printFriendly"] = true;

$tdataunits[".delete"] = true;

$tdataunits[".showSimpleSearchOptions"] = false;

$tdataunits[".showSearchPanel"] = true;

if (isMobile())
	$tdataunits[".isUseAjaxSuggest"] = false;
else 
	$tdataunits[".isUseAjaxSuggest"] = true;

$tdataunits[".rowHighlite"] = true;

// button handlers file names

$tdataunits[".addPageEvents"] = false;

// use timepicker for search panel
$tdataunits[".isUseTimeForSearch"] = false;




$tdataunits[".allSearchFields"] = array();

$tdataunits[".allSearchFields"][] = "UnitEng";
$tdataunits[".allSearchFields"][] = "Unit_LL";
$tdataunits[".allSearchFields"][] = "Unit_English_Full";
$tdataunits[".allSearchFields"][] = "Unit_LL_Full";
$tdataunits[".allSearchFields"][] = "Unit_Type_English";
$tdataunits[".allSearchFields"][] = "Rel_to_Base";

$tdataunits[".googleLikeFields"][] = "UnitEng";
$tdataunits[".googleLikeFields"][] = "Unit_LL";
$tdataunits[".googleLikeFields"][] = "Unit_English_Full";
$tdataunits[".googleLikeFields"][] = "Unit_LL_Full";
$tdataunits[".googleLikeFields"][] = "Unit_Type_English";
$tdataunits[".googleLikeFields"][] = "Rel_to_Base";


$tdataunits[".advSearchFields"][] = "UnitEng";
$tdataunits[".advSearchFields"][] = "Unit_LL";
$tdataunits[".advSearchFields"][] = "Unit_English_Full";
$tdataunits[".advSearchFields"][] = "Unit_LL_Full";
$tdataunits[".advSearchFields"][] = "Unit_Type_English";
$tdataunits[".advSearchFields"][] = "Rel_to_Base";

$tdataunits[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataunits[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataunits[".strOrderBy"] = $tstrOrderBy;

$tdataunits[".orderindexes"] = array();

$tdataunits[".sqlHead"] = "SELECT UnitEng,   Unit_LL,   Unit_English_Full,   Unit_LL_Full,   Unit_Type_English,   Rel_to_Base";
$tdataunits[".sqlFrom"] = "FROM units";
$tdataunits[".sqlWhereExpr"] = "";
$tdataunits[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataunits[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataunits[".arrGroupsPerPage"] = $arrGPP;

$tableKeysunits = array();
$tableKeysunits[] = "UnitEng";
$tdataunits[".Keys"] = $tableKeysunits;

$tdataunits[".listFields"] = array();
$tdataunits[".listFields"][] = "UnitEng";
$tdataunits[".listFields"][] = "Unit_LL";
$tdataunits[".listFields"][] = "Unit_English_Full";
$tdataunits[".listFields"][] = "Unit_LL_Full";
$tdataunits[".listFields"][] = "Unit_Type_English";
$tdataunits[".listFields"][] = "Rel_to_Base";

$tdataunits[".viewFields"] = array();
$tdataunits[".viewFields"][] = "UnitEng";
$tdataunits[".viewFields"][] = "Unit_LL";
$tdataunits[".viewFields"][] = "Unit_English_Full";
$tdataunits[".viewFields"][] = "Unit_LL_Full";
$tdataunits[".viewFields"][] = "Unit_Type_English";
$tdataunits[".viewFields"][] = "Rel_to_Base";

$tdataunits[".addFields"] = array();
$tdataunits[".addFields"][] = "UnitEng";
$tdataunits[".addFields"][] = "Unit_LL";
$tdataunits[".addFields"][] = "Unit_English_Full";
$tdataunits[".addFields"][] = "Unit_LL_Full";
$tdataunits[".addFields"][] = "Unit_Type_English";
$tdataunits[".addFields"][] = "Rel_to_Base";

$tdataunits[".inlineAddFields"] = array();
$tdataunits[".inlineAddFields"][] = "UnitEng";
$tdataunits[".inlineAddFields"][] = "Unit_LL";
$tdataunits[".inlineAddFields"][] = "Unit_English_Full";
$tdataunits[".inlineAddFields"][] = "Unit_LL_Full";
$tdataunits[".inlineAddFields"][] = "Unit_Type_English";
$tdataunits[".inlineAddFields"][] = "Rel_to_Base";

$tdataunits[".editFields"] = array();
$tdataunits[".editFields"][] = "UnitEng";
$tdataunits[".editFields"][] = "Unit_LL";
$tdataunits[".editFields"][] = "Unit_English_Full";
$tdataunits[".editFields"][] = "Unit_LL_Full";
$tdataunits[".editFields"][] = "Unit_Type_English";
$tdataunits[".editFields"][] = "Rel_to_Base";

$tdataunits[".inlineEditFields"] = array();
$tdataunits[".inlineEditFields"][] = "UnitEng";
$tdataunits[".inlineEditFields"][] = "Unit_LL";
$tdataunits[".inlineEditFields"][] = "Unit_English_Full";
$tdataunits[".inlineEditFields"][] = "Unit_LL_Full";
$tdataunits[".inlineEditFields"][] = "Unit_Type_English";
$tdataunits[".inlineEditFields"][] = "Rel_to_Base";

$tdataunits[".exportFields"] = array();
$tdataunits[".exportFields"][] = "UnitEng";
$tdataunits[".exportFields"][] = "Unit_LL";
$tdataunits[".exportFields"][] = "Unit_English_Full";
$tdataunits[".exportFields"][] = "Unit_LL_Full";
$tdataunits[".exportFields"][] = "Unit_Type_English";
$tdataunits[".exportFields"][] = "Rel_to_Base";

$tdataunits[".printFields"] = array();
$tdataunits[".printFields"][] = "UnitEng";
$tdataunits[".printFields"][] = "Unit_LL";
$tdataunits[".printFields"][] = "Unit_English_Full";
$tdataunits[".printFields"][] = "Unit_LL_Full";
$tdataunits[".printFields"][] = "Unit_Type_English";
$tdataunits[".printFields"][] = "Rel_to_Base";

//	UnitEng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "UnitEng";
	$fdata["GoodName"] = "UnitEng";
	$fdata["ownerTable"] = "units";
	$fdata["Label"] = "Unit Eng"; 
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
	
		
		
	$tdataunits["UnitEng"] = $fdata;
//	Unit_LL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Unit_LL";
	$fdata["GoodName"] = "Unit_LL";
	$fdata["ownerTable"] = "units";
	$fdata["Label"] = "Unit LL"; 
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
	
		$fdata["strField"] = "Unit_LL"; 
		$fdata["FullName"] = "Unit_LL";
	
		
		
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
			$edata["EditParams"].= " maxlength=6";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataunits["Unit_LL"] = $fdata;
//	Unit_English_Full
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Unit_English_Full";
	$fdata["GoodName"] = "Unit_English_Full";
	$fdata["ownerTable"] = "units";
	$fdata["Label"] = "Unit English Full"; 
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
	
		$fdata["strField"] = "Unit_English_Full"; 
		$fdata["FullName"] = "Unit_English_Full";
	
		
		
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
			$edata["EditParams"].= " maxlength=25";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataunits["Unit_English_Full"] = $fdata;
//	Unit_LL_Full
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Unit_LL_Full";
	$fdata["GoodName"] = "Unit_LL_Full";
	$fdata["ownerTable"] = "units";
	$fdata["Label"] = "Unit LL Full"; 
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
	
		$fdata["strField"] = "Unit_LL_Full"; 
		$fdata["FullName"] = "Unit_LL_Full";
	
		
		
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
			$edata["EditParams"].= " maxlength=25";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataunits["Unit_LL_Full"] = $fdata;
//	Unit_Type_English
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Unit_Type_English";
	$fdata["GoodName"] = "Unit_Type_English";
	$fdata["ownerTable"] = "units";
	$fdata["Label"] = "Unit Type English"; 
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
	
		$fdata["strField"] = "Unit_Type_English"; 
		$fdata["FullName"] = "Unit_Type_English";
	
		
		
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
			$edata["EditParams"].= " maxlength=20";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataunits["Unit_Type_English"] = $fdata;
//	Rel_to_Base
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Rel_to_Base";
	$fdata["GoodName"] = "Rel_to_Base";
	$fdata["ownerTable"] = "units";
	$fdata["Label"] = "Rel To Base"; 
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
	
		$fdata["strField"] = "Rel_to_Base"; 
		$fdata["FullName"] = "Rel_to_Base";
	
		
		
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
	
		
		
	$tdataunits["Rel_to_Base"] = $fdata;

	
$tables_data["units"]=&$tdataunits;
$field_labels["units"] = &$fieldLabelsunits;
$fieldToolTips["units"] = &$fieldToolTipsunits;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["units"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["units"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_units()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "UnitEng,   Unit_LL,   Unit_English_Full,   Unit_LL_Full,   Unit_Type_English,   Rel_to_Base";
$proto0["m_strFrom"] = "FROM units";
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
	"m_strTable" => "units"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Unit_LL",
	"m_strTable" => "units"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Unit_English_Full",
	"m_strTable" => "units"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Unit_LL_Full",
	"m_strTable" => "units"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Unit_Type_English",
	"m_strTable" => "units"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Rel_to_Base",
	"m_strTable" => "units"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "units";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "UnitEng";
$proto18["m_columns"][] = "Unit_LL";
$proto18["m_columns"][] = "Unit_English_Full";
$proto18["m_columns"][] = "Unit_LL_Full";
$proto18["m_columns"][] = "Unit_Type_English";
$proto18["m_columns"][] = "Rel_to_Base";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_alias"] = "";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = "0";
$proto19["m_inBrackets"] = "0";
$proto19["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_units = createSqlQuery_units();
						$tdataunits[".sqlquery"] = $queryData_units;
	
if(isset($tdataunits["field2"])){
	$tdataunits["field2"]["LookupTable"] = "carscars_view";
	$tdataunits["field2"]["LookupOrderBy"] = "name";
	$tdataunits["field2"]["LookupType"] = 4;
	$tdataunits["field2"]["LinkField"] = "email";
	$tdataunits["field2"]["DisplayField"] = "name";
	$tdataunits[".hasCustomViewField"] = true;
}

$tableEvents["units"] = new eventsBase;
$tdataunits[".hasEvents"] = false;

$cipherer = new RunnerCipherer("units");

?>
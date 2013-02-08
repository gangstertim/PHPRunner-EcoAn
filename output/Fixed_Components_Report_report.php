<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");
include("include/dbcommon.php");

add_nocache_headers();

include("include/Fixed_Components_Report_variables.php");


include('include/xtempl.php');
include('classes/runnerpage.php');
include('classes/searchclause.php');
include("classes/searchpanel.php");
include("classes/searchpanelsimple.php");	
include("classes/searchcontrol.php");
include("classes/panelsearchcontrol.php");	

$xt = new Xtempl();

$layout = new TLayout("report3","FancyGreen1","MobileGreen1");
$layout->blocks["center"] = array();
$layout->containers["message"] = array();

$layout->containers["message"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->skins["message"] = "2";
$layout->blocks["center"][] = "message";
$layout->containers["grid"] = array();

$layout->containers["grid"][] = array("name"=>"report","block"=>"","substyle"=>1);


$layout->skins["grid"] = "grid";
$layout->blocks["center"][] = "grid";
$layout->containers["pagination"] = array();

$layout->containers["pagination"][] = array("name"=>"pagination","block"=>"pagination_block","substyle"=>1);


$layout->skins["pagination"] = "2";
$layout->blocks["center"][] = "pagination";
$layout->containers["form"] = array();

$layout->containers["form"][] = array("name"=>"reportvariable","block"=>"","substyle"=>1);


$layout->skins["form"] = "empty";
$layout->blocks["center"][] = "form";$layout->blocks["left"] = array();
$layout->containers["left"] = array();

$layout->containers["left"][] = array("name"=>"vsearch1","block"=>"searchform_block","substyle"=>2);


$layout->containers["left"][] = array("name"=>"vsearch2","block"=>"searchform_block","substyle"=>1);


$layout->containers["left"][] = array("name"=>"searchpanel","block"=>"searchPanel","substyle"=>1);


$layout->containers["left"][] = array("name"=>"vdetails_found","block"=>"details_block","substyle"=>2);


$layout->containers["left"][] = array("name"=>"vpage_of","block"=>"pages_block","substyle"=>1);


$layout->containers["left"][] = array("name"=>"vrecsperpage","block"=>"recordspp_block","substyle"=>1);


$layout->skins["left"] = "menu";
$layout->blocks["left"][] = "left";$layout->blocks["top"] = array();
$layout->containers["toplinks"] = array();

$layout->containers["toplinks"][] = array("name"=>"toplinks_print","block"=>"prints_block","substyle"=>1);


$layout->containers["toplinks"][] = array("name"=>"toplinks_advsearch","block"=>"asearch_link","substyle"=>1);




$layout->containers["toplinks"][] = array("name"=>"toplinks_export_links","block"=>"export_link","substyle"=>1);




$layout->skins["toplinks"] = "2";
$layout->blocks["top"][] = "toplinks";
$layout->containers["hmenu"] = array();

$layout->containers["hmenu"][] = array("name"=>"hmenu","block"=>"menu_block","substyle"=>1);


$layout->skins["hmenu"] = "hmenu";
$layout->blocks["top"][] = "hmenu";$page_layouts["Fixed_Components_Report_report"] = $layout;


$sessionPrefix = $strTableName;

$cross_table=0;

if($cross_table)
{
	include("classes/crosstable_report.php");
//	include("include/reportfunctions.php");
	if(postvalue("group_func")!="")
		$_SESSION[$sessionPrefix."_group_func"]=postvalue("group_func");
	if(postvalue("field")!="")
		$_SESSION[$sessionPrefix."_field"]=postvalue("field");
	if(postvalue("axis_x")!="")
		$_SESSION[$sessionPrefix."_gr_x"]=postvalue("axis_x");
	if(postvalue("axis_y")!="")
		$_SESSION[$sessionPrefix."_gr_y"]=postvalue("axis_y");
	if(postvalue("rname")!="")
		$_SESSION[$sessionPrefix."_rname"]=postvalue("rname");
}
if(!postvalue("crosstable_refresh"))
{
	/*if(!postvalue("rname"))
	{
	?>
	<script>
	var report_filename="Fixed_Components_Report_report.php"
	</script>
	<?php
	}
	else
	{
	?>
	<script>
	var report_filename="dreport.php"
	</script>
	<?php
	}*/
	if(!$_SESSION[$sessionPrefix."_rname"])
	{
	$xt->assign("report_filename",'<script>
		var report_filename="Fixed_Components_Report_report.php"
		</script>');
	
	}
	else
	{
	
	$xt->assign("report_filename",'<script>
		var report_filename="dreport.php"
		</script>');
	}
}
if(postvalue("id"))
	$id = postvalue("id");
else
	$id = 1;
	
// assign an id
$xt->assign("id",$id);

//	process reqest data, fill session variables
if(!count($_POST) && !count($_GET))
{
	$sess_unset = array();
	foreach($_SESSION as $key=>$value)
		if(substr($key,0,strlen($strTableName)+1)==$strTableName."_" &&
			strpos(substr($key,strlen($strTableName)+1),"_")===false)
			$sess_unset[] = $key;
	foreach($sess_unset as $key)
		unset($_SESSION[$key]);
}

if(!$_SESSION[$sessionPrefix."_pagenumber"])
	$_SESSION[$sessionPrefix."_pagenumber"]=1;

if(!$_SESSION[$sessionPrefix."_pagesize"])
{
		$_SESSION[$sessionPrefix."_pagesize"] = 20;
}

if(isset($_REQUEST["goto"]))
	$_SESSION[$sessionPrefix."_pagenumber"]=intval($_REQUEST["goto"]);

//array of params for, most of them used by searchPanel class
$params = array("id" => $id,
				"mode" => LIST_SIMPLE,
				"tName" => $strTableName,
				"pageType" => PAGE_REPORT,
				"isDisplayLoading" => $gSettings->displayLoading(),
				"isGroupSecurity" => $isGroupSecurity,
				"arrRecsPerPage" => $gSettings->getRecordsPerPageArray(),
				"arrGroupsPerPage" => $gSettings->getGroupsPerPageArray(),
				"reportGroupFields" => $gSettings->isReportWithGroups());
$params["xt"] = &$xt;


$pageObject = new RunnerPage($params);

$pageObject->searchClauseObj->parseRequest();
$_SESSION[$pageObject->sessionPrefix.'_advsearch'] = serialize($pageObject->searchClauseObj);	
if (isset($_SESSION[$pageObject->sessionPrefix.'_advsearch']))
{
	$pageObject->searchClauseObj = unserialize($_SESSION[$pageObject->sessionPrefix.'_advsearch']);
	$pageObject->searchClauseObj->cipherer = $pageObject->cipherer;
}

$pageObject->jsSettings['tableSettings'][$pageObject->tName]['isUsedSearchFor'] = $pageObject->searchClauseObj->isUsedSearchFor;

// add button events if exist
$pageObject->addButtonHandlers();

$pageObject->addCommonJs();

$pageObject->commonAssign();

//	Before Process event
if($eventObj->exists("BeforeProcessReport"))
	$eventObj->BeforeProcessReport($conn, $pageObject);




$pagestart = ($_SESSION[$sessionPrefix."_pagenumber"]-1)*$_SESSION[$sessionPrefix."_pagesize"];
$pagelen = $_SESSION[$sessionPrefix."_pagesize"];

////////////////////////////////////////////////////////////////////////////////////////
if(isset($_REQUEST['a']) && $_REQUEST['a'] == 'advsearch')
	$search = true;
else
	$search = false;

include_once('classes/reportlib.php');

// array with all params
$params = array();

$params['sessionPrefix'] = $sessionPrefix;
// report table info
$params['tName'] = $strTableName;
$params['shortTName'] = "Fixed_Components_Report";
$params['repGroupFieldsCount'] = 0;
$params['repPageSummary'] = 0;
$params['repGlobalSummary'] = 0;
$params['repLayout'] = 6;
$params['showGroupSummaryCount'] = 0;
$params['repShowDet'] = 1;

// report field info
$repGroupFields = array();
$params['repGroupFields'] = &$repGroupFields;

// current table key fields
$params['tKeyFields'] = $gSettings->getTableKeys();
// if any field used for totals
$params['isExistTotalFields'] = false;
// table fields list


$params['fieldsArr'] = array();
$fieldArr = array();
$fieldArr['name'] = "ProdGrpCode";
//'fName' added for maps
$fieldArr['fName'] = "ProdGrpCode";
$fieldArr['label'] = "Prod Grp Code";
$fieldArr['goodName'] = "ProdGrpCode";
$fieldArr['repPage'] = "0";
$fieldArr['editFormat'] = "Text field";
$fieldArr['thumbnail'] = "th";
$fieldArr['fileName'] = "";
$fieldArr['strhlPrefix'] = "";
$fieldArr['totalMax'] = false;
$fieldArr['totalMin'] = false;
$fieldArr['totalAvg'] = false;
$fieldArr['totalSum'] = false;
$params['fieldsArr'][] = $fieldArr;
$fieldArr = array();
$fieldArr['name'] = "EngName";
//'fName' added for maps
$fieldArr['fName'] = "EngName";
$fieldArr['label'] = "Eng Name";
$fieldArr['goodName'] = "EngName";
$fieldArr['repPage'] = "0";
$fieldArr['editFormat'] = "Text field";
$fieldArr['thumbnail'] = "th";
$fieldArr['fileName'] = "";
$fieldArr['strhlPrefix'] = "";
$fieldArr['totalMax'] = false;
$fieldArr['totalMin'] = false;
$fieldArr['totalAvg'] = false;
$fieldArr['totalSum'] = false;
$params['fieldsArr'][] = $fieldArr;
$fieldArr = array();
$fieldArr['name'] = "ThaiName";
//'fName' added for maps
$fieldArr['fName'] = "ThaiName";
$fieldArr['label'] = "Thai Name";
$fieldArr['goodName'] = "ThaiName";
$fieldArr['repPage'] = "0";
$fieldArr['editFormat'] = "Text field";
$fieldArr['thumbnail'] = "th";
$fieldArr['fileName'] = "";
$fieldArr['strhlPrefix'] = "";
$fieldArr['totalMax'] = false;
$fieldArr['totalMin'] = false;
$fieldArr['totalAvg'] = false;
$fieldArr['totalSum'] = false;
$params['fieldsArr'][] = $fieldArr;
$fieldArr = array();
$fieldArr['name'] = "Cost";
//'fName' added for maps
$fieldArr['fName'] = "Cost";
$fieldArr['label'] = "Cost";
$fieldArr['goodName'] = "Cost";
$fieldArr['repPage'] = "0";
$fieldArr['viewFormat'] = "Number";
$fieldArr['editFormat'] = "Text field";
$fieldArr['thumbnail'] = "th";
$fieldArr['fileName'] = "";
$fieldArr['strhlPrefix'] = "";
$fieldArr['totalMax'] = false;
$fieldArr['totalMin'] = false;
$fieldArr['totalAvg'] = false;
$fieldArr['totalSum'] = false;
$params['fieldsArr'][] = $fieldArr;
$fieldArr = array();
$fieldArr['name'] = "Qty";
//'fName' added for maps
$fieldArr['fName'] = "Qty";
$fieldArr['label'] = "Qty";
$fieldArr['goodName'] = "Qty";
$fieldArr['repPage'] = "0";
$fieldArr['editFormat'] = "Text field";
$fieldArr['thumbnail'] = "th";
$fieldArr['fileName'] = "";
$fieldArr['strhlPrefix'] = "";
$fieldArr['totalMax'] = false;
$fieldArr['totalMin'] = false;
$fieldArr['totalAvg'] = false;
$fieldArr['totalSum'] = false;
$params['fieldsArr'][] = $fieldArr;
$fieldArr = array();
$fieldArr['name'] = "(T2.Cost *T1.Qty )";
//'fName' added for maps
$fieldArr['fName'] = "(T2.Cost *T1.Qty )";
$fieldArr['label'] = "(T2.Cost *T1.Qty )";
$fieldArr['goodName'] = "_T2_Cost__T1_Qty__";
$fieldArr['repPage'] = "0";
$fieldArr['viewFormat'] = "Number";
$fieldArr['editFormat'] = "Text field";
$fieldArr['thumbnail'] = "th";
$fieldArr['fileName'] = "";
$fieldArr['strhlPrefix'] = "";
$fieldArr['totalMax'] = false;
$fieldArr['totalMin'] = false;
$fieldArr['totalAvg'] = false;
$fieldArr['totalSum'] = false;
$params['fieldsArr'][] = $fieldArr;
$fieldArr = array();
$fieldArr['name'] = "UnitEng";
//'fName' added for maps
$fieldArr['fName'] = "UnitEng";
$fieldArr['label'] = "Unit Eng";
$fieldArr['goodName'] = "UnitEng";
$fieldArr['repPage'] = "0";
$fieldArr['editFormat'] = "Text field";
$fieldArr['thumbnail'] = "th";
$fieldArr['fileName'] = "";
$fieldArr['strhlPrefix'] = "";
$fieldArr['totalMax'] = false;
$fieldArr['totalMin'] = false;
$fieldArr['totalAvg'] = false;
$fieldArr['totalSum'] = false;
$params['fieldsArr'][] = $fieldArr;
$fieldArr = array();
$fieldArr['name'] = "CompTypeNo";
//'fName' added for maps
$fieldArr['fName'] = "CompTypeNo";
$fieldArr['label'] = "Comp Type No";
$fieldArr['goodName'] = "CompTypeNo";
$fieldArr['repPage'] = "0";
$fieldArr['viewFormat'] = "Number";
$fieldArr['editFormat'] = "Text field";
$fieldArr['thumbnail'] = "th";
$fieldArr['fileName'] = "";
$fieldArr['strhlPrefix'] = "";
$fieldArr['totalMax'] = false;
$fieldArr['totalMin'] = false;
$fieldArr['totalAvg'] = false;
$fieldArr['totalSum'] = false;
$params['fieldsArr'][] = $fieldArr;

$pageObject->setGoogleMapsParams($params['fieldsArr']);

if ($pageObject->googleMapCfg['isUseGoogleMap'])
{
	$pageObject->initGmaps();
}


$gsqlWhereExpr = "";

if($gSettings->noRecordsOnFirstPage() && ! count($_GET) && ! count($_POST))
	$gsqlWhereExpr = "1=0";

$strSecuritySql = SecuritySQL("Search", $strTableName);
$gsqlWhereExpr = whereAdd($gsqlWhereExpr, $strSecuritySql);

if($cross_table)
{
	
	$cross_array = array();
	$t="Fixed_Components_Report";
	$cross_array["tables"][]=$t;
	foreach($repGroupFields as $ind=>$value)
	{
		$cross_array["group_fields"][$ind]["name"]=$value["strGroupField"];
		$cross_array["group_fields"][$ind]["int_type"]=$value["groupInterval"];
		if($value["crossTabAxis"]==0)
			$t_axis="x";
		elseif($value["crossTabAxis"]==1)
			$t_axis="y";
		else
			$t_axis="all";
		$cross_array["group_fields"][$ind]["group_type"]=$t_axis;
	}
	$sum_x = 0;
	$sum_y = 0;
	if($sum_x || $sum_y)
		$cross_array["group_fields"][$ind+1]["sum_total"] = true;
	else
		$cross_array["group_fields"][$ind+1]["sum_total"] = false;
	if($sum_x)
		$cross_array["group_fields"][$ind+1]["sum_x"]=true;
	else
		$cross_array["group_fields"][$ind+1]["sum_x"]=false;
	if($sum_y)
		$cross_array["group_fields"][$ind+1]["sum_y"]=true;
	else
		$cross_array["group_fields"][$ind+1]["sum_y"]=false;
	
	foreach($params["fieldsArr"] as $ind=>$value)
	{
		$cross_array["totals"][$value["name"]]["name"]=$value["name"];
		$cross_array["totals"][$value["name"]]["label"]=$value["label"];
		if($value["totalMax"])
			$cross_array["totals"][$value["name"]]["max"]=true;
		else
			$cross_array["totals"][$value["name"]]["max"]=false;
		if($value["totalMin"])
			$cross_array["totals"][$value["name"]]["min"]=true;
		else
			$cross_array["totals"][$value["name"]]["min"]=false;
		if($value["totalSum"])
			$cross_array["totals"][$value["name"]]["sum"]=true;
		else
			$cross_array["totals"][$value["name"]]["sum"]=false;
		if($value["totalAvg"])
			$cross_array["totals"][$value["name"]]["avg"]=true;
		else
			$cross_array["totals"][$value["name"]]["avg"]=false;
	}
		
	$strWhereClause = $pageObject->searchClauseObj->getWhere($pageObject->pSet->getListOfFieldsByExprType(false), $pageObject->controls);
	$strHavingClause = $pageObject->searchClauseObj->getWhere($pageObject->pSet->getListOfFieldsByExprType(true), $pageObject->controls);
	$strSearchCriteria = postvalue('criteria');
	
	$strSecuritySql = SecuritySQL("Search", $pageObject->tName);
	$strWhereClause = whereAdd($strWhereClause, $strSecuritySql);

	$strSQL = $gQuery->gSQLWhere_having_fromQuery($gsqlWhereExpr, $strWhereClause, $strHavingClause, $strSearchCriteria);

	$cross_array=array("tables"=>$cross_array["tables"],"group_fields"=>$cross_array["group_fields"],"totals"=>$cross_array["totals"],
		"table_type"=>"project", "fromWizard" => true);
	$crosstableObj = new CrossTableReport($cross_array);
	if(postvalue("crosstable_refresh"))
	{
		$crosstableObj->ajax_refresh_crosstable();
		exit();
	}
	$xt->assign("select_group_x","<select id=select_group_x onchange=\"refresh_group('".$_SESSION[$sessionPrefix."_rname"]."');\">".$crosstableObj->getGroupFields("x")."</select>");
	$xt->assign("select_group_y","<select id=select_group_y onchange=\"refresh_group('".$_SESSION[$sessionPrefix."_rname"]."');\">".$crosstableObj->getGroupFields("y")."</select>");
	$grid_row["data"]=$crosstableObj->getCrossTableData();
	$arr_res=$crosstableObj->getValuesControl();
	$res=$arr_res[0];
	$first_field_index=$arr_res[1];
	$arr_value=$crosstableObj->getSelectedValue();
	$first_field=$arr_value[$first_field_index];
	if($res)
	{
		$xt->assign("select_data","<select id=select_data onchange='refresh_crosstable(true);return false;'>".$res."</select>");
		$xt->assign("group_func",$crosstableObj->getRadioGroupFunctions($first_field_index,$_SESSION[$sessionPrefix."_group_func"]));
		$group_func=$crosstableObj->getTotalsName($crosstableObj->getGroupFunction($first_field,$_SESSION[$sessionPrefix."_group_func"]));
		$xt->assign("totals",$group_func);
	}
	if(count($grid_row["data"])>0)
	{
		$xt->assign("grid_row",$grid_row);
		$xt->assignbyref("group_header",$crosstableObj->getCrossTableHeader());
		$xt->assignbyref("col_summary",$crosstableObj->getCrossTableSummary());	
		$xt->assignbyref("total_summary",$crosstableObj->getTotalSummary());
		if($sum_x || $sum_y)
			$xt->assign("cross_totals",true);
	}
	else
	{
		$xt->assign("message_block",true);
		$xt->assign("container_grid",false);
		$xt->assign("message","No records found");
	}
}
else
{
	$gsqlWhereExpr = whereAdd($strSecuritySql, $gQuery->WhereToSql());
	if($gSettings->noRecordsOnFirstPage() && ! count($_GET) && ! count($_POST))
		$gsqlWhereExpr = whereAdd($gsqlWhereExpr, "1=0");	
	$aarr = array($gQuery->HeadToSql(), $gQuery->FromToSql(), $gsqlWhereExpr, $gQuery->GroupByToSql(), $gQuery->Having()->toSql($gQuery));
	$rb = new Report($aarr, $pageObject->pSet->GetTableData(".orderindexes"), $pageObject->searchClauseObj, $conn, $_SESSION[$sessionPrefix."_pagesize"], -1, $params, $pageObject); 

	$_SESSION[$sessionPrefix.'_advsearch'] = serialize($pageObject->searchClauseObj);
	$_SESSION[$sessionPrefix."_where"]= $gsqlWhereExpr;
		
	$arrReport = $rb->getReport($pagestart);

	foreach($arrReport['page'] as $key => $value)
		$xt->assign($key, $value);

	foreach($arrReport['global'] as $key => $value)
		$xt->assign($key, $value);

	if(count($arrReport['list'])>0)
	{
		$xt->assign('grid_row', array('data' => $arrReport['list']));
	}
	else
	{
		$xt->assign("message_block",true);
		$xt->assign("container_grid",false);
		$xt->assign("message","No records found");
	}
	
	////////////////////////////////////////////////////////////////////////////////////////

	$mypage = $_SESSION[$sessionPrefix."_pagenumber"];
	$maxpages = $arrReport['maxpages'];

	//	prepare for create pagination
		if($maxpages>1){	
			
				$xt->assign("pagination_block", true);
						$pagination = "<table rows='1' cols='1' align='center' width='auto' border='0' name='paginationTable".$pageObject->id."'>";
						$pagination.= "<tr valign='center'><td align='center'>";
						$counterstart = $mypage - 9;
						if($mypage % 10)
							$counterstart = $mypage -($mypage % 10) + 1;
						$counterend = $counterstart + 9;
						if($counterend > $maxpages)
							$counterend = $maxpages;
						if($counterstart != 1) 
						{
							$pagination.= $pageObject->getPaginationLink(1,"First")."&nbsp;:&nbsp;";
							$pagination.= $pageObject->getPaginationLink($counterstart - 1,"Previous")."&nbsp;";
						}
						$pagination.= "<b>[</b>";
						for($counter = $counterstart; $counter <= $counterend; $counter ++) 
						{
							if($counter != $mypage)
								$pagination.= "&nbsp;".$pageObject->getPaginationLink($counter,$counter,true);
							else
								$pagination.= "&nbsp;<b>".$counter."</b>";
						}
						$pagination.= "&nbsp;<b>]</b>";
						if($counterend != $maxpages) 
						{
							$pagination.= "&nbsp;".$pageObject->getPaginationLink($counterend + 1,"Next")."&nbsp;:&nbsp;";
							$pagination.= "&nbsp;".$pageObject->getPaginationLink($maxpages,"Last");
						}
						$pagination.= "</td></tr></table>";
						$xt->assign("pagination", $pagination);
	
		}
}
if($pageObject->isShowMenu())
	$xt->assign("menu_block",true);
	
if (isMobile()){
	$xt->assign('tableinfomobile_block', true);
}
	
$allow_add=true;
$allow_delete=true;
$allow_edit=true;
$allow_search=true;
$allow_export=true;
$allow_import=true;

$xt->assign("toplinks_block",$allow_search);
$xt->assign("asearch_link",$allow_search);
$xt->assign("asearchlink_attrs","id=\"asearch_".$id."\" name=\"asearch_".$id."\" onclick=\"window.location.href='Fixed_Components_Report_search.php';return false;\"");
$xt->assign("print_link",$allow_export);
if(!$cross_table)
	$xt->assign("printall_link",$allow_export);
$xt->assign("export_link",$allow_export);
$xt->assign("printlink_attrs","id=print_".$id." href='#'");
$xt->assign("printalllink_attrs","id=printAll_".$id." href='#'");
$xt->assign("excellink_attrs","id=export_to_excel".$id." href='#'");
$xt->assign("wordlink_attrs","id=export_to_word".$id." href='#'");
$xt->assign("pdflink_attrs","id=export_to_pdf".$id." href='#'");
$xt->assign("prints_block",$allow_export);
$xt->assign("advsearchlink_attrs", "id=\"advButton".$id."\"");

if($cross_table)
	$xt->assign("crosstable_attrs","rname=".$_SESSION[$sessionPrefix."_rname"]."&axis_x=".$_SESSION[$sessionPrefix."_gr_x"]."&axis_y=".$_SESSION[$sessionPrefix."_gr_y"]."&field=".$_SESSION[$sessionPrefix."_field"]."&group_func=".$_SESSION[$sessionPrefix."_group_func"]);

if(!$cross_table && $allow_search && ($pageObject->reportGroupFields && count($pageObject->arrGroupsPerPage) || !$pageObject->reportGroupFields && count($pageObject->arrRecsPerPage)))
{
	$xt->assign("recordspp_block",true);
	$pageObject->createPerPage();
}
	
$xt->assign("grid_block",$allow_search);

$xt->assign("changepwd_link",$_SESSION["AccessLevel"] != ACCESS_LEVEL_GUEST);
$xt->assign("changepwdlink_attrs","onclick=\"window.location.href='changepwd.php';return false;\"");

// assign for lheader

// create searchPanel
$args = array();
$args['pageObj'] = &$pageObject;
$searchPanelObj = new SearchPanelSimple($args);
$searchPanelObj->buildSearchPanel('adv_search_panel');
$xt->assign("searchPanel", true);

$pageObject->body["begin"] .= "<script type=\"text/javascript\" src=\"include/loadfirst.js\"></script>";

if($cross_table)
{
	$pageObject->body["begin"] .= '<script type="text/javascript" src="include/crosstable.js"></script>';
	//$pageObject->body["begin"] .= '<script type="text/javascript" src="include/json.js"></script>';
}

$pageObject->body["begin"] .= "<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";

$pageObject->body["begin"] .= ($pageObject->isDisplayLoading ? "<script type=\"text/javascript\">Runner.runLoading();</script>" : "");
if (!isMobile())
$pageObject->body["begin"] .= "<div id=\"search_suggest\" class=\"search_suggest\"></div>";
	
// assign body end in such way, to prevent collisions with flyId increment 

// assign body end
$pageObject->body['end'] = array();
$pageObject->body['end']["method"] = "assignBodyEnd";
$pageObject->body['end']["object"] = &$pageObject;

$xt->assignbyref('body', $pageObject->body);

$xt->assign("left_block", true);

if(!$cross_table)
{
	$xt->assign("details_block", $arrReport['countRows']!=0);
	$xt->assign("records_found", $arrReport['countRows']);
	$xt->assign("pages_block", $arrReport['countRows']!=0);
	$xt->assign("page", $mypage);
	$xt->assign("maxpages", $maxpages);
}

$xt->assign("style_block",true);
$xt->assign("shiftstyle_block", true);
// end assign for lheader

if($eventObj->exists("BeforeShowReport"))
	$eventObj->BeforeShowReport($xt, $pageObject->templatefile, $pageObject);
$xt->display($pageObject->templatefile);

?>

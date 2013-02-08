<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");
include("include/dbcommon.php");
include('classes/searchclause.php');

if (@$_REQUEST["format"]!="excel" && @$_REQUEST["format"]!="word") 
	add_nocache_headers();

include("include/Fixed_Components_Report_variables.php");

CheckPermissionsEvent($strTableName, 'P');

$cipherer = new RunnerCipherer($strTableName);

include('include/xtempl.php');
include 'classes/runnerpage.php';
$xt = new Xtempl();

$layout = new TLayout("report_print","FancyGreen1","MobileGreen1");
$layout->blocks["top"] = array();
$layout->skins["pdf"] = "empty";
$layout->blocks["top"][] = "pdf";
$layout->containers["grid"] = array();

$layout->containers["grid"][] = array("name"=>"report_print","block"=>"","substyle"=>1);


$layout->skins["grid"] = "empty";
$layout->blocks["top"][] = "grid";$page_layouts["Fixed_Components_Report_rprint"] = $layout;


$id = postvalue("id") != "" ? postvalue("id") : 1;

//array of params for classes
$params = array("pageType" => PAGE_RPRINT, "id" =>$id, "tName"=>$strTableName);
$params["templatefile"] = "Fixed_Components_Report_rprint.htm";
$params["xt"] = &$xt;
$pageObject = new RunnerPage($params);
$pageObject->AddJSFile("include/lang/".getLangFileName(mlang_getcurrentlang()).".js");

// add button events if exist
$pageObject->addButtonHandlers();

$sessionPrefix = $strTableName;

$cross_table = 0;

if($cross_table)
{
	include("classes/crosstable_report.php");
//	include("include/reportfunctions.php");
}

//	Before Process event
if($eventObj->exists("BeforeProcessPrint"))
	$eventObj->BeforeProcessPrint($conn, $pageObject);
	
$forExport = false;

if (@$_REQUEST["format"]=="excel")
{
	$forExport = true;
	header("Content-Type: application/vnd.ms-excel");
	header("Content-Disposition: attachment;Filename=Fixed_Components_Report.xls");
	echo "<html xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns:x=\"urn:schemas-microsoft-com:office:excel\" xmlns=\"http://www.w3.org/TR/REC-html40\">";
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$cCharset."\">";
}
else if (@$_REQUEST["format"]=="word")
{
	$forExport = true;
	header("Content-Type: application/vnd.ms-word");
	header("Content-Disposition: attachment;Filename=Fixed_Components_Report.doc");
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$cCharset."\">";
}

if(!$_SESSION[$sessionPrefix."_pagenumber"])
	$_SESSION[$sessionPrefix."_pagenumber"]=1;
	
if(!$_SESSION[$sessionPrefix."_pagesize"])
	$_SESSION[$sessionPrefix."_pagesize"]=30;

$PageSize=$_SESSION[$sessionPrefix."_pagesize"];
$bAll = isset($_REQUEST["all"]) && $_REQUEST["all"];
$pagestart = ($_SESSION[$sessionPrefix."_pagenumber"]-1)*$_SESSION[$sessionPrefix."_pagesize"];

if (@$_REQUEST["format"])
{
	//$forExport = true;
	// read stylesheet file
	//$cssdata = myfile_get_contents(getabspath("include/style.css"), "r");
	//$xt->assign("cssdata",$cssdata);
	$xt->assign("stylesheetlink",false);
	//$bAll=false;
}
else
{
	$xt->assign("stylesheetlink",true);	
}

$strWhereClause = @$_SESSION[$sessionPrefix."_where"];

$strSQL = $gQuery->gSQLWhere($strWhereClause);

if($eventObj->exists("BeforeQueryPrint"))
	$eventObj->BeforeQueryPrint($strSQL,$strWhereClause,$strOrderBy, $pageObject);

$strSQL = $gQuery->gSQLWhere($strWhereClause);
LogInfo($strSQL);

//////////////////////////////////////////////////////////////////////////////////////
if(isset($_REQUEST['a']) && $_REQUEST['a'] == 'advsearch')
	$search = true;
else
	$search = false;

include('classes/reportlib.php');

// array with all params
$params = array();
$params['sessionPrefix'] = $sessionPrefix;
// report table info
$params['tName'] = $strTableName;
$params['repGroupFieldsCount'] = 0;
$params['repPageSummary'] = 0;
$params['repGlobalSummary'] = 0;
$params['repLayout'] = 6;
$params['showGroupSummaryCount'] = 0;
$params['repShowDet'] = 1;
$params['mode'] = MODE_PRINT;


// report field info
$repGroupFields = array();
$params['repGroupFields'] = &$repGroupFields;



// current table key fields
$params['tKeyFields'] = $pageObject->pSet->getTableKeys();
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

$pageObject->searchClauseObj->parseRequest();	

$strSecuritySql = SecuritySQL("Search", $strTableName);
$gsqlWhereExpr = whereAdd($gQuery->WhereToSql(), $strSecuritySql);

if($cross_table)
{
	
	$cross_array = array();
	$t="Fixed_Components_Report";
	$cross_array["tables"][]=$t;
	foreach($repGroupFields as $ind=>$value)
	{
		$cross_array["group_fields"][$ind]["name"]=$value["strGroupField"];
		$cross_array["group_fields"][$ind]["int_type"]=$value["groupInterval"];
		$cross_array["group_fields"][$ind]["group_type"]="all";
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
	
	$strSecuritySql = SecuritySQL("Search", $pageObject->tName);
	$strWhereClause = whereAdd($strWhereClause, $strSecuritySql);

	$strSQL = $gQuery->gSQLWhere_having_fromQuery("", $strWhereClause, $strHavingClause);
	

	$cross_array=array("tables"=>$cross_array["tables"],"group_fields"=>$cross_array["group_fields"],"totals"=>$cross_array["totals"],
		"table_type"=>"project", "fromWizard" => true);
	$crosstableObj = new CrossTableReport($cross_array);
	if(postvalue("crosstable_refresh"))
	{
		$crosstableObj->ajax_refresh_crosstable();
		exit();
	}
	
	$xt->assign("report_cross_header",$crosstableObj->getPrintCrossHeader(postvalue("axis_x"),postvalue("axis_y"),postvalue("field"),postvalue("group_func")));
	$xt->assign("select_attr","onchange='refresh_crosstable(true);return false;'");
	$xt->assign("select_group_x",$crosstableObj->getGroupFields("x"));
	$xt->assign("select_group_y",$crosstableObj->getGroupFields("y"));
	$xt->assign("select_group_attr","onchange=refresh_group('".postvalue("rname")."');");
	$grid_row["data"]=$crosstableObj->getCrossTableData();
	$arr_res=$crosstableObj->getValuesControl();
	$res=$arr_res[0];
	$first_field=$arr_res[1];
	if($res)
	{
		$xt->assign("select_data",$res);
		$xt->assign("group_func",$crosstableObj->getRadioGroupFunctions($first_field,postvalue("group_func")));
		$arr_value=$crosstableObj->getSelectedValue();
		$field=$arr_value[postvalue("field")];
		$group_func=$crosstableObj->getTotalsName($crosstableObj->getGroupFunction($field,postvalue("group_func")));
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
	$pages[0]['grid_row'] = $grid_row;
	$pages[0]['begin'] = "<div name=page class=printpage>";
	$pages[0]['end'] = "</div>";
	$xt->assign("pageno",1);
	$xt->assign("maxpages",1);
}
else
{
	$rb = new Report(array($gQuery->HeadToSql(), $gQuery->FromToSql(), $strWhereClause, $gQuery->GroupByToSql(), $gQuery->HavingToSql())
		, $pageObject->pSet->GetTableData(".orderindexes"), $pageObject->searchClauseObj, $conn, $PageSize, 30, $params, $pageObject);
	$rb->forExport = $forExport;

	$_SESSION[$sessionPrefix.'_advsearch'] = serialize($pageObject->searchClauseObj);

	$arrReport = $rb->getReport($bAll ? -1 : $pagestart);
	//////////////////////////////////////////////////////////////////////////////////////
	$pages=array();
	if($pagestart == -1 || $bAll)
	{
		$pages = $rb->getPages();
		for($i = 0; $i < count($pages); $i++)
		{
			$pages[$i]['grid_row'] = array("data" => $arrReport['list'][$i]);
			$pages[$i]['begin'] = ($i < count($pages) - 1) ? "<div name=\"page\" class=\"printpage\">" : "<div name=page>";
			$pages[$i]['end'] = "</div>";
			$pages[$i]['pageno'] = $i+1;
		}
		$xt->assign("maxpages",count($pages));
	}
	else
	{
		$pages[0]['grid_row'] = array("data" => $arrReport['list']);
		$pages[0]['begin'] = "<div name=page>";
		$pages[0]['end'] = "</div>";
		$xt->assign("pageno",$_SESSION[$sessionPrefix."_pagenumber"]);
		$xt->assign("maxpages",$arrReport['maxpages']);
	}

	foreach($arrReport['page'] as $key => $value)
		$xt->assign($key, $value);

	
	$mypage = $_SESSION[$sessionPrefix."_pagenumber"];
	$maxpages = count($pages);
}
$xt->assign_loopsection("pages", $pages);



$pageObject->body["begin"] .= "<script type=\"text/javascript\" src=\"include/loadfirst.js\"></script>";
$pageObject->body["begin"] .= "<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";		

$pageObject->fillSetCntrlMaps();
$pageObject->body['end'] .= '<script>';
$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
$pageObject->body['end'] .= "window.viewControlsMap = ".my_json_encode($pageObject->viewControlsHTMLMap).";";
$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";";
$pageObject->body['end'] .= '</script>';
$pageObject->body["end"] .= "<script language=\"JavaScript\" src=\"include/runnerJS/RunnerAll.js\"></script>\r\n";
$pageObject->addCommonJs();


//$pageObject->body["end"] .= "<script type=\"text/javascript\">".$pageObject->PrepareJs()."</script>";
	
	
$xt->assignbyref("body",$pageObject->body);
$xt->assign("grid_block",true);
$xt->assign("grid_header",true);


if (@$_REQUEST["format"] && $_REQUEST["format"]!="pdf")
{
	$pages[0]["page_summary"]=false;
	$xt->assign_loopsection("pages",$pages);
	$xt->assign("pdflink_block",false);
	$pageObject->body["begin"]="";
	$pageObject->body["end"]="";
	$xt->assignbyref("body",$pageObject->body);
}

if($eventObj->exists("BeforeShowPrint"))
	$eventObj->BeforeShowPrint($xt,$pageObject->templatefile, $pageObject);

$xt->assign("bodyattrs", 'style="margin:10px;"');

if(!postvalue("pdf"))
{
	if(@$_REQUEST["format"]=="excel" || @$_REQUEST["format"]=="word") 
	{
		$xt->load_template($pageObject->templatefile);
		$contents = $xt->template;
		$pos1=0;
		while($pos1!==false)
		{
			$pos1=strpos($contents,"<link REL=\"stylesheet\"",$pos1);
			if($pos1!==false)
			{
				$pos2=strpos($contents,">",$pos1);
				if(!$pos2==false)
					$contents=substr($contents,0,$pos1-1).substr($contents,$pos2+1);
				$pos1+=1;
			}
		}
		$contents=str_replace("<img src=\"images/spacer.gif\">","",$contents);
		$contents=str_replace("<img src=\"images/spacer.gif\"/>","",$contents);
		$xt->template=$contents;
		xt_process_template($xt,$xt->template);
	}
	else
		$xt->display($pageObject->templatefile);

	if (@$_REQUEST["format"]=="pdf")
	{
		echo("<script>$(window).load(function() { Runner.Pdf.RunPDF();});</script>");
	}	
}
else
{
}
?>
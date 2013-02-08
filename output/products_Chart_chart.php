<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
add_nocache_headers();

include("include/products_Chart_variables.php");


//	process request data, fill session variables

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

include('include/xtempl.php');
include('classes/runnerpage.php');
include('classes/searchclause.php');
include("classes/searchpanel.php");
include("classes/searchpanelsimple.php");	
include("classes/searchcontrol.php");
include("classes/panelsearchcontrol.php");	

$xt = new Xtempl();

$layout = new TLayout("chart3","FancyGreen1","MobileGreen1");
$layout->blocks["center"] = array();
$layout->containers["message"] = array();

$layout->containers["message"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->skins["message"] = "2";
$layout->blocks["center"][] = "message";
$layout->containers["form"] = array();

$layout->containers["form"][] = array("name"=>"chart","block"=>"","substyle"=>1);


$layout->skins["form"] = "2";
$layout->blocks["center"][] = "form";$layout->blocks["left"] = array();
$layout->containers["left"] = array();

$layout->containers["left"][] = array("name"=>"vsearch1","block"=>"searchform_block","substyle"=>2);


$layout->containers["left"][] = array("name"=>"vsearch2","block"=>"searchform_block","substyle"=>1);


$layout->containers["left"][] = array("name"=>"searchpanel","block"=>"searchPanel","substyle"=>1);





$layout->skins["left"] = "menu";
$layout->blocks["left"][] = "left";$layout->blocks["top"] = array();
$layout->containers["toplinks"] = array();


$layout->containers["toplinks"][] = array("name"=>"toplinks_advsearch","block"=>"asearch_link","substyle"=>1);







$layout->skins["toplinks"] = "2";
$layout->blocks["top"][] = "toplinks";
$layout->containers["hmenu"] = array();

$layout->containers["hmenu"][] = array("name"=>"hmenu","block"=>"menu_block","substyle"=>1);


$layout->skins["hmenu"] = "hmenu";
$layout->blocks["top"][] = "hmenu";$page_layouts["products_Chart_chart"] = $layout;


$sessionPrefix = $strTableName;

if(postvalue("id"))
	$id = postvalue("id");
else
	$id = 1;
// assign an id
$xt->assign("id",$id);

//array of params for, most of them used by searchPanel class
$params = array("id" => $id,
				"tName" => $strTableName,
				"pageType" => PAGE_CHART,
				"shortTableName" => "products_Chart",
				"isGroupSecurity" => $isGroupSecurity,
				"isDisplayLoading" => $gSettings->displayLoading());
$params["xt"] = &$xt;
			

$pageObject = new RunnerPage($params);

//	Before Process event
if($eventObj->exists("BeforeProcessChart"))
	$eventObj->BeforeProcessChart($conn, $pageObject);

// SearchClause class stuff
$pageObject->searchClauseObj->parseRequest();
$pageObject->jsSettings['tableSettings'][$pageObject->tName]['isUsedSearchFor'] = $pageObject->searchClauseObj->isUsedSearchFor;
$agregateFields = $pageObject->pSet->getListOfFieldsByExprType(true);
$pageObject->searchClauseObj->haveAgregateFields = count($agregateFields) > 0;
$_SESSION[$sessionPrefix.'_advsearch'] = serialize($pageObject->searchClauseObj);

// add button events if exist
$pageObject->addButtonHandlers();

$pageObject->addCommonJs();

$pageObject->commonAssign();

if($pageObject->isShowMenu())
	$xt->assign("menu_block",true);
	



$xt->assign("chart_block",true);
$xt->assign("asearch_link",true);
$xt->assign("asearchlink_attrs","id=\"asearch_".$id."\" name=\"asearch_".$id."\" onclick=\"window.location.href='products_Chart_search.php';return false;\"");
$xt->assign("search_records_block",true);
$xt->assign("exportpdflink_attrs","onclick='chart.saveAsPDF();'");
$xt->assign("searchform_showall",true);
$xt->assign("showallbutton_attrs","onclick=\"window.location.href='products_Chart_chart.php?a=showall';\"");
$xt->assign("advsearchlink_attrs", "id=\"advButton".$id."\"");

if(!GetChartXML("products_Chart"))
	$xt->assign("chart_block",false);

// create searchPanel
$args = array();
$args['pageObj'] = &$pageObject;
$searchPanelObj = new SearchPanelSimple($args);
$searchPanelObj->buildSearchPanel('adv_search_panel');
$xt->assign("searchPanel", true);

$pageObject->body['begin'] .= "<script type=\"text/javascript\" src=\"include/loadfirst.js\"></script>\r\n";
$pageObject->body["begin"] .= "<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";
$pageObject->body['begin'] .= ($pageObject->isDisplayLoading ? "<script type=\"text/javascript\">Runner.runLoading();</script>" : "");
if (!isMobile())
	$pageObject->body['begin'] .= "<div id=\"search_suggest\" class=\"search_suggest\"></div>";

// assign body end in such way, to prevent collisions with flyId increment 
$pageObject->body["end"] .= "<script>".$pageObject->PrepareJs()."</script>";

// assign body end
$pageObject->body['end'] = array();
$pageObject->body['end']["method"] = "assignBodyEnd";
$pageObject->body['end']["object"] = &$pageObject;

$xt->assignbyref('body', $pageObject->body);

$xt->assign("style_block",true);
$xt->assign("shiftstyle_block", true);
// end assign for lheader

if($eventObj->exists("BeforeShowChart"))
	$eventObj->BeforeShowChart($xt, $pageObject->templatefile, $pageObject);

$xt->display($pageObject->templatefile);
?>

<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/components_variables.php");
include('include/xtempl.php');
include('classes/viewpage.php');
include("classes/searchclause.php");

add_nocache_headers();

CheckPermissionsEvent($strTableName, 'S');

$layout = new TLayout("view2","FancyGreen1","MobileGreen1");
$layout->blocks["top"] = array();
$layout->skins["pdf"] = "empty";
$layout->blocks["top"][] = "pdf";
$layout->containers["view"] = array();

$layout->containers["view"][] = array("name"=>"viewheader","block"=>"","substyle"=>2);


$layout->containers["view"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"fields");


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"viewfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"viewbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";

$layout->skins["view"] = "1";
$layout->blocks["top"][] = "view";
$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["components_view"] = $layout;




//$cipherer = new RunnerCipherer($strTableName);
	
$xt = new Xtempl();

$query = $gQuery->Copy();

$filename = "";	
$message = "";
$key = array();
$next = array();
$prev = array();
$all = postvalue("all");
$pdf = postvalue("pdf");
$mypage = 1;

//Show view page as popUp or not
$inlineview = (postvalue("onFly") ? true : false);

//If show view as popUp, get parent Id
if($inlineview)
	$parId = postvalue("parId");
else
	$parId = 0;

//Set page id	
if(postvalue("id"))
	$id = postvalue("id");
else
	$id = 1;

//$isNeedSettings = true;//($inlineview && postvalue("isNeedSettings") == 'true') || (!$inlineview);	
	
// assign an id
$xt->assign("id",$id);

//array of params for classes
$params = array("pageType" => PAGE_VIEW, "id" => $id, "tName" => $strTableName);
$params["xt"] = &$xt;
$params["all"] = $all;

//Get array of tabs for edit page
$params['useTabsOnView'] = $gSettings->useTabsOnView();
if($params['useTabsOnView'])
	$params['arrViewTabs'] = $gSettings->getViewTabs();
$pageObject = new ViewPage($params);

// SearchClause class stuff
$pageObject->searchClauseObj->parseRequest();
$_SESSION[$strTableName.'_advsearch'] = serialize($pageObject->searchClauseObj);

// proccess big google maps

// add button events if exist
$pageObject->addButtonHandlers();

//For show detail tables on master page view
$dpParams = array();
if($pageObject->isShowDetailTables && !isMobile())
{
	$ids = $id;
	$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array();
}

//	Before Process event
if($eventObj->exists("BeforeProcessView"))
	$eventObj->BeforeProcessView($conn, $pageObject);
	
//	read current values from the database
$data = $pageObject->getCurrentRecordInternal();

if (!sizeof($data)) {
	header("Location: components_list.php?a=return");
	exit();
}

$out = "";
$first = true;
$fieldsArr = array();
$arr = array();
$arr['fName'] = "ComponentNo";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ComponentNo");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "EngName";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("EngName");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ThaiName";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ThaiName");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "DescriptionEng";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("DescriptionEng");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "DescriptionThai";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("DescriptionThai");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "CompTypeNo";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("CompTypeNo");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "UnitEng";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("UnitEng");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "UnitQty";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("UnitQty");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "CompPurchaseUnitEn";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("CompPurchaseUnitEn");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Cost";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Cost");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "PriceSell";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("PriceSell");
$fieldsArr[] = $arr;

$mainTableOwnerID = $pageObject->pSet->getTableOwnerIdField();
$ownerIdValue="";

$pageObject->setGoogleMapsParams($fieldsArr);

while($data)
{
	$xt->assign("show_key1", htmlspecialchars($pageObject->showDBValue("ComponentNo", $data)));

	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["ComponentNo"]));

////////////////////////////////////////////
//ComponentNo - 
	
	$value = $pageObject->showDBValue("ComponentNo", $data, $keylink);
	if($mainTableOwnerID=="ComponentNo")
		$ownerIdValue=$value;
	$xt->assign("ComponentNo_value",$value);
	if(!$pageObject->isAppearOnTabs("ComponentNo"))
		$xt->assign("ComponentNo_fieldblock",true);
	else
		$xt->assign("ComponentNo_tabfieldblock",true);
////////////////////////////////////////////
//EngName - 
	
	$value = $pageObject->showDBValue("EngName", $data, $keylink);
	if($mainTableOwnerID=="EngName")
		$ownerIdValue=$value;
	$xt->assign("EngName_value",$value);
	if(!$pageObject->isAppearOnTabs("EngName"))
		$xt->assign("EngName_fieldblock",true);
	else
		$xt->assign("EngName_tabfieldblock",true);
////////////////////////////////////////////
//ThaiName - 
	
	$value = $pageObject->showDBValue("ThaiName", $data, $keylink);
	if($mainTableOwnerID=="ThaiName")
		$ownerIdValue=$value;
	$xt->assign("ThaiName_value",$value);
	if(!$pageObject->isAppearOnTabs("ThaiName"))
		$xt->assign("ThaiName_fieldblock",true);
	else
		$xt->assign("ThaiName_tabfieldblock",true);
////////////////////////////////////////////
//DescriptionEng - 
	
	$value = $pageObject->showDBValue("DescriptionEng", $data, $keylink);
	if($mainTableOwnerID=="DescriptionEng")
		$ownerIdValue=$value;
	$xt->assign("DescriptionEng_value",$value);
	if(!$pageObject->isAppearOnTabs("DescriptionEng"))
		$xt->assign("DescriptionEng_fieldblock",true);
	else
		$xt->assign("DescriptionEng_tabfieldblock",true);
////////////////////////////////////////////
//DescriptionThai - 
	
	$value = $pageObject->showDBValue("DescriptionThai", $data, $keylink);
	if($mainTableOwnerID=="DescriptionThai")
		$ownerIdValue=$value;
	$xt->assign("DescriptionThai_value",$value);
	if(!$pageObject->isAppearOnTabs("DescriptionThai"))
		$xt->assign("DescriptionThai_fieldblock",true);
	else
		$xt->assign("DescriptionThai_tabfieldblock",true);
////////////////////////////////////////////
//CompTypeNo - Number
	
	$value = $pageObject->showDBValue("CompTypeNo", $data, $keylink);
	if($mainTableOwnerID=="CompTypeNo")
		$ownerIdValue=$value;
	$xt->assign("CompTypeNo_value",$value);
	if(!$pageObject->isAppearOnTabs("CompTypeNo"))
		$xt->assign("CompTypeNo_fieldblock",true);
	else
		$xt->assign("CompTypeNo_tabfieldblock",true);
////////////////////////////////////////////
//UnitEng - 
	
	$value = $pageObject->showDBValue("UnitEng", $data, $keylink);
	if($mainTableOwnerID=="UnitEng")
		$ownerIdValue=$value;
	$xt->assign("UnitEng_value",$value);
	if(!$pageObject->isAppearOnTabs("UnitEng"))
		$xt->assign("UnitEng_fieldblock",true);
	else
		$xt->assign("UnitEng_tabfieldblock",true);
////////////////////////////////////////////
//UnitQty - Number
	
	$value = $pageObject->showDBValue("UnitQty", $data, $keylink);
	if($mainTableOwnerID=="UnitQty")
		$ownerIdValue=$value;
	$xt->assign("UnitQty_value",$value);
	if(!$pageObject->isAppearOnTabs("UnitQty"))
		$xt->assign("UnitQty_fieldblock",true);
	else
		$xt->assign("UnitQty_tabfieldblock",true);
////////////////////////////////////////////
//CompPurchaseUnitEn - 
	
	$value = $pageObject->showDBValue("CompPurchaseUnitEn", $data, $keylink);
	if($mainTableOwnerID=="CompPurchaseUnitEn")
		$ownerIdValue=$value;
	$xt->assign("CompPurchaseUnitEn_value",$value);
	if(!$pageObject->isAppearOnTabs("CompPurchaseUnitEn"))
		$xt->assign("CompPurchaseUnitEn_fieldblock",true);
	else
		$xt->assign("CompPurchaseUnitEn_tabfieldblock",true);
////////////////////////////////////////////
//Cost - Number
	
	$value = $pageObject->showDBValue("Cost", $data, $keylink);
	if($mainTableOwnerID=="Cost")
		$ownerIdValue=$value;
	$xt->assign("Cost_value",$value);
	if(!$pageObject->isAppearOnTabs("Cost"))
		$xt->assign("Cost_fieldblock",true);
	else
		$xt->assign("Cost_tabfieldblock",true);
////////////////////////////////////////////
//PriceSell - Number
	
	$value = $pageObject->showDBValue("PriceSell", $data, $keylink);
	if($mainTableOwnerID=="PriceSell")
		$ownerIdValue=$value;
	$xt->assign("PriceSell_value",$value);
	if(!$pageObject->isAppearOnTabs("PriceSell"))
		$xt->assign("PriceSell_fieldblock",true);
	else
		$xt->assign("PriceSell_tabfieldblock",true);

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && !isMobile())
{
	if(count($dpParams['ids']))
	{
		$xt->assign("detail_tables",true);
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
	}
	
	$dControlsMap = array();
	$dViewControlsMap = array();
	
	for($d=0;$d<count($dpParams['ids']);$d++)
	{
		$options = array();
		//array of params for classes
		$options["mode"] = LIST_DETAILS;
		$options["pageType"] = PAGE_LIST;
		$options["masterPageType"] = PAGE_VIEW;
		$options["mainMasterPageType"] = PAGE_VIEW;
		$options['masterTable'] = "components";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		include_once("include/".GetTableURL($strTableName)."_settings.php");
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
		{
			$strTableName = "components";
			continue;
		}
		
		$layout = GetPageLayout(GoodFieldName($strTableName), PAGE_LIST);
		if($layout)
		{
			$rtl = $xt->getReadingOrder() == 'RTL' ? 'RTL' : '';
			$xt->cssFiles[] = array("stylepath" => "styles/".$layout->style.'/style'.$rtl.".css"
				, "pagestylepath" => "pagestyles/".$layout->name.$rtl.".css");
			$xt->IEcssFiles[] = array("stylepathIE" => "styles/".$layout->style.'/styleIE'.".css");
		}
		
		$options['xt'] = new Xtempl();
		$options['id'] = $dpParams['ids'][$d];
		$options['flyId'] = $pageObject->genId()+1;
		$mkr = 1;
		foreach($mKeys[$strTableName] as $mk)
			$options['masterKeysReq'][$mkr++] = $data[$mk];

		$listPageObject = ListPage::createListPage($strTableName, $options);
		
		// prepare code
		$listPageObject->prepareForBuildPage();
		
		// show page
		if($listPageObject->permis[$strTableName]['search'] && $listPageObject->rowsFound)
		{
			//set page events
			foreach($listPageObject->eventsObject->events as $event => $name)
				$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
			
			//add detail settings to master settings
			$listPageObject->addControlsJSAndCSS();
			$listPageObject->fillSetCntrlMaps();
			$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];
			$dControlsMap[$strTableName] = $listPageObject->controlsMap;
			$dViewControlsMap[$strTableName] = $listPageObject->viewControlsMap;
			foreach($listPageObject->jsSettings['global']['shortTNames'] as $keySet=>$val)
			{
				if(!array_key_exists($keySet,$pageObject->settingsMap["globalSettings"]['shortTNames']))
					$pageObject->settingsMap["globalSettings"]['shortTNames'][$keySet] = $val;
			}
			
			//Add detail's js files to master's files
			$pageObject->copyAllJSFiles($listPageObject->grabAllJSFiles());
			
			//Add detail's css files to master's files
			$pageObject->copyAllCSSFiles($listPageObject->grabAllCSSFiles());
		
			$xtParams = array("method"=>'showPage', "params"=> false);
			$xtParams['object'] = $listPageObject;
			$xt->assign("displayDetailTable_".GoodFieldName($listPageObject->tName), $xtParams);
		
			$pageObject->controlsMap['dpTablesParams'][] = array('tName'=>$strTableName, 'id'=>$options['id']);
		}
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$pageObject->viewControlsMap['dViewControlsMap'] = $dViewControlsMap; 
	$strTableName = "components";
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin prepare for Next Prev button
if(!@$_SESSION[$strTableName."_noNextPrev"] && !$inlineview && !$pdf)
{
	$pageObject->getNextPrevRecordKeys($data,"Search",$next,$prev);
}
//End prepare for Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


if ($pageObject->googleMapCfg['isUseGoogleMap'])
{
	$pageObject->initGmaps();
}

$pageObject->addCommonJs();

//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

if(!$inlineview)
{
	$pageObject->body["begin"].="<script type=\"text/javascript\" src=\"include/loadfirst.js\"></script>\r\n";
		$pageObject->body["begin"].= "<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";		
	
	$pageObject->jsSettings['tableSettings'][$strTableName]["keys"] = $pageObject->jsKeys;
	$pageObject->jsSettings['tableSettings'][$strTableName]['keyFields'] = $pageObject->keyFields;
	$pageObject->jsSettings['tableSettings'][$strTableName]["prevKeys"] = $prev;
	$pageObject->jsSettings['tableSettings'][$strTableName]["nextKeys"] = $next; 
	
	// assign body end
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";
	$pageObject->body['end']["object"] = &$pageObject;
	
	$xt->assign("body",$pageObject->body);
	$xt->assign("flybody",true);
}
else
{
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("flybody",$pageObject->body);
	$xt->assign("body",true);
	$xt->assign("pdflink_block",false);
	
	$pageObject->fillSetCntrlMaps();
	
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['viewControlsMap'] = $pageObject->viewControlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;
}
$xt->assign("style_block",true);
$xt->assign("stylefiles_block",true);

$editlink="";
$editkeys=array();
	$editkeys["editid1"]=postvalue("editid1");
foreach($editkeys as $key=>$val)
{
	if($editlink)
		$editlink.="&";
	$editlink.=$key."=".$val;
}
$xt->assign("editlink_attrs","id=\"editLink".$id."\" name=\"editLink".$id."\" onclick=\"window.location.href='components_edit.php?".$editlink."'\"");

$strPerm = GetUserPermissions($strTableName);
if(CheckSecurity($ownerIdValue,"Edit") && !$inlineview && strpos($strPerm, "E")!==false)
	$xt->assign("edit_button",true);
else
	$xt->assign("edit_button",false);

if(!$pdf && !$all && !$inlineview)
{
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin show Next Prev button
	$nextlink=$prevlink="";
	if(count($next))
	{
		$xt->assign("next_button",true);
	 		$nextlink .="editid1=".htmlspecialchars(rawurlencode($next[1-1]));
		$xt->assign("nextbutton_attrs","id=\"nextButton".$id."\"");
	}
	else 
		$xt->assign("next_button",false);
	if(count($prev))
	{
		$xt->assign("prev_button",true);
			$prevlink .="editid1=".htmlspecialchars(rawurlencode($prev[1-1]));
		$xt->assign("prevbutton_attrs","id=\"prevButton".$id."\"");
	}
	else 
		$xt->assign("prev_button",false);
//End show Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	$xt->assign("back_button",true);
	$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
}

$oldtemplatefile = $pageObject->templatefile;

if(!$all)
{
	if($eventObj->exists("BeforeShowView"))
	{
		$templatefile = $pageObject->templatefile;
		$eventObj->BeforeShowView($xt,$templatefile,$data, $pageObject);
		$pageObject->templatefile = $templatefile;
	}
	if(!$pdf)
	{
		if(!$inlineview)
			$xt->display($pageObject->templatefile);
		else{
				$xt->load_template($pageObject->templatefile);
				$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
				if(count($pageObject->includes_css))
					$returnJSON['CSSFiles'] = array_unique($pageObject->includes_css);
				if(count($pageObject->includes_cssIE))
					$returnJSON['CSSFilesIE'] = array_unique($pageObject->includes_cssIE);				
				$returnJSON['idStartFrom'] = $id+1;
				$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
				echo (my_json_encode($returnJSON)); 
			}
	}
	break;
}
}


?>

<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/costmodel_variables.php");
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
$layout->blocks["top"][] = "details";$page_layouts["costmodel_view"] = $layout;




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
	header("Location: costmodel_list.php?a=return");
	exit();
}

$out = "";
$first = true;
$fieldsArr = array();
$arr = array();
$arr['fName'] = "ProdGrpCode";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ProdGrpCode");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Interest";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Interest");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Period";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Period");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "DownPay";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("DownPay");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "DaysWorked";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("DaysWorked");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Qty";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Qty");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "MonthsOfCap";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("MonthsOfCap");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Waste";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Waste");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Maint";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Maint");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Admin";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Admin");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Mgr";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Mgr");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Clerk";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Clerk");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Notes";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Notes");
$fieldsArr[] = $arr;

$mainTableOwnerID = $pageObject->pSet->getTableOwnerIdField();
$ownerIdValue="";

$pageObject->setGoogleMapsParams($fieldsArr);

while($data)
{
	$xt->assign("show_key1", htmlspecialchars($pageObject->showDBValue("ProdGrpCode", $data)));

	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["ProdGrpCode"]));

////////////////////////////////////////////
//ProdGrpCode - 
	
	$value = $pageObject->showDBValue("ProdGrpCode", $data, $keylink);
	if($mainTableOwnerID=="ProdGrpCode")
		$ownerIdValue=$value;
	$xt->assign("ProdGrpCode_value",$value);
	if(!$pageObject->isAppearOnTabs("ProdGrpCode"))
		$xt->assign("ProdGrpCode_fieldblock",true);
	else
		$xt->assign("ProdGrpCode_tabfieldblock",true);
////////////////////////////////////////////
//Interest - Number
	
	$value = $pageObject->showDBValue("Interest", $data, $keylink);
	if($mainTableOwnerID=="Interest")
		$ownerIdValue=$value;
	$xt->assign("Interest_value",$value);
	if(!$pageObject->isAppearOnTabs("Interest"))
		$xt->assign("Interest_fieldblock",true);
	else
		$xt->assign("Interest_tabfieldblock",true);
////////////////////////////////////////////
//Period - 
	
	$value = $pageObject->showDBValue("Period", $data, $keylink);
	if($mainTableOwnerID=="Period")
		$ownerIdValue=$value;
	$xt->assign("Period_value",$value);
	if(!$pageObject->isAppearOnTabs("Period"))
		$xt->assign("Period_fieldblock",true);
	else
		$xt->assign("Period_tabfieldblock",true);
////////////////////////////////////////////
//DownPay - Number
	
	$value = $pageObject->showDBValue("DownPay", $data, $keylink);
	if($mainTableOwnerID=="DownPay")
		$ownerIdValue=$value;
	$xt->assign("DownPay_value",$value);
	if(!$pageObject->isAppearOnTabs("DownPay"))
		$xt->assign("DownPay_fieldblock",true);
	else
		$xt->assign("DownPay_tabfieldblock",true);
////////////////////////////////////////////
//DaysWorked - 
	
	$value = $pageObject->showDBValue("DaysWorked", $data, $keylink);
	if($mainTableOwnerID=="DaysWorked")
		$ownerIdValue=$value;
	$xt->assign("DaysWorked_value",$value);
	if(!$pageObject->isAppearOnTabs("DaysWorked"))
		$xt->assign("DaysWorked_fieldblock",true);
	else
		$xt->assign("DaysWorked_tabfieldblock",true);
////////////////////////////////////////////
//Qty - 
	
	$value = $pageObject->showDBValue("Qty", $data, $keylink);
	if($mainTableOwnerID=="Qty")
		$ownerIdValue=$value;
	$xt->assign("Qty_value",$value);
	if(!$pageObject->isAppearOnTabs("Qty"))
		$xt->assign("Qty_fieldblock",true);
	else
		$xt->assign("Qty_tabfieldblock",true);
////////////////////////////////////////////
//MonthsOfCap - 
	
	$value = $pageObject->showDBValue("MonthsOfCap", $data, $keylink);
	if($mainTableOwnerID=="MonthsOfCap")
		$ownerIdValue=$value;
	$xt->assign("MonthsOfCap_value",$value);
	if(!$pageObject->isAppearOnTabs("MonthsOfCap"))
		$xt->assign("MonthsOfCap_fieldblock",true);
	else
		$xt->assign("MonthsOfCap_tabfieldblock",true);
////////////////////////////////////////////
//Waste - Number
	
	$value = $pageObject->showDBValue("Waste", $data, $keylink);
	if($mainTableOwnerID=="Waste")
		$ownerIdValue=$value;
	$xt->assign("Waste_value",$value);
	if(!$pageObject->isAppearOnTabs("Waste"))
		$xt->assign("Waste_fieldblock",true);
	else
		$xt->assign("Waste_tabfieldblock",true);
////////////////////////////////////////////
//Maint - Number
	
	$value = $pageObject->showDBValue("Maint", $data, $keylink);
	if($mainTableOwnerID=="Maint")
		$ownerIdValue=$value;
	$xt->assign("Maint_value",$value);
	if(!$pageObject->isAppearOnTabs("Maint"))
		$xt->assign("Maint_fieldblock",true);
	else
		$xt->assign("Maint_tabfieldblock",true);
////////////////////////////////////////////
//Admin - Number
	
	$value = $pageObject->showDBValue("Admin", $data, $keylink);
	if($mainTableOwnerID=="Admin")
		$ownerIdValue=$value;
	$xt->assign("Admin_value",$value);
	if(!$pageObject->isAppearOnTabs("Admin"))
		$xt->assign("Admin_fieldblock",true);
	else
		$xt->assign("Admin_tabfieldblock",true);
////////////////////////////////////////////
//Mgr - 
	
	$value = $pageObject->showDBValue("Mgr", $data, $keylink);
	if($mainTableOwnerID=="Mgr")
		$ownerIdValue=$value;
	$xt->assign("Mgr_value",$value);
	if(!$pageObject->isAppearOnTabs("Mgr"))
		$xt->assign("Mgr_fieldblock",true);
	else
		$xt->assign("Mgr_tabfieldblock",true);
////////////////////////////////////////////
//Clerk - 
	
	$value = $pageObject->showDBValue("Clerk", $data, $keylink);
	if($mainTableOwnerID=="Clerk")
		$ownerIdValue=$value;
	$xt->assign("Clerk_value",$value);
	if(!$pageObject->isAppearOnTabs("Clerk"))
		$xt->assign("Clerk_fieldblock",true);
	else
		$xt->assign("Clerk_tabfieldblock",true);
////////////////////////////////////////////
//Notes - 
	
	$value = $pageObject->showDBValue("Notes", $data, $keylink);
	if($mainTableOwnerID=="Notes")
		$ownerIdValue=$value;
	$xt->assign("Notes_value",$value);
	if(!$pageObject->isAppearOnTabs("Notes"))
		$xt->assign("Notes_fieldblock",true);
	else
		$xt->assign("Notes_tabfieldblock",true);

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
		$options['masterTable'] = "costmodel";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		include_once("include/".GetTableURL($strTableName)."_settings.php");
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
		{
			$strTableName = "costmodel";
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
	$strTableName = "costmodel";
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
$xt->assign("editlink_attrs","id=\"editLink".$id."\" name=\"editLink".$id."\" onclick=\"window.location.href='costmodel_edit.php?".$editlink."'\"");

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

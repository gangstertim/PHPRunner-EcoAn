<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/products_variables.php");
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
$layout->blocks["top"][] = "details";$page_layouts["products_view"] = $layout;




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
	header("Location: products_list.php?a=return");
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
$arr['fName'] = "ProdThaiName";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ProdThaiName");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ProdEngName";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ProdEngName");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Picture";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Picture");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ThaiModel";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ThaiModel");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "EngModel";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("EngModel");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "MixNo";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("MixNo");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ProdWt";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ProdWt");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ColorMixNo";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ColorMixNo");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "FaceWt";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("FaceWt");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Mold";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Mold");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "PiecesPerMould";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("PiecesPerMould");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ProductCost";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ProductCost");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "PriceRetail";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("PriceRetail");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "PriceWholeSale";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("PriceWholeSale");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ProdStockGoal";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ProdStockGoal");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ThaiCom";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ThaiCom");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "EngCom";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("EngCom");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Status";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Status");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "MoldWt";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("MoldWt");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "GrayWtMold";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("GrayWtMold");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ColorWtMold";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ColorWtMold");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Length";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Length");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Width1";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Width1");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Thickness";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Thickness");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "ProdNo";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ProdNo");
$fieldsArr[] = $arr;

$mainTableOwnerID = $pageObject->pSet->getTableOwnerIdField();
$ownerIdValue="";

$pageObject->setGoogleMapsParams($fieldsArr);

while($data)
{
	$xt->assign("show_key1", htmlspecialchars($pageObject->showDBValue("ProdNo", $data)));

	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["ProdNo"]));

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
//ProdThaiName - 
	
	$value = $pageObject->showDBValue("ProdThaiName", $data, $keylink);
	if($mainTableOwnerID=="ProdThaiName")
		$ownerIdValue=$value;
	$xt->assign("ProdThaiName_value",$value);
	if(!$pageObject->isAppearOnTabs("ProdThaiName"))
		$xt->assign("ProdThaiName_fieldblock",true);
	else
		$xt->assign("ProdThaiName_tabfieldblock",true);
////////////////////////////////////////////
//ProdEngName - 
	
	$value = $pageObject->showDBValue("ProdEngName", $data, $keylink);
	if($mainTableOwnerID=="ProdEngName")
		$ownerIdValue=$value;
	$xt->assign("ProdEngName_value",$value);
	if(!$pageObject->isAppearOnTabs("ProdEngName"))
		$xt->assign("ProdEngName_fieldblock",true);
	else
		$xt->assign("ProdEngName_tabfieldblock",true);
////////////////////////////////////////////
//Picture - 
	
	$value = $pageObject->showDBValue("Picture", $data, $keylink);
	if($mainTableOwnerID=="Picture")
		$ownerIdValue=$value;
	$xt->assign("Picture_value",$value);
	if(!$pageObject->isAppearOnTabs("Picture"))
		$xt->assign("Picture_fieldblock",true);
	else
		$xt->assign("Picture_tabfieldblock",true);
////////////////////////////////////////////
//ThaiModel - 
	
	$value = $pageObject->showDBValue("ThaiModel", $data, $keylink);
	if($mainTableOwnerID=="ThaiModel")
		$ownerIdValue=$value;
	$xt->assign("ThaiModel_value",$value);
	if(!$pageObject->isAppearOnTabs("ThaiModel"))
		$xt->assign("ThaiModel_fieldblock",true);
	else
		$xt->assign("ThaiModel_tabfieldblock",true);
////////////////////////////////////////////
//EngModel - 
	
	$value = $pageObject->showDBValue("EngModel", $data, $keylink);
	if($mainTableOwnerID=="EngModel")
		$ownerIdValue=$value;
	$xt->assign("EngModel_value",$value);
	if(!$pageObject->isAppearOnTabs("EngModel"))
		$xt->assign("EngModel_fieldblock",true);
	else
		$xt->assign("EngModel_tabfieldblock",true);
////////////////////////////////////////////
//MixNo - 
	
	$value = $pageObject->showDBValue("MixNo", $data, $keylink);
	if($mainTableOwnerID=="MixNo")
		$ownerIdValue=$value;
	$xt->assign("MixNo_value",$value);
	if(!$pageObject->isAppearOnTabs("MixNo"))
		$xt->assign("MixNo_fieldblock",true);
	else
		$xt->assign("MixNo_tabfieldblock",true);
////////////////////////////////////////////
//ProdWt - Number
	
	$value = $pageObject->showDBValue("ProdWt", $data, $keylink);
	if($mainTableOwnerID=="ProdWt")
		$ownerIdValue=$value;
	$xt->assign("ProdWt_value",$value);
	if(!$pageObject->isAppearOnTabs("ProdWt"))
		$xt->assign("ProdWt_fieldblock",true);
	else
		$xt->assign("ProdWt_tabfieldblock",true);
////////////////////////////////////////////
//ColorMixNo - 
	
	$value = $pageObject->showDBValue("ColorMixNo", $data, $keylink);
	if($mainTableOwnerID=="ColorMixNo")
		$ownerIdValue=$value;
	$xt->assign("ColorMixNo_value",$value);
	if(!$pageObject->isAppearOnTabs("ColorMixNo"))
		$xt->assign("ColorMixNo_fieldblock",true);
	else
		$xt->assign("ColorMixNo_tabfieldblock",true);
////////////////////////////////////////////
//FaceWt - Number
	
	$value = $pageObject->showDBValue("FaceWt", $data, $keylink);
	if($mainTableOwnerID=="FaceWt")
		$ownerIdValue=$value;
	$xt->assign("FaceWt_value",$value);
	if(!$pageObject->isAppearOnTabs("FaceWt"))
		$xt->assign("FaceWt_fieldblock",true);
	else
		$xt->assign("FaceWt_tabfieldblock",true);
////////////////////////////////////////////
//Mold - Number
	
	$value = $pageObject->showDBValue("Mold", $data, $keylink);
	if($mainTableOwnerID=="Mold")
		$ownerIdValue=$value;
	$xt->assign("Mold_value",$value);
	if(!$pageObject->isAppearOnTabs("Mold"))
		$xt->assign("Mold_fieldblock",true);
	else
		$xt->assign("Mold_tabfieldblock",true);
////////////////////////////////////////////
//PiecesPerMould - 
	
	$value = $pageObject->showDBValue("PiecesPerMould", $data, $keylink);
	if($mainTableOwnerID=="PiecesPerMould")
		$ownerIdValue=$value;
	$xt->assign("PiecesPerMould_value",$value);
	if(!$pageObject->isAppearOnTabs("PiecesPerMould"))
		$xt->assign("PiecesPerMould_fieldblock",true);
	else
		$xt->assign("PiecesPerMould_tabfieldblock",true);
////////////////////////////////////////////
//ProductCost - Number
	
	$value = $pageObject->showDBValue("ProductCost", $data, $keylink);
	if($mainTableOwnerID=="ProductCost")
		$ownerIdValue=$value;
	$xt->assign("ProductCost_value",$value);
	if(!$pageObject->isAppearOnTabs("ProductCost"))
		$xt->assign("ProductCost_fieldblock",true);
	else
		$xt->assign("ProductCost_tabfieldblock",true);
////////////////////////////////////////////
//PriceRetail - Number
	
	$value = $pageObject->showDBValue("PriceRetail", $data, $keylink);
	if($mainTableOwnerID=="PriceRetail")
		$ownerIdValue=$value;
	$xt->assign("PriceRetail_value",$value);
	if(!$pageObject->isAppearOnTabs("PriceRetail"))
		$xt->assign("PriceRetail_fieldblock",true);
	else
		$xt->assign("PriceRetail_tabfieldblock",true);
////////////////////////////////////////////
//PriceWholeSale - Number
	
	$value = $pageObject->showDBValue("PriceWholeSale", $data, $keylink);
	if($mainTableOwnerID=="PriceWholeSale")
		$ownerIdValue=$value;
	$xt->assign("PriceWholeSale_value",$value);
	if(!$pageObject->isAppearOnTabs("PriceWholeSale"))
		$xt->assign("PriceWholeSale_fieldblock",true);
	else
		$xt->assign("PriceWholeSale_tabfieldblock",true);
////////////////////////////////////////////
//ProdStockGoal - 
	
	$value = $pageObject->showDBValue("ProdStockGoal", $data, $keylink);
	if($mainTableOwnerID=="ProdStockGoal")
		$ownerIdValue=$value;
	$xt->assign("ProdStockGoal_value",$value);
	if(!$pageObject->isAppearOnTabs("ProdStockGoal"))
		$xt->assign("ProdStockGoal_fieldblock",true);
	else
		$xt->assign("ProdStockGoal_tabfieldblock",true);
////////////////////////////////////////////
//ThaiCom - 
	
	$value = $pageObject->showDBValue("ThaiCom", $data, $keylink);
	if($mainTableOwnerID=="ThaiCom")
		$ownerIdValue=$value;
	$xt->assign("ThaiCom_value",$value);
	if(!$pageObject->isAppearOnTabs("ThaiCom"))
		$xt->assign("ThaiCom_fieldblock",true);
	else
		$xt->assign("ThaiCom_tabfieldblock",true);
////////////////////////////////////////////
//EngCom - 
	
	$value = $pageObject->showDBValue("EngCom", $data, $keylink);
	if($mainTableOwnerID=="EngCom")
		$ownerIdValue=$value;
	$xt->assign("EngCom_value",$value);
	if(!$pageObject->isAppearOnTabs("EngCom"))
		$xt->assign("EngCom_fieldblock",true);
	else
		$xt->assign("EngCom_tabfieldblock",true);
////////////////////////////////////////////
//Status - 
	
	$value = $pageObject->showDBValue("Status", $data, $keylink);
	if($mainTableOwnerID=="Status")
		$ownerIdValue=$value;
	$xt->assign("Status_value",$value);
	if(!$pageObject->isAppearOnTabs("Status"))
		$xt->assign("Status_fieldblock",true);
	else
		$xt->assign("Status_tabfieldblock",true);
////////////////////////////////////////////
//MoldWt - Number
	
	$value = $pageObject->showDBValue("MoldWt", $data, $keylink);
	if($mainTableOwnerID=="MoldWt")
		$ownerIdValue=$value;
	$xt->assign("MoldWt_value",$value);
	if(!$pageObject->isAppearOnTabs("MoldWt"))
		$xt->assign("MoldWt_fieldblock",true);
	else
		$xt->assign("MoldWt_tabfieldblock",true);
////////////////////////////////////////////
//GrayWtMold - Number
	
	$value = $pageObject->showDBValue("GrayWtMold", $data, $keylink);
	if($mainTableOwnerID=="GrayWtMold")
		$ownerIdValue=$value;
	$xt->assign("GrayWtMold_value",$value);
	if(!$pageObject->isAppearOnTabs("GrayWtMold"))
		$xt->assign("GrayWtMold_fieldblock",true);
	else
		$xt->assign("GrayWtMold_tabfieldblock",true);
////////////////////////////////////////////
//ColorWtMold - Number
	
	$value = $pageObject->showDBValue("ColorWtMold", $data, $keylink);
	if($mainTableOwnerID=="ColorWtMold")
		$ownerIdValue=$value;
	$xt->assign("ColorWtMold_value",$value);
	if(!$pageObject->isAppearOnTabs("ColorWtMold"))
		$xt->assign("ColorWtMold_fieldblock",true);
	else
		$xt->assign("ColorWtMold_tabfieldblock",true);
////////////////////////////////////////////
//Length - Number
	
	$value = $pageObject->showDBValue("Length", $data, $keylink);
	if($mainTableOwnerID=="Length")
		$ownerIdValue=$value;
	$xt->assign("Length_value",$value);
	if(!$pageObject->isAppearOnTabs("Length"))
		$xt->assign("Length_fieldblock",true);
	else
		$xt->assign("Length_tabfieldblock",true);
////////////////////////////////////////////
//Width1 - Number
	
	$value = $pageObject->showDBValue("Width1", $data, $keylink);
	if($mainTableOwnerID=="Width1")
		$ownerIdValue=$value;
	$xt->assign("Width1_value",$value);
	if(!$pageObject->isAppearOnTabs("Width1"))
		$xt->assign("Width1_fieldblock",true);
	else
		$xt->assign("Width1_tabfieldblock",true);
////////////////////////////////////////////
//Thickness - Number
	
	$value = $pageObject->showDBValue("Thickness", $data, $keylink);
	if($mainTableOwnerID=="Thickness")
		$ownerIdValue=$value;
	$xt->assign("Thickness_value",$value);
	if(!$pageObject->isAppearOnTabs("Thickness"))
		$xt->assign("Thickness_fieldblock",true);
	else
		$xt->assign("Thickness_tabfieldblock",true);
////////////////////////////////////////////
//ProdNo - 
	
	$value = $pageObject->showDBValue("ProdNo", $data, $keylink);
	if($mainTableOwnerID=="ProdNo")
		$ownerIdValue=$value;
	$xt->assign("ProdNo_value",$value);
	if(!$pageObject->isAppearOnTabs("ProdNo"))
		$xt->assign("ProdNo_fieldblock",true);
	else
		$xt->assign("ProdNo_tabfieldblock",true);

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
		$options['masterTable'] = "products";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		include_once("include/".GetTableURL($strTableName)."_settings.php");
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
		{
			$strTableName = "products";
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
	$strTableName = "products";
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
$xt->assign("editlink_attrs","id=\"editLink".$id."\" name=\"editLink".$id."\" onclick=\"window.location.href='products_edit.php?".$editlink."'\"");

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

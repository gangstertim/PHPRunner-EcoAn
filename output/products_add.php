<?php 
include("include/dbcommon.php");

@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

add_nocache_headers();
include("include/products_variables.php");
include('include/xtempl.php');
include('classes/addpage.php');

global $globalEvents;

CheckPermissionsEvent($strTableName, 'A');

if ((sizeof($_POST)==0) && (postvalue('ferror'))){
	if (postvalue("inline")){
		$returnJSON['success'] = false;
		$returnJSON['message'] = "Error occurred";
		$returnJSON['fatalError'] = true;
		echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
		exit();
	}
	else if (postvalue("fly")){
		echo -1;
		exit();
	}
	else {
		$_SESSION["message_add"] = "<< "."Error occurred"." >>";
	}
}

$layout = new TLayout("add2","FancyGreen1","MobileGreen1");
$layout->blocks["top"] = array();
$layout->containers["add"] = array();

$layout->containers["add"][] = array("name"=>"addheader","block"=>"","substyle"=>2);


$layout->containers["add"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->containers["add"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"fields");


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"addfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"legend","block"=>"legend","substyle"=>3);


$layout->containers["fields"][] = array("name"=>"addbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";

$layout->skins["add"] = "1";
$layout->blocks["top"][] = "add";
$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["products_add"] = $layout;



$filename = "";
$status = "";
$message = "";
$mesClass = "";
$usermessage = "";
$error_happened = false;
$readavalues = false;

$keys = array();
$showValues = array();
$showRawValues = array();
$showFields = array();
$showDetailKeys = array();
$IsSaved = false;
$HaveData = true;
$popUpSave = false;

$sessionPrefix = $strTableName;

$onFly = false;
if(postvalue("onFly"))
	$onFly = true;

if(@$_REQUEST["editType"]=="inline")
	$inlineadd = ADD_INLINE;
elseif(@$_REQUEST["editType"]==ADD_POPUP)
{
	$inlineadd = ADD_POPUP;
	if(@$_POST["a"]=="added" && postvalue("field")=="" && postvalue("category")=="")
		$popUpSave = true;	
}
elseif(@$_REQUEST["editType"]==ADD_MASTER)
	$inlineadd = ADD_MASTER;
elseif($onFly)
{
	$inlineadd = ADD_ONTHEFLY;
	$sessionPrefix = $strTableName."_add";
}
else
	$inlineadd = ADD_SIMPLE;

if($inlineadd == ADD_INLINE)
	$templatefile = "products_inline_add.htm";
else
	$templatefile = "products_add.htm";

$id = postvalue("id");
if(intval($id)==0)
	$id = 1;

//If undefined session value for mastet table, but exist post value master table, than take second
//It may be happen only when use dpInline mode on page add
if(!@$_SESSION[$sessionPrefix."_mastertable"] && postvalue("mastertable"))
	$_SESSION[$sessionPrefix."_mastertable"] = postvalue("mastertable");
	
$xt = new Xtempl();
	
// assign an id
$xt->assign("id",$id);
	
$auditObj = GetAuditObject($strTableName);

//array of params for classes
$params = array("pageType" => PAGE_ADD,"id" => $id,"mode" => $inlineadd);


$params['xt'] = &$xt;
$params['tName'] = $strTableName;
$params['includes_js'] = $includes_js;
$params['locale_info'] = $locale_info;
$params['includes_css'] = $includes_css;
$params['useTabsOnAdd'] = $gSettings->useTabsOnAdd();
$params['templatefile'] = $templatefile;
$params['includes_jsreq'] = $includes_jsreq;
$params['pageAddLikeInline'] = ($inlineadd==ADD_INLINE);
$params['needSearchClauseObj'] = false;
$params['strOriginalTableName'] = $strOriginalTableName;

if($params['useTabsOnAdd'])
	$params['arrAddTabs'] = $gSettings->getAddTabs();
	
$pageObject = new AddPage($params);

if(isset($_REQUEST['afteradd'])){
		header('Location: products_add.php');
	if($eventObj->exists("AfterAdd") && isset($_SESSION['after_add_data'][$_REQUEST['afteradd']])){
	
		$data = $_SESSION['after_add_data'][$_REQUEST['afteradd']];
		$eventObj->AfterAdd($data['avalues'], $data['keys'],$data['inlineadd'], $pageObject);
	
	}
	unset($_SESSION['after_add_data'][$_REQUEST['afteradd']]);
	
	foreach (is_array($_SESSION['after_add_data']) ? $_SESSION['after_add_data'] : array() as $k=>$v){
		if (!is_array($v) or !array_key_exists('time',$v)) {
			unset($_SESSION['after_add_data'][$k]);
			continue;
		}
		if ($v['time'] < time() - 3600){
			unset($_SESSION['after_add_data'][$k]);
		}
	}
		exit;
}

//Get detail table keys	
$detailKeys = $pageObject->detailKeysByM;

//Array of fields, which appear on add page
$addFields = $pageObject->getFieldsByPageType();

// add button events if exist
if ($inlineadd==ADD_SIMPLE)
	$pageObject->addButtonHandlers();

$url_page=substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1,12);

//For show detail tables on master page add
if($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
{
	$dpParams = array();
	if($pageObject->isShowDetailTables  && !isMobile())
	{
		$ids = $id;
		$countDetailsIsShow = 0;
			$pageObject->jsSettings['tableSettings'][$strTableName]['isShowDetails'] = $countDetailsIsShow > 0 ? true : false;
		$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array('tableNames'=>$dpParams['strTableNames'], 'ids'=>$dpParams['ids']);
	}
}

//	Before Process event
if($eventObj->exists("BeforeProcessAdd"))
	$eventObj->BeforeProcessAdd($conn, $pageObject);

// proccess captcha
if ($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
	if($pageObject->captchaExists())
		$pageObject->doCaptchaCode();
	
// insert new record if we have to
if(@$_POST["a"]=="added")
{
	$afilename_values=array();
	$avalues=array();
	$blobfields=array();
//	processing ProdGrpCode - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_ProdGrpCode = $pageObject->getControl("ProdGrpCode", $id);
		$control_ProdGrpCode->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing ProdGrpCode - end
//	processing ProdThaiName - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_ProdThaiName = $pageObject->getControl("ProdThaiName", $id);
		$control_ProdThaiName->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing ProdThaiName - end
//	processing ProdEngName - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_ProdEngName = $pageObject->getControl("ProdEngName", $id);
		$control_ProdEngName->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing ProdEngName - end
//	processing Picture - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_Picture = $pageObject->getControl("Picture", $id);
		$control_Picture->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Picture - end
//	processing ThaiModel - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_ThaiModel = $pageObject->getControl("ThaiModel", $id);
		$control_ThaiModel->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing ThaiModel - end
//	processing EngModel - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_EngModel = $pageObject->getControl("EngModel", $id);
		$control_EngModel->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing EngModel - end
//	processing MixNo - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_MixNo = $pageObject->getControl("MixNo", $id);
		$control_MixNo->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing MixNo - end
//	processing ProdWt - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_ProdWt = $pageObject->getControl("ProdWt", $id);
		$control_ProdWt->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing ProdWt - end
//	processing ColorMixNo - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_ColorMixNo = $pageObject->getControl("ColorMixNo", $id);
		$control_ColorMixNo->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing ColorMixNo - end
//	processing FaceWt - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_FaceWt = $pageObject->getControl("FaceWt", $id);
		$control_FaceWt->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing FaceWt - end
//	processing Mold - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_Mold = $pageObject->getControl("Mold", $id);
		$control_Mold->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Mold - end
//	processing PiecesPerMould - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_PiecesPerMould = $pageObject->getControl("PiecesPerMould", $id);
		$control_PiecesPerMould->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing PiecesPerMould - end
//	processing ProductCost - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_ProductCost = $pageObject->getControl("ProductCost", $id);
		$control_ProductCost->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing ProductCost - end
//	processing PriceRetail - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_PriceRetail = $pageObject->getControl("PriceRetail", $id);
		$control_PriceRetail->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing PriceRetail - end
//	processing PriceWholeSale - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_PriceWholeSale = $pageObject->getControl("PriceWholeSale", $id);
		$control_PriceWholeSale->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing PriceWholeSale - end
//	processing ProdStockGoal - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_ProdStockGoal = $pageObject->getControl("ProdStockGoal", $id);
		$control_ProdStockGoal->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing ProdStockGoal - end
//	processing ThaiCom - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_ThaiCom = $pageObject->getControl("ThaiCom", $id);
		$control_ThaiCom->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing ThaiCom - end
//	processing EngCom - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_EngCom = $pageObject->getControl("EngCom", $id);
		$control_EngCom->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing EngCom - end
//	processing Status - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_Status = $pageObject->getControl("Status", $id);
		$control_Status->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Status - end
//	processing MoldWt - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_MoldWt = $pageObject->getControl("MoldWt", $id);
		$control_MoldWt->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing MoldWt - end
//	processing GrayWtMold - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_GrayWtMold = $pageObject->getControl("GrayWtMold", $id);
		$control_GrayWtMold->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing GrayWtMold - end
//	processing ColorWtMold - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_ColorWtMold = $pageObject->getControl("ColorWtMold", $id);
		$control_ColorWtMold->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing ColorWtMold - end
//	processing Length - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_Length = $pageObject->getControl("Length", $id);
		$control_Length->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Length - end
//	processing Width1 - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_Width1 = $pageObject->getControl("Width1", $id);
		$control_Width1->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Width1 - end
//	processing Thickness - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_Thickness = $pageObject->getControl("Thickness", $id);
		$control_Thickness->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Thickness - end




	$failed_inline_add=false;
//	add filenames to values
	foreach($afilename_values as $akey=>$value)
		$avalues[$akey]=$value;
	
//	before Add event
	$retval = true;
	if($eventObj->exists("BeforeAdd"))
		$retval = $eventObj->BeforeAdd($avalues,$usermessage,(bool)$inlineadd, $pageObject);
	if($retval && $pageObject->isCaptchaOk)
	{
		//add or set updated lat-lng values for all map fileds with 'UpdateLatLng' ticked
		setUpdatedLatLng($avalues, $pageObject->cipherer->pSet);
		
		$_SESSION[$strTableName."_count_captcha"] = $_SESSION[$strTableName."_count_captcha"]+1;
		if(DoInsertRecord($strOriginalTableName,$avalues,$blobfields,$id,$pageObject, $pageObject->cipherer))
		{
			$IsSaved=true;
//	after edit event
			if($auditObj || $eventObj->exists("AfterAdd"))
			{
				foreach($keys as $idx=>$val)
					$avalues[$idx]=$val;
			}
			
			if($auditObj)
				$auditObj->LogAdd($strTableName,$avalues,$keys);
				
// Give possibility to all edit controls to clean their data				
//	processing ProdGrpCode - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_ProdGrpCode->afterSuccessfulSave();
			}
//	processing ProdGrpCode - end
//	processing ProdThaiName - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_ProdThaiName->afterSuccessfulSave();
			}
//	processing ProdThaiName - end
//	processing ProdEngName - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_ProdEngName->afterSuccessfulSave();
			}
//	processing ProdEngName - end
//	processing Picture - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_Picture->afterSuccessfulSave();
			}
//	processing Picture - end
//	processing ThaiModel - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_ThaiModel->afterSuccessfulSave();
			}
//	processing ThaiModel - end
//	processing EngModel - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_EngModel->afterSuccessfulSave();
			}
//	processing EngModel - end
//	processing MixNo - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_MixNo->afterSuccessfulSave();
			}
//	processing MixNo - end
//	processing ProdWt - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_ProdWt->afterSuccessfulSave();
			}
//	processing ProdWt - end
//	processing ColorMixNo - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_ColorMixNo->afterSuccessfulSave();
			}
//	processing ColorMixNo - end
//	processing FaceWt - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_FaceWt->afterSuccessfulSave();
			}
//	processing FaceWt - end
//	processing Mold - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_Mold->afterSuccessfulSave();
			}
//	processing Mold - end
//	processing PiecesPerMould - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_PiecesPerMould->afterSuccessfulSave();
			}
//	processing PiecesPerMould - end
//	processing ProductCost - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_ProductCost->afterSuccessfulSave();
			}
//	processing ProductCost - end
//	processing PriceRetail - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_PriceRetail->afterSuccessfulSave();
			}
//	processing PriceRetail - end
//	processing PriceWholeSale - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_PriceWholeSale->afterSuccessfulSave();
			}
//	processing PriceWholeSale - end
//	processing ProdStockGoal - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_ProdStockGoal->afterSuccessfulSave();
			}
//	processing ProdStockGoal - end
//	processing ThaiCom - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_ThaiCom->afterSuccessfulSave();
			}
//	processing ThaiCom - end
//	processing EngCom - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_EngCom->afterSuccessfulSave();
			}
//	processing EngCom - end
//	processing Status - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_Status->afterSuccessfulSave();
			}
//	processing Status - end
//	processing MoldWt - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_MoldWt->afterSuccessfulSave();
			}
//	processing MoldWt - end
//	processing GrayWtMold - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_GrayWtMold->afterSuccessfulSave();
			}
//	processing GrayWtMold - end
//	processing ColorWtMold - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_ColorWtMold->afterSuccessfulSave();
			}
//	processing ColorWtMold - end
//	processing Length - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_Length->afterSuccessfulSave();
			}
//	processing Length - end
//	processing Width1 - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_Width1->afterSuccessfulSave();
			}
//	processing Width1 - end
//	processing Thickness - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_Thickness->afterSuccessfulSave();
			}
//	processing Thickness - end

			$afterAdd_id = '';	
			if($eventObj->exists("AfterAdd") && $inlineadd!=ADD_MASTER){
				$eventObj->AfterAdd($avalues,$keys,(bool)$inlineadd, $pageObject);
			} else if ($eventObj->exists("AfterAdd") && $inlineadd==ADD_MASTER){
				if($onFly)
					$eventObj->AfterAdd($avalues,$keys,(bool)$inlineadd, $pageObject);
				else{
					$afterAdd_id = generatePassword(20);	
				
					$_SESSION['after_add_data'][$afterAdd_id] = array(
						'avalues'=>$avalues,
						'keys'=>$keys,
						'inlineadd'=>(bool)$inlineadd,
						'time' => time()
					);	
				}
			}
				
			if($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER)
			{
				$permis = array();
				$keylink = "";$k = 0;
				foreach($keys as $idx=>$val)
				{
					if($k!=0)
						$keylink .="&";
					$keylink .="editid".(++$k)."=".htmlspecialchars(rawurlencode(@$val));
				}
				$permis = $pageObject->getPermissions();				
				if (count($keys))
				{
					$message .="</br>";
					if($pageObject->pSet->hasEditPage() && $permis['edit'])
						$message .='&nbsp;<a href=\'products_edit.php?'.$keylink.'\'>'."Edit".'</a>&nbsp;';
					if($pageObject->pSet->hasViewPage() && $permis['search'])
						$message .='&nbsp;<a href=\'products_view.php?'.$keylink.'\'>'."View".'</a>&nbsp;';
				}
				$mesClass = "mes_ok";	
			}
		}
		elseif($inlineadd!=ADD_INLINE)
			$mesClass = "mes_not";	
	}
	else
	{
		$message = $usermessage;
		$status = "DECLINED";
		$readavalues = true;
	}
}
if($message)
	$message = "<div class='message ".$mesClass."'>".$message."</div>";

// PRG rule, to avoid POSTDATA resend
if (no_output_done() && $inlineadd==ADD_SIMPLE && $IsSaved)
{
	// saving message
	$_SESSION["message_add"] = ($message ? $message : "");
	// redirect
	header("Location: products_".$pageObject->getPageType().".php");
	// turned on output buffering, so we need to stop script
	exit();
}

if($inlineadd==ADD_MASTER && $IsSaved)
	$_SESSION["message_add"] = ($message ? $message : "");
	
// for PRG rule, to avoid POSTDATA resend. Saving mess in session
if($inlineadd==ADD_SIMPLE && isset($_SESSION["message_add"]))
{
	$message = $_SESSION["message_add"];
	unset($_SESSION["message_add"]);
}

$defvalues=array();

//	copy record
if(array_key_exists("copyid1",$_REQUEST) || array_key_exists("editid1",$_REQUEST))
{
	$copykeys=array();
	if(array_key_exists("copyid1",$_REQUEST))
	{
		$copykeys["ProdNo"]=postvalue("copyid1");
	}
	else
	{
		$copykeys["ProdNo"]=postvalue("editid1");
	}
	$strWhere=KeyWhere($copykeys);
	$strSQL = $gQuery->gSQLWhere($strWhere);

	LogInfo($strSQL);
	$rs = db_query($strSQL,$conn);
	$defvalues = $pageObject->cipherer->DecryptFetchedArray($rs);
	if(!$defvalues)
		$defvalues=array();
//	clear key fields
	$defvalues["ProdNo"]="";
//call CopyOnLoad event
	if($eventObj->exists("CopyOnLoad"))
		$eventObj->CopyOnLoad($defvalues,$strWhere, $pageObject);
}
else
{
}



if($readavalues)
{
	$defvalues["ProdGrpCode"]=@$avalues["ProdGrpCode"];
	$defvalues["ProdThaiName"]=@$avalues["ProdThaiName"];
	$defvalues["ProdEngName"]=@$avalues["ProdEngName"];
	$defvalues["Picture"]=@$avalues["Picture"];
	$defvalues["ThaiModel"]=@$avalues["ThaiModel"];
	$defvalues["EngModel"]=@$avalues["EngModel"];
	$defvalues["MixNo"]=@$avalues["MixNo"];
	$defvalues["ProdWt"]=@$avalues["ProdWt"];
	$defvalues["ColorMixNo"]=@$avalues["ColorMixNo"];
	$defvalues["FaceWt"]=@$avalues["FaceWt"];
	$defvalues["Mold"]=@$avalues["Mold"];
	$defvalues["PiecesPerMould"]=@$avalues["PiecesPerMould"];
	$defvalues["ProductCost"]=@$avalues["ProductCost"];
	$defvalues["PriceRetail"]=@$avalues["PriceRetail"];
	$defvalues["PriceWholeSale"]=@$avalues["PriceWholeSale"];
	$defvalues["ProdStockGoal"]=@$avalues["ProdStockGoal"];
	$defvalues["ThaiCom"]=@$avalues["ThaiCom"];
	$defvalues["EngCom"]=@$avalues["EngCom"];
	$defvalues["Status"]=@$avalues["Status"];
	$defvalues["MoldWt"]=@$avalues["MoldWt"];
	$defvalues["GrayWtMold"]=@$avalues["GrayWtMold"];
	$defvalues["ColorWtMold"]=@$avalues["ColorWtMold"];
	$defvalues["Length"]=@$avalues["Length"];
	$defvalues["Width1"]=@$avalues["Width1"];
	$defvalues["Thickness"]=@$avalues["Thickness"];
}

if($eventObj->exists("ProcessValuesAdd"))
	$eventObj->ProcessValuesAdd($defvalues, $pageObject);


//for basic files
$includes="";

if($inlineadd!=ADD_INLINE)
{
	if($inlineadd!=ADD_ONTHEFLY && $inlineadd!=ADD_POPUP)
	{
		$includes .="<script language=\"JavaScript\" src=\"include/loadfirst.js\"></script>\r\n";
				$includes.="<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";
		if (!isMobile())
			$includes.="<div id=\"search_suggest\"></div>\r\n";
	}
	
	if(!$pageObject->isAppearOnTabs("ProdGrpCode"))
		$xt->assign("ProdGrpCode_fieldblock",true);
	else
		$xt->assign("ProdGrpCode_tabfieldblock",true);
	$xt->assign("ProdGrpCode_label",true);
	if(isEnableSection508())
		$xt->assign_section("ProdGrpCode_label","<label for=\"".GetInputElementId("ProdGrpCode", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("ProdThaiName"))
		$xt->assign("ProdThaiName_fieldblock",true);
	else
		$xt->assign("ProdThaiName_tabfieldblock",true);
	$xt->assign("ProdThaiName_label",true);
	if(isEnableSection508())
		$xt->assign_section("ProdThaiName_label","<label for=\"".GetInputElementId("ProdThaiName", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("ProdEngName"))
		$xt->assign("ProdEngName_fieldblock",true);
	else
		$xt->assign("ProdEngName_tabfieldblock",true);
	$xt->assign("ProdEngName_label",true);
	if(isEnableSection508())
		$xt->assign_section("ProdEngName_label","<label for=\"".GetInputElementId("ProdEngName", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Picture"))
		$xt->assign("Picture_fieldblock",true);
	else
		$xt->assign("Picture_tabfieldblock",true);
	$xt->assign("Picture_label",true);
	if(isEnableSection508())
		$xt->assign_section("Picture_label","<label for=\"".GetInputElementId("Picture", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("ThaiModel"))
		$xt->assign("ThaiModel_fieldblock",true);
	else
		$xt->assign("ThaiModel_tabfieldblock",true);
	$xt->assign("ThaiModel_label",true);
	if(isEnableSection508())
		$xt->assign_section("ThaiModel_label","<label for=\"".GetInputElementId("ThaiModel", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("EngModel"))
		$xt->assign("EngModel_fieldblock",true);
	else
		$xt->assign("EngModel_tabfieldblock",true);
	$xt->assign("EngModel_label",true);
	if(isEnableSection508())
		$xt->assign_section("EngModel_label","<label for=\"".GetInputElementId("EngModel", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("MixNo"))
		$xt->assign("MixNo_fieldblock",true);
	else
		$xt->assign("MixNo_tabfieldblock",true);
	$xt->assign("MixNo_label",true);
	if(isEnableSection508())
		$xt->assign_section("MixNo_label","<label for=\"".GetInputElementId("MixNo", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("ProdWt"))
		$xt->assign("ProdWt_fieldblock",true);
	else
		$xt->assign("ProdWt_tabfieldblock",true);
	$xt->assign("ProdWt_label",true);
	if(isEnableSection508())
		$xt->assign_section("ProdWt_label","<label for=\"".GetInputElementId("ProdWt", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("ColorMixNo"))
		$xt->assign("ColorMixNo_fieldblock",true);
	else
		$xt->assign("ColorMixNo_tabfieldblock",true);
	$xt->assign("ColorMixNo_label",true);
	if(isEnableSection508())
		$xt->assign_section("ColorMixNo_label","<label for=\"".GetInputElementId("ColorMixNo", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("FaceWt"))
		$xt->assign("FaceWt_fieldblock",true);
	else
		$xt->assign("FaceWt_tabfieldblock",true);
	$xt->assign("FaceWt_label",true);
	if(isEnableSection508())
		$xt->assign_section("FaceWt_label","<label for=\"".GetInputElementId("FaceWt", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Mold"))
		$xt->assign("Mold_fieldblock",true);
	else
		$xt->assign("Mold_tabfieldblock",true);
	$xt->assign("Mold_label",true);
	if(isEnableSection508())
		$xt->assign_section("Mold_label","<label for=\"".GetInputElementId("Mold", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("PiecesPerMould"))
		$xt->assign("PiecesPerMould_fieldblock",true);
	else
		$xt->assign("PiecesPerMould_tabfieldblock",true);
	$xt->assign("PiecesPerMould_label",true);
	if(isEnableSection508())
		$xt->assign_section("PiecesPerMould_label","<label for=\"".GetInputElementId("PiecesPerMould", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("ProductCost"))
		$xt->assign("ProductCost_fieldblock",true);
	else
		$xt->assign("ProductCost_tabfieldblock",true);
	$xt->assign("ProductCost_label",true);
	if(isEnableSection508())
		$xt->assign_section("ProductCost_label","<label for=\"".GetInputElementId("ProductCost", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("PriceRetail"))
		$xt->assign("PriceRetail_fieldblock",true);
	else
		$xt->assign("PriceRetail_tabfieldblock",true);
	$xt->assign("PriceRetail_label",true);
	if(isEnableSection508())
		$xt->assign_section("PriceRetail_label","<label for=\"".GetInputElementId("PriceRetail", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("PriceWholeSale"))
		$xt->assign("PriceWholeSale_fieldblock",true);
	else
		$xt->assign("PriceWholeSale_tabfieldblock",true);
	$xt->assign("PriceWholeSale_label",true);
	if(isEnableSection508())
		$xt->assign_section("PriceWholeSale_label","<label for=\"".GetInputElementId("PriceWholeSale", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("ProdStockGoal"))
		$xt->assign("ProdStockGoal_fieldblock",true);
	else
		$xt->assign("ProdStockGoal_tabfieldblock",true);
	$xt->assign("ProdStockGoal_label",true);
	if(isEnableSection508())
		$xt->assign_section("ProdStockGoal_label","<label for=\"".GetInputElementId("ProdStockGoal", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("ThaiCom"))
		$xt->assign("ThaiCom_fieldblock",true);
	else
		$xt->assign("ThaiCom_tabfieldblock",true);
	$xt->assign("ThaiCom_label",true);
	if(isEnableSection508())
		$xt->assign_section("ThaiCom_label","<label for=\"".GetInputElementId("ThaiCom", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("EngCom"))
		$xt->assign("EngCom_fieldblock",true);
	else
		$xt->assign("EngCom_tabfieldblock",true);
	$xt->assign("EngCom_label",true);
	if(isEnableSection508())
		$xt->assign_section("EngCom_label","<label for=\"".GetInputElementId("EngCom", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Status"))
		$xt->assign("Status_fieldblock",true);
	else
		$xt->assign("Status_tabfieldblock",true);
	$xt->assign("Status_label",true);
	if(isEnableSection508())
		$xt->assign_section("Status_label","<label for=\"".GetInputElementId("Status", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("MoldWt"))
		$xt->assign("MoldWt_fieldblock",true);
	else
		$xt->assign("MoldWt_tabfieldblock",true);
	$xt->assign("MoldWt_label",true);
	if(isEnableSection508())
		$xt->assign_section("MoldWt_label","<label for=\"".GetInputElementId("MoldWt", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("GrayWtMold"))
		$xt->assign("GrayWtMold_fieldblock",true);
	else
		$xt->assign("GrayWtMold_tabfieldblock",true);
	$xt->assign("GrayWtMold_label",true);
	if(isEnableSection508())
		$xt->assign_section("GrayWtMold_label","<label for=\"".GetInputElementId("GrayWtMold", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("ColorWtMold"))
		$xt->assign("ColorWtMold_fieldblock",true);
	else
		$xt->assign("ColorWtMold_tabfieldblock",true);
	$xt->assign("ColorWtMold_label",true);
	if(isEnableSection508())
		$xt->assign_section("ColorWtMold_label","<label for=\"".GetInputElementId("ColorWtMold", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Length"))
		$xt->assign("Length_fieldblock",true);
	else
		$xt->assign("Length_tabfieldblock",true);
	$xt->assign("Length_label",true);
	if(isEnableSection508())
		$xt->assign_section("Length_label","<label for=\"".GetInputElementId("Length", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Width1"))
		$xt->assign("Width1_fieldblock",true);
	else
		$xt->assign("Width1_tabfieldblock",true);
	$xt->assign("Width1_label",true);
	if(isEnableSection508())
		$xt->assign_section("Width1_label","<label for=\"".GetInputElementId("Width1", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Thickness"))
		$xt->assign("Thickness_fieldblock",true);
	else
		$xt->assign("Thickness_tabfieldblock",true);
	$xt->assign("Thickness_label",true);
	if(isEnableSection508())
		$xt->assign_section("Thickness_label","<label for=\"".GetInputElementId("Thickness", $id, PAGE_ADD)."\">","</label>");
	
	
	
	if($inlineadd!=ADD_ONTHEFLY && $inlineadd!=ADD_POPUP)
	{
		$pageObject->body["begin"] .= $includes;
				$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
		$xt->assign("back_button",true);
	}
	else
	{		
		$xt->assign("cancelbutton_attrs", "id=\"cancelButton".$id."\"");
		$xt->assign("cancel_button",true);
		$xt->assign("header","");
	}
	$xt->assign("save_button",true);
}
$xt->assign("savebutton_attrs","id=\"saveButton".$id."\"");
$xt->assign("message_block",true);
$xt->assign("message",$message);
if(!strlen($message))
{
	$xt->displayBrickHidden("message");
}

//	show readonly fields
$linkdata="";

$i = 0;
$jsKeys = array();
$keyFields = array();
foreach($keys as $field=>$value)
{
	$keyFields[$i] = $field;
	$jsKeys[$i++] = $value;
}

if(@$_POST["a"]=="added" && $inlineadd==ADD_ONTHEFLY)
{
	if( !$error_happened && $status!="DECLINED")
	{
		$addedData = GetAddedDataLookupQuery($pageObject, $keys, false);
		$data =& $addedData[0];	
		
		if($data)
		{
			$respData = array($addedData[1]["linkField"] => @$data[$addedData[1]["linkFieldIndex"]], $addedData[1]["displayField"] => @$data[$addedData[1]["displayFieldIndex"]]);
		}
		else
		{
			$respData = array($addedData[1]["linkField"] => @$avalues[$addedData[1]["linkField"]], $addedData[1]["displayField"] => @$avalues[$addedData[1]["displayField"]]);
		}		
		$returnJSON['success'] = true;
		$returnJSON['keys'] = $jsKeys;
		$returnJSON['keyFields'] = $keyFields;
		$returnJSON['vals'] = $respData;
		$returnJSON['fields'] = $showFields;
	}
	else
	{
		$returnJSON['success'] = false;
		$returnJSON['message'] = $message;
	}
	echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
	exit();
}

if(@$_POST["a"]=="added" && ($inlineadd == ADD_INLINE || $inlineadd == ADD_MASTER || $inlineadd==ADD_POPUP)) 
{
	//Preparation   view values
	//	get current values and show edit controls
	$dispFieldAlias = "";
	$data=0;
	$linkAndDispVals = array();
	if(count($keys))
	{
		$where=KeyWhere($keys);
			
		$forLookup = postvalue('forLookup');
		if ($forLookup)
		{
			$addedData = GetAddedDataLookupQuery($pageObject, $keys, true);
			$data =& $addedData[0];
			$linkAndDispVals = array('linkField' => $addedData[0][$addedData[1]["linkField"]], 'displayField' => $addedData[0][$addedData[1]["displayField"]]);
		}
		else
		{
			$strSQL = $gQuery->gSQLWhere_having_fromQuery('', $where, '');		
		
			LogInfo($strSQL);
			$rs=db_query($strSQL,$conn);
			$data = $pageObject->cipherer->DecryptFetchedArray($rs);
		}
	}
	if(!$data)
	{
		$data=$avalues;
		$HaveData=false;
	}
	//check if correct values added
	$showDetailKeys["prodcosts"]["masterkey1"] = $data["ProdNo"];	

	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["ProdNo"]));
	
////////////////////////////////////////////
//	ProdGrpCode
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("ProdGrpCode", $data, $keylink);
		$showValues["ProdGrpCode"] = $value;
		$showFields[] = "ProdGrpCode";
	}	
//	ProdThaiName
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("ProdThaiName", $data, $keylink);
		$showValues["ProdThaiName"] = $value;
		$showFields[] = "ProdThaiName";
	}	
//	ProdEngName
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("ProdEngName", $data, $keylink);
		$showValues["ProdEngName"] = $value;
		$showFields[] = "ProdEngName";
	}	
//	Picture
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Picture", $data, $keylink);
		$showValues["Picture"] = $value;
		$showFields[] = "Picture";
	}	
//	ThaiModel
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("ThaiModel", $data, $keylink);
		$showValues["ThaiModel"] = $value;
		$showFields[] = "ThaiModel";
	}	
//	EngModel
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("EngModel", $data, $keylink);
		$showValues["EngModel"] = $value;
		$showFields[] = "EngModel";
	}	
//	MixNo
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("MixNo", $data, $keylink);
		$showValues["MixNo"] = $value;
		$showFields[] = "MixNo";
	}	
//	ProdWt
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("ProdWt", $data, $keylink);
		$showValues["ProdWt"] = $value;
		$showFields[] = "ProdWt";
	}	
//	ColorMixNo
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("ColorMixNo", $data, $keylink);
		$showValues["ColorMixNo"] = $value;
		$showFields[] = "ColorMixNo";
	}	
//	FaceWt
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("FaceWt", $data, $keylink);
		$showValues["FaceWt"] = $value;
		$showFields[] = "FaceWt";
	}	
//	Mold
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Mold", $data, $keylink);
		$showValues["Mold"] = $value;
		$showFields[] = "Mold";
	}	
//	PiecesPerMould
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("PiecesPerMould", $data, $keylink);
		$showValues["PiecesPerMould"] = $value;
		$showFields[] = "PiecesPerMould";
	}	
//	ProductCost
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("ProductCost", $data, $keylink);
		$showValues["ProductCost"] = $value;
		$showFields[] = "ProductCost";
	}	
//	PriceRetail
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("PriceRetail", $data, $keylink);
		$showValues["PriceRetail"] = $value;
		$showFields[] = "PriceRetail";
	}	
//	PriceWholeSale
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("PriceWholeSale", $data, $keylink);
		$showValues["PriceWholeSale"] = $value;
		$showFields[] = "PriceWholeSale";
	}	
//	ProdStockGoal
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("ProdStockGoal", $data, $keylink);
		$showValues["ProdStockGoal"] = $value;
		$showFields[] = "ProdStockGoal";
	}	
//	ThaiCom
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("ThaiCom", $data, $keylink);
		$showValues["ThaiCom"] = $value;
		$showFields[] = "ThaiCom";
	}	
//	EngCom
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("EngCom", $data, $keylink);
		$showValues["EngCom"] = $value;
		$showFields[] = "EngCom";
	}	
//	Status
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Status", $data, $keylink);
		$showValues["Status"] = $value;
		$showFields[] = "Status";
	}	
//	MoldWt
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("MoldWt", $data, $keylink);
		$showValues["MoldWt"] = $value;
		$showFields[] = "MoldWt";
	}	
//	GrayWtMold
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("GrayWtMold", $data, $keylink);
		$showValues["GrayWtMold"] = $value;
		$showFields[] = "GrayWtMold";
	}	
//	ColorWtMold
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("ColorWtMold", $data, $keylink);
		$showValues["ColorWtMold"] = $value;
		$showFields[] = "ColorWtMold";
	}	
//	Length
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Length", $data, $keylink);
		$showValues["Length"] = $value;
		$showFields[] = "Length";
	}	
//	Width1
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Width1", $data, $keylink);
		$showValues["Width1"] = $value;
		$showFields[] = "Width1";
	}	
//	Thickness
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("Thickness", $data, $keylink);
		$showValues["Thickness"] = $value;
		$showFields[] = "Thickness";
	}	
//	ProdNo
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("ProdNo", $data, $keylink);
		$showValues["ProdNo"] = $value;
		$showFields[] = "ProdNo";
	}	
		$showRawValues["ProdGrpCode"] = substr($data["ProdGrpCode"],0,100);
		$showRawValues["ProdThaiName"] = substr($data["ProdThaiName"],0,100);
		$showRawValues["ProdEngName"] = substr($data["ProdEngName"],0,100);
		$showRawValues["Picture"] = substr($data["Picture"],0,100);
		$showRawValues["ThaiModel"] = substr($data["ThaiModel"],0,100);
		$showRawValues["EngModel"] = substr($data["EngModel"],0,100);
		$showRawValues["MixNo"] = substr($data["MixNo"],0,100);
		$showRawValues["ProdWt"] = substr($data["ProdWt"],0,100);
		$showRawValues["ColorMixNo"] = substr($data["ColorMixNo"],0,100);
		$showRawValues["FaceWt"] = substr($data["FaceWt"],0,100);
		$showRawValues["Mold"] = substr($data["Mold"],0,100);
		$showRawValues["PiecesPerMould"] = substr($data["PiecesPerMould"],0,100);
		$showRawValues["ProductCost"] = substr($data["ProductCost"],0,100);
		$showRawValues["PriceRetail"] = substr($data["PriceRetail"],0,100);
		$showRawValues["PriceWholeSale"] = substr($data["PriceWholeSale"],0,100);
		$showRawValues["ProdStockGoal"] = substr($data["ProdStockGoal"],0,100);
		$showRawValues["ThaiCom"] = substr($data["ThaiCom"],0,100);
		$showRawValues["EngCom"] = substr($data["EngCom"],0,100);
		$showRawValues["Status"] = substr($data["Status"],0,100);
		$showRawValues["MoldWt"] = substr($data["MoldWt"],0,100);
		$showRawValues["GrayWtMold"] = substr($data["GrayWtMold"],0,100);
		$showRawValues["ColorWtMold"] = substr($data["ColorWtMold"],0,100);
		$showRawValues["Length"] = substr($data["Length"],0,100);
		$showRawValues["Width1"] = substr($data["Width1"],0,100);
		$showRawValues["Thickness"] = substr($data["Thickness"],0,100);
		$showRawValues["ProdNo"] = substr($data["ProdNo"],0,100);
	
	// for custom expression for display field
	if ($dispFieldAlias)
	{
		$showValues[] = $data[$dispFieldAlias];	
		$showFields[] = $dispFieldAlias;
		$showRawValues[] = substr($data[$dispFieldAlias],0,100);
	}
	
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_POPUP)
	{	
		if($IsSaved && count($showValues))
		{
			$returnJSON['success'] = true;
			if($HaveData){
				$returnJSON['noKeys'] = false;
			}else{
				$returnJSON['noKeys'] = true;
			}
			
			$returnJSON['keys'] = $jsKeys;
			$returnJSON['keyFields'] = $keyFields;
			$returnJSON['vals'] = $showValues;
			$returnJSON['fields'] = $showFields;
			$returnJSON['rawVals'] = $showRawValues;
			$returnJSON['detKeys'] = $showDetailKeys;
			$returnJSON['userMess'] = $usermessage;
			$returnJSON['hrefs'] = $pageObject->buildDetailGridLinks($showDetailKeys);
			// add link and display value if list page is lookup with search
			if(array_key_exists('linkField', $linkAndDispVals))
			{
				$returnJSON['linkValue'] = $linkAndDispVals['linkField'];
				$returnJSON['displayValue'] = $linkAndDispVals['displayField'];
			}
			if($globalEvents->exists("IsRecordEditable", $strTableName))
			{ 
				if(!$globalEvents->IsRecordEditable($showRawValues, true, $strTableName))
					$returnJSON['nonEditable'] = true;
			}
			
			if($inlineadd==ADD_POPUP && isset($_SESSION[$strTableName."_count_captcha"]) || $_SESSION[$strTableName."_count_captcha"]>0 || $_SESSION[$strTableName."_count_captcha"]<5)
				$returnJSON['hideCaptcha'] = true;
		}
		else
		{
			$returnJSON['success'] = false;
			$returnJSON['message'] = $message;
			if(!$pageObject->isCaptchaOk)
				$returnJSON['captcha'] = false;
		}
		echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
		exit();
	}
} 

/////////////////////////////////////////////////////////////
if($inlineadd==ADD_MASTER)
{
	$respJSON = array();
	if(($_POST["a"]=="added" && $IsSaved))
	{
		$respJSON['afterAddId'] = $afterAdd_id;
		$respJSON['success'] = true;
		$respJSON['fields'] = $showFields;
		$respJSON['vals'] = $showValues;
		if($onFly){
			if($HaveData)
				$respJSON['noKeys'] = false;
			else
				$respJSON['noKeys'] = true;
			$respJSON['keys'] = $jsKeys;
			$respJSON['keyFields'] = $keyFields;
			$respJSON['rawVals'] = $showRawValues;
			$respJSON['detKeys'] = $showDetailKeys;
			$respJSON['userMess'] = $usermessage;
			$respJSON['hrefs'] = $pageObject->buildDetailGridLinks($showDetailKeys);
			if($globalEvents->exists("IsRecordEditable", $strTableName))
			{
				if(!$globalEvents->IsRecordEditable($showRawValues, true, $strTableName))
					$respJSON['nonEditable'] = true;
			}
		}
		$respJSON['mKeys'] = array();
		for($i=0;$i<count($dpParams['ids']);$i++)
		{
			$data=0;
			if(count($keys))
			{
				$where=KeyWhere($keys);
							$strSQL = $gQuery->gSQLWhere($where);
				LogInfo($strSQL);
				$rs = db_query($strSQL,$conn);
				$data = $pageObject->cipherer->DecryptFetchedArray($rs);
			}
			if(!$data)
				$data=$avalues;
			
			$mKeyId = 1;
			foreach($mKeys[$dpParams['strTableNames'][$i]] as $mk)
			{
				if($data[$mk])
					$respJSON['mKeys'][$dpParams['strTableNames'][$i]]['masterkey'.$mKeyId++] = $data[$mk];
				else
					$respJSON['mKeys'][$dpParams['strTableNames'][$i]]['masterkey'.$mKeyId++] = '';
			}
		}
		if(isset($_SESSION[$strTableName."_count_captcha"]) || $_SESSION[$strTableName."_count_captcha"]>0 || $_SESSION[$strTableName."_count_captcha"]<5)
			$respJSON['hidecaptcha'] = true;
	}
	else{
			$respJSON['success'] = false;
			if(!$pageObject->isCaptchaOk)
				$respJSON['captcha'] = false;
			else
				$respJSON['error'] = $message;
			if($onFly)
				$respJSON['message'] = $message;
		}
	echo "<textarea>".htmlspecialchars(my_json_encode($respJSON))."</textarea>";
	exit();
}

/////////////////////////////////////////////////////////////
//	prepare Edit Controls
/////////////////////////////////////////////////////////////

//	validation stuff
$regex='';
$regexmessage='';
$regextype = '';
$control = array();

foreach($addFields as $fName)
{
	$gfName = GoodFieldName($fName);
	$controls = array('controls'=>array());
	if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))
	{
		$control[$gfName] = array();
		$control[$gfName]["func"] = "xt_buildeditcontrol";
		$control[$gfName]["params"] = array();
		$control[$gfName]["params"]["id"] = $id;
		$control[$gfName]["params"]["ptype"] = PAGE_ADD;
		$control[$gfName]["params"]["field"] = $fName;
		$control[$gfName]["params"]["value"] = @$defvalues[$fName];
		$control[$gfName]["params"]["pageObj"] = $pageObject;
		if($pageObject->pSet->isUseRTE($fName))
			$_SESSION[$strTableName."_".$fName."_rte"] = @$defvalues[$fName];
		
		//	Begin Add validation
		$arrValidate = $pageObject->pSet->getValidation($fName);
		$control[$gfName]["params"]["validate"] = $arrValidate;
		//	End Add validation
	}
	$controls["controls"]['ctrlInd'] = 0;
	$controls["controls"]['id'] = $id;
	$controls["controls"]['fieldName'] = $fName;
	//if richEditor for field
	if($pageObject->pSet->isUseRTE($fName))
	{
		if(!$detailKeys || !in_array($fName, $detailKeys))
			$control[$gfName]["params"]["mode"]="add";
		$controls["controls"]['mode'] = "add";
	}
	else
	{
		if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		{
			if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))	
				$control[$gfName]["params"]["mode"]="inline_add";
			$controls["controls"]['mode'] = "inline_add";
		}
		else
		{
			if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))	
				$control[$gfName]["params"]["mode"]="add";
			$controls["controls"]['mode'] = "add";
		}
	}
	
	if(!$detailKeys || !in_array($fName, $detailKeys))
		$xt->assignbyref($gfName."_editcontrol",$control[$gfName]);
	elseif($detailKeys && in_array($fName, $detailKeys))
		$controls["controls"]['value'] = @$defvalues[$fName];
	
	// category control field
	$strCategoryControl = $pageObject->isDependOnField($fName);
	
	if($strCategoryControl!==false && in_array($strCategoryControl, $addFields))
		$vals = array($fName => @$defvalues[$fName], $strCategoryControl => @$defvalues[$strCategoryControl]);
	else
		$vals = array($fName => @$defvalues[$fName]);
	
	$preload = $pageObject->fillPreload($fName, $vals);
	if($preload!==false)
	{
		$controls["controls"]['preloadData'] = $preload;
		if(!@$defvalues[$fName] && count($preload["vals"])>0)
			$defvalues[$fName] = $preload["vals"][0];
	}
	$pageObject->fillControlsMap($controls);
	
	//fill field tool tips
	$pageObject->fillFieldToolTips($fName);
	
	// fill special settings for timepicker
	if($pageObject->pSet->getEditFormat($fName) == 'Time')
		$pageObject->fillTimePickSettings($fName, @$defvalues[$fName]);
	
	if((($detailKeys && in_array($fName, $detailKeys)) || $fName == postvalue("category")) && array_key_exists($fName, $defvalues))
	{
		$value = $pageObject->showDBValue($fName, $defvalues);
		
		$xt->assign($gfName."_editcontrol", $value);
	}
}

//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && ($inlineadd==ADD_SIMPLE || $inlineadd==ADD_POPUP) && !isMobile())
{
	if(count($dpParams['ids']))
	{
		$xt->assign("detail_tables",true);
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
		include("classes/searchclause.php");
	}
	
	$dControlsMap = array();
	$dViewControlsMap = array();
		
	$flyId = $ids+1;
	for($d=0;$d<count($dpParams['ids']);$d++)
	{
		$options = array();
		//array of params for classes
		$options["mode"] = LIST_DETAILS;
		$options["pageType"] = PAGE_LIST;
		$options["masterPageType"] = PAGE_ADD;
		$options["mainMasterPageType"] = PAGE_ADD;
		$options['masterTable'] = "products";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		include_once("include/".GetTableURL($strTableName)."_settings.php");
		
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
		$options['flyId'] = $flyId++;
		$mkr = 1;
		
		foreach($mKeys[$strTableName] as $mk)
		{
			if($defvalues[$mk])
				$options['masterKeysReq'][$mkr++] = $defvalues[$mk];
			else
				$options['masterKeysReq'][$mkr++] = '';
		}
		$listPageObject = ListPage::createListPage($strTableName,$options);
		
		// prepare code
		$listPageObject->prepareForBuildPage();
		$flyId = $listPageObject->recId+1;
		
		//set page events
		foreach($listPageObject->eventsObject->events as $event => $name)
			$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
		
		//add detail settings to master settings
		$listPageObject->addControlsJSAndCSS();
		$listPageObject->fillSetCntrlMaps();
		$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];

		$dControlsMap[$strTableName] = $listPageObject->controlsMap;
		$dViewControlsMap[$strTableName] = $listPageObject->viewControlsMap;
		
		foreach($listPageObject->jsSettings["global"]["shortTNames"] as $tName => $shortTName){
			$pageObject->settingsMap["globalSettings"]["shortTNames"][$tName] = $shortTName;
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
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$pageObject->viewControlsMap['dViewControlsMap'] = $dViewControlsMap;
	$strTableName = "products";
}
/////////////////////////////////////////////////////////////
//fill jsSettings and ControlsHTMLMap
$pageObject->fillSetCntrlMaps();

$pageObject->addCommonJs();

//For mobile version in apple device

if($inlineadd == ADD_SIMPLE)
{
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";
	$pageObject->body['end']["object"] = &$pageObject;
	$xt->assign("body", $pageObject->body);
	$xt->assign("flybody",true);
}

if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
{ 
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("flybody", $pageObject->body);
	$xt->assign("body",true);
}	

$xt->assign("style_block",true);

if($eventObj->exists("BeforeShowAdd"))
	$eventObj->BeforeShowAdd($xt, $templatefile, $pageObject);
	
if($inlineadd != ADD_SIMPLE)
{
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['viewControlsMap'] = $pageObject->viewControlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;	
}

if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
{
	$xt->load_template($templatefile);
	$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
	if(count($pageObject->includes_css))
		$returnJSON['CSSFiles'] = array_unique($pageObject->includes_css);
	if(count($pageObject->includes_cssIE))
		$returnJSON['CSSFilesIE'] = array_unique($pageObject->includes_cssIE);
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON['idStartFrom'] = $id+1;	
	echo (my_json_encode($returnJSON)); 
}
elseif ($inlineadd == ADD_INLINE)
{
	$xt->load_template($templatefile);
	$returnJSON["html"] = array();
	foreach($addFields as $fName)
	{
		$returnJSON["html"][$fName] = $xt->fetchVar(GoodFieldName($fName)."_editcontrol");	
	}	
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON["additionalCSS"] = $pageObject->grabAllCSSFiles();
	echo (my_json_encode($returnJSON)); 
}
else
	$xt->display($templatefile);

function GetAddedDataLookupQuery($pageObject, $keys, $forLookup)
{
	global $conn, $strTableName, $strOriginalTableName;
	
	$LookupSQL = "";
	$linkfield = "";
	$dispfield = "";
	$noBlobReplace = false;
	$lookupFieldName = "";
	
	if($LookupSQL && $nLookupType != LT_QUERY)
		$LookupSQL.=" from ".AddTableWrappers($strOriginalTableName);
		
	$data = 0;
	$lookupIndexes = array("linkFieldIndex" => 0, "displayFieldIndex" => 0);
	if(count($keys))
	{
		$where = KeyWhere($keys);
		if($nLookupType == LT_QUERY){
			$LookupSQL = $lookupQueryObj->toSql(whereAdd($lookupQueryObj->m_where->toSql($lookupQueryObj), $where));
		}else 
			$LookupSQL.=" where ".$where;
		$lookupIndexes = GetLookupFieldsIndexes($lookupPSet, $lookupFieldName);
		LogInfo($LookupSQL);
		if($forLookup){
			$rs=db_query($LookupSQL,$conn);
			$data = $pageObject->cipherer->DecryptFetchedArray($rs);
		}else if($LookupSQL)
		{
			$rs = db_query($LookupSQL,$conn);
			$data = db_fetch_numarray($rs);
			$data[$lookupIndexes["linkFieldIndex"]] = $pageObject->cipherer->DecryptField($linkFieldName, $data[$lookupIndexes["linkFieldIndex"]]);
			if($nLookupType == LT_QUERY)
				$data[$lookupIndexes["displayFieldIndex"]] = $pageObject->cipherer->DecryptField($dispfield, $data[$lookupIndexes["displayFieldIndex"]]);		
		}
	}

	return array($data, array("linkField" => $linkFieldName, "displayField" => $dispfield
		, "linkFieldIndex" => $lookupIndexes["linkFieldIndex"], "displayFieldIndex" => $lookupIndexes["displayFieldIndex"]));
}	
	
?>

<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/products_variables.php");
include('include/xtempl.php');
include('classes/editpage.php');
include("classes/searchclause.php");

add_nocache_headers();

global $globalEvents;

CheckPermissionsEvent($strTableName, 'E');

$layout = new TLayout("edit2","FancyGreen1","MobileGreen1");
$layout->blocks["top"] = array();
$layout->containers["edit"] = array();

$layout->containers["edit"][] = array("name"=>"editheader","block"=>"","substyle"=>2);


$layout->containers["edit"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->containers["edit"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"fields");


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"editfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"legend","block"=>"legend","substyle"=>3);


$layout->containers["fields"][] = array("name"=>"editbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";

$layout->skins["edit"] = "1";
$layout->blocks["top"][] = "edit";
$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["products_edit"] = $layout;




if ((sizeof($_POST)==0) && (postvalue('ferror')) && (!postvalue("editid1"))){
	$returnJSON['success'] = false;
	$returnJSON['message'] = "Error occurred";
	$returnJSON['fatalError'] = true;
	echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
	exit();
}
else if ((sizeof($_POST)==0) && (postvalue('ferror')) && (postvalue("editid1"))){
	if (postvalue('fly')){
		echo -1;
		exit();
	}
	else {
		$_SESSION["message_edit"] = "<< "."Error occurred"." >>";
	}
}
/////////////////////////////////////////////////////////////
//init variables
/////////////////////////////////////////////////////////////
if(postvalue("editType")=="inline")
	$inlineedit = EDIT_INLINE;
elseif(postvalue("editType")==EDIT_POPUP)
	$inlineedit = EDIT_POPUP;
else
	$inlineedit = EDIT_SIMPLE;

$id = postvalue("id");
if(intval($id)==0)
	$id = 1;

$flyId = $id+1;
$xt = new Xtempl();

// assign an id
$xt->assign("id",$id);

$templatefile = ($inlineedit == EDIT_INLINE) ? "products_inline_edit.htm" : "products_edit.htm";

//array of params for classes
$params = array("pageType" => PAGE_EDIT,"id" => $id);


$params['tName'] = $strTableName;
$params['xt'] = &$xt;
$params['mode'] = $inlineedit;
$params['includes_js'] = $includes_js;
$params['includes_jsreq'] = $includes_jsreq;
$params['includes_css'] = $includes_css;
$params['locale_info'] = $locale_info;
$params['templatefile'] = $templatefile;
$params['pageEditLikeInline'] = ($inlineedit == EDIT_INLINE);
//Get array of tabs for edit page
$params['useTabsOnEdit'] = $gSettings->useTabsOnEdit();
if($params['useTabsOnEdit'])
	$params['arrEditTabs'] = $gSettings->getEditTabs();

$pageObject = new EditPage($params);

//	For ajax request 
if($_REQUEST["action"]!="")
{
	if($pageObject->lockingObj)
	{
		$arrkeys = explode("&",refine($_REQUEST["keys"]));
		foreach($arrkeys as $ind=>$val)
			$arrkeys[$ind]=urldecode($val);
		
		if($_REQUEST["action"]=="unlock")
		{
			$pageObject->lockingObj->UnlockRecord($strTableName,$arrkeys,$_REQUEST["sid"]);
			exit();	
		}
		else if($_REQUEST["action"]=="lockadmin" && (IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP))
		{
			$pageObject->lockingObj->UnlockAdmin($strTableName,$arrkeys,$_REQUEST["startEdit"]=="yes");
			if($_REQUEST["startEdit"]=="no")
				echo "unlock";
			else if($_REQUEST["startEdit"]=="yes")
				echo "lock";
			exit();	
		}
		else if($_REQUEST["action"]=="confirm")
		{
			if(!$pageObject->lockingObj->ConfirmLock($strTableName,$arrkeys,$message));
				echo $message;
			exit();	
		}
	}
	else
		exit();
}

$filename = $status = $message = $mesClass = $usermessage = $strWhereClause = $bodyonload = "";
$showValues = $showRawValues = $showFields = $showDetailKeys = $key = $next = $prev = array();
$HaveData = $enableCtrlsForEditing = true;
$error_happened = $readevalues = $IsSaved = false;

$auditObj = GetAuditObject($strTableName);

// SearchClause class stuff
$pageObject->searchClauseObj->parseRequest();
$_SESSION[$strTableName.'_advsearch'] = serialize($pageObject->searchClauseObj);

//Get detail table keys	
$detailKeys = $pageObject->detailKeysByM;


if($pageObject->lockingObj)
{
	$system_attrs = "style='display:none;'";
	$system_message = "";
}

if ($inlineedit!=EDIT_INLINE)
{
	// add button events if exist
	$pageObject->addButtonHandlers();
}

$url_page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1,12);

//	Before Process event
if($eventObj->exists("BeforeProcessEdit"))
	$eventObj->BeforeProcessEdit($conn, $pageObject);

$keys = array();
$skeys = "";
$savedKeys = array();
$keys["ProdNo"] = urldecode(postvalue("editid1"));
$savedKeys["ProdNo"] = urldecode(postvalue("editid1"));
$skeys.= rawurlencode(postvalue("editid1"))."&";

$pageObject->setKeys($keys);

if($skeys!="")
	$skeys = substr($skeys,0,-1);

//For show detail tables on master page edit
if($inlineedit!=EDIT_INLINE)
{
	$dpParams = array();
	if($pageObject->isShowDetailTables && !isMobile())
	{
		$ids = $id;
			$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array('tableNames'=>$dpParams['strTableNames'], 'ids'=>$dpParams['ids']);
	}
}
/////////////////////////////////////////////////////////////
//	process entered data, read and save
/////////////////////////////////////////////////////////////

// proccess captcha
if ($inlineedit!=EDIT_INLINE)
	if($pageObject->captchaExists())
		$pageObject->doCaptchaCode();

if(@$_POST["a"] == "edited")
{
	$strWhereClause = whereAdd($strWhereClause,KeyWhere($keys));
		$oldValuesRead = false;	
	if($eventObj->exists("AfterEdit") || $eventObj->exists("BeforeEdit") || $auditObj || isTableGeoUpdatable($pageObject->cipherer->pSet)
		|| $globalEvents->exists("IsRecordEditable", $strTableName))
	{
		//	read old values
		$rsold = db_query($gQuery->gSQLWhere($strWhereClause), $conn);
		$dataold = $pageObject->cipherer->DecryptFetchedArray($rsold);
		$oldValuesRead = true;
	}
	if($globalEvents->exists("IsRecordEditable", $strTableName))
	{
		if(!$globalEvents->IsRecordEditable($dataold, true, $strTableName))
			return SecurityRedirect($inlineedit);
	}
	$evalues = $efilename_values = $blobfields = array();
	

//	processing ProdGrpCode - begin
	$condition = 1;

	if($condition)
	{
		$control_ProdGrpCode = $pageObject->getControl("ProdGrpCode", $id);
		$control_ProdGrpCode->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing ProdGrpCode - end
//	processing ProdThaiName - begin
	$condition = 1;

	if($condition)
	{
		$control_ProdThaiName = $pageObject->getControl("ProdThaiName", $id);
		$control_ProdThaiName->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing ProdThaiName - end
//	processing ProdEngName - begin
	$condition = 1;

	if($condition)
	{
		$control_ProdEngName = $pageObject->getControl("ProdEngName", $id);
		$control_ProdEngName->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing ProdEngName - end
//	processing Picture - begin
	$condition = 1;

	if($condition)
	{
		$control_Picture = $pageObject->getControl("Picture", $id);
		$control_Picture->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Picture - end
//	processing ThaiModel - begin
	$condition = 1;

	if($condition)
	{
		$control_ThaiModel = $pageObject->getControl("ThaiModel", $id);
		$control_ThaiModel->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing ThaiModel - end
//	processing EngModel - begin
	$condition = 1;

	if($condition)
	{
		$control_EngModel = $pageObject->getControl("EngModel", $id);
		$control_EngModel->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing EngModel - end
//	processing MixNo - begin
	$condition = 1;

	if($condition)
	{
		$control_MixNo = $pageObject->getControl("MixNo", $id);
		$control_MixNo->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing MixNo - end
//	processing ProdWt - begin
	$condition = 1;

	if($condition)
	{
		$control_ProdWt = $pageObject->getControl("ProdWt", $id);
		$control_ProdWt->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing ProdWt - end
//	processing ColorMixNo - begin
	$condition = 1;

	if($condition)
	{
		$control_ColorMixNo = $pageObject->getControl("ColorMixNo", $id);
		$control_ColorMixNo->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing ColorMixNo - end
//	processing FaceWt - begin
	$condition = 1;

	if($condition)
	{
		$control_FaceWt = $pageObject->getControl("FaceWt", $id);
		$control_FaceWt->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing FaceWt - end
//	processing Mold - begin
	$condition = 1;

	if($condition)
	{
		$control_Mold = $pageObject->getControl("Mold", $id);
		$control_Mold->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Mold - end
//	processing PiecesPerMould - begin
	$condition = 1;

	if($condition)
	{
		$control_PiecesPerMould = $pageObject->getControl("PiecesPerMould", $id);
		$control_PiecesPerMould->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing PiecesPerMould - end
//	processing ProductCost - begin
	$condition = 1;

	if($condition)
	{
		$control_ProductCost = $pageObject->getControl("ProductCost", $id);
		$control_ProductCost->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing ProductCost - end
//	processing PriceRetail - begin
	$condition = 1;

	if($condition)
	{
		$control_PriceRetail = $pageObject->getControl("PriceRetail", $id);
		$control_PriceRetail->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing PriceRetail - end
//	processing PriceWholeSale - begin
	$condition = 1;

	if($condition)
	{
		$control_PriceWholeSale = $pageObject->getControl("PriceWholeSale", $id);
		$control_PriceWholeSale->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing PriceWholeSale - end
//	processing ProdStockGoal - begin
	$condition = 1;

	if($condition)
	{
		$control_ProdStockGoal = $pageObject->getControl("ProdStockGoal", $id);
		$control_ProdStockGoal->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing ProdStockGoal - end
//	processing ThaiCom - begin
	$condition = 1;

	if($condition)
	{
		$control_ThaiCom = $pageObject->getControl("ThaiCom", $id);
		$control_ThaiCom->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing ThaiCom - end
//	processing EngCom - begin
	$condition = 1;

	if($condition)
	{
		$control_EngCom = $pageObject->getControl("EngCom", $id);
		$control_EngCom->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing EngCom - end
//	processing Status - begin
	$condition = 1;

	if($condition)
	{
		$control_Status = $pageObject->getControl("Status", $id);
		$control_Status->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Status - end
//	processing MoldWt - begin
	$condition = 1;

	if($condition)
	{
		$control_MoldWt = $pageObject->getControl("MoldWt", $id);
		$control_MoldWt->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing MoldWt - end
//	processing GrayWtMold - begin
	$condition = 1;

	if($condition)
	{
		$control_GrayWtMold = $pageObject->getControl("GrayWtMold", $id);
		$control_GrayWtMold->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing GrayWtMold - end
//	processing ColorWtMold - begin
	$condition = 1;

	if($condition)
	{
		$control_ColorWtMold = $pageObject->getControl("ColorWtMold", $id);
		$control_ColorWtMold->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing ColorWtMold - end
//	processing Length - begin
	$condition = 1;

	if($condition)
	{
		$control_Length = $pageObject->getControl("Length", $id);
		$control_Length->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Length - end
//	processing Width1 - begin
	$condition = 1;

	if($condition)
	{
		$control_Width1 = $pageObject->getControl("Width1", $id);
		$control_Width1->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Width1 - end
//	processing Thickness - begin
	$condition = 1;

	if($condition)
	{
		$control_Thickness = $pageObject->getControl("Thickness", $id);
		$control_Thickness->readWebValue($evalues, $blobfields, $strWhereClause, $oldValuesRead, $efilename_values);

		}
//	processing Thickness - end

	foreach($efilename_values as $ekey=>$value)
		$evalues[$ekey] = $value;
		
	if($pageObject->lockingObj)
	{
		$lockmessage = "";
		if(!$pageObject->lockingObj->ConfirmLock($strTableName,$savedKeys,$lockmessage))
		{
			$enableCtrlsForEditing = false;
			$system_attrs = "style='display:block;'";
			if($inlineedit == EDIT_INLINE)
			{
				if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
					$lockmessage = $pageObject->lockingObj->GetLockInfo($strTableName,$savedKeys,false,$id);
				
				$returnJSON['success'] = false;
				$returnJSON['message'] = $lockmessage;
				$returnJSON['enableCtrls'] = $enableCtrlsForEditing;
				$returnJSON['confirmTime'] = $pageObject->lockingObj->ConfirmTime;
				echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
				exit();
			}
			else
			{
				if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
					$system_message = $pageObject->lockingObj->GetLockInfo($strTableName,$savedKeys,true,$id);
				else
					$system_message = $lockmessage;
			}
			$status = "DECLINED";
			$readevalues = true;
		}
	}
	
	if($readevalues==false)
	{
	//	do event
		$retval = true;
		if($eventObj->exists("BeforeEdit"))
			$retval=$eventObj->BeforeEdit($evalues,$strWhereClause,$dataold,$keys,$usermessage,(bool)$inlineedit, $pageObject);
	
		if($retval && $pageObject->isCaptchaOk)
		{		
			if($inlineedit!=EDIT_INLINE)
				$_SESSION[$strTableName."_count_captcha"] = $_SESSION[$strTableName."_count_captcha"]+1;
		
			//set updated lat-lng values for all map fileds with 'UpdateLatLng' ticked	
            if(isTableGeoUpdatable($pageObject->cipherer->pSet)) {			
				setUpdatedLatLng($evalues, $pageObject->cipherer->pSet, $dataold);
			}	
			
			if(DoUpdateRecord($strOriginalTableName,$evalues,$blobfields,$strWhereClause,$id,$pageObject, $pageObject->cipherer))
			{
				$IsSaved = true;

			// Give possibility to all edit controls to clean their data				
			//	processing ProdGrpCode - begin
							$condition = 1;
			
				if($condition)
				{
					$control_ProdGrpCode->afterSuccessfulSave();
				}
	//	processing ProdGrpCode - end
			//	processing ProdThaiName - begin
							$condition = 1;
			
				if($condition)
				{
					$control_ProdThaiName->afterSuccessfulSave();
				}
	//	processing ProdThaiName - end
			//	processing ProdEngName - begin
							$condition = 1;
			
				if($condition)
				{
					$control_ProdEngName->afterSuccessfulSave();
				}
	//	processing ProdEngName - end
			//	processing Picture - begin
							$condition = 1;
			
				if($condition)
				{
					$control_Picture->afterSuccessfulSave();
				}
	//	processing Picture - end
			//	processing ThaiModel - begin
							$condition = 1;
			
				if($condition)
				{
					$control_ThaiModel->afterSuccessfulSave();
				}
	//	processing ThaiModel - end
			//	processing EngModel - begin
							$condition = 1;
			
				if($condition)
				{
					$control_EngModel->afterSuccessfulSave();
				}
	//	processing EngModel - end
			//	processing MixNo - begin
							$condition = 1;
			
				if($condition)
				{
					$control_MixNo->afterSuccessfulSave();
				}
	//	processing MixNo - end
			//	processing ProdWt - begin
							$condition = 1;
			
				if($condition)
				{
					$control_ProdWt->afterSuccessfulSave();
				}
	//	processing ProdWt - end
			//	processing ColorMixNo - begin
							$condition = 1;
			
				if($condition)
				{
					$control_ColorMixNo->afterSuccessfulSave();
				}
	//	processing ColorMixNo - end
			//	processing FaceWt - begin
							$condition = 1;
			
				if($condition)
				{
					$control_FaceWt->afterSuccessfulSave();
				}
	//	processing FaceWt - end
			//	processing Mold - begin
							$condition = 1;
			
				if($condition)
				{
					$control_Mold->afterSuccessfulSave();
				}
	//	processing Mold - end
			//	processing PiecesPerMould - begin
							$condition = 1;
			
				if($condition)
				{
					$control_PiecesPerMould->afterSuccessfulSave();
				}
	//	processing PiecesPerMould - end
			//	processing ProductCost - begin
							$condition = 1;
			
				if($condition)
				{
					$control_ProductCost->afterSuccessfulSave();
				}
	//	processing ProductCost - end
			//	processing PriceRetail - begin
							$condition = 1;
			
				if($condition)
				{
					$control_PriceRetail->afterSuccessfulSave();
				}
	//	processing PriceRetail - end
			//	processing PriceWholeSale - begin
							$condition = 1;
			
				if($condition)
				{
					$control_PriceWholeSale->afterSuccessfulSave();
				}
	//	processing PriceWholeSale - end
			//	processing ProdStockGoal - begin
							$condition = 1;
			
				if($condition)
				{
					$control_ProdStockGoal->afterSuccessfulSave();
				}
	//	processing ProdStockGoal - end
			//	processing ThaiCom - begin
							$condition = 1;
			
				if($condition)
				{
					$control_ThaiCom->afterSuccessfulSave();
				}
	//	processing ThaiCom - end
			//	processing EngCom - begin
							$condition = 1;
			
				if($condition)
				{
					$control_EngCom->afterSuccessfulSave();
				}
	//	processing EngCom - end
			//	processing Status - begin
							$condition = 1;
			
				if($condition)
				{
					$control_Status->afterSuccessfulSave();
				}
	//	processing Status - end
			//	processing MoldWt - begin
							$condition = 1;
			
				if($condition)
				{
					$control_MoldWt->afterSuccessfulSave();
				}
	//	processing MoldWt - end
			//	processing GrayWtMold - begin
							$condition = 1;
			
				if($condition)
				{
					$control_GrayWtMold->afterSuccessfulSave();
				}
	//	processing GrayWtMold - end
			//	processing ColorWtMold - begin
							$condition = 1;
			
				if($condition)
				{
					$control_ColorWtMold->afterSuccessfulSave();
				}
	//	processing ColorWtMold - end
			//	processing Length - begin
							$condition = 1;
			
				if($condition)
				{
					$control_Length->afterSuccessfulSave();
				}
	//	processing Length - end
			//	processing Width1 - begin
							$condition = 1;
			
				if($condition)
				{
					$control_Width1->afterSuccessfulSave();
				}
	//	processing Width1 - end
			//	processing Thickness - begin
							$condition = 1;
			
				if($condition)
				{
					$control_Thickness->afterSuccessfulSave();
				}
	//	processing Thickness - end
				
				//	after edit event
				if($pageObject->lockingObj && $inlineedit == EDIT_INLINE)
					$pageObject->lockingObj->UnlockRecord($strTableName,$savedKeys,"");
				if($auditObj || $eventObj->exists("AfterEdit"))
				{
					foreach($dataold as $idx=>$val)
					{
						if(!array_key_exists($idx,$evalues))
							$evalues[$idx] = $val;
					}
				}

				if($auditObj)
					$auditObj->LogEdit($strTableName,$evalues,$dataold,$keys);
				if($eventObj->exists("AfterEdit"))
					$eventObj->AfterEdit($evalues,KeyWhere($keys),$dataold,$keys,(bool)$inlineedit, $pageObject);
							
				$mesClass = "mes_ok";
			}
			elseif($inlineedit!=EDIT_INLINE)
				$mesClass = "mes_not";	
		}
		else
		{
			$message = $usermessage;
			$readevalues = true;
			$status = "DECLINED";
		}
	}
	if($readevalues)
		$keys = $savedKeys;
}
//else
{
	/////////////////////////
	//Locking recors
	/////////////////////////

	if($pageObject->lockingObj)
	{
		$enableCtrlsForEditing = $pageObject->lockingObj->LockRecord($strTableName,$keys);
		if(!$enableCtrlsForEditing)
		{
			if($inlineedit == EDIT_INLINE)
			{
				if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
					$lockmessage = $pageObject->lockingObj->GetLockInfo($strTableName,$keys,false,$id);
				else
					$lockmessage = $pageObject->lockingObj->LockUser;
				$returnJSON['success'] = false;
				$returnJSON['message'] = $lockmessage;
				$returnJSON['enableCtrls'] = $enableCtrlsForEditing;
				$returnJSON['confirmTime'] = $pageObject->lockingObj->ConfirmTime;
				echo my_json_encode($returnJSON);
				exit();
			}
			
			$system_attrs = "style='display:block;'";
			$system_message = $pageObject->lockingObj->LockUser;
			
			if(IsAdmin() || $_SESSION["AccessLevel"] == ACCESS_LEVEL_ADMINGROUP)
			{
				$rb = $pageObject->lockingObj->GetLockInfo($strTableName,$keys,true,$id);
				if($rb!="")
					$system_message = $rb;
			}
		}
	}
}

if($pageObject->lockingObj && $inlineedit!=EDIT_INLINE)
	$pageObject->body["begin"] .='<div class="runner-locking" '.$system_attrs.'>'.$system_message.'</div>';

if($message)
	$message = "<div class='message ".$mesClass."'>".$message."</div>";

// PRG rule, to avoid POSTDATA resend
if ($IsSaved && no_output_done() && $inlineedit == EDIT_SIMPLE)
{
	// saving message
	$_SESSION["message_edit"] = ($message ? $message : "");
	// key get query
	$keyGetQ = "";
		$keyGetQ.="editid1=".rawurldecode($keys["ProdNo"])."&";
	// cut last &
	$keyGetQ = substr($keyGetQ, 0, strlen($keyGetQ)-1);	
	// redirect
	header("Location: products_".$pageObject->getPageType().".php?".$keyGetQ);
	// turned on output buffering, so we need to stop script
	exit();
}
// for PRG rule, to avoid POSTDATA resend. Saving mess in session
if ($inlineedit == EDIT_SIMPLE && isset($_SESSION["message_edit"]))
{
	$message = $_SESSION["message_edit"];
	unset($_SESSION["message_edit"]);
}


$pageObject->setKeys($keys);
$pageObject->readEditValues = $readevalues;
if($readevalues)
	$pageObject->editValues = $evalues;

//	read current values from the database
$data = $pageObject->getCurrentRecordInternal();
if(!$data)
{
	if($inlineedit == EDIT_SIMPLE)
	{
		header("Location: products_list.php?a=return");
		exit();
	}
	else
		$data = array();
}

if($globalEvents->exists("IsRecordEditable", $strTableName))
{
	if(!$globalEvents->IsRecordEditable($data, true, $strTableName) && $inlineedit != EDIT_INLINE)
	{
		return SecurityRedirect($inlineedit);
	}
}


//global variable use in BuildEditControl function
//	show readonly fields

if($readevalues)
{
	$data["ProdGrpCode"] = $evalues["ProdGrpCode"];
	$data["ProdThaiName"] = $evalues["ProdThaiName"];
	$data["ProdEngName"] = $evalues["ProdEngName"];
	$data["Picture"] = $evalues["Picture"];
	$data["ThaiModel"] = $evalues["ThaiModel"];
	$data["EngModel"] = $evalues["EngModel"];
	$data["MixNo"] = $evalues["MixNo"];
	$data["ProdWt"] = $evalues["ProdWt"];
	$data["ColorMixNo"] = $evalues["ColorMixNo"];
	$data["FaceWt"] = $evalues["FaceWt"];
	$data["Mold"] = $evalues["Mold"];
	$data["PiecesPerMould"] = $evalues["PiecesPerMould"];
	$data["ProductCost"] = $evalues["ProductCost"];
	$data["PriceRetail"] = $evalues["PriceRetail"];
	$data["PriceWholeSale"] = $evalues["PriceWholeSale"];
	$data["ProdStockGoal"] = $evalues["ProdStockGoal"];
	$data["ThaiCom"] = $evalues["ThaiCom"];
	$data["EngCom"] = $evalues["EngCom"];
	$data["Status"] = $evalues["Status"];
	$data["MoldWt"] = $evalues["MoldWt"];
	$data["GrayWtMold"] = $evalues["GrayWtMold"];
	$data["ColorWtMold"] = $evalues["ColorWtMold"];
	$data["Length"] = $evalues["Length"];
	$data["Width1"] = $evalues["Width1"];
	$data["Thickness"] = $evalues["Thickness"];
}

/////////////////////////////////////////////////////////////
//	assign values to $xt class, prepare page for displaying
/////////////////////////////////////////////////////////////
//Basic includes js files
$includes = "";
//javascript code
	
if($inlineedit != EDIT_INLINE)
{
	if($inlineedit == EDIT_SIMPLE)
	{
		$includes.= "<script language=\"JavaScript\" src=\"include/loadfirst.js\"></script>\r\n";
				$includes.="<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";
		
		if (!isMobile())
			$includes.= "<div id=\"search_suggest".$id."\"></div>\r\n";
			
		$pageObject->body["begin"].= $includes;
	}	

	if(!$pageObject->isAppearOnTabs("ProdGrpCode"))
		$xt->assign("ProdGrpCode_fieldblock",true);
	else
		$xt->assign("ProdGrpCode_tabfieldblock",true);
	$xt->assign("ProdGrpCode_label",true);
	if(isEnableSection508())
		$xt->assign_section("ProdGrpCode_label","<label for=\"".GetInputElementId("ProdGrpCode", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("ProdThaiName"))
		$xt->assign("ProdThaiName_fieldblock",true);
	else
		$xt->assign("ProdThaiName_tabfieldblock",true);
	$xt->assign("ProdThaiName_label",true);
	if(isEnableSection508())
		$xt->assign_section("ProdThaiName_label","<label for=\"".GetInputElementId("ProdThaiName", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("ProdEngName"))
		$xt->assign("ProdEngName_fieldblock",true);
	else
		$xt->assign("ProdEngName_tabfieldblock",true);
	$xt->assign("ProdEngName_label",true);
	if(isEnableSection508())
		$xt->assign_section("ProdEngName_label","<label for=\"".GetInputElementId("ProdEngName", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Picture"))
		$xt->assign("Picture_fieldblock",true);
	else
		$xt->assign("Picture_tabfieldblock",true);
	$xt->assign("Picture_label",true);
	if(isEnableSection508())
		$xt->assign_section("Picture_label","<label for=\"".GetInputElementId("Picture", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("ThaiModel"))
		$xt->assign("ThaiModel_fieldblock",true);
	else
		$xt->assign("ThaiModel_tabfieldblock",true);
	$xt->assign("ThaiModel_label",true);
	if(isEnableSection508())
		$xt->assign_section("ThaiModel_label","<label for=\"".GetInputElementId("ThaiModel", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("EngModel"))
		$xt->assign("EngModel_fieldblock",true);
	else
		$xt->assign("EngModel_tabfieldblock",true);
	$xt->assign("EngModel_label",true);
	if(isEnableSection508())
		$xt->assign_section("EngModel_label","<label for=\"".GetInputElementId("EngModel", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("MixNo"))
		$xt->assign("MixNo_fieldblock",true);
	else
		$xt->assign("MixNo_tabfieldblock",true);
	$xt->assign("MixNo_label",true);
	if(isEnableSection508())
		$xt->assign_section("MixNo_label","<label for=\"".GetInputElementId("MixNo", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("ProdWt"))
		$xt->assign("ProdWt_fieldblock",true);
	else
		$xt->assign("ProdWt_tabfieldblock",true);
	$xt->assign("ProdWt_label",true);
	if(isEnableSection508())
		$xt->assign_section("ProdWt_label","<label for=\"".GetInputElementId("ProdWt", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("ColorMixNo"))
		$xt->assign("ColorMixNo_fieldblock",true);
	else
		$xt->assign("ColorMixNo_tabfieldblock",true);
	$xt->assign("ColorMixNo_label",true);
	if(isEnableSection508())
		$xt->assign_section("ColorMixNo_label","<label for=\"".GetInputElementId("ColorMixNo", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("FaceWt"))
		$xt->assign("FaceWt_fieldblock",true);
	else
		$xt->assign("FaceWt_tabfieldblock",true);
	$xt->assign("FaceWt_label",true);
	if(isEnableSection508())
		$xt->assign_section("FaceWt_label","<label for=\"".GetInputElementId("FaceWt", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Mold"))
		$xt->assign("Mold_fieldblock",true);
	else
		$xt->assign("Mold_tabfieldblock",true);
	$xt->assign("Mold_label",true);
	if(isEnableSection508())
		$xt->assign_section("Mold_label","<label for=\"".GetInputElementId("Mold", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("PiecesPerMould"))
		$xt->assign("PiecesPerMould_fieldblock",true);
	else
		$xt->assign("PiecesPerMould_tabfieldblock",true);
	$xt->assign("PiecesPerMould_label",true);
	if(isEnableSection508())
		$xt->assign_section("PiecesPerMould_label","<label for=\"".GetInputElementId("PiecesPerMould", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("ProductCost"))
		$xt->assign("ProductCost_fieldblock",true);
	else
		$xt->assign("ProductCost_tabfieldblock",true);
	$xt->assign("ProductCost_label",true);
	if(isEnableSection508())
		$xt->assign_section("ProductCost_label","<label for=\"".GetInputElementId("ProductCost", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("PriceRetail"))
		$xt->assign("PriceRetail_fieldblock",true);
	else
		$xt->assign("PriceRetail_tabfieldblock",true);
	$xt->assign("PriceRetail_label",true);
	if(isEnableSection508())
		$xt->assign_section("PriceRetail_label","<label for=\"".GetInputElementId("PriceRetail", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("PriceWholeSale"))
		$xt->assign("PriceWholeSale_fieldblock",true);
	else
		$xt->assign("PriceWholeSale_tabfieldblock",true);
	$xt->assign("PriceWholeSale_label",true);
	if(isEnableSection508())
		$xt->assign_section("PriceWholeSale_label","<label for=\"".GetInputElementId("PriceWholeSale", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("ProdStockGoal"))
		$xt->assign("ProdStockGoal_fieldblock",true);
	else
		$xt->assign("ProdStockGoal_tabfieldblock",true);
	$xt->assign("ProdStockGoal_label",true);
	if(isEnableSection508())
		$xt->assign_section("ProdStockGoal_label","<label for=\"".GetInputElementId("ProdStockGoal", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("ThaiCom"))
		$xt->assign("ThaiCom_fieldblock",true);
	else
		$xt->assign("ThaiCom_tabfieldblock",true);
	$xt->assign("ThaiCom_label",true);
	if(isEnableSection508())
		$xt->assign_section("ThaiCom_label","<label for=\"".GetInputElementId("ThaiCom", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("EngCom"))
		$xt->assign("EngCom_fieldblock",true);
	else
		$xt->assign("EngCom_tabfieldblock",true);
	$xt->assign("EngCom_label",true);
	if(isEnableSection508())
		$xt->assign_section("EngCom_label","<label for=\"".GetInputElementId("EngCom", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Status"))
		$xt->assign("Status_fieldblock",true);
	else
		$xt->assign("Status_tabfieldblock",true);
	$xt->assign("Status_label",true);
	if(isEnableSection508())
		$xt->assign_section("Status_label","<label for=\"".GetInputElementId("Status", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("MoldWt"))
		$xt->assign("MoldWt_fieldblock",true);
	else
		$xt->assign("MoldWt_tabfieldblock",true);
	$xt->assign("MoldWt_label",true);
	if(isEnableSection508())
		$xt->assign_section("MoldWt_label","<label for=\"".GetInputElementId("MoldWt", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("GrayWtMold"))
		$xt->assign("GrayWtMold_fieldblock",true);
	else
		$xt->assign("GrayWtMold_tabfieldblock",true);
	$xt->assign("GrayWtMold_label",true);
	if(isEnableSection508())
		$xt->assign_section("GrayWtMold_label","<label for=\"".GetInputElementId("GrayWtMold", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("ColorWtMold"))
		$xt->assign("ColorWtMold_fieldblock",true);
	else
		$xt->assign("ColorWtMold_tabfieldblock",true);
	$xt->assign("ColorWtMold_label",true);
	if(isEnableSection508())
		$xt->assign_section("ColorWtMold_label","<label for=\"".GetInputElementId("ColorWtMold", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Length"))
		$xt->assign("Length_fieldblock",true);
	else
		$xt->assign("Length_tabfieldblock",true);
	$xt->assign("Length_label",true);
	if(isEnableSection508())
		$xt->assign_section("Length_label","<label for=\"".GetInputElementId("Length", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Width1"))
		$xt->assign("Width1_fieldblock",true);
	else
		$xt->assign("Width1_tabfieldblock",true);
	$xt->assign("Width1_label",true);
	if(isEnableSection508())
		$xt->assign_section("Width1_label","<label for=\"".GetInputElementId("Width1", $id, PAGE_EDIT)."\">","</label>");
		
	if(!$pageObject->isAppearOnTabs("Thickness"))
		$xt->assign("Thickness_fieldblock",true);
	else
		$xt->assign("Thickness_tabfieldblock",true);
	$xt->assign("Thickness_label",true);
	if(isEnableSection508())
		$xt->assign_section("Thickness_label","<label for=\"".GetInputElementId("Thickness", $id, PAGE_EDIT)."\">","</label>");
		

	$xt->assign("show_key1", htmlspecialchars($pageObject->showDBValue("ProdNo", $data)));
	//$xt->assign('editForm',true);
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
	if(!@$_SESSION[$strTableName."_noNextPrev"] && $inlineedit == EDIT_SIMPLE)
	{
		$next = array();
		$prev = array();
		$pageObject->getNextPrevRecordKeys($data,"Edit",$next,$prev);
	}
	$nextlink = $prevlink = "";
	if(count($next))
	{
		$xt->assign("next_button",true);
				$nextlink.= "editid1=".htmlspecialchars(rawurlencode($next[1-1]));
		$xt->assign("nextbutton_attrs","id=\"nextButton".$id."\" align=\"absmiddle\"");
	}
	else 
		$xt->assign("next_button",false);
	if(count($prev))
	{
		$xt->assign("prev_button",true);
				$prevlink.= "editid1=".htmlspecialchars(rawurlencode($prev[1-1]));
		$xt->assign("prevbutton_attrs","id=\"prevButton".$id."\" align=\"absmiddle\"");
	}
	else 
		$xt->assign("prev_button",false);
	$xt->assign("resetbutton_attrs",'id="resetButton'.$id.'"');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//End Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
	if($inlineedit == EDIT_SIMPLE)
	{
		$xt->assign("back_button",true);
		$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
	}
	// onmouseover event, for changing focus. Needed to proper submit form
	//$onmouseover = "this.focus();";
	//$onmouseover = 'onmouseover="'.$onmouseover.'"';
	
	$xt->assign("save_button",true);
	if(!$enableCtrlsForEditing)
		$xt->assign("savebutton_attrs", "id=\"saveButton".$id."\" type=\"disabled\" ");
	else
		$xt->assign("savebutton_attrs", "id=\"saveButton".$id."\"");
		
	$xt->assign("reset_button",true);

}

$xt->assign("message_block",true);
$xt->assign("message",$message);
if(!strlen($message))
{
	$xt->displayBrickHidden("message");
}
/////////////////////////////////////////////////////////////
//process readonly and auto-update fields
/////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////
//	return new data to the List page or report an error
/////////////////////////////////////////////////////////////
if (postvalue("a")=="edited" && ($inlineedit == EDIT_INLINE || $inlineedit == EDIT_POPUP))
{
	if(!$data)
	{
		$data = $evalues;
		$HaveData = false;
	}
	//Preparation   view values

//	detail tables
	$showDetailKeys["prodcosts"]["masterkey1"] = $data["ProdNo"];		

	$keylink = "";
	$keylink.= "&key1=".htmlspecialchars(rawurlencode(@$data["ProdNo"]));


//	ProdGrpCode - 
	$value = $pageObject->showDBValue("ProdGrpCode", $data, $keylink);
	$showValues["ProdGrpCode"] = $value;
	$showFields[] = "ProdGrpCode";
		$showRawValues["ProdGrpCode"] = substr($data["ProdGrpCode"],0,100);

//	ProdThaiName - 
	$value = $pageObject->showDBValue("ProdThaiName", $data, $keylink);
	$showValues["ProdThaiName"] = $value;
	$showFields[] = "ProdThaiName";
		$showRawValues["ProdThaiName"] = substr($data["ProdThaiName"],0,100);

//	ProdEngName - 
	$value = $pageObject->showDBValue("ProdEngName", $data, $keylink);
	$showValues["ProdEngName"] = $value;
	$showFields[] = "ProdEngName";
		$showRawValues["ProdEngName"] = substr($data["ProdEngName"],0,100);

//	Picture - 
	$value = $pageObject->showDBValue("Picture", $data, $keylink);
	$showValues["Picture"] = $value;
	$showFields[] = "Picture";
		$showRawValues["Picture"] = substr($data["Picture"],0,100);

//	ThaiModel - 
	$value = $pageObject->showDBValue("ThaiModel", $data, $keylink);
	$showValues["ThaiModel"] = $value;
	$showFields[] = "ThaiModel";
		$showRawValues["ThaiModel"] = substr($data["ThaiModel"],0,100);

//	EngModel - 
	$value = $pageObject->showDBValue("EngModel", $data, $keylink);
	$showValues["EngModel"] = $value;
	$showFields[] = "EngModel";
		$showRawValues["EngModel"] = substr($data["EngModel"],0,100);

//	MixNo - 
	$value = $pageObject->showDBValue("MixNo", $data, $keylink);
	$showValues["MixNo"] = $value;
	$showFields[] = "MixNo";
		$showRawValues["MixNo"] = substr($data["MixNo"],0,100);

//	ProdWt - Number
	$value = $pageObject->showDBValue("ProdWt", $data, $keylink);
	$showValues["ProdWt"] = $value;
	$showFields[] = "ProdWt";
		$showRawValues["ProdWt"] = substr($data["ProdWt"],0,100);

//	ColorMixNo - 
	$value = $pageObject->showDBValue("ColorMixNo", $data, $keylink);
	$showValues["ColorMixNo"] = $value;
	$showFields[] = "ColorMixNo";
		$showRawValues["ColorMixNo"] = substr($data["ColorMixNo"],0,100);

//	FaceWt - Number
	$value = $pageObject->showDBValue("FaceWt", $data, $keylink);
	$showValues["FaceWt"] = $value;
	$showFields[] = "FaceWt";
		$showRawValues["FaceWt"] = substr($data["FaceWt"],0,100);

//	Mold - Number
	$value = $pageObject->showDBValue("Mold", $data, $keylink);
	$showValues["Mold"] = $value;
	$showFields[] = "Mold";
		$showRawValues["Mold"] = substr($data["Mold"],0,100);

//	PiecesPerMould - 
	$value = $pageObject->showDBValue("PiecesPerMould", $data, $keylink);
	$showValues["PiecesPerMould"] = $value;
	$showFields[] = "PiecesPerMould";
		$showRawValues["PiecesPerMould"] = substr($data["PiecesPerMould"],0,100);

//	ProductCost - Number
	$value = $pageObject->showDBValue("ProductCost", $data, $keylink);
	$showValues["ProductCost"] = $value;
	$showFields[] = "ProductCost";
		$showRawValues["ProductCost"] = substr($data["ProductCost"],0,100);

//	PriceRetail - Number
	$value = $pageObject->showDBValue("PriceRetail", $data, $keylink);
	$showValues["PriceRetail"] = $value;
	$showFields[] = "PriceRetail";
		$showRawValues["PriceRetail"] = substr($data["PriceRetail"],0,100);

//	PriceWholeSale - Number
	$value = $pageObject->showDBValue("PriceWholeSale", $data, $keylink);
	$showValues["PriceWholeSale"] = $value;
	$showFields[] = "PriceWholeSale";
		$showRawValues["PriceWholeSale"] = substr($data["PriceWholeSale"],0,100);

//	ProdStockGoal - 
	$value = $pageObject->showDBValue("ProdStockGoal", $data, $keylink);
	$showValues["ProdStockGoal"] = $value;
	$showFields[] = "ProdStockGoal";
		$showRawValues["ProdStockGoal"] = substr($data["ProdStockGoal"],0,100);

//	ThaiCom - 
	$value = $pageObject->showDBValue("ThaiCom", $data, $keylink);
	$showValues["ThaiCom"] = $value;
	$showFields[] = "ThaiCom";
		$showRawValues["ThaiCom"] = substr($data["ThaiCom"],0,100);

//	EngCom - 
	$value = $pageObject->showDBValue("EngCom", $data, $keylink);
	$showValues["EngCom"] = $value;
	$showFields[] = "EngCom";
		$showRawValues["EngCom"] = substr($data["EngCom"],0,100);

//	Status - 
	$value = $pageObject->showDBValue("Status", $data, $keylink);
	$showValues["Status"] = $value;
	$showFields[] = "Status";
		$showRawValues["Status"] = substr($data["Status"],0,100);

//	MoldWt - Number
	$value = $pageObject->showDBValue("MoldWt", $data, $keylink);
	$showValues["MoldWt"] = $value;
	$showFields[] = "MoldWt";
		$showRawValues["MoldWt"] = substr($data["MoldWt"],0,100);

//	GrayWtMold - Number
	$value = $pageObject->showDBValue("GrayWtMold", $data, $keylink);
	$showValues["GrayWtMold"] = $value;
	$showFields[] = "GrayWtMold";
		$showRawValues["GrayWtMold"] = substr($data["GrayWtMold"],0,100);

//	ColorWtMold - Number
	$value = $pageObject->showDBValue("ColorWtMold", $data, $keylink);
	$showValues["ColorWtMold"] = $value;
	$showFields[] = "ColorWtMold";
		$showRawValues["ColorWtMold"] = substr($data["ColorWtMold"],0,100);

//	Length - Number
	$value = $pageObject->showDBValue("Length", $data, $keylink);
	$showValues["Length"] = $value;
	$showFields[] = "Length";
		$showRawValues["Length"] = substr($data["Length"],0,100);

//	Width1 - Number
	$value = $pageObject->showDBValue("Width1", $data, $keylink);
	$showValues["Width1"] = $value;
	$showFields[] = "Width1";
		$showRawValues["Width1"] = substr($data["Width1"],0,100);

//	Thickness - Number
	$value = $pageObject->showDBValue("Thickness", $data, $keylink);
	$showValues["Thickness"] = $value;
	$showFields[] = "Thickness";
		$showRawValues["Thickness"] = substr($data["Thickness"],0,100);

//	ProdNo - 
	$value = $pageObject->showDBValue("ProdNo", $data, $keylink);
	$showValues["ProdNo"] = $value;
	$showFields[] = "ProdNo";
		$showRawValues["ProdNo"] = substr($data["ProdNo"],0,100);
/////////////////////////////////////////////////////////////
//	start inline output
/////////////////////////////////////////////////////////////
	
	if($IsSaved)
	{
		if($pageObject->lockingObj)
			$pageObject->lockingObj->UnlockRecord($strTableName,$keys,"");
		
		$returnJSON['success'] = true;
		$returnJSON['keys'] = $pageObject->jsKeys;
		$returnJSON['keyFields'] = $pageObject->keyFields;
		$returnJSON['vals'] = $showValues;
		$returnJSON['fields'] = $showFields;
		$returnJSON['rawVals'] = $showRawValues;
		$returnJSON['detKeys'] = $showDetailKeys;
		$returnJSON['userMess'] = $usermessage;
		$returnJSON['hrefs'] = $pageObject->buildDetailGridLinks($showDetailKeys);
		
		if($inlineedit==EDIT_POPUP && isset($_SESSION[$strTableName."_count_captcha"]) || $_SESSION[$strTableName."_count_captcha"]>0 || $_SESSION[$strTableName."_count_captcha"]<5)
			$returnJSON['hideCaptcha'] = true;
			
		if($globalEvents->exists("IsRecordEditable", $strTableName))
		{
			if(!$globalEvents->IsRecordEditable($showRawValues, true, $strTableName))
				$returnJSON['nonEditable'] = true;
		}
	}
	else
	{
		$returnJSON['success'] = false;
		$returnJSON['message'] = $message;
		
		if($pageObject->lockingObj)
			$returnJSON['lockMessage'] = $system_message;
		
		if($inlineedit == EDIT_POPUP && !$pageObject->isCaptchaOk)
			$returnJSON['captcha'] = false;
	}
	echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
	exit();
} 
/////////////////////////////////////////////////////////////
//	prepare Edit Controls
/////////////////////////////////////////////////////////////
//	validation stuff
$regex = '';
$regexmessage = '';
$regextype = '';
$control = array();

foreach($pageObject->editFields as $fName)
{
	$gfName = GoodFieldName($fName);
	$controls = array('controls'=>array());
	if (!$detailKeys || !in_array($fName, $detailKeys))
	{
		$control[$gfName] = array();
		$control[$gfName]["func"]="xt_buildeditcontrol";
		$control[$gfName]["params"] = array();
		$control[$gfName]["params"]["id"] = $id;
		$control[$gfName]["params"]["ptype"] = PAGE_EDIT;
		$control[$gfName]["params"]["field"] = $fName;
		if(!IsNumberType($pageObject->pSet->getFieldType($fName)) || is_null(@$data[$fName]))
			$control[$gfName]["params"]["value"] = @$data[$fName];
		else
		{
			$control[$gfName]["params"]["value"] = str_replace(".",$locale_info["LOCALE_SDECIMAL"],@$data[$fName]);
		}
		$control[$gfName]["params"]["pageObj"] = $pageObject;
		
		//	Begin Add validation
		$arrValidate = $pageObject->pSet->getValidation($fName);
		$control[$gfName]["params"]["validate"] = $arrValidate;
		//	End Add validation	
		$additionalCtrlParams = array();
		$additionalCtrlParams["disabled"] = !$enableCtrlsForEditing;
		$control[$gfName]["params"]["additionalCtrlParams"] = $additionalCtrlParams;
	}
	$controls["controls"]['ctrlInd'] = 0;
	$controls["controls"]['id'] = $id;
	$controls["controls"]['fieldName'] = $fName;
	
	if($inlineedit == EDIT_INLINE)
	{
		if(!$detailKeys || !in_array($fName, $detailKeys))
			$control[$gfName]["params"]["mode"]="inline_edit";
		$controls["controls"]['mode'] = "inline_edit";
	}
	else{
			if (!$detailKeys || !in_array($fName, $detailKeys))
				$control[$gfName]["params"]["mode"] = "edit";
			$controls["controls"]['mode'] = "edit";
		}
																										
	if(!$detailKeys || !in_array($fName, $detailKeys))
		$xt->assignbyref($gfName."_editcontrol",$control[$gfName]);
	elseif($detailKeys && in_array($fName, $detailKeys))
		$controls["controls"]['value'] = @$data[$fName];
		
	// category control field
	$strCategoryControl = $pageObject->isDependOnField($fName);
	
	if($strCategoryControl!==false && in_array($strCategoryControl, $pageObject->editFields))
		$vals = array($fName => @$data[$fName],$strCategoryControl => @$data[$strCategoryControl]);
	else
		$vals = array($fName => @$data[$fName]);
		
	$preload = $pageObject->fillPreload($fName, $vals);
	if($preload!==false)
		$controls["controls"]['preloadData'] = $preload;
	
	$pageObject->fillControlsMap($controls);
	
	//fill field tool tips
	$pageObject->fillFieldToolTips($fName);
	
	// fill special settings for timepicker
	if($pageObject->pSet->getEditFormat($fName) == 'Time')	
		$pageObject->fillTimePickSettings($fName, $data[$fName]);
	
	if($pageObject->pSet->getViewFormat($fName) == FORMAT_MAP)	
		$pageObject->googleMapCfg['isUseGoogleMap'] = true;
		
	if($detailKeys && in_array($fName, $detailKeys) && array_key_exists($fName, $data))
	{
		$value = $pageObject->showDBValue($fName, $data);
		
		$xt->assign($gfName."_editcontrol",$value);
	}
}
//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

$pageObject->jsSettings['tableSettings'][$strTableName]["keys"] = $pageObject->jsKeys;
$pageObject->jsSettings['tableSettings'][$strTableName]['keyFields'] = $pageObject->keyFields;
$pageObject->jsSettings['tableSettings'][$strTableName]["prevKeys"] = $prev;
$pageObject->jsSettings['tableSettings'][$strTableName]["nextKeys"] = $next; 
if($pageObject->lockingObj)
{
	$pageObject->jsSettings['tableSettings'][$strTableName]["sKeys"] = $skeys;
	$pageObject->jsSettings['tableSettings'][$strTableName]["enableCtrls"] = $enableCtrlsForEditing;
	$pageObject->jsSettings['tableSettings'][$strTableName]["confirmTime"] = $pageObject->lockingObj->ConfirmTime;
}

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && $inlineedit!=EDIT_INLINE && !isMobile())
{
	if(count($dpParams['ids']))
	{
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
		$xt->assign("detail_tables",true);	
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
		$options["masterPageType"] = PAGE_EDIT;
		$options["mainMasterPageType"] = PAGE_EDIT;
		$options['masterTable'] = "products";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search")){
			$strTableName = "products";
			continue;
		}
		
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
		$masterKeys = array();
		$mkr = 1;
		
		foreach($mKeys[$strTableName] as $mk){
			$options['masterKeysReq'][$mkr] = $data[$mk];
			$masterKeys['masterKey'.$mkr] = $data[$mk];
			$mkr++;
		}
		
		$listPageObject = ListPage::createListPage($strTableName, $options);
		
		// prepare code
		$listPageObject->prepareForBuildPage();
		
		// show page
		if($listPageObject->isDispGrid())
		{
			//set page events
			foreach($listPageObject->eventsObject->events as $event => $name)
				$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
			
			//add detail settings to master settings
			$listPageObject->addControlsJSAndCSS();
			$listPageObject->fillSetCntrlMaps();
			
			$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];
			
			foreach($listPageObject->jsSettings["global"]["shortTNames"] as $tName => $shortTName){
				$pageObject->settingsMap["globalSettings"]["shortTNames"][$tName] = $shortTName;
			}
			
			$dControlsMap[$strTableName] = $listPageObject->controlsMap;
			$dControlsMap[$strTableName]['masterKeys'] = $masterKeys;
			$dViewControlsMap[$strTableName] = $listPageObject->viewControlsMap;
			
			//Add detail's js files to master's files
			$pageObject->copyAllJSFiles($listPageObject->grabAllJSFiles());
			
			//Add detail's css files to master's files
			$pageObject->copyAllCSSFiles($listPageObject->grabAllCSSFiles());
			
			$xtParams = array("method"=>'showPage', "params"=> false);
			$xtParams['object'] = $listPageObject;
			$xt->assign("displayDetailTable_".GoodFieldName($listPageObject->tName), $xtParams);
			
			$pageObject->controlsMap['dpTablesParams'][] = array('tName'=>$strTableName, 'id'=>$options['id']);
		}
		$flyId = $listPageObject->recId+1;
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$pageObject->viewControlsMap['dViewControlsMap'] = $dViewControlsMap; 
	$strTableName = "products";
}
/////////////////////////////////////////////////////////////
//fill jsSettings and ControlsHTMLMap
$pageObject->flyId = $flyId;
$pageObject->fillSetCntrlMaps();

$pageObject->addCommonJs();

//For mobile version in apple device

if($inlineedit == EDIT_SIMPLE)
{
	// assign body end
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";
	$pageObject->body['end']["object"] = &$pageObject;
	$xt->assign("body", $pageObject->body);
	$xt->assign("flybody",true);
}

if($inlineedit == EDIT_POPUP){
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("body",$pageObject->body);
}

$xt->assign("style_block",true);


$viewlink = "";
$viewkeys = array();
	$viewkeys["editid1"] = postvalue("editid1");
foreach($viewkeys as $key => $val)
{
	if($viewlink)
		$viewlink.="&";
	$viewlink.=$key."=".$val;
}
$xt->assign("viewlink_attrs","id=\"viewButton".$id."\" name=\"viewButton".$id."\" onclick=\"window.location.href='products_view.php?".$viewlink."'\"");
if(CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search") && $inlineedit == EDIT_SIMPLE)
	$xt->assign("view_button",true);
else
	$xt->assign("view_button",false);

/////////////////////////////////////////////////////////////
//display the page
/////////////////////////////////////////////////////////////
if($eventObj->exists("BeforeShowEdit"))
	$eventObj->BeforeShowEdit($xt,$templatefile,$data, $pageObject);

if($inlineedit != EDIT_SIMPLE)
{
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['viewControlsMap'] = $pageObject->viewControlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;	
}
	
if($inlineedit == EDIT_POPUP || $inlineedit == EDIT_INLINE)
{
	if($globalEvents->exists("IsRecordEditable", $strTableName))
	{
		if(!$globalEvents->IsRecordEditable($data, true, $strTableName))
			return SecurityRedirect($inlineedit);
	}
}
if($inlineedit == EDIT_POPUP)
{
	$xt->load_template($templatefile);
	$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
	if(count($pageObject->includes_css))
		$returnJSON['CSSFiles'] = array_unique($pageObject->includes_css);
	if(count($pageObject->includes_cssIE))
		$returnJSON['CSSFilesIE'] = array_unique($pageObject->includes_cssIE);
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON['idStartFrom'] = $flyId + 1;
	echo (my_json_encode($returnJSON)); 
}
elseif($inlineedit == EDIT_INLINE)
{
	$xt->load_template($templatefile);
	$returnJSON["html"] = array();
	foreach($pageObject->editFields as $fName)
	{
		if($detailKeys && in_array($fName, $detailKeys))
			continue;
		$returnJSON["html"][$fName] = $xt->fetchVar(GoodFieldName($fName)."_editcontrol");
	}
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON["additionalCSS"] = $pageObject->grabAllCSSFiles();
	echo (my_json_encode($returnJSON)); 
}
else
	$xt->display($templatefile);
	
function SecurityRedirect($inlineedit)
{
	if($inlineedit == EDIT_INLINE)
	{
		echo my_json_encode(array("success" => false, "message" => "The record is not editable"));
		return;
	}
	
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: menu.php?message=expired");	
}
?>

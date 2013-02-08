<?php
include_once(getabspath("include/products_settings.php"));

function DisplayMasterTableInfo_products($params)
{
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	$detailPageObj = $params["detailPageObj"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	$oldTableName = $strTableName;
	$strTableName = "products";
	
	$settings = new ProjectSettings($strTableName, PAGE_LIST);
	$cipherer = new RunnerCipherer($strTableName);
	
	$masterQuery = $settings->getSQLQuery();
	
	$viewControls = new ViewControlsContainer($settings, PAGE_LIST);

$where = "";
$mKeys = array();
$showKeys = "";

global $page_styles, $page_layouts, $page_layout_names, $container_styles;

$layout = new TLayout("masterlist","FancyGreen1","MobileGreen1");
$layout->blocks["bare"] = array();
$layout->containers["0"] = array();

$layout->containers["0"][] = array("name"=>"masterlistheader","block"=>"","substyle"=>1);


$layout->skins["0"] = "empty";
$layout->blocks["bare"][] = "0";
$layout->containers["mastergrid"] = array();

$layout->containers["mastergrid"][] = array("name"=>"masterlistfields","block"=>"","substyle"=>1);


$layout->skins["mastergrid"] = "grid";
$layout->blocks["bare"][] = "mastergrid";$page_layouts["products_masterlist"] = $layout;


if($detailtable == "prodcosts")
{
		$where.= GetFullFieldName("ProdNo", "", false)."=".$cipherer->MakeDBValue("ProdNo",$keys[1-1], "", "", true);
	$showKeys .= " "."Prod No".": ".$keys[1-1];
	$xt->assign('showKeys',$showKeys);
}
	if(!$where)
	{
		$strTableName = $oldTableName;
		return;
	}
	$str = SecuritySQL("Search");
	if(strlen($str))
		$where.= " and ".$str;

	$strWhere = whereAdd($masterQuery->WhereToSql(),$where);
	if(strlen($strWhere))
		$strWhere = " where ".$strWhere." ";
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();

//	$strSQL = AddWhere($strSQL,$where);
	LogInfo($strSQL);
	$rs = db_query($strSQL,$conn);
	$data = $cipherer->DecryptFetchedArray($rs);
	if(!$data)
	{
		$strTableName = $oldTableName;
		return;
	}
	$keylink = "";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["ProdNo"]));
	

//	ProdGrpCode - 
			$value="";

					$xt->assign("ProdGrpCode_mastervalue", $viewControls->showDBValue("ProdGrpCode", $data, $keylink));

//	ProdThaiName - 
			$value="";

					$xt->assign("ProdThaiName_mastervalue", $viewControls->showDBValue("ProdThaiName", $data, $keylink));

//	ProdEngName - 
			$value="";

					$xt->assign("ProdEngName_mastervalue", $viewControls->showDBValue("ProdEngName", $data, $keylink));

//	Picture - 
			$value="";

					$xt->assign("Picture_mastervalue", $viewControls->showDBValue("Picture", $data, $keylink));

//	ThaiModel - 
			$value="";

					$xt->assign("ThaiModel_mastervalue", $viewControls->showDBValue("ThaiModel", $data, $keylink));

//	EngModel - 
			$value="";

					$xt->assign("EngModel_mastervalue", $viewControls->showDBValue("EngModel", $data, $keylink));

//	MixNo - 
			$value="";

					$xt->assign("MixNo_mastervalue", $viewControls->showDBValue("MixNo", $data, $keylink));

//	ProdWt - Number
			$value="";

					$xt->assign("ProdWt_mastervalue", $viewControls->showDBValue("ProdWt", $data, $keylink));

//	ColorMixNo - 
			$value="";

					$xt->assign("ColorMixNo_mastervalue", $viewControls->showDBValue("ColorMixNo", $data, $keylink));

//	FaceWt - Number
			$value="";

					$xt->assign("FaceWt_mastervalue", $viewControls->showDBValue("FaceWt", $data, $keylink));

//	Mold - Number
			$value="";

					$xt->assign("Mold_mastervalue", $viewControls->showDBValue("Mold", $data, $keylink));

//	PiecesPerMould - 
			$value="";

					$xt->assign("PiecesPerMould_mastervalue", $viewControls->showDBValue("PiecesPerMould", $data, $keylink));

//	ProductCost - Number
			$value="";

					$xt->assign("ProductCost_mastervalue", $viewControls->showDBValue("ProductCost", $data, $keylink));

//	PriceRetail - Number
			$value="";

					$xt->assign("PriceRetail_mastervalue", $viewControls->showDBValue("PriceRetail", $data, $keylink));

//	PriceWholeSale - Number
			$value="";

					$xt->assign("PriceWholeSale_mastervalue", $viewControls->showDBValue("PriceWholeSale", $data, $keylink));

//	ProdStockGoal - 
			$value="";

					$xt->assign("ProdStockGoal_mastervalue", $viewControls->showDBValue("ProdStockGoal", $data, $keylink));

//	ThaiCom - 
			$value="";

					$xt->assign("ThaiCom_mastervalue", $viewControls->showDBValue("ThaiCom", $data, $keylink));

//	EngCom - 
			$value="";

					$xt->assign("EngCom_mastervalue", $viewControls->showDBValue("EngCom", $data, $keylink));

//	Status - 
			$value="";

					$xt->assign("Status_mastervalue", $viewControls->showDBValue("Status", $data, $keylink));

//	MoldWt - Number
			$value="";

					$xt->assign("MoldWt_mastervalue", $viewControls->showDBValue("MoldWt", $data, $keylink));

//	GrayWtMold - Number
			$value="";

					$xt->assign("GrayWtMold_mastervalue", $viewControls->showDBValue("GrayWtMold", $data, $keylink));

//	ColorWtMold - Number
			$value="";

					$xt->assign("ColorWtMold_mastervalue", $viewControls->showDBValue("ColorWtMold", $data, $keylink));

//	Length - Number
			$value="";

					$xt->assign("Length_mastervalue", $viewControls->showDBValue("Length", $data, $keylink));

//	Width1 - Number
			$value="";

					$xt->assign("Width1_mastervalue", $viewControls->showDBValue("Width1", $data, $keylink));

//	Thickness - Number
			$value="";

					$xt->assign("Thickness_mastervalue", $viewControls->showDBValue("Thickness", $data, $keylink));

//	ProdNo - 
			$value="";

					$xt->assign("ProdNo_mastervalue", $viewControls->showDBValue("ProdNo", $data, $keylink));

	$viewControls->addControlsJSAndCSS();
	$detailPageObj->viewControlsMap['mViewControlsMap'] = $viewControls->viewControlsMap;

	$layout = GetPageLayout("products", 'masterlist');
	if($layout)
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->display("products_masterlist.htm");
	
	$strTableName=$oldTableName;
}

?>
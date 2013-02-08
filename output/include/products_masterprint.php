<?php
include_once(getabspath("include/products_settings.php"));

function DisplayMasterTableInfo_products($params)
{
	$detailtable=$params["detailtable"];
	$keys=$params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	
	$oldTableName=$strTableName;
	$strTableName="products";

//$strSQL = "SELECT ProdGrpCode,   ProdThaiName,   ProdEngName,   Picture,   ThaiModel,   EngModel,   MixNo,   ProdWt,   ColorMixNo,   FaceWt,   Mold,   PiecesPerMould,   ProductCost,   PriceRetail,   PriceWholeSale,   ProdStockGoal,   ThaiCom,   EngCom,   Status,   MoldWt,   GrayWtMold,   ColorWtMold,   Length,   Width1,   Thickness,   ProdNo  FROM products ";

	$cipherer = new RunnerCipherer($strTableName);
	$settings = new ProjectSettings($strTableName, PAGE_PRINT);
	
	$masterQuery = $settings->getSQLQuery();
	$viewControls = new ViewControlsContainer($settings, PAGE_PRINT);

$where="";

global $pageObject, $page_styles, $page_layouts, $page_layout_names, $container_styles;
$layout = new TLayout("masterprint","FancyGreen1","MobileGreen1");
$layout->blocks["bare"] = array();
$layout->containers["0"] = array();

$layout->containers["0"][] = array("name"=>"masterprintheader","block"=>"","substyle"=>1);


$layout->skins["0"] = "empty";
$layout->blocks["bare"][] = "0";
$layout->containers["mastergrid"] = array();

$layout->containers["mastergrid"][] = array("name"=>"masterprintfields","block"=>"","substyle"=>1);


$layout->skins["mastergrid"] = "grid";
$layout->blocks["bare"][] = "mastergrid";$page_layouts["products_masterprint"] = $layout;


$showKeys = "";
if($detailtable=="prodcosts")
{
		$where.= GetFullFieldName("ProdNo", "", false)."=".$cipherer->MakeDBValue("ProdNo",$keys[1-1], "", "", true);
	$showKeys .= " "."Prod No".": ".$keys[1-1];
	$xt->assign('showKeys',$showKeys);
	
}
if(!$where)
{
	$strTableName=$oldTableName;
	return;
}
	$str = SecuritySQL("Export");
	if(strlen($str))
		$where.=" and ".$str;
	
	$strWhere = whereAdd($masterQuery->m_where->toSql($masterQuery),$where);
	if(strlen($strWhere))
		$strWhere=" where ".$strWhere." ";
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();

//	$strSQL=AddWhere($strSQL,$where);

	LogInfo($strSQL);
	$rs=db_query($strSQL,$conn);
	$data = $cipherer->DecryptFetchedArray($rs);
	if(!$data)
	{
		$strTableName=$oldTableName;
		return;
	}
	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["ProdNo"]));
	

//	ProdGrpCode - 
			$xt->assign("ProdGrpCode_mastervalue", $viewControls->showDBValue("ProdGrpCode", $data, $keylink));

//	ProdThaiName - 
			$xt->assign("ProdThaiName_mastervalue", $viewControls->showDBValue("ProdThaiName", $data, $keylink));

//	ProdEngName - 
			$xt->assign("ProdEngName_mastervalue", $viewControls->showDBValue("ProdEngName", $data, $keylink));

//	Picture - 
			$xt->assign("Picture_mastervalue", $viewControls->showDBValue("Picture", $data, $keylink));

//	ThaiModel - 
			$xt->assign("ThaiModel_mastervalue", $viewControls->showDBValue("ThaiModel", $data, $keylink));

//	EngModel - 
			$xt->assign("EngModel_mastervalue", $viewControls->showDBValue("EngModel", $data, $keylink));

//	MixNo - 
			$xt->assign("MixNo_mastervalue", $viewControls->showDBValue("MixNo", $data, $keylink));

//	ProdWt - Number
			$xt->assign("ProdWt_mastervalue", $viewControls->showDBValue("ProdWt", $data, $keylink));

//	ColorMixNo - 
			$xt->assign("ColorMixNo_mastervalue", $viewControls->showDBValue("ColorMixNo", $data, $keylink));

//	FaceWt - Number
			$xt->assign("FaceWt_mastervalue", $viewControls->showDBValue("FaceWt", $data, $keylink));

//	Mold - Number
			$xt->assign("Mold_mastervalue", $viewControls->showDBValue("Mold", $data, $keylink));

//	PiecesPerMould - 
			$xt->assign("PiecesPerMould_mastervalue", $viewControls->showDBValue("PiecesPerMould", $data, $keylink));

//	ProductCost - Number
			$xt->assign("ProductCost_mastervalue", $viewControls->showDBValue("ProductCost", $data, $keylink));

//	PriceRetail - Number
			$xt->assign("PriceRetail_mastervalue", $viewControls->showDBValue("PriceRetail", $data, $keylink));

//	PriceWholeSale - Number
			$xt->assign("PriceWholeSale_mastervalue", $viewControls->showDBValue("PriceWholeSale", $data, $keylink));

//	ProdStockGoal - 
			$xt->assign("ProdStockGoal_mastervalue", $viewControls->showDBValue("ProdStockGoal", $data, $keylink));

//	ThaiCom - 
			$xt->assign("ThaiCom_mastervalue", $viewControls->showDBValue("ThaiCom", $data, $keylink));

//	EngCom - 
			$xt->assign("EngCom_mastervalue", $viewControls->showDBValue("EngCom", $data, $keylink));

//	Status - 
			$xt->assign("Status_mastervalue", $viewControls->showDBValue("Status", $data, $keylink));

//	MoldWt - Number
			$xt->assign("MoldWt_mastervalue", $viewControls->showDBValue("MoldWt", $data, $keylink));

//	GrayWtMold - Number
			$xt->assign("GrayWtMold_mastervalue", $viewControls->showDBValue("GrayWtMold", $data, $keylink));

//	ColorWtMold - Number
			$xt->assign("ColorWtMold_mastervalue", $viewControls->showDBValue("ColorWtMold", $data, $keylink));

//	Length - Number
			$xt->assign("Length_mastervalue", $viewControls->showDBValue("Length", $data, $keylink));

//	Width1 - Number
			$xt->assign("Width1_mastervalue", $viewControls->showDBValue("Width1", $data, $keylink));

//	Thickness - Number
			$xt->assign("Thickness_mastervalue", $viewControls->showDBValue("Thickness", $data, $keylink));

//	ProdNo - 
			$xt->assign("ProdNo_mastervalue", $viewControls->showDBValue("ProdNo", $data, $keylink));
	$xt->display("products_masterprint.htm");
	$strTableName=$oldTableName;

}

?>
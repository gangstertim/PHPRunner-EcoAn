<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

$mSTable = postvalue("mSTable");
if(!checkTableName($mSTable)){
	
	$respObj = array("success"=>false, "error"=>'Wrong master short table name');
	echo (my_json_encode($respObj));
	return;
}	
include("include/".$mSTable."_variables.php");

$dSTable = postvalue("dSTable");
if(!checkTableName($dSTable)){
	
	$respObj = array("success"=>false, "error"=>'Wrong detail short table name');
	echo (my_json_encode($respObj));
	return;
}	
include("include/".$dSTable."_variables.php");


include('include/xtempl.php');
include('classes/runnerpage.php');

$mKeys = my_json_decode(postvalue("mKeys"));
$mTable = postvalue("mTable");
$dTable = postvalue("dTable");
$pageType = postvalue("pageType");

$xt = new Xtempl();
//array of params for classes
$params = array("pageType" =>$pageType);
$params['xt'] = &$xt;
$params["tName"] = $mTable;
$params["needSearchClauseObj"] = false;
$pageObject = new RunnerPage($params);

for($dInd = 0; $dInd < count($pageObject->allDetailsTablesArr); $dInd ++) 
{
	if($pageObject->allDetailsTablesArr[$dInd]['dDataSourceTable'] == $dTable)
		break;
}
$output = $pageObject->countDetailsRecsNoSubQ($dInd,$mKeys);

$respObj = array('success'=>true, 'recsCount'=>$output);
echo "<textarea>".htmlspecialchars(my_json_encode($respObj))."</textarea>";
?>
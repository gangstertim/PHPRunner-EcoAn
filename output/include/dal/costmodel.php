<?php
$dalTablecostmodel = array();
$dalTablecostmodel["ProdGrpCode"] = array("type"=>200,"varname"=>"ProdGrpCode");
$dalTablecostmodel["Interest"] = array("type"=>5,"varname"=>"Interest");
$dalTablecostmodel["Period"] = array("type"=>3,"varname"=>"Period");
$dalTablecostmodel["DownPay"] = array("type"=>5,"varname"=>"DownPay");
$dalTablecostmodel["DaysWorked"] = array("type"=>3,"varname"=>"DaysWorked");
$dalTablecostmodel["Qty"] = array("type"=>3,"varname"=>"Qty");
$dalTablecostmodel["MonthsOfCap"] = array("type"=>3,"varname"=>"MonthsOfCap");
$dalTablecostmodel["Waste"] = array("type"=>5,"varname"=>"Waste");
$dalTablecostmodel["Maint"] = array("type"=>5,"varname"=>"Maint");
$dalTablecostmodel["Admin"] = array("type"=>5,"varname"=>"Admin");
$dalTablecostmodel["Mgr"] = array("type"=>3,"varname"=>"Mgr");
$dalTablecostmodel["Clerk"] = array("type"=>3,"varname"=>"Clerk");
$dalTablecostmodel["Notes"] = array("type"=>200,"varname"=>"Notes");
	$dalTablecostmodel["ProdGrpCode"]["key"]=true;
$dal_info["costmodel"]=&$dalTablecostmodel;

?>
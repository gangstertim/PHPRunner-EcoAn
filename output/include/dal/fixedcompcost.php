<?php
$dalTablefixedcompcost = array();
$dalTablefixedcompcost["ProdGrpCode"] = array("type"=>200,"varname"=>"ProdGrpCode");
$dalTablefixedcompcost["EngName"] = array("type"=>200,"varname"=>"EngName");
$dalTablefixedcompcost["ThaiName"] = array("type"=>200,"varname"=>"ThaiName");
$dalTablefixedcompcost["Cost"] = array("type"=>5,"varname"=>"Cost");
$dalTablefixedcompcost["Qty"] = array("type"=>3,"varname"=>"Qty");
$dalTablefixedcompcost["(T2.Cost *T1.Qty )"] = array("type"=>5,"varname"=>"_T2_Cost__T1_Qty__");
$dalTablefixedcompcost["UnitEng"] = array("type"=>200,"varname"=>"UnitEng");
$dalTablefixedcompcost["CompTypeNo"] = array("type"=>14,"varname"=>"CompTypeNo");
$dal_info["fixedcompcost"]=&$dalTablefixedcompcost;

?>
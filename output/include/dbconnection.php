<?php
function UseNewMysqlLib()
{
	global $useOldMysqlLib;
	if(!$useOldMysqlLib)
	{	
		return extension_loaded("mysqli")===true;
	}
	else
	{
		return extension_loaded("mysql") !== true;
	}

}

function includeMySQLFile()
{
	if(UseNewMysqlLib())
		return "dbconnection.my.mysqli.php";
	else
		return "dbconnection.my.mysql.php";
}
include(includeMySQLFile());
?>

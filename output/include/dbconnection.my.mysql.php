<?php

function db_connect() 
{
    global $host,$user,$pwd,$errstr,$sys_dbname,$port,$bSubqueriesSupported,$cMySQLNames;
	$strhost=$host;
	if($port && $port!=3306)
		$strhost=$strhost.":".$port;
	$conn = mysql_connect($strhost,$user,$pwd);
	if (!$conn || !mysql_select_db($sys_dbname,$conn)) 
	{
	  trigger_error(mysql_error(), E_USER_ERROR);
	}
	@mysql_query("set names ".$cMySQLNames);
	$mysqlversion = "4";
	$res = @mysql_query("SHOW VARIABLES LIKE 'version'",$conn);
	if($row=@mysql_fetch_array($res,MYSQL_ASSOC))
		$mysqlversion = $row["Value"];
	if(substr($mysqlversion,0,1)<="4")
		$bSubqueriesSupported=false;
	return $conn;
}

function db_close($conn)
{
  return mysql_close($conn);
}

function db_query($qstring,$conn) 
{
	global $strLastSQL,$dDebug;
	if ($dDebug===true)
		echo $qstring."<br>";
	$strLastSQL=$qstring;
	if(!($ret=mysql_query($qstring,$conn)))
	{
	  trigger_error(mysql_error(), E_USER_ERROR);
	}
	return $ret;
	
}

function db_exec($qstring,$conn)
{
	global $dDebug;
	if ($dDebug===true)
		echo $qstring."<br>";
	return db_query($qstring,$conn);
}



function db_pageseek($qhandle,$pagesize,$page)
{
	db_dataseek($qhandle,($page-1)*$pagesize);
}

function db_dataseek($qhandle,$row)
{
   mysql_data_seek($qhandle,$row);
}

function db_result($qhandle,$row,$field) {
	return @mysql_result($qhandle,$row,$field);
}


function db_affected_rows($qhandle) {
	return @mysql_affected_rows();
}
	
function db_fetch_array($qhandle) {
	return @mysql_fetch_array($qhandle,MYSQL_ASSOC);
}

function db_fetch_numarray($qhandle) {
	return @mysql_fetch_array($qhandle,MYSQL_NUM);
}

function db_closequery($qhandle)
{
	@mysql_free_result($qhandle);
}
	
function db_insertid($qhandle) {
	return @mysql_insert_id($qhandle);
}

function db_error($conn) {
	return @mysql_error();
}





function parsevalues($enum)
{
	$values=array();
	$i=0; $j=0;
	$inquot=false;
	while($i<strlen($enum))
	{
		if($enum[$i]=="'")
			$nquot=!$inquot;
		else if(!$inquot && $enum[$i]==',')
		{
			$val=substr($enum,$j+1,$i-$j-2);
			$values[]=str_replace("''","'",$val);
			$j=$i+1;
		}
		$i++;
	}
	if($i-$j-2>0)
	{
		$val=substr($enum,$j+1,$i-$j-2);
		$values[]=str_replace("''","'",$val);
	}
	return $values;
}




function db_numfields($lhandle) {
	return @mysql_numfields($lhandle);
}

function db_numrows($lhandle) {
	return @mysql_num_rows($lhandle);
}

function db_fieldname($lhandle,$fnumber) {
           return @mysql_fieldname($lhandle,$fnumber);
}
?>
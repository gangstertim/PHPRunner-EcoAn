<?php

function db_connect() 
{
    global $host,$user,$pwd,$errstr,$sys_dbname,$port,$bSubqueriesSupported,$cMySQLNames;
	if($port && $port!=3306)
		$conn = mysqli_connect($host, $user, $pwd, "", $port);
	else 
		$conn = mysqli_connect($host, $user, $pwd);
	if (!$conn) 
	{
		trigger_error(mysqli_connect_error(), E_USER_ERROR);
	}
	elseif (!mysqli_select_db($conn, $sys_dbname)) 
	{
		trigger_error(mysqli_error($conn), E_USER_ERROR);
	}
	@mysqli_query($conn, "set names ".$cMySQLNames);
	
	$mysqlversion = "4";
	$res = @mysqli_query($conn, "SHOW VARIABLES LIKE 'version'");
	if($row = @mysqli_fetch_array($res, MYSQLI_ASSOC))
		$mysqlversion = $row["Value"];
	if(substr($mysqlversion, 0, 1)<="4")
		$bSubqueriesSupported = false;
	return $conn;
}

function db_close($conn)
{
	return mysqli_close($conn);
}

function db_query($qstring, $conn) 
{
	global $strLastSQL, $dDebug;
	if ($dDebug===true)
		echo $qstring."<br>";
	$strLastSQL = $qstring;
	if(!($ret = mysqli_query($conn, $qstring)))
	{
		trigger_error(mysqli_error($conn), E_USER_ERROR);
	}
	return $ret;
	
}

function db_exec($qstring, $conn)
{
	global $dDebug;
	if ($dDebug===true)
		echo $qstring."<br>";
	return db_query($qstring,$conn);
}



function db_pageseek($qhandle, $pagesize, $page)
{
	db_dataseek($qhandle, ($page - 1) * $pagesize);
}

function db_dataseek($qhandle, $row)
{
   mysqli_data_seek($qhandle, $row);
}

function db_result($qhandle, $row, $field) {
	@mysqli_data_seek($qhandle, $row);
	$result = @mysqli_fetch_array($qhandle);
	return $result[$field];
}


function db_affected_rows($qhandle) {
	return @mysqli_affected_rows($qhandle);
}
	
function db_fetch_array($qhandle) {
	return @mysqli_fetch_array($qhandle, MYSQLI_ASSOC);
}

function db_fetch_numarray($qhandle) {
	return @mysqli_fetch_array($qhandle, MYSQLI_NUM);
}

function db_closequery($qhandle)
{
	@mysqli_free_result ($qhandle);
}
	
function db_insertid($qhandle) {
	return @mysqli_insert_id($qhandle);
}

function db_error($conn) {
	return @mysqli_error($conn);
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
	return @mysqli_num_fields($lhandle);
}

function db_numrows($lhandle) {
	return @mysqli_num_rows($lhandle);
}

function db_fieldname($lhandle, $fnumber) {
	@mysqli_field_seek($lhandle, $fnumber);
    $field = @mysqli_fetch_field($lhandle);
    return $field ? $field->name : FALSE;
}
?>
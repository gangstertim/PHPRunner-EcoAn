<?php
    @ini_set("display_errors","1");
    @ini_set("display_startup_errors","1");
    include("include/dbcommon.php");
    header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 
    include("classes/charts.php");
	require_once(getabspath("include/xml.php"));
	require_once(getabspath("classes/searchclause.php"));
		

		
    //$conn=db_connect();

    $xml = new xml();

        
	$chrt_strXML="";
	if (checkTableName(postvalue("chartname"), titCHART))
	{
		include("include/".postvalue("chartname")."_variables.php");
		$chrt_strXML = GetChartXML(postvalue("chartname"));
		$chrt_array = $xml->xml_to_array( $chrt_strXML );
		$_SESSION["webobject"]["table_type"]="project";
		$_SESSION["object_sql"]="";
	}
	
	$webchart=false;
	if (!$chrt_strXML)
	{
		$sessPrefix = "webchart".postvalue('cname');
		$chrt_strXML = LoadSelectedChart(postvalue('cname'));
		$webchart=true;
		$chrt_array = $xml->xml_to_array( $chrt_strXML );
		if(is_wr_project())
	    	include("include/" . $chrt_array['settings']['short_table_name'] . "_variables.php");
	}
	$param = array();
	$param["webchart"]=$webchart;
	if($webchart)
	{
		$param["cname"]=postvalue("cname");
switch($chrt_array["chart_type"]["type"])
		{
			case "3d_column":
				$chrt_array["chart_type"]["type"]="2d_column";
				$chrt_array["appearance"]["is3d"]="true";
				$chrt_array["appearance"]["isstacked"]="false";
				break;
			case "3d_bar":
				$chrt_array["chart_type"]["type"]="2d_bar";
				$chrt_array["appearance"]["is3d"]="true";
				$chrt_array["appearance"]["isstacked"]="false";
				break;
			case "3d_column_stacked":
				$chrt_array["chart_type"]["type"]="2d_column";
				$chrt_array["appearance"]["is3d"]="true";
				$chrt_array["appearance"]["isstacked"]="true";
				break;
			case "3d_bar_stacked":
				$chrt_array["chart_type"]["type"]="2d_bar";
				$chrt_array["appearance"]["is3d"]="true";
				$chrt_array["appearance"]["isstacked"]="true";
				break;
			case "2d_column_stacked":
				$chrt_array["chart_type"]["type"]="2d_column";
				$chrt_array["appearance"]["isstacked"]="true";
				$chrt_array["appearance"]["is3d"]="false";
				break;
			case "2d_bar_stacked":
				$chrt_array["chart_type"]["type"]="2d_bar";
				$chrt_array["appearance"]["isstacked"]="true";
				$chrt_array["appearance"]["is3d"]="false";
				break;
			case "line":
				$chrt_array["chart_type"]["type"]="line";
				if(!isset($chrt_array["appearance"]["linestyle"]))
					$chrt_array["appearance"]["linestyle"]=0;
				break;
			case "spline":
				$chrt_array["chart_type"]["type"]="line";
				$chrt_array["appearance"]["linestyle"]=1;
				break;
			case "step_line":
				$chrt_array["chart_type"]["type"]="line";
				$chrt_array["appearance"]["linestyle"]=2;
				break;
			case "area_stacked":
				$chrt_array["chart_type"]["type"]="area";
				$chrt_array["appearance"]["isstacked"]="true";
				break;
		}
		
		if(!isset($chrt_array["appearance"]["cscroll"]))
			$chrt_array["appearance"]["cscroll"]="true";
		if(!isset($chrt_array["appearance"]["maxbarscroll"]))
			$chrt_array["appearance"]["maxbarscroll"]=10;
		$chrt_array['appearance']['nameTypeFooter']="Text";
		$chrt_array['appearance']['nameTypeHeader']="Text";
		for($i=5;$i<=14;$i++)
		{
			if(isset($chrt_array["appearance"]["color".$i."1"]) && $i<5)
				$chrt_array["appearance"]["scolor".$i."1"]=$chrt_array["appearance"]["color".$i."1"];
			if($chrt_array["appearance"]["color".$i."1"]=="" || is_null($chrt_array["appearance"]["color".$i."1"]))
				if($i<>5 && $i<>6 && ($i<10 || $i>12))
					$chrt_array["appearance"]["color".$i."1"]="FFFFFF";
				else
					$chrt_array["appearance"]["color".$i."1"]="000000";
		}
		for($i=0;$i<count($chrt_array["parameters"])-2;$i++)
		{
			$chrt_array["parameters"][$i]["currencyFormat"]=($chrt_array["appearance"]["scur"]=="true");
			$chrt_array["parameters"][$i]["decimalFormat"]=$chrt_array["appearance"]["dec"];
		}
	}
	else
		$param["cname"]=postvalue("chartname");
	if(!$webchart)
		$param["gstrOrderBy"]=$gstrOrderBy;
	
	if($chrt_array["chart_type"]["type"]=="candle")
        $chrt_array["chart_type"]["type"]="candlestick";

	switch($chrt_array["chart_type"]["type"])
	{
		case "2d_column": 
				$param["2d"]=true;
				$param["bar"]=false;
				$param["stacked"]=false;
				if($chrt_array["appearance"]["is3d"]=="true" || $chrt_array["appearance"]["is3d"]==1)
					$param["2d"]=false;
				if($chrt_array["appearance"]["isstacked"]=="true" || $chrt_array["appearance"]["isstacked"]==1)
					$param["stacked"]=true;
				$chartObj = new Chart_Bar($chrt_array,$param);
			break;
		case "2d_bar": 
				$param["2d"]=true;
				$param["bar"]=true;
				$param["stacked"]=false;
				if($chrt_array["appearance"]["is3d"]=="true" || $chrt_array["appearance"]["is3d"]==1)
					$param["2d"]=false;
				if($chrt_array["appearance"]["isstacked"]=="true" || $chrt_array["appearance"]["isstacked"]==1)
					$param["stacked"]=true;
				$chartObj = new Chart_Bar($chrt_array,$param);
			break;
		case "line":
				if($chrt_array["appearance"]["linestyle"]==0)
					$param["type_line"]="line";
				elseif($chrt_array["appearance"]["linestyle"]==2)
					$param["type_line"]="step_line";
				else
					$param["type_line"]="spline";
				$chartObj = new Chart_Line($chrt_array,$param);
			break;
		case "area":
				$param["stacked"]=false;
				if($chrt_array["appearance"]["isstacked"]=="true" || $chrt_array["appearance"]["isstacked"]==1)
					$param["stacked"]=true;
				$chartObj = new Chart_Area($chrt_array,$param);
			break;
		case "2d_pie":
				$param["2d"]=true;
				if($chrt_array["appearance"]["is3d"]=="true" || $chrt_array["appearance"]["is3d"]==1)
					$param["2d"]=false;
				$param["pie"]=true;
				$chartObj = new Chart_Pie($chrt_array,$param);
			break;
		case "2d_doughnut":
				$param["2d"]=true;
				if($chrt_array["appearance"]["is3d"]=="true" || $chrt_array["appearance"]["is3d"]==1)
					$param["2d"]=false;
				$param["pie"]=false;
				$chartObj = new Chart_Pie($chrt_array,$param);
			break;
		case "combined":
				$chartObj = new Chart_Combined($chrt_array,$param);
			break;
		case "funnel":
				$param["funnel_type"]=$chrt_array["appearance"]["accumulstyle"]; 
				$param["funnel_inv"]=false;
				if($chrt_array["appearance"]["accumulinvert"]=="true" || $chrt_array["appearance"]["accumulinvert"]==1)
					$param["funnel_inv"]=true;
				$chartObj = new Chart_Funnel($chrt_array,$param);
			break;
		case "bubble":
				$param["2d"]=true;
				$param["oppos"]=1;
				if($chrt_array["appearance"]["is3d"]=="true" || $chrt_array["appearance"]["is3d"]==1)
					$param["2d"]=false;
				if($chrt_array["appearance"]["bubbletransp"]=="true" || $chrt_array["appearance"]["bubbletransp"]==1)
					$param["oppos"]=0.3;
				$chartObj = new Chart_Bubble($chrt_array,$param);
			break;
		case "gauge":
				$param["orientation"]="";	
				if($chrt_array["appearance"]["gaugestyle"]==0)
					$param["type_gauge"]="circular";
				elseif($chrt_array["appearance"]["gaugestyle"]==1)
				{
					$param["type_gauge"]="linear";
					$param["orientation"]="horizontal";	
				}
				else
				{
					$param["type_gauge"]="linear";
					$param["orientation"]="vertical";	
				}
				$chartObj = new Chart_Gauge($chrt_array,$param);
			break;
		case "ohlc":
				$param["ohcl_type"]="ohcl";
				$chartObj = new Chart_Ohlc($chrt_array,$param);
			break;
		case "candlestick":
				$param["ohcl_type"]="candlestick";
				$chartObj = new Chart_Ohlc($chrt_array,$param);
			break;
	}
	if(postvalue("action")=="refresh" && !isMobile())
	{
		$chartObj->get_data(true);
		exit();
	}
    header("Content-Type: text/xml");
	$chartObj->write();
?>

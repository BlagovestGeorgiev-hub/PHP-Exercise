<html>
<head>
<meta http-equiv="content-type" 
	content="text/html; charset=utf-8">
<title>Резултат </title>
<div align="right">
<script language ="javascript">
document.write(" "+Date())
</script>
</div>
</head>
<body bgcolor=lightblue>
<div align="center">
<big>
<b>
<pre>

<?php 
$route=$_POST['route'];
$startimeH=$_POST['startimeH'];
$startimeM=$_POST['startimeM'];
$recspeed=$_POST['recspeed'];
$starTime=($startimeH+$startimeM);

$x;
$y;
$finTime=0;


?>
<h2>Въведени данни и резултат:</h2>
<table border=4 bordercolor=black cellspacing=0 cellpading=9 width=50%>

<tr><th>Дължина на маршрут: <th><?php 
	echo $route;
 ?> </tr>

<tr><th>Време на тръгване: <th><?php 
	if($starTime>24.00)
	{
		$starTime-=24.00;
		echo $starTime." часа";
	}else{ echo $starTime." часа"; }

//echo $starTime;
 ?> </tr>
 

<tr><th>Препоръчителна скорост: <th><?php 
	echo $recspeed;
 ?> </tr>

<tr><th>Време на пристигане: <th><?php 
	
	$x=$recspeed/60.0;
	$y=($route/$x)/100;
	echo $y . "  ";
	
	if($y<0.60)
	{
		$finTime=($starTime + $y);
		echo $finTime;
		echo number_format((float)$finTime, 2, '.', '') . " часа";
	}
	//echo "   " . $y;			
	elseif($y>0.60 && $y<0.120)
	{
		$y-=0.60;
		$finTime=($y+$starTime)+1.0;
		echo number_format((float)$finTime,2,'.', '') . " часа";
	}
/*	elseif($y>0.120&& $y<0.180){
		$y-=0.120;
		$finTime=($y+$starTime)+2.0;
		//echo $finTime;
		echo number_format((float)$finTime, 2, '.', '') . " часа";
	}elseif($y>0.180&& $y<0.240){
		$y-=0.180;
		$finTime=($y+$starTime)+3.0;
		//echo $finTime;
		echo number_format((float)$finTime, 2, '.', '') . " часа";
	}elseif($y>0.240&& $y<0.300){
		$y-=0.240;
		$finTime=($y+$starTime)+4.0;
		//echo $finTime;
		echo number_format((float)$finTime, 2, '.', '') . " часа";
	}elseif($y>0.300&& $y<0.360){
		$y-=0.300;
		$finTime=($y+$starTime)+5.0;
		//echo $finTime;
		echo number_format((float)$finTime, 2, '.', '') . " часа";
	} //.............................................	
	//.........................................................
	//.........................................................
	
	elseif	($y>0.6 && $y<0.12)
	{
		$y-=0.6;
		$finTime=($y+$starTime)+1.0;
		//echo $finTime;
		echo number_format((float)$finTime, 2, '.', '') . " часа";
	}
	//echo "   " . $y;
	elseif($y>0.12 && $y<0.18){
		$y-=0.12;
		$finTime=($y+$starTime)+2.0;
		//echo $finTime;
		echo number_format((float)$finTime, 2, '.', '') . " часа";
	}elseif($y>0.18 && $y<0.24){
		$y-=0.18;
		$finTime=($y+$starTime)+3.0;
		//echo $finTime;
		echo number_format((float)$finTime, 2, '.', '') . " часа";
	}elseif($y>0.24 && $y<0.30){
		$y-=0.24;
		$finTime=($y+$starTime)+4.0;
		//echo $finTime;
		echo number_format((float)$finTime, 2, '.', '') . " часа";
	}elseif($y>0.30 && $y<0.36){
		$y-=0.30;
		$finTime=($y+$starTime)+5.0;
		//echo $finTime;
		echo number_format((float)$finTime, 2, '.', '') . " часа";
	} */
	//.........................................................
	//.........................................................
	//.........................................................
	//echo $y;
	
/*	
	$finTime=$y+$starTime;
	$hours = intval($finTime);
	$realPart = $finTime - $hours;
	$minutes = intval( $realPart * 60);
	echo $hours.":".$minutes;
	
	if($finTime>24.00)
	{
		$finTime-=24.00;
		echo $finTime." часа";
	}else{ echo $finTime." часа"; }	*/
	
	//echo $y;
	//echo $x;
	//echo $starTime+3.16 ." часа";
 ?> </tr>

</table>

</div>
</form>
</pre>
</b>
</big>
</body>
</html>

<html>
<head>
<meta http-equiv="content-type" 
	content="text/html; charset=utf-8">
<title>Калкулатор за време на лихва</title>
<div align="right">
<script language ="javascript">
document.write(" "+Date())
</script>
</div>
</head>
<body bgcolor=lightblue>
<div align="center">
<h2>Калкулатор за време на лихва</h2>
<big><b>
<pre>
<?php 
$first=$_POST["first"];
$second=$_POST["second"];
$percY=$_POST["perc"];
$percM=$percY/12;

?>
<h2>Резултати</h2>
<table border=4 bordercolor=black cellspacing=0 cellpading=9 width=50%>
<tr><th>Начална сума<th><?php echo $first. "лв."; ?></tr>
<tr><th>Крайна сума<th><?php echo $second. "лв."; ?></tr>
<tr><th>Процент за година<th><?php echo $percY . "%"; ?></tr>
<tr><th>Процент за месец<th><?php 
echo number_format((float)$percM, 2, '.', '') . "%";  ?></tr>
<tr><th>Време за достигане на НС до КС<th><?php 
$yPM=($first/100)*$percM;
$yM=0;
$yY=0;
	while($first<$second)
	{
		$first+=$yPM;
		$yM+=1;
	}
	while($yM>12)
	{
		$yM-=12;
		$yY+=1;
	}
	if($yY<1)
	{
		if($yM>1)
		{
			echo $yM . " месеца!";
		}else{ echo $yM . " месец!";}
	}
	elseif($yY>1)
	{
		echo $yY . " години и ";
		if($yM>1)
		{
			echo $yM . " месеца!";
		}else{ echo $yM . " месец!";}
	}else{
		echo $yY . " година и ";
		if($yM>1)
		{
			echo $yM . " месеца!";
		}else{ echo $yM . " месец!";}
	}

 ?></tr>

</body>
</div>
</big>
</b>
</pre>
</html>
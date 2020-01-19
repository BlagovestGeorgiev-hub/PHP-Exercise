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
$name=$_POST['name'];
$price=$_POST['price'];
$year=$_POST['year'];
$perc=$_POST['perc'];
$yearN=date("Y");
$percY=$yearN-$year;
echo $yearN;
?>

<h2>Резултати</h2>
<table border=4 bordercolor=black cellspacing=0 cellpading=9 width=50%>
<tr><th>Име на превозното средство<th><?php echo $name; ?></tr>
<tr><th>Стойност при закупуване<th><?php echo $price. "лв."; ?></tr>
<tr><th>Година на закупуване<th><?php echo $year . "г."; ?></tr>
<tr><th>% на амортизация<th><?php echo $perc . "%" ;?></tr>
<tr><th>Стойност след амортизация<th><?php 
if($percY>=5)
	{
		$x=$price/100;
		$y=$x*$perc;
		$price-=$y;
		echo $price . "лв.";
	}else{echo $price . "лв.";}
?></tr>



</pre>
</b>
</big>
</div>
</body>
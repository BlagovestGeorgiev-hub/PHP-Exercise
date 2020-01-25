<html>
<head>
<meta http-equiv="constant-type"
	content="text/html; charset=utf-8">
<title>Software products</title>
</head>
<body bgcolor=lightgreen>
<h2>Purchased software products</h2><p>
<?php
$name=$_POST["name"];
$price=0;
echo "Your name: " . nl2br("$name \n");
if(isset ($_POST["C1"]))
{
	$c1=true;
	$wh="Warehouse for 100 lv.";
	$price+=100;
	echo nl2br("$wh \n");
}else{$c1=false;}

if(isset ($_POST["C2"]))
{
	$c2=true;
	$acc="Accounting for 200 lv.";
	$price+=200;
	echo nl2br("$acc \n");
}else{$c2=false;}

if(isset ($_POST["C3"]))
{
	$c3=true;
	$let="Outlet for 250 lv.";
	$price+=250;
	echo nl2br("$let \n");
}else{$c3=false;}

if(($c1&&$c2==true) || ($c1&&$c3==true) || ($c2&&$c3==true))
{
	$perc=$price/100;
	$price-=$perc*10;
	echo "The payment amount is: " . $price . " lv. whit 10% off.";
}	else	{echo "The payment amount is: " . $price . " lv.";}








?>
</body>
</html>
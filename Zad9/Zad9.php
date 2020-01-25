<html>
<head>
<meta http-equiv="constant-type"
	content="text/html; charset=utf-8">
<title>Заплати</title>
</head>
<body bgcolor=lightgreen>
<h2>Заплати</h2><p>
<?php
$name=$_POST["name"];
$price=0;
$perc=0;
if (isset ($_POST["C1"]))
{
	$p=$_POST["C1"];
	//echo $p;
}
if($p=="a1")
{$price+=1000;$jobN="Ръководител";}elseif($p=="a2")
	{$price+=600;$jobN="Сътрудник";}elseif($p=="a3")
		{$price+=800;$jobN="Специалист";}elseif($p=="a4")
			{$price+=500;$jobN="Други";}
	//	echo nl2br("$price \n");
		
if (isset ($_POST["C2"]))
{
	$s=$_POST["C2"];
	//echo $s;
}
if($s=="b1")
{$perc+=4;$years="0-5 години";}elseif($s=="b2")
	{$perc+=7;$years="6-12 години";}elseif($s=="b3")
		{$perc+=11;$years="13-22 години";}elseif($s=="b4")
			{$perc+=16;$years="Над 22 години";}
	//	echo nl2br("$perc \n");
	
$payplus=$price/100;
$takeout=$payplus;
$payplus*=$perc;
$payplus+=$price;
$takeout=$payplus/100;
$takeout*=15;
$finalpay=$payplus-$takeout;
	
echo nl2br("Въведеното име е: $name\n");
echo nl2br("Категорията е $jobN по щат: $price лв.\n");
echo nl2br("Надбавката за $years е: $perc %\n");
echo nl2br("Сумата от категория И стаж е $payplus лв. \n");
echo nl2br("Удръжката от 10 % плосък данък и 5% здравно осигоряване с: $takeout лв.\n");
echo nl2br("Крайната заплата за получаване е: $finalpay лв.\n");
?>
</body>
</html>
<html>
<head>
<meta http-equiv="content-type" 
	content="text/html; charset=utf-8">
<title>Магазин "Успех" Пловдив </title>
<script language ="javascript">
document.write(" "+Date())
</script>
</head>
<body bgcolor=lightblue>
<h2>Стока от магазин "Успех"</h2>
<big><b>
<pre>
<?php
$ime=$-POST['ime'];
$kolko=$-POST['kolko'];
$obshto=$-POST['obshto'];
$dds=$-POST['dds'];
$ez=$dds/($kol*(1+$dds/100));
echo"ed. cena= ".$ez;

?>

<table border=4 bordercolor=black cellspacing=0 cellpading=9 width=50%>
<caption> Izchislqvane na edinichna cena na stoka bez DDS</caption>
<tr><th>Ime na stokata <th><?php echo $ime; ?> </tr>
<tr><th>Kolichestvo <th><?php echo $kolko; ?> </tr>
<tr><th>Obshta suma s DDS <th><?php echo $obshto; ?> </tr>
<tr><th>DDS v % <th><?php echo $dds; ?> </tr>
<tr><th>Edinichna cena bez DDS <th><?php echo $ez; ?> </tr>
</table></pre></b></big></body></html>


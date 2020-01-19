<head>
	<head>
<meta http-equiv="content-type"
	content="text/html; charset=utf-8">
		<title>
			Резултат
		</title>
<script language="javascript">
document.write(" "+Date())
</script>
	</head>
		<body bgcolor=lightblue>
<h2>Стока от магазин "Успех"</h2>

<big><pre><b>

<?php 
$ime=$_POST['ime'];
$kolko=$_POST['kolko'];
$obshto=$_POST['obshto'];
$dds=$_POST['dds'];
//$ez=$dds/($kolko*(1+$dds/100));
$ez=($obshto/$kolko)*((100-$dds)/100);
echo"ed. cena= ".$ez;
?>

<table border=4 bordercolor=black cellspacing=0 cellpading=9 width=50%>
<caption><big><b> Izchislqvane na edinichna cena na stoka bez DDS</b></big></caption>
<tr><th>Ime na stokata <th><?php echo $ime; ?> </tr>
<tr><th>Kolichestvo <th><?php echo $kolko; ?> </tr>
<tr><th>Obshta suma s DDS <th><?php echo $obshto; ?> </tr>
<tr><th>DDS v % <th><?php echo $dds; ?> </tr>
<tr><th>Edinichna cena bez DDS <th><?php echo $ez; ?> </tr>
</table>

</big></pre></b>



			
		</body>

</head>
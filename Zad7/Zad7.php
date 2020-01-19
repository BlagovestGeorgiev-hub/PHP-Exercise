<html>
<head>
<meta http-equiv="content-type"
	content="text/html; charset=utf-8">
<title>Dostavka </title>
</head>
<body bgcolor=lightblue>
<h3>Dostavka</h3>
<?php 
$name1=$_POST["name1"];
$n=$_POST["n"];
$m=$_POST["m"];
$name2=$_POST["name2"];
$email=$_POST["email"];
?>

<table border=4 bordercolor=black cellspacing=0 cellpading=9 >
<caption> Nachalni danni </caption>
<tr><th>Ime na prodykta<th><?php echo $name1; ?></tr>
<tr><th>Nalichen broi materiali<th><?php echo $n; ?></tr>
<tr><th>Minimalen broi materiali<th><?php echo $m; ?></tr>
<tr><th>Ime na dostavchika<th><?php echo $name2; ?></tr>
<tr><th>E-mail na dostavchika<th><?php echo $email; ?></tr>
</table>
<?php 
if($n<$m)
{
	$k=$m-$n;
	echo "ZAQVKA ZA DOSTAVKA NA MATERIALI ZA " . $name1 . " DO:";
	echo "<form>";
	echo "Ime na dostavchika: <input type='text' name='" . $name2 . "' value='" . $name2 . "'> <p>";
	echo "E-mail na dostavchika: <input type='text' name='" . $email . "' value='" . $email . "'> <p>";
	echo "Broi za dostavka: <input type='text' name='" . $k . "' value='" . $k . "'> <p>";
	echo "</form>";
}else echo "Nqma nyjda ot dostavka";

?>
</body>
</html>
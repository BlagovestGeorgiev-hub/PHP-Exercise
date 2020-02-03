<html>
<head>
<meta http-equiv="constant-type"
	content="text/html"; charset="utf-8">
<title>Резултат</title>
</head>
<body bgcolor=lightgreen>
<h2>Избор на курсове</h2><p>
<?php
$name=$_POST["name"];
$way=$_POST["way"];
if(isset ($_POST["study"]))
{$study=$_POST["study[]"];}
echo $name;
echo $way;
$length=count($study);
for($a=0;$a<$length;$a++)
{
	echo $study;
}


?>
</body>
</html>
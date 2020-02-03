<html>
<head>
<meta http-equiv="constant-type"
	content="text/html"; charset="utf-8">
<title>Избор на курсове</title>
</head>
<body bgcolor=lightgreen>
<h2>Избор на курсове</h2><p>
<?php
$name=$_POST["name"];
$a=$_POST["a"];
//echo $a;
$aForm=0;

echo nl2br("Въведеното име е ".$name."\r\n\r\n");
//echo "Формата на обучение е "

switch($a){
	case 0:
	//echo "Формата на обучение е Редовно обучение";
	$aForm="Редовно обучение";
	break;
	case 1:
	//echo "Формата на обучение е Задочно обучение";
	$aForm="Задочно обучение";
	break;
	case 2:
	//echo "Формата на обучение е Дистанционно обучение";
	$aForm="Дистанционно обучение";
	break;		
}	
 echo "Формата на обучение е ".$aForm;
	
/*	if ($a == 0) {
    echo "Формата на обучение е Редовно обучение";
} elseif ($a == 1) {
    echo "Формата на обучение е Задочно обучение";
} elseif ($a == 2) {
    echo "Формата на обучение е Дистанционно обучение";
}	*/

$b=$_POST["b"];
$lang=0;
$length=count($b);
echo "<p>Избрани курсове: <br>";
for ($i=0;$i<$length;$i++){
	echo ($b[$i] . "; ");
	
	if($b[$i]=="PHP"){
		$lang+=200;
	}elseif($b[$i]=="HTML"){$lang+=100;}
	 elseif($b[$i]=="JavaScript"){$lang+=150;}
	 elseif($b[$i]=="Java"){$lang+=250;}
	}
	echo "<p> Сумата за плащане е: ".$lang ." лева.";
	

/*for ($i=0;$i<$length;$i++){
	switch( $s2[$i])
	{
		case "PHP": 
		$s+=200; 
		break;
		
		case "HTML": 
		$s+=100; 
		break;
		
		case "JavaScript": 
		$s+=150; 
		break;
		
		case "Java": 
		$s+=250; 
		break;
	}
	echo "<p> Symata za plashtane e " . $s . " leva";
}	*/



?>
</body>
</html>
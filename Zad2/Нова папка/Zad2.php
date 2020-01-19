<html>
<head>
<meta http-equiv="content-type" 
	content="text/html; charset=utf-8">
<title>Тримесечни печалби </title>
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
$first=$_POST['first'];
$second=$_POST['second'];
$third=$_POST['third'];
$fourth=$_POST['fourth'];
$arr=array(0=>"$first",1=>"$second",2=>"$third",3=>"$fourth");
$arrlength = count($arr);
$arr2=$arr;
$index=$arr;
//$ez=$dds/($kolko*(1+$dds/100));
	//$ez=($obshto/$kolko)*((100-$dds)/100);
//echo"ed. cena= ".$ez;


?>

<table border=4 bordercolor=black cellspacing=0 cellpading=9 width=50%>

<tr><th>Стойносто по тримесечия: <th><?php 
for($a=0; $a < $arrlength-1; $a++) {
    echo $arr[$a].", ";
}
echo $arr[$arrlength-1]."."; ?> </tr>

<tr><th>Минимална стойност: <th><?php echo $kolko; ?> </tr>

<tr><th>Максимална стойност: <th><?php echo $obshto; ?> </tr>

<tr><th>Средна стойност: <th><?php echo $dds; ?> </tr>

<tr><th>След сортиране: <th><?php sort($arr2);

for($a=0;$a<$arrlength-1;$a++)
{
	echo $arr2[$a].", ";
} 

echo $arr2[$arrlength-1].".";
?> </tr>

<tr><th>Сортиране по тримесечия: <th><?php

$length = count($arr);
for($a=0; $a<$length; $a++)
{
	echo $arr[$a]." ";
} 

 


/*
$key=array_search("first",$arr);

if($arr[$a]==$arr2[$a])
	{
		foreach($arr as $key => $value){
	echo $key+1 . ' => ' . $value . ", " ;
	}
	}
*/


	
	
	
/*for($a=0;$a<$arrlength;$a++)
{
	
	//echo $arr2[$a];
}*/
	
/*
//sort($arr);

/*for($a=0;$a<$arrlength;$a++)
{
		//echo $arr[$b].", ";
	echo $b.", ";
}*/  //echo $arrlength.".";   
/*
	
	//echo $a.", ";
};
*/
?>
</tr>
</table>

</div>
</form>
</pre>
</b>
</big>
</body>
</html>

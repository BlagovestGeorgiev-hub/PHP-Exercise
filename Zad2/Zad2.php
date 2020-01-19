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
$arr=array(
	array(0, $first),
	array(1, $second),
	array(2, $third),
	array(3, $fourth)
);
$length = count($arr);

?>
<h2>Резултати</h2>
<table border=4 bordercolor=black cellspacing=0 cellpading=9 width=50%>

<tr><th>Стойносто по тримесечия: <th><?php 
for($a=0; $a < $length-1; $a++) {
    echo $arr[$a][1].", ";
}
echo ($arr[$length-1])[1]."."; ?> </tr>

<tr><th>Минимална стойност: <th><?php 

	 for ($a = 0; $a < $length; $a++) {
  for ($b = 0; $b < $length; $b++) {
   if (($arr[$a])[1] < ($arr[$b])[1]) {
    $tmp = $arr[$a];
    $arr[$a] = $arr[$b];
    $arr[$b] = $tmp;
   }
  }
 }

 echo ($arr[0])[1] . " с индекс => " . (1+(($arr[0])[0])) ;
 ?> </tr>

<tr><th>Максимална стойност: <th><?php 

 echo ($arr[$length-1])[1] . " с индекс => " . (1+(($arr[$length-1])[0])) ;
 ?> </tr>

<tr><th>Средна стойност: <th><?php 
 $sum=0;
	for($a=0;$a<$length;$a++)
	{
		$sum+=$arr[$a][1];
	}
	echo $sum/$length;

 ?> </tr>

<tr><th>След сортиране: <th><?php

for($a=0;$a<$length-1;$a++)
{
	echo ($arr[$a])[1].", ";
} 
echo ($arr[$length-1])[1].".";
?> </tr>

<tr><th>Сортиране по тримесечия: <th><?php
 
for($a=0;$a<$length-1;$a++)
{
	echo (1+($arr[$a])[0]).", ";
} 
echo (1+(($arr[$length-1])[0]))."."

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

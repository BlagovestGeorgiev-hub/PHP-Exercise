<html>
<head>
<meta http-equiv="content-type" 
	content="text/html; charset=utf-8">
<title>Poshtenska banka Plovdiv</title>
</head>
<body>
<h3>Poshtenska banka Plovdiv</h3>
<?php
$suma=$_POST["suma"];
if($suma<100)
{
	echo "Minimalna suma 100lv.!!!";
}else{
	$per=$_POST["per"];
	if(($per!="3")&&($per!="6"))
	{
		echo "Periodut trqbva da e bude 3 ili 6!!!";
	}else{
		switch ($per)
		{
			case "3": if($suma <= 1000) $proz=1.53;
				elseif($suma <= 3000) $proz=2.22;
				else $proz=3.15; break;
				
			case "6": if($suma <= 1000) $proz=2.54;
				elseif($suma <= 3000) $proz=3.33;
				else $proz=4.35; break;	
		}
		$z=$suma*$proz*$per/1200;
		$z=round($z,2);
		echo "Lihvata pri nachalna syma ". $suma . " leva i " . "perid ot ". $per. " meseca e ". $z. " leva";
	}
}
?>
</body>
</html>
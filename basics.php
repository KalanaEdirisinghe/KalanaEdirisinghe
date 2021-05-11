<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<?php 
echo "<h1> mike's site </h1>";
echo "<hr>";
//varibale declare
	$characterName="kalana";
	$characterAge=24;

//echo= give output.
	echo "There once was man named $characterName <br>";
	echo "He was $characterAge years old<br>";
	$characterName="Haritha";
	echo "He really likked the name $characterName <br>";
	echo "but didn't like being $characterAge <br>";
echo "<hr>";
//datatypes
	$phrase="to be or not to be ";
	$age=24;
	$gpa=3.7;
	$isMale=true;
	echo "$phrase<br>";
echo "<hr>";
//working with Strings
	$phrase="where are you going?<br>";
	echo "$phrase";
	echo strtolower($phrase);
	echo strtoupper($phrase);
	echo strlen($phrase);// give the length.
	echo "<br>";
	echo $phrase[2];//this indexing.
	echo "<br>";
	 $phrase[2]="Z";

	 echo "$phrase";

	 echo str_replace("where", "how",$phrase);	

	 echo substr($phrase,8,3); 
//number handling
	 
	 echo -40.25;
	 echo "<br>";
	 echo 10.36*2;
	 echo "<br>";
	 echo 10%3;

	 $num=10;
	 $num++;
	 //   $num--;
	 
	 $num=$num+25;
	 echo $num;

	 //mathOperations
	 echo abs(-50);
	 echo "<br>";
	 echo pow(2,3);
	 echo "<br>";
	 echo sqrt(81);
	 echo "<br>";
	 echo max(5,9);
	 echo "<br>";
	 echo min(5,9);
	 echo "<br>";
	 echo round(4.6);
	 echo "<br>";
	 echo ceil(5.1);
	 echo "<br>";
	 echo floor(6.4);
				




	

 ?>

</body>
</html>
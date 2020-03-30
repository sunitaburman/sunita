<!DOCTYPE HTML>
<html>
<head>
<title>view page</title>
</head>
<body>
<?php
function addfive(&$num){
	$num +=5;
}
function addsix(&$num){
	$num +=6;
}
$orignum=10;
addfive($orignum);
echo "original value is $orignum</br>";
addsix($orignum);
echo "original value is $orignum</br>";

?> 
</body>
</html>
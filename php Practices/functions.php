<!DOCTYPE HTML>
<html>
<head>
<title>view page</title>
</head>
<body>
<?php
function addfunction($num1,$num2){//function name and they are passing input parameter passing 
	$sum = $num1+$num2;//block of code 
	echo "sum of two numbers is : $sum</br>";
}
addfunction(10,20);//calling function using function name and return values to get the output user defined functions
function nightclub($age){
if($age > 21)
{
	echo "true";
}
else{
	echo "false";
}
}
nightclub(22);
?> 
</body>
</html>
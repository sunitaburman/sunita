<?php
$color ="red";
if($color =="red")
{
	echo "the given colr is true </br>";
}
else {
	echo "the given color is false </br>";
}

$mobiles = "one plus";
if($mobiles =="redmi")
{
	echo "the given mobiles is redmi </br>";
}
elseif($mobiles == "lava")
{
echo "the given mobiles is not a redmi </br>";	
}
else {
	echo "default mobiles will be there </br>";
}

$calender = date("H");

if($calender < "5"){
	echo "early morning";
}
elseif($calender > "10")
{
	echo "good afternoon";
}
else {
	echo " have a default day";
}

$products = "mobile";

switch($products)
{
	case "laptop":
	echo "the product is laptop </br>";
	break;
	
	case "iphone":
	echo "the product is iphone </br>";
	break;
	
	case "hairdrier":
	echo "the product is hairdrier </br>";
	break;
	
	case "trimmer":
	echo "the product is trimmer </br>";
	break;
	
	case "makeupkit":
	echo "the product is makeupkit </br>";
	break;
	
	case "mobile":
	echo "the product is mobile </br>";
	break;
	
	default : 
	
	echo " your product is default</br>";
}
?>	
	
	
	
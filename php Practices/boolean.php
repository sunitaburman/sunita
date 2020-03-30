<?php
$my_shopping="";
if($my_shopping){
	echo "Evaluates to true.</br>";
}
else{
	echo "evaluates to false.</br>";
}

$new_string="shruthi";
if(!$new_string)
{
	echo "Evaluates to true.</br>";
}
else{
	echo "evaluates to false.</br>";
}

$shopping_no =13;
if($shopping_no > 0)
	{
	echo "Evaluates to true.</br>";
}
else{
	echo "evaluates to false.</br>";
}

$height=100;
$width=50;//!=0 means some values is there ==0 is false no values ==50 true > 0 true some values is there
if($width >0)
{
	echo "the width needs to be a non-zero number</br>";
}
else{
	echo "the width needs to be a zero number</br>";
}
?>
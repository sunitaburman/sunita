<!DOCTYPE HTML>
<html>
<head>
<title>hello world</title>
</head>
<body>
<?php

$result = 10; //global scope
function sunita()//it will generate error
{
echo "<p>variable result inside function is : $result</p>";
}
sunita();
echo "<p>variable result outside function is : $result</p>";

function loginform(){
$login="1234";	//local scope

echo "<p> user is a valid user for php session is :$login</p>";
}
loginform();
echo "<p> user is a not valid user for php session is :$login</p>";

 ?>
 
</body>
</html>

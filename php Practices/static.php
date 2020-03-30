<!DOCTYPE HTML>
<html>
<head>
<title>hello world</title>
</head>
<body>
<?php
function shopping()
{
	static $productid = 6544545;
	echo $productid;
	$productid++;//increment values.
	
}
shopping();
echo "<br>";
shopping();
echo "<br>";
shopping();
?>
</body>
</html>

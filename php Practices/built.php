<!DOCTYPE HTML>
<html>
<head>
<title>view page</title>
</head>
<body>
<?php
if(is_numeric("hi"))
{
	echo "true";
}
else
{
	echo "false";
}
if(checkdate(02,29,2009))
{
echo "true";
}
{
	echo "false";
}
$date=date_create("2013-05-22");
date_time_set($date,13,23);
echo date_format($date,"Y-m-d H:i:s");
?>
</body>
</html>
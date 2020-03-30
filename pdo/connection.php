<?php
class Connection
{
public static function make($config1) {
$servername = "localhost";
$username = 'root';
$password = "";
$dbname = "arun1";

try {

/* return new PDO (
$config1['connection'] . ';dbname=' . $config1['name'],
$config1['username'],
$config1['password'],
$config1['options']
);
 */
  $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
 $conn->setAttribute(PDO :: ATTR_ERRMODE, PDO :: ERRMODE_EXCEPTION);
 echo "connected successfully";
}
catch(PDOEXCEPTION $e){

echo "Error : ". $e->getMessage();
//die($e);
}
}
}	
?>
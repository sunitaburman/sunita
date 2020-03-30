<?php
class Connection
{
public static function make(){	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "arun1";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "connected succesfully";
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
}
}
?>
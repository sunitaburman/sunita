<?php 
$servername ="localhost";
$username ="root";
$password = "";
try {
$conn = new PDO("mysql: host=$servername;dbname=arun1",$username,$password);
$conn -> setAttribute(PDO :: ATTR_ERRMODE,PDO :: ERRMODE_EXCEPTION);
echo "connected successfully";
}
catch (PDOException $e)
{
	echo "connection failed : ".$e->getMessage();
}
try{
	$stmt = $conn->prepare("INSERT INTO arun1 (firstname, lastname, email)
    VALUES (:firstname, :lastname, :email)");//preapare means it will start the insert query 
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);//bind param means combining column values in single row.
    $stmt->bindParam(':email', $email);// to join values in one table columns so that wy they are using bind param 

    // insert a row
    $firstname = "John";
    $lastname = "Doe";
    $email = "john@example.com";
    $stmt->execute();

    // insert another row
    $firstname = "Mary";
    $lastname = "Moe";
    $email = "mary@example.com";
    $stmt->execute();//execute query

    // insert another row
    $firstname = "Julie";
    $lastname = "Dooley";
    $email = "julie@example.com";
    $stmt->execute();

    echo "New records created successfully";
	}
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();//to display sql error message //getMessage is for to return the rror from pdo exception.
    }
$conn = null;//closing the connection.
?>

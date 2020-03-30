<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=arun1", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
     if(isset($_POST['submit'])){
     $firstname = $_POST['firstname'];
     $lastname = $_POST['lastname'];
     $email = $_POST['email'];
     $password = md5($_POST['password']);

    $sql_insert = "INSERT INTO arun1(firstname,lastname,email,password) 
    values('$firstname','$lastname','$email','$password')";
    if($conn->query($sql_insert))
    {
        echo "you are registered successfully";
    }
    else {
        echo "please try again later";
    }
    
}

    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
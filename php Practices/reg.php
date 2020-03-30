<!doctype html>  
<html>  
<head>  
<title>Register</title>  
    <style>   
        body{  
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-color: azure ;  
    color: palevioletred;  
    font-family: verdana;  
    font-size: 100%  
      
        }  
            h1 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}  
         h2 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}</style>  
</head>  
<body>  
     
    <center><h1>CREATE REGISTRATION AND LOGIN FORM USING PHP AND MYSQL</h1></center>  
   <p><a href="reg.php">Register</a> | <a href="login.php">Login</a></p>  
    <center><h2>Registration Form</h2></center>  
<form action="" method="POST">  
    <legend>  
    <fieldset>  
          
Username: <input type="text" name="firstname"><br />  
Password: <input type="text" name="lastname"><br />   
<input type="submit" value="Register" name="submit" />  
              
        </fieldset>  
        </legend>  
</form>  
<?php  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "arun1";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
	echo "database connected successfully";
}
if(isset($_POST["submit"])){  
if(!empty($_POST['firstname']) && !empty($_POST['lastname'])) {  
    $firstname=$_POST['firstname'];  
    $lastname=$_POST['lastname'];
    $query=mysqli_query("SELECT * FROM arun1 WHERE firstname='".$firstname."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows==0)  
    {  	
    $sql="INSERT INTO arun1(firstname,lastname) VALUES('$firstname','$lastname')";  
    $result=mysqli_query($sql);  
        if($result){  
    echo "Account Successfully Created";  
    } else {  
    echo "Failure!";  
    }  
  
    } else {  
    echo "That username already exists! Please try again with another.";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}
$conn->close();
?>  
</body>  
</html>   

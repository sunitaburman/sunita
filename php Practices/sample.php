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
if(array_key_exists('firstname',$_POST) && array_key_exists('lastname',$_POST))
{
	if($_POST['firstname'] == '')
	{
		echo "<p> Firstname is required </p>";
	}
	else if ($_POST['lastname'] == '')
	{
		echo "<p> lastname is required </p>";
	}
}
/* else{
	$query = "select `id` from `arun1` where firstname = '".mysqli_real_escape_string($conn,$_POST['firstname'])."'";
	
	$result = mysqli_query($conn,$query);
	
	if(mysqli_num_rows($result) > 0){
		
		echo "firstname is already registered from database";
}
 */
 else{
	$sql="INSERT INTO arun1(firstname,lastname) VALUES('$firstname','$lastname')";
	if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}
}
	$conn->close();
?>
<form action="" method="POST">  
Username: <input type="text" name="firstname" id="firstname"><br />  
Password: <input type="text" name="lastname" id="lastname"><br />   
<input type="submit" value="Login" name="submit" />  
</form>  

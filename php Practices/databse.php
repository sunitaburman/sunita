<?php
$servername = "localhost";
$username ="root";
$password = "";
$dbname = "akilan1";
//create connection 
$conn = new mysqli($servername,$username,$password,$dbname);

//chcek connection
if($conn -> connect_error)
{
	die("connection failed:".$conn -> connect_error);
}
else {
	echo "connected successfully";
}

//create database
/* $sql = "create database akilan1";
if($conn -> query($sql) === true)
{
	echo "database created successfully";
}
else{
	echo " error while creating databse : ".$conn->error;
	
}
 */	
 
 //create table 
 
 /* $sql = "create table makeupkit (id int,firstname varchar(255))";
 if($conn -> query($sql) === true)
{
	echo "table created successfully";
}
else{
	echo " error while creating table : ".$conn->error;
	
} */

//insertion table 
$sql = "insert into makeupkit(id ,firstname) values('102','nithin')";
 if($conn -> query($sql) === true)
{
	echo "Records inserted successfully";
}
else{
	echo " error while inserting records : ".$conn->error;
	
}

//selection records
$sql = "select id , firstname from makeupkit";
$result = $conn->query($sql);
 if($result -> num_rows > 0){
	  echo "<table><tr><th>ID</th>
	 <th>FIRSTNAME</th></tr>";
	 while($row = $result ->fetch_assoc()){
		 echo "</tr>
		 <td>".$row["id"]."</td>
		 <td>".$row["firstname"]."</td></tr>";
	 }
	 echo  "</table>";
 }
 else {
	 echo "0 results";
 }
 $conn -> close();
		 
?>
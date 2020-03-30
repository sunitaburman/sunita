<?php 
$laptop = array("hp","dell","sony");// array creation and storing array list of items
foreach($laptop as $lap){
echo " $lap </br>";//this is for getting the values of array items.
}

$mobile[0]= "redmi";// array creation and storing array list of items
$mobile[1]= "vivo";
$mobile[2]= "one plus";
$mobile[3]= "iphone";
$mobile[4]= "oppo";
$mobile[5]= "samsung";
$mobile[6]= "moto";
foreach($mobile as $mob)//this is for getting the values of array items.
{
echo " $mob </br>";	
}

$task = array("title" => "singing","due date" =>"12-12-2012","assisgnedto" => "sunitha","status" => "inprogress");
foreach($task as $task1)
{
	echo "$task1 </br>";
}	

$detail = [
"title" => "web developer",
"due date" =>"22-02-2019",
"assisgnedto" => "rudra",
"status" => "completed"
];

print_r($detail);
?>
<?php
$res1 = "user is waiting";//variable declreation
$res2 = "login form is generated ";
$x2 = 50;
$x3 = 40;
print "<h2>" .$res1 . "</h2>";//to display a data but not in this page
print "user one at" .$res2 . " 
<br>"; //to display a data but not in this page
print $x2 + $x3; //to display a data but not in this page
require 'populate.php'; // it will show the captured data in this page

?>
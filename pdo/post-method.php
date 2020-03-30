<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of PHP POST method</title>
</head>
<body>
<?php
if(isset($_GET["name"]) && isset($_GET["pwd"])){
    echo "<p> " . $_GET["name"] . "</p>";
    echo "<p> " . $_GET["pwd"] . "</p>";
}
?>
<form method="get" action="">
    <label for="inputName">UserName:</label>
    <input type="text" name="name" id="name">
    <label for="inputName">Password:</label>
    <input type="password" name="pwd" id="pwd">
    <input type="submit" value="Submit">
</form>
</body>
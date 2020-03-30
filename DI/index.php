<?php

require 'database.php';

require 'user.php';

$user = new user(new database);

$user->create(['username' =>'sunita']);
?>
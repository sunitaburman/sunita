<?php

$query = require 'bootstrap.php';

$tasks = $query->selectAll('firstname');

require 'index.view.php';
 
?>
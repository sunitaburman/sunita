<?php
require 'con1.php';
require 'function.php';
require 'query.php';
return new query(
Connection :: make()
);
?>


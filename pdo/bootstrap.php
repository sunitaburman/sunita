<?php
require 'connection.php';
require 'fuction.php';
require 'query.php';
return new query(
Connection :: make()
);
?>
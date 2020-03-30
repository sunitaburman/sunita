<?php

//namespace second;

include 'fns.php';

include 'sns.php';

use second\A as NewA;
//$object = new second\A; // qualified  class name

$object = new NewA;//A

echo "</br>";

$object = new A; // fully qualified class name
?>
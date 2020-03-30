<?php

$fan = array(
array (

	'id' => 567,
	'name' => 'khatan',
	'place' => 'pune',
),

array (

	'id' => 102,
	'name' => 'usha',
	'place' => 'chennai',
),

array (

	'id' => 224,
	'name' => 'chase',
	'place' => 'bengali',
)
);

$Rotate = array_column($fan,'place');
print_r($Rotate);
?>

<?php

function finding($logical)
{
	if ($logical == "maths")
	{
		return "Algebra";
	}
	return $logical;
}
$teacher =array("numerical","analytical","Algebra");

print_r(array_map("finding", $teacher));
?>


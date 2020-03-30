<?php

function Even($array)
{

	if($array % 2 == 0)
	
		return true;
	else 
		return false;
	
}
	$array = array(12,0,0,18,27,0,46);
	print_r(array_filter($array,"Even"));//even is value and array is key

?>
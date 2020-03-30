<?php
class Royalenfield{
public $name;
public $color;
public function
__construct($name,$color){
	$this-> name = $name;
	$this-> color = $color;
}
public function oldspeed(){
	echo "the bike is fathers {$this->name} and the bike color is {$this->color}.";
}
}
//royalenfield is inherited from royal1

class royals extends Royalenfield{
	public function bikespeed()
	{
		echo "MY new bike is going very speedly";
}
}
$royals = new royals("royalclassic350","black");
$royals->bikespeed();
$royals->oldspeed();
?>
<?php 
abstract class car {
public $cname;
public function 
__construct($cname){
$this-> cname = $cname;
}
abstract public function  intro(): string;
}
class Audi extends Car {
	public function  intro() : string{
	return "choose good quality $this->cname <br/>";
}
}
class safari extends Car {
	public function  intro() : string{
	return "choose french management $this->cname <br/>";
}
}

$safari = new safari("safari");
echo $safari->intro();

$Audi = new Audi("Audi");
echo $Audi->intro();
?>

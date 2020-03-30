<?php 
class Car{
//properties
public $name;
public $color;
public $model;
//methods
function set_name($name){
	$this-> name = $name;//this keyword it will show error as undefined varibale or method name.
}
function get_name(){
	return $this->name;
}
function set_color($color){
	$this-> color = $color;
}
function get_color(){
	return $this->color;	
}
function set_model($model){ // setting or storing the model in storing device
	$this-> model = $model;
}
function get_model(){
	return $this->model;	//returning the variable or methos of model
}
}
$car1 = new Car(); // creating an object  as new
$car1 -> set_name('hyndai');//
$car1 -> set_color('red');
$car1 -> set_model('1995');
echo "Name:" .$car1->get_name();//to print the values so that they are using this get function in here
echo "<br>";
echo "color:" .$car1->get_color();
echo "<br>";
echo "Model:" . $car1 -> get_model();
?>
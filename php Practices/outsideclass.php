<?php 
class Car{
//properties
public $name;
}
$car1 = new Car();
$car1 -> name = "santro";
echo "$car1->name";//outside the class(by directly we can change the properties value)
?>
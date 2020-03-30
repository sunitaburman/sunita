<?php
//abstract class parent class 
abstract class Bank{
	public $accountno;
	public function
	__construct($accountno){
		$this-> accountno =  $accountno;
	}
	abstract public function customer() : string;
}
//child class 
class customer1 extends bank {
	public function customer() : string {
		return "the customer1 has created bank account succcessfully $this->accountno";
	}
}
class customer2 extends bank {
	public function customer() : string {
		return "the customer2 has created bank account succcessfully $this->accountno";
		
	}
}
class customer3 extends bank {
	public function customer() : string {
		return "the customer3 has created bank account succcessfully $this->accountno";
		
	}
}

//creating an objects 
$customer3 = new customer3("7786767676");
echo $customer3->customer();
echo "<br>";

$customer2 = new customer2("23476898444");
echo $customer2->customer();
echo "<br>";

$customer1 = new customer1("896543231");
echo $customer1->customer();
echo "<br>";
?>

<?php

class Order {

	protected $status;

	public function isPending(){

		return $this -> status =='pending';
	}
	}

	class ORDER1 extends Order {

		public function canBeCancelled(){
			if($this->status == 'PENDING'){
            echo "true";
             }
            else {
            	echo "false";
            }
			
           if($this->status == 'IN_PROGRESS'){

            echo "true";
             }
            else {
            	echo "false";
            }
			

			if($this->status == 'DISPATCHED'){
            
            echo "true";
            }
            else {
            	echo "false";
            }
			
              
              if($this->status == 'CANCELLED'){
            
            echo "true";
        }
            else {
            	echo "false";
            }
			
	}
}

$order = new ORDER1();
$order ->canBeCancelled();
$order ->isPending();
?>
<?php 
class Author {
	private $email;
	public function
	__construct($email){
		$this->email = $email;
	}
	public function getEmail(){
		return $this->email;
	}
}
	class Book extends Author {
		private $Aprice;
		private $Aname;
		public function
	__construct($Aname,$Aprice){
		$this->Aname = $Aname;
		$this->Aprice = $Aprice;
	}
	public function setPrice($Aprice){
		$this->Aprice = $Aprice;
	}
	
	public function getPrice($Aprice){
		$this->Aprice = $Aprice;
	}
   public function setaname($Aname){
		$this->Aname = $Aname;
	}
	public function getaname($Aname){
		$this->Aname = $Aname;
	}
	}	
	$book = new Book('aerun','10000.00');
	echo '$book->setaname';
	?>
	
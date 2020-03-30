<?php
//abstract class parent class 
abstract class television{
	public $advertisement;
	public function
	__construct($advertisement){
		$this-> advertisement =  $advertisement;
	}
	abstract public function promotion() : string;
}
class newspaper extends television {
	public function promotion() : string {
		return "the newspaper has been given information about $this->advertisement";
	}
}
class socialmedia extends television {
	public function promotion() : string {
		return "the socialmedia has been given information about $this->advertisement";
	}
}

class pampletes extends television {
	public function promotion() : string {
		return "the pampletes has been given information about $this->advertisement";
	}
}
//creating an objects 
$pampletes = new pampletes("this is a good led tv");
echo $pampletes->promotion();
echo "<br>";

$socialmedia = new socialmedia("here we are seeing the latest led 42 inch television");
echo $socialmedia->promotion();
echo "<br>";

$newspaper = new newspaper("we are advertising tv 33 inch");
echo $newspaper->promotion();
echo "<br>";
?>

<?php
class govtproof {
	private $Adhorno;
	private $PanNo;
	public function updatepan($Adhorno,$PanNo)
	{
		//write function
		
		echo ("function to update pan card details '".$PanNo."' for Adhor users " .$Adhorno);
		echo "<br>";
	}
	//check account balance
	public function accbal($Adhorno){
		//write function
		if($Adhorno == "50000.00"){
		echo ("function to check account balance for Adhor users " .$Adhorno);
	echo "<br>";
		}
	else {
		echo "no Usrs for this Adhorno";
	}
	}
}
$g1 = new govtproof();
$g1 -> updatepan('7676766866','23456789');
$g1 -> accbal('50000.00');

?>

<?php
class Whatsapp{

public $status;
public $audiocall;
public function
__construct($status,$audiocall){
	$this->status = $status;
	$this->audiocall=$audiocall;
}
public function oldwhatsapp(){
	echo "the old whatsapp features is {$this->status} and the old features is {$this->audiocall}.";
}
}
class Update_Whatsapp extends whatsapp {
	public $videocall;
	public $statuschecker;
	public function
	__construct($videocall,$statuschecker){
	$this->videocall = $videocall;
	$this->statuschecker=$statuschecker;
}
public function newwhatsapp(){
	echo "the new whatsapp features is {$this->videocall} and video call features is {$this->statuschecker}.";
}
}
$Update_Whatsapp = new Update_Whatsapp("i am alone","call me");
$Update_Whatsapp->newwhatsapp();
?>
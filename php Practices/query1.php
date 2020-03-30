<?php
class query1{
	protected $pdo;
	public  function 
__construct($pdo)

{
	$this->pdo = $pdo;
}

public function make1(){
$stmt = $this->pdo->prepare("SELECT id, firstname, lastname FROM arun1");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
}
}
	?>

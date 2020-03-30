<?php
class query {
	
protected $pdo;

public  function 
__construct($pdo)

{
	$this->pdo = $pdo;
}
public function selectAll($arun,$class)
{
try {
    $statement = $this->pdo->prepare("select * from $arun1");
	$statement -> execute();
    // set the resulting array to associative
	
    return $statement->fetchAll(PDO :: FECTH_CLASS,$class);
}
catch (Exception $e)
{
	return $e->getMessage();
}

}
}
?>
<?php 
class QueryBuilder {

protected $pdo;

public  function 
__construct($pdo)

{
	this->pdo = $pdo;
}
public function selectAll($table)
{
	$statement = $this - > pdo -> prepare("select * from ($arun1)");
	
	$statement -> execute();
	
	return $statement->fetchAll(PDO :: FECTH_CLASS);
}
}
?>
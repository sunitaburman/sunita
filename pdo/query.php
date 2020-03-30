<?php
class query {
	protected $pdo;
	public function
	__construct($pdo)
	{
		$this->pdo = $pdo;
	}
	public function selectAll($arun1)
	{
		try
		{
			$statement = $this->pdo->prepare("select * from $arun1");
			$statement->execute();
			
			return $statement->fetchAll(PDO :: FETCH_CLASS);
		}
		catch(Exception $e){
			return $e-getMessage();
		}
	}
}
?>
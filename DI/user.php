<?php 

class user {

    /*protected $db;

	public function __construct(database $db)
	{
		$this->db = $db;
	}
*/
	public function create(array $data)
	{
		$db = database ::getInstance();

		$db->query('Insert into arun1 tables');
	}
} 
?>
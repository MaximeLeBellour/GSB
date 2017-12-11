<?php 
	
class Connection {
	private $bdd;
	
	function __construct() {
		$this->bdd = new PDO('mysql:host=localhost;dbname=bdstpaul;charset=utf8', 'root');
	}

	function getBdd() {
		return $this->bdd;
	}
	
	function getAllSejours() {
		return $this->getBdd()->query('select * from sejour order by sejno');
	}
	
}
	
?>

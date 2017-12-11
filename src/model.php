<?php 
function getSejours() {
	$bdd = new PDO('mysql:host=localhost;dbname=bdstpaul;charset=utf8', 'root');
	$sejours = $bdd->query('select * from sejour order by sejno');
	
	return $sejours;
}
?>
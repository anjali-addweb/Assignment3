<?php 



try {
	$pdo = new PDO('mysql:host=localhost;dbname=assignment','root','');

	echo "successful";
echo"<br>";
} catch (PDOException $e) {

	die('could not connect');	
}

$statement = $pdo->prepare('select * from customer');

$statement->execute();

$results = $statement->fetchAll(PDO::FETCH_OBJ);

var_dump($results[0]->name);

?>
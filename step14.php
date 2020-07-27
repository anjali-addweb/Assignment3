<?php

class connection
{
	public static function make()
	{
		try{
	
		$pdo = new PDO('mysql:host=localhost;dbname=assignment','root',''); 
		
		} catch (PDOException $e){
			die('e->getMessage()');
		}
	}
}




?>
<?php
		
	$serveur = 'localhost';
	$nomDB = 'kalkhi';
	$login = 'root';
	$password = '';
	try{
		$connexion = new PDO ("mysql:host=$serveur;dbname=$nomDB",$login,$password);
		$connexion->setattribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$connexion->exec("SET NAMES 'utf8'");
		//echo 'Connexion à la base " Personne" est établie <br/> ';

 
		}catch (PDOEXCEPTION $e) 
		{
			$message =addslashes($e -> getMessage());
			echo "connexion à la base de donnée a échoué.".$message;
		}
?>
   
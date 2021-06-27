<?php

session_start();


		try{
			include 'connexion.php';
			include 'fonctions.php';
			$pseudo=trim($_POST['pseudo']);
			$password=trim($_POST['password']);

			$searchUser="select * from user where pseudo='$pseudo' and password='$password' ";

			$requette=$connexion->prepare($searchUser);
			$requette->execute();

			

			if($result=$requette->fetch())
			{


			$_SESSION['pseudo']=$result['pseudo'];
			 
			initialize_game($_SESSION['pseudo']);
			header("location:round.php");
		   }
		   else
		   {
		   		unset($_SESSION['message']);
		   		$_SESSION['message'] = "PseudoName inconnu ou mot de passe incorrect !!".$resultat['pseudo'];
		   		echo $_SESSION['pseudo'];
			header('location:index.php');     
		   }
		
		    
	    }
	    catch(PDOException $e)
	    {
	   		echo"echec de la connexion:".$e->getMessage();
	    }


	


  ?>
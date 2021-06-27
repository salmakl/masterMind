<?php
session_start();
    /*********************Insertion de l'information du joueur ***********/

  try{
       include 'connexion.php';
       print_r($_POST);
        $connexion->exec("SET NAMES 'utf8'");
        $pseudo=$_POST['pseudo'];
        $password=$_POST['password'];
       $rpassword=$_POST['rpassword'];
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $adresse=$_POST['email'];
        echo "mm".($password!=$rpassword)." kkk</br>";
        if($password!=$rpassword){

          $_SESSION['message'] = 'mot de passe n\'est pas identique';
           header("location:creerCompte.php");
        }
        else{
        echo "insert data";
          
         $insereCompte="INSERT INTO user (pseudo,password,nom,prenom,email) values('$pseudo','$password','$nom','$prenom','$adresse')";
         $preparecompte=$connexion->prepare($insereCompte);
         if($preparecompte->execute()){
    	     // $_SESSION['message'] = 'bien enregistrer';
            header("location:login.php");
          }
          else{
            //$_SESSION['message'] = 'pas enregistrer';
           header("location:index.php");
          }
        
      }
   } catch(PDOException $e)
    {
     	echo"problémes lors de la connexion a mysql:".$e->getMessage();
    }
?>

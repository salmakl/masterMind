<?php

function generate_secret_code()
{do{
	$secret_code = array();
	for ($i=0; $i<5 ; $i++) 
	{	
		$secret_code[$i] =rand(0,9);
	}
}while (array_unique($secret_code)!=$secret_code) ;
	

	return $secret_code;
}
function search_value($array, $value)
{
	for ($i=0; $i < count($array); $i++) { 
		if ($array[$i]==$value)return $i; 
	}
	return -1;
}

function is_equal($array1,$array2)
{
	for ($i=0; $i < count($array1); $i++) { 
		if ($array1[$i]!=$array2[$i])return -1;
	}
	return 1;
}




function create_game($date) {
	include 'connexion.php';
		 $insertGame="INSERT INTO round (datetimee) values('$date')";
         $prepareGame=$connexion->prepare($insertGame);
         if($prepareGame->execute()){
    	      $_SESSION['message'] = 'bien enregistrer';
}
}

function calculate_chrono($date1,$date2){
//Convert them to timestamps.
$date1Timestamp = strtotime($date1);
$date2Timestamp = strtotime($date2); 
//Calculate the difference.
$difference = ($date2Timestamp - $date1Timestamp)/60;
 
return $difference;
}
function calculate_score($chrono,$tries){
  
  		$score=($chrono*100)/$tries;  	
  	return (int)$score;
 
}


function insert_in_Game($chrono,$nb_tries,$pseudo,$date1,$score) {
	include 'connexion.php';
		 $inserting="UPDATE  round  SET chrono='$chrono',nb_tries='$nb_tries',pseudo='$pseudo',score='$score' where datetimee='$date1'";
         $prepare=$connexion->prepare($inserting);
         $prepare->execute();
    	     
}

 function Score($pseudo){
 	include 'connexion.php';
 	$search_score="SELECT pseudo,score,datetimee from round where pseudo='$pseudo' ";
    $prepare=$connexion->Prepare($search_score);
    $prepare->execute();
    $result = $prepare->fetchall();
    	
 return $result;
}

function  initialize_game($pseudo){

		$date = date("Y-m-d H:i:s");
		$_SESSION['date']=$date;
		create_game($date);
		$_SESSION['secret_code'] = generate_secret_code();

		$_SESSION['nb_tries'] = 7;
		$_SESSION['game_status'] = 'not_finished';
	   	$_SESSION['flages_list'] = array();
}
?>

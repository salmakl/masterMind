<?php 

echo "	<link rel='stylesheet' type='text/css' href='css/style.css'>
";
	session_start();
	include 'fonctions.php';
	if (isset($_POST["try"]))
	{

		$selected_code = array();
		for ($i=0; $i <= 4; $i++) { 
			$selected_code[$i] = $_POST['nb'.$i];
		}
		if ($_SESSION['nb_tries'] == 0 ) {
			echo "nbr of tries is 0</br>";
			$_SESSION['game_status'] = 'game over';
			$date1 = $_SESSION['date'];
			$date2 = date("Y-m-d H:i:s");
			$chrono=calculate_chrono($date1,$date2);
			$nb_tries=$_SESSION['nb_tries'];
			$pseudo=$_SESSION['pseudo'];
			
			$score=0;
			insert_in_Game($chrono,$nb_tries,$pseudo,$date1,$score); 
			header('location:round.php');
		}
		if (is_equal($selected_code,$_SESSION['secret_code'])==1) 
		{
			//echo "is_equal == 1</br>";
			$_SESSION['game_status'] = 'finished';
			$date1 = $_SESSION['date'];
			$date2 = date("Y-m-d H:i:s");
			$chrono=calculate_chrono($date1,$date2);
			$nb_tries=$_SESSION['nb_tries'];
			$pseudo=$_SESSION['pseudo'];
			$tries=8-$_SESSION['nb_tries'];
			$score=calculate_score($chrono,$tries);
			$_SESSION['score']=$score;
			insert_in_Game($chrono,$nb_tries,$pseudo,$date1,$score);
		    header('location:round.php');
		}

		echo "Begin Search</br>";
		$_SESSION['nb_tries']--;
		foreach ($selected_code as $key => $value) 
		{
			echo "Search For ".$value."</br>";
			$position = search_value($_SESSION['secret_code'], $value);
			if ($position == -1)
			{
				echo "value ".$value." not found</br>";
				$_SESSION['flages_list'][$key] = "Doses not execit";
			}
			else 
			{	
				echo "value ".$value." found</br>";
				if ($key == $position)
					$_SESSION['flages_list'][$key] = "Right place";
				else 
					$_SESSION['flages_list'][$key] = "Wrong place";
			}
		}
		echo "Flages ";
		print_r($_SESSION['flages_list']);
		$_SESSION['selected_code']= $selected_code;
		 header('location:round.php');
	}
	
?>
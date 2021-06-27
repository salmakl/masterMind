<?php 
session_start();
if (isset($_SESSION['pseudo'])) {
	//print_r($_SESSION);

	
?>
<!DOCTYPE html>
<html>
<head>
	<title>M A S T E R M I N D </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<center><h1>M A S T E R M I N D</h1></center>
<center><h1></h1></center>	
	<hr width=100% size= 1>
	<p align=right ><a href="rules.php">Cheek rules</a> </p>

	<?php
	 echo"<p align=right> &#128113;: ".$_SESSION['pseudo']."</b></p>";
	?>
	<p align=right> &#8629;<a href="deconnect.php">logout</a></p>
	
<center>
	<?php
	include 'fonctions.php';

	if ($_SESSION['nb_tries']>= 0) {
		
		echo "<h4>number of tries ".($_SESSION['nb_tries']+1)."</h4>";
	}
		if ($_SESSION['nb_tries']==7) {
			echo "
			<form method='POST' action='game_engin.php' class='formulaire1'>
			<p>
				<input type='number' name='nb0' min='0' max='9'>
				<input type='number' name='nb1' min='0' max='9'>
				<input type='number' name='nb2' min='0' max='9'>
				<input type='number' name='nb3' min='0' max='9'>
				<input type='number' name='nb4' min='0' max='9'>
			</p>
			<p>
				<input type='submit' value='try' name='try' class='bouton'>	
			</p>
			</form>";
		}
		else
		{
			if ($_SESSION['game_status'] == 'not_finished') {
			
			echo "<form method='POST' action='game_engin.php'>
			<p>";
			for ($i=0; $i < count($_SESSION['selected_code']) ; $i++) { 
				echo "<input type='number' value='".$_SESSION['selected_code'][$i]."'' name='nb".$i."' min='0' max='9' size='9'>";
			}
			echo "</p><p>";
			for ($i=0; $i < count($_SESSION['flages_list']); $i++) { 
				echo "<input type='text' value='".$_SESSION['flages_list'][$i]."' size='19' disabled/>";
			}
			echo "</p>";
			echo "<p>
				<input type='submit' value='try' name='try' class='bouton'>	
			</p>";
			}
			elseif ($_SESSION['game_status'] == 'finished') {
				echo "<h1 class='msg'>YOU'VE WON !!</h1>";
				echo "<h3>Your score is:".$_SESSION['score']."</h3> ";
				echo "<span style='font-size:100px;'>&#129321;</span>";

				initialize_game($_SESSION['pseudo']);
				echo "<form action='round.php'><input type='submit' value='replay' class='bouton'></form> ";
				echo "<form action= 'scoring.php'> 
				<input type='submit' value='Your score' class='bouton'>
				</form>";
			}
			else{
				echo "<h1 class='msg'>Oops ! YOU'VE LOST  !!</h1>";
				echo "<span style='font-size:100px;'>&#128531;</span>";
				initialize_game($_SESSION['pseudo']);
				echo "<form action='round.php'><input type='submit' value='replay' class='bouton'></form> ";		}
		}



	?>
</center>

</body>
</html>
<?php
}
else{
	header("location:index.php");
	echo"<input type='submit' value='replay !'>";

}

?>

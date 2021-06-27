<!DOCTYPE html>
<html>
<head>
	<title>S C O R E</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

	<center><h1>YOUR SCORE </h1></center>

	<hr width=100% size= 1>
	<?php
	  session_start();

	 echo"<p align=right> &#128113;: ".$_SESSION['pseudo']."</b></p>";
	?>

	<p align=right><a href="deconnect.php">logout</a></p>
	<p align=right><a href="round.php">Back to game</a></p>
	
<center>
 <?php
  include 'fonctions.php';
  $pseudo=$_SESSION['pseudo'];
  $tab=Score($pseudo);
  echo "<center><table  >
		<tr>
			<th>Pseudo name </th>
			<th>Score</th>
			<th>Date and time</th>
		</tr>";


		if ($tab>=1) {
			for ($i=0; $i <count($tab) ; $i++) { 
				echo "<tr>
					<td>".$tab[$i]['pseudo']."</td>
					<td>".$tab[$i]['score']."</td>
					<td>".$tab[$i]['datetimee']."</td>
				     </tr>";		
			}
		}


		"</table></center>";

 ?>
 
</body>
</html>
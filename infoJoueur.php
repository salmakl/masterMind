<?php
session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<title>M A S T E R M I N D </title>
	<meta charset="utf-8">
</head>
<body>
	<center><h1>M A S T E R M I N D</h1></center>
	<hr width=50% size= 3>
	<center><h2>Information joueur</h2></center>
	<hr width=100% size= 3>
	<?php
	echo'<p align=right ><b>Utilisateur:'.$_SESSION['pseudo'].'</b></p>'
	?>

	<p align=right><a href="deconnect.php">logout</a></p>

	<center>
		<form method="POST" action="joueur.php">
	<p>
	<label for="name"><b>Nom:</b>
		<input type="text" name="Nom" >	
	</label>
</p>
	<p>
	<label for="name"><b>Prénom :</b>
		<input type="text" name="prenom" >	
	</label>
</p>
<p>
	<label for="name"><b>Email :</b>
		<input type="text" name="Email" >	
	</label>
	
	</p>

	<p>
		<input type="submit" value="Créer Compte" >	
	
</p>
</center>

</body>
</html>
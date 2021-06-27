<!DOCTYPE html>
<html>
<head>
	<title>M A S T E R M I N D</title>
		<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php
        	if (isset($_SESSION['message'])) {
          		echo '<p>';
          		echo $_SESSION["message"];
          		echo'</p>';
              	unset($_SESSION['message']);
        	}
        ?>
	<center><h1>Creat account</h1></center>
	<hr width=50% size= 3>
	</center>
	

	<center>
		<form method="POST" action="joueur.php" class="formulaire1" >
			<center><h3>Informations</h3>
	<p align="center">
	<label for="name"><b>Pseudo Name:</b>
		<input type="text" name="pseudo" id="pseudo">	
	</label>
</p>
	<p align="center">
	<label for="name"><b> Password :</b>
		<input type="password" name="password" id="password">	
	</label>
</p>
	<p align="center">
	<label for="name"><b> Confirm password :</b>
		<input type="password" name="rpassword" id="rpassword">	
	</label>
</p>
<p>
	<label for="name"><b>Last name:</b>
		<input type="text" name="nom" >	
	</label>
</p>
	<p>
	<label for="name"><b>First name :</b>
		<input type="text" name="prenom" >	
	</label>
</p>
<p>
	<label for="name"><b>Email :</b>
		<input type="email" name="email" >	
	</label>
	
	</p>
	<p>
		<input type="submit" value="Creat account" class="bouton">	
	
	</p>
</form>
</center>

</body>
</html>
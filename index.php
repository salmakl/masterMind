<?php 
session_start();
?>
<!DOCTYPE html>

<html>
<head>
	<title>M A S T E R M I N D</title>
		<meta charset="utf-8">
		<!--========================================================-->
		<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- 		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
 -->	<!--=========================================================-->
</head>
</head>
<body class="section" >
		<center><h1> Mastermind Game  </h1></center>
		
		
	
	
	<?php
        	if (isset($_SESSION['message'])) {
          		echo '<p>';
          		echo $_SESSION["message"];
          		echo'</p>';
              	unset($_SESSION['message']);
        	}
        ?>
	<center>
		<form method="POST" action="fonction_Connect.php" class="formulaire">
			<center><h2> login  </h2></center>
	<p align="center">
	<label for="name"><b>Pseudo Name :</b>
		<input type="text" name="pseudo" >	
	</label>
</p>
	<p align="center">
	<label for="name"><b>Password :</b>
		<input type="password" name="password" id="password">	
	</label>
</p>
	<p>
		<a href="creerCompte.php">Create a new acount </a>
	</p>
	<p>
		<input type="submit" value="Login" class="bouton" >	
	
</p>
</center>

	

</body>
</html>
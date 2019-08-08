<?php
// Start the session
session_start();
?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<title> NobleMax </title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	
	<body>
		<div class="sx">
			<img src="./immagini/noblemax.png" alt="logomax">

		</div>
	
		<div class="centro">
			<div class="navi">
				<a href="./index.php">Home</a> | 
				<a href="./registrazione.php">Registrati</a> | 
				<a href="./login.php">Login</a>
			</div>
			<div class="logo">
				<form action="listafilm.php" method="post">
				
				<h2>Login</h2>
				<?php if(isset($_GET["error"])) if($_GET["error"]==1) echo "Dati errati<br><br>" ?>
				USERNAME : <input type="text" value="" name="username1" /><br>
				PASSWORD : <input type="password" value="" name="password1" /><br><br>
				<input type="submit" value="Invia" /><br><br><br><br>
	
				</form>
			</div>
		</div>
		<div class="navi foot">
				
		</div>
	</body>
</html>
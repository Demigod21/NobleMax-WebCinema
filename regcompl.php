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
		<div class="center centro">
			<div class="navi">
				<a href="./index.php">Home</a> | 
				<a href="./registrazione.php">Registrati</a> | 
				<a href="./login.php">Login</a>
			</div>
			<div class="logo">
				<form action="regcompl.php" method="post">
				
				<h2>Registrazione</h2>
						
				<?php
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "noblemax";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) 
		{
				die("Connection failed: " . $conn->connect_error);
		} 
		
		$ut5=$_POST["username5"];
		$psw5=$_POST["password5"];
					
				
		$sql = "INSERT INTO utente VALUES ('".$ut5."','".$psw5."')";
		if ($conn->query($sql) === TRUE)
		{
			echo "Registrazione completata!";
		} 
		else 
		{
			echo "Error: " . $conn->error;
		}				
		$conn->close();
		
	    ?>
		
	
				</form>
				
				<a href="login.php">Login</a>
			</div>
		</div>
		<div class="navi foot">
				
		</div>
	</body>
</html>

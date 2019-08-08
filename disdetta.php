<?php
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
					<a href="./prenotazioni.php">Le mie prenotazioni </a>
				</div>
			
			
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
						
						$filmdisd = $_POST["filmdadisdire"];


							$sql = "DELETE  FROM prenotazione WHERE username='".$_SESSION["user"]."' AND film='".$filmdisd."';";
							if ($conn->query($sql) === TRUE)
							{
							} 
							else 
							{
								echo "Error: " . $sql . "<br>" . $conn->error;
							}
						
						echo "Disdetta effettuata con successo!";
						

						$conn->close();
				?>
			
		</div>
		
	
	</body>

</html>
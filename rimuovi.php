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
		<div class="center centro">
			<div class="navi">
				<a href="./index.php">Home</a> | 
				<a href="./gestione.php">Gestione </a>
			</div>
			<div class="logo">
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
						// echo "Connected successfully";
					
						$filmcanc = $_POST["nf"];
						
							$sql2 = "DELETE  FROM prenotazione WHERE film='".$filmcanc."'";
							
							if ($conn->query($sql2) === TRUE)
							{
							} 
							else 
							{
							}
							$sql = "DELETE  FROM filmtab WHERE film='".$filmcanc."'";
							
							if ($conn->query($sql) === TRUE)
							{
								echo "Film cancellato, complimenti!";
							} 
							else 
							{
								echo "Errore, film non cancellato correttamente, riprova";
							}
							

						
						
						$conn->close();
		
		
		
		

		
		
		?>
		<br>
		<a href="gestione.php">Torna Indietro</a>
					</div>
				
		</div>
		
		<br> <br>
		
		
		<div class="navi foot">
				
		</div>
	</body>
</html>

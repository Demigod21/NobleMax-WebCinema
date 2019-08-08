<!DOCTYPE html>

<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="js.js"></script>
		<title> NobleMax </title>
	</head>
	<body>
	
		<div class="sx">
			<img src="./immagini/noblemax.png" alt="logomax">

		</div>

		
		<div class="centro">
		
			<div class="center centro" style="width:100%">
			<div class="navi"> 
				<a href="./index.php">Home</a> | 
				<a href="./prenotazioni.php">Le mie prenotazioni </a>
			</div>
			</div>

			<div class="container" id="container">

				<div class="plaza" id="plaza">
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
					
					
					
						
						$posti = $_POST["selezionati"];
						$arrayposti = explode(" ",$posti);
						
						$nome= $_POST["utnt"];
						$film= $_POST["flm"];
						for($i=0; $i<sizeof($arrayposti); $i++)
						{
							$sql = "INSERT INTO prenotazione VALUES (DEFAULT, '".$nome."', '".$film."','".$arrayposti[$i]."')";
							if ($conn->query($sql) === TRUE)
							{
							} 
							else 
							{
								echo "Error: " . $sql . "<br>" . $conn->error;
							}
						}
						
						echo "Prenotazione effettuata con successo! Complimenti per la scelta!";
						
						

						
						
						
						$conn->close();
					?>
				</div>

			</div>
			
		</div>

		<div class="dx">
				
			<img  src='<?php echo $_POST["immaginefilm2"]?>' id='film1' alt="locandina"/>
			<p id='descrizione'>
				<?php echo $_POST["descrizionefilm2"]?>
			</p>
		</div>
	</body>
</html>
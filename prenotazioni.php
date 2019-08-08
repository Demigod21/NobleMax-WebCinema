<?php
// Start the session
session_start();
?>
<!DOCTYPE html>

<html>
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
			<div style="text-align: center">
			
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
					
					
				
						$sql = "SELECT DISTINCT film FROM prenotazione WHERE username='".$_SESSION["user"]."';";
						
						$result = $conn->query($sql);
						
						$filmprenotati = "";
						$contatore = 0;
						
						if ($result->num_rows > 0) 
						{
							// output data of each row
							while($row = $result->fetch_assoc()) 
							{
								echo "
								<form action='disdetta.php' method='post'>
								".$row["film"].": <input type='hidden' name='filmdadisdire' value='".$row["film"]."' id='fdisdire".$contatore."' />
								<input type='submit' value='Disdici'>
								</form>
								";
								$contatore=$contatore+1;
							}
						} 
						else 
						{
							echo "Nessuna prenotazione effettuata!";
						}
						
						 echo "<input type='hidden' value='".$filmprenotati."' id='filmpren'/>";
						
						$conn->close();
					?>
			 </div>
			
		</div>
		

	
</body>


</html>
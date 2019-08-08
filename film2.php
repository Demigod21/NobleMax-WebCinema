<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8"> 
		<meta name = "author" content = "Davide Falcone">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="js.js"></script>
		<title> NobleMax </title>
		
	</head>
	<body onload="shish()">
		<div style="display: inherit;">
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
					
					
				
						$sql = "SELECT posto FROM prenotazione WHERE film='".$_POST["nf"]."';";
						
						$result = $conn->query($sql);
						
						$postiprenotati = "";
						$contatore = 0;
						
						if ($result->num_rows > 0) 
						{
							// output data of each row
							while($row = $result->fetch_assoc()) 
							{
								if($contatore==0)
								{
									$postiprenotati=$row["posto"];
								}
								else
								{
									$postiprenotati=$postiprenotati." ".$row["posto"];
								}
								$contatore++;
							}
						} 
						else 
						{
							
						}
						
						 echo "<input type='hidden' value='".$postiprenotati."' id='postipren'/>";
						
						$conn->close();
					?>
		</div>
	
		<div class="sx">
			<img src="immagini/noblemax.png" alt="logomax">
			<div class="legenda">
					<img src="./immagini/legenda.png" alt="legenda"/>
			</div>
		</div>
		
		<div class="centro">
			<div class="container" id="container">
				<div class="lettere" id="lettere">
				
				</div>
				<div class="plaza" id="plaza">
				
				</div>
				
				<div class="numeri">
				
				</div>
			</div>
			
			<form action='intermezzo.php' method='post'>  
	             <input type='hidden' name='selezionati' value='' id='slz' />
				<button type="submit" onclick="bottone()" id='prenota'>Prenota </button>
				<input type='hidden' name='nomefilm' value='<?php echo $_POST["nf"]?>' id='nfilm'/>
				
				<input type='hidden' name='immaginefilm' value='<?php echo $_POST["if"]?>' id='imgfilm'/>
				<input type='hidden' name='descrizionefilm' value='<?php echo $_POST["df"]?>' id='descfilm' />
			 </form> 
		</div>
		<div class="dx">
				
			<img  src='<?php echo $_POST["if"]?>' id='film1' alt="film" />
			<p id='descrizione'>
				<?php echo $_POST["df"]?>;
			</p>
		</div>
	</body>
</html>
<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	<title> NobleMax</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="js.js"></script>
	</head>
	<body>
	
		<div class="sx">
			<img src="./immagini/noblemax.png" alt="logomax">
			<div class="legenda">
					<img src="./immagini/legenda.png" alt="legenda"/>
			</div>
		</div>
		
		<div class="centro">
			<div class="container" id="container">

				<div class="plaza" id="plaza">
					<h2>Riepilogo prenotazione</h2>
					<form action="prenota.php" method="post">
						
						
						Utente: <input type="text" name="utnt" value="<?php echo $_SESSION["user"]?>" readonly> <br><br>
						Film: <input type="text" name="flm" value="<?php echo $_POST["nomefilm"]?>" readonly> <br><br>
						
						
						Posti: <input type="text" name="selezionati" value="<?php echo $_POST["selezionati"]?>" readonly><br><br>
						<input type="submit" value="Invia" />
						
						<input type='hidden' name='immaginefilm2' value='<?php echo $_POST["immaginefilm"]?>' id='imgfilm2'/>
						<input type='hidden' name='descrizionefilm2' value='<?php echo $_POST["descrizionefilm"]?>' id='descfilm2' />
						
						
					</form>
				</div>

			</div>
			
		</div>

		<div class="dx">
				<img  src='<?php echo $_POST["immaginefilm"]?>' id='film1' alt="locandina"/>
				<p id='descrizione'>
					<?php echo $_POST["descrizionefilm"]?>
				</p>

		</div>
	</body>
</html>
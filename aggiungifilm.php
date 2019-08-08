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
					
						$nomefilm= $_POST["nf"];
						$codicefilm= $_POST["cf"];
						$descrfilm= $_POST["comment"];
						
						$sql = "INSERT INTO filmtab VALUES ('".$codicefilm."', '".$nomefilm."', '".$descrfilm."');";

						
						

						
						
						$uploaddir = "./immagini/";
						$userfile_tmp = $_FILES["img1"]["tmp_name"];
						$userfile_name = $codicefilm.".jpg";
						

						$check = getimagesize($_FILES["img1"]["tmp_name"]);
						if($check !== false) 
						{
							if ($conn->query($sql) === TRUE)
							{
								echo "Film inserito";
							} 
							else 
							{
								echo "Errore, film non inserito correttamente, riprova";
							}
						} 
						else 
						{
							echo "Il file non e' un immagine, impossibile inserire film";
						}
				
						move_uploaded_file($userfile_tmp, $uploaddir . $userfile_name);
						
						
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

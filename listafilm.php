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
				<a href="./prenotazioni.php">Le mie prenotazioni </a>
			</div>
			<div class="logo">
			
				<?php
		$_SESSION["user"]=$_POST["username1"];
		$_SESSION["psw2"]=$_POST["password1"];
		
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
		
					
					
				
		$sql = "SELECT psw FROM utente WHERE username='".$_SESSION["user"]."';";
		
						
		$result = $conn->query($sql);
		
		$psw3="";
		while($row = $result->fetch_assoc()) 
		{
				$psw3=$row["psw"];
		}
		
		
		if($psw3==$_SESSION["psw2"])
		{
			if($_SESSION["user"]=="admin")
			{
				header("location: gestione.php");
			}
		}
		else
		{
			header("location: login.php?error=1");
		}
						
		$conn->close();
		
	    ?>
		
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
					
						$sql = "SELECT * FROM filmtab;";
						
						$result = $conn->query($sql);
						
						
						
						if ($result->num_rows > 0) 
						{
							// output data of each row
							while($row = $result->fetch_assoc()) 
							{
											echo "
												<div class='filmcontainer'>
													<div  class='filmimg'><img src='./immagini/".$row["film"].".jpg' alt='".$row["film"]."'></div>
														<div  class='filmdesc'>
														<h2>".$row["nomefilm"]."</h2>
														<p>".$row["descrizione"]."</p>
														<form action='film2.php' method='post'>  
															<input type='hidden' name='nf' value='".$row["film"]."' id='nfilm'/>
															
															<input type='hidden' name='if' value='./immagini/".$row["film"].".jpg' id='imgfilm'/>
															<input type='hidden' name='df' value='".$row["descrizione"]."' id='descfilm' />
														
														<input type='submit' value='Prenota' />
														 </form>
													</div>
											</div> ";
							}
						} 
						else 
						{
							echo "Nessun film disponibile!";
						}
						
						
						$conn->close();
		
		
		
		

		
		
		?>
		
		
		
		
		<div class="navi foot" style="width : 100%">
				
		</div>
	</body>
</html>

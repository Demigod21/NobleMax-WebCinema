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
				<a href="./index.php">Home</a>
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
														<form action='rimuovi.php' method='post'>  
															<input type='hidden' name='nf' value='".$row["film"]."'/>
															
															<input type='hidden' name='if' value='./immagini/".$row["film"].".jpg' />
															<input type='hidden' name='df' value='".$row["descrizione"]."'  />
														
														<input type='submit' value='Rimuovi' />
														 </form>
													</div>
											</div> ";
							}
						} 
						else 
						{
							
						}
						
						
						$conn->close();
		
		
		
		

		
		
		?>
			
			</div>
			<div class="filmcontainer">
				<h3> Aggiungi Film </h3>
				<form action='aggiungifilm.php' method='post' enctype="multipart/form-data" >  
				Codice Film: <input type='text' name='cf' value='' id='cfilm'/> <br>
				Nome Film: <input type='text' name='nf' value='' id='nfilm' /> <br>
				Immagine : <input type='file' name='img1' id='img1' /> <br>
				Descrizione:<input type='text' name='comment' value='' id='descfilm'/> <br>
						 
				 <br>
				<input type='submit' value='Aggiungi' />
			 </form>			


		</div>
			
		</div>
		
		

		
		
		
		<div class="navi foot">
				
		</div>
	</body>
</html>

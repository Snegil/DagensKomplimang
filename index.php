<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta name="author" content="Alfons Wallin">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8" lang="sv">
		<title>
			Dagens Komplimang
		</title>
		<link rel='icon' href='favicon.ico' type='image/x-icon'/>
		<link rel="stylesheet" type="text/css" href="normalize.css"/>
		<link rel="stylesheet" type="text/css" href="stylesheet.css"/>
		<link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700&display=swap" rel="stylesheet">

		<?php 
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "dagenskomplimang";			
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);		
			// Check connection
			if ($conn->connect_error) 
			{
				die("Connection failed: " . $conn->connect_error);
			}
			mysqli_set_charset($conn,"utf8");
			echo "Connected successfully";
		?>

	</head>
	<body>
        <div id="wrapper">
            <div id="komplimang">
				<div id="komplimangen">
					<?php
						
						$result = mysqli_query($conn, "SELECT * FROM komplimanger WHERE id='2'");
						$row = mysqli_fetch_array($result);
						echo $row['komplimang'];
					?>
				</div>
				<div id="links">
					Utvecklad av 
					<a href="#">Alfons Wallin</a>
					<a href="https://github.com/Snegil/DagensKomplimang" target="_blank">
					<img id="img" src="Images/GitHub-Mark.png" alt="Github">
					</a>
				</div>
			</div>
        </div>
	</body>
</html>

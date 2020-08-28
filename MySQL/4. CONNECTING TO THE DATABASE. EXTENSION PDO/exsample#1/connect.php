<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>4.CONNECTING TO THE DATABASE. EXTENSION PDO.</title>
</head>
<body>
	<?php 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "product";

		try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "it's OK!";
		}
		catch(PDOException $e) {
			echo "Failed - ".$e->getMessage();
		}
	 ?>
</body>
</html>
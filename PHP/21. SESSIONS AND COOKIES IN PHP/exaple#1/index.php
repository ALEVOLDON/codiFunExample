<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>22. SESSIONS AND COOKIES IN PHP(example#1)</title>
	<link rel="stylesheet" type="text/css" href="css/<?php echo $_SESSION["color"];?>.css">
</head>
<body>
	<?php 
	session_start();
	$_SESSION["color"]="black";
 	?>
</body>
</html>


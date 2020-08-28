<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>22. SESSIONS AND COOKIES IN PHP(example2)</title>
</head>
<body>
 	 <form action="index.php" method="get">
 	 	<select name="color">
 	 		<option value="gray"></option>
 	 		<option value="blue"></option>
 	 	</select>
 	 	<input type="submit" value=Change>
 	 </form>
 	 <?php 
 	 	session_start();
 	 		if(isset($_GET['color'])) {
 	 		$_SESSION["color"]=$_GET['color'];
 			}else{
 			$_SESSION["color"]="black";
 		}
 	  ?>
 	
</body>
</html>


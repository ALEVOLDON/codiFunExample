<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>03. INSTRUCTIONS FOR DISPLAYING DATA IN PHP. VARIABLES IN PHP</title>
</head>
<body>
	<?php 
	echo "<h1>How to output text...</h1>";
	print "<p>...with 'echo' or 'print'.</p>";
 ?>

 <?php 
 	$name = "Maria";
 	$ages = 27;
 	$weight = 67.8;
 	echo $name;
 	echo "<br/>";
 	echo $ages;
 	echo "<br/>";
 	echo $weight;
  ?>

  <br>
  <br>
  <br>

  <?php
   /*Начинаю комментарий на несколько строк и ниже я определю несколько переменных */ 
  	$name = "Maria";
  	$ages = 27;
  	$weight = 67.8;
  	echo $name;
  	echo "<br/>";
  	# я включил комментарий на одной строке здесь
  	echo "$ages лет";
  	echo "<br/>";
  	// и тут я включил комментарий на одной строке
  	echo 'и имеет вес $weight';
   ?>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>11.FUNCTIONS DEFINED BY THE PROGRAMMER</title>
	<style type="text/css">
		body {
			font-family: Arial, Helvetica, sans-serif;
			font-size: 1.2rem;
		}
	</style>
</head>
<body>
	 <?php 
		function infoLength() {
			$text = "Ура, пишем свою функцию в PHP!";
			echo "Текст имеет ".mb_strlen($text)." символов";
		}
		infoLength();
	 ?>

	 <br>
	 <br>
	 <br>

	 <?php 
	 	$text = "Ура, пишем свою функцию в PHP!";
	 	$altText = "В этом случае мы видим, как используются аргументы функции!";
	 	function infoLength2($textLen) {
	 		echo "Текст имеет ".mb_strlen($textLen)." символов";
	 	}
	 	infoLength2($altText);
	  ?>

	  <br>
	  <br>
	  <br>

	  <?php 
	  	function infoLength3($textLen="") {
	  		echo "Текст имеет ".mb_strlen($textLen)." символов";
	  	}
	  	infoLength3();
	   ?>

	   <br>
	   <br>
	   <br>

	   <?php 
	 	$text = "Ура, пишем свою функцию в PHP!";
	 	$altText = "В этом случае мы видим, как используются аргументы функции!";
	 	function infoLength4($textLen="") {
	 		return mb_strlen($textLen);
	 	}
	 	echo "Текст имеет ".infoLength4($text)." символов";
	  ?>
</body>
</html>
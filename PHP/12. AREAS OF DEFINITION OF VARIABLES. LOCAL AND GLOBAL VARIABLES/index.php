<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<style type="text/css">
		body {
			font-family: Arial, Helvetica, sans-serif;
			font-size: 1.2rem;
		}
	</style>
	<title>12. AREAS OF DEFINITION OF VARIABLES. LOCAL AND GLOBAL VARIABLES.</title>
</head>
<body>
	<?php 
		$x = 7; //область применения переменной x
		function power($x) {
			return $x*$x;
		}
		echo "Переменная x является глобальной и имеет значение: $x, а возвращаемое значение функции равно ";
		echo power($x);
	 ?>

	 <br>
	 <br>
	 <br>

	 <?php 
	 	$x = 7; //область применения переменной x
	 	function power2() {
	 		global $x;
	 		return $x*$x;
	 	}
	 	echo "Переменная x является глобальной и имеет значение: $x";
	 	echo "<br>Возвращаемое значение функции:" .power2();
	  ?>

	  <br>
	  <br>
	  <br>

	  <?php 

	  	function power3() {
	  		static $x=0;
	  		$x+=3;
	  		return $x*$x;
	  	}
	  	for ($i=1; $i<4; $i++) { 
	  		echo "<br>Значение, возвращаемое функцией $i раз:" .power3();
	  	}
	   ?>
</body>
</html>
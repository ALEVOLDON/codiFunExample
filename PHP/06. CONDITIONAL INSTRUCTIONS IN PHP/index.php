<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>6.CONDITIONAL INSTRUCTIONS IN PHP</title>
</head>
<body>
	<?php 
		$value1 = 1900;
		$value2 = 77;
		if ($value1 > $value2) {
			echo "Значение 1 - $value1 - больше, чем значение 2 - $value2";
		} else {
			echo "Значение 1 - $value1 - не больше чем значение 2 - $value2";
		}
	 ?>

	 <br>
	 <br>
	 <br>
	 <?php 
		$value1 = 1900;
		$value2 = 77;
		if ($value1 == $value2) {
			echo "Значение 1 - $value1 - равно значению 2 - $value2";
		} else {
			echo "Значение 1 - $value1 - не равно значению 2 - $value2";
		}
	 ?>

	 <br>
	 <br>
	 <br>
	 <?php 
		$value1 = 1900;
		$value2 = 77;
		// Тернарный оператор
		echo ($value1 == $value2) ? 
		 "Значение 1 - $value1 - равно значению 2 - $value2"
		
		: "Значение 1 - $value1 - не равно значению 2 - $value2";
		
	 ?>

	 <br>
	 <br>
	 <br>

	 <?php 
	 	$height1 = 150;
	 	$height2 =177;
	 	$value = 168;
	 	if($value < $height1) {
	 		echo "У тебя низкий рост";
	 		// && или and
	 	} elseif ($value >= $height1 && $value <= $height2) {
	 		echo "У тебя средний рост!";
	 	} else {
	 		echo "Ты очень высокий!";
	 	}
	  ?>

	  <br>
	  <br>
	  <br>

	   <?php 
	 	$height1 = 150;
	 	$height2 =177;
	 	$value = 168;
	 	// || или or
	 	if ($value < $height1 || $value > $height2) {
	 		echo "Ты низкий или высокий!";
	 	} else {
	 		echo "У тебя средний рост!";
	 	}	
	   ?> 

	   <br>
	   <br>
	   <br>

	   <?php 
	   		$height1 = 150;
	   		$value = 168;
	   		// ! - оператор отрицания (не)
	   		if(!$value < $height1) {
	   			echo "Ты высокий!";
	   		} else {
	   			echo "Ты низкий!";
	   		}
	    ?>
</body>
</html>
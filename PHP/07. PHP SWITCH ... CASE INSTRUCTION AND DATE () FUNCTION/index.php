<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>07.PHP SWITCH ... CASE INSTRUCTION AND DATE () FUNCTION</title>
</head>
<body>
	<?php 
		// Формат даты - выводит текущий месяц.
		// echo date("m");
	 ?>

	 <br>
	 <br>
	 <br>

	 <?php 
	 	$month = date("m");
	 	$date = date("d");
	 	$name = "";
	 	switch ($month) {
	 		case '01':
	 			$name = "января";
	 			break;
	 		case '02':
	 			$name = "февраля";
	 			break;	
	 		case '03':
	 			$name = "марта";
	 			break;
	 		case '04':
	 			$name = "апреля";
	 			break;
	 		case '05':
	 			$name = "мая";
	 			break;
	 		case '06':
	 			$name = "июня";
	 			break;
	 		case '07':
	 			$name = "июля";
	 			break;
	 		case '08':
	 			$name = "августа";
	 			break;
	 		case '09':
	 			$name = "сентября";
	 			break;
	 		case '10':
	 			$name = "октября";
	 			break;
	 		case '11':
	 			$name = "ноября";
	 			break;
	 		case '12':
	 			$name = "декабря";
	 			break;										
	 		default:
	 			# code...
	 			break;
	 	}
	 	echo "Сегодня ".$date." ".$name;
	  ?>

	  <br>
	  <br>
	  <br>

	  <?php 
	  	$day = date("w");
	  	$text = "";
	  	switch ($day) {
	  		case '6':
	  			$text = "Суббота, которую все ждут!";
	  			break;
	  		case '0':
	  			$text = "Воскресенье мы отдыхаем, а завтра понедельник!";
	  			break;	
	  		default:
	  			$text = "Рабочий день...";
	  			break;
	  	}
	  	echo "Сегодня ...".$text;
	   ?>
</body>
</html>
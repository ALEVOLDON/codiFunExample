<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>09.CYCLIC INSTRUCTIONS IN PHP</title>
	<style type="text/css">
		body {
			font-family: Arial, Helvetica, sans-serif;
			font-size: 1.2rem;
		}
	</style>
</head>
<body>
	<?php 
		echo "<h1>Динамическое создание пронумерованного списка...</h1>";
		echo "<ol>";
		for ($i=1; $i<=7; $i++) { 
		echo "<li>Правило ".$i."</li>";
		}
		echo "</ol>";
	 ?>

	 <br>
	 <br>
	 <br>

	 <?php 
	 	echo "<h1>Итеративный подсчет суммы очков спортсмена.</h1>";
	 	$summ=0;
	 	$point=5;
	 	$counter=0;
	 	while ($summ <= 100) {
	 		$summ += $point;
	 		$counter++;
	 	}
	 	echo "Общая оценка - ".$summ.", c - ".$counter." попытки.";
	  ?>

	  <br>
	  <br>
	  <br>

	  <?php 
	 	echo "<h1>Итеративный подсчет суммы очков спортсмена.</h1>";
	 	$summ=0;
	 	$point=5;
	 	$counter=0;
	 	do {
	 	$summ += $point;
	 	$counter++;	
	 	} while($summ<5);
	 	echo "Общая оценка - ".$summ.", c - ".$counter." попытки.";
	  ?>

	  <br>
	  <br>
	  <br>

	  <?php 
	  	// В каком скрипте оператор for не будет выдавать ошибки и выведет значение 10?
	  	echo "<h3>В каком скрипте оператор for не будет выдавать ошибки и выведет значение 10?</h3>";
	  	$summ = 0;
	  	for ($i=1; $i<=4 ; $i++) { 
	  		$summ += $i;
	  	}
	  	echo $summ;
	   ?>

	  <br>
	  <br>
	  <br>

	  <?php 
	  	// В каком из следующих сценариев правильно реализован цикл while в результате выполнения которого отобразится 5 значений?
	  	echo "<h3>В каком из следующих сценариев правильно реализован цикл while в результате выполнения которого отобразится десять значений?</h3>";
	  	$points = 0;
	  	$i = 0;
	  	while($i<10) {
	  	$points += $i;
	  	echo $points."<br>";
	  	$i++;	
	  	}
	   ?>

	  <br>
	  <br>
	  <br>

	  <?php
	  	 // Какой из следующих сценариев правильно реализовал цикл ”do…while” и отобразит в результате три значения?
	  	echo "<h3>Какой из следующих сценариев правильно реализовал цикл ”do…while” и отобразит в результате пять значений?</h3>";
	  	echo "<br>";
	  	$points = 0;
	  	$i = 0;
	  	do {
	  	$points += $i;
	  	echo $points."<br>";
	  	$i++;	
	  	} while($i<5);
	   ?>

	  <br>
	  <br>
	  <br>


	  <?php 
	  	echo "<h1>Мы проверяем действие двух включенных циклов</h1>";
	  	echo "<table>";
	  	for ($line=1; $line<=5 ; $line++) { 
	  	echo ($line%2==0) ? "<tr style='background-color: grey'>" : "<tr style='background-color: pink'>";
	  	for ($column=1; $column<=4 ; $column++) { 
	  	echo "<td>cell-".$line.$column."</td>";
	  	}
	  	echo "</tr>";
	  	}
	  	echo "</table>";
	   ?>
</body>
</html>
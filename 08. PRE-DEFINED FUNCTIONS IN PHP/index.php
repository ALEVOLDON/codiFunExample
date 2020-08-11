<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>08. PRE-DEFINED FUNCTIONS IN PHP</title>
	<style type="text/css">
		body {
			font-family: Arial, Helvetica, sans-serif;
			font-size: 1.5rem;
		}
	</style>
</head>
<body>
	<?php 
		// Функция string length - используется для определения длины символов. 
		$text = "Дети по всему миру очень ждут зимние праздники!";
		echo "Длина текста составляет - ".mb_strlen($text);
	 ?>

	 <br>
	 <br>
	 <br>

	 <?php 
	 	// Функция string position - выполняет поиск в тексте указанной подстроки.
	 	$text = "Дети по всему миру очень ждут зимние праздники!";
	 	$word = "зимние";
	 	echo "Слово ".$word." присутствует или нет? Посмотрим... Если это так, то оно в позиции ... ".mb_strpos($text,$word);
	  ?>

	  <br>
	  <br>
	  <br>

	  <?php 
	  	// Функция string replace - используется для определения длины символов.
	  	$text = "Дети по всему миру очень ждут зимние праздники!";
	  	echo "Результат замены - ".str_replace("миру","континенту","$text");
	   ?>

	   <br>
	   <br>
	   <br>

	   <?php 
	   // используется в условных инструкциях чтобы выяснить является значения числовыми.
	   	$val1 = 77;
	   	$val2 = 7.77;
	   	$val3 = "не 77";
	   	$val4 = "77";
	   	echo (is_numeric($val1)) ? "Ура! Это - число" : "Это не число :(";
	   	echo "<br>";
	   	echo (is_numeric($val2)) ? "Ура! Это - число" : "Это не число :(";
	   	echo "<br>";
	   	echo (is_numeric($val3)) ? "Ура! Это - число" : "Это не число :(";
	   	echo "<br>";
	   	echo (is_numeric($val4)) ? "Ура! Это - число" : "Это не число :(";
	   	echo "<br>";
	    ?>

	    <br>
	    <br>
	    <br>

	    <?php 
	    	// гинирирует случайное числовое значение из указанного диапазона.
	    	echo rand(55,77);
	     ?>

	     <br>
	     <br>
	     <br>

	     <?php 
	     	// округяет числа типа float, можно указать точность округления.
	     	echo round(55.8888, 0)."<br>";
	     	echo round(55.8888, 1)."<br>";
	     	echo round(55.8888, 2)."<br>";
	      ?>

	      <br>
	      <br>
	      <br>

	      <?php 
	      	$var1 = 77;
	      	$var2 = "";
	      	// определяет была ли определена конкретная переменная и было ли задано ей значение. 
	      	echo (isset($var1)) ? "Было задано значение" : "Не было задано никакого значения";
	      	echo "<br>";
	      	echo (isset($var2)) ? "Было задано значение" : "Не было задано никакого значения";
	      	echo "<br>";
	      	// проверяет не является ли значение переменной пустым.
	      	echo (empty($var1)) ? "Не имеет ни какого значения" : "Имеет значение";
	      	echo "<br>";
	      	echo (empty($var2)) ? "Не имеет ни какого значения" : "Имеет значение";
	      	echo "<br>";
	       ?>
</body>
</html>
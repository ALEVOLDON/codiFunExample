<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>10.ARRAYS IN PHP</title>
	<style type="text/css">
		body {
			font-family: Arial, Helvetica, sans-serif;
			font-size: 1.2rem;
		}
	</style>
</head>
<body>
	<?php 
	// Массив это тип данных который может хранить несколько значений в одной переменной.
		$array_name = array("Алина","Анна","Виктория","Надя");
		echo $array_name[0];
		$array_age = array(19,21,18,17);
		echo $array_age[1];
	 ?>
	<br>
	<br>
	 <?php 
	 // Значения в массиве можно хранить при помощи сценария!
	 	$array_name[0] = "Алина";
	 	$array_name[1] = "Аня";
	 	$array_name[2] = "Виктория";
	 	$array_name[3] = "Надя";
	 	echo $array_name[2];
	  ?>
	  <br>
	  <br>
	  <?php 
	  	// Чтобы подсчитать сколько одномерных значений хранится в массиве используется функция count.
	  	$array_age = array(19,21,18,17);
	  	echo count($array_age);
	   ?>
	   <br>
	   <br>
	   <?php 
	   		$array_name = array("Алина","Анна","Виктория","Надя");
	   		for ($i=0; $i<count($array_name) ; $i++) { 
	   			echo "В позиции $i находится значение <ins>$array_name[$i]</ins>";
	   			echo "<br>";
	   		}
	    ?>
	    <br>
	    <br>
	    <?php 
	    	$array_name = array("Алина","Анна","Виктория","Надя");
	    	foreach ($array_name as $value) {
	    		echo $value;
	    		echo "<br>";
	    	}
	    	$array_age = array(19,21,18,17);
	    	// Показывает количество элементов в массиве
	    	echo count($array_age);
	     ?>
		<br>
		<br>
		<!-- Ассоциативные массивы -->
		<?php 
			$array_name = array("Алина"=>19,"Анна"=>21,"Виктория"=>18,"Надя"=>17);
			// Результатом интерпритации будет отображение значения
			echo $array_name["Анна"];
		 ?>
		 <br>
		 <br>
		 <?php 
		 	$array_name = array("Алина"=>19,"Анна"=>21,"Виктория"=>18,"Надя"=>17);
		 	foreach ($array_name as $name => $age_value) {
		 		echo "Ключ - ".$name.", имеет возраст - ".$age_value;
		 		echo "<br>";
		 	}
		  ?>
		  <br>
		  <br>
		  <!-- Многомерный массив -->
		  <?php 
		  		$data_users = array(
		  			array("Петрова","Инна",22),
		  			array("Сидоров","Илья",25),
		  			array("Иванова","Валя",27)
		  		);
		  		echo $data_users[1][0];
		   ?>
		   <br>
		   <br>
		   <?php 
		   		$data_users = array(
		  			array("Петрова","Инна",22),
		  			array("Сидоров","Илья",25),
		  			array("Иванова","Валя",27)
		  		);
		  		echo "<table><tr><th>Фамилия</th><th>Имя</th><th>Возраст</th></tr>";
		  		for ($row=0; $row<count($data_users); $row++) { 
		  			echo "<tr>";
		  			for ($column=0; $column<3 ; $column++) { 
		  				echo "<td>" .$data_users[$row][$column]."</td>";
		  			}
		  			echo "</tr>";
		  		}
		  		echo "</table>";
		    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>4.DATA TYPES AND CONSTANTS IN PHP.</title>
</head>
<body>

		<!-- String -->

	<?php 
		$message = "Hello, ";
		$name = 'Maria!';
		echo $message;
		echo $name;
	 ?>

	 <br>
	 <br>
	 <br>
		
	 <?php 
	 	$message = "Hello, ";
		$name = 'Maria!';
		echo var_dump($message);
		echo "<br/>";
		echo var_dump($name);
	  ?>

	  <br>
	  <br>
	  <br>

		<!-- Integer -->

	  <?php 
	  	$ages = 27;
	  	echo $ages;
	  	echo "<br/>";
	  	echo var_dump($ages);
	  	echo "<br/>";
	  	$temp = -10;
	  	echo $temp;
	  	echo "<br/>";
	  	echo var_dump($temp);
	   ?>

	   <br>
	   <br>
	   <br>

	    <!-- Float -->

	    <?php 
	    	$weight = 67.8;
	    	echo $weight;
	    	echo "<br/>";
	    	echo var_dump($weight);
	     ?>
		
		<br>
		<br>
		<br>

		<!-- Boolean -->
		

		 <!-- Array -->

		 <?php 
		 	$flowers = array("rose", "tulip", "orchid");
		 	echo "<br/>";
		 	echo var_dump($flowers);
		  ?>
		
		<!-- Object -->
		
		<br>
		<br>
		<br>

		<!-- Null -->

		<?php 
			$name = null;
			var_dump($name);
		 ?>

		 <!-- Resource -->
		
		<br>
		<br>
		<br>

		 <!-- CONSTANS -->

		<?php 
			define('companyName', 'Codifun', true);
			echo CompanyName;
		 ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>13.SUPERGLOBAL PHP VARIABLES. FORM PROCESSING.</title>
	<style type="text/css">
		body {
			font-family: Arial, Helvetica, sans-serif;
			font-size: 1.2rem;
		}
	</style>
</head>
<body>
	<!-- Метод передачи данных на сервер POST -->
	<h1>Данные для передачи на сервер, методом POST</h1>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	<input type="text" name="name" placeholder="Ваше имя">  
	<br>
	<textarea name="name" placeholder="Ваше имя"></textarea>
	<br>
	<input type="email" name="email" placeholder="Ваш адрес электронной почты">	
	<br>
	<input type="submit" name="submit" value="Отправить данные">
	</form>
	<br>
	<?php 
		$name = "Anonymous";
		$email = "Not_emal@gmail.com";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (!empty($_POST['name'])) {
				$name = $_POST['name'];
			}
			if (!empty($_POST['email'])) {
				$email = $_POST['email'];
			}
		echo "Ваше имя: ".$name." и ваш адрес электронной почты: ".$email;	
		}
	 ?>
	 <br>
	 <br>
	 <br>
	<!-- Метод передачи данных на сервер GET  -->
	 <h1>Данные для передачи на сервер, методом GET</h1>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
	<input type="text" name="name" placeholder="Ваше имя">  
	<br>
	<textarea name="name" placeholder="Ваше имя"></textarea>
	<br>
	<input type="email" name="email" placeholder="Ваш адрес электронной почты">	
	<br>
	<input type="submit" name="submit" value="Отправить данные">
	</form>
	<br>
	<?php 
		$name = "Anonymous";
		$email = "Not_emal@gmail.com";
		if ($_SERVER["REQUEST_METHOD"] == "GET") {
			if (!empty($_GET['name'])) {
				$name = $_GET['name'];
			}
			if (!empty($_GET['email'])) {
				$email = $_GET['email'];
			}
		echo "Ваше имя: ".$name." и ваш адрес электронной почты: ".$email;	
		}
	 ?>
</body>
</html>
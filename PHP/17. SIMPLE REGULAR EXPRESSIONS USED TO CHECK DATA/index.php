<?php 

function filter($data) {
	$data = htmlspecialchars($data);
	return $data;
}

function filter_2($data) {
	$data = trim($data);
	$data = htmlspecialchars($data);
	$data = stripslashes($data);
}
	$name = $email = "";
	$err_name = $err_mail = $message = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (!empty($_REQUEST['name'])) {
			$name = filter($_REQUEST['name']);
		} else {
			$err_name = "input name";
		}
		if (!empty($_REQUEST['email'])) {
			$email = filter($_REQUEST['email']);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$err_mail = "Insert valid email!";
			}
		} else {
			$err_mail = "input email";
		}
		if ($err_name.$err_mail=="") {
			$message = "Your name is:".$name. " and your email is:".$email;
		} else {
			$message = "input all data!";
		}
	}
 ?>
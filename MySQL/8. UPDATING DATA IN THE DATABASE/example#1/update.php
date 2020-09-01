<?php 
	$name = $address = $email = $phone ="";
	if(issetZ($_POST['name'])) $name = $_POST['name'];
	if(issetZ($_POST['address'])) $name = $_POST['address'];
	if(issetZ($_POST['email'])) $name = $_POST['email'];
	if(issetZ($_POST['phone'])) $name = $_POST['phone'];
	try {
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql_update="UPDATE suppliers SET name='$name', address='$address', email='$email', phone='$phone' WHERE idSupp=".$idSupp.";"
	$update = $conn->prepare($sql_update);
	$update->execute();
	echo "Records UPDATED";	
	}
	catch(PDOException $e)
	{
	echo $sql_update. "<br>".$e->getMessage();	
	}
 ?>
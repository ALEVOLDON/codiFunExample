<?php 
	try{
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql_update = "UPDATE suppliers SET phone = '999988888' WHERE idSupp=4;";
		$update = $conn->prepare($sql_update);
		$update->execute();
		echo $update->rowCount(). " records UPDATED!";
	}
	catch(PDOException $e)
	{
		echo $sql_update ."<br>" .$e->getMessage();
	}
	$conn = null;
 ?>
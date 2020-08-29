<?php
	$err=0;
	$name=$cost=$quantity="";
	if(!empty($_POST['name'])){
		$name = $_POST['name'];
	} else {$err++;}
	if(!empty($_POST['cost'])) {
		$cost = $_POST['cost'];
	} else {$err++;}
	if(!empty($_POST['quantity'])) {
		$quantity = $_POST['quantity'];
	} else {$err++;}
	if($err==0){
	try {
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sqlQuer = "INSERT INTO products (nameProduct, costProduct, quantity) VALUES ('Meat', '90', '60');";
		$conn->exec($sqlQuer);
		echo "Successfully insert data!";
	}
	catch(PDOException $e)
	{
	echo $sqlQuer."<br>".$e->getMessage();	
	}
} else {
	echo "input all data!";
}
	$conn = null;
 ?>

 <h3>insert data</h3>
 <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
 	<input type="text" name="name" placeholder="Product name" pattern="[A-z]{1,20}"><br>
 	<input type="text" name="cost" placeholder="Product cost" pattern="[0-9]{1,7}{\.}?[0-9]{0,4}"><br>
 	<input type="submit" value="insert data">
 </form>



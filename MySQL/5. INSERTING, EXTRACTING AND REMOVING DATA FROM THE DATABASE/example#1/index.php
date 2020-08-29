<?php 
	require "components/connect.php";
	require "components/delete.php";
	require "components/insert.php";
 ?>

 <?php 
 	echo "<h3>Content of the Products table</h3>";
 	echo "<table><tr><th>ID</th><th>Product name</th><th>Product cost</th><th>Product quantity</th></tr>";
 	
 	class TableRows extends RecursiveIteratorIterator
 	{
 		
 		function __construct($it)
 		{
 			parent::__construct($it, self::LEAVES_ONLY);
 		}
 		function current() {
 			return "<td>".parent::current()."</td>";
 		}
 		function beginChildren() {
 			echo "<tr>";
 		}
 		function endChildren() {
 			echo "</tr>"."\n";
 		}
 	}

 	require "connect.php";
 	try {
 		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 		$select = $conn->prepare("SELECT * FROM products;");
 		$select->execute();
 		$result = $select->setFetchMode(PDO::FETCH_ASSOC);
 		foreach (new TableRows(new RecursiveArrayIterator($select->fetchAll())) as $k => $val) {
 			echo $val;
 		}
 	}

 	catch(PDOException $e) {
 		echo "Error:".$e->getMessage();
 	}
 	$conn = null;
 	echo "</table>";
  ?>




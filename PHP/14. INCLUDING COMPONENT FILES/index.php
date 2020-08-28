<?php 
require'processing_data.php';
$mess = processingData();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>14.INCLUDING COMPONENT FILES</title>
	<style type="text/css">
		body {
			font-family: Arial, Helvetica, sans-serif;
			font-size: 1.25rem;
		}
	</style>
</head>
<body>
	<?php getInfo();?>
	<div class="container">
		<?php 
			echo "<span class='message'>".$mess."</span>";
			formGeneration();
		 ?>
	</div>
</body>
</html>
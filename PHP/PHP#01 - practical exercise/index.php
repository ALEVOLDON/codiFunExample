<?php 
require'processing_data.php';
$mess = processingData();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Feedback</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		<?php 
			formGeneration($mess);
			echo "<hr>";
			showData($mess);
		 ?>
	</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>22. DATA FILES IN PHP</title>
</head>
<body>
	
</body>
</html>

<?php 
	// создаем файл
$messages = fopen("messages.txt", "w") or die("Create error!");
// определяем данные
$text ="Hellen,\t";
$text.="Good products,\t";
$text.=date('d/m/y')."\n";
// вносим данные в файл
fwrite($messages,$text);
$text="John,\t";
$text.="Very nice services,\t";
$text.=date('d/m/y')."\n";
fwrite($messages, $text);
// закрываем файл
fclose($messages);
 ?>

 <?php 
 // мы открываем существующий файл для добавления данных
 $messages = fopen("messages.txt","a") or die("insert error!");
 $text= "Kelly,\t";
 $text.= "Hello,\t";
 $text.=date('d/m/y')."\n";
 fwrite($messages, $text);
 fclose($messages); 
  ?>

  <?php 
  	$read_messages = fopen("messages.txt","r") or die("File access error!");
  	while (!feof($read_messages)) {
  		echo fgets($read_messages). "<br>";
  	}
  	fclose($read_messages);
   ?>
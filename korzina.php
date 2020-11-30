<?php
	$connect = mysqli_connect("127.0.0.1","mysql","mysql","dodo");
	//$updating = "UPDATE korzina SET name = '".$_GET[namee]."', img = '".$_GET[imge]."', description = '".$_GET[descriptione]."', price = '".$_GET[pricee]."', id = '".$_GET[ide]."'";
 	//$zapros_vvoda = mysqli_query($connect, $updating); //запрос для ввода в таблицу
 	$text_zaprosa_vstavit = "INSERT INTO korzina (name, img, description, price) VALUES ('{$_GET["namee"]}','{$_GET["imge"]}','{$_GET["descriptione"]}','{$_GET["pricee"]}')";
 	$zapros_vvoda = mysqli_query($connect, $text_zaprosa_vstavit);
	header('Location: index.php');
?>
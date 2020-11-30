<?php
	$connect = mysqli_connect("127.0.0.1","mysql","mysql","dodo");
	$deleting = "DELETE FROM korzina";
 	$zapros_vvoda = mysqli_query($connect, $deleting); //запрос для ввода в таблицу

 	header('Location: index.php')
?>
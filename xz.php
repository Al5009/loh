<?php 
	$connect = mysqli_connect("127.0.0.1", "root", "", "store");
	$ins = "INSERT INTO tovari (name, text, img, price) VALUES ('" . $_GET['name'] . "', '" . $_GET['text'] . "', '" . $_GET['img'] . "', '" . $_GET['price'] . "')";
	mysqli_query($connect, $ins);
	header('Location: index.php');
 ?>
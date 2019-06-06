<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'aiaal_ch_15');
	$query = mysqli_query($connect, "INSERT INTO  posts(text,img,id) VALUES('" . $_POST['text'] . "', 'images/" . $_FILES['img']['name'] . "', '" . $_POST['id'] . "')");
	header("Location: http://jija/insta/str.php");
?>
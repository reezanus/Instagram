<?php $connect = mysqli_connect('127.0.0.1', 'root', '','aiaal_ch_15');
	$query = mysqli_query($connect, "DELETE FROM posts WHERE id ='" . $_POST['id'] . "'");
	header("Location: http://jija/insta/str.php");
?>
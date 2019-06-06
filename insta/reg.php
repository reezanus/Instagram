<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'aiaal_ch_15');
$query = mysqli_query($connect, "INSERT INTO insta(name, email, parol, login) VALUES('" . $_POST['name'] . "','" . $_POST['email'] . "','" . $_POST['parol'] . "','" . $_POST['login'] . "')");
	header("Location: http://jija/insta/avto.php")
?>
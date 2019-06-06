<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'aiaal_ch_15');
$query = mysqli_query($connect, "UPDATE posts SET text ='" . $_POST['text'] . "', img = 'images/" . $_FILES['img']['name'] . "' WHERE id= '" . $_POST['id'] . "'");
move_uploaded_file($_FILES['images']['tmp_name']);
header("Location: http://jija/insta/str.php");
 ?>

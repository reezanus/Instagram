<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'aiaal_ch_15');
$query = mysqli_query($connect, "SELECT * FROM insta WHERE email = '" . $_POST['email'] ."' and parol= '" . $_POST['parol'] . "'");
if($query->num_rows == 1){
	header("Location: http://jija/insta/str.php");
}else{
	header("Location: http://jija/insta/avto.php");
}
?>

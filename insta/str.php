<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
</head>
<body>
	<?php
		$connect = mysqli_connect('127.0.0.1', 'root', '', 'aiaal_ch_15');
		$query = mysqli_query($connect,'SELECT * FROM posts ORDER BY id DESC');
	?>
	<form method= "POST" action="create.php" enctype="multipart/form-data">
		<input type="" name="text">
		<input type="file" name="img">
		<button>Добавить пост</button>
	</form>
	<?php for($i=0;$i < $query->num_rows; $i++){ 
		$res = $query->fetch_assoc(); 
	?>
		<a href=""><?php echo '<img src="' . $res['img'] . '">'?></a>
		<?php echo $res['text']?>

		<form method= "POST" action="update.php" enctype="multipart/form-data">
			<?php echo '<input type="" name="text" value="' . $res['text'] . '">'; ?>
			<?php echo '<input type="file" name="img">'; ?>
			<?php echo '<input type="hidden" name="id" value="' . $res['id'] . '" >'; ?>
			<button>Редактировать</button>
		</form>
		<form method="POST" action="delete.php">
			<?php echo '<input type="hidden" name="id" value="' . $res['id'] . '" >'; ?>
			<button>Удалить</button>
		</form>

	<?php } ?>
</body>
</html>
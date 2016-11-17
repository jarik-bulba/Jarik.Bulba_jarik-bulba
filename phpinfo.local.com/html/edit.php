<?php
	include_once "db.php";
	$id = $_GET['id'];
	$query = "SELECT id, login, password FROM `users` WHERE id='$id'";
	$result = mysqli_query($connection, $query);
	$row = mysqli_fetch_assoc($result);

	if(isset($_POST['save'])){
		$edlogin =  $_POST['login'];
		$edpassword = md5($_POST['password']);

	$query = "UPDATE users SET login='$edlogin', password='$edpassword' WHERE id='$id'";
	$result = mysqli_query($connection, $query);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container mlogin">
	<form action="edit.php?id=<?=$id; ?>" method="POST">
		<label>Login
			<input class="input" type="text" name="login" value="<?=$row['login']?>">
		</label>
		<label>Password
			<input class="input" type="text" name="password" value="<?=$row['password']?>"><br>
		</label>
		<input class="e_button" type="submit" name="save" value="Изменить данные">
		<p><a href="session_login.php">Назад</a></p>
	</form>
</div>
</body>
</html>
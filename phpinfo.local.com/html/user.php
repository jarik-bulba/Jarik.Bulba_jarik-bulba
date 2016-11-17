<?php include_once 'user_login.php' ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login User</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container mlogin">
	<div id="login">
		<h1>Авторизация</h1>
		<form action="user_login.php" method="POST" name="loginform">
			<p>
				<label>Логин пользователя<br>
					<input class="input" name="e_login" size="20" type="text" value="" required="required">
				</label>
			</p>
			<p>
				<label>Пароль<br>
		 			<input class="input" name="e_password" size="20" type="password" value="" required="required">
		 		</label>
		 	</p> 
			<p class="submit">
				<input class="button" name="enter" type="submit" value="Enter">
			</p>
			
			<p><a href= "index.php">Главная</a></p>
			
		</form>
 	</div>
</div>
</body>
</html>
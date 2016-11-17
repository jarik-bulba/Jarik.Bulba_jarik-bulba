<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login Admin</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container mlogin">
	<div id="login">
		<h1>Авторизация</h1>
		<form action="session.php" method="POST" name="loginform">
			<p>
				<label>Логин администратора<br>
					<input class="input" name="login" size="20" type="text" value="" required="required">
				</label>
			</p>
			<p>
				<label>Пароль<br>
		 			<input class="input" name="pass" size="20" type="password" value="" required="required">
		 		</label>
		 	</p> 
			<p class="submit">
				<input class="button" name="log" type="submit" value="Log In">
			</p>
			<p><a href= "index.php">Главная</a></p>
		</form>
 	</div>
</div>
</body>
</html>
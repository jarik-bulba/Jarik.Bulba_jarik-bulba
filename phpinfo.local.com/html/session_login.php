<?php session_start();
	include "selectuser.php";
	include "db.php";
	
	if($_GET['do'] == 'logout'){
		unset($_SESSION['userlogin']);
		session_destroy();
	}
	
	if(!$_SESSION['userlogin']){
		header('Location: admin.php');
		exit;
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Админка</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/adminka.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<header>
				<div class="col-md-6"><p class="navbar-text navbar-left">Вы вошли как <a href="#" class="navbar-link"><?php echo $_SESSION['userlogin']; ?></a></p></div>
				<div class="col-md-6 exit"><a href="session_login.php?do=logout">Выход</a></div>
			</header>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="main">
				<h1>Пользователи сайта</h1>
				<?php foreach ($rows as $row): ?>
				<div class="row">
					<div class="col-md-1">
						<?=$row['id'] ?>
					</div>
					<div class="col-md-4">	
						<?=$row['login'] ?>
					</div>
					<div class="col-md-4">						
						<?=$row['password'] ?>
					</div>
					<div class="col-md-2">
						<a href="edit.php?id=<?=$row['id']?>>" style="display: block; float: right;"><img src="images/edit.png" alt="Реактировать" title="Реактировать"></a>
					</div>
				</div>
				
				<?php endforeach; ?>
			</div>
		</div>
		<!---***********************************SIDEBAR*********************************************-->
		<div class="col-md-4">
			<div class="sidebar">
				<div class="adduser">
					<form action="adduser.php" method="post">
						<h4>Довавить нового пользователя</h4>
						<p>
							<label>E-mail</label><br>
							<input class="input" type="text" name="log" required="required">
						</p>
						<p>
							<label>Password</label><br>
							<input class="input" type="password" name="pass" required="required">
						</p>
						<p>
							<input class="button" type="submit" name="addusers" value="Добавить">
						</p>
	 				</form>
				</div>
				<div class="deluser">
					<form action="deluser.php" method="POST">
						<h4>Удалить пользователя</h4>
						<input class="input" type="text" name="del" placeholder="Введите ID">
						<input class="button" type="submit" name="id" value="Удалить">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
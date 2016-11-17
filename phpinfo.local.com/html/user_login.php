<?php 
	include_once'db.php';
	session_start();
	if(isset($_POST['enter'])){
		$e_login = $_POST['e_login'];
		$e_password = md5($_POST['e_password']);

		$query = "SELECT * FROM `users` WHERE login='$e_login' && password='$e_password';";
		$result = mysqli_query($connection, $query);
		$user_data = mysqli_fetch_assoc($result);


		if($user_data['password'] == $e_password){
			echo '<p style="color:red; font-size: 25px; text-align: center;">Вы успешно авторизировались</p>';
		}else{
			header("Location: usintropage.php");
		}
	}
?>
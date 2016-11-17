<?php
include_once "db.php";
	if(isset($_POST['addusers'])){
		$login = htmlspecialchars($_POST['log']);
		$password = htmlspecialchars($_POST['pass']);
		
		$connection->query("insert into `users` set `login`='$login', `password`='".md5($password)."'");
		header("Location: session_login.php");
	}
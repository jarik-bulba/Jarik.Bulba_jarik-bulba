<?php
session_start();
$userlogin = "admin";
$password = "admin";
unset($_SESSION['userlogin']);
/*if(isset($_GET['exeit'])) {
	unset($_SESSION['name']);
}*/
/*
if (isset($_POST['login']) && isset($_POST['pass'])) { 
	if ($_POST['login'] == $userlogin && $_POST['pass'] == $password) {
		header("location: session_login.php");
		$_SESSION['name'] = $userlogin;
		
	}else{
		header('Location: index.php');
	}
}*/


if($_POST['log']){
	if (isset($_POST['login']) && isset($_POST['pass'])) { 
	if ($_POST['login'] == $userlogin && $_POST['pass'] == $password) {
		$_SESSION['userlogin'] = $userlogin;
		header("location: session_login.php");
		exit;		
	}else{
		header("location: intropage.php");
	}
}
}


?>
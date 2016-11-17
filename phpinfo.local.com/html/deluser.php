<?php
include_once "db.php";
	if(isset($_POST['id'])){
		$del = $_POST['del'];
		$connection->query("delete from `users` WHERE id='$del'");
		header("Location: session_login.php");
		
	}
?>
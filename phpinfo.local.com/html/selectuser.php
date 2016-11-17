<?php
include_once "db.php";

    	$query = "SELECT * FROM users";
    	$result = mysqli_query($connection, $query);
    	if (!$result) die ("Сбой при доступе к базе данных: " . mysqli_error());

		$rows = array();

     while ($row = mysqli_fetch_array($result)) {
      $rows[] = $row;
     }
     return $rows;
       		
?>
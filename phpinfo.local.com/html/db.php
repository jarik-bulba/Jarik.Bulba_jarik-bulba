<?php
    $db_hostname = 'localhost';
    $db_username = 'root';
    $db_password = 'nodive1996';
    $db_database = 'worksite';
    $connection = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
    if(mysqli_connect_error()){
    echo 'Ошибка в подключении к базе данных' .mysql_connect_error();
    exit();
    }
    

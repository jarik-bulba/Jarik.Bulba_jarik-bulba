<?php
require_once 'includes/global.inc.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>



<form action="register.php" method="POST">
    <ul>
        <li>
            <label>Username:</label><br>
            <input type="text" value="<?=$username; ?>" name="username">
        </li>
        <li>
            <label>Password</label><br>
            <input type="password" value="<?=$password; ?>" name="password">
        </li>
        <li>
            <label>Password (confirm):</label><br>
            <input type="password" value="<?=$password_confirm; ?>" name="password-confirm">
        </li>
        <li>
            <label>E-Mail:</label><br>
            <input type="text" value="<?=$emil?>" name="email">
        </li>
        <li><input type="submit" value="Register" name="submit-form"></li>
    </ul>
</form>
</body>
</html>

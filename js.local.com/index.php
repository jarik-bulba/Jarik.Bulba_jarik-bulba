<?php
    session_start();
    require_once "sesion.php"
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method = "post">
    <table>
        <tr>
            <td>Ударьте противника:</td>
            <td><input type = "number" size="3" min="1" max="3" name = 'number'></td>
        </tr>
        <tr>
            <td><input type = "submit"></td>
        </tr>
    </table>
</form>
</body>
</html>

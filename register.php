<?php
session_start();
define("SEVERNAME", "localhost");
define("DB_LOGIN", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "shop");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Регистрация</title>
</head>
<body>
    <h1>Регестрация</h1>
    <form action="avant/regadd.php" method="POST">
        <input type="text" name="f_name" placeholder="ФИО">
        <br>
        <input type="email" placeholder="Email" name="reg_email">
        <br>
        <input type="password" placeholder="Password" name="reg_pass">
        <br>
        <input type="submit" vlaue="ОК" class="register" name="reg_submit">
        <div>
            Есть аккаунт?
        </div>
        <a href="index.php">Авторизация</a>
    </form>
</body>
</html>
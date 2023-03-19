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
    <link rel="stylesheet" href="/css/reg.css">
    <title>Регистрация</title>
</head>
<body>
    <div class="form">
        <h1>Регистрация</h1>
        <form action="avant/regadd.php" method="POST">
            <div class="top">
                <input type="text" name="f_name" placeholder="ФИО" class="form-input">
                <br>
                <input type="email" placeholder="Email" name="reg_email" class="form-input">
                <br>
                <input type="password" placeholder="Password" name="reg_pass" class="form-input">
            </div>
            <br>
            <input type="submit" vlaue="ОК" class="register" name="reg_submit">
            <div class="acc">
                Есть аккаунт?
                <br>
                <a href="index.php">Авторизация</a>
            </div>
        </form>
    </div>
</body>
</html>
<?php
session_start();

define("SEVERNAME", "localhost");
define("DB_LOGIN", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "shop");

$connect = new mysqli(SEVERNAME, DB_LOGIN, DB_PASSWORD, DB_NAME);
$sql = "SELECT * FROM `user`";
$res = $connect->query($sql);
$user = array();
while ($row = $res->fetch_assoc()) {
    $user[] = $row;
}
$connect->close();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Авторизация</title>
</head>
<body>
    <h1 class="titles">Авторизация</h1> 
    <form action="/avant/log_in.php" method="POST">   
        <input type="email" class="email" placeholder="Email" name="email">
        <input type="password" class="pass" placeholder="Password" name="pass">
        <input type="submit" value="Войти" name="login" class="sub">
    </form>
    <br>
    <div class="not_acc">
        Нету аккауна?
    </div>
    <a href="register.php" class="l_register">Регистрация</a>
    <a href="gost.php" class="gost">Гость</a>
</body>
</html>
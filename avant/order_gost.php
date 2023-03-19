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
    <title>Оформление заказа</title>
</head>
<body>
    <form action="/avant/addoredr_gost.php" method="POST">
        <h1>Оформление заказа</h1>
        <input type="text" placeholder="ФИО" name="f_name" required> 
        <input type="text" placeholder="Телефон" name="number" required>   
        <input type="int" placeholder="Количество" name="skoko" required>
        <input type="submit" value="Заказать" name="sub">   
    </form>         
</body>
</html>
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
    <link rel="stylesheet" href="/css/order_gost.css">
    <title>Оформление заказа</title>
</head>
<body>
    <div class="form">
        <h1>Оформление заказа</h1>
        <form action="/avant/addoredr_gost.php" method="POST">
            <div class="top">
                <input type="text" placeholder="ФИО" name="f_name" class="form-input" required>
                <br>
                <input type="text" placeholder="Телефон" name="number" class="form-input" required>
                <br>  
                <input type="int" placeholder="Количество" name="skoko" class="form-input" required>
            </div>
            <br>
            <input type="submit" value="Заказать" name="sub" class="buy">
            <div class="title">
                <a href="/gost.php">Главная</a>  
            </div> 
        </form>
    </div>
</body>
</html>
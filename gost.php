<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$db_name = "shop";

$conecction = mysqli_connect($host, $user, $password, $db_name);

$query = "SELECT * FROM `product_gost`";

$req = mysqli_query($conecction, $query);

$data_db = [];

while($resulst = mysqli_fetch_assoc($req)){
    $data_db[] = $resulst;
}

//var_dump($data_db);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Shop</title>
</head>
<body>
    <div class="header__content">
        <h1 class="header__title-shop">Sport Shop</h1>
        <ul class="header__lists">
            <li>
                <a href="/index.php" class="header__list-link sigin"> Вход </a>
            </li>
            <li>
                <a href="/register.php" class="header__list-link reg"> Регистрация </a>
            </li>
            <li>
                <a class="header__list-gost">Гость</a>
            </li>
        </ul>
    </div>
    <hr class="line">

    <div id="centre">

        <?php foreach($data_db as $product): ?>

        <div class="product">
            <img class="photo" src="/img/<?php echo $product['pthoto'];?>.png" alt="">
            <h2 class="name_prod">
                <?php echo $product['title']?>
            </h2>
            <p class="name_dis">
                <?php echo $product['discription']?>
            </p>
            <p class="name_price">
                <strong>
                    <?php echo $product['price']?> грн.
                </strong>
            </p>
            <div class="order_content">
                <a href="/oreder.php" class="buy">Заказать</a>
                <a href="" class="save">В корзину</a>
            </div>
        </div>
        <?php endforeach;?>
    </div> 
</body>
</html>
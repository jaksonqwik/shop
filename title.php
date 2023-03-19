<?php
session_start();

if(isset($_SESSION['save.php'])){
    echo "Корзина: " . count($_SESSION['cart_list']);
}

$host = "localhost";
$user = "root";
$password = "";
$db_name = "shop";

$conecction = mysqli_connect($host, $user, $password, $db_name);

$query = "SELECT * FROM `product`";

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
    <link rel="stylesheet" href="/css/title.css">
    <title>Shop</title>
</head>
<body>
    <div class="head_content">
        <h1 class="titel_shop">Sport Shop</h1>
        <ul class="user">
            <li>
                <p class="link name"><?= $_SESSION['user']['fullName']?></p>
            </li>
            <li>
                <p class="link email"><?= $_SESSION['user']['email']?></p>
            </li>
            <li>
                <a href="avant/logout.php" class ="log_out">Выход</a>
            </li>
        </ul>
    </div>
    <hr class="line">

    <div id="centre">

        <?php foreach($data_db as $product): ?>

        <div class="product">
            <img class="photo" src="/img/<?php echo $product['pthoto'];?>.png" alt="">
            <h2>
                <?php echo $product['title']?>
            </h2>
            <p>
                <?php echo $product['discription']?>
            </p>
            <p>
                <strong>
                    <?php echo $product['price']?> грн.
                </strong>
            </p>
            <div class="order_content">
                <a href="/oreder.php" class="buy">Заказать</a>
                <a href="/avant/save.php?prod_id=<?php echo $product['id'];?>" class="save">В корзину</a>
            </div>
        </div>
        <?php endforeach;?>
    </div> 
</body>
</html>
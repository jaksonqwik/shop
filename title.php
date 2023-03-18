<?php
session_start();
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
    <link rel="stylesheet" href="/css/style.css">
    <title>Shop</title>
</head>
<body>
    <form>
        <h1 class="titel_shop">Sport Shop</h1>
        <p align="right" class="full_name"><?= $_SESSION['user']['fullName']?></p>
        <p align="right" calass="email_title"><?= $_SESSION['user']['email']?></p>
        <div class="exit">
            <a href="avant/logout.php" class ="log_out">Выход</a>
        </div>

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
                <a href="/oreder.php">Заказать</a>
                <a href="">В корзину</a>
            </div>
            <?php endforeach;?>
        </div>  
    </form>
</body>
</html>
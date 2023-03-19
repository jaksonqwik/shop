<?php
session_start();

require_once("data.php");
require_once("func.php");

if(isset($_GET['delete_id']) && isset($_SESSION['save_list'])){
	foreach ($_SESSION['save_list'] as $key => $value) {
		if ( $value['id'] == $_GET['delete_id'] ) {
			unset($_SESSION['save_list'][$key]);
		}		
	}
}

if ( isset($_GET['prod_id']) && !empty($_GET['prod_id']) ) {

	$prod_add = get_prod_id($_GET['prod_id']);

	// ...
	if ( !empty($prod_add) ) {

		if ( !isset($_SESSION['save_list'])) {
			$_SESSION['save_list'][] = $prod_add;
		}


		$prod_check = false;

		if ( isset($_SESSION['save_list']) ) {
			foreach ($_SESSION['save_list'] as $value) {
				if ( $value['id'] == $prod_add['id'] ) {
					$prod_check = true;
				}
			}
		}


		if ( !$prod_check ) {
			$_SESSION['save_list'][] = $prod_add;
		}

	} else {
		header("Location: 404.php");
	}
	
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/title.php">Главная</a>
    <h1>Корзина</h1>

    <?php if(isset($_SESSION['save_list']) && count($_SESSION['save_list']) !=0): ?>

        <ul>
            <?php foreach($_SESSION['save_list'] as $product): ?>

                <li>
                    <?php echo $product['title']; ?> |
                    <?php echo $product['price']; ?> грн.|
                    <a href="save.php?delete_id=<?php echo $product['id'];?>">X</a>
                </li>
            <?php endforeach;?>
        </ul>
    <?php else: ?>
        <p>
            Пусто
        </p>
    <?php endif;?>

    <a href="/title.php">Продолжить покупки</a>
    <br>
    <a href="/oreder.php">Оформить заказ</a>
</body>
</html>
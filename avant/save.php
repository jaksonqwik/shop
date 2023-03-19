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
    <link rel="stylesheet" href="/css/save.css">
    <title>Корзина</title>
</head>
<body>
    <div class="header__content">
        <h1 class="title_save">Корзина</h1>
        <ul class="header__lists">
            <li>
                <a href="/title.php" class="header__list-link">Главная</a>
            </li>
        </ul>
            
        </div>
        <hr class="line">

        <?php if(isset($_SESSION['save_list']) && count($_SESSION['save_list']) !=0): ?>

            <ul class="product_list">
                <?php foreach($_SESSION['save_list'] as $product): ?>

                    <li>
                        <?php echo $product['title']; ?> |
                        <?php echo $product['price']; ?> грн.|
                        <a href="save.php?delete_id=<?php echo $product['id'];?>" class="product_list-del">Удалить</a>
                    </li>
                <?php endforeach;?>
            </ul>
            <ul class="list_buy">
                <li>
                    <a href="/title.php" class="header__list-buy">Продолжить покупки</a>
                </li>
                <li>
                    <a href="/oreder.php" class="header__list-buy2">Оформить заказ</a>
                </li>
            </ul>
        <?php else: ?>
            <p class="product_list">
                Пусто
            </p>
        <?php endif;?>
    </div>
</body>
</html>
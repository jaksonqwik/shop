<?php
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

?>
<?php
session_start();
define("SEVERNAME", "localhost");
define("DB_LOGIN", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "shop");

$connect = new mysqli(SEVERNAME, DB_LOGIN, DB_PASSWORD, DB_NAME);
$sql = "SELECT * FROM `orders`";
$res = $connect -> query($sql);
for($user = array(); $row = $res -> fetch_assoc(); $user[]=$row);

$f_name = $_POST['f_name'];
$number = $_POST['number'];
$skoko = $_POST['skoko'];
$name = $_POST['name'];

$res = mysqli_query($connect, "INSERT INTO `orders`(`id`, `fullName`, `number`, `skok_prod`, `name`) VALUES (NULL,'$f_name','$number','$skoko', '$name')");
header("Location: ../title.php");

$connect -> close();
?>


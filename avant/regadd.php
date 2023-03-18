<?php
session_start();
define("SEVERNAME", "localhost");
define("DB_LOGIN", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "shop");

$connect = new mysqli(SEVERNAME, DB_LOGIN, DB_PASSWORD, DB_NAME);
$sql = "SELECT * FROM `user`";
$res = $connect -> query($sql);
for($user = array(); $row = $res -> fetch_assoc(); $user[]=$row);

$f_name = $_POST['f_name'];
$email = $_POST['reg_email'];
$pass = $_POST['reg_pass'];
$pass = md5($pass);

$res = mysqli_query($connect, "INSERT INTO `user`(`id`, `fullName`, `email`, `password`) VALUES (NULL,'$f_name','$email','$pass')");
header("Location: ../index.php");

$connect -> close();

?>
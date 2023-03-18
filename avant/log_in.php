<?php
session_start();

define("SEVERNAME", "localhost");
define("DB_LOGIN", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "shop");

$connect = new mysqli(SEVERNAME, DB_LOGIN, DB_PASSWORD, DB_NAME);
$sql = "SELECT * FROM `user`";
$res = $connect->query($sql);
$user = array();
while ($row = $res->fetch_assoc()) {
    $user[] = $row;
}

$email = $_POST['email'];
$pass = $_POST['pass'];
$pass = md5($_POST['pass']);

$check = mysqli_query($connect, "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$pass'");
if(mysqli_num_rows($check) > 0){
    $user = mysqli_fetch_assoc($check);

    $_SESSION['user'] = [
        "id" => $user['id'],
        "fullName" => $user['fullName'],
        "login" => $user['login'],
        "email" => $user['email'],
    ];
    header("Location: ../title.php");
}
else{
    $_SESSION['message'] = "Неверный пороль или логин";
    header("Location: ../index.php");
}


?>
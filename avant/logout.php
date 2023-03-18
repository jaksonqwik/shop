<link rel="stylesheet" href="/css/style.css">
<?php
session_start();
unset($_SESSION['user']);
header("Location: ../index.php");
?>
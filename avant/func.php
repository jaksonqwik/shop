<?php
require_once("data.php");

function get_prod_id($id){
    global $conecction;

    $query = "SELECT * FROM `product` WHERE id=" . $id;
    $req = mysqli_query($conecction, $query);
    $resp =  mysqli_fetch_assoc($req);

    return $resp;
}

?>
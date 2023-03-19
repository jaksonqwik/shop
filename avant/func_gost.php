<?php
require_once("data_gost.php");

function get_prod_id($id){
    global $conecction;

    $query = "SELECT * FROM `product_gost` WHERE id=" . $id;
    $req = mysqli_query($conecction, $query);
    $resp =  mysqli_fetch_assoc($req);

    return $resp;
}

?>
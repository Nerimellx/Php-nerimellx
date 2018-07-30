<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
require_once "Config/config.php";
require "function.php";   
$id = clear_string($_POST["id"]);
$result = mysqli_query($connection, "SELECT `cart_count` FROM cart WHERE cart_ip = '{$_SERVER['REMOTE_ADDR']}' AND cart_id_product = '$id'");
If (mysqli_num_rows($result) > 0)
{
$row = mysqli_fetch_array($result);  
$new_count = $row["cart_count"] + 1;
$update = mysqli_query ($connection, "UPDATE cart SET cart_count='$new_count' WHERE cart_ip = '{$_SERVER['REMOTE_ADDR']}' AND cart_id_product = '$id'");  
}
else
{
    $result = mysqli_query($connection, "SELECT * FROM product WHERE id = '$id'");
    $row = mysqli_fetch_array($result);
    mysqli_query($connection, "INSERT INTO `cart` (`cart_id`, `cart_id_product`, `cart_price`, `cart_count`, `cart_ip`)
     VALUES (NULL, '".$row['id']."', '".$row['cost']."', '1', '".$_SERVER['REMOTE_ADDR']."' )");

}
}

?>﻿ 
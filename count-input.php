<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
require_once "Config/config.php";
require "function.php";
$id = clear_string($_POST["id"]);
$result = mysqli_query($connection, "SELECT * FROM cart WHERE cart_id = '$id' AND cart_ip = '{$_SERVER['REMOTE_ADDR']}'");
If (mysqli_num_rows($result) > 0)
{
$row = mysqli_fetch_array($result);
$new_count = (int)$_POST["count"];
if ($new_count > 0)
{
$update = mysqli_query ($connection, "UPDATE cart SET cart_count='$new_count' WHERE cart_id = '$id' AND cart_ip = '{$_SERVER['REMOTE_ADDR']}'");
echo $new_count;
}
else
{
	echo $row['cart_count'];
}
}
}
?>
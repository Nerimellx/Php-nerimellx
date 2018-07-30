<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
require_once "Config/config.php";
require "function.php";
$result = mysqli_query($connection, "SELECT * FROM cart WHERE cart_ip = '{$_SERVER['REMOTE_ADDR']}'");
If (mysqli_num_rows($result) > 0)
{
$row = mysqli_fetch_array($result);
do
{

$int = $int + ($row["cart_price"] * $row["cart_count"]);

}	while($row = mysqli_fetch_array($result));

echo $int;
}
}
?>
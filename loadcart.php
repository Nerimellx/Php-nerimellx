<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
require_once "Config/config.php";
$result = mysqli_query($connection, "SELECT * FROM cart,product WHERE cart.cart_ip = '{$_SERVER['REMOTE_ADDR']}' AND product.id = cart.cart_id_product");
If (mysqli_num_rows($result) > 0)
{
$row = mysqli_fetch_assoc($result);
	do
{
$count = $count + $row["cart_count"];
}
while($row = mysqli_fetch_assoc($result));
echo '<span>('.$count.')</span>';
}
else
{
	echo '0';
}
}
?>
<?php

mysqli_query($connection, " UPDATE `product` SET `image` = '".$_POST["image"]."' WHERE `product`.`id` = '$Cats'");
mysqli_query($connection, " UPDATE `product` SET `name` = '".$_POST["name"]."' WHERE `product`.`id` = '$Cats'");
mysqli_query($connection, " UPDATE `product` SET `cost` = '".$_POST["cost"]."' WHERE `product`.`id` = '$Cats'");
mysqli_query($connection, " UPDATE `product` SET `top` = '".$_POST["top"]."' WHERE `product`.`id` = '$Cats'");
mysqli_query($connection, " UPDATE `product` SET `type` = '".$_POST["type"]."' WHERE `product`.`id` = '$Cats'");
mysqli_query($connection, " UPDATE `product` SET `visible` = '".$_POST["visible"]."' WHERE `product`.`id` = '$Cats'");
mysqli_query($connection, " UPDATE `product` SET `categories_ip` = '".$_POST["categories_ip"]."' WHERE `product`.`id` = '$Cats'");
mysqli_query($connection, " UPDATE `product` SET `text` = '".$_POST["text"]."' WHERE `product`.`id` = '$Cats'");
?>
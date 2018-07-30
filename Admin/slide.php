<?php

mysqli_query($connection, " UPDATE `Slider` SET `image` = '".$_POST["image"]."' WHERE `Slider`.`id` = 1");
mysqli_query($connection, " UPDATE `Slider` SET `name` = '".$_POST["name"]."' WHERE `Slider`.`id` = 1");
mysqli_query($connection, " UPDATE `Slider` SET `text` = '".$_POST["text"]."' WHERE `Slider`.`id` = 1");
mysqli_query($connection, " UPDATE `Slider` SET `image` = '".$_POST["image1"]."' WHERE `Slider`.`id` = 2");
mysqli_query($connection, " UPDATE `Slider` SET `name` = '".$_POST["name1"]."' WHERE `Slider`.`id` = 2");
mysqli_query($connection, " UPDATE `Slider` SET `text` = '".$_POST["text1"]."' WHERE `Slider`.`id` = 2");
mysqli_query($connection, " UPDATE `Slider` SET `image` = '".$_POST["image2"]."' WHERE `Slider`.`id` = 3");
mysqli_query($connection, " UPDATE `Slider` SET `name` = '".$_POST["name2"]."' WHERE `Slider`.`id` = 3");
mysqli_query($connection, " UPDATE `Slider` SET `text` = '".$_POST["text2"]."' WHERE `Slider`.`id` = 3");
?>
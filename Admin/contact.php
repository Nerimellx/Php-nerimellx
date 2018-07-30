<?php

mysqli_query($connection, " UPDATE `contact` SET `number` = '".$_POST["Number"]."' WHERE `contact`.`id` = 1");
mysqli_query($connection, " UPDATE `contact` SET `instagram` = '".$_POST["Instagrm"]."' WHERE `contact`.`id` = 1");
mysqli_query($connection, " UPDATE `contact` SET `email` = '".$_POST["Email"]."' WHERE `contact`.`id` = 1");
?>
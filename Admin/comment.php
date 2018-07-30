<?php

mysqli_query($connection, " UPDATE `coment` SET `name` = '".$_POST["name"]."' WHERE `coment`.`id` = '".$_POST["id"]."'");
mysqli_query($connection, " UPDATE `coment` SET `text` = '".$_POST["text"]."' WHERE `coment`.`id` = '".$_POST["id"]."'");
?>
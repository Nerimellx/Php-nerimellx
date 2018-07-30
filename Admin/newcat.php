<?php
		mysqli_query($connection, "INSERT INTO `Categories` (`id`, `Categor`, `Type`) VALUES (NULL, '".$_POST["Categor"]."', '".$_POST["Type"]."')");
?>
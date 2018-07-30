<?php
		mysqli_query($connection, "INSERT INTO `product` (`id`, `name`, `image`, `text`, `cost`, `type`, `visible`, `top`, `categories_ip`) 
			VALUES (NULL, '".$_POST["name"]."',
			 '".$_POST["image"]."',
			  '".$_POST["text"]."',
			   '".$_POST["cost"]."',
			    '".$_POST["type"]."',
			     '".$_POST["visible"]."',
			      '".$_POST["top"]."',
			       '".$_POST["categories_ip"]."')");
?>
<?php
require_once "Config/config.php";
?>
				<aside class="category-aside col-md-3 col-sm-12 col-xs-12">

					<div class="category-menu">
								
						<h3>Категории</h3>
						<div class="search">
						</div>
						<ul>
							<li>
								<a href="/Categories.php?type=Cloth">Белье</a>
							<?php
 							$categories = mysqli_query($connection, "SELECT * FROM `Categories` WHERE `type` = 'Cloth'")
							?>
								<ul>
							<?php
							while ( $cat = mysqli_fetch_assoc($categories) )
       						{
							?>
							<li><a href="/Categories.php?id=<?php echo $cat['id']?>&type=<?php echo $cat['Type']?>"><?php echo $cat['Categor']?></a></li>
							<?php
							}
							$Elsecat = mysqli_query($connection, "SELECT * FROM `Categories` WHERE `type` != 'Cloth'")
							?>
								</ul>
							</li>
							<?php
							while ( $Else = mysqli_fetch_assoc($Elsecat) )
       						{
							?>
							<li><a href="/Categories.php?id=<?php echo $Else['id']?>&type=<?php echo $Else['Type']?>"><?php echo $Else['Categor']?></a></li>
							<?php
							}
							?>
							<li><a href="/New.php"><strong>Новинки</h4></strong></li>
							<li><a href="/Categories.php">Разное</a></li>
						</ul>
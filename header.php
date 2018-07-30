<?php
require_once "Config/config.php";
?>
	<header class="main-head">
		
		<nav class="top-line">

			<div class="mobile-mnu hidden-md hidden-lg">
				<a href="#" class="toggle-mnu hidden-lg"><span></span></a> <b>Меню</b>
			</div>
			
			<div class="container">
				
				<ul class="sf-menu">
					<li class="active"><a href="index.php">Главная</a></li>
					<li>
						<a href="/Categories.php">Товары и услуги <i class="fa fa-caret-down" aria-hidden="true"></i></a>
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
								$Elsecat = mysqli_query($connection, "SELECT * FROM `Categories` WHERE `type` = 'Else'")
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
							<li><a href="/Categories.php">Разное</a></li>
						</ul>
					</li>
					<li><a href="reviews.php">Отзывы</a></li>
					<li><a href="contacts.php">Контакты</a></li>
							<?php
							$count = mysqli_query($connection, "SELECT COUNT(cart_id) FROM `Cart` WHERE `cart_ip` = '{$_SERVER['REMOTE_ADDR']}'");
							$countx = mysqli_fetch_assoc($count);
							?>
					<li><a id="block-basket" href="basket.php?action=oneclick">Корзина (<?php echo $countx['COUNT(cart_id)'];?>)</a></li>
					<li>
						<form id="form" class="search" name="poisk" method="get" action="Search.php?q=">
							<input type="Search" class="search-text" id="input-search" value="Поиск" onfocus="this.value=this.value=='Поиск'?'':this.value;" onblur="this.value=this.value==''?'Поиск':this.value;" name="q">
							<input type="submit" class="search-submit" id="button-search" value="">
						</form>
					</li>
				</ul>
			
			</div>
			
		</nav>

		<div class="container">
			<nav id="my-menu" class="hidden-md hidden-lg">
				<ul>
					<li class="active"><a href="index.php">Главная</a></li>
					<li>
						<a href="/Categories.php">Товары и услуги</a>
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
								$Elsecat = mysqli_query($connection, "SELECT * FROM `Categories` WHERE `type` = 'Else'")
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
							<li><a href="/Categories.php">Разное</a></li>
						</ul>
					</li>
					<li><a href="reviews.php">Отзывы</a></li>
					<li><a href="contacts.php">Контакты</a></li>
					<li><a id="block-basket" href="basket.php?action=oneclick">Корзина</a></li>
					<li>
						<form id="form" class="mob-search" name="poisk" method="get" action="">
							<input type="search" class="mob-search-text" value="Поиск" onfocus="this.value=this.value=='Поиск'?'':this.value;" onblur="this.value=this.value==''?'Поиск':this.value;" name="search">
							<input type="submit" class="mob-search-submit" value="">
						</form>
					</li>
				</ul>
			</nav>
		</div>

	</header>
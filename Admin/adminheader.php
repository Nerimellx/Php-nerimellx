	<header class="main-head">
		
		<nav class="top-line">

			<div class="mobile-mnu hidden-md hidden-lg">
				<a href="#" class="toggle-mnu hidden-lg"><span></span></a> <b>Меню</b>
			</div>
			
			<div class="container">
				
				<ul class="sf-menu">
					<li class="active"><a href="index.php?action=oneclick">Главная панель</a></li>
					<li>
						<a href="index.php">Все товары <i class="fa fa-caret-down" aria-hidden="true"></i></a>
						<ul>
							<li>
							<?php
 							$categories = mysqli_query($connection, "SELECT * FROM `Categories` WHERE `type` = 'Cloth'")
							?>
								<a href="index.php?type=Cloth">Белье (Cloth)</a>
								<ul>
							<?php
								while ( $cat = mysqli_fetch_assoc($categories) )
       					{
								?>
								<li><a href="index.php?id=<?php echo $cat['id']?>&type=<?php echo $cat['Type']?>"><?php echo $cat['Categor']?> (<?php echo $cat['Type']?> ( id: <?php echo $cat['id']?> ) )</a></li>
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
							<li><a href="index.php?id=<?php echo $Else['id']?>&type=<?php echo $Else['Type']?>"><?php echo $Else['Categor']?> (<?php echo $Else['Type']?> ( id: <?php echo $Else['id']?> ) )</a></li>
							<?php
							}
							?>
							<li><a href="index.php?action=oneclick">Разное</a></li>
						</ul>
					</li>
					<li><a href="correctcontact.php">Управление контактами</a></li>
					<li>
						<form id="form" class="search" name="poisk" method="get" action="Search.php?action=oneclick&q=">
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

	<div class="category">

		<div class="container">
			<div class="row">



				</div>
				<aside class="category-aside col-md-3 col-sm-12 col-xs-12">

					<div class="category-menu">
								
						<h3>Панель управления</h3>
						<div class="search">
						</div>
						<ul>
							<?php
							$count = mysqli_query($connection, "SELECT COUNT(*) FROM `coment` WHERE `confirmed` = 0");
							$countx = mysqli_fetch_assoc($count);
							?>
							<li><a href="reviewsadmin.php?action=oneclick">Управление коментариями +<?php echo $countx['COUNT(*)']; ?></a></li>
							<?php
							$countr = mysqli_query($connection, "SELECT COUNT(*) FROM `orders` WHERE `order_confirm` != 'Подтвержден'");
							$countp = mysqli_fetch_assoc($countr);
							?>
							<li><a href="orders_correct.php">Управление заказами +<?php echo $countp['COUNT(*)']; ?></a></li>
							<li><a href="Addnew_prod.php">Добавить товар</a></li>
							<li><a href="Addnew_cat.php">Добавить категорию</a></li>
							<li><a href="slidercorrect.php">Изменить слайдер</a></li>
						</ul>
					</div>
						<form method="POST">
							<input type="submit" name="logout" value="Выйти">
						</form>	
					<div class="category-aside-hot hidden-sm hidden-xs">
						<div class="container">
						<div class="row">
					</div>
			</aside>
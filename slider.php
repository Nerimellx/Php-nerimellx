<?php
require_once "Config/config.php";
?>
<?php
$slider = mysqli_query($connection, "SELECT * FROM `slider` WHERE `id` = 1");
$slide = mysqli_fetch_assoc($slider)

?>
	<div class="slider">
		<div class="slide">
			<div class="slide-bg" style="background-image: url(/img/slide-1.jpg);"></div>
			<div class="slide-content">
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-sm-9 col-xs-offset-1">
							<div class="row">
								<div class="col-md-6">
									<h2><?php echo $slide['name'] ?></h2>
									<p><?php echo $slide['text'] ?></p>
									<a href="#" class="button">Список услуг</a>
								</div>
								<div class="col-md-6 hidden-sm hidden-xs">
									<div class="slide-img-wrap">
										<img src="img/<?php echo $slide['image'] ?>" alt="Slide Img">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php
$slider2 = mysqli_query($connection, "SELECT * FROM `slider` WHERE `id` = 2");
$slide2 = mysqli_fetch_assoc($slider2)

?>		
			<div class="slide">
			<div class="slide-bg" style="background-image: url(img/slide-2.jpg);"></div>
			<div class="slide-content">
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-sm-9 col-xs-offset-1">
							<div class="row">
								<div class="col-md-6">
									<h2><?php echo $slide2['name'] ?></h2>
									<p><?php echo $slide2['text'] ?></p>
									<a href="#" class="button">Каталог</a>
								</div>
								<div class="col-md-6 hidden-sm hidden-xs">
									<div class="slide-img-wrap">
										<img src="img/<?php echo $slide2['image'] ?>" alt="Slide Img">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php
$slider3 = mysqli_query($connection, "SELECT * FROM `slider` WHERE `id` = 3");
$slide3 = mysqli_fetch_assoc($slider3)

?>	
			<div class="slide">
			<div class="slide-bg" style="background-image: url(img/slide-3.jpg);"></div>
			<div class="slide-content">
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-sm-9 col-xs-offset-1">
							<div class="row">
								<div class="col-md-6">
									<h2><?php echo $slide3['name'] ?></h2>
									<p><?php echo $slide3['text'] ?></p>
									<a href="#" class="button">Список услуг</a>
								</div>
								<div class="col-md-6 hidden-sm hidden-xs">
									<div class="slide-img-wrap">
										<img src="img/<?php echo $slide3['image'] ?>" alt="Slide Img">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- Slide End -->

	</div>


	</div>

	</section>

	</header>

	<section class="sect-teaser">
		
		<div class="container">
			<div class="row">

			<div class="col-sm-3 teaser-content">
				<div class="teaser-item">
					<div class="teaser-icon">
						<img src="img/belio_icon.png" alt="Product icon">
					</div>
					<div class="teaser-text">
						Мы занимаемся производством высококлассного нижнего белья, которое сделано из натуральных материалов.
					</div>
				</div>
			</div>
			<div class="col-sm-3 teaser-content">
				<div class="teaser-item">
					<div class="teaser-icon">
						<img src="img/erotic_png.png" alt="Product icon">
					</div>
					<div class="teaser-text">
						У нас вы можете приобрести эротическое нижнее белье, которое заставит порадоваться вашего любимого.
					</div>
				</div>
			</div>
			<div class="col-sm-3 teaser-content">
				<div class="teaser-item">
					<div class="teaser-icon">
						<img src="img/pajama_icon.png" alt="Product icon">
					</div>
					<div class="teaser-text">
						Порадуйте себя пижамой, которая сделает ваш сон более приятным, и просыпаться на работу в нем будет уже не так трудно!
					</div>
				</div>
			</div>
			<div class="col-sm-3 teaser-content">
				<div class="teaser-item">
					<div class="teaser-icon">
						<img src="img/erotic_png.png" alt="Product icon">
					</div>
					<div class="teaser-text">
						У нас вы можете приобрести эротическое нижнее белье, которое заставит порадоваться вашего любимого.
					</div>
				</div>
			</div>

		</div>
	</div>
	</section>
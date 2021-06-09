<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Sinar Ilmu</title>

	<link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/slick.css" rel="stylesheet">

	<link href="style.css" rel="stylesheet">

</head>

<?php 
	include 'php/koneksi.php';
	$response = get_request("https://sinarilmu-api.herokuapp.com/get/genres");
	$res = json_decode($response,true);
?>

<body>


	<header id="mu-header" class="" role="banner">
		<div class="container">
			<nav class="navbar navbar-default mu-navbar">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
							data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<a class="navbar-brand" href="index.html"><i class="fa fa-book" aria-hidden="true"></i> Silmu</a>

					</div>


					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav mu-menu navbar-right">
							<li><a href="#">HOME</a></li>
							<li><a href="#mu-book-overview">OVERVIEW</a></li>
							<li><a href="#mu-pricing">PRICE</a></li>
							<li><a href="#mu-testimonials">TESTIMONIALS</a></li>
							<li><a href="#mu-contact">CONTACT</a></li>
							<li>
								<?= !empty($_SESSION['user']) ? 
									'<a href="php/logout.php" style="font-weight: bold;"> Log Out </a>' 
								: 
									'<a href="loginpage.php" style="font-weight: bold;"> SIGN IN </a>'
								?>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>


	<section id="mu-hero" class="hero-img">
		<div class="container">
			<div class="row">

				<div class="col-md-6 col-sm-6 col-sm-push-6">
					<div class="mu-hero-right">
						<img src="assets/images/lbook.png" alt="Ebook img" style="transform: scaleX(-1); width: 80%;height: 80%; float: right;">
					</div>
				</div>

				<div class="col-md-6 col-sm-6 col-sm-pull-6">
					<div class="mu-hero-left">
						<h1>Tempat Beli Buku Terbaik di Indonesia</h1>
						<br>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam saepe, recusandae quidem
							nulla! Eveniet explicabo perferendis aut, ab quos omnis labore laboriosam quisquam hic
							deserunt ipsum maxime aspernatur velit impedit.</p>
							<br><br><br>
						<a href="#mu-book-overview" class="mu-primary-btn"> Shop Now! </a>
						<span></span>
					</div>
				</div>

			</div>
		</div>
	</section>



	<main role="main">
		<section id="mu-pricing">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-pricing-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Best Seller</h2>
								<span class="mu-header-dot"></span>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus ipsam dolore Lorem
									ipsum dolor sit amet consectetur adipisicing elit. Ut ducimus deserunt accusantium
									suscipit? Debitis, rem ex. Neque laudantium dolorem vitae quisquam quo pariatur!</p>
							</div>

							<div class="mu-pricing-content">
								<div class="row">

									<div class="col-sm-6 col-md-4">
										<div class="mu-pricing-single">

											<ul class="mu-price-feature">
												<h4>2nd</h4>
												<img src="assets/images/nhbook.png" alt="" class="img-t-book">
											</ul>

											<div class="mu-pricing-single-head">
												<h5 class="mu-price-tag">
													R<span>p.</span> 100<span>.000</span>
												</h5>
											</div>

											<ul class="mu-price-feature">
												<li> Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br />
													Exercitationem ipsam officiis eum, quaerat totam accusamus
													nihil,<br />
													nemo accusantium recusandae ut nisi quibusdam repudiandae earum
												</li>
											</ul>

											<div class="mu-pricing-single-footer">
												<a href="#" class="mu-order-btn">Buy Now!</a>
											</div>

										</div>
									</div>

									<div class="col-sm-6 col-md-4">
										<div class="mu-pricing-single mu-popular-price-tag">


											<ul class="mu-price-feature">
												<h4>1st</h4>
												<img src="assets/images/nhbook.png" alt="" class="img-t-book">
											</ul>

											<div class="mu-pricing-single-head">
												<h5 class="mu-price-tag">
													R<span>p.</span> 100<span>.000</span>
												</h5>
											</div>

											<ul class="mu-price-feature">
												<li> Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br />
													Exercitationem ipsam officiis eum, quaerat totam accusamus
													nihil,<br />
													nemo accusantium recusandae ut nisi quibusdam repudiandae earum
												</li>
											</ul>

											<div class="mu-pricing-single-footer">
												<a href="#" class="mu-order-btn">Buy Now!</a>
											</div>


										</div>
									</div>

									<div class="col-sm-6 col-md-4">
										<div class="mu-pricing-single">


											<ul class="mu-price-feature">
												<h4>3rd</h4>
												<img src="assets/images/nhbook.png" alt="" class="img-t-book">
											</ul>

											<div class="mu-pricing-single-head">
												<h5 class="mu-price-tag">
													R<span>p.</span> 100<span>.000</span>
												</h5>
											</div>

											<ul class="mu-price-feature">
												<li> Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br />
													Exercitationem ipsam officiis eum, quaerat totam accusamus
													nihil,<br />
													nemo accusantium recusandae ut nisi quibusdam repudiandae earum
												</li>
											</ul>

											<div class="mu-pricing-single-footer">
												<a href="#" class="mu-order-btn">Buy Now!</a>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
	

		<section id="mu-book-overview">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-book-overview-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Book Overview</h2>
								<span class="mu-header-dot"></span>
								<p>Buku Berdasarkan Genre</p>
							</div>

							<div class="mu-book-overview-content">
								<div class="row">

									<?php foreach ($res as $genre) { ?>
									<div class="col-md-3 col-sm-6">
										<a href="genre.php?genre=<?=$genre["name"]?>&id=<?=$genre["genreId"]?>">
											<div class="mu-book-overview-single">
												<span class="mu-book-overview-icon-box">
													<i class="fa fa-area-chart" aria-hidden="true"></i>
												</span>
												<h4><?= $genre["name"] ?></h4>
												<p>Lorem ipsum dolor sit amet, consect adipis elit minim veniam ettis
													inkeras.</p>
											</div>
										</a>
									</div>
									<?php } ?>

								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="mu-testimonials">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-testimonials-area">
							<div class="mu-heading-area">
								<h2 class="mu-heading-title">Most Popular</h2>
								<span class="mu-header-dot"></span>
							</div>

							<div class="mu-testimonials-block">
								<ul class="mu-testimonial-slide">

									<li>
										<p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry.
											Lorem Ipsum has been the industry's standard dummy text ever."</p>
										<img class="mu-rt-img" src="assets/images/nhbook.png" alt="img">
										<h5 class="mu-rt-name"> - Jerome Polin</h5>
										<span class="mu-rt-title">CEO, Apple Inc.</span>
									</li>

									<li>
										<p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry.
											Lorem Ipsum has been the industry's standard dummy text ever."</p>
										<img class="mu-rt-img" src="assets/images/nhbook.png" alt="img">
										<h5 class="mu-rt-name"> - Jhon Doe</h5>
										<span class="mu-rt-title">Director, Google Inc.</span>
									</li>

									<li>
										<p>"Lorem Ipsum is simply dummy text of the printing and typesetting industry.
											Lorem Ipsum has been the industry's standard dummy text ever."</p>
										<img class="mu-rt-img" src="assets/images/nhbook.png" alt="img">
										<h5 class="mu-rt-name"> - Jessica Doe</h5>
										<span class="mu-rt-title">Web Developer</span>
									</li>

								</ul>
							</div>


						</div>
					</div>
				</div>
			</div>
		</section>


		<section id="mu-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-contact-area">
						</div>
					</div>
				</div>
			</div>
		</section>
		
	</main>


	<footer id="mu-footer" role="contentinfo">
		<div class="container">
			<div class="mu-footer-area">
				<div class="mu-social-media">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
				</div>
				<p class="mu-copyright">&copy; Copyright <a rel="nofollow" href="#"></a>. All right reserved.</p>
			</div>
		</div>

	</footer>



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/slick.min.js"></script>
	<script type="text/javascript" src="assets/js/counter.js"></script>
	<script type="text/javascript" src="assets/js/app.js"></script>



	<script type="text/javascript" src="assets/js/custom.js"></script>


</body>

</html>
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
	<link id="switcher" href="assets/css/theme-color/bridge-theme.css" rel="stylesheet">

	<link href="style.css" rel="stylesheet">

</head>
<?php 
	$genre = $_GET["genre"];
	$id = $_GET["id"];
	
	include "php/koneksi.php";
	
	$response = get_request("https://sinarilmu-api.herokuapp.com/books/genreId/$id");
	
	$res = json_decode($response,true);
?>
<body>
    <header id="mu-header" class="" role="banner" style="background-color: black;">
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
							<li><a href="index.html">HOME</a></li>
							<!-- <li>
                                <div class="dropdown">
                                    <span>GENRE</span>
                                    <div class="dropdown-content">
                                        <a href="">adad</a>
                                    </div>
                                </div>
                                
                            </li> -->
                            
							<li><a href="#mu-contact">CONTACT</a></li>
							<li><a href="loginpage.php" style="font-weight: bold;">SIGN IN</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
    <br><br><br><br><br>

		<section id="mu-book-overview">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-book-overview-area">
							<div class="mu-heading-area">
								<h1 class="mu-heading-title"><?= $genre ?></h1>
								<span class="mu-header-dot"></span>
								<p></p>
							</div>

							<div class="mu-book-overview-content">
								<div class="row">
									
									<?php foreach ($res as $book) { ?>
									
									<div class="col-md-3 col-sm-6">
										<a href="#">
											<div class="mu-book-overview-single">
												<span class="mu-book-overview-icon-box">
													<img src="assets/images/nhbook.png" alt="">
												</span>
												<h4><?= $book["title"] ?></h4>
												<p><?= $bbok["desc"] ?></p>
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
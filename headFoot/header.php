<?php //session_start();?>
<!doctype html>
<html lang="en">

<head>
	<title>Title</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="shortcut icon" href="images/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">


	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/font-awesome.min.css" rel="stylesheet">
	<link href="../css/prettyPhoto.css" rel="stylesheet">

	<link href="../css/animate.css" rel="stylesheet">
	<link href="../css/maain.css" rel="stylesheet">



	<link href="../css/responsive.css" rel="stylesheet">



	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



	<!-- fontss -->
	<!-- fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet">
	<!-- style -->



</head>


<body>
	<header id="header">
		<!--header-->
		<div class="header_top">
			<!--header_top-->
			
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills ">
								<li><a href="#"><i class="fa fa-phone"></i> +962 77 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> FocusZone@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right ">
							<ul class="nav navbar-nav col d-flex flex-row">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			
		</div>
		<!--/header_top-->

		<div class="header-middle">
			<!--header-middle-->
			
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="http://localhost/php_mysql_project/home.php"><img src="Focus Zone-logos_black.png" width="200px" height="100px" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">

								<ul class="dropdown-menu">
									<li><a href="#">Canada</a></li>
									<li><a href="#">UK</a></li>
								</ul>
							</div>

							<div class="btn-group">

								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav col d-flex flex-row">
								<!-- <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li> -->
								<li><a href="http://localhost/php_mysql_project/check_cart/checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="http://localhost/php_mysql_project/check_cart/cart2.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<?php
								//add check if user loged in or not
								
								// session_start();
								$userId=$_SESSION['user_id ']?? 0;

								if (isset($userId) && $userId != 0) {
									echo "<li><a href='../registration/logout.php'><i class='fa fa-lock'></i>logout</a></li>";
									echo "<li><a href='../user/profile.php'><i class='fa fa-user'></i>profile</a></li>";

								} else {
									echo "<li><a href='../registration/login.php'><i class='fa fa-lock'></i> Login</a></li>";
									echo "<li><a href='../registration/sign up.php'><i class='fa fa-lock'></i> Register</a></li>";
								}
								?>
								
								

							</ul>
						</div>
					</div>
				</div>
			
		</div>
		<!--/header-middle-->

		<div class="header-bottom">
			<!--header-bottom-->
			
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="http://localhost/php_mysql_project/home.php" class="active">Home</a></li>
								<li class="dropdown"><a href="http://localhost/php_mysql_project/shop/shop.php">Shop<i class="fa fa-angle-down"></i></a>
									<ul role="menu" class="sub-menu">
										<li><a href="http://localhost/php_mysql_project/shop/cat1.php">Fitness Equipment</a></li>
										<li><a href="http://localhost/php_mysql_project/shop/cat2.php">Outdoor Equipment</a></li>
										<li><a href="http://localhost/php_mysql_project/shop/cat3.php">Fitness Clothing </a></li>

									</ul>
								</li>

								<li><a href="http://localhost/php_Mysql_project/aboutus.php">About Us</a></li>
								<li><a href="http://localhost/php_mysql_project/contact-us.php">Contact Us</a></li>
							</ul>
						</div>
					</div>

				</div>
			
		</div>
		</div>
		<!--/header-bottom-->
	</header>
	<!--/header-->




	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/main.js"></script>
</body>

</html>
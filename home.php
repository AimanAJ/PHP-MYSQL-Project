<?php


require_once 'connect2.php';
session_start();
$userId = $_SESSION['user_id '] ?? 0;

$stmt = $conn->query('SELECT * FROM categories ORDER BY category_id ASC ');
// $stmt->execute();
$cats = $stmt->fetchAll(PDO::FETCH_ASSOC);



?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- css -->
  <link href="http://localhost/php_mysql_project/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://localhost/php_mysql_project/css/font-awesome.min.css" rel="stylesheet">
  <link href="http://localhost/php_mysql_project/css/animate.css" rel="stylesheet">
  <link href="http://localhost/php_mysql_project/css/maain.css" rel="stylesheet">
  <link href="http://localhost/php_mysql_project/css/responsive.css" rel="stylesheet">
  <link href="http://localhost/php_mysql_project/css/home.css" rel="stylesheet">




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>






  <!-- fontss -->
  <!-- fonts -->
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

  <link rel="stylesheet" href="home.css">


  <style>
    @media screen and (max-width: 768px) {

      .logo {

        display: none;



      }

    }
  </style>




</head>

<body>
  <div class="wrapper">
    <header>
      <nav>
        <div class="menu-icon">
          <i class="fa fa-bars fa-2x"></i>
        </div>
        <div class="logo">
          Focus Zone
        </div>
        <div class="menu">
          <ul>
            <li class="active">
              <a href="home.php">Home</a>
            </li>
            <li>
              <a href="http://localhost/php_mysql_project/shop/shop.php">Shop</a>
            </li>
            <li>
              <a href="http://localhost/php_mysql_project/aboutus.php">About Us</a>
            </li>
            <li>
              <a href="http://localhost/php_mysql_project/contact-us.php">Contact Us</a>
            </li>

            <?php
            //redirect link
            $link = "HTTP://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            //add check if user loged in or not
            if ($userId != 0) {
              echo "<li><a href='registration/logout.php'></i>Logout</a></li>";
              echo "<li><a href='user/profile.php'>Profile</a></li>";
            } else {
              echo "<li><a href='registration/login.php?continue=" . $link . "'> Login</a></li>";
              echo "<li><a href='registration/sign up.php'></i> Register</a></li>";
            }
            ?>


          </ul>
        </div>
      </nav>
    </header>
    <section class="hero" style="font-size: 1em; background: rgba(0, 0, 0, .4) url(http://localhost/php_mysql_project/media/karsten-winegeart-0Wra5YYVQJE-unsplash.jpg);   background-blend-mode: darken; background-size: cover; background-position: center center; background-repeat: no-repeat;">
      <div class="hero-inner">
        <h1>Find Everything You are Looking For</h1>
        <h2>View Our Awesome Sporting goods!</h2>
        <div class="btns">
          <a href="#about">
            <button id="aboutus" class="btn">More About Us</button>
          </a>
          <a href="../php_Mysql_project/shop/shop.php">
            <button id="shop" class="btn">Shop Now</button>
          </a>
        </div>
      </div>
    </section>
    <!-- cards section  -->
    <section class="wrapper">
      <h3>Categories</h3>

      <div class="container">
        <div class="row">
          <?php foreach ($cats as $cat) : ?>
            <div class="col-md-4">
              <div class="card text-white card-has-bg click-col" style="background-image:url('admin/image/image_category/<?= $cat['category_image'] ?>');">

                <div class="card-img-overlay d-flex flex-column">
                  <div class="card-body">
                    <small class="card-meta mb-2">View Our Collections Of</small>
                    <h4 class="card-title mt-0 ">
                      <!-- <a class="text-white" herf="#">Fittness Equipment</a> -->
                      <a href="../php_Mysql_project/shop/shop.php"><?php echo $cat['category_name'] ?></a>
                    </h4>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach ?>



        </div>
      </div>
    </section>


    <section id="slider">
      <!--slider-->
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div id="slider-carousel" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <!-- <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li> -->
              </ol>

              <div class="carousel-inner">
                <div class="item active">
                  <div class="col-sm-6">
                    <h1><span>Focus</span>-Zone</h1>
                    <h2>Free Shipping</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <!-- <button type="button" class="btn btn-default get">Get it now</button> -->
                  </div>
                  <div class="col-sm-6">
                    <img src="https://www.americannatrader.com/application/views/themes/theme-1/assets/images/portfolio/project_01/karsten-winegeart-Jc-UCKGhIlU-unsplash.jpg" class="girl img-responsive" alt="" />
                    <img src="images/home/pricing.png" class="pricing" alt="" />
                  </div>
                </div>

                <div class="item">
                  <div class="col-sm-6">
                    <h1><span>Focus</span>-Zone</h1>
                    <h2>Huge Collection of sporting goods</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <!-- <button type="button" class="btn btn-default get">Get it now</button> -->
                  </div>
                  <div class="col-sm-6">
                    <img src="https://www.americannatrader.com/application/views/themes/theme-1/assets/images/portfolio/project_01/karsten-winegeart-eGSBVVtVCCw-unsplash.jpg" class="girl img-responsive" alt="" />
                    <img src="images/home/pricing.png" class="pricing" alt="" />
                  </div>
                </div>
                <div class="item">
                  <div class="col-sm-6">
                    <h1><span>Focus</span>-Zone</h1>
                    <h2>100% Best Quality</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <!-- <button type="button" class="btn btn-default get">Get it now</button> -->
                  </div>
                  <div class="col-sm-6">
                    <img src="https://www.americannatrader.com/application/views/themes/theme-1/assets/images/portfolio/project_01/karsten-winegeart-w6BHqa8ukc0-unsplash.jpg" class="girl img-responsive" alt="" />
                    <img src="images/home/pricing.png" class="pricing" alt="" />
                  </div>
                </div>
                <div class="item">
                  <div class="col-sm-6">
                    <h1><span>Focus</span>-Zone</h1>
                    <h2>50% OFF your First Order</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <!-- <button type="button" class="btn btn-default get">Get it now</button> -->
                  </div>
                  <div class="col-sm-6">
                    <img src="https://www.americannatrader.com/application/views/themes/theme-1/assets/images/portfolio/project_01/karsten-winegeart-WO_th3WRJvw-unsplash.jpg" class="girl img-responsive" alt="" />
                    <img src="images/home/pricing.png" class="pricing" alt="" />
                  </div>
                </div>


              </div>

              <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                <i class="fa fa-angle-left"></i>
              </a>
              <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                <i class="fa fa-angle-right"></i>
              </a>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!--/slider-->


    <!-- ******************* ABout us************************** -->
    <section class="container" id="about">
      <div class="container">
        <div class="row">
          <div class="column-66">
            <h1 class="xlarge-font">
              <b>About US</b>
            </h1>
            <h1 class="large-font" style="color:#ef7828;">
              <b>Why Purchase Our Products?</b>
            </h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quam id quibusdam distinctio commodi tempore mollitia asperiores a architecto aliquid dolores, harum eveniet veritatis quia, magni suscipit eum corporis quod?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quam id quibusdam distinctio commodi tempore mollitia asperiores a architecto aliquid dolores, harum eveniet veritatis quia, magni suscipit eum corporis quod?Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quam id quibusdam distinctio commodi tempore mollitia asperiores a architecto aliquid dolores, harum eveniet veritatis quia, magni suscipit eum corporis quod?Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quam id quibusdam distinctio commodi tempore mollitia asperiores a architecto aliquid dolores, harum eveniet veritatis quia, magni suscipit eum corporis quod?Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quam id quibusdam distinctio commodi tempore mollitia asperiores a architecto aliquid dolores, harum eveniet veritatis quia, magni suscipit eum corporis quod?Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quam id quibusdam distinctio commodi tempore mollitia asperiores a architecto aliquid dolores, harum eveniet veritatis quia, magni suscipit eum corporis quod?Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quam id quibusdam distinctio commodi tempore mollitia asperiores a architecto aliquid dolores, harum eveniet veritatis quia, magni suscipit eum corporis quod?
            </p>
          </div>
          <div class="column-33">
            <img src="media/pexels-cottonbro-4753891.jpg" width="300" height="500">
          </div>
        </div>
      </div>
      <div id="cu" class="container">
        <div class="row">
          <div class="column-33">
            <img src="media/pexels-tima-miroshnichenko-6389075.jpg" width="300" height="500">
          </div>
          <div class="column-66">
            <h1 class="xlarge-font">
              <b>Clarity</b>
            </h1>
            <h1 class="large-font" style="color:#ef7828;">
              <b>How Can You Contact Us?</b>
            </h1>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quam id quibusdam distinctio commodi tempore mollitia asperiores a architecto aliquid dolores, harum eveniet veritatis quia, magni suscipit eum corporis quod?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quam id quibusdam distinctio commodi tempore mollitia asperiores a architecto aliquid dolores, harum eveniet veritatis quia, magni suscipit eum corporis quod?Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quam id quibusdam distinctio commodi tempore mollitia asperiores a architecto aliquid dolores, harum eveniet veritatis quia, magni suscipit eum corporis quod?Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quam id quibusdam distinctio commodi tempore mollitia asperiores a architecto aliquid dolores, harum eveniet veritatis quia, magni suscipit eum corporis quod?Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quam id quibusdam distinctio commodi tempore mollitia asperiores a architecto aliquid dolores, harum eveniet veritatis quia, magni suscipit eum corporis quod?Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quam id quibusdam distinctio commodi tempore mollitia asperiores a architecto aliquid dolores, harum eveniet veritatis quia, magni suscipit eum corporis quod?Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quam id quibusdam distinctio commodi tempore mollitia asperiores a architecto aliquid dolores, harum eveniet veritatis quia, magni suscipit eum corporis quod?</p>
          </div>
        </div>
      </div>
  </div>
  </section>


  <footer id="footer">

    <div class="footer-widget">
      <div class="container">
        <div class="row p-2">


          <div class="col-sm-2">
            <div class="single-widget">
              <h2>Quick Shop</h2>
              <ul class="nav nav-pills flex-column">
                <li><a href="http://localhost/php_mysql_project/shop/cat1.php">Fitness Equipment</a></li>
                <li><a href="http://localhost/php_mysql_project/shop/cat2.php">Outdoor Equipment</a></li>
                <li><a href="http://localhost/php_mysql_project/shop/cat3.php">Fitness Clothing</a></li>

              </ul>
            </div>

          </div>

          <div class="col-sm-2">
            <div class="single-widget">
              <h2>Quick Access</h2>
              <ul class="nav nav-pills flex-column">
                <li><a href="http://localhost/php_mysql_project/home.php">Home</a></li>
                <li><a href="http://localhost/php_mysql_project/shop/shop.php">Shop</a></li>
                <li><a href="http://localhost/php_Mysql_project/aboutus.php">About</a></li>
                <li><a href="http://localhost/php_mysql_project/contact-us.php">Contact Us</a></li>

              </ul>
            </div>
          </div>
          <div class="col-sm-3 col-sm-offset-1">
            <div class="single-widget">
              <h2>Newsletter</h2>
              <form action="#" class="searchform">
                <input type="text" placeholder="Your email address" />
                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                <p>Get the most recent updates from <br />our site and be updated your self...</p>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container p-1">
        <div class="row">
          <p class="pull-left">Copyright © 2022 Focus Zone Inc. All rights reserved.</p>
          <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Group2</a></span></p>
        </div>
      </div>
    </div>

  </footer>
  <!--/Footer-->




  <script>
    $(document).ready(function() {
      $(".menu-icon").on("click", function() {
        $("nav ul").toggleClass("showing");
      });
    });
    // Scrolling Effect
    $(window).on("scroll", function() {
      if ($(window).scrollTop()) {
        $('nav').addClass('black');
      } else {
        $('nav').removeClass('black');
      }
    })
  </script>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.scrollUp.min.js"></script>
  <script src="js/price-range.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/main.js"></script>


</body>

</html>

<?php
// include_once "../php_Mysql_project/headFoot/footer.php"
?>
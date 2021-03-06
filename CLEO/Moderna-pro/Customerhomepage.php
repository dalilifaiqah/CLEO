<?php
$con = mysqli_connect("localhost","ourcleoc_cleoadmin","Cleo_12345_","ourcleoc_cleo"); 
session_start(); 
$email=$_SESSION['email']; 
$query=mysqli_query($con,"SELECT * FROM customer WHERE email='$email' "); 
$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CLEO</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" href="assets/img/icon1.png">
  <!--<link href="assets/img/logo atas.png" rel="icon">
  <link href="assets/img/logo atas.png" rel="logo-atas-icon">-->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Personal Icon font -->
  <script src="https://kit.fontawesome.com/848bcf31df.js" crossorigin="anonymous"></script>

  <!-- =======================================================
  * Template Name: Moderna - v4.3.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent section-bg2">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 style="font-family: Arial"class="text-light"><a href="Customerhomepage.php"><span>CLEO</span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="Customerhomepage.php">Home</a></li>
          <li><a href="3about.php">About Us</a></li>
          <li><a href="3products.php">Products</a></li>
          <li><a href="3team.php">Team</a></li>
          <li><a href="3contact.php">Contact Us</a></li>
          <li class="dropdown"><a href="#"><span><?php echo $row['name']; ?></span> <i class="bi bi-chevron-down"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </i></a>
            <ul>
              <li><a href="3viewprofile.php">My Profile</a></li>
              <li><a href="3cart.php">Cart</a></li>
              <li><a href="3purchasehistory.php">Purchase History</a></li>
            </ul>
          </li>
       <li><form action="CustomerDB.php" method="POST">
          <input type="submit" name="logout" id="submit" class="form-submit submit sign-up-btn" style="" value="Log out"/>
        </form></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center section-bg2">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <img src="assets/img/Cleo (2).gif" class="img-fluid" alt="">
          <h2 class="animate__animated animate__fadeInDown">&nbsp &nbsp Welcome to <span>CLEO</span></h2>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Game Accounts</h2>
          <p class="animate__animated animate__fadeInUp">Feeling bad with your current game progress and have some extra cash in hand?
             No worries cause you can level up your game with top players' accounts that are sold!</p>
          <a href="3products.php" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Skins</h2>
          <p class="animate__animated animate__fadeInUp">Bored with your old or existing skins? Get some refreshment to the eyes 
          with our collection of awesome skins.</p>
          <a href="3products.php" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  

    <!-- ======= Services Section ======= -->
    <section class="services section-bg2">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="fab fa-vuejs"></i></div>
              <h4 class="title"><a href="https://playvalorant.com/en-us/">VALORANT</a></h4>
              <p class="description">Valorant is a team-based first-person hero shooter set in the near future. Players play as one of a set of agents,
               characters designed based on several countries and cultures around the world.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="fas fa-meteor"></i></div>
              <h4 class="title"><a href="https://www.ea.com/en-gb/games/apex-legends">APEX LEGEND</a></h4>
              <p class="description">Apex Legends is an online multiplayer battle royale game featuring squads of three players using pre-made characters
               with distinctive abilities, called "Legends", similar to those of hero shooters.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="fas fa-fighter-jet"></i></i></div>
              <h4 class="title"><a href="https://www.pubgmobile.com/en-US/home.shtml">PUBG MOBILE</a></h4>
              <p class="description">PlayerUnknown's Battleground or PUBG is a battle royale game. In a battle royale game, a player is left with up to
               100 other players in a large map.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="fas fa-gamepad"></i></div>
              <h4 class="title"><a href="https://genshin.mihoyo.com/pc-launcher/?utm_source=SEA_google_NZMY_SEM_brand_1022&mhy_trace_channel=ga_channel&new=1&gclid=Cj0KCQjwkIGKBhCxARIsAINMioKl-4sQkEmHOLFYt374rGdGxG-802liQPoAmNg9OZ7W7nXsTSjwFQQaApcTEALw_wcB#/">GENSHIN IMPACT</a></h4>
              <p class="description">Genshin Impact is an open-world action role-playing game that allows the player to control one of four interchangeable
               characters in a party.</p>
            </div>
          </div>

          <center>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="fas fa-dragon"></i></div>
              <h4 class="title"><a href="https://m.mobilelegends.com/en">MOBILE LEGEND</a></h4>
              <p class="description">Mobile Legends: Bang Bang is a multiplayer online battle arena (MOBA) game designed for mobile phones.</p>
            </div>
          </div>
        </center>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <!-- ======= VIDEO SECTION ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="assets/img/omen-4k.png" class="img-fluid" alt="">
            <a href="assets/video/Ace-op-clutch-breeze.mp4" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="fab fa-vuejs"></i></div>
              <h4 class="title"><a href="">VALORANT</a></h4>
              <p class="description">Valorant is a team-based first-person hero shooter set in the near future. Players play as one of a set of agents,
               characters designed based on several countries and cultures around the world.</p>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="assets/img/apexwraith.jpg" class="img-fluid" alt="">
            <a href="assets/video/apex.mp4" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-meteor"></i></div>
              <h4 class="title"><a href="">APEX LEGEND</a></h4>
              <p class="description">Apex Legends is an online multiplayer battle royale game featuring squads of three players
                 using pre-made characters with distinctive abilities, called "Legends", similar to those of hero shooters.</p>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="assets/img/pubg.jpg" class="img-fluid" alt="">
            <a href="assets/video/pubg.mp4" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="fas fa-fighter-jet"></i></div>
              <h4 class="title"><a href="">PUBG MOBILE</a></h4>
              <p class="description">PlayerUnknown's Battleground or PUBG is a battle royale game. In a battle royale game, 
                a player is left with up to 100 other players in a large map.</p>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="assets/img/genshin.jpg" class="img-fluid" alt="">
            <a href="assets/video/Genshin2.mp4" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-gamepad"></i></div>
              <h4 class="title"><a href="">GENSHIN IMPACT</a></h4>
              <p class="description">Genshin Impact is an open-world action role-playing game that allows the player to 
                control one of four interchangeable characters in a party.</p>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="assets/img/mobilelegend.jpg" class="img-fluid" alt="">
            <a href="assets/video/mobilelegend.mp4" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="fas fa-dragon"></i></div>
              <h4 class="title"><a href="">MOBILE LEGEND</a></h4>
              <p class="description">Mobile Legends: Bang Bang is a multiplayer online battle arena (MOBA) game designed for mobile phones.</p>
            </div>

            
          </div>
        </div>
      </div>
    </section><!-- End Why Us Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="section-bg2" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="Customerhomepage.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="3about.php">About Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="3team.php">Team</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="3contact.php">Contact Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.freeprivacypolicy.com/live/02e3012e-de66-4b6a-a831-8de595a84496">Terms and Condition</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.freeprivacypolicy.com/live/3629ced9-9e17-40cc-abbf-dfd879b204e8">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>What We Sell</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="3products.php">Player Accounts</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="3products.php">Skins</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Contact Us</h4>
            <p>
            Jalan Rejang 4, Taman Setapak Jaya, <br>
            54100 Kuala Lumpur,<br>
            Wilayah Persekutuan Kuala Lumpur<br><br>
            <strong>Email:</strong><a href="mailto: cleosheesh@gmail.com"> cleosheesh@gmail.com</a><br>
            </p><br>
          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About CLEO</h3>
            <p>CLEO is a place where Malaysian video gamers come together to explore and find their perfect in-game 
              materials to bring up their in game experiences to the next level.</p>
            <div class="social-links mt-3">
              <a href="https://twitter.com/" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com/" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://www.linkedin.com/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>CLEO</span></strong>. All Rights Reserved
      </div>
      
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<?php
$con = mysqli_connect("localhost","ourcleoc_cleoadmin","ourcleoc_cleoadmin","ourcleoc_cleo"); 
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

  <title>Deadly Byte Crypto</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" href="assets/img/icon1.png">
  <!--<link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">-->

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

  <!-- =======================================================
  * Template Name: Moderna - v4.3.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center section-bg2">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 style="font-family: Arial" class="text-light"><a href="Customerhomepage.php"><span>CLEO</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="" href="Customerhomepage.php">Home</a></li>
          <li><a href="3about.php">About Us</a></li>
          <!--<li><a href="services.html">Services</a></li>-->
          <li><a class="active" href="3products.php">Products</a></li>
          <li><a href="3team.php">Team</a></li>
          <!--<li><a href="blog.html">Blog</a></li>-->
          <!--<li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>-->
          <li><a href="3contact.php">Contact Us</a></li>
          <li class="dropdown"><a href="#"><span><?php echo $row['name']; ?></span> <i class="bi bi-chevron-down"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </i></a>
            <ul>
              <li><a href="3viewprofile.php">My Profile</a></li>
              <li><a href="3cart.php">Cart</a></li>
              <li><a href="3purchasehistory.php">Purchase History</a></li>
            </ul>
          </li>
          <!--<li><a href="/MasterCLEO/Moderna-pro/customer dashboard/paper-dashboard-master/examples/3dashboard.html">My Dashboard  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>-->
          <li><form action=CustomerDB.php method="POST">
          <input type="submit" name="logout" id="submit" class="form-submit submit sign-up-btn" style="" value="Log out"/>
        </form></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Our Portfolio Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Apex Legends</h2>
          <ol>
            <li><a href="Customerhomepage.php">Home</a></li>
            <li><a href="3products.php">Products</a></li>
            <li>Apex Legends</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
  
          <div class="row gy-4">
  
            <div class="col-lg-5">
              <div class="portfolio-details-slider swiper-container">
                <div class="swiper-wrapper align-items-center">
  
                  <div class="swiper-slide">
                    <img src="assets/img/portfolio/size-formated/crypto-apex.jpg" alt="">
                  </div>
  
                  <div class="swiper-slide">
                    <img src="assets/img/portfolio/size-formated/apexlegendlogo.jpg" alt="">
                  </div>
  
                  <!--<div class="swiper-slide">
                    <img src="assets/img/portfolio/portfolio-3.jpg" alt="">
                  </div>-->
  
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
  
            <div class="col-lg-7">
            <form method="post" action="cartdb.php">
              <div class="portfolio-info" style="background-color: white;">
                <h3>Product informations</h3>
                <ul>
                <li><strong>Name </strong>: <input class="nokotak" type="text" name="hidden_name" value="Deadly Bite Crypto" readonly/></li>
                  <li><strong>Category </strong>: Apex Legends</li>
                  <li><strong>Price </strong>: RM <input class="nokotak" type="text" name="hidden_price" value="80.00" readonly/></li>
                  <li><strong>Quantity (Max 5) </strong>: 
                    
                    
                      <input type="number" id="Quantity" name="quantity" min="1" max="5">
                      <!--<input type="text" id="CustomerID" name="CustomerID">-->
                      <!--<label class="radio-inline">
                        <input type="radio" name="optradio" checked> BlastX-1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="optradio"> BlastX-2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="optradio"> BlastX-3
                      </label>-->
                      <br><br>
                      <button type="submit" name="add_to_cart" class="p1button" title="Add to Cart" >Add to Cart</a></button>
                  </form>
                
                </li>

                <!--<li><strong>Project URL </strong>: <a href="#">www.example.com</a></li>-->
              </ul>
              
            </div>
            <div class="portfolio-description">
              <h2>Descriptions</h2>
              <p>
                This only requires <strong>one Crypto's Skin.</strong>
                
                <h3><strong>FAQ</strong></h3>
                <strong>- How to purchase?</strong>
                <br> 1. Make sure you have logged into your account
                <br> 2. Fill in the quantity you need
                <br> 3. Press Add to Cart button
                <br> 4. Go to Cart Page 
                <br> 5. Proceed to Checkout
                <br> 6. Purchase Order and make your payment<br>
                <strong>- Can i add other legend's skin?</strong>
                <br> YES <br>
                <strong>- How do i add other legend's skin?</strong>
                <br> Add to cart the legend's skin you needed <br>
                <strong>- How do i get my account?</strong>
                <br> As soon as you make your payment, we will process the account for you. Within the 24 hours, please check your email for the account ID.
                <br><br> For any other enquiries, send us your feedback in <a href="3contact.php">Contact Us</a> page.
                <!--Information about the Stocks : <br>
                <strong>BlastX-1</strong> - Full Set BlastX Bundle <br>
                <strong>BlastX-2</strong> - BlastX (Phantom, Odin) + Reaver (Vandal) <br>
                <strong>BlastX-3</strong> - BlastX (Phantom, Spectre, Odin, Knife) + Magepunk (Ghost, Spectre) + Reaver (Vandal, Sheriff) + Singularity (Phantom, Ares) + SOL (Ares, Sheriff)-->
               </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <!--<div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>-->

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
            <!--<h4>Admin</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="login-form-20/login-form-20/Adminlogin.php">Admin Log In</a></li>
            </ul>-->
          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About CLEO</h3>
            <p>CLEO is a place where Malaysian video gamers come together to explore and find their perfect in-game materials to bring up their in game experiences to the next level.</p>
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
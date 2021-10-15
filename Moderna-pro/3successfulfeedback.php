<?php
$con = mysqli_connect("localhost","admin1","admin1","cleo"); 
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

  <!-- =======================================================
  * Template Name: Moderna - v4.3.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 style="font-family: Arial" class="text-light"><a href="Customerhomepage.php"><span>CLEO</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="" href="Guesthomepage.php">Home</a></li>
          <li><a href="1about.html">About Us</a></li>
          <!--<li><a href="services.html">Services</a></li>-->
          <li><a href="1products.html">Products</a></li>
          <li><a href="1team.html">Team</a></li>
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
          <li><a href="3contact.html">Contact Us</a></li>
          <li class="dropdown"><a href="#"><span><?php echo $row['name']; ?></span> <i class="bi bi-chevron-down"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </i></a>
            <ul>
              <li><a href="3viewprofile.html">My Profile</a></li>
              <li><a href="3cart.html">Cart</a></li>
              <li><a href="3purchasehistory.html">Purchase History</a></li>
            </ul>
          </li>
          <!--<li><a href="/MasterCLEO/Moderna-pro/customer dashboard/paper-dashboard-master/examples/3dashboard.html">My Dashboard  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>-->
          <li><form action=/MasterCLEO/Moderna-pro/CustomerDB.php method="POST">
          <input type="submit" name="logout" id="submit" class="form-submit submit sign-up-btn" style="" value="Log out"/>
        </form></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact Us</h2>
          <ol>
            <li><a href="#">Home</a></li>
            <li>Contact Us</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-phone-call"></i>
                  <h3>Contact Us</h3>
                  <a href="mailto: cleosheesh@gmsil.com"><p>cleosheesh@gmail.com</p></a><br><br>
                </div>
              </div>
              <!--<div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-phone-call bx bx-map"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>-->
            </div>

          </div>

          <div class="col-lg-6">   

            <div class="info-box">
              <div class="row">
                <div class="col-md-12  ">
                  <i style="border:none" class="bi bi-check-lg"></i>
                  <h3>Thank you for your feedback. <br>We appreciate you contacting Cleo Team.</h3>
                  <!--<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>-->
                </div>
                <!--<div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>-->
              </div>
              <!--<div>
                
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>-->
              <!--<div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>-->
              <div class="my-3 ">
              </div>
              <a href="Customerhomepage.php"><button id="goback" class="warnabutton" >Back to Homepage</button></a>
            </div>
            
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Map Section ======= -->
    <!--<section class="map mt-2">
      <div class="container-fluid p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.2219901290355!2d-74.00369368400567!3d40.71312937933185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a23e28c1191%3A0x49f75d3281df052a!2s150%20Park%20Row%2C%20New%20York%2C%20NY%2010007%2C%20USA!5e0!3m2!1sen!2sbg!4v1579767901424!5m2!1sen!2sbg" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </section> End Map Section -->

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
              <li><i class="bx bx-chevron-right"></i> <a href="Guesthomepage.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="1about.html">About Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="1team.html">Team</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="1contact.html">Contact Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.freeprivacypolicy.com/live/02e3012e-de66-4b6a-a831-8de595a84496">Terms and Condition</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.freeprivacypolicy.com/live/3629ced9-9e17-40cc-abbf-dfd879b204e8">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>What We Sell</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Player Accounts</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Skins</a></li>
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
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
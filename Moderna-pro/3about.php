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

<body >

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
          <li><a class=" " href="Customerhomepage.php">Home</a></li>
          <li><a class="active" href="3about.html">About Us</a></li>
          <!--<li><a href="services.html">Services</a></li>-->
          <li><a href="3products.html">Products</a></li>
          <li><a href="3team.html">Team</a></li>
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
        </form>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>About Us</h2>
          <ol>
            <li><a href="#">Home</a></li>
            <li>About Us</li>
          </ol>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="/MasterCLEO/Moderna-pro/assets/img/1about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3><span>Who we are?</span></h3>
            <p style="font-size: larger" class="fst-italic">
              CLEO, a web-based portal that is created to make in-game purchases easier for Malaysian Gaming Community for multiple game 
              by using a single platform. CLEO also strives to make transactions easier, faster, more secure & overall a more rewarding experience for consumers.
            </p>
            <p>Established in 2021, CLEO is aiming to :</p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> Offer the fastest and most reliable service</li>
              <li><i class="bi bi-check2-circle"></i> Offer reasonable price while maintaining the highest of standards</li>
              <li><i class="bi bi-check2-circle"></i> Make a functional and easily engage interfaces</li>
            </ul>
            <!--<p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section class="facts section-bg" data-aos="fade-up">
      <div style="color: #fff" class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="2352" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Development</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hard Workers</p>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Our Skills Section ======= -->
    <!--<section class="skills" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2>Our Skills</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="skills-content">

          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">HTML <i class="val">100%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">CSS <i class="val">90%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">JavaScript <i class="val">75%</i></span>
            </div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
              <span class="skill">Photoshop <i class="val">55%</i></span>
            </div>
          </div>

        </div>

      </div>
    </section> End Our Skills Section -->

    <!-- ======= Tetstimonials Section ======= -->
    <!--<section class="testimonials" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2>Tetstimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-carousel swiper-container">
          <div class="swiper-wrapper">
            <div class="testimonial-item swiper-slide">
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>

            <div class="testimonial-item swiper-slide">
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>

            <div class="testimonial-item swiper-slide">
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>

            <div class="testimonial-item swiper-slide">
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>

            <div class="testimonial-item swiper-slide">
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> End Ttstimonials Section -->

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
              <li><i class="bx bx-chevron-right"></i> <a href="3about.html">About Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="3team.html">Team</a></li>
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
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
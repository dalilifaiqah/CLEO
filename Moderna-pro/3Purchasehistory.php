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

  <title>Checkout</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

   <!-- Favicons -->
   <link rel="icon" href="assets/img/CLEO-logo.png">
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

  <!--addon for checkout-->
  <!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

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
          <li><a class="" href="Customerhomepage.php">Home</a></li>
          <li><a href="3about.php">About Us</a></li>
          <!--<li><a href="services.html">Services</a></li>-->
          <li><a href="3products.php">Products</a></li>
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
          <li class="dropdown"><a class="active"href="#"><span><?php echo $row['name']; ?></span> <i class="bi bi-chevron-down"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </i></a>
            <ul>
              <li><a class="active" href="3viewprofile.php">My Profile</a></li>
              <li><a href="3cart.php">Cart</a></li>
              <li><a href="3purchasehistory.php">Purchase History</a></li>
            </ul>
          </li>
          <!--<li><a href="/MasterCLEO/Moderna-pro/customer dashboard/paper-dashboard-master/examples/3dashboard.html">My Dashboard  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>-->
          <li><form action=/MasterCLEO/Moderna-pro/CustomerDB.php method="POST">
          <input type="submit" name="logout" id="submit" class="form-submit submit sign-up-btn" value="Log out"/>
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
          <h2>My Profile</h2>
          <ol>
            <li><a href="Customerhomepage.php">Home</a></li>
            <li><a href="3viewprofile.php">My Profile</a></li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="profile" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="container">
    <div class="row" >
      <div class="info-box" style="padding: 123px 10px 122px 10px">
      <div class="bw">
    <div class="dh">
      <div class="en bpz">
        <nav class="bqg">
          <div class="bqa">
            <button class="bow boy bqb" type="button" data-toggle="collapse" data-target="#nav-toggleable-md">
              <span class="adp">Toggle nav</span>
            </button>
            <a class="bqc brd" href="../index.html">
              <span class="bv bhc bqd"></span>
            </a>
          </div>

          <div class="collapse bpd" id="nav-toggleable-md">
            <form class="bqe">
              <input class="form-control" type="text" placeholder="Search...">
              <button type="submit" class="nz">
                <span class="bv bhw"></span>
              </button>
            </form>
            <ul class="nav pb nav-stacked wz">
              <li class="axq">Dashboards</li>
              <li class="pa">
                <a class="oy " href="../index.html">Overview</a>
              </li>
              <li class="pa">
                <a class="oy active" href="../order-history/index.html">Order history</a>
              </li>
              <li class="pa">
                <a class="oy "href="../fluid/index.html">Fluid layout</a>
              </li>
              <li class="pa">
                <a class="oy " href="../icon-nav/index.html">Icon nav</a>
              </li>

              <li class="axq">More</li>
              <li class="pa">
                <a class="oy "href="../docs/index.html">
                  Toolkit docs
                </a>
              </li>
              <li class="pa">
                <a class="oy" href="http://getbootstrap.com" target="blank">
                  Bootstrap docs
                </a>
              </li>
              <li class="pa">
                <a class="oy " href="../index-light/index.html">Light UI</a>
              </li>
              <li class="pa">
                <a class="oy" href="#docsModal" data-toggle="modal">
                  Example modal
                </a>
              </li>
            </ul>
            <hr class="bre aez">
          </div>
        </nav>
      </div>
      <div class="et brf">
        <div class="bqn">
  <div class="bqo">
    <h6 class="bqq">Dashboards</h6>
    <h2 class="bqp">Order history</h2>
  </div>

  <div class="on bqr">
    <div class="axm bpy">
      <input type="text" value="01/01/15 - 01/08/15" class="form-control" data-provide="datepicker">
      <span class="bv bbc"></span>
    </div>
  </div>
</div>

<div class="bop ayg">
  <div class="boq bor">
    <div class="axm bpy">
      <input type="text" class="form-control bsx" placeholder="Search orders">
      <span class="bv bhw"></span>
    </div>
  </div>
  <div class="boq">
    <div class="ol">
      <button type="button" class="ce nr">
        <span class="bv bji"></span>
      </button>
      <button type="button" class="ce nr">
        <span class="bv bei"></span>
      </button>
    </div>
  </div>
</div>

<div class="ly">
  <table class="ck" data-sort="table">
    <thead>
      <tr>
        <th><input type="checkbox" class="bsn" id="selectAll"></th>
        <th>Order</th>
        <th>Customer name</th>
        <th>Description</th>
        <th>Date</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><input type="checkbox" class="bso"></td>
        <td><a href="#">#10001</a></td>
        <td>First Last</td>
        <td>Admin theme, marketing theme</td>
        <td>01/01/2015</td>
        <td>$200.00</td>
      </tr>
      <tr>
        <td><input type="checkbox" class="bso"></td>
        <td><a href="#">#10002</a></td>
        <td>Firstname Last</td>
        <td>Admin theme</td>
        <td>01/01/2015</td>
        <td>$100.00</td>
      </tr>
      <tr>
        <td><input type="checkbox" class="bso"></td>
        <td><a href="#">#10003</a></td>
        <td>Name Another</td>
        <td>Personal blog theme</td>
        <td>01/01/2015</td>
        <td>$100.00</td>
      </tr>
      <tr>
        <td><input type="checkbox" class="bso"></td>
        <td><a href="#">#10004</a></td>
        <td>One More</td>
        <td>Marketing theme, personal blog theme, admin theme</td>
        <td>01/01/2015</td>
        <td>$300.00</td>
      </tr>
      <tr>
        <td><input type="checkbox" class="bso"></td>
        <td><a href="#">#10005</a></td>
        <td>Name Right Here</td>
        <td>Personal blog theme, admin theme</td>
        <td>01/02/2015</td>
        <td>$200.00</td>
      </tr>
      <tr>
        <td><input type="checkbox" class="bso"></td>
        <td><a href="#">#10006</a></td>
        <td>First Last</td>
        <td>Admin theme, marketing theme</td>
        <td>01/01/2015</td>
        <td>$200.00</td>
      </tr>
      <tr>
        <td><input type="checkbox" class="bso"></td>
        <td><a href="#">#10007</a></td>
        <td>Firstname Last</td>
        <td>Admin theme</td>
        <td>01/01/2015</td>
        <td>$100.00</td>
      </tr>
      <tr>
        <td><input type="checkbox" class="bso"></td>
        <td><a href="#">#10008</a></td>
        <td>Name Another</td>
        <td>Personal blog theme</td>
        <td>01/01/2015</td>
        <td>$100.00</td>
      </tr>
      <tr>
        <td><input type="checkbox" class="bso"></td>
        <td><a href="#">#10009</a></td>
        <td>One More</td>
        <td>Marketing theme, personal blog theme, admin theme</td>
        <td>01/01/2015</td>
        <td>$300.00</td>
      </tr>
      <tr>
        <td><input type="checkbox" class="bso"></td>
        <td><a href="#">#10010</a></td>
        <td>Name Right Here</td>
        <td>Personal blog theme, admin theme</td>
        <td>01/02/2015</td>
        <td>$200.00</td>
      </tr>
      <tr>
        <td><input type="checkbox" class="bso"></td>
        <td><a href="#">#10011</a></td>
        <td>First Last</td>
        <td>Admin theme, marketing theme</td>
        <td>01/01/2015</td>
        <td>$200.00</td>
      </tr>
      <tr>
        <td><input type="checkbox" class="bso"></td>
        <td><a href="#">#10012</a></td>
        <td>Firstname Last</td>
        <td>Admin theme</td>
        <td>01/01/2015</td>
        <td>$100.00</td>
      </tr>
      <tr>
        <td><input type="checkbox" class="bso"></td>
        <td><a href="#">#10013</a></td>
        <td>Name Another</td>
        <td>Personal blog theme</td>
        <td>01/01/2015</td>
        <td>$100.00</td>
      </tr>
      <tr>
        <td><input type="checkbox" class="bso"></td>
        <td><a href="#">#10014</a></td>
        <td>One More</td>
        <td>Marketing theme, personal blog theme, admin theme</td>
        <td>01/01/2015</td>
        <td>$300.00</td>
      </tr>
      <tr>
        <td><input type="checkbox" class="bso"></td>
        <td><a href="#">#10015</a></td>
        <td>Name Right Here</td>
        <td>Personal blog theme, admin theme</td>
        <td>01/02/2015</td>
        <td>$200.00</td>
      </tr>
      <tr>
        <td><input type="checkbox" class="bso"></td>
        <td><a href="#">#10016</a></td>
        <td>First Last</td>
        <td>Admin theme, marketing theme</td>
        <td>01/01/2015</td>
        <td>$200.00</td>
      </tr>
      <tr>
        <td><input type="checkbox" class="bso"></td>
        <td><a href="#">#10017</a></td>
        <td>Firstname Last</td>
        <td>Admin theme</td>
        <td>01/01/2015</td>
        <td>$100.00</td>
      </tr>
      <tr>
        <td><input type="checkbox" class="bso"></td>
        <td><a href="#">#10018</a></td>
        <td>Name Another</td>
        <td>Personal blog theme</td>
        <td>01/01/2015</td>
        <td>$100.00</td>
      </tr>
      <tr>
        <td><input type="checkbox" class="bso"></td>
        <td><a href="#">#10019</a></td>
        <td>One More</td>
        <td>Marketing theme, personal blog theme, admin theme</td>
        <td>01/01/2015</td>
        <td>$300.00</td>
      </tr>
      <tr>
        <td><input type="checkbox" class="bso"></td>
        <td><a href="#">#10020</a></td>
        <td>Name Right Here</td>
        <td>Personal blog theme, admin theme</td>
        <td>01/02/2015</td>
        <td>$200.00</td>
    </tbody>
  </table>
</div>

<div class="avv">
  <nav>
    <ul class="qn">
      <li class="qp">
        <a class="qo" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="adp">Previous</span>
        </a>
      </li>
      <li class="qp active"><a class="qo" href="#">1</a></li>
      <li class="qp"><a class="qo" href="#">2</a></li>
      <li class="qp"><a class="qo" href="#">3</a></li>
      <li class="qp"><a class="qo" href="#">4</a></li>
      <li class="qp"><a class="qo" href="#">5</a></li>
      <li class="qp">
        <a class="qo" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="adp">Next</span>
        </a>
      </li>
    </ul>
  </nav>
</div>

      </div>
    </div>
  </div>

  <div id="docsModal" class="cb fade" tabindex="-1" role="dialog" aria-labelledby="brl">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="sd">
        <h4 class="modal-title" id="myModalLabel">Example modal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p>You're looking at an example modal in the dashboard theme.</p>
      </div>
      <div class="se">
        <button type="button" class="ce ni" data-dismiss="modal">Cool, got it!</button>
      </div>
    </div>
  </div>
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
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
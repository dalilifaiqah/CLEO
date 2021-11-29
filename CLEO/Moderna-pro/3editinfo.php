<?php
session_start(); 
include ("includes/config.php");
$id = $_SESSION['id'];
if(isset($_POST['submit']))
    {
        $id=intval($_GET['id']);
        $vimage1=$_FILES["img1"]["name"];
        move_uploaded_file($_FILES["img1"]["tmp_name"],"../pictures/".$_FILES["img1"]["name"]);

        $sql="UPDATE customer SET profilepicture=:vimage1 WHERE id=:id";
        $query = $dbh->prepare($sql);
        $query->bindParam(':vimage1',$vimage1,PDO::PARAM_STR);
        $query->bindParam(':id',$id,PDO::PARAM_STR);
        $query->execute();

        echo "<script>alert('You have updated your profile image.');</script>";
    }
    $con = mysqli_connect("localhost","ourcleoc_cleoadmin","Cleo_12345_","ourcleoc_cleo"); 
$email=$_SESSION['email']; 
$query=mysqli_query($con,"SELECT * FROM customer WHERE email='$email' "); 
$row=mysqli_fetch_array($query);
$sql = "SELECT * from customer ";
                $query = $dbh -> prepare($sql);
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                $cnt=1;
                if($query->rowCount() > 0)
                {
                foreach($results as $result)
                {
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Edit Profile Info</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

   <!-- Favicons -->
   <link rel="icon" href="assets/img/icon1.png">

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
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="" href="Customerhomepage.php">Home</a></li>
          <li><a href="3about.php">About Us</a></li>
          <li><a href="3products.php">Products</a></li>
          <li><a href="3team.php">Team</a></li>
          <li><a href="3contact.php">Contact Us</a></li>
          <li class="dropdown"><a class="active"href="#"><span><?php echo $row['name']; ?></span> <i class="bi bi-chevron-down"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </i></a>
            <ul>
              <li><a class="active" href="3viewprofile.php">My Profile</a></li>
              <li><a href="3cart.php">Cart</a></li>
              <li><a href="3purchasehistory.php">Purchase History</a></li>
            </ul>
          </li>
          <li><form action="CustomerDB.php" method="POST">
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
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-12 profile-user">
                        <div class="info-box" style="padding: 90px 0 90px 0; box-shadow:none;">
                              <?php
                              if ($row['profilepicture'] == '') {
                                echo "<img width='110' height='125' src='pictures/default-profile.jpg' alt='Default Profile Pic'>";
                              } else {
                                echo "<img width='125' height='125' src='pictures/" . $row['profilepicture'] . "' alt='Profile Pic' >";
                              }
                            ?>
                            <h3><?php echo $row['name']; ?></h3>
                            <h4><?php echo $row['email']; ?></h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 profile" >
                <div class="php-email-form" style="background-color: #fff; white; box-shadow: none;padding: 30px 0 30px 0; margin-bottom:0px">
                    <form action="customereditprofile.php" method="POST"  class="php-email-form" style="background-color: #fff; white; box-shadow: none; margin-bottom:0px;">
                        <div class="row " >
                        <div class="col-md-12 ">
                            <h3>Profile Info</h3>
                        </div>
                        <div class="col-md-6">
                            <p style="margin: 0 0 0 0;">Username</p>
                            <input type="text" name="name" class="form-control" id="name" placeholder="<?php echo $row['name']; ?>" required >
                        </div>
                        <div class="col-md-6 ">
                            <p style="margin: 0 0 0 0;">Email</p>
                            <input type="email" class="form-control" name="email" id="email" placeholder="<?php echo $row['email']; ?>" required>
                        </div>
                      </div>
                    
                      <div class="row">
                        <div class="col-md-6">
                            <p style="margin-top: 10px; margin-bottom: 0;">Password</p>
                            <input type="text" name="password" class="form-control " id="password" placeholder="<?php echo $row['password']; ?>" minlength = "6" required>
                        </div>
                      </div>
                      <div class="my-3">
                      </div>
                      <br><br>
                      <div class="row" style="width:80%;">
                        <button class="warnabutton center" type="submit" name = "customereditprofile" style="background-color: #FFBF00;color:#000; 
                        width:40%;margin-left:15px;">Save Changes</button><a href="3viewprofile.php" style="font-size:30px;width:10%">&#10006;</a>
                      </div>
                    </form>
            </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
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
            <p>CLEO is a place where Malaysian video gamers come together to explore and find their perfect in-game materials to 
              bring up their in game experiences to the next level.</p>
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
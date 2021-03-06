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

  <title>CLEO Products</title>
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

<body style="background-color: #241023;">

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
          <li><a class="active" href="3products.php">Products</a></li>
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

  <main id="main">

    <!-- ======= Our Portfolio Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Our Products</h2>
          <ol>
            <li><a href="Customerhomepage.php">Home</a></li>
            <li><a href="3products.php">Our Products</a></li>
          </ol>
        </div>
      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Portfolio Section ======= -->
    <section class="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters" >
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-GenshinImpact">Genshin Impact</li>
              <li data-filter=".filter-Valorant">Valorant</li>
              <li data-filter=".filter-ApexLegend">Apex Legend</li>
              <li data-filter=".filter-PUBG">PUBG</li>
              <li data-filter=".filter-MobileLegend">Mobile Legend</li>
              <li data-filter=".filter-GamePoints">Game Points</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-Valorant">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/size-formated/BlastX-Valo.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>BlastX Bundle</h3>
                <div>
                  <a href="assets/img/portfolio/size-formated/BlastX-Valo.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" 
                  title="BlastX Bundle"><i class="bx bx-plus"></i></a>
                  <a href="3BlastX.php" title="BlastX Bundle"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-Valorant">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/size-formated/oni-valo.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Oni Bundle</h3>
                <div>
                  <a href="assets/img/portfolio/size-formated/oni-valo.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                   title="Oni Bundle"><i class="bx bx-plus"></i></a>
                  <a href="3Oni.php" title="Oni Bundle"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-GenshinImpact">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/size-formated/kamisatoayaka-genshin.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Kamisato Ayaka</h3>
                <div>
                  <a href="assets/img/portfolio/size-formated/kamisatoayaka-genshin.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                   title="Kamisato Ayaka"><i class="bx bx-plus"></i></a>
                  <a href="3KamisatoAyaka.php" title="Kamisato Ayaka"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-wrap filter-GenshinImpact">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/size-formated/klee-genshin.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Klee</h3>
                <div>
                  <a href="assets/img/portfolio/size-formated/klee-genshin.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" 
                  title="Klee"><i class="bx bx-plus"></i></a>
                  <a href="3Klee.php" title="Klee"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-GenshinImpact">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/size-formated/raidenshogun-genshin.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Raiden Shogun</h3>
                <div>
                  <a href="assets/img/portfolio/size-formated/raidenshogun-genshin.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                   title="Raiden Shogun"><i class="bx bx-plus"></i></a>
                  <a href="3RaidenShogun.php" title="Raiden Shogun"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <!--***-->
          <div class="col-lg-4 col-md-6 portfolio-wrap filter-GamePoints">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/size-formated/genshinimpactlogo.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Genesis Crystals</h3>
                <div>
                  <a href="assets/img/portfolio/size-formated/genshinimpactlogo.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                   title="Genesis Crystals"><i class="bx bx-plus"></i></a>
                  <a href="3GenshinPoints.php" title="Genesis Crystals"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-Valorant">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/size-formated/singularity-valo.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Singularity Bundle</h3>
                <div>
                  <a href="assets/img/portfolio/size-formated/singularity-valo.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" 
                  title="Singularity Bundle"><i class="bx bx-plus"></i></a>
                  <a href="3Singularity.php" title="Singularity Bundle"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-wrap filter-GamePoints">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/size-formated/valorantlogo.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Valorant Points</h3>
                <div>
                  <a href="assets/img/portfolio/size-formated/valorantlogo.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title="Valorant Points"><i class="bx bx-plus"></i></a>
                  <a href="3Valopoints.php" title="Valorant Points"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-Valorant">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/size-formated/sovereign-valo.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Sovereign Bundle</h3>
                <div>
                  <a href="assets/img/portfolio/size-formated/sovereign-valo.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                   title="Sovereign Bundle"><i class="bx bx-plus"></i></a>
                  <a href="3Sovereign.php" title="Sovereign Bundle"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-GenshinImpact">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/size-formated/xiao-genshin.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Xiao</h3>
                <div>
                  <a href="assets/img/portfolio/size-formated/xiao-genshin.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                   title="Xiao"><i class="bx bx-plus"></i></a>
                  <a href="3Xiao.php" title="Xiao"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-Valorant">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/size-formated/zedd-valo.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>The Spectrum</h3>
                <div>
                  <a href="assets/img/portfolio/size-formated/zedd-valo.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" 
                  title="The Spectrum"><i class="bx bx-plus"></i></a>
                  <a href="3Spectrum.php" title="The Spectrum"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-GenshinImpact">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/size-formated/zhongli-genshin.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Zhongli</h3>
                <div>
                  <a href="assets/img/portfolio/size-formated/zhongli-genshin.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" 
                  title="Zhongli"><i class="bx bx-plus"></i></a>
                  <a href="3Zhongli.php" title="Zhongli"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-MobileLegend">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/size-formated/sun-mobileLegend.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Sun</h3>
                <div>
                  <a href="assets/img/portfolio/size-formated/sun-mobileLegend.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" 
                  title="Sun Hero"><i class="bx bx-plus"></i></a>
                  <a href="3Sun.php" title="Sun Hero"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-PUBG">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/size-formated/scarL-pubg.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Vintage Rock ScarL</h3>
                <div>
                  <a href="assets/img/portfolio/size-formated/scarL-pubg.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                   title="Vintage Rock ScarL"><i class="bx bx-plus"></i></a>
                  <a href="3VintageRock.php" title="Vintage Rock ScarL"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-PUBG">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/size-formated/scarL2-pubg.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Trifecta ScarL</h3>
                <div>
                  <a href="assets/img/portfolio/size-formated/scarL2-pubg.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                   title="Trifecta ScarL"><i class="bx bx-plus"></i></a>
                  <a href="3Trifecta.php" title="Trifecta ScarL"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-wrap filter-GamePoints">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/size-formated/apexlegendlogo.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Apex Coins</h3>
                <div>
                  <a href="assets/img/portfolio/size-formated/apexlegendlogo.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                   title="Apex Coins"><i class="bx bx-plus"></i></a>
                  <a href="3apexcoin.php" title="Apex Coins"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-PUBG">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/size-formated/panskin-pubg.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Pan of Judgement</h3>
                <div>
                  <a href="assets/img/portfolio/size-formated/panskin-pubg.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" 
                  title="Pan of Judgement"><i class="bx bx-plus"></i></a>
                  <a href="3Judgementpan.php" title="Pan of Judgement"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-ApexLegend">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/size-formated/octane-apex.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Laughing Fool Octane</h3>
                <div>
                  <a href="assets/img/portfolio/size-formated/octane-apex.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" 
                  title="Laughing Fool Octane"><i class="bx bx-plus"></i></a>
                  <a href="3octane.php" title="Laughing Fool Octane"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-MobileLegend">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/size-formated/moskov-mobileLegend.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Moskov</h3>
                <div>
                  <a href="assets/img/portfolio/size-formated/moskov-mobileLegend.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" 
                  title="Moskov Hero"><i class="bx bx-plus"></i></a>
                  <a href="3Moskov.php" title="Moskov Hero"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-PUBG">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/size-formated/M16A4(2)-pubg.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Red Line M16A4</h3>
                <div>
                  <a href="assets/img/portfolio/size-formated/M16A4(2)-pubg.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" 
                  title="Red Line M16A4"><i class="bx bx-plus"></i></a>
                  <a href="3RedLine.php" title="Red Line M16A4"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-MobileLegend">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/size-formated/lesly-mobileLegend.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Lesley</h3>
                <div>
                  <a href="assets/img/portfolio/size-formated/lesly-mobileLegend.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" 
                  title="Lesley Hero"><i class="bx bx-plus"></i></a>
                  <a href="3Lesly.php" title="Lesley Hero"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-PUBG">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/size-formated/kar98(2)-pubg.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Desert Digital Kar98</h3>
                <div>
                  <a href="assets/img/portfolio/size-formated/kar98(2)-pubg.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                   title="Desert Digital Kar98"><i class="bx bx-plus"></i></a>
                  <a href="3DesertDigital.php" title="Desert Digital Kar98"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-MobileLegend">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/size-formated/harley-mobileLegend.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Harley</h3>
                <div>
                  <a href="assets/img/portfolio/size-formated/harley-mobileLegend.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                   title="Harley Hero"><i class="bx bx-plus"></i></a>
                  <a href="3Harley.php" title="Harley Hero"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-ApexLegend">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/size-formated/fuse-apex.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Pearly White Fuse</h3>
                <div>
                  <a href="assets/img/portfolio/size-formated/fuse-apex.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" 
                  title="Pearly White Fuse"><i class="bx bx-plus"></i></a>
                  <a href="3Fuse.php" title="Pearly White Fuse"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-ApexLegend">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/size-formated/crypto-apex.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Deadly Byte Crypto</h3>
                <div>
                  <a href="assets/img/portfolio/size-formated/crypto-apex.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" 
                  title="Deadly Byte Crypto"><i class="bx bx-plus"></i></a>
                  <a href="3Crypto.php" title="Deadly Byte Crypto"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-MobileLegend">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/size-formated/chang-e-mobileLegend.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Chang-E</h3>
                <div>
                  <a href="assets/img/portfolio/size-formated/chang-e-mobileLegend.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                   title="Chang-E Hero"><i class="bx bx-plus"></i></a>
                  <a href="3Chang-E.php" title="Chang-E Hero"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-ApexLegend">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/size-formated/caustic-apex.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>BlackHeart Caustic</h3>
                <div>
                  <a href="assets/img/portfolio/size-formated/caustic-apex.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" 
                  title="BlackHeart Caustic"><i class="bx bx-plus"></i></a>
                  <a href="3Caustic.php" title="BlackHeart Caustic"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-wrap filter-GamePoints">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/size-formated/pubglogo.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>UC PUBG</h3>
                <div>
                  <a href="assets/img/portfolio/size-formated/pubglogo.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="UC PUBG">
                    <i class="bx bx-plus"></i></a>
                  <a href="3UC.php" title="UC PUBG"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-wrap filter-ApexLegend">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/size-formated/bloodhound-apex.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Projector of The Patch Bloodhound</h3>
                <div>
                  <a href="assets/img/portfolio/size-formated/bloodhound-apex.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                   title="Projector of The Patch Bloodhound"><i class="bx bx-plus"></i></a>
                  <a href="3Bloodhound.php" title="Projector of The Patch Bloodhound"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-wrap filter-GamePoints">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/size-formated/mobilelegendlogo.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3>Mobile Legends Diamonds</h3>
                <div>
                  <a href="assets/img/portfolio/size-formated/mobilelegendlogo.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Mobile Legends Diamonds">
                    <i class="bx bx-plus"></i></a>
                  <a href="3Diamonds.php" title="Mobile Legends Diamonds"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

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
              <p>CLEO is a place where Malaysian video gamers come together to explore and find their perfect in-game materials to bring up
                 their in game experiences to the next level.</p>
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
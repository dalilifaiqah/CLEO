<?php
$con = mysqli_connect("localhost","admin1","admin1","cleo"); 
session_start(); 
$email=$_SESSION['email']; 
$query=mysqli_query($con,"SELECT * FROM admin WHERE email='$email' "); 
$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../assets/img/CLEO-Logo.png">
    <title>CLEO Admin Profile</title>

    <!-- google font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">

	<!-- aiz core css -->
	<link rel="stylesheet" href="css\active-ecommerce-cms\vendors.css">
    <link rel="stylesheet" href="css\active-ecommerce-cms\aiz-core.css">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link rel="stylesheet" href="css\active-ecommerce-cms\vendors.css">
    <link rel="stylesheet" href="css\active-ecommerce-cms\aiz-core.css">
    
    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        body {
            font-size: 16px;}
    </style>

    <script>
        var AIZ = AIZ || {};
        AIZ.local = {
            nothing_selected: 'Nothing selected',
            nothing_found: 'Nothing found',
            choose_file: 'Choose file',
            file_selected: 'File selected',
            files_selected: 'Files selected',
            add_more_files: 'Add more files',
            adding_more_files: 'Adding more files',
            drop_files_here_paste_or: 'Drop files here, paste or',
            browse: 'Browse',
            upload_complete: 'Upload complete',
            upload_paused: 'Upload paused',
            resume_upload: 'Resume upload',
            pause_upload: 'Pause upload',
            retry_upload: 'Retry upload',
            cancel_upload: 'Cancel upload',
            uploading: 'Uploading',
            processing: 'Processing',
            complete: 'Complete',
            file: 'File',
            files: 'Files',
        }
    </script>
    
    <style type="text/css">/* Chart.js */
        @keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}
        .chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;
        bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;
        height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}</style>

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body style="background-color: #B7569A;">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
                <div class="sidebar-brand-icon">
                    <img src="../../assets/img/CLEO-Logo.png" alt="logo">
                    <!--<i class="fas fa-laugh-wink"></i>-->
                </div>
                <div class="sidebar-brand-text mx-3">CLEO Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Customer's List -->
            <li class="nav-item ">
                <a class="nav-link" href="customer-list-table.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Customer List</span></a>
            </li>

            <!-- Nav Item - Product's List Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Product List</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Video_Games:</h6>
                        <a class="collapse-item" href="genshin-product-list.php">Genshin Impact</a>
                        <a class="collapse-item" href="valorant-product-list.php">Valorant</a>
                        <a class="collapse-item" href="mobilelegends-product-list.php">Mobile Legends</a>
                        <a class="collapse-item" href="pubg-product-list.php">PUBG</a>
                        <a class="collapse-item" href="apexlegends-product-list.php">Apex Legends</a>
                        <h6 class="collapse-header">Game_Points:</h6>
                        <a class="collapse-item" href="gamepoints-product-list.php">Game Points</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Feedbacks list Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Feedbacks</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="feedback-list-customer.php">Customer</a>
                        <a class="collapse-item" href="feedback-list-guest.php">Guest</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Purchase List -->
            <li class="nav-item">
                <a class="nav-link" href="order-purchase-list.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Purchase List</span></a>
            </li>

            <!-- Divider -->
            <!--<hr class="sidebar-divider">-->

            <!-- Heading -->
            <!--<div class="sidebar-heading">
                Addons
            </div>-->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" style="background-color: #B7569A;">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-custompurple2 topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button" style="background-color: #4E73DF; border-color: #4E73DF;">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-white small"><?php echo $row['name']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="admin-profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                       
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0" style="color: #fff;">Admin Profile</h1>
                        <!--<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>-->
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="aiz-main-content">
                            <div class="px-15px px-lg-25px">
                                    <div class="">
                </div>

                <div class="container col-lg-12">
                <div>
                            <button class="yellow-buttonloh" type="button" onClick="backtoadminprofile()" style="float:right;margin: 0px 20px;width:100px;height:33px;">Cancel</button>
                            <script>
                                function backtoadminprofile() {
                                    window.location.href="admin-profile.php";
                                }
                                </script>
                            <br>
                        </div>
                    <div class="main-body">
                    
                          <!-- Breadcrumb -->
                          <!--<nav aria-label="breadcrumb" class="main-breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                              <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                            </ol>
                          </nav>-->
                          <!-- /Breadcrumb -->
                    
                          <div class="row gutters-sm">
                          <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex flex-column align-items-center text-center">
                                                <div class="mt-3">
                                                <img src="images/<?php echo $row['profilepicture']; ?>" onclick = "triggerClick()"  width="110" id = "profilepicture" name = "profilepicture" >  <!-- class="rounded-circle p-1 bg-primary" -->
                                             
                                                    <form action = /MasterCLEO/Moderna-pro/2_admin_pages_here/startbootstrap-sb-admin-2-gh-pages/admineditprofile.php method = "POST">
                                                    <h4><?php echo $row['name']; ?></h4>
                                                    <p class="text-secondary mb-1">Back-end Programmer</p>
                                                    <p class="text-muted font-size-sm"><?php echo $row['address']; ?></p>
                                                    <!--<button class="btn btn-outline-primary">Choose picture</button>-->
                                                  <!--  <button class="btn btn-primary" name = admineditprofile>Save changes</button> -
                                                </div>
                                                <div class = "btn btn-outline-primary"-->
                                                    <!--<span>Upload Photo</span>-->
                                                    <input class = "file-input"  type = "file" onchange = "displayImage(this)" id = "profilepicture" name = "profilepicture">Upload Profile Picture</input>
                                                    <br><br>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <div class="col-sm-9 text-secondary">
                                                                <input type="submit" class="btn btn-primary px-4" style="margin-left: 70px" value="Save Changes" name = "admineditpicture">
                                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            
                                        </div>
                                    </div>
                                </div>
                            <div class="col-md-8">
                              <div class="card mb-3">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <h6 class="mb-0">Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                    <?php echo $row['name']; ?>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <h6 class="mb-0">E-mail</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                    <?php echo $row['email']; ?>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <h6 class="mb-0">Password</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                    <?php echo $row['password']; ?>
                                    </div>
                                  </div>
                                  <!--<hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <h6 class="mb-0">Address</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      Bay Area, San Francisco, CA
                                    </div>
                                  </div>-->
                                  <hr>
                                  <br><br><br>
                              </div>
                
                              <div class="row gutters-sm">
                                
                              </div>
                
                
                
                            </div>
                          </div>
                          
                
                        </div>
                    </div>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Exit Admin Dashboard</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Are you sure?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
                    <form action=/MasterCLEO/Moderna-pro/AdminDB.php method="POST">
                    <input class="btn btn-primary" type="submit" name="logout" id="submit" value="Yes" />
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style type="text/css">
        body{
            /*margin-top:20px;*/
            color: #1a202c;
            text-align: left;
            background-color: #B7569A;    
        }
        .main-body {
            padding: 15px;
        }
        .card {
            box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
        }
        
        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0,0,0,.125);
            border-radius: .25rem;
        }
        
        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1rem;
        }
        
        .gutters-sm {
            margin-right: -8px;
            margin-left: -8px;
        }
        
        .gutters-sm>.col, .gutters-sm>[class*=col-] {
            padding-right: 8px;
            padding-left: 8px;
        }
        .mb-3, .my-3 {
            margin-bottom: 1rem!important;
        }
        
        .bg-gray-300 {
            background-color: #e2e8f0;
        }
        .h-100 {
            height: 100%!important;
        }
        .shadow-none {
            box-shadow: none!important;
        }
        .btn-info {
          color: #fff;
          background-color: #FFBF00;
          border-color: #FFBF00;
        }
        
        .btn-info:hover {
          color: #fff;
          background-color: #CC9900;
          border-color: #CC9900;
        }
        
        .btn-info:focus, .btn-info.focus {
          color: #fff;
          background-color: #CC9900;
          border-color: #CC9900;
          box-shadow: 0 0 0 0.2rem rgb(212, 199, 84);
        }
        
        .btn-info.disabled, .btn-info:disabled {
          color: #fff;
          background-color: #FFBF00;
          border-color: #FFBF00;
        }
        
        .btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active,
        .show > .btn-info.dropdown-toggle {
          color: #fff;
          background-color: #CC9900;
          border-color: #CC9900;
        }
        
        .btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus,
        .show > .btn-info.dropdown-toggle:focus {
          box-shadow: 0 0 0 0.2rem rgba(212, 206, 84, 0.5);
        }
        
        .btn-primary {
          color: #fff;
          background-color: #FFBF00;
          border-color: #FFBF00;
        }
        
        .btn-primary:hover {
          color: #fff;
          background-color: #E6C200;
          border-color: #E6C200;
        }
        
        .btn-primary:focus, .btn-primary.focus {
          color: #fff;
          background-color: #E6C200;
          border-color: #E6C200;
          box-shadow: 0 0 0 0.2rem rgb(226, 224, 97);
        }
        
        .btn-primary.disabled, .btn-primary:disabled {
          color: #fff;
          background-color: #dfd84e;
          border-color: #dfd84e;
        }
        
        .btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
        .show > .btn-primary.dropdown-toggle {
          color: #fff;
          background-color: #d4cb26;
          border-color: #d4cb26;
        }
        
        .btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
        .show > .btn-primary.dropdown-toggle:focus {
          box-shadow: 0 0 0 0.2rem rgba(228, 216, 105, 0.5);
        }
        
        .btn-outline-primary {
          color: #FFBF00;
          border-color: #FFBF00;
        }
        
        .btn-outline-primary:hover {
          color: #fff;
          background-color: #E6C200;
          border-color: #E6C200;
        }
        
        .btn-outline-primary:focus, .btn-outline-primary.focus {
          box-shadow: 0 0 0 0.2rem rgba(223, 216, 78, 0.5);
        }
        
        .btn-outline-primary.disabled, .btn-outline-primary:disabled {
          color: #E6C200;
          background-color: transparent;
        }
        
        .btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active,
        .show > .btn-outline-primary.dropdown-toggle {
          color: #fff;
          background-color: #E6C200;
          border-color: #E6C200;
        }
        
        .btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
        .show > .btn-outline-primary.dropdown-toggle:focus {
          box-shadow: 0 0 0 0.2rem rgba(223, 216, 78, 0.5);
        }
        
        </style>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="js/demo/chart-bar-demo.js"></script>
    <script src="js/demo/datatables-demo.js"></script>

    <!-- Scripts from orange ecommerce reference template
    <script src="vendor\active-ecommerce-cms\js\vendors.js"></script>
	<script src="vendor\active-ecommerce-cms\js\aiz-core.js"></script>-->

    <script type="text/javascript">
    AIZ.plugins.chart('#pie-1',{
        type: 'doughnut',
        data: {
            labels: [
                'Total published products',
                'Total sellers products',
                'Total admin products'
            ],
            datasets: [
                {
                    data: [
                        145,
                        94,
                        51
                    ],
                    backgroundColor: [
                        "#fd3995",
                        "#34bfa3",
                        "#5d78ff",
                        '#fdcb6e',
                        '#d35400',
                        '#8e44ad',
                        '#006442',
                        '#4D8FAC',
                        '#CA6924',
                        '#C91F37'
                    ]
                }
            ]
        },
        options: {
            cutoutPercentage: 70,
            legend: {
                labels: {
                    fontFamily: 'Poppins',
                    boxWidth: 10,
                    usePointStyle: true
                },
                onClick: function () {
                    return '';
                },
                position: 'bottom'
            }
        }
    });

    AIZ.plugins.chart('#pie-2',{
        type: 'doughnut',
        data: {
            labels: [
                'Total sellers',
                'Total approved sellers',
                'Total pending sellers'
            ],
            datasets: [
                {
                    data: [
                        11,
                        10,
                        1
                    ],
                    backgroundColor: [
                        "#fd3995",
                        "#34bfa3",
                        "#5d78ff",
                        '#fdcb6e',
                        '#d35400',
                        '#8e44ad',
                        '#006442',
                        '#4D8FAC',
                        '#CA6924',
                        '#C91F37'
                    ]
                }
            ]
        },
        options: {
            cutoutPercentage: 70,
            legend: {
                labels: {
                    fontFamily: 'Montserrat',
                    boxWidth: 10,
                    usePointStyle: true
                },
                onClick: function () {
                    return '';
                },
                position: 'bottom'
            }
        }
    });
    AIZ.plugins.chart('#graph-1',{
        type: 'bar',
        data: {
            labels: [
                                'Genshin Impact',
                                'Valorant',
                                'Mobile Legend',
                                'PUBG',
                                'Apex Legend',
                            ],
            datasets: [{
                label: 'Number of Sale',
                data: [
                    11,7,5,3,2,
                ],
                backgroundColor: [
                                            'rgba(55, 125, 255, 0.4)',
                                            'rgba(55, 125, 255, 0.4)',
                                            'rgba(55, 125, 255, 0.4)',
                                            'rgba(55, 125, 255, 0.4)',
                                            'rgba(55, 125, 255, 0.4)',
                                            'rgba(55, 125, 255, 0.4)',
                                            'rgba(55, 125, 255, 0.4)',
                                            'rgba(55, 125, 255, 0.4)',
                                            'rgba(55, 125, 255, 0.4)',
                                            'rgba(55, 125, 255, 0.4)',
                                            'rgba(55, 125, 255, 0.4)',
                                            'rgba(55, 125, 255, 0.4)',
                                            'rgba(55, 125, 255, 0.4)',
                                    ],
                borderColor: [
                                            'rgba(55, 125, 255, 1)',
                                            'rgba(55, 125, 255, 1)',
                                            'rgba(55, 125, 255, 1)',
                                            'rgba(55, 125, 255, 1)',
                                            'rgba(55, 125, 255, 1)',
                                            'rgba(55, 125, 255, 1)',
                                            'rgba(55, 125, 255, 1)',
                                            'rgba(55, 125, 255, 1)',
                                            'rgba(55, 125, 255, 1)',
                                            'rgba(55, 125, 255, 1)',
                                            'rgba(55, 125, 255, 1)',
                                            'rgba(55, 125, 255, 1)',
                                            'rgba(55, 125, 255, 1)',
                                    ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    gridLines: {
                        color: '#f2f3f8',
                        zeroLineColor: '#f2f3f8'
                    },
                    ticks: {
                        fontColor: "#8b8b8b",
                        fontFamily: 'Poppins',
                        fontSize: 10,
                        beginAtZero: true
                    }
                }],
                xAxes: [{
                    gridLines: {
                        color: '#f2f3f8'
                    },
                    ticks: {
                        fontColor: "#8b8b8b",
                        fontFamily: 'Poppins',
                        fontSize: 10
                    }
                }]
            },
            legend:{
                labels: {
                    fontFamily: 'Poppins',
                    boxWidth: 10,
                    usePointStyle: true
                },
                onClick: function () {
                    return '';
                },
            }
        }
    });
    AIZ.plugins.chart('#graph-2',{
        type: 'bar',
        data: {
            labels: [
            'Genshin Impact',
            'Valorant',
            'Mobile Legend',
            'PUBG',
            'Apex Legend',
                    ],
            datasets: [{
                label: 'Number of Stock',
                data: [
                    20102,19991,7538,6559,20527,
                ],
                backgroundColor: [
                                            'rgba(253, 57, 149, 0.4)',
                                            'rgba(253, 57, 149, 0.4)',
                                            'rgba(253, 57, 149, 0.4)',
                                            'rgba(253, 57, 149, 0.4)',
                                            'rgba(253, 57, 149, 0.4)',
                                            'rgba(253, 57, 149, 0.4)',
                                            'rgba(253, 57, 149, 0.4)',
                                            'rgba(253, 57, 149, 0.4)',
                                            'rgba(253, 57, 149, 0.4)',
                                            'rgba(253, 57, 149, 0.4)',
                                            'rgba(253, 57, 149, 0.4)',
                                            'rgba(253, 57, 149, 0.4)',
                                            'rgba(253, 57, 149, 0.4)',
                                    ],
                borderColor: [
                                            'rgba(253, 57, 149, 1)',
                                            'rgba(253, 57, 149, 1)',
                                            'rgba(253, 57, 149, 1)',
                                            'rgba(253, 57, 149, 1)',
                                            'rgba(253, 57, 149, 1)',
                                            'rgba(253, 57, 149, 1)',
                                            'rgba(253, 57, 149, 1)',
                                            'rgba(253, 57, 149, 1)',
                                            'rgba(253, 57, 149, 1)',
                                            'rgba(253, 57, 149, 1)',
                                            'rgba(253, 57, 149, 1)',
                                            'rgba(253, 57, 149, 1)',
                                            'rgba(253, 57, 149, 1)',
                                    ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    gridLines: {
                        color: '#f2f3f8',
                        zeroLineColor: '#f2f3f8'
                    },
                    ticks: {
                        fontColor: "#8b8b8b",
                        fontFamily: 'Poppins',
                        fontSize: 10,
                        beginAtZero: true
                    }
                }],
                xAxes: [{
                    gridLines: {
                        color: '#f2f3f8'
                    },
                    ticks: {
                        fontColor: "#8b8b8b",
                        fontFamily: 'Poppins',
                        fontSize: 10
                    }
                }]
            },
            legend:{
                labels: {
                    fontFamily: 'Poppins',
                    boxWidth: 10,
                    usePointStyle: true
                },
                onClick: function () {
                    return '';
                },
            }
        }
    });
</script>

    <script type="text/javascript">
	    

        if ($('#lang-change').length > 0) {
            $('#lang-change .dropdown-menu a').each(function() {
                $(this).on('click', function(e){
                    e.preventDefault();
                    var $this = $(this);
                    var locale = $this.data('flag');
                    $.post('https://demo.activeitzone.com/ecommerce/language',{_token:'TH9f8WjAlhD1DNiM4FWTmgRjdRx3avBpd3nOHLDQ', locale:locale}, function(data){
                        location.reload();
                    });

                });
            });
        }
        function menuSearch(){
			var filter, item;
			filter = $("#menu-search").val().toUpperCase();
			items = $("#main-menu").find("a");
			items = items.filter(function(i,item){
				if($(item).find(".aiz-side-nav-text")[0].innerText.toUpperCase().indexOf(filter) > -1 && $(item).attr('href') !== '#'){
					return item;
				}
			});

			if(filter !== ''){
				$("#main-menu").addClass('d-none');
				$("#search-menu").html('')
				if(items.length > 0){
					for (i = 0; i < items.length; i++) {
						const text = $(items[i]).find(".aiz-side-nav-text")[0].innerText;
						const link = $(items[i]).attr('href');
						 $("#search-menu").append(`<li class="aiz-side-nav-item"><a href="${link}" class="aiz-side-nav-link"><i class="las la-ellipsis-h aiz-side-nav-icon"></i><span>${text}</span></a></li`);
					}
				}else{
					$("#search-menu").html(`<li class="aiz-side-nav-item"><span	class="text-center text-muted d-block">Nothing Found</span></li>`);
				}
			}else{
				$("#main-menu").removeClass('d-none');
				$("#search-menu").html('')
			}
        }
    </script>


</body>

</html>
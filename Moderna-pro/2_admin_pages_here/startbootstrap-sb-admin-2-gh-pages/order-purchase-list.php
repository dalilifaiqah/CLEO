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
    <title>CLEO Order Purchase List</title>

    <!-- google font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">

	<!-- aiz core css -->
	<link rel="stylesheet" href="css\active-ecommerce-cms\vendors.css">
    <link rel="stylesheet" href="css\active-ecommerce-cms\aiz-core.css">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!--<link href="scss/custom-button.scss" rel="stylesheet">-->

</head>

<body id="page-top">

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
            <li class="nav-item">
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

            <!-- Nav Item - Order Purchase -->
            <li class="nav-item active">
                <a class="nav-link" href="order-purchase-list.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Order Purchase</span></a>
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
            <div id="content">

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
                                <button class="btn btn-primary" type="button">
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
                    <h1 class="h3 mb-2 text-gray-800">Order Purchases</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3" style="background-color: whitesmoke;">
                            <h6 class="m-0 font-weight-bold text-primary">Order Purchase List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Products</th>
                                            <th>Account ID</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Paid</th>
                                            <th>Done</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Products</th>
                                            <th>Account ID</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Paid</th>
                                            <th>Done</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>
                                                <div>
                                                <input type="checkbox" value="None" id="squaredFour" name="check" checked />
                                                <label for="squaredFour"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <label class="aiz-switch aiz-switch-success mb-0">
                                                    <input type="checkbox" onchange="updateSettings(this, 'vendor_system_activation')" checked="">
                                                    <span class="slider round"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>
                                                <div>
                                                <input type="checkbox" value="None" id="squaredFour" name="check" checked />
                                                <label for="squaredFour"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <label class="aiz-switch aiz-switch-success mb-0">
                                                    <input type="checkbox" onchange="updateSettings(this, 'vendor_system_activation')" checked="">
                                                    <span class="slider round"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>
                                                <div>
                                                <input type="checkbox" value="None" id="squaredFour" name="check" checked />
                                                <label for="squaredFour"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <label class="aiz-switch aiz-switch-success mb-0">
                                                    <input type="checkbox" onchange="updateSettings(this, 'vendor_system_activation')" checked="">
                                                    <span class="slider round"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>
                                                <div>
                                                <input type="checkbox" value="None" id="squaredFour" name="check" checked />
                                                <label for="squaredFour"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <label class="aiz-switch aiz-switch-success mb-0">
                                                    <input type="checkbox" onchange="updateSettings(this, 'vendor_system_activation')" checked="">
                                                    <span class="slider round"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>
                                                <div>
                                                <input type="checkbox" value="None" id="squaredFour" name="check" checked />
                                                <label for="squaredFour"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <label class="aiz-switch aiz-switch-success mb-0">
                                                    <input type="checkbox" onchange="updateSettings(this, 'vendor_system_activation')" checked="">
                                                    <span class="slider round"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>
                                                <div>
                                                <input type="checkbox" value="None" id="squaredFour" name="check" checked />
                                                <label for="squaredFour"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <label class="aiz-switch aiz-switch-success mb-0">
                                                    <input type="checkbox" onchange="updateSettings(this, 'vendor_system_activation')" checked="">
                                                    <span class="slider round"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            <td>Sales Assistant</td>
                                            <td>San Francisco</td>
                                            <td>59</td>
                                            <td>2012/08/06</td>
                                            <td>
                                                <div>
                                                <input type="checkbox" value="None" id="squaredFour" name="check" checked />
                                                <label for="squaredFour"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <label class="aiz-switch aiz-switch-success mb-0">
                                                    <input type="checkbox" onchange="updateSettings(this, 'vendor_system_activation')" checked="">
                                                    <span class="slider round"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Rhona Davidson</td>
                                            <td>Integration Specialist</td>
                                            <td>Tokyo</td>
                                            <td>55</td>
                                            <td>2010/10/14</td>
                                            <td>
                                                <div>
                                                <input type="checkbox" value="None" id="squaredFour" name="check" checked />
                                                <label for="squaredFour"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <label class="aiz-switch aiz-switch-success mb-0">
                                                    <input type="checkbox" onchange="updateSettings(this, 'vendor_system_activation')" checked="">
                                                    <span class="slider round"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Colleen Hurst</td>
                                            <td>Javascript Developer</td>
                                            <td>San Francisco</td>
                                            <td>39</td>
                                            <td>2009/09/15</td>
                                            <td>
                                                <div>
                                                <input type="checkbox" value="None" id="squaredFour" name="check" checked />
                                                <label for="squaredFour"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <label class="aiz-switch aiz-switch-success mb-0">
                                                    <input type="checkbox" onchange="updateSettings(this, 'vendor_system_activation')" checked="">
                                                    <span class="slider round"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sonya Frost</td>
                                            <td>Software Engineer</td>
                                            <td>Edinburgh</td>
                                            <td>23</td>
                                            <td>2008/12/13</td>
                                            <td>
                                                <div>
                                                <input type="checkbox" value="None" id="squaredFour" name="check" checked />
                                                <label for="squaredFour"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <label class="aiz-switch aiz-switch-success mb-0">
                                                    <input type="checkbox" onchange="updateSettings(this, 'vendor_system_activation')" checked="">
                                                    <span class="slider round"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jena Gaines</td>
                                            <td>Office Manager</td>
                                            <td>London</td>
                                            <td>30</td>
                                            <td>2008/12/19</td>
                                            <td>
                                                <div>
                                                <input type="checkbox" value="None" id="squaredFour" name="check" checked />
                                                <label for="squaredFour"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <label class="aiz-switch aiz-switch-success mb-0">
                                                    <input type="checkbox" onchange="updateSettings(this, 'vendor_system_activation')" checked="">
                                                    <span class="slider round"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Quinn Flynn</td>
                                            <td>Support Lead</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2013/03/03</td>
                                            <td>
                                                <div>
                                                <input type="checkbox" value="None" id="squaredFour" name="check" checked />
                                                <label for="squaredFour"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <label class="aiz-switch aiz-switch-success mb-0">
                                                    <input type="checkbox" onchange="updateSettings(this, 'vendor_system_activation')" checked="">
                                                    <span class="slider round"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Charde Marshall</td>
                                            <td>Regional Director</td>
                                            <td>San Francisco</td>
                                            <td>36</td>
                                            <td>2008/10/16</td>
                                            <td>
                                                <div>
                                                <input type="checkbox" value="None" id="squaredFour" name="check" checked />
                                                <label for="squaredFour"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <label class="aiz-switch aiz-switch-success mb-0">
                                                    <input type="checkbox" onchange="updateSettings(this, 'vendor_system_activation')" checked="">
                                                    <span class="slider round"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Haley Kennedy</td>
                                            <td>Senior Marketing Designer</td>
                                            <td>London</td>
                                            <td>43</td>
                                            <td>2012/12/18</td>
                                            <td>
                                                <div>
                                                <input type="checkbox" value="None" id="squaredFour" name="check" checked />
                                                <label for="squaredFour"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <label class="aiz-switch aiz-switch-success mb-0">
                                                    <input type="checkbox" onchange="updateSettings(this, 'vendor_system_activation')" checked="">
                                                    <span class="slider round"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tatyana Fitzpatrick</td>
                                            <td>Regional Director</td>
                                            <td>London</td>
                                            <td>19</td>
                                            <td>2010/03/17</td>
                                            <td>
                                                <div>
                                                <input type="checkbox" value="None" id="squaredFour" name="check" checked />
                                                <label for="squaredFour"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <label class="aiz-switch aiz-switch-success mb-0">
                                                    <input type="checkbox" onchange="updateSettings(this, 'vendor_system_activation')" checked="">
                                                    <span class="slider round"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Michael Silva</td>
                                            <td>Marketing Designer</td>
                                            <td>London</td>
                                            <td>66</td>
                                            <td>2012/11/27</td>
                                            <td>
                                                <div>
                                                <input type="checkbox" value="None" id="squaredFour" name="check" checked />
                                                <label for="squaredFour"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <label class="aiz-switch aiz-switch-success mb-0">
                                                    <input type="checkbox" onchange="updateSettings(this, 'vendor_system_activation')" checked="">
                                                    <span class="slider round"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Paul Byrd</td>
                                            <td>Chief Financial Officer (CFO)</td>
                                            <td>New York</td>
                                            <td>64</td>
                                            <td>2010/06/09</td>
                                            <td>
                                                <div>
                                                <input type="checkbox" value="None" id="squaredFour" name="check" checked />
                                                <label for="squaredFour"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <label class="aiz-switch aiz-switch-success mb-0">
                                                    <input type="checkbox" onchange="updateSettings(this, 'vendor_system_activation')" checked="">
                                                    <span class="slider round"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Gloria Little</td>
                                            <td>Systems Administrator</td>
                                            <td>New York</td>
                                            <td>59</td>
                                            <td>2009/04/10</td>
                                            <td>
                                                <div>
                                                <input type="checkbox" value="None" id="squaredFour" name="check" checked />
                                                <label for="squaredFour"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <label class="aiz-switch aiz-switch-success mb-0">
                                                    <input type="checkbox" onchange="updateSettings(this, 'vendor_system_activation')" checked="">
                                                    <span class="slider round"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bradley Greer</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>41</td>
                                            <td>2012/10/13</td>
                                            <td>
                                                <div>
                                                <input type="checkbox" value="None" id="squaredFour" name="check" checked />
                                                <label for="squaredFour"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <label class="aiz-switch aiz-switch-success mb-0">
                                                    <input type="checkbox" onchange="updateSettings(this, 'vendor_system_activation')" checked="">
                                                    <span class="slider round"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Dai Rios</td>
                                            <td>Personnel Lead</td>
                                            <td>Edinburgh</td>
                                            <td>35</td>
                                            <td>2012/09/26</td>
                                            <td>
                                                <div>
                                                <input type="checkbox" value="None" id="squaredFour" name="check" checked />
                                                <label for="squaredFour"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <label class="aiz-switch aiz-switch-success mb-0">
                                                    <input type="checkbox" onchange="updateSettings(this, 'vendor_system_activation')" checked="">
                                                    <span class="slider round"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jenette Caldwell</td>
                                            <td>Development Lead</td>
                                            <td>New York</td>
                                            <td>30</td>
                                            <td>2011/09/03</td>
                                            <td>
                                                <div>
                                                <input type="checkbox" value="None" id="squaredFour" name="check" checked />
                                                <label for="squaredFour"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <label class="aiz-switch aiz-switch-success mb-0">
                                                    <input type="checkbox" onchange="updateSettings(this, 'vendor_system_activation')" checked="">
                                                    <span class="slider round"></span>
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Yuri Berry</td>
                                            <td>Chief Marketing Officer (CMO)</td>
                                            <td>New York</td>
                                            <td>40</td>
                                            <td>2009/06/25</td>
                                            <td>
                                                <div>
                                                <input type="checkbox" value="None" id="squaredFour" name="check" checked />
                                                <label for="squaredFour"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <label class="aiz-switch aiz-switch-success mb-0">
                                                    <input type="checkbox" onchange="updateSettings(this, 'vendor_system_activation')" checked="">
                                                    <span class="slider round"></span>
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

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

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
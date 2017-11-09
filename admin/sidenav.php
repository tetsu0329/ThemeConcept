
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Dashboard</title>
      <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
      <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
      <link rel="stylesheet" href="css/style.css"/>
      <link rel="shortcut icon" href="images/favicon.png"/>


      <script src="node_modules/jquery/dist/jquery.min.js"></script>
      <script src="node_modules/tether/dist/js/tether.min.js"></script>
      <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
      <script src="node_modules/chart.js/dist/Chart.min.js"></script>
      <script src="node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
      <script src="js/off-canvas.js"></script>
      <script src="js/hoverable-collapse.js"></script>
      <script src="js/misc.js"></script>
      <script src="js/chart.js"></script>
      <script src="js/maps.js"></script>
</head>
<style type="text/css">
</style>
<body>
<nav style="background:#313232;" class="navbar bg-primary-gradient col-lg-12 col-12 p-0 fixed-top navbar-inverse d-flex flex-row">
            <div  style="background:rgba(0,0,0,0.3);" class="bg-white text-center navbar-brand-wrapper">
                <a class="navbar-brand brand-logo" href="dashboard.php"><img height="45" src="images/logo1.png"/></a>
                <a class="navbar-brand brand-logo-mini" href="dashboard.php"><img height="45" src="images/logo1.png"/></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">
                <button class="navbar-toggler navbar-toggler hidden-md-down align-self-center mr-3" type="button" data-toggle="minimize">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <form class="form-inline mt-2 mt-md-0 hidden-md-down">
                    <input class="form-control mr-sm-2 search" type="text" id="myInput" placeholder="Search">
                </form>
                <ul class="navbar-nav ml-lg-auto d-flex align-items-center flex-row">
                    <li class="nav-item">
                        <a class="nav-link profile-pic" href="#"><img class="rounded-circle" src="images/user.png" alt=""></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-th"></i></a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right hidden-lg-up align-self-center" type="button" data-toggle="offcanvas">
                  <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <!--End navbar-->
        <div  class="container-fluid">
            <div class="row row-offcanvas row-offcanvas-right">
                <nav class="bg-secondary sidebar sidebar-fixed sidebar-offcanvas" id="sidebar">
                <div class="user-info">
                    <img src="images/user.png" alt="">
                    <p class="name">Rey Lumagui</p>
                    <p class="text text-center text-primary">Manager</p>
                    <span class="online"></span>
                </div>
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">
                                <!-- <i class="fa fa-dashboard"></i> -->
                                <img src="images/icons/1.png" alt="">
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                <!-- <i class="fa fa-address-book"></i> -->
                                <img src="images/icons/6.png" alt="">
                                <span class="menu-title">File Management<i class="fa fa-sort-down"></i></span>
                            </a>
                            <div class="collapse" id="collapseExample">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="products.php">
                                     Products
                                    </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="ordertrack.php">
                                      Order Track
                                    </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                      Sales
                                    </a>
                                    </li>
                                     <li class="nav-item">
                                        <a class="nav-link" href="users.php">
                                      Users
                                    </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                                <!-- <i class="fa fa-address-book"></i> -->
                                <img src="images/icons/8.png" alt="">
                                <span class="menu-title">Manage Front-end<i class="fa fa-sort-down"></i></span>
                            </a>
                            <div class="collapse" id="collapseExample1">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.php">
                                     About
                                    </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.php">
                                      Contact
                                    </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="slider.php">
                                      Slider
                                    </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <!-- <i class="fa fa-bold"></i> -->
                                <img src="images/icons/10.png" alt="">
                                <span class="menu-title">Settings</span>
                            </a>
                        </li>
                    </ul>
                </nav>
</body>
</html>
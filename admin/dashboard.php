<?php
    include('bypass.php');

    $userpercent=($usercount / 100000) * 100;
    $productpercent=($productcount / 100000) * 100;
    
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>ThemeConcepts | Admin</title>
      <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
      <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
      <link rel="stylesheet" href="css/style.css"/>
      <link rel="shortcut icon" href="images/fav.png"/>	
</head>
<body>
<div class="container-scroller">
<?php include "sidenav.php" ?>
  <div class="content-wrapper">
                    <h3 class="text-primary mb-4">Dashboard</h3>
                      <div class="row xl-6">
                        <div onclick="window.location='users.php';"  class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-4">
                            <div class="card">
                                <div class="card-block">
                                    <div class="clearfix">
                                        <i class="fa fa-user-o float-right icon-grey-big text-success"></i>
                                    </div>
                                    <h4 class="card-title font-weight-normal text-success"><?php echo $usercount ?></h4>
                                    <h6 class="card-subtitle mb-4">Users</h6>
                                    <div class="progress">
                                        <div class="progress-bar bg-success-gadient progress-slim" role="progressbar" style="width: <?php echo $userpercent.'%'; ?>" aria-valuenow="<?php echo $usercount ?>" aria-valuemin="0" aria-valuemax="100000"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-4">
                            <div class="card">
                                <div class="card-block">
                                    <div class="clearfix">
                                        <i class="fa fa-shopping-cart float-right icon-grey-big text-info"></i>
                                    </div>
                                    <h4 class="card-title font-weight-normal text-info">7895</h4>
                                    <h6 class="card-subtitle mb-4">Orders</h6>
                                    <div class="progress">
                                        <div class="progress-bar bg-info-gadient progress-slim" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div onclick="window.location='products.php';" class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mb-4">
                            <div class="card">
                                <div class="card-block">
                                    <div class="clearfix">
                                        <i class="fa fa-cube float-right icon-grey-big text-warning"></i>
                                    </div>
                                    <h4 class="card-title font-weight-normal text-warning"><?php echo $productcount?></h4>
                                    <h6 class="card-subtitle mb-4">Products</h6>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning-gadient progress-slim" role="progressbar" style="width: <?php echo $productpercent.'%'; ?>" aria-valuenow="<?php echo $productcount ?>" aria-valuemin="0" aria-valuemax="100000"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <div class="row">
                        <div class="col-lg-6  mb-4">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title mb-4">Sales</h5>
                                    <canvas id="areaChart" style="height:250px"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6  mb-4">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title mb-4">Customer Satisfaction</h5>
                                    <canvas id="doughnutChart" style="height:250px"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 mb-4">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title mb-4">Payments</h5>
                                    <table class="table">
                                        <thead class="text-primary">
                                            <tr>
                                                <th><i class="fa fa-user ml-2"></i></th>
                                                <th>User</th>
                                                <th>Item</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th><img src="images/user.png" alt="profile" class="rounded-circle" width="40"
                                                        height="40" /></th>
                                                <td>Larry</td>
                                                <td>Acer</td>
                                                <td><span class="badge badge-success">Success</span></td>
                                            </tr>
                                            <tr>
                                                <th><img src="images/user.png" alt="profile" class="rounded-circle" width="40"
                                                        height="40" /></th>
                                                <td>Larry</td>
                                                <td>Acer</td>
                                                <td><span class="badge badge-danger">Failed</span></td>
                                            </tr>
                                            <tr>
                                                <th><img src="images/user.png" alt="profile" class="rounded-circle" width="40"
                                                        height="40" /></th>
                                                <td>Larry</td>
                                                <td>Acer</td>
                                                <td><span class="badge badge-primary">Processing</span></td>
                                            </tr>
                                            <tr>
                                                <th><img src="images/user.png" alt="profile" class="rounded-circle" width="40"
                                                        height="40" /></th>
                                                <td>Larry</td>
                                                <td>Acer</td>
                                                <td><span class="badge badge-success">Success</span></td>
                                            </tr>
                                            <tr>
                                                <th><img src="images/user.png" alt="profile" class="rounded-circle" width="40"
                                                        height="40" /></th>
                                                <td>Larry</td>
                                                <td>Acer</td>
                                                <td><span class="badge badge-danger">Failed</span></td>
                                            </tr>
                                             <tr>
                                                <th><img src="images/user.png" alt="profile" class="rounded-circle" width="40"
                                                        height="40" /></th>
                                                <td>Larry</td>
                                                <td>Acer</td>
                                                <td><span class="badge badge-danger">Failed</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 mb-4">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title"></h5>
                                    <div style="min-height:415px;">
                                    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.8331722507537!2d121.02310586483968!3d14.55153088983368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c91b3ef40b79%3A0x23de027bdc503800!2sGlorietta!5e0!3m2!1sen!2sph!4v1509335923549" width="100%" height="415" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="container-fluid clearfix">
                      <span class="float-right">
                          <a href="#">Theme Concepts</a> &copy; 2017
                      </span>
                    </div>
                </footer>
            </div>
        </div>
        
</div>
</body>
</html>
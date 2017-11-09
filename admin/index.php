<?php
session_start();
  if(!empty($_SESSION['session_tcadmin'])){
    echo "<script>window.location.replace('dashboard.php')</script>";
  }
  include("connection/conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Theme Concept</title>
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="shortcut icon" href="images/fav.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid">
      <div class="row">
        <div style="background-image:url('images/flat.jpg');background-size:100% 100%;background-position:fixed;background-repeat:no-repeat;" class="content-wrapper full-page-wrapper d-flex align-items-center">
          <div style="background-color:rgba(255,255,255,0.7);" class="card col-lg-4 offset-lg-4">
            <div class="card-block">
              <img class="rounded-circle" src="images/logo (3).png" width="93%" height="30%" />
              <form action="" method="POST">
                <div class="form-group">
                  <div class="input-group">
                    <span style="background-color:rgb(53,53,53);color:ghostwhite;" class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input style="background:none;border-color:rgb(53,53,53);" type="text" class="form-control p_input" placeholder="Username" name="uname">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <span style="background-color:rgb(53,53,53);color:ghostwhite;" class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input style="background:none;border-color:rgb(53,53,53);" type="password" class="form-control p_input" placeholder="Password" name= "upass">
                  </div>
                </div>
                <div class="text-center">
                  <button name = "loginbtn" style="background:rgb(53,53,53);color:ghostwhite;" type="submit" class="btn btn-secondary">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="../node_modules/jquery/dist/jquery.min.js"></script>
  <script src="../node_modules/tether/dist/js/tether.min.js"></script>
  <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="../node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <script src="../js/misc.js"></script>
</body>

</html>
<?php

  //login.php
  if(isset($_POST['loginbtn']))
  {
    $username='admin';
    $password='admin';
    $name = test_input($_POST['uname']);
    $pass = test_input($_POST['upass']);
    if($name===$username && $pass===$password)
    {
      if (isset($_POST['remembermecheckbox'])) 
      {
              setcookie('username', $_POST['uname'], time()+60*60*24*365);
              setcookie('password', $_POST['upass'], time()+60*60*24*365);
          } 
          else 
          {
              setcookie("username", "", time()-3600);
              setcookie("password", "", time()-3600);
          }
      $_SESSION['session_tcadmin']='Admin';
      echo "<script>window.location.replace('dashboard.php')</script>";
    }
    else
    {
      echo "<script>alert('Username or Password is incorrect')</script>";
    }
  }
  function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
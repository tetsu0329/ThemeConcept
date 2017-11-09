
<?php
session_start();
  if (isset($sessionuser)) {
    	

    	$displayaccount="block";
    }
    else{

    	$displayaccount="none";
    }
	if(isset($_POST['loginbtn'])){
		$usernamee = $_POST['uname'];
		$passwordd = $_POST['upass'];
		$conn = mysqli_connect("localhost", "root", "", "tc_db");
		$sqluserr = mysqli_query($conn,"SELECT * FROM usertable WHERE userEmail='$usernamee' AND userPassword = '$passwordd'");

		$numrows = mysqli_num_rows($sqluserr);

        if($numrows==1){
            while($sqlrowcounthold = mysqli_fetch_array($sqluserr)){
            	$_SESSION['Customer']= $sqlrowcounthold['userFname']." ".$sqlrowcounthold['userLname'];
            	$_SESSION['CustomerID']= $sqlrowcounthold['userID'];
                $_SESSION['CustomerEmail']= $sqlrowcounthold['userEmail'];
            	echo "<script>alert('Welcome to Theme Concept')
            	window.location='".$page."';

            	</script>";
           	}
        }
        else{
            echo "<script>alert('Failed')</script>";
        }
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Theme Concept</title>
</head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta charset="utf-8">

<style type="text/css">
	body{
		font-family: "Century Gothic";
		margin: 0;
    	overflow-x: hidden;

	}
	.sidenav {
	    height: 100%;
	    width: 200px;
	    position: fixed;
	    z-index: 1;
	    top: 0;
	    left: 0;
	    background-color:#a4a4a4;
	    overflow-x: hidden;
	    transition: 0.5s;
	    padding-top: 40px;
	    z-index: 1;
	    text-decoration: none;
	    

	}

	.sidenav a {
	    padding: 8px 8px 8px 32px;
	    text-decoration: none;
	    font-size: 12px;
	    color:black;
	    display: block;
	    font-weight: normal;
	    transition: 0.3s;
	    text-decoration: none;
	}
	
	#collapse, .sidenav a:hover {
	    background-color: #313232;
	    color: #f1f1f1;
	    text-decoration: none;
	}
	
	.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
	}

	#main {
	    transition: margin-left .5s;
	    padding: 16px;
	    margin-left: 180px;
	}
	#josh{
	  	position:fixed;
	  	top: 150px;
	  	left: 205px;
	  	background: rgba(41,41,41,0.7);
	  	width: 30%;
	  	border-radius: 5px;
	  	padding: 15px;
	  	border:none;
	  	z-index:1;
	  }
	#a{
		background: none;
		border-top: none;
		border-left: none;
		border-right: none;
		border-bottom:2px solid white;
		width: 90%;
		padding: 10px;
		font-size: 15px;
		color: white;
		outline: none;

	} 
	#login{
		background: #313232;
		padding: 10px 25px 10px 25px;
		color: white;
		font-size: 10px;
		float: right;
		border: none;
		border-radius: 0;
	}
	#collapse{
		border: none;
		border-radius: 0;
		background-color: #a4a4a4;
		color: black;
		font-size: 15px;
	}
	#logo{
		margin-left: 20px;
		padding-bottom: 10px;
	}
	#cart{
		margin-left: 50px;
	}
	#shopbtn{
		position:absolute; 
		z-index:1; 
		top:70%; 
		left:70%;
		background: #313232;
		padding: 10px 25px 10px 25px;
		color: white;
		font-size: 20px;
		border: none;
		border-radius: 0;
	}
	.carousel-indicators {
		top: 65%;
		left: 71%;

	}

 	#create{
		color: white;
 		text-align: center;
 	}

 	.containerbtn {
	  position: relative;
	  margin: auto;
	  width: 22%;
	  display: inline-block;
	  margin-left: 100px;

	}

	.image {
	  display: block;
	  width: 250px;
	  height: 250px;
	  border-radius: 100%;
	}

	.overlay {
	  position: absolute;
	  top: 0;
	  bottom: 0;
	  left:0;
	  right: 0;
	  height: 250px;
	  width: 250px;
	  opacity: 1;
	  border-radius: 100%;
	  transition: .5s ease;
	  background-color: rgba(49,50,50,0.5);
	}

	.containerbtn:hover .overlay {
	  opacity: 0;
	}

	.text {
	  color: white;
	  font-size: 30px;
	  position: absolute;
	  top: 50%;
	  left: 50%;
	  transform: translate(-50%, -50%);
	  -ms-transform: translate(-50%, -50%);
	  text-align: center;
	}
	#shoptitle{
		font-size: 70px;
		margin-left: 71%;
		margin-bottom: -10%;
	}
	#seemorebtn{
		position: absolute;
		left: 125px;
		top: 750px;
		z-index:1; 
		margin-left: 71%;
		background: #ee3245;
		padding: 10px 10px 10px 10px;
		color: white;
		font-size: 13px;
		border: none;
		border-radius: 0;
	}
	 .container{
	 	margin-left: 0%;

	 }
	 #collapse{
	 		 	font-size: 12px;
	 }
	@media screen and (max-height: 450px) {
	  .sidenav {padding-top: 15px;}
	  .sidenav a {font-size: 18px;}
	}

	#main {
    transition: .5s;
    padding:0;
    margin-left:200px;
}
#opennav{
    display:none;
  }
 #closenav{
  display: none;
}   
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
 @media screen and (max-width:1200px){

  #opennav{
    display: block;
  }
  #main{
    width: 100%;
    margin-left:0;
    z-index: 0;
    overflow-x:hidden; 
  }
  body{
    margin: 0;
    padding:0;
    width: 100%;
    overflow-x:hidden;
  }
  .sidenav{
    width: 0;
  }
  #head{
  	margin: 0;
  }
  #product img{
  	width:100px;
  	height:120px;
  }
  #product {
  	font-size:11px;
  	margin:0;
  	padding:11px;
  }
  .content{
  	margin: 50% 0 0 0;
  	padding: 0;
  	width: 100%;
  }
  .containerbtn{
  	margin:5% 15% 5% 15%; 
  }
  #shoptitle{
  	font-size: 50px;
  	margin-left: 0;
  }
  #seemorebtn{
  	margin-left: 0;
  }
  #shopbtn{
  	top: 0;
  	left: 66%;
  	font-size: 15px;
  }
}
</style>
<body>
	<div id="main">
			<span style="font-size:25px;cursor:pointer;position:absolute;z-index:1;color:white;padding:5px 10px 5px 10px;border-radius:3px;margin:10px;" id="opennav" onclick="openNav()">&#9776;</span>
<span style="font-size:25px;cursor:pointer;position:absolute;z-index:1;color:white;padding:5px 10px 5px 10px;border-radius:3px;margin:10px;" id="closenav" onclick="closeNav()">&#9776;</span>  
		<!-- Carousel -->
		<div class="container"  style="padding:0;">
		<button id="shopbtn">SHOP&nbsp;NOW!</button>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
	    <div class="carousel-inner">
	      <div class="item active">
	        <img src="header/bbb.png" alt="Los Angeles" style="width:100%;">
	      </div>

	      <div class="item">
	        <img src="header/bbb.png" alt="Chicago" style="width:100%;">
	      </div>
	   
	  </div>
	</div>
</div>

	<div id="shop2"><p id="shoptitle"> [SHOP] </p></div>
	 <br>
	 <button id="seemorebtn">SEE&nbsp;MORE!</button>
	 <br>
	  <!-- SHOPS -->
		<div class="containerbtn">
			<div id='blouse'>
			  <img src="shop/skirt.jpg" alt="Avatar" class="image" class="img-rounded">
			  	<div class="overlay">
			  		<div class="text">BLOUSE</div>
				</div>
			</div>
		</div>

		<div class="containerbtn">
			<div id='blouse'>
			  <img src="shop/dress.jpg" alt="Avatar" class="image" class="img-rounded">
			  	<div class="overlay">
			  		<div class="text">DRESS</div>
				</div>
			</div>
		</div>
<br>
		<div class="containerbtn">
			<div id='blouse'>
			  <img src="shop/pants.jpg" alt="Avatar" class="image" class="img-rounded">
			  	<div class="overlay">
			  		<div class="text">BLAZERS & COATS</div>
				</div>
			</div>
		</div>	
		<div class="containerbtn">
			<div id='blouse'>
			  <img src="shop/blouse.jpg" alt="Avatar" class="image" class="img-rounded">
			  	<div class="overlay">
			  		<div class="text">BOTTOMS</div>
				</div>
			</div>
		</div>


	<div id="mySidenav" class="sidenav">
	<img src="themeconcept.png" class="img-circle" width="150" height="150" id="logo">
	  	<button type="button" id="collapse" class="btn btn-info" data-toggle="collapse" data-target="#account" onclick="window.location='account.php'" style="display:<?php echo $displayaccount; ?>;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account</span></button>
		  
		 <div id="account" class="collapse"> 
			  <a href="ordertrack.php">Orders + Tracking</a>
		</div>

	   <a href="signup.php" id="target">Sign Up</a>
	   <a data-toggle="dropdown">Login &nbsp<span class="glyphicon glyphicon-menu-right"></span></a>
		   	<ul class="dropdown-menu dropdown-menu-right" id="josh">
			    <center>
			      <li><input type="text" placeholder="Username" id="a"></li>
			      <li><input type="password" placeholder="Password" id="a"></li>
			    </center><br>
		        <button id="login" type="button" >Log-in</button><br><br>
		        <p id="create"> No account yet? SIGN UP now! </a>

	    	</ul>
	    <div class="container">
		  <button type="button" id="collapse" class="btn btn-info" data-toggle="collapse" data-target="#demo" >&nbsp;Collections &nbsp;<span class="glyphicon glyphicon-plus"></span></button>
		  
		  <div id="demo" class="collapse"> 
			  <button type="button" id="collapse" class="btn btn-info" data-toggle="collapse" data-target="#timeless" >&nbsp;&nbsp;Timeless<span class="glyphicon glyphicon-menu-down"></span></button>
			  <br>
			  	
			  	<div id="timeless" class="collapse"> 

				  	<button type="button" id="collapse" class="btn btn-info" data-toggle="collapse" data-target="#timeless1" >&nbsp;&nbsp; &nbsp;Tops &nbsp;<span class="glyphicon glyphicon-menu-down"></span></button>
				  	<div id="timeless1" class="collapse">
				    	<a href="coats.php">Coats & Blazers</a>
				    	<a href="blouse.php">Blouses</a>
				    	<a href="dress.php">Dresses</a>
				    </div>	

				    <br>
				    <button type="button" id="collapse" class="btn btn-info" data-toggle="collapse" data-target="#timeless2" >&nbsp;&nbsp; &nbsp;Bottoms &nbsp;<span class="glyphicon glyphicon-menu-down"></span></button>
				  	<div id="timeless2" class="collapse">
				    	<a href="blouse.php">Pants</a>
				    	<a href="dress.php">Skirts</a>
				    </div>	
			  	</div>

			  <button type="button" id="collapse" class="btn btn-info" data-toggle="collapse" data-target="#idress" >&nbsp;&nbsp;Investment Dressing<span class="glyphicon glyphicon-menu-down"></span></button>
			  <br>
			  	
			  	<div id="idress" class="collapse"> 

				  	<button type="button" id="collapse" class="btn btn-info" data-toggle="collapse" data-target="#idress1" >&nbsp;&nbsp; &nbsp;Tops &nbsp;<span class="glyphicon glyphicon-menu-down"></span></button>
				  	<div id="idress1" class="collapse">
				    	<a href="coats.php">Coats & Blazers</a>
				    	<a href="blouse.php">Blouses</a>
				    	<a href="dress.php">Dresses</a>
				    </div>	

				    <br>
				    <button type="button" id="collapse" class="btn btn-info" data-toggle="collapse" data-target="#idress2" >&nbsp;&nbsp; &nbsp;Bottoms &nbsp;<span class="glyphicon glyphicon-menu-down"></span></button>
				  	<div id="idress2" class="collapse">
				    	<a href="blouse.php">Pants</a>
				    	<a href="dress.php">Skirts</a>
				    </div>	
			  	</div>

			  <button type="button" id="collapse" class="btn btn-info" data-toggle="collapse" data-target="#weekender" >&nbsp;&nbsp;Weekender<span class="glyphicon glyphicon-menu-down"></span></button>
			  <br>
			  	
			  	<div id="weekender" class="collapse"> 

				  	<button type="button" id="collapse" class="btn btn-info" data-toggle="collapse" data-target="#weekndr1" >&nbsp;&nbsp; &nbsp;Tops &nbsp;<span class="glyphicon glyphicon-menu-down"></span></button>
				  	<div id="weekndr1" class="collapse">
				    	<a href="coats.php">Coats & Blazers</a>
				    	<a href="blouse.php">Blouses</a>
				    	<a href="dress.php">Dresses</a>
				    </div>	

				    <br>
				    <button type="button" id="collapse" class="btn btn-info" data-toggle="collapse" data-target="#weekndr2" >&nbsp;&nbsp; &nbsp;Bottoms &nbsp;<span class="glyphicon glyphicon-menu-down"></span></button>
				  	<div id="weekndr2" class="collapse">
				    	<a href="blouse.php">Pants</a>
				    	<a href="dress.php">Skirts</a>
				    </div>		
			  	</div>


		  </div>
		</div>

		<a href="about.php">About</a>	
		<a href="contactus.php">Contact Us</a>



		<a href="cart.php" id="round">
			<img border="0" alt="W3Schools" src="img/icons/cart.png" width="30" height="30" id="cart">
		</a>
		
		
	</div>

	<script>
	function openNav() {
	    document.getElementById("mySidenav").style.width = "200px";
	    document.getElementById("main").style.marginLeft = "200px";
	    document.getElementById("opennav").style.display = "none";
	    document.getElementById("closenav").style.display = "block";
	    
	}

	function closeNav() {
	    document.getElementById("mySidenav").style.width = "0";
	     document.getElementById("main").style.marginLeft = "0";
	    document.getElementById("opennav").style.display = "block";
	    document.getElementById("closenav").style.display = "none";
	}
	</script>
	</script>
	
	<div class="container"  style="padding:0;">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
	    <div class="carousel-inner">
	      <div class="item active">
	        <img src="header/ccc.png" alt="Los Angeles" style="width:100%;">
	      </div>

	      <div class="item">
	        <img src="header/ccc.png" alt="Chicago" style="width:100%;">
	      </div>
	   
	  </div>
	</div>
</div>


</body>

</html>
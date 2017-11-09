<?php
	session_start();
	$conn = mysqli_connect("localhost", "root", "", "tc_db");
	$displayaccount="";
	$page="";
	if(empty($_SESSION['Customer'])){
		//
	}
	else{
		$sessionuser = $_SESSION['CustomerID'];
		$sqluserr = mysqli_query($conn,"SELECT * FROM usertable WHERE userID = '$sessionuser'");
		$userrow = mysqli_fetch_assoc($sqluserr);

	}

    if (isset($sessionuser)) {
    	

    	$displayaccount="block";
    }
    else{

    	$displayaccount="none";
    }
		
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	    padding:0;
	    margin: 0;
	    width: 100%;

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
		font-size: 12px;
	}
	#logo{
		margin-left: 20px;
		padding-bottom: 10px;
	}
	#cart{
		margin-left: 50px;
	}

	@media screen and (max-height: 450px) {
	  .sidenav {padding-top: 15px;}
	  .sidenav a {font-size: 18px;}
	}

	
</style>
<body>
	<div id="mySidenav" class="sidenav">
	<img src="themeconcept.png" class="img-circle" width="150" height="150" id="logo">
	  	<button type="button" id="collapse" class="btn btn-info" onclick="window.location='account.php'" style="display:<?php echo $displayaccount; ?>;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account</span></button>
		  
		 <div id="account" class="collapse"> 
			  <a href="ordertrack.php">Orders + Tracking</a>
		</div>
	   <a href="signup.php" id="target">Sign Up</a>
	   <form method="POST">
	   <a data-toggle="dropdown">Login &nbsp<span class="glyphicon glyphicon-menu-right"></span></a>
		   	<ul class="dropdown-menu dropdown-menu-right" id="josh">	
			    <center>
			      <li><input type="text" placeholder="Email" id="a" name="uname"></li>
			      <li><input type="password" placeholder="Password" id="a" name = "upass"></li>
			    </center><br>
		        <button id="login" name = "loginbtn" >Log-in</button><br><br>
		        <p id="create"> No account yet? SIGN UP now! </a></p>
		        
	    	</ul>
	    </form>
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
</body>
</html>
<?php
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
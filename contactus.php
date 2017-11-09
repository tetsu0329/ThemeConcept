<?php 
	include('includes/navigation.php'); 
  include('header.php'); 
  //include('footer.php');
  include('admin/connection/conn.php'); 
  $page="contactus.php";
	$sqlselectcontact = mysqli_query($conn,"SELECT * FROM contacttable WHERE id='1'");
    $contactrow=mysqli_fetch_assoc($sqlselectcontact);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
</head>
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
<style type="text/css">
	body {
		font-family: "Century Gothic";
		margin: 0;
    	overflow-x: hidden;
	}
	#title1{
		font-size:20;
		position: absolute;
		left: 550px;
		top: 220px;
		text-align: center;
	}
	.email{
		position: absolute;
		left: 550px;
		top: 300px;
		text-decoration: none;
		font-size: 
	}
	.call{
		position: absolute;
		left: 850px;
		top: 300px;
		text-decoration: none;
	}
	.locate{
		position: absolute;
		left: 700px;
		top: 350px;
		text-decoration: none;
	}
	iframe{
		position: absolute;
		top: 390px;
	}
	#header{
		margin-left: 0;
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
    margin:0;
    padding: 0;
    overflow-x:hidden; 
  }
  body{
    margin: 0;
    padding:0;
    width: 100%;
    overflow-x: hidden;
  }
  .sidenav{
    width: 0;
  }
  .container{
  	padding: 0;
  	margin: 0;
  	width: 100%;
  }
  .carousel-indicators {
  	padding: 0;
  	margin: 0;
  	left:20%;
  	top:65%;
  }
  .email{
  	width:90%;
  	margin: 0 0 30% 0;
  	padding: 0;
  	top:15%;
  	left:5%;
  	z-index: 0;
  	text-align: justify;

  }
   .call{
  	width:90%;
  	margin: 0 0 30% 0;
  	padding: 0;
  	top:25%;
  	left:5%;
  	z-index: 0;
  	text-align: justify;

  }
  .locate{
  	width:90%;
  	margin: 0 0 30% 0;
  	padding: 0;
  	top:50%;
  	left:5%;
  	z-index: 0;
  	text-align: justify;

  }
  iframe{
  	top:60%;
  	height:60%;
  	margin-bottom:30%;
  }
  #title1{
  	width:90%;
  	margin: 0 0 30% 0;
  	padding: 0;
  	top:35%;
  	left:5%;
  	z-index: 0;
  	text-align: justify;

  }
  #footer{
  	width:100%;
  	margin: 0;
  	padding: 0;
  	left: 0;
  	z-index: 1;
  }
  #head{
  	width: 100%;
  	height: 15%;
  	margin: 0;
  	padding: 0;
  }
}
</style>
<body>
<div id="main">
<span style="font-size:25px;cursor:pointer;position:absolute;z-index:1;color:white;padding:5px 10px 5px 10px;border-radius:3px;margin:10px;" id="opennav" onclick="openNav()">&#9776;</span>
<span style="font-size:25px;cursor:pointer;position:absolute;z-index:1;color:white;padding:5px 10px 5px 10px;border-radius:3px;margin:10px;" id="closenav" onclick="closeNav()">&#9776;</span>  
	<img class="img-responsive" src="img/nav/contact.png" alt="Chania" id="head">

	<p id="title1">We would very much like to hear it from you again. <br>
	If you have any feedback or concerns please email or call us at:</p>
	
	<div class="email">
		   <p>
		   	<img src="img/icons/email.png" alt="Smiley face" height="30" width="30" id="email"> <?php echo $contactrow['email'] ?>
		   </p>
	</div>

	<div class="call">
		   <p>
		   	<img src="img/icons/call.png" alt="Smiley face" height="30" width="30" id="email"> <?php echo $contactrow['contactno'] ?>
		   </p>
	</div>

	<div class="locate">
		   <p>
		   	<img src="img/icons/location.png" alt="Smiley face" height="30" width="30" id="email"> Where to find us.
		   </p>
	</div>

	<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3861.8331722507537!2d121.02310586483968!3d14.55153088983368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s17+G%2FF+GLORIETTA+3%2C+AYALA+CENTER%2C+MAKATI+CITY!5e0!3m2!1sen!2sph!4v1509333896021" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
<br>
</div>    
</body>
</html>
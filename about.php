<?php
	include('includes/navigation.php'); 
	//include('header.php'); 
	//include('footer.php');
  include('admin/connection/conn.php'); 
  $page="about.php";
	$sqlselectabout = mysqli_query($conn,"SELECT * FROM abouttable WHERE id='1'");
    $aboutrow=mysqli_fetch_assoc($sqlselectabout);
?>
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

<!DOCTYPE html>
<html>
<head>
	<title>About</title>
</head>
<style type="text/css">
	body{
		font-family: "Century Gothic";
		margin: 0;
    	overflow-x: hidden;
	}
	#aboutus{
		position: absolute;
		left: 300px;
		top: 200px;
		
		
	}
	.ll{
		background-color: pink;
		color: black;
		font-size: 20px;
		display:none;
		
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
  #aboutus{
  	width:90%;
  	margin: 0 0 30% 0;
  	padding: 0;
  	top: 15%;
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
	<img class="img-responsive" src="img/nav/about.png" alt="Chania" id="head">
		<div class="panel panel-default">
		  <div class="panel-body" id="aboutus">
		  <blockquote>
		  <button class="ll">open</button>
		  		 <?php echo $aboutrow['content'] ?>
		  </blockquote>
	
		  </div>
		</div>
</div>
</body>
</html>

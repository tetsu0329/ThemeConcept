<?php
	include ('includes/navigation.php');
	include ('includes/header.php');
	include ('admin/connection/conn.php');
	$page="viewproduct.php";

	$sqlproduct = mysqli_query($conn,"SELECT * FROM producttable WHERE productID='$_GET[Productid]'");
	$productrow = mysqli_fetch_assoc($sqlproduct);

	$prodID = $_GET['Productid'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>View Products</title>
</head>
<style type="text/css">
body{

	padding-bottom: 5%;
}
	.logo{
		margin-left: 20%;
	}

	#view{
		margin-top:12%;
		margin-left:5%;
		
	}

	#itemname{
		font-size: 30px;
		margin-left:40%;
		margin-top: -540px;
	}
	#itemprice{
		font-size: 30px;
		margin-left:40%;
		margin-top: 5px;
	}
	#small{
		z-index:1; 
		margin-left:40%;
		background: #ee3245;
		padding: 10px 10px 10px 10px;
		color: white;
		font-size: 13px;
		border: none;
		border-radius: 0;
		display: inline-block;
	}
	#med{
		z-index:1; 
		margin-left: 0%;
		background: #ee3245;
		padding: 10px 10px 10px 10px;
		color: white;
		font-size: 13px;
		border: none;
		border-radius: 0;
	}
	#large{
		z-index:1; 
		margin-left: 0%;
		background: #ee3245;
		padding: 10px 10px 10px 10px;
		color: white;
		font-size: 13px;
		border: none;
		border-radius: 0;
	}
	#xlarge{
		z-index:1; 
		margin-left: 0%;
		background: #ee3245;
		padding: 10px 10px 10px 10px;
		color: white;
		font-size: 13px;
		border: none;
		border-radius: 0;
	}
	#addcart{
		z-index:1; 
		margin-left: 0%;
		background: #ee3245;
		padding: 10px 10px 10px 10px;
		color: white;
		font-size: 13px;
		border: none;
		border-radius: 0;
	}
	#itemdetails{
		font-size: 15px;
		margin-left: 40%;
		margin-top: 20px;
	}
	#matitle{
		font-size: 15px;
		margin-left: 40%;
		margin-top: 60px;
	}
	#matimg{
		margin-left: 40%;
		margin-top: 0px;
	}
	#thumbnail1{
		margin-left: 50%;
		margin-top: 60px;
		display: inline-block;
		margin-bottom: 5%;
	}
	#thumbnail2{
		margin-top: 85px;
		margin-bottom: 5%;
		margin-left:1%;

	}
	#thumbnail3{
		margin-top: 85px;
		margin-bottom: 5%;
		margin-left:1%;
	}
	#thumbnail4{
		margin-top: 85px;
		margin-bottom: 5%;
		margin-left: 40%;
	}
	figure.zoom {
	  background-position: 50% 50%;
	  position: relative;
	  width: 400px;
	  overflow: hidden;
	  cursor: zoom-in;
	}
	figure.zoom img:hover {
	  opacity: 0;
	}
	figure.zoom img {
	  transition: opacity .5s;
	  display: block;
	  width: 100%;
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
  #view{
  	margin-left:2%;
  	width:60%;
  	height:415px;
  	margin-top:30%;
  }
  .logo{
  	margin-left:10%;
  }
  #thumbnail4{
  	position: absolute;
  	top: 30%;
  	left:30%;
  }
  #thumbnail3{
  	position: absolute;
  	top: 43%;
  	left:69%;
  }
  #thumbnail2{
  	position: absolute;
  	top: 56%;
  	left:69%;
  }
  #itemname{
  	margin-top: 10%;
  	margin-left: 10%;
  }
   #itemprice{
  	margin-top:5%;
  	margin-left: 10%;
  }
  #small{
  	margin-left: 15%;
  }
  #addcart{
  	margin-top: 5%;
  	margin-left: 35%;
  }
  #matitle{
  	position: absolute;
  	top: 14%;
  	left:30%; 
  }
  #matimg{
  	position: absolute;
  	top: 27%;
  	left:27%;
  }
}
</style>

<script >
function zoom(e){
  var zoomer = e.currentTarget;
  e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
  e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
  x = offsetX/zoomer.offsetWidth*100
  y = offsetY/zoomer.offsetHeight*100
  zoomer.style.backgroundPosition = x + '% ' + y + '%';
}
function change(a){
  document.getElementById('imgId').src=a;
  document.getElementById('view').style.background='url("'+a+'")';
}
</script>
<body>
<div id="main">
<span style="font-size:25px;cursor:pointer;position:absolute;z-index:1;color:gray;padding:5px 10px 5px 10px;border-radius:3px;margin:10px;" id="opennav" onclick="openNav()">&#9776;</span>
<span style="font-size:25px;cursor:pointer;position:absolute;z-index:1;color:gray;padding:5px 10px 5px 10px;border-radius:3px;margin:10px;" id="closenav" onclick="closeNav()">&#9776;</span>  
	<div class="logo">
		<img src="themeconceptblack.png" id="head" width="300" height="200">
	</div><br><br>
	<?php $bp= 'admin/'.$productrow['backpic'];
		  $sp= 'admin/'.$productrow['sidepic'];
		  $fp= 'admin/'.$productrow['frontpic']; ?>
	<figure id="view" class="zoom"  alt="Cinque Terre" onmousemove="zoom(event)" style="background-image: url('<?php echo $fp; ?>')">
  <img src="<?php echo 'admin/'.$productrow['frontpic'] ?>" id="imgId" height="540" />
</figure>
		
		<p id="itemname"><?php echo $productrow['productName'] ?></p>
		<p id="itemprice">P <?php echo $productrow['productPrice'] ?>.00</p>

		 <button id="small">SMALL</button>
		 <button id="med">MEDIUM</button>
		 <button id="large">LARGE</button>
		 <button id="xlarge">EXTRA LARGE</button>
		 <a href = "cart.php?ProductID=<?php echo $prodID?>"><button id="addcart">ADD TO CART</button></a>
		
		<p id="itemdetails"> 
		<?php echo $productrow['productDescription'] ?>
		</p>

		<p id="matitle"> MATERIALS </p>
		<img src="materialsample.jpg" class="img-circle" alt="Cinque Terre" width="100" height="100" id="matimg">
		<br>
		<img src="<?php echo 'admin/'.$productrow['frontpic_thumb'] ?>" onclick="change('<?php echo $fp ?>')" alt="Fjords" width="80" height="80" id="thumbnail4">
		<img src="<?php echo 'admin/'.$productrow['backpic_thumb'] ?>" onclick="change('<?php echo $bp ?>')" alt="Fjords" width="80" height="80" id="thumbnail2">
		<img src="<?php echo 'admin/'.$productrow['sidepic_thumb'] ?>" onclick="change('<?php echo $sp ?>')" alt="Fjords" width="80" height="80" id="thumbnail3">
</div>
</body>
</html>
<?php 
	include('includes/navigation.php'); 
	include('includes/header.php'); 
	include('admin/connection/conn.php');
  $page="coats.php";
	$sqlproductcount2 = mysqli_query($conn,"SELECT * FROM producttable WHERE productCategory = 'Coats'");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Coats</title>
</head>
<style type="text/css">
	#head{
		margin-left: 120px;
	}
	p{
		text-align: center;

	}
	#product{
		margin: 5px auto;
		display: inline-block;
	}
	#product img{

		width: 250px;
		height: 300px;
	}
	.content{
		margin-top: 48%;
		margin-left: 15%;
	}
	.sidenav {
    height: 100%;
	width:200px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color:#a4a4a4;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    font-family: "Century Gothic";
}
#main {
    transition: .5s;
    padding:0;
    margin-left:0;
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
  }
  body{
    margin: 0;
    padding:0;
    width: 100%;
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
}
</style>
<body>
<div id="main">
<span style="font-size:25px;cursor:pointer;position:absolute;z-index:1;color:white;padding:5px 10px 5px 10px;border-radius:3px;margin:10px;" id="opennav" onclick="openNav()">&#9776;</span>
<span style="font-size:25px;cursor:pointer;position:absolute;z-index:1;color:white;padding:5px 10px 5px 10px;border-radius:3px;margin:10px;" id="closenav" onclick="closeNav()">&#9776;</span>  
	<img src="img/colhead/coat.jpg" class="img-responsive"  alt="Smiley face" id="head" width="100%">
	<br>
<div class="content">
	<?php
		while($rows=mysqli_fetch_array($sqlproductcount2)){
	?>
	<div class="col-md-3" id="product">
		<div class="thumbnail">
				<img id="prod" onclick="window.location='viewproduct.php?Productid=<?php echo $rows['productID'] ?>'" class="img-responsive img-thumbnail" src="<?php echo 'admin/'.$rows['frontpic'] ?>" alt="Chania" > 
				<div class="caption">
					<p><?php echo $rows['productName'] ?></p>
         			<p>P <?php echo $rows['productPrice'] ?> .00</p>
        		</div>
        	</div>
      </div>
	<?php
	}
	?>
	</div>
</div>	
</body>
</html>

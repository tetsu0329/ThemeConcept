<?php 
	include('includes/navigation.php'); 
	include('includes/header.php');
  $page="cart.php";
  $conn = mysqli_connect("localhost", "root", "", "tc_db");
  if(isset($_GET['ProductID']))
  {
    $prodID= $_GET['ProductID'];
    if(!empty($_SESSION['product']))
    {
      $query = mysqli_query($conn,"SELECT * FROM producttable where productID='$prodID'");
      while ($queryhold= mysqli_fetch_array($query)){
        
        $product[1] = $queryhold['productID'];
        $product[2] = $queryhold['productName'];
        $product[3] = $queryhold['productPrice'];
        $product[4] = $queryhold['productQuantity'];
      }
      array_push($_SESSION['product'], $product);
      }
    if(empty($_SESSION['product']))
    {
      $query = mysqli_query($conn,"SELECT * FROM producttable where productID='$prodID'");
      while ($queryhold= mysqli_fetch_array($query))
      {
        
        $product[1] = $queryhold['productID'];
        $product[2] = $queryhold['productName'];
        $product[3] = $queryhold['productPrice'];
        $product[4] = $queryhold['productQuantity'];
      }
      $_SESSION['product']=array($product);
    }
  } 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
</head>
<style type="text/css">
	body{
		font-family: "Century Gothic";
		margin: 0;
    	
	}

	table {
    border-collapse: collapse;
    width:100%;
    margin-top:2%;

}

th, td {
    text-align: left;
    padding: 8px;
    text-align: center;
}

tr:nth-child(even){background-color: white;}

th {
    background-color: #313232;
    color: white;
}
body {
    font-family: "Century Gothic";
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
    margin-left:200px;
}
#opennav{
    display: none;
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
    margin-left: 0;
  }
  body{
    margin: 0;
    padding:0;
    width: 100%;
  }
  .sidenav{
    width: 0;
  }
}
</style>
<body>
<div id="main">
<span style="font-size:25px;cursor:pointer;position:absolute;z-index:1;color:white;padding:5px 10px 5px 10px;border-radius:3px;margin:10px;" id="opennav" onclick="openNav()">&#9776;</span>
<span style="font-size:25px;cursor:pointer;position:absolute;z-index:1;color:white;padding:5px 10px 5px 10px;border-radius:3px;margin:10px;" id="closenav" onclick="closeNav()">&#9776;</span>  
  <img style="z-index:0;" class="img-responsive" src="img/nav/cart.png" alt="Chania" width="100%">
	<br>
	<center><h2>ORDER&nbspSUMMARY</h2></center>
	<table>
  <tr>
    <th>Product</th>
    <th>Quantity</th>
    <th>Price</th>
  </tr>
  <?php
  if(!empty($_SESSION['product'])){
  $rowcount= count($_SESSION['product']);
  for($row=0; $row<$rowcount; $row++)
                        { 
  ?>
  <tr>
    <td><?php echo($_SESSION['product'][$row][2]) ?></td>
    <td>1</td>
    <td><?php echo "P". ($_SESSION['product'][$row][3]) .".00"?></td>
  </tr>
  <tr>
  <?php
    }
  }
  else{
    
  }
  ?>
  <tr>
    <?php 
      if(!empty($_SESSION['product'])){
    ?>
    <th colspan="1">TOTAL</th>
    <th></th>
    <?php

    $total = 0;
    for($row=0; $row<$rowcount; $row++)
    { 
      $total = $total + $_SESSION['product'][$row][3];
    }
    ?>
    <th colspan="1"><?php echo "P". $total .".00"?></th>
    <?php
    }
    else{
        echo '<tr>';
        echo '<td>No items the cart</td>';
        echo '</tr>';
    }
    ?>
  </tr>
</table>
</div>
</body>
</html>
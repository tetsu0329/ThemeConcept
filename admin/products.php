<?php
    include('bypass.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

 <!--<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<script>
  $(document).ready(function() {
  // By Default Disable radio button
  $(".second").attr('disabled', true);
  $(".wrap").css('opacity', '.2'); // This line is used to lightly hide label for disable radio buttons.
  // Disable radio buttons function on Check Disable radio button.
  $("form input:radio").change(function() {
    if ($(this).val() == "Disable") {
      $(".second").attr('checked', false);
      $(".second").attr('disabled', true);
      $(".wrap").css('opacity', '.2');
    }
    // Else Enable radio buttons.
    else {
      $(".second").attr('disabled', false);
      $(".wrap").css('opacity', '1');
    }
  });
});
</script>
</head>
<body>
<form method="POST" enctype="multipart/form-data">
<div class=" container-scroller">
<?php include "sidenav.php" ?>
  <div class="content-wrapper">


  <!--moadl for sale-->


  <div class="modal fade" id="addsale" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
       <div class="modal-header">
         <h4 class="modal-title">Add Sale</h4>
          <button style="position:fixed;right:20px;" type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">

          <div class="row">
                       <div class="form-group col-lg-2 mb-4">
                        <label for="exampleInputPassword1">% of Sale</label>
                        <input type="text" class="form-control p-input" id="exampleInputPassword1" name="prodName">
                       </div>       

                         <div class="form-group col-lg-2 mb-4">
                        <label for="exampleInputPassword1">Time&nbspSpan</label>
                        <input type="number" class="form-control p-input" id="exampleInputPassword1" name="prodName">
                       </div>
                </div>
                                          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Sale</button>
          <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <!--end -->
   <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        
        <div class="modal-body">
            <?php
                if(isset($_GET["ProductID"])){
                    $ProdID = $_GET["ProductID"];
                    $sqlproductview = mysqli_query($conn,"SELECT * FROM producttable WHERE productID = $ProdID");
                        while($rows=mysqli_fetch_assoc($sqlproductview)){

            ?>
            <div class="modal-header">
                <h4 class="modal-title"><?php echo $rows['productName'] ?></h4>
                <button style="position:fixed;right:20px;" type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

                                    <div class="text-center">
                                        <img src="<?php echo $rows['frontpic'] ?>" class="rounded" width="200" height="300" />
                                        <img src="<?php echo $rows['backpic'] ?>" class="rounded" width="200" height="300" />
                                        <img src="<?php echo $rows['sidepic'] ?>" class="rounded" width="200" height="300" />
                                    </div><br>
                                    <div class="text-left">
                                    <h5 class="text-left font-weight-bold txt-brand-color">Description</h5>
                                    <h7 class="text-left font-weight-bold txt-brand-color">Type:</h7>&nbsp<h8 class="text-left text-muted">Dress</h8><br>
                                   	<h7 class="text-left font-weight-bold txt-brand-color">Code:</h7>&nbsp<h8 class="text-left text-muted"><?php echo $rows['productCode'] ?></h8><br>
                                   	<h7 class="text-left font-weight-bold txt-brand-color">Price:</h7>&nbsp<h8 class="text-left text-muted">₱ <?php echo $rows['productPrice'] ?></h8>
                                    </div>                                        
            <?php
                }
            }
            ?>                
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


   <div class="modal fade" id="addprdt" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
         <h4 class="modal-title">Add Product</h4>
          <button style="position:fixed;right:20px;" type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        
        <div class="row">
        
              <div class="form-group col-lg-6 mb-4">
                <label for="exampleInputPassword1">Product Code</label>
                <input type="text" class="form-control p-input" id="exampleInputPassword1" name="prodCode">
             </div>

              <div class="form-group col-lg-6 mb-4">
                <label for="exampleInputPassword1">Product Name</label>
                <input type="text" class="form-control p-input" id="exampleInputPassword1" name="prodName">
             </div>
        </div> 
       
        <div class="row">
        
             <div class="form-group col-lg-9 mb-12">

                 <label for="exampleTextarea">Description</label>
                <textarea class="form-control p-input" id="exampleTextarea" rows="4" name="prodDesc"></textarea>

             </div> 

             <div class="form-group col-lg-3 mb-4">
                <label for="exampleInputPassword1">Quantity</label>
                <input type="text" class="form-control p-input" id="exampleInputPassword1" name="prodQuantity">

                <label for="exampleInputPassword1">Price</label>
                <input type="text" class="form-control p-input" id="exampleInputPassword1" name="prodPrice">
             </div>     
            
        </div>

     <div class="row">

           <div class="form-group col-lg-4 mb-4">
         <label for="exampleInputPassword1">Picture&nbsp1</label>
        <input required type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp"  name="photo" value="Choose Photo" accept="image/*" onchange="loadFile3(event)">
        <img width="100%" height="300" id="output3"/>
        <script>
           var loadFile3 = function(event) {
             var output = document.getElementById('output3');
            output.src = URL.createObjectURL(event.target.files[0]);
            };
        </script>

        <br>

        <!--thumbnail-->
         <label for="exampleInputPassword1">Thumbnail&nbsp;1</label>
        <input required type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp"  name="thumb1" value="Choose Photo" accept="image/*" onchange="loadthumb1(event)">
        <img width="100%" height="200" id="thumb1"/>
        <script>
           var loadthumb1 = function(event) {
             var output = document.getElementById('thumb1');
            output.src = URL.createObjectURL(event.target.files[0]);
            };
        </script>

        <!--end-->

        </div>

         <div class="form-group col-lg-4 mb-4">
         <label for="exampleInputPassword1">Picture&nbsp;2</label>
        <input required type="file" class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp"  name="photo2" value="Choose Photo" accept="image/*" onchange="loadFile(event)">
        <img width="100%" height="300" id="output"/>
        <script>
           var loadFile = function(event) {
             var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            };
        </script>

        <br>
        
        <!--thumbnail-->
         <label for="exampleInputPassword1">Thumbnail&nbsp;2</label>
        <input required type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp"  name="thumb2" value="Choose Photo" accept="image/*" onchange="loadthumb2(event)">
        <img width="100%" height="200" id="thumb2"/>
        <script>
           var loadthumb2 = function(event) {
             var output = document.getElementById('thumb2');
            output.src = URL.createObjectURL(event.target.files[0]);
            };
        </script>

        <!--end-->

        </div>    

        <div class="form-group col-lg-4
         mb-4">
         <label for="exampleInputPassword1">Picture&nbsp;3</label>
        <input required type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp"  name="photo3" value="Choose Photo" accept="image/*" onchange="loadFile2(event)">
        <img width="100%" height="300" id="output2"/>
        <script>
           var loadFile2 = function(event) {
             var output = document.getElementById('output2');
            output.src = URL.createObjectURL(event.target.files[0]);
            };
        </script>

        <br>
        
        <!--thumbnail-->
         <label for="exampleInputPassword1">Thumbnail&nbsp;3</label>
        <input required type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp"  name="thumb3" value="Choose Photo" accept="image/*" onchange="loadthumb3(event)">
        <img width="100%" height="200" id="thumb3"/>
        <script>
           var loadthumb3 = function(event) {
             var output = document.getElementById('thumb3');
            output.src = URL.createObjectURL(event.target.files[0]);
            };
        </script>

        <!--end-->
        </div>  

        </div>
        <div class="row">
            <h3>&nbsp&nbsp&nbspCategory</h3>
        </div>
        <div class="row">

         <div class="form-group col-lg-3 mb-4">
           
          <div class="form-check">
          <label class="form-check-label">
          <input type="radio" class="form-check-input" name="optionsRadios2" value="Investment Dressing">
          Investment&nbsp;Dressing
          </label>
          </div>

           <div class="form-check">
          <label class="form-check-label">
          <input type="radio" class="form-check-input" name="optionsRadios2" value=" Weekender">
          Weekender
          </label>
          </div>

           <div class="form-check">
          <label class="form-check-label">
          <input type="radio" class="form-check-input" name="optionsRadios2" value="Timeless">
          Timeless
          </label>
          </div>

         </div>


        <div class="form-group col-lg-3 mb-4">

          <div class="form-check">
          <label class="form-check-label">
          <input type="radio" class="form-check-input second" name="optionsRadios" id="optionsRadios2" value="Coats" disabled="true">
          <span class="wrap">Coats&nbsp;&&nbsp;Blazers</span>
          </label>
          </div>

          <div class="form-check">
          <label class="form-check-label">
          <input type="radio" class="form-check-input second" name="optionsRadios" id="optionsRadios2" value="Blouses">
          <span class="wrap">Blouses</span>
          </label>
          </div>

          <div class="form-check">
          <label class="form-check-label">
          <input type="radio" class="form-check-input second" name="optionsRadios" id="optionsRadios2" value="Dress">
          <span class="wrap">Dress</span>
          </label>
          </div>

          <div class="form-check">
          <label class="form-check-label">
          <input type="radio" class="form-check-input second" name="optionsRadios" id="optionsRadios2" value="Skirts">
          <span class="wrap">Skirt</span>
          </label>
          </div>

          <div class="form-check">
          <label class="form-check-label">
          <input type="radio" class="form-check-input second" name="optionsRadios" id="optionsRadios2" value="Pants">
          <span class="wrap">Pants</span>
          </label>
          </div>

        </div>            

        <!-- <div class="form-group col-lg-2 mb-4">
          <div class="form-check">
          <label class="form-check-label">
          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
          Coats
          </label>
          </div>

          <div class="form-check">
          <label class="form-check-label">
          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
          Blazers
          </label>
          </div>

          <div class="form-check">
          <label class="form-check-label">
          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
          Blouses
          </label>
          </div>

          <div class="form-check">
          <label class="form-check-label">
          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
          Dress
          </label>
          </div>

        </div>     !-->                    
                                
         </div>   

        </div>
        <div class="modal-footer">
           <button  class="btn btn-outline-primary"  name="addprodbtn">Add</button>
          <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>

        </div>
      </div>
    </div>
  </div>


   <div class="modal fade" id="edtprdt" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <form method="POST">
        <div class="modal-header">
         <h4 class="modal-title">Edit Product</h4>
          <button style="position:fixed;right:20px;" type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <?php if (isset($_GET['prdctedit'])) {
      echo "<script>$('#edtprdt').modal();</script>";
      $getproductedit = mysqli_query($conn,"SELECT * FROM producttable WHERE productID='$_GET[prdctedit]'");
       while ($getproductrow=mysqli_fetch_assoc($getproductedit)){?>
        <div class="row">
              <div class="form-group col-lg-2 mb-4">
                <label for="exampleInputPassword1">Product Code</label>
                <input type="text" name="editCode" class="form-control p-input" value="<?php echo $getproductrow['productCode'] ?>" id="exampleInputPassword1">
             </div>

              <div class="form-group col-lg-4 mb-4">
                <label for="exampleInputPassword1">Product Name</label>
                <input type="text" name="editName" class="form-control p-input"  value="<?php echo $getproductrow['productName'] ?>" id="exampleInputPassword1">
             </div>


             <div class="form-group col-lg-3 mb-4">
                <label for="exampleInputPassword1">Quantity</label>
                <input type="text" name="editQuantity" class="form-control p-input"  value="<?php echo $getproductrow['productQuantity'] ?>" id="exampleInputPassword1">
             </div>
             <div class="form-group col-lg-3 mb-4">
               <label for="exampleInputPassword1">Price</label>
                <input type="text" name="editPrice" class="form-control p-input"  value="<?php echo $getproductrow['productPrice'] ?>" id="exampleInputPassword1">
             </div>     
        </div> 
       
        <div class="row">
        
             <div class="form-group col-lg-12 mb-12">

                 <label for="exampleTextarea">Description</label>
                <textarea class="form-control p-input" name="editDescription" id="exampleTextarea" rows="4"><?php echo $getproductrow['productDescription'] ?></textarea>

             </div> 
            
        </div>
         <div class="row">

           <div class="form-group col-lg-4 mb-4">
         <label for="exampleInputPassword1">Picture&nbsp1</label>
        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp"  name="editphoto" value="Choose Photo" accept="image/*" onchange="editloadFile3(event)">
        <img width="100%" height="300" id="editoutput3" src="<?php echo  $getproductrow['frontpic'] ?>" />
        <script>
           var editloadFile3 = function(event) {
             var output = document.getElementById('editoutput3');
            output.src = URL.createObjectURL(event.target.files[0]);
            };
        </script>

        <br>

        <!--thumbnail-->
         <label for="exampleInputPassword1">Thumbnail&nbsp;1</label>
        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp"  name="editthumb1" value="Choose Photo" accept="image/*" onchange="editloadthumb1(event)">
        <img width="100%" height="200" id="editthumb1" src="<?php echo  $getproductrow['frontpic_thumb'] ?>"/>
        <script>
           var editloadthumb1 = function(event) {
             var output = document.getElementById('editthumb1');
            output.src = URL.createObjectURL(event.target.files[0]);
            };
        </script>

        <!--end-->

        </div>

         <div class="form-group col-lg-4 mb-4">
         <label for="exampleInputPassword1">Picture&nbsp;2</label>
        <input type="file" class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp"  name="editphoto2" value="Choose Photo" accept="image/*" onchange="editloadFile(event)">
        <img width="100%" height="300" id="editoutput" src="<?php echo  $getproductrow['sidepic'] ?>"/>
        <script>
           var editloadFile = function(event) {
             var output = document.getElementById('editoutput');
            output.src = URL.createObjectURL(event.target.files[0]);
            };
        </script>

        <br>
        
        <!--thumbnail-->
         <label for="exampleInputPassword1">Thumbnail&nbsp;2</label>
        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp"  name="editthumb2" value="Choose Photo" accept="image/*" onchange="loadthumb2(event)">
        <img width="100%" height="200" id="thumb2" src="<?php echo  $getproductrow['sidepic_thumb'] ?>"/>
        <script>
           var loadthumb2 = function(event) {
             var output = document.getElementById('thumb2');
            output.src = URL.createObjectURL(event.target.files[0]);
            };
        </script>

        <!--end-->

        </div>    

        <div class="form-group col-lg-4
         mb-4">
         <label for="exampleInputPassword1">Picture&nbsp;3</label>
        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp"  name="editphoto3" value="Choose Photo" accept="image/*" onchange="loadFile2(event)">
        <img width="100%" height="300" id="output2" src="<?php echo  $getproductrow['backpic'] ?>"/>
        <script>
           var loadFile2 = function(event) {
             var output = document.getElementById('output2');
            output.src = URL.createObjectURL(event.target.files[0]);
            };
        </script>

        <br>
        
        <!--thumbnail-->
         <label for="exampleInputPassword1">Thumbnail&nbsp;3</label>
        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp"  name="editthumb3" value="Choose Photo" accept="image/*" onchange="loadthumb3(event)">
        <img width="100%" height="200" id="thumb3" src="<?php echo  $getproductrow['backpic_thumb'] ?>"/>
        <script>
           var loadthumb3 = function(event) {
             var output = document.getElementById('thumb3');
            output.src = URL.createObjectURL(event.target.files[0]);
            };
        </script>

        <!--end-->

        </div>  
         
        </div>
  
        <?php } } ?>
        </div>
        <div class="modal-footer">
           <button class="btn btn-outline-primary" name="editproductbtn">Save</button>
          <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  		  <h3 class="text-primary mb-4">Products</h3>
  		  			  <div class="row mb-12">

                        <div class="col-lg-12 mb-12">
                            <div class="card">
                                <div class="card-block">
                                 <div class="text-right">
                                 <button type="button" class="btn btn-secondary"  data-toggle="modal" data-target="#addprdt"><i class="fa fa-plus"></i></button>
                                <!-- <button class="btn btn-outline-success" name="editbtn"><i class="fa fa-edit"></i></button>-->
                                  <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#addsale"><i class="fa fa-tag"></i></button>
                                 <button type="button" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                                 </div>
                                  <label for="filter" class="text-primary">* Filter by Category</label>
                                  <select type="text" id="filter" class="form-control p-input col-lg-2">
                                     <option></option>
                                     <option>Tops</option>
                                     <option>Skirts</option>
                                     <option>Jeans</option>
                                   </select>
                                   <br>
                                   
                                    <table class="table table-hover">

                                        <thead>
                                            <tr class="text-primary">
                                                <th></th>
                                                <th><input type="checkbox"  class="form-check-input"></th>
                                                <th>Product Code</th>
                                                <th>Type</th>
                                                <th>Name</th>
                                                <th>Quantity</th>
                                                <th style="width:20%;text-align:center;">Action</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while($rows=mysqli_fetch_assoc($sqlproductcount))
                                            {
                                            ?>
                                            <tr>
                                             	<td></td>
                                                <td><input type="checkbox" name='checkID' class="form-check-input" value='"<?php echo $rows['productID']?>"'></td>
                                                <th scope="row"><?php echo $rows['productCode'] ?></th>
                                                <td><?php echo $rows['productCategory'] ?></td>
                                                <td><?php echo $rows['productName'] ?></td>
                                                <td><?php echo $rows['productQuantity'] ?></td>
                                                <td><a href= "?ProductID=<?php echo $rows['productID']?>">View Details</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href= "?prdctedit=<?php echo $rows['productID']?>">Edit Details</a></td>
                                            </tr>
                                            <?php
                                            }   
                                            ?>
                                        </tbody>
                                    </table>
                           
                                </div>
                            </div>
                        </div>
                       </div>   
              
             </div>                  
     <?php include 'footer.php' ?>             
  </div>
 </form> 
</body>
</html>
<?php
    if(isset($_GET['ProductID'])){
        echo "<script>$('#myModal').modal();</script>";
    }
    if (isset($_GET['prdctID'])) {
      echo "<script>$('#edtprdt').modal();</script>";
      $getproductedit = mysqli_query($conn,"SELECT * FROM producttable WHERE productID='$_GET[prdctedit]'");
      $getproductrow=mysqli_fetch_assoc($getproductedit);
    }

     if (isset($_POST['editbtn'])) {
      
      $productID=$_POST['checkID'];

       echo '<script>window.location="products.php?prdctID='.$productID.'"</script>';
    }

?>
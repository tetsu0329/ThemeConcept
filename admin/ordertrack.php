<?php   
      include('bypass.php');
 ?>
<!DOCTYPE html>
<html>
<head>
     <title></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">

</head>
<body>
<div class=" container-scroller">
<?php include "sidenav.php" ?>
  <div class="content-wrapper">
      <h3 class="text-primary mb-4">Order Tracking</h3>
      <div class="row mb-12">
        <div class="col-lg-12 mb-12">
            <div class="card">
                <div class="card-block">

                  <div class="text-right">
                         
                                 <button class="btn btn-outline-success" name="editbtn"><i class="fa fa-edit"></i></button>
                                 <button type="button" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                                 </div><br>
                     <table class="table table-hover">

                                        <thead>
                                            <tr class="text-primary">
                                                <th></th>
                                                <th><input type="checkbox"  class="form-check-input"></th>
                                                <th>UserID</th>
                                                <th>Name</th>
                                                <th>Transaction No.</th>
                                                <th>Date</th>
                                                <th>Product</th>
                                                <th>Action</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td><input type="checkbox" name='checkbox' class="form-check-input" value='"<?php echo $rows['productID']?>"'></td>
                                                <th scope="row">10</th>
                                                <td>Rey Lumagui</td>
                                                <td>78657</td>
                                                <td>11-07-17</td>
                                                <td>korean Trouser</td>
                                                <td><a href="#">View Order</a></td>

                                            </tr>
                                        </tbody>
                                    </table>    
                </div>
          </div>
         </div>               

  </div>
  </div>
    <?php include 'footer.php' ?>    
</div>  
</body>
</html>
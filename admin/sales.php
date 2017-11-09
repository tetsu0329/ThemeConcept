<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="modal fade" id="addsale" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
       <div class="modal-header">
         <h4 class="modal-title">Add Sale</h4>
          <button style="position:fixed;right:20px;" type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
                                          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<div class=" container-scroller">
<?php include "sidenav.php" ?>
  <div class="content-wrapper">
  	 <h3 class="text-primary mb-4">Sales</h3>
  	 <div class="row mb-12">
        <div class="col-lg-12 mb-12">
            <div class="card">
                <div class="card-block">

                	 <div class="text-right">
                                 <button type="button" class="btn btn-secondary"  data-toggle="modal" data-target="#addsale"><i class="fa fa-plus"></i></button>
                                 <button type="button" class="btn btn-outline-success"  data-toggle="modal" data-target="#edtprdt"><i class="fa fa-edit"></i></button>
                                 <button type="button" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                 </div>

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
         	</div>
         </div>			

  </div>
  </div>
    <?php include 'footer.php' ?>    
</body>
</html>
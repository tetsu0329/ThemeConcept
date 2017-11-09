<?php
    include('bypass.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>ThemeConcepts | Admin</title>
<link rel="shortcut icon" href="images/fav.png"/>
<script type="text/javascript">
  function checkAll(ele) {
     var checkboxes = document.getElementsByTagName('input');
     if (ele.checked) {
         for (var i = 0; i < checkboxes.length; i++) {
             if (checkboxes[i].type == 'checkbox') {
                 checkboxes[i].checked = true;
             }
         }
     } else {
         for (var i = 0; i < checkboxes.length; i++) {
             console.log(i)
             if (checkboxes[i].type == 'checkbox') {
                 checkboxes[i].checked = false;
             }
         }
     }
 }

</script>
</head>
<body>
<div class=" container-scroller">
<?php include "sidenav.php" ?>
  <div class="content-wrapper">

<!--Modal for Adding a Slider --> 
   <div class="modal fade" id="addslide" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
         <h4 class="modal-title">Add Slide</h4>
          <button style="position:fixed;right:10px;" type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <form method="POST" enctype="multipart/form-data">

        <div class="form-group col-lg-12 mb-4">
        <div class="col-lg-10"></div>
         <div class="form-group col-lg-4"> 
             <label for="filter" class="text-primary">Category</label>
                                  <select type="text" id="filter" class="form-control p-input text-right col-lg-12">
                                     <option></option>
                                     <option>Header</option>
                                     <option>Features</option>
                                   </select>

        </div>
        <input required type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp"  name="addphoto" value="Choose Photo" accept="image/*" onchange="loadFile1(event)">
        <img width="100%" height="350" src="images/default_photo.png"  id="add"/>
        <script>
           var loadFile1 = function(event) {
             var output = document.getElementById('add');
            output.src = URL.createObjectURL(event.target.files[0]);
            };
        </script>
        </div> 
        </form>  
        </div>
        <div class="modal-footer">

          <button  class="btn btn-outline-primary" name="addsliderbtn">Add</button>
          <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
        </div>
       
      </div>
    </div>
  </div>
<!-- End of the modal--> 


<!--Modal for updating a Slider --> 
   <div class="modal fade" id="updateslide" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
         <h4 class="modal-title">Update Slide</h4>
          <button style="position:fixed;right:10px;" type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">

        <div class="form-group col-lg-12 mb-4">
        <input required type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp"  name="updatephoto" value="Choose Photo" accept="image/*" onchange="loadFile2(event)">
        <img width="100%" height="350" src="images/logo (3).png" id="updt"/>
        <script>
           var loadFile2 = function(event) {
             var output = document.getElementById('updt');
            output.src = URL.createObjectURL(event.target.files[0]);
            };
        </script>
        </div>   
        </div>
        <div class="modal-footer">

          <button  class="btn btn-outline-primary"  name="updtsliderbtn">Save</button>
          <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<!-- End of the modal-->  
  		  <h3 class="text-primary mb-4">Sliders</h3>

  		  			 <form method="POST">
               
                                 <div class="text-right">
                                 <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#addslide"><i class="fa fa-plus"></i></button>
                                 <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#updateslide"><i class="fa fa-edit"></i></button>
                                 <button class="btn btn-outline-danger" name="deleteslide"><i class="fa fa-trash"></i></button>
                                 </div>
                               <div class="form-check text-left ">
                               
                    <label class="form-check-label text-success">
                       <input type="checkbox" class="form-check-input" onchange="checkAll(this)" name="chk[]" />
                    <small class="form-text text-muted text-success">* select all</small>
                    </label>
                </div>
                      <br>
                      <div class="row">
                      <?php  while($rowsliders=mysqli_fetch_array($sqlselectslider)){ ?>
                        <div class="col-xl-6 col-lg-6 col-md-3 col-sm-6 mb-4">
                            <div class="card">
                                <div class="card-block">
                                    <div class="clearfix">
                                        <div class="text-right">
                                	<input type="checkbox" name="ids[]" value="<?=$rowsliders['id']?>" class="form-check-input">
                                </div>
                                 <div class="text-center">
                                    <img src="<?php echo $rowsliders['image'] ?>" width="100%" height="200">
                                 </div>
                                </div>
                                </div>
                            </div>
                        </div>  
                        <?php }  ?>
                       </div>
                       </form>
                      </div>    
             <?php include 'footer.php' ?>              
  </div>
</body>
</html>
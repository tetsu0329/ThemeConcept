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
 <!-- modal for upadating user -->
<div class="modal fade" id="updateuser" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
         <h4 class="modal-title">Update User</h4>
          <button style="position:fixed;right:10px;" type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">

        </div>
        <div class="modal-footer">

          <button  class="btn btn-outline-primary"  name="updtuserbtn">Save</button>
          <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

 <!--end of the modal -->
  		  <h3 class="text-primary mb-4">Users</h3>

  		  			  <div class="row mb-12">
                        <div class="col-lg-12 mb-12">
                            <div class="card">
                                <div class="card-block">
                                 <div class="text-right">
                                 <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#updateuser"><i class="fa fa-edit"></i></button>
                                 <button type="button" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
                                 </div><br>
                                    <table class="table table-hover">

                                        <thead>
                                            <tr class="text-primary">
                                                <th></th>
                                                <th><input type="checkbox" class="form-check-input" onchange="checkAll(this)" name="chk[]" ></th>
                                                <th>UserID</th>
                                                <th><i class="fa fa-user ml-2"></i></th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Status</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            while($rows=mysqli_fetch_assoc($sqlusercount))
                                            {
                                              if($rows['userStatus'] == "Active"){
                                                $stat = "badge badge-success";
                                              }
                                              if($rows['userStatus'] == "Pending"){
                                                $stat = "badge badge-warning";
                                              }
                                              if($rows['userStatus'] == "Blocked"){
                                                $stat = "badge badge-danger";
                                              }
                                            ?>
                                           
                                            <tr>
                                             	<td></td>
                                                <td><input type="checkbox" class="form-check-input"></td>
                                                <th scope="row"><?php echo $rows['userID']; ?></th>
                                                 <th><img src="images/user.png" alt="profile" class="rounded-circle" width="40"
                                                        height="40" /></th>
                                                <td><?php echo $rows['userFname']." ".$rows['userLname'];?></td>
                                                <td ><?php echo $rows['userEmail']; ?></td>
                                                <td><?php echo $rows['userPassword']; ?></td>
                                                <td><label class="<?php echo $stat?>"><?php echo $rows['userStatus']; ?></label></td>
                                            </tr>

                                        <?php
                                          }
                                        ?>
                                            <!---<tr>
                                            	<td></td>
                                                <td><input type="checkbox" class="form-check-input"></td>
                                               <th scope="row">USR-2</th>
                                                <th><img src="images/user.png" alt="profile" class="rounded-circle" width="40"
                                                        height="40" /></th>
                                                <td>Empeno , Maica</td>
                                                <td>09123432567</td>
                                                <td>Solar Homes</td>
                                                <td><label class="badge badge-warning">Pending</label></td>
                                            </tr> 
                                            <tr>
                                                <td></td>
                                                <td><input type="checkbox" class="form-check-input"></td>
                                                <th scope="row">USR-3</th>
                                                 <th><img src="images/user.png" alt="profile" class="rounded-circle" width="40"
                                                        height="40" /></th>
                                                <td>Miranda , Louise</td>
                                                <td>09123432567</td>
                                                <td>Las pinas</td>
                                                <td><label class="badge badge-success">Active</label></td>
                                            </tr>
                                             <tr>
                                                <td></td>
                                                <td><input type="checkbox" class="form-check-input"></td>
                                                <th scope="row">USR-4</th>
                                                 <th><img src="images/user.png" alt="profile" class="rounded-circle" width="40"
                                                        height="40" /></th>
                                                <td>Lumagui , Rey</td>
                                                <td>09123432567</td>
                                                <td>Bayan</td>
                                                <td><label class="badge badge-danger">Blocked</label></td>
                                            </tr>-->
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
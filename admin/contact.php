<?php include ('bypass.php') ?>
<html>
<head>
	<title>ThemeConcepts | Admin</title>
<link rel="shortcut icon" href="images/fav.png"/>
</head>
<body>
<div class=" container-scroller">
<?php include "sidenav.php"; ?>
  <div class="content-wrapper">
    	 <h3 class="text-primary mb-4">Contact</h3>
  	 <div class="row lg-12 mb-12">
        <div class="col-lg-4 mb-12">
            <div class="card">
                <div class="card-block">
  		  			<div class="form-group">
              <form method="POST">
  		  				<div class="text-right">
                         <button class="btn btn-outline-primary" name="updtcontactbtn"><i class="fa fa-save"></i></button>
                        </div><br>
             			<div class="form-group">
                           <div class="input-group">
                            <span class="input-group-addon text-white bg-primary"><i class="fa fa-facebook"></i></span>
                              <input type="text" class="form-control p_input" value="<?php echo $contactrow['facebook'] ?>" name="facebook">
                           </div>
                        </div>
                         <div class="form-group">
                           <div class="input-group">
                            <span class="input-group-addon text-white bg-danger"><i class="fa fa-instagram"></i></span>
                              <input type="text" class="form-control p_input" value="<?php echo $contactrow['instagram'] ?>" name="instagram">
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="input-group">
                            <span class="input-group-addon text-white bg-danger"><i class="fa fa-pinterest"></i></span>
                              <input type="text" class="form-control p_input" value="<?php echo $contactrow['pinterest'] ?>" name="pinterest">
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="input-group">
                            <span class="input-group-addon text-white bg-danger" ><i class="fa fa-google"></i></span>
                              <input type="email" class="form-control p_input" value="<?php echo $contactrow['email'] ?>" name="email">
                           </div>
                        </div>
                         <div class="form-group">
                           <div class="input-group">
                            <span class="input-group-addon text-white bg-success"><i class="fa fa-phone"></i></span>
                              <input type="text" class="form-control p_input" value="<?php echo $contactrow['contactno'] ?>"  name="number">
                           </div>
                        </div>
                        <div class="text-right">
                         <small class="form-text text-muted text-success">* Edit contact info.</small>
                        </div> 
                        </form>
         			</div>
         		</div>
         	</div>

  </div>

    <div class="col-lg-8 mb-4">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title"></h5>
                                    <div style="min-height:450px;">
                                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.8331722507537!2d121.02310586483968!3d14.55153088983368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c91b3ef40b79%3A0x23de027bdc503800!2sGlorietta!5e0!3m2!1sen!2sph!4v1509335923549" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>          
              
  </div>
    <?php include 'footer.php' ?>    
</div>  
</body>
</html>
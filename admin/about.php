<?php   
      include('bypass.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>ThemeConcepts | Admin</title>
 <meta charset="utf-8">
 
    <!-- Include external CSS. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
 
    <!-- Include Editor style. -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.1/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.1/css/froala_style.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class=" container-scroller">
<?php include "sidenav.php" ?>
  <div class="content-wrapper">
  	 <h3 class="text-primary mb-4">About</h3>
  	 <div class="row mb-12">
        <div class="col-lg-12 mb-12">
            <div class="card">
                <div class="card-block">
  		  			<div class="form-group">
              <form method="POST">
  		  				<div class="text-right">
                         <button class="btn btn-outline-primary" name="updtaboutbtn"><i class="fa fa-save"></i></button>
                        </div>
                        <br>
             			<textarea class="form-control p-input" id="exampleTextarea" rows="20" name="aboutcontent" ><?php echo $aboutrow['content'];?></textarea> 
                   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
                   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
                   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
 
    <!-- Include Editor JS files. -->
                   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.1/js/froala_editor.pkgd.min.js"></script>
 
    <!-- Initialize the editor. -->
                   <script> $(function() { $('textarea').froalaEditor() }); </script>
                    </form>
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
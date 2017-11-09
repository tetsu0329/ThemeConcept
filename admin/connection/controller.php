<?php

	//dashboard.php

	$sqlusercount = mysqli_query($conn,"SELECT * FROM usertable");
	$usercount = mysqli_num_rows($sqlusercount);

	$sqlproductcount = mysqli_query($conn,"SELECT * FROM producttable");
	$productcount = mysqli_num_rows($sqlproductcount);

    //about

    $sqlselectabout = mysqli_query($conn,"SELECT * FROM abouttable WHERE id='1'");
    $aboutrow=mysqli_fetch_assoc($sqlselectabout);

    //contact

    $sqlselectcontact = mysqli_query($conn,"SELECT * FROM contacttable WHERE id='1'");
    $contactrow=mysqli_fetch_assoc($sqlselectcontact);

     //slider

    $sqlselectslider = mysqli_query($conn,"SELECT * FROM slidertable");

	//products

	if (isset($_POST['addprodbtn']))
  	{
    	$ProductCode = test_input($_POST['prodCode']);
    	$ProductName = test_input($_POST['prodName']);
    	$ProductDescription = test_input($_POST['prodDesc']);
    	$ProductQuantity = test_input($_POST['prodQuantity']);
    	$ProductPrice = test_input($_POST['prodPrice']);
    	$ProductCategory= test_input($_POST['optionsRadios']);
     	$target_dir = "uploads/";
      	$target_file = $target_dir . basename($_FILES["photo"]["name"]);
      	$target_file2 = $target_dir . basename($_FILES["photo2"]["name"]);
      	$target_file3 = $target_dir . basename($_FILES["photo3"]["name"]);
        $target_file_thumb = $target_dir . basename($_FILES["thumb1"]["name"]);
        $target_file2_thumb = $target_dir . basename($_FILES["thumb2"]["name"]);
        $target_file3_thumb = $target_dir . basename($_FILES["thumb3"]["name"]);
      	$uploadOk = 1;
      	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
      	$imageFileType2 = pathinfo($target_file2,PATHINFO_EXTENSION);
      	$imageFileType3 = pathinfo($target_file3,PATHINFO_EXTENSION);
        $imageFileType_thumb = pathinfo($target_file_thumb,PATHINFO_EXTENSION);
        $imageFileType2_thumb = pathinfo($target_file2_thumb,PATHINFO_EXTENSION);
        $imageFileType3_thumb = pathinfo($target_file3_thumb,PATHINFO_EXTENSION);

        $check = getimagesize($_FILES["photo"]["tmp_name"]);
        $check2 = getimagesize($_FILES["photo2"]["tmp_name"]);
        $check3 = getimagesize($_FILES["photo3"]["tmp_name"]);
        $check_thumb = getimagesize($_FILES["thumb1"]["tmp_name"]);
        $check2_thumb = getimagesize($_FILES["thumb2"]["tmp_name"]);
        $check3_thumb = getimagesize($_FILES["thumb3"]["tmp_name"]);
        if ($check == false || $check2 == false || $check3 == false || $check_thumb == false || $check2_thumb == false || $check3_thumb == false)
        {
        	echo "<script type = 'text/javascript>alert'>alert('File is not an Image');
            window.location.replace('products.php');
            </script>";
            $uploadOk = 0;
        }
        if ($_FILES["photo"]["size"] > 10000000 || $_FILES["photo2"]["size"] > 10000000 || $_FILES["photo3"]["size"] > 10000000 ||
            $_FILES["thumb1"]["size"] > 10000000 || $_FILES["thumb2"]["size"] > 10000000 || $_FILES["thumb3"]["size"] > 10000000) 
        {
        	echo "<script type = 'text/javascript'>alert('Sorry, your file is too large');
            window.location.replace('products.php');
            </script>";
            $uploadOk = 0;
        }
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" &&
        	$imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG" && $imageFileType != "GIF" &&
        	$imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg" && $imageFileType2 != "gif" &&
        	$imageFileType2 != "JPG" && $imageFileType2 != "PNG" && $imageFileType2 != "JPEG" && $imageFileType2 != "GIF" &&
        	$imageFileType3 != "jpg" && $imageFileType3 != "png" && $imageFileType3 != "jpeg" && $imageFileType3 != "gif" &&
        	$imageFileType3 != "JPG" && $imageFileType3 != "PNG" && $imageFileType3 != "JPEG" && $imageFileType3 != "GIF" &&

            $imageFileType_thumb != "jpg" && $imageFileType_thumb != "png" && $imageFileType_thumb != "jpeg" && $imageFileType_thumb != "gif" &&
            $imageFileType_thumb != "JPG" && $imageFileType_thumb != "PNG" && $imageFileType_thumb != "JPEG" && $imageFileType_thumb != "GIF" &&
            $imageFileType2_thumb != "jpg" && $imageFileType2_thumb != "png" && $imageFileType2_thumb != "jpeg" && $imageFileType2_thumb != "gif" &&
            $imageFileType2_thumb != "JPG" && $imageFileType2_thumb != "PNG" && $imageFileType2_thumb != "JPEG" && $imageFileType2_thumb != "GIF" &&
            $imageFileType3_thumb != "jpg" && $imageFileType3_thumb != "png" && $imageFileType3_thumb != "jpeg" && $imageFileType3_thumb != "gif" &&
            $imageFileType3_thumb != "JPG" && $imageFileType3_thumb != "PNG" && $imageFileType3_thumb != "JPEG" && $imageFileType3_thumb != "GIF" 
            ) 
        {
            echo "<script type = 'text/javascript'>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');
            window.location.replace('products.php');
            </script>";
            $uploadOk = 0;
        }
        else 
        {
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file) && move_uploaded_file($_FILES["photo2"]["tmp_name"], $target_file2) && move_uploaded_file($_FILES["photo3"]["tmp_name"], $target_file3) &&
                move_uploaded_file($_FILES["thumb1"]["tmp_name"], $target_file_thumb) && move_uploaded_file($_FILES["thumb2"]["tmp_name"], $target_file2_thumb) && move_uploaded_file($_FILES["thumb3"]["tmp_name"], $target_file3_thumb))
            {
              $result = mysqli_query($conn,"INSERT INTO producttable (productCode,productName,productDescription,productCategory,productQuantity,productPrice,frontpic,backpic,sidepic,frontpic_thumb,backpic_thumb,sidepic_thumb) 
                VALUES ('$ProductCode','$ProductName','$ProductDescription','$ProductCategory','$ProductQuantity','$ProductPrice','$target_file','$target_file2', '$target_file3','$target_file_thumb','$target_file2_thumb', '$target_file3_thumb')")
                or die ("failed to query database". mysql_error());
            echo"<script type='text/javascript'>alert('Product Added Successfully'); 
            window.location.replace('products.php');
               
              </script>";
            } 
            else 
            {
                echo "<script type = 'text/javascript'>alert('Sorry, there was an error uploading your file.');
                
                </script>";
            }
        }
    }


        //update About

    if (isset($_POST['updtaboutbtn'])) {
         $aboutcontent=$_POST['aboutcontent'];

         $sqlaboutupdt = mysqli_query($conn,"UPDATE abouttable SET content='$aboutcontent' WHERE id='1'");

         if ($sqlaboutupdt) {
            
                echo "<script>alert('Content of about has been updated');
                        window.location='about.php';</script>";

         }

         else{
                echo "<script>alert('unable to update about content')
                     window.location='about.php';</script>";
         }
    }

        //update contact

    if (isset($_POST['updtcontactbtn'])) {

        $facebook=$_POST['facebook'];
        $instagram=$_POST['instagram'];
        $pinterest=$_POST['pinterest'];
        $email=$_POST['email'];
        $number=$_POST['number'];


         $sqlcontactupdt = mysqli_query($conn,"UPDATE contacttable SET facebook='$facebook' , instagram='$instagram' , pinterest='$pinterest' , email='$email' , contactno='$number' WHERE id='1'");

         if ($sqlcontactupdt) {
            
                echo "<script>alert('Content of Contact has been updated');
                        window.location='contact.php';</script>";

         }

         else{
                echo "<script>alert('unable to update Contact content')
                     window.location='contact.php';</script>";
         }
    }

        //add slider

    if (isset($_POST['addsliderbtn'])) {

        $category=$_POST['slidercategory'];
        $target_dir = "sliders/";
        $target_file = $target_dir . basename($_FILES["addphoto"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $check = getimagesize($_FILES["addphoto"]["tmp_name"]);

        $slidercount = mysqli_num_rows($sqlselectslider);

        if ($slidercount >= 4) {

            echo "<script>alert('Maximum number of sliders has been reach');
                    window.location='slider.php';
            </script>";
        }

        else{    

          if ($check == false)
        {
            echo "<script type = 'text/javascript>alert'>alert('File is not an Image');
            window.location.replace('products.php');
            </script>";
            $uploadOk = 0;
        }
        if ($_FILES["addphoto"]["size"] > 9000000) 
        {
            echo "<script type = 'text/javascript'>alert('Sorry, your file is too large');
            window.location.replace('slider.php');
            </script>";
            $uploadOk = 0;
        }
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" &&
            $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG" && $imageFileType != "GIF") 
        {
            echo "<script type = 'text/javascript'>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');
            window.location.replace('slider.php');
            </script>";
            $uploadOk = 0;
        }
        else 
        {
            if (move_uploaded_file($_FILES["addphoto"]["tmp_name"], $target_file)) 
            {
              $result = mysqli_query($conn,"INSERT INTO slidertable (image , category) VALUES ('$target_file' , '$category')")
                or die ("failed to query database". mysqli_error());
            echo"<script type='text/javascript'>alert('New slider is Added Successfully'); 
               window.location='slider.php';
              </script>";
            } 
            else 
            {
                echo "<script type = 'text/javascript'>alert('Sorry, there was an error uploading your file.');
                
                </script>";
            }
        }
       } 
    }

    if (isset($_POST['deleteslide'])) {
        # code...
    //delete Sliders

    $ids = array();
    foreach ((array) $_POST['ids'] as $id) {
    // sanitize input
    $id = (int) $id;
    if ($id) $ids[] = $id;
        }
// good idea to say how much row will be deleted to DB
        $limit = count($ids);
            if ($limit) {
    // can see the output
                 $ids = join(',', $ids);
                mysqli_query($conn,"DELETE FROM slidertable WHERE id IN ($ids) LIMIT $limit");

                echo "<script>alert('slides has been successfully deleted');
                    window.location='slider.php';
                </script>";
}
}
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


//Edit product
if (isset($_POST['editproductbtn'])) {


        $ProductCode = test_input($_POST['editCode']);
        $ProductName = test_input($_POST['editName']);
        $ProductDescription = test_input($_POST['editDescription']);
        $ProductQuantity = test_input($_POST['editQuantity']);
        $ProductPrice = test_input($_POST['editPrice']);


         $result = mysqli_query($conn,"UPDATE producttable SET productCode='$ProductCode' , productName='$ProductName' , productDescription='$ProductDescription' , productQuantity='$ProductQuantity' , productPrice='$ProductPrice' WHERE productID='$_GET[prdctedit]'")
                or die ("failed to query database". mysql_error());
            echo "<script> alert('Product is Update successfully'); 
            window.location='products.php'; </script>";
       

   
}


?>
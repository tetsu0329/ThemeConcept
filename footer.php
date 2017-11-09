<?php 
	include('navigation.php'); 
	include('admin/connection/conn.php'); 
	 $sqlselectcontact = mysqli_query($conn,"SELECT * FROM contacttable WHERE id='1'");
    $contactrow=mysqli_fetch_assoc($sqlselectcontact); 
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	#footer {
	   position: fixed;
	   left: 90px;
	   bottom: 0;
	   width: 100%;
	   height: 15%;
	   background-color: #313232;
	   color: white;
	   text-align: center;
	   padding-top: 10px;
	   padding-bottom: 0px;
	}

</style>
<body>

		<div id="footer" class="container-fluid cols-sm-12 bg-4 text-center">
		 	<p>GET THE LATEST UPDATES ON SOCIAL MEDIA!</p>

			<a href="<?php echo $contactrow['facebook'] ?>" target="_blank"><img border="0" alt="W3Schools" src="img/socialmedia/facebooklogo.png" width="30" height="30"></a>

			<a href="<?php echo $contactrow['instagram'] ?>" target="_blank"><img border="0" alt="W3Schools" src="img/socialmedia/instagramlogo.png" width="30" height="30"></a>

			<a href="<?php echo $contactrow['pinterest'] ?>" target="_blank"><img border="0" alt="W3Schools" src="img/socialmedia/pinterestlogo.png" width="30" height="30"></a>
			<border>
			<p>&copy; THEMECONCEPTS- 2017 ALL RIGHTS RESERVED.</p>
		</div>
</body>
</html>
<?php 
	include ('includes/navigation.php'); 
	//include 'header.php'; 
	include 'admin/connection/conn.php';
	$page="signup.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
<script>
	function openNav() {
	    document.getElementById("mySidenav").style.width = "200px";
	    document.getElementById("main").style.marginLeft = "200px";
	    document.getElementById("opennav").style.display = "none";
	    document.getElementById("closenav").style.display = "block";
	    
	}

	function closeNav() {
	    document.getElementById("mySidenav").style.width = "0";
	     document.getElementById("main").style.marginLeft = "0";
	    document.getElementById("opennav").style.display = "block";
	    document.getElementById("closenav").style.display = "none";
	}
	</script>
	<script type="text/javascript">
	$("input[required]").parent("label").addClass("required");
</script>	
</head>
<style type="text/css">
	hr{
		width: 10px;
		color: black;
	}
	.content{
		padding:0 20% 0 13%;
	}
	
	td, tr, input, select, option{
		padding: 10px 10px 10px 5px;
		font-size: 15px;
	}
    #required:before{
		  content:"*";
		  color: red;
		  font-weight:bold;
		}
	#required:after{
		  content:"";
		  color: red;
		  font-weight:bold;
		}
	#title{
		margin-top: 5%;
		font-size: 30px;
		text-align: center;
	}
	#title2{
		margin-top: 5%;
		font-size: 30px;
		text-align: center;
	}
	hr{
		width: 100%;
		height: 2px;
		background-color: black;
	}
	#note{
		font-size: 20px;
	}
	#newadd{
		z-index:1; 
		background: #ee3245;
		padding: 10px 10px 10px 10px;
		color: white;
		font-size: 13px;
		border: none;
		border-radius: 0;
		margin-left:50%;
	}
	#title3{
		font-size: 30px;
		text-align: center; 
	}
	#main {
    transition: .5s;
    padding:0;
    margin-left: 200px;
}
#opennav{
    display:none;
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
  input{
  	width:50%;
  	border:1px solid black;
  }
  td{
  	padding:5px;
  }
  #title{
  	font-size: 15px;
  }
   #title2{
  	font-size: 15px;
  }
   #title3{
  	font-size: 15px;
  }
  #inst{
  	width: 50%;
  }
}

</style>
<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("select.city").change(function(){
        var selectedCountry = $(".city option:selected").val();
        $.ajax({
            type: "POST",
            url: "listofcity.php",
            data: { country : selectedCountry } 
        }).done(function(data){
            $("#response").html(data);
        });
    });
});
</script>

<body>
<div id="main">
<span style="font-size:25px;cursor:pointer;position:absolute;z-index:1;color:white;padding:5px 10px 5px 10px;border-radius:3px;margin:10px;" id="opennav" onclick="openNav()">&#9776;</span>
<span style="font-size:25px;cursor:pointer;position:absolute;z-index:1;color:white;padding:5px 10px 5px 10px;border-radius:3px;margin:10px;" id="closenav" onclick="closeNav()">&#9776;</span>  
<img class="img-responsive" src="img/nav/signup.png" alt="Chania" width="100%">

	<br>

	<div class="content">
		
		
		<br>
		<form action="" method="POST">
			<table class="signup">
			<p id="title">PERSONAL&nbsp;INFORMATION</p>
			<hr>
			<tr>
				<td id="required">&nbsp;<label>FIRSTNAME</label></td>
				<td></td>
				<td><input type="text" name="fname" required></td>

				<td id="required">&nbsp;<label>LASTNAME</label></td>
				<td></td>
				<td></td>
				<td><input type="text" name="lname" ></td>
			</tr>
			
			<tr>
				<td id="required">&nbsp;<label>MOBILE&nbsp;NUMBER</label></td>
				<td></td>
				<td><input type="text" name="monumber" required style="width:100%;"></td>
			</tr>

			<tr>
				<td id="required">&nbsp;<label>EMAIL&nbsp;ADDRESS</label></td>
				<td></td>
				<td><input type="text" name="emailadd" required style="width:100%;"></td>
			</tr>
			</table>

			<table class="shipinfo">
			<p id="title2">BILLING&nbsp;/&nbsp;SHIPPING&nbsp;INFORMATION</p>
			<hr>

			<p id="note">Shipping is currently limited to Metro Manila ONLY</p>

			<tr>
				<td id="required">&nbsp;<label>ADDRESS</label> <br>(house number, <br>building, street name, <br>subdivision name)</td>
				<td><input type="text" name="caddress" required style="width:100%;"></td>	
			</tr>

			<tr>
				<td id="required">&nbsp;<label>CITY</label></td>
				<td>
					<select style='width:120%' class="city" name='city'>
					<option>--</option>
					<?php
					$arrcities = array('Caloocan','Las Piñas', 'Makati', 'Malabon', 'Mandaluyong', 'Manila', 'Marikina', 'Muntinlupa'
					,'Navotas','Parañaque','Pasay','Pasig','Quezon City', 'San Juan', 'Taguig', 'Valenzuela');
					$arrlength = count($arrcities);
						for($x=0; $x<$arrlength; $x++){
							echo "<option value=".$arrcities[$x].">".$arrcities[$x]."</option>";
						}
					?>
					</select>
				</td>
				<td></td>
				<td></td>
				<td></td>
				<td id="required">&nbsp;<label>ZIP</label></td>
				<td>
					<td><input type="text" name="zip" required style="width:120%;"></td>	
				</td>
			</tr>
			
			<tr>
				<td id="required">&nbsp;<label>BARANGAY</label></td>
				<td>
					<select id="response" style="width:120%" name='barangay'>
						<option>SELECT</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="checkbox" name='checkbox1'> SIGN&nbsp;UP&nbsp;FOR&nbsp;NEWSLETTERS</td>
			</tr>

			<tr>
				<td >&nbsp;<label>INSTRUCTIONS</label></td>
				<td><input type="text" name="instruction" id="inst" style="width:285%;"></td>	
			</tr>
			<tr>
				<td></td>
				<td>
					<button id="newadd">+&nbsp;NEW&nbsp;ADDRESS</button>
				</td>
			</tr>
			</table>
			<br>
			<table id="loginfo">
				<p id="title3">LOGIN&nbsp;INFORMATION</p>
				<hr>

				<tr>
				<td id="required">&nbsp;<label>PASSWORD</label></td>
				<td><input type="text" name="pw" required style="width:285%;"></td>	
				</tr>

				<tr>
				<td id="required">&nbsp;<label> CONFIRM&nbsp;PASSWORD</label></td>
				<td><input type="text" name="confirmpw" required style="width:285%;"></td>	
				</tr>
				<tr>
					<td></td>
					<td>
					<p>STAY IN THE LATEST TRENDS!</p>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="text" name = "newsletter" required style="width:285%;" placeholder="email"></td>	
				</tr>
				
				<tr>
				<td></td>
				<td>
					<button id="newadd" style="width:100%;" name="registerbtn">SUBMIT</button>
				</td>
			</tr>		
			</table>
			</form>

	</div>
</div>
</body>
</html>
<?php
	if(isset($_POST['registerbtn'])){
		$fname = test_input($_POST['fname']);
        $lname= test_input($_POST['lname']);
        $mobileno = test_input($_POST['monumber']);
        $emailaddress = test_input($_POST['emailadd']);
        $customeraddress = test_input($_POST['caddress']);
        $city = test_input($_POST['city']);
        $zip = test_input($_POST['zip']);
        $barangay = test_input($_POST['barangay']);
        $instructionn = test_input($_POST['instruction']);
        $password = test_input($_POST['pw']);
        $cpassword = test_input($_POST['confirmpw']);
        $userstat = test_input("Pending");
        $newsletterr = test_input($_POST["newsletter"]);

        if($password == $cpassword){
        	if (isset($_POST['checkbox1'])) {
        		$usertypee = test_input("Newsletter");
        		$adduser = mysqli_query($conn,"INSERT INTO usertable (userFname,userLname,userEmail,userMobileNo,userAddress,userCity,userBarangay,userZip,userInstruction,userPassword, userType, userStatus, userNewsLetter) 
            	VALUES ('$fname','$lname','$emailaddress','$mobileno','$customeraddress','$city','$barangay','$zip','$instructionn','$password','$usertypee','$userstat','$newsletterr')") 
        		or die ("failed to query database". mysql_error());
        		echo "<script>alert('Verification Message has been sent to your Email')</script>";
        	}
        	else{
        		$usertypee = test_input("Normal");
        		$adduser = mysqli_query($conn,"INSERT INTO usertable (userFname,userLname,userEmail,userMobileNo,userAddress,userCity,userBarangay,userZip,userInstruction,userPassword, userType, userStatus, userNewsLetter) 
            	VALUES ('$fname','$lname','$emailaddress','$mobileno','$customeraddress','$city','$barangay','$zip','$instructionn','$password','$usertypee','$userstat','$newsletterr')") 
        		or die ("failed to query database". mysql_error());
        		echo "<script>alert('Verification Message has been sent to your Email')</script>";
        	}
        }
        else{
        	echo "<script>alert('Password does not match')</script>";
        }
        
	}
	function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>

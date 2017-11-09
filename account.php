<?php 
	include('includes/navigation.php'); 
	include('includes/header.php');
	
?>
<!DOCTYPE html>
<script type="text/javascript">
	function loadaccount(){
		$('#account').collapse();
	}
</script>
<html>
<head>
	<title>Account</title>
</head>
<style type="text/css">
		hr{
		margin-left: -10%;
		width: 100%;
		height: 2px;
		background-color: black;
		}
		.content{
		margin-left: 30%;
		margin-top: 15%;
	}
	td, tr, label, p{
		font-size: 20px;
	}
	#title{
		margin-left: 20%;
	}
	#info{
		color: gray;
	}
	#editbtn{
		z-index:1; 
		margin-left: 71%;
		background: #ee3245;
		padding: 10px 10px 10px 10px;
		color: white;
		font-size: 13px;
		border: none;
		border-radius: 0;
	}
	#newadd{
		z-index:1; 
		margin-left: 0%;
		background: #ee3245;
		padding: 10px 10px 10px 10px;
		color: white;
		font-size: 13px;
		border: none;
		border-radius: 0;
	}
</style>
<body onload="loadaccount()">
<img class="img-responsive" src="img/nav/acc.png" alt="Chania" id="head">
<br>
<div class="content">

	<table class="personalinfo">

		<p id="title">PERSONAL INFORMATION</p>
		<hr>
				<tr>
					<td>&nbsp;NAME</td>
					<td style="padding-left:50%"><p id="info"><?php echo $userrow['userFname']."&nbsp;".$userrow['userLname'] ?></p></td>
				</tr>

				<tr>
					<td>&nbsp;MOBILE NUMBER</td>
					<td style="padding-left:50%"><p id="info"><?php echo $userrow['userMobileNo']?></p></td>
				</tr>

				<tr>
					<td>&nbsp;EMAIL ADDRESS</td>
					<td style="padding-left:50%"><p id="info"><?php echo $userrow['userEmail'] ?></p></td>
				</tr>
	</table>
	<br>
	<br>
	<br>
	<table class="shipinfo">

		<p id="title">BILLING / SHIPPING INFORMATION</p>
		<hr>

		<tr>
			<td>ADDRESS</td>
			<td><button id="editbtn" style="width:200%;">EDIT</button></td>
		</tr>
		

		</table>
<br>
<br>
	<table class="infos">
		<tr>

			<td>
				<p id="info"><?php echo $userrow['userFname']."&nbsp;".$userrow['userLname'] ?></p>
				<p id="info"><?php echo $userrow['userMobileNo']?></p>
				<p id="info"><?php echo $userrow['userAddress'] ?></p>
			</td>
		</tr>

		
		<tr>
			<!--<td><button id="newadd">+ NEW ADDRESS</button></td>-->
		</tr>

	</table>
</body>
</html>
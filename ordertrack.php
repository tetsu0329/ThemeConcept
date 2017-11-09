<?php 
	include('includes/navigation.php'); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Orders + Tracking</title>
</head>
<script type="text/javascript">
	function loadaccount(){
		$('#account').collapse();
	}
	</script>
<style type="text/css">
	#title{
		font-size: 20px;
		text-align: center;
	}
	hr{
		width: 90%;
		height: 2px;
		background-color: black;
		}
		.content{
		padding: 5px 60px; 5px 60px;
		width: 75%;
		float: right;
		}
		.main{
		margin-left: 14.5%;
		width: 85.5%;
		height: 100%;
		}
		li{
			border-bottom: 1px solid black;
			float: right;
			width: 100%;
		}
		#order{
			float: left;
			width: 26%;
			text-align: center;
			margin-right:5%;
			
		}
		#orderinfo{
			background-color: #313232;
			border:1px solid black;
			width: 20%;
			padding: 2%;
			float: left;
			margin-left: 5%;
			margin-top: 10%;
			text-align: center;
		}
</style>
<body style="overflow-x:auto;" onload="loadaccount()">
	<div class="main">
			<img class="img-responsive" src="img/nav/acc.png" alt="Chania" id="head">
			<br>
				<p id="title">ORDERS + TRACKING</p>
				<hr>
			<div class="content">
				<ul style="list-style:none;"> 
				<li>
					<div id="order">
					
						Blouse 1 
						<br>
						100.00
						<br>
						<img src="blouse/a.jpg" width="150" height="250">
						
					</div>

					<div id="order">
						<br>
						<br>
						<br>
						<br>
						QUANTITY:2
						<br>
						SIZE: SMALL
					</div>

					<div id="order">
						<br>
						<br>
						<br>
						<br>
						 <p style="color:red;">ORDER PROCESSING</p>
						<br>
						 LAST&nbsp;UPDATED:&nbsp;11-04-2017
					</div>
				</li>

				</ul>
			</div>

			<div id="orderinfo">
				<h5 style="color:gray;">ORDER NUMBER</h5>
				<h3 style="color:white;">123456789</h3>

				<h5 style="color:gray;">ORDER DATE</h5>
				<h3 style="color:white;">11-04-2017</h3>

			</div>
	</div>
</body>
</html>
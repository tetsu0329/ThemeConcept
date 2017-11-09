<?php
	session_start();
	include('connection/conn.php');
	include('connection/controller.php');
	if(empty($_SESSION['session_tcadmin'])){
        echo "<script>window.location.replace('index.php')</script>";
    }
?>
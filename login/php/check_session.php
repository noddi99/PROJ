<?php 
session_start();
if (isset($_SESSION['farmer_email']) OR isset($_SESSION['driver_email'])) {
	// code...
}else{
	header('location: login/');
}


 ?>
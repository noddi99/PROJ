<?php 
session_start();
if (isset($_SESSION['farmer_email'])) {
	$email = $_SESSION['farmer_email'];
	require 'config.php';
	$arrayName ="";		
	
	$select = $conn->query("SELECT * FROM drivers");
	if ($select->num_rows>0) {
		while ($row=$select->fetch_assoc()) {
			$arrayName =$row['coordinates'];
			 echo $arrayName."=".$row['tractor_name']." registration number ".$row['tractor_reg_no']."/";
		
			
		}
	}

	
	
	
		
	
	
}


 ?> 
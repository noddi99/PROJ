<?php 
session_start();
if (isset($_SESSION['farmer_email'])) {
	$email = $_SESSION['farmer_email'];
	require 'config.php';
	$select = $conn->query("SELECT pickup FROM farmers WHERE email='$email'");
	if ($select->num_rows>0) {
		while ($row=$select->fetch_assoc()) {
			 echo $row['pickup'];
		
			
		}
	}

	
	
	
		
	
	
}


 ?> 
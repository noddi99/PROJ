<?php
	session_start();
if (isset($_POST['origin']) && isset($_SESSION['driver_email'])) {

	require 'config.php';
	$email = $_SESSION['driver_email'];
	$coordinates = mysqli_real_escape_string($conn, $_POST['origin']);
	$update_geo = $conn->query("UPDATE drivers SET coordinates = '$coordinates' WHERE email='$email'");
	if ($update_geo) {
		echo "location updated";
	}else{
		echo "Failed";
	}
	
}


 ?>
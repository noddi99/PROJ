<?php 
session_start();
unset($_SESSION['farmer_email']);
unset($_SESSION['driver_email']);
if (isset($_POST['login_button'])) {
	require 'config.php';
	
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	$user_type = mysqli_real_escape_string($conn,$_POST['user_type']);
	$enc_pass = md5($password);
	if ($user_type ==="0") {
		$user = $conn->query("SELECT * FROM farmers WHERE email='$email' AND password='$enc_pass'");
		if ($user->num_rows>0) {
			$_SESSION['farmer_email'] = $email;
			header('location:../');

		}else{
			echo "<script>alert('Incorrect details')</script>";
		}
	}else if($user_type ==="1"){
		$user = $conn->query("SELECT * FROM drivers WHERE email='$email' AND password='$enc_pass'");
		if ($user->num_rows>0) {
			$_SESSION['driver_email'] = $email;
			header('location:../');

		}else{
			echo "<script>alert('Incorrect details')</script>";
		}
	}
}









 ?>
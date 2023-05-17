<?php 
if (isset($_POST['register_button'])) {
	require 'config.php';
	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	$user_type = mysqli_real_escape_string($conn,$_POST['user_type']);
	
	if ($user_type==="0") {
		$pickup = mysqli_real_escape_string($conn,$_POST['pickup']);
		$user = $conn->query("SELECT * FROM farmers WHERE email='$email'");
		$enc_pass = md5($password);
		if ($user->num_rows>0) {
			echo "<script>alert('User exists')</script>";
		}else{
			$register = $conn->query("INSERT INTO farmers (name,email,password,pickup) VALUES ('$name','$email','$enc_pass','$pickup')");
			if ($register) {
				echo "<script>alert('Registration successful');window.location.assign('index.php')</script>";
			}else{
				echo "<script>alert('server errorr')</script>";
			}
		}
		}else if($user_type==="1"){
			$tractor_name = mysqli_real_escape_string($conn,$_POST['tractor_name']);
			$tractor_reg_no = mysqli_real_escape_string($conn,$_POST['tractor_reg_no']);
			$user = $conn->query("SELECT * FROM drivers WHERE email='$email'");
			$enc_pass = md5($password);
			if ($user->num_rows>0) {
				echo "<script>alert('User exists')</script>";
			}else{
				$register = $conn->query("INSERT INTO drivers (name,email,password,tractor_reg_no,tractor_name) VALUES ('$name','$email','$enc_pass','$tractor_reg_no','$tractor_name')");
				if ($register) {
					echo "<script>alert('Registration successful');window.location.assign('index.php')</script>";
				}else{
					echo "<script>alert('server errorr')</script>";
				}
			}
		}
	

}

 ?>
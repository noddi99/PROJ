<?php include 'php/register.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>
				
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title">
						Member Registration
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<select id="checkoption" required class="input100" name="user_type">
							<option selected disabled>User Type</option>
							<option value="0" value="Farmer">Farmer</option>
							<option value="1" value="Driver">Driver</option>
						</select>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-group" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input required class="input100" type="text" name="name" placeholder="Full Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					<div style="display: none;" id="pickup" class="wrap-input100">
						<input  value=" " required  class="input100" type="text" name="pickup" placeholder="Pick up point">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</span>
					</div>
					<div style="display: none;" id="tractor_name" class="wrap-input100" >
						<input value=" " required class="input100" type="text" name="tractor_name" placeholder="Tractor name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-bus" aria-hidden="true"></i>
						</span>
					</div>
					<div style="display: none;" id="tractor_reg_no" class="wrap-input100">
						<input required value=" "  class="input100" type="text" name="tractor_reg_no" placeholder="Tractor reg no.">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-list" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input required class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input required class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button name="register_button" type="submit" class="login100-form-btn">
							Register
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							having account?
						</span>
						<a class="txt2" href="index.php">
							Login
						</a>
					</div>


					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
		var pickup = $("#pickup")
		pickup.css({"display":"none"})
		var option = $("#checkoption")
		var tractor_name = $("#tractor_name")
		var tractor_reg_no = $("#tractor_reg_no")
		tractor_reg_no.css({"display":"none"})
		tractor_name.css({"display": "none"})
		option.change(()=>{
			if (option.val()==="0") {
				pickup.css({"display":"block"})
				tractor_reg_no.css({"display":" none"})
				tractor_name.css({"display":"none"})
			}else if(option.val()==="1"){
				tractor_reg_no.css({"display":" block"})
				tractor_name.css({"display":"block"})
				pickup.css({"display":"none"})
			}else{
				pickup.css({"display":"none"})
				tractor_reg_no.css({"display":" none"})
				tractor_name.css({"display":"none"})

			}
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

<?php  
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>MARC</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="fas fa-lock"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="bootstrap/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="bootstrap/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="bootstrap/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="bootstrap/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="bootstrap/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="bootstrap/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="bootstrap/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="bootstrap/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="bootstrap/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/login/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="logcode.php" method="post">
					<p style="color:red;text-align: center;margin-top:50px; font-size: 30px; text-shadow: 2px 2px black;"><?php
		if ($_SESSION['result']==1)
 {
 	echo "Invalid User Id or Password"; session_destroy();
 }
 if ($_SESSION['result']==2)
 {
 	session_destroy();
 	echo "Logout Successfully";
 }
 if ($_SESSION['result']==3)
 {
 	session_destroy();
 	echo "Login First";
 }
			?></p>
					<span class="login100-form-title p-b-43">
					<img src="images/logo.jpg">
				</span>	
					<span class="login100-form-title p-b-43">
						MARC Laboratory Pvt. Ltd.
					</span>
					<span class="login100-form-title p-b-43">
						Admin Login
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email"  minlength="0" maxlength="40">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password"  minlength="0" maxlength="20">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div>
							<a href="elogin.php" class="txt1">
								Employee Login
							</a>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('images/background.jpg'); background-size: 100% 100%;">
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		All Rights Reserved Copyright &copy; MARC Laboratories Pvt. Ltd. | Designed By Kaushtubh Srivastav
	</div>
	

	
	
<!--===============================================================================================-->
	<script src="bootstrap/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="bootstrap/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="bootstrap/login/vendor/bootstrap/js/popper.js"></script>
	<script src="bootstrap/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="bootstrap/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="bootstrap/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="bootstrap/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="bootstrap/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="bootstrap/login/js/main.js"></script>

</body>
</html>
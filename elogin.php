<?php  
error_reporting(0);
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>MARC | EMP LOGIN</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="css/eloginstyle.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/elogin.js"></script>
</head>
<body background="images/background2.jpg">
<div class="login-reg-panel">
							
		<div class="register-info-box">
			<h2 style="font-size: 35px;">Employee Login</h2>
			<p style="font-size: 20px;">MARC LABORATORIES Human Resource Management System</p>
		</div>
							
		<div class="white-panel">
			<div class="login-show">
				<form action="elogcode.php" method="post">
				<p style="color: #000;text-align: center;margin-top:70px;"><?php
		if ($_SESSION['result']==1)
 {
 	echo "Invalid Email or Password"; session_destroy();
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
				<h2>LOGIN</h2>
				<input type="text" placeholder="Email" name="email">
				<input type="password" placeholder="Password" name="password">
				<input type="submit" value="Login">
				<a href="index.php">Admin Login</a>
				</form>
			</div>
		</div>
	</div>
</form>
</body>
</html>
<?php
require("session.php");
if($_SESSION['admin']=="")
{
session_destroy("Location:index.php?msg=3");
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="css/prostyle.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js">
	</script>
	<title>MARC | Profile</title>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3" style="padding: 0;background-color: #343a40; height: 625px;">
			<div class="left_custom">
			<img src="images/user48.png" class="rounded mx-auto d-block" style="padding-top: 50px;" />
			<hr style="width: 255px; background-color:black;" />
			<br/>
			<h3 class="text-center" style="color: #fff;">Welcome  Admin</h3>
			<br/>
				
			<span style="color: #fff;">
			<?php
				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				echo date("d/m/y");
			?></span>
			<hr style="width: 255px; background-color:  black;"/>
			<br/>
			<div class="col-md-10 offset-md-1">
</div>
			<br/>
			<div class="col-md-10 offset-md-1" style="margin-top: 5px;">
			<ul class="nav flex-column ">
  <li class="nav-item">
    <a class="nav-link  bg-dark" href="logout.php" style="color: #fff;border-bottom: 1px solid black"><i class="fas fa-sign-out-alt" style="color:#000;"></i>&nbsp;&nbsp;&nbsp;&nbsp;LogOut</a>
  </li>
</ul>
</div>
		</div>
		</div>
		<div class="col-md-9" style="background-image:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url(images/background.jpg); background-size: 100% 100%;">
			<div class="row">
				<div class="col-md-12" style="background-image: linear-gradient(to right top, #a6abb3, #7e898e, #5c6968, #404943, #282a22);min-height: 80px; ">
					<h3 class="float-left" style="padding-top: 15px; font-size: 38px; font-family:bodoni mt; margin-left: 90px;color:#fff;"> <i class="fas fa-address-card" id="icon"></i> Admin Panel </h3>
					<img src="images/logo.jpg" class="img-fluid float-right" style="padding-top:10px;  ">
				</div>
			</div>
				<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-3">
						<div class="right_custom">
							<a href="depart.php" class="icon"><i class="fas fa-user-plus "style="font-size: 40px;"></i></a>
							<br/>
							<a href="depart.php" class="anchor" style="text-decoration: none;">Add Department</a>
						</div>
						</div>
						<div class="col-md-3" >
							<div class="right_custom">
								<a href="employee.php" class="icon"><i class="fas fa-file-alt " style="font-size: 40px;"></i></a>
								<br/>
								<a href="employee.php" class="anchor" style="text-decoration: none;">Add Employee</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="right_custom">
								<a href="view.php" class="icon"><i class="fas fa-copy " style="font-size: 40px;"></i></a>
								<br/>
								<a href="view.php" class="anchor" style="text-decoration: none;">View Employee</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="right_custom">
								<a href="addsalary.php" class="icon"><i class="fas fa-money-check-alt "style="font-size: 40px;" ></i></a>
								<br/>
								<a href="addsalary.php" class="anchor" style="text-decoration: none;">Salary</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="right_custom">
								<a href="addatt.php" class="icon"><i class="fas fa-book-open" style="font-size: 40px;" ></i></a>
								<br/>
								<a href="addatt.php" class="anchor" style="text-decoration: none;">Attendance</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="right_custom">
								<a href="viewatt.php" class="icon"><i class="fas fa-folder" style="font-size: 40px;"></i></a>
								<br/>
								<a href="viewatt.php" class="anchor" style="text-decoration: none;">View Attendance</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="right_custom">
								<a href="leaves.php" class="icon"><i class="fas fa-server  fa-flip-horizontal" style="font-size: 40px;"></i></a>
								<br/>
								<a href="leaves.php" class="anchor" style="text-decoration: none;">Leaves</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="right_custom">
								<a href="addnoti.php" class="icon"><i class="fas fa-bell " style="font-size: 40px;"></i></a>
								<br/>
								<a href="addnoti.php" class="anchor" style="text-decoration: none;">Notification</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="right_custom">
							<a href="change.php" class="icon"><i class="fas fa-unlock-alt" style="font-size: 40px;"></i></a>
							<br/>
							<a href="change.php" class="anchor" style="text-decoration: none;">Change Password</a>
							</div>
						</div>			
					</div>
				</div>
			</div>
</body>
</html>
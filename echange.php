<?php 
require("session1.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>MARC | Change Password</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js">
	</script>
	<style type="text/css">
		table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align:left;
  padding:7px;
}

tr:nth-child(even){background-color: #f2f2f2}
tr:nth-child(odd){background-color: #f2f2f2}

th {
  background-color: #131517;
  color: white;
}
		.nav-item:hover{
			background-color:#6C6C6C;
			transition: 1s;
			color: black;
		}
		.navbar-nav{
			margin-left: 40px;
		}
		.col-md-3{
			background-color: lightgrey;
		}
		.col-md-12{
			margin: 0;
			padding: 0;
		}
		.nav-item{
			margin-left:5px;
			padding:4px; 
		}
		.navbar{
			background-image: linear-gradient(to right, #191a1c, #1e2023, #24262a, #292d31, #2f3339);
		}
		.nav-link{
			color: #fff;
			text-decoration: none;
		}
	</style>
	</head>
	<body>
<div class="container-fluid">
<div class="row">
	<div class="col-md-12">
<nav class="navbar navbar-expand-sm ">
  <!-- Brand/logo -->
    <img src="images/logo.jpg" alt="logo" style="width:120px;">
  </a>
  <!-- Links -->
  <ul class="navbar-nav">
  	<li class="nav-item">
      <a class="nav-link" href="eprofile.php" style="color:#fff;"><i class="fas fa-home" style="color:#fff;"></i>&nbsp;&nbsp;&nbsp;Home</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="ask.php" style="color:#fff;"><i class="fas fa-envelope-open-text"></i>&nbsp;&nbsp;&nbsp;Ask For Leave</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="myleave.php" style="color:#fff;"><i class="fab fa-twitch"></i>&nbsp;&nbsp;&nbsp;My Leaves</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="mysalary.php" style="color:#fff;"><i class="fas fa-money-check-alt"></i>&nbsp;&nbsp;&nbsp;My Salary</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="myattendance.php" style="color:#fff;"><i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;My Attendance</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="eupdate.php" style="color:#fff;"><i class="fas fa-address-card"></i>&nbsp;&nbsp;&nbsp;Update Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="echange.php" style="color:#fff;"><i class="fas fa-key"></i>&nbsp;&nbsp;&nbsp;Change Password</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="elogout.php" style="color:#fff;"><i class="fas fa-sign-out-alt" style="color:#fff;"></i>&nbsp;&nbsp;&nbsp;Log Out</a>
    </li>
  </ul>
</nav>
</div>
</div>
<div class="row">
<div class="col-md-12" style="background-image: linear-gradient(to right top, #f8bcde, #ecbce6, #dfbdec, #cfbef1, #bebff3, #c7bef1, #d0bdee, #d8bcea, #f3bbda, #ffbec6, #ffc6b5, #f9d1ac); height:558px;">
	<h1 style="text-align: center;color: #fff;font-family: arial; text-shadow: 2px 1px black; margin-top: 80px;">Change Password</h1>	
	<div class="col-md-5 offset-md-4">
	<form action="echangecode.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1" style="color:#000; font-size: 20px;font-family:arial;">Old Password</label>
    <input type="password" class="form-control"  placeholder="Old Password" name="op"required required minlength="1" maxlength="20">
</div>
  <div class="form-group">
    <label for="exampleInputPassword1" style="color:#000; font-size: 20px;font-family:arial;">New Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="New Password" name="np" required required minlength="1" maxlength="20">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" style="color:#000; font-size: 20px;font-family:arial;">Confirm New Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm New Password" name="cnp" required required minlength="1" maxlength="20">
  </div>
  <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure want to change?')">Change</button>
</form>
</div> 
</div>
</body>
</html>
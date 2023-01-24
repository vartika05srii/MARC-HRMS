<?php
require("session1.php");
$email=$_SESSION['user'];
include("connect.php");
$query="select * from tbl_employee where email='$email'";
$res=mysql_query($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>MARC | Employee</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js">
	</script>
	<style type="text/css">
		.nav-item:hover{
			background-color: #121115;
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
		.col-md-9{
			background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url('images/background3.jpg');
			background-size: 100% 100%;
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
	<div class="col-md-3" style="height:558px;background-image: linear-gradient(to right, #000000, #131112, #1e1c1f, #27272c, #2f3339);">
		<h3 style="text-align: center; color: #fff;">Welcome Employee</h3>
		<?php
		while($row=mysql_fetch_array($res,MYSQL_BOTH))
		{
		?>	
		<br/>
		<img src="employee/<?php echo $row['photo'];?>" height="100px" width="100px" style="margin-left: 100px; border-radius:50px; border:5px solid; " >
		<br/>
		<br/>
		<br/>
		<h3 style="color: #fff;margin-left: 70px;">Employee Info</h3>
			<span style="color: #fff;margin-left: 100px;"><?php echo $row['name'];?></span>	
		<br/>
	 <span style="color: #fff;margin-left: 100px;"><?php echo $row['fname']; ?></span>
	 <br/>
	 <span style="color: #fff;margin-left: 100px;"><?php echo $row['email']; ?></span>
	 <br/>
	 <span style="color: #fff;margin-left: 100px;"><?php echo $row['mobile']; ?></span>
	 <br/>
	 <span style="color: #fff;margin-left: 100px;"><?php echo $row['dob']; ?></span>
			
	<?php
	}
	?>
	</div>
	<div class="col-md-9">
		<h2 style="text-align: center;color: #fff">Latest Notice</h2>
		<marquee style="color: #fff;font-size:30px;"><?php 
		$q_noti="select * from tbl_noti order by notid desc limit 0,1";
		$r_noti=mysql_query($q_noti);
		if($row_noti=mysql_fetch_array($r_noti,MYSQL_BOTH)) {
			echo $row_noti['notice'];
		}
		?></marquee>
		<h1 style="color: #fff; text-align: center; margin-top: 200px; font-size: 60px; text-shadow:2px 2px black; font-family:arial;">MARC LABORATORY</h1>
		<h2 style="color: #fff; text-align: center; font-size:30px; text-shadow:1px 1px black;font-family:arial;">Human Resource Management System</h2>
	</div>
</div>
</div>
</body>
</html>

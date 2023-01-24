<?php
require("session.php");
include ("connect.php");
$query="select * from tbl_department";
$res=mysql_query($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>MARC | Add Employee</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="css/emystyle.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js">
	</script>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3" style="padding: 0;background-color: #343a40; min-height: 80px;">
			<div class="left_custom">
			<img src="images/user48.png" class="rounded mx-auto d-block" style="padding-top: 50px;" />
			<hr style="width: 255px; background-color:black;" />
			<h3 class="text-center" style="color: #fff;margin-top: 50px;">Welcome Admin</h3>		
			<br/>
			<div class="col-md-10 offset-md-1" style="margin-top: 5px;">
			<ul class="nav flex-column ">
  <li class="nav-item">
    <a class="nav-link  bg-dark" href="profile.php" style="color: #fff;border-bottom: 1px solid black"><i class="fas fa-home" style="color:#000;"></i>&nbsp;&nbsp;&nbsp;&nbsp;Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link bg-dark " href="depart.php" style="color: #fff;border-bottom: 1px solid black""><i class="fas fa-address-book" style="color:#000;"></i>&nbsp;&nbsp;&nbsp;&nbsp;Add Department</a>
  </li>
  <li class="nav-item">
    <a class="nav-link bg-dark " href="employee.php" style="color: #fff;border-bottom: 1px solid black""><i class="fas fa-address-card" style="color:#000;"></i>&nbsp;&nbsp;&nbsp;&nbsp;Add Employee</a>
  </li>
  <li class="nav-item">
    <a class="nav-link bg-dark " href="view.php" style="color: #fff;border-bottom: 1px solid black""><i class="fas fa-glasses" style="color:#000;"></i>&nbsp;&nbsp;&nbsp;&nbsp;View Employee</a>
  </li>
  <li class="nav-item">
    <a class="nav-link bg-dark " href="addsalary.php" style="color: #fff;border-bottom: 1px solid black""><i class="fas fa-money-check-alt" style="color:#000;"></i>&nbsp;&nbsp;&nbsp;&nbsp;Salary</a>
  </li>
  <li class="nav-item">
    <a class="nav-link bg-dark " href="addatt.php" style="color: #fff;border-bottom: 1px solid black""><i class="fas fa-book-open" style="color:#000;"></i>&nbsp;&nbsp;&nbsp;&nbsp;Attendance</a>
  </li>
  <li class="nav-item">
    <a class="nav-link bg-dark " href="viewatt.php" style="color: #fff;border-bottom: 1px solid black""><i class="fas fa-book-reader" style="color:#000;"></i>&nbsp;&nbsp;&nbsp;&nbsp;View Attendance</a>
  </li>
  <li class="nav-item">
    <a class="nav-link bg-dark " href="leaves.php" style="color: #fff;border-bottom: 1px solid black""><i class="fas fa-envelope" style="color:#000;"></i>&nbsp;&nbsp;&nbsp;&nbsp;Leaves</a>
  </li>
  <li class="nav-item">
    <a class="nav-link bg-dark " href="addnoti.php" style="color: #fff;border-bottom: 1px solid black""><i class="fas fa-bell" style="color:#000;"></i>&nbsp;&nbsp;&nbsp;&nbsp;Notification</a>
  </li>
  <li class="nav-item">
    <a class="nav-link bg-dark " href="logout.php" style="color: #fff;border-bottom: 1px solid black""><i class="fas fa-sign-out-alt" style="color:#000;"></i>&nbsp;&nbsp;&nbsp;&nbsp;LogOut</a>
  </li>
</ul>
</div>
		</div>
		</div>
		<div class="col-md-9" style="background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(images/img3a.jpg); background-size: 100% 100%;"> 	
			<div class="row">
				<div class="col-md-12" style="background-image: linear-gradient(to right top, #a6abb3, #7e898e, #5c6968, #404943, #282a22);min-height: 80px; ">
					<h3 class="float-left" style="padding-top: 15px; font-size: 38px; font-family:bodoni mt; margin-left: 90px;color:#fff;"> <i class="fas fa-address-card" id="icon" style="color:#c11935 "></i> Add Employee </h3>
					<img src="images/logo.jpg" class="img-fluid float-right" style="padding-top:10px;">
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 offset-md-1">
					<h1 style="text-align: center;color: #fff; text-shadow:1px 1px #000;">Add Employee</h1>
<form style="color: #fff;" action="empcode.php" method="post" enctype="multipart/form-data">

  <div class="form-group row">
    <label class="col-sm-2 col-form-label" style="font-size: 18px;">Employee Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" placeholder="Employee Name" required required minlength="2" maxlength="60">
    </div>
  </div>

  <div class="form-group row">
    <label  class="col-sm-2 col-form-label" style="font-size: 18px;">Father <br/>Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="fname" placeholder="Father Name" required required minlength="2" maxlength="60">
    </div>
  </div>

  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0" style="font-size: 18px;">Gender</legend>
      <div class="col-sm-10">
        <div class="custom-control custom-radio">
  <input type="radio" id="customRadio1" name="a" class="custom-control-input" value="Male" required>
  <label class="custom-control-label" for="customRadio1" style="font-size: 18px;">Male</label>
</div>
        <div class="custom-control custom-radio">
  <input type="radio" id="customRadio2" name="a" class="custom-control-input" value="Female" required>
  <label class="custom-control-label" for="customRadio2" style="font-size: 18px;">Female</label>
</div>
</div>
</div>
</fieldset>

<div class="form-group row">
    <label  class="col-sm-2 col-form-label" style="font-size: 18px;">DOB</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" name="dob" placeholder="DOB" required>
    </div>
  </div>

  <div class="form-group row">
    <label  class="col-sm-2 col-form-label" style="font-size: 18px;">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" placeholder="Email" required required minlength="1" maxlength="40">
    </div>
  </div>

  <div class="form-group row">
    <label  class="col-sm-2 col-form-label" style="font-size: 18px;">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" placeholder="Password" required required minlength="1" maxlength="20">
    </div>
  </div>

  <div class="form-group row">
    <label  class="col-sm-2 col-form-label" style="font-size: 18px;">Mobile</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="mobile" placeholder="Mobile" required required minlength="0" maxlength="13">
    </div>
  </div>

<div class="form-group">
  <label style="font-size: 18px;">Department</label>
    <select class="custom-select" name="dept" required> 
      <option value="">Select Department</option>
      <?php
        while($row=mysql_fetch_array($res,MYSQL_BOTH))
        {
        ?>
        <option value="<?php echo $row['depid']; ?>"><?php echo $row['department'];?></option>
        <?php
        }
        ?>
    </select>
</div>

  <div class="mb-3">
    <label for="validationTextarea" style="font-size: 18px;">Address</label>
    <textarea class="form-control" id="validationTextarea" placeholder="Address" name="address" required required minlength="1" maxlength="200"></textarea>
    </div>
  </div>

<div class="col-md-10 offset-md-1">
<div class="custom-file"> 
      <input type="file" class="custom-file-input" id="customFile" name="file" required>
      <label class="custom-file-label" for="customFile">Upload Photo</label>
    </div>
    </div>

<div class="col-md-3 offset-md-1">
<div class="mt-3">
      <button type="submit" class="btn btn-primary"  onclick="return confirm('Are you sure want to register')">Register</button>
    </div>  

</div>

	</div>
</form>
	</div>
</div>
</body>
</html>
<?php
require("session.php");
include("connect.php");
$query="select * from tbl_department";
$res=mysql_query($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>MARC | Add Department</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="css/deptstyle.css">
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
			<br/>
			<h3 class="text-center" style="color: #fff;margin-top: 10px;">Welcome To Admin</h3>		
			<br/>
			<div class="col-md-10 offset-md-1" style="margin-top: 5px;">
			<ul class="nav flex-column ">
  <li class="nav-item">
    <a class="nav-link active  bg-dark" href="profile.php" style="color: #fff;border-bottom: 1px solid black"><i class="fas fa-home" style="color:#000;"></i> Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link bg-dark " href="depart.php" style="color: #fff;border-bottom: 1px solid black""><i class="fas fa-address-book" style="color:#000;"></i> Add Department</a>
  </li>
  <li class="nav-item">
    <a class="nav-link bg-dark " href="employee.php" style="color: #fff;border-bottom: 1px solid black""><i class="fas fa-address-card" style="color:#000;"></i> Add Employee</a>
  </li>
  <li class="nav-item">
    <a class="nav-link bg-dark " href="view.php" style="color: #fff;border-bottom: 1px solid black""><i class="fas fa-glasses" style="color:#000;"></i> View Employee</a>
  </li>
  <li class="nav-item">
    <a class="nav-link bg-dark " href="addsalary.php" style="color: #fff;border-bottom: 1px solid black""><i class="fas fa-money-check-alt" style="color:#000;"></i> Salary</a>
  </li>
  <li class="nav-item">
    <a class="nav-link bg-dark " href="addatt.php" style="color: #fff;border-bottom: 1px solid black""><i class="fas fa-book-open" style="color:#000;"></i> Attendance</a>
  </li>
  <li class="nav-item">
    <a class="nav-link bg-dark " href="viewatt.php" style="color: #fff;border-bottom: 1px solid black""><i class="fas fa-book-reader" style="color:#000;"></i> View Attendance</a>
  </li>
  <li class="nav-item">
    <a class="nav-link bg-dark " href="leaves.php" style="color: #fff;border-bottom: 1px solid black""><i class="fas fa-envelope" style="color:#000;"></i> Leaves</a>
  </li>
  <li class="nav-item">
    <a class="nav-link bg-dark " href="addnoti.php" style="color: #fff;border-bottom: 1px solid black""><i class="fas fa-bell" style="color:#000;"></i> Notification</a>
  </li>
  <li class="nav-item">
    <a class="nav-link bg-dark " href="logout.php" style="color: #fff;border-bottom: 1px solid black""><i class="fas fa-sign-out-alt" style="color:#000;"></i>&nbsp;&nbsp;&nbsp;&nbsp;LogOut</a>
  </li>
</ul>
</div>
			</div>
		</div>
		<div class="col-md-9" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/img2.jpg); background-size: 100% 100%;">
			<div class="row">
				<div class="col-md-12" style="background-image: linear-gradient(to right top, #a6abb3, #7e898e, #5c6968, #404943, #282a22);min-height: 80px; ">
					<h3 class="float-left" style="padding-top: 15px; font-size: 38px; font-family:bodoni mt; margin-left: 90px;color:#fff;"> <i class="fas fa-address-book" id="icon"></i> Add Department </h3>
					<img src="images/logo.jpg" class="img-fluid float-right" style="padding-top:10px;  ">
				</div>
			</div>
<form class="form-horizontal" action="departcode.php" method="post">
	<div class="form-group row">
    <label  class="col-md-2 col-form-label" style="
      margin-top: 100px;color: #fff; font-size: 19px; font-family:Arial;">Add Department</label>
    <div class="col-md-8">
      <input type="text" class="form-control"  placeholder="Add Department" name="depart" style="
      margin-top: 100px;" required required minlength="2" maxlength="20"/>
    </div>
    <div class="col-md-3 offset-md-1"><input type="submit" class="btn btn-primary" value="Add" style="margin-left:290px; padding-right:100px;padding-left:100px; margin-top:10px;" onclick="return confirm('Are you sure want to Add?')"></div>
</form>
<div class="col-md-12" style="margin-top: 100px;">
<table border="1px" align="center">
	<tr>
		<th>S.No</th>
		<th>Department</th>
		<th>Date</th>
		<th>Delete</th>
		<th>Update</th>
	</tr>
<?php
$a=1;	
while($row=mysql_fetch_array($res,MYSQL_BOTH))
{
?>
<tr>
	<td><?php echo $a;?></td>
	<td><?php echo $row['department']; ?></td>
	<td><?php echo $row['date']; ?></td>
	<td><a href="delete.php?id=<?php echo $row['depid'];?>" onclick="return confirm('Are you sure want to delete?')"><i class="fas fa-trash-alt"></i></a></td>
	<td><a href="update.php?id=<?php echo $row['depid'];?>"><i class="fas fa-pen"></i></a></td>
</tr>
<?php
$a++;
}	
?>
</table>
</div>
</div>
</body>
</html>
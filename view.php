<?php
require("session.php");
include ("connect.php");
$query="select * from tbl_employee";
$res=mysql_query($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>MARC | View Employee</title>
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
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
tr:nth-child(odd){background-color: #f2f2f2}

th {
  background-color: #131517;
  color: white;
}
.col-md-12{
	margin:0;
	padding:0;
	}
	.nav-item{
		margin-left: 15px;
		margin-bottom: -5px;
		margin-top: -5px;
	}
</style>
</head>
<body>
	<div class="container-fluid"> 	
			<div class="row">
				<div class="col-lg-12" style="background-image: linear-gradient(to right top, #a6abb3, #7e898e, #5c6968, #404943, #282a22);min-height: 80px; ">
					<h3 class="float-left" style="padding-top: 15px; font-size: 38px; font-family:bodoni mt; margin-left: 90px;color:#fff;"> <i class="fas fa-glasses id="icon" style="color:#c11935 "></i> View Employee </h3>
					<img src="images/logo.jpg" class="img-fluid float-right" style="padding-top:10px;">
				</div>
			</div>
			<div class="row">
	<div class="col-md-12">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark"">
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
    <a class="nav-link  bg-dark" href="profile.php" style="color: #fff;"><i class="fas fa-home" style="color:#000; border-bottom: 0;"></i> Home</a>
  </li>
     <li class="nav-item">
    <a class="nav-link bg-dark " href="depart.php" style="color: #fff;""><i class="fas fa-address-book" style="color:#000;"></i> Add Department</a>
  </li>
    <li class="nav-item">	
    <a class="nav-link bg-dark " href="employee.php" style="color: #fff;""><i class="fas fa-address-card" style="color:#000;"></i> Add Employee</a>
  </li>
    <li class="nav-item">
    <a class="nav-link bg-dark " href="view.php" style="color: #fff;""><i class="fas fa-glasses" style="color:#000;"></i> View Employee</a>
  </li>
    <li class="nav-item">
    <a class="nav-link bg-dark " href="addsalary.php" style="color: #fff;""><i class="fas fa-money-check-alt" style="color:#000;"></i> Salary</a>
  </li>
   <li class="nav-item">
    <a class="nav-link bg-dark " href="addatt.php" style="color: #fff;""><i class="fas fa-book-open" style="color:#000;"></i> Attendance</a>
  </li>
     <li class="nav-item">
    <a class="nav-link bg-dark " href="viewatt.php" style="color: #fff;""><i class="fas fa-book-reader" style="color:#000;"></i> View Attendance</a>
  </li>
  <li class="nav-item">
    <a class="nav-link bg-dark " href="leaves.php" style="color: #fff;""><i class="fas fa-envelope" style="color:#000;"></i> Leaves</a>
  </li>
  <li class="nav-item">
    <a class="nav-link bg-dark " href="addnoti.php" style="color: #fff;""><i class="fas fa-bell" style="color:#000;"></i> Notification</a>
  </li>
  <li class="nav-item">
  <a class="nav-link bg-dark " href="logout.php" style="color: #fff;""><i class="fas fa-sign-out-alt" style="color:#000;"></i> LogOut</a>
  </li>
  </ul>
</nav>
</div>
</div>
<div class="row">
	<table border="1px solid">
	<tr>
		<th>S.No</th>
		<th>Employee Name</th>
		<th>Father Name</th>
		<th>Gender</th>
		<th>Email</th>
		<th>Password</th>
		<th>Mobile</th>
		<th>Department</th>
		<th>Address</th>
		<th>Uploaded Photo</th>
		<th>Date</th>
		<th>Delete</th>
	</tr>
	<?php
	$a=1;
	while ($row=mysql_fetch_array($res,MYSQL_BOTH)) 
	{
	?>	
	<tr>
		<td><?php echo $a;?></td>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row['fname'];?></td>
		<td><?php echo $row['gender'];?></td>
		<td><?php echo $row['email'];?></td>
		<td>xxxxxxxxxxx</td>
		<td><?php echo $row['mobile'];?></td>
		<?php $did=$row['depid'];
			$query2="select * from tbl_department where depid='$did'";
			$res2=mysql_query($query2);
			if($row2=mysql_fetch_array($res2,MYSQL_BOTH))
			{
				$dname=$row2['department'];
			}
		?>
		<td><?php echo $dname;?></td>
		<td><?php echo $row['address'];?></td>
		<td><img src="employee/<?php echo $row['photo'];?>" height="100px" width="100px"/></td>
		<td><?php echo $row['date'];?></td>
		<td><a href="delete1.php?id=<?php echo $row['empid'];?>" onclick="return confirm('Are you sure want to delete?')"><i class="fas fa-trash-alt"></i></a></td>
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
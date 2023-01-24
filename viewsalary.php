<?php
require("session.php");
$con=include("connect.php");
if($con==true)
{
	//echo "connection created";
}
else
{
	//echo "connection error";
	//die();
}
?>
<html>
	<head>
		<title>Marc | View Salary</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js">
	</script>
	<style>
		body{
			background-image: linear-gradient(to right top, #a2a8b3, #858c9b, #687184, #4d586d, #333f57);
		}
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
					<h3 class="float-left" style="padding-top: 15px; font-size: 38px; font-family:bodoni mt; margin-left: 90px;color:#fff;"> <i class="fas fa-money-check" id="icon" style="color:#c11935 "></i> View Salary</h3>
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
	<center>
	<div class="row">
	<table border="1px solid">
			<thead>
		<tr>
			<th>Sr.No</th>
			<th>Emp Name</th>
			<th>Department</th>
			<th>Basic Salary</th>
			<th>Calculate($)</th>
		</tr>
		</thead>
		<tbody>
			<?php
			$a=1;
			$query1="select * from tbl_salary";
			$res1=mysql_query($query1);
			while ($row1=mysql_fetch_array($res1,MYSQL_BOTH)) 
			{
				//print_r($row1);
				// [sal_id][depid][paygrade][basic]
				//create a local varible for further use 
				 $sal_id=$row1['sal_id'];
				$depid=$row1['depid'];
				$paygrade=$row1['paygrade'];
				$basic=$row1['basic'];
				//echo $sal_id;
				//echo $depid;
				//echo $paygrade;
				//echo $basic;
				$query2="select * from tbl_employee where depid='$depid'";
				$res2=mysql_query($query2);
				while ($row2=mysql_fetch_array($res2,MYSQL_BOTH))
				 {
					//print_r($row2); 
					$empid=$row2['empid'];
					$name=$row2['name'];
					$dpid=$row2['depid'];
					//echo $empid;
					//echo $name;
					//echo $dpid;
					//now make a query to get department name
					$query3="select * from tbl_department where depid='$dpid'";
					$res3=mysql_query($query3);
					 if($row3=mysql_fetch_array($res3,MYSQL_BOTH))
					 {
					 	$deptname=$row3['department'];  
					 	// echo $deptname;
					}
					?>					
				<tr>
				<td><?php echo $a;?></td>
				<td><?php echo $name;?></td>
				<td><?php echo $deptname;?></td>
				<td><?php echo $basic;?></td>
				<td><a href="calcsalary.php?empid=<?php echo $empid;?>&dept_id=<?php echo $dpid;?>&paygrade=<?php echo $paygrade; ?>">Calculate</a></td>
			</tr>
			<?php
			$a++;
				}//inner while
			}//outer while
			?>
			
		</tbody>
</table>
	</div>
	</center>
	</div>
	</body>
</html>

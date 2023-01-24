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
date_default_timezone_set("Asia/Kolkata");
$set_date=date('d-m-Y');
//echo $set_date;
$set_time=date('h:i:s');
//echo $set_time;
@$dept_id=$_REQUEST['dept_id'];
//echo $dept_id;
//--code for getting the records of all employee`s whose department is selected.

?>
<!DOCTYPE html>
<html>
<head>
	<title>MARC | View Attendance</title>
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
	<div class="container-fluid"	> 	
			<div class="row">
				<div class="col-lg-12" style="background-image: linear-gradient(to right top, #a6abb3, #7e898e, #5c6968, #404943, #282a22);min-height: 80px; ">
					<h3 class="float-left" style="padding-top: 15px; font-size: 38px; font-family:bodoni mt; margin-left: 90px;color:#fff;"> <i class="fas fa-book-reader id="icon" style="color:#c11935 "></i> View Attendance </h3>
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
<br/>
	<div class="form-group">
  					  <select class="custom-select col-lg-2 offset-lg-5" id="sel_dept" onchange="changedept()" style="font-family:arial;font-size: 18px;"> 
   					   <option value="">--select department--</option>
    				  <?php  
						$q_dept="select * from tbl_department";
						$res_dept=mysql_query($q_dept);
						while($row_dept=mysql_fetch_array($res_dept,MYSQL_BOTH))
						{
						?>
      				  <option value="<?php echo $row_dept['depid']; ?>"><?php  echo $row_dept['department']; ?></option>
      				  <?php 
    	
    				}
  
 				   	 ?>
  				  </select>
				</div>	
	
	<div class="row">
	<table border="1px solid">
	<thead>
		<tr>
			<th>Sr.No</th>
			<th>Emp Name</th>
			<th>Department</th>
			<th>Status</th>
			<th>date</th>
			<th>time</th>
		</tr>
		</thead>
	<tbody>
			<?php
			$a=1;
			$query_info="select * from tbl_employee where depid='$dept_id'";
			$res_info=mysql_query($query_info);
			while($row_info=mysql_fetch_array($res_info,MYSQL_BOTH)) 
			{
				$empid=$row_info['empid'];
				$dep=$row_info['depid'];
				//echo $empid;
				$query_att="select * from tbl_attendance where empid=$empid";
				$res_att=mysql_query($query_att);
				while($row_att=mysql_fetch_array($res_att,MYSQL_BOTH))
				{
			?>	
				<tr><td><?php echo $a;?></td>
					<td><?php $empid=$row_att['empid'];
				$q_name="select * from tbl_employee where empid='$empid'";
				$res_qname=mysql_query($q_name);
				if($row_qname=mysql_fetch_array($res_qname,MYSQL_BOTH))
				{
					echo $row_qname['name'];
					$dep_id=$row_qname['depid'];
					// echo $depid;
				}
					?></td>
					<td><?php  
						$q_depid="select * from tbl_department where depid='$dep'";
				$res_depid=mysql_query($q_depid);
				if ($row_depid=mysql_fetch_array($res_depid,MYSQL_BOTH)) {
				echo $row_depid['department'];
				}
					?></td>
					<td><?php $status=$row_att['status'];
						if($status=="present")
				{
					?>
					<img src="images/bluetick.png" height="20px" width="20px">
				<?php
				}
				else
				{
					?>
					<img src="images/redcross.png" height="20px" width="20px">
				<?php
				}
					?></td>
					<td><?php echo $row_att['date'];?></td>
					<td><?php echo $row_att['time'];?></td>
				</tr>
				<?php
					$a++;
				}
			
			}
			?>
		</tbody>
</table>
</div>
	</center>
	<script>
	var sel_dept=document.getElementById("sel_dept");
	function changedept()
	{	var deptid=sel_dept.value
		//alert(deptid);
		//now make query string
		//addatt.php?dept_id=
		window.location.href='viewatt.php?dept_id='+deptid;
		
	}
	</script>

	</body>
</html>
<?php
require("session1.php");
$email=$_SESSION['user'];
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
$query="select * from tbl_employee where email='$email'";
$res=mysql_query($query);
if ($row=mysql_fetch_array($res,MYSQL_BOTH))
 {
	$empid=$row['empid'];
	$depid=$row['depid'];
}
@$dept_id=$_REQUEST['dept_id'];
//echo $dept_id;
//--code for getting the records of all employee`s whose department is selected.

?>
<!DOCTYPE html>
<html>
<head>
	<title>MARC | My Attendance</title>
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
<div class="col-md-12" style="background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url('images/background7.jpg'); background-size: 100% 100%; height:558px;">
	<h1 style="text-align: center;color: #fff;font-family: arial; text-shadow: 2px 1px black;">My Attendance</h1>
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
			$query_info="select * from tbl_attendance where empid='$empid'";
			$res_info=mysql_query($query_info);
			if($row_info=mysql_fetch_array($res_info,MYSQL_BOTH)) 
			{
				$empid=$row_info['empid'];
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
						$q_depid="select * from tbl_department where depid='$dep_id'";
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
</div>
	</body>
</html>
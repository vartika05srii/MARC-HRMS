<?php
require("session1.php");
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
$email=$_SESSION['user'];
$query="select * from tbl_employee where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$empid=$row['empid'];
	$depid=$row['depid'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>MARC | My Leave</title>
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
<div class="col-md-12" style="background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url('images/background6.jpg'); background-size: 100% 100%; height:558px;">
	<h1 style="text-align: center;color: #fff;font-family: arial; text-shadow: 2px 1px black;">My Salary</h1>
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
				$query2="select * from tbl_employee where depid='$depid' and empid='$empid'";
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
</div>
</body>
</html>

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
<!DOCTYPE html>
<html>
<head>
	<title>MARC | Add Salary</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js">
	</script>
  <style type="text/css">
    #form{
      border: 1px solid transparent;
      position: absolute;
      top: 30%;
      left: 20%;
      width: 60%;
    }
  </style>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3" style="padding: 0;background-color: #343a40; min-height: 80px;">
			<div class="left_custom">
			<img src="images/user48.png" class="rounded mx-auto d-block" style="padding-top: 50px;" />
			<hr style="width: 255px; background-color:black;" />
			<br/>
			<h3 class="text-center" style="color: #fff;margin-top: 10px;">Welcome Admin</h3>		
			<br/>
			<div class="col-md-10 offset-md-1" style="margin-top: 5px;">
			<ul class="nav flex-column ">
  <li class="nav-item">
    <a class="nav-link active  bg-dark" href="profile.php" style="color: #fff;border-bottom: 1px solid black"><i class="fas fa-home" style="color:#000;"></i>&nbsp;&nbsp;&nbsp;&nbsp;Home</a>
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
    <a class="nav-link bg-dark " href="addatt.php" style="color: #fff;border-bottom: 1px solid black""><i class="fas fa-book-open" style="color:#000;"></i>&nbsp;&nbsp;&nbsp;&nbsp;Attendence</a>
  </li>
  <li class="nav-item">
    <a class="nav-link bg-dark " href="viewatt.php" style="color: #fff;border-bottom: 1px solid black""><i class="fas fa-book-reader" style="color:#000;"></i>&nbsp;&nbsp;&nbsp;&nbsp;View Attendence</a>
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
		<div class="col-md-9" style="background-image: linear-gradient(to right top, #a2a8b3, #858c9b, #687184, #4d586d, #333f57); background-size: 100% 100%;">
			<div class="row">
				<div class="col-md-12" style="background-image: linear-gradient(to right top, #a6abb3, #7e898e, #5c6968, #404943, #282a22);min-height: 80px; ">
					<h3 class="float-left" style="padding-top: 15px; font-size: 38px; font-family:bodoni mt; margin-left: 90px;color:#212529;"><i class="fas fa-money-check-alt" id="icon" style="color: #c11935;"></i> Add Salary </h3></h3>
					<img src="images/logo.jpg" class="img-fluid float-right" style="padding-top:10px;  ">
				</div>
        <div id=form>
				<!--STARTING FORM OF ADD SALARY-->
        <form action="sal_code.php" method="post">
					
					<div class="form-group">
 					 <label style="font-family:arial;font-size: 25px;"	>Select Department</label>
  					  <select class="custom-select" name="dept_id" required=""> 
   					   <option value="">--select--</option>
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

					<div class="form-group row">
    				<label  class="col-md-12 col-form-label col-form-label-lg" style="font-family:arial;font-size: 25px;">Add Paygrade *</label>
    				<div class="col-md-12">
      				<input type="text" class="form-control form-control-lg"  placeholder="Add Paygrade" name="paygrade" required/>.00/- INR (Per Day )
    				</div>
  					</div>

  					<div class="form-group row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure want to Add')">Add</button>
    </div>
  </div>
				</form><!--ENDING FORM OF ADD SALARY-->
        <!--STARTING FORM OF VIEW SALARY-->
  <form action="viewsalary.php" method="post">
         <div class="form-group row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">View Salary</button>
    </div>
  </div>
</form><!--ENDING FORM OF VIEW SALARY-->
      </div>
			</div>
		</div>
</body>
</html>  
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
$emailp=$_SESSION['user'];
$queryp="select * from tbl_employee where email='$email'";
$resp=mysql_query($queryp);
if ($row=mysql_fetch_array($resp,MYSQL_BOTH)) 
{

?>
<!DOCTYPE html>
<html>
<head>
	<title>MARC | Update Profile</title>
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
<div class="col-md-12" style="background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url('images/background8.jpg'); background-size: 100% 100%; height:710px;">
	<h1 style="text-align: center;color: #fff;font-family: arial; text-shadow: 2px 1px black;">Update profile</h1>
	<div id=form>
		<div class="col-md-5 offset-md-4">
				<form action="eupcode.php" method="post">
					<div class="form-group row">
    				<label  class="col-md-12 col-form-label col-form-label-lg" style="color:#fff; font-size: 20px;font-family:arial;">Name</label>
    				<div class="col-md-12">
      				<input type="text" class="form-control form-control-lg"  placeholder="Name" name="name" value="<?php echo $row['name']; ?>" required minlength="2" maxlength="60"/>
    				</div>
  					</div>
  					<div class="form-group row">
    				<label  class="col-md-12 col-form-label col-form-label-lg" style="color:#fff; font-size: 20px;font-family:arial;">Father Name</label>
    				<div class="col-md-12">
      				<input type="text" class="form-control form-control-lg" placeholder="Father Name" name="fname" value="<?php echo $row['fname']; ?>" required required minlength="2" maxlength="60"/>
    				</div>
  					</div>
  					<fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0"  style="color:#fff; font-size: 20px;font-family:arial;" required>Gender</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="a"  value="Male" <?php if($row['gender']=='Male'){?> checked <?php } ?>>
          <label class="form-check-label" for="gridRadios1" style="color:#fff; font-size: 20px;font-family:arial;">
            Male
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="a"  value="Female" <?php if($row['gender']=='Female'){?> checked <?php } ?>>
          <label class="form-check-label" for="gridRadios2"  style="color:#fff; font-size: 20px;font-family:arial;">
            Female </label>
        </div>
      </div>
    </div>
		<div class="form-group row">
  		<label  class="col-md-12 col-form-label col-form-label-lg" style="color:#fff; font-size: 20px;font-family:arial;">Mobile</label>
  		<div class="col-md-12">
 		<input type="number" class="form-control form-control-lg"  placeholder="Mobile" name="mobile" value="<?php echo $row['mobile']; ?>" required required minlength="0" maxlength="13"/>
    	</div>
  		</div>

  		<div class="form-group row">
  		<label  class="col-md-12 col-form-label col-form-label-lg" style="color:#fff; font-size: 20px;font-family:arial;">DOB</label>
  		<div class="col-md-12">
 		<input type="date" class="form-control form-control-lg"  placeholder="date" name="dob" value="<?php echo $row['date']; ?>"required/>
    	</div>
  		</div>
  				
<div class="form-group">
    <label for="exampleFormControlTextarea1" style="color:#fff; font-size: 20px;font-family:arial;">Address</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="address" required required minlength="1" maxlength="200"><?php echo $row['address'];?></textarea>
  </div>

  </fieldset>
  	<div class="form-group row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure want to update?')">Update</button>
    </div>
  </div>
	</form>
	<?php 
} 
	?>
</div>
      </div>
</div>
</div>
</div>
</body>
</html>
<?php
session_start();
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
$name=$_POST['name'];
$fname=$_POST['fname'];
$gender=$_POST['a'];
$dob=$_POST['dob'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$query="update tbl_employee set name='$name',fname='$fname',gender='$gender',mobile='$mobile',dob='$dob',address='$address' where email='$email'";
mysql_query($query);
header("Location:eupdate.php");
?>
<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];

include("connect.php");
$query="select * from tbl_employee where email='$email' and password='$password'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
	$_SESSION['user']=$email;
	header("Location:eprofile.php");
}
else
{	$_SESSION['result']="1";
	header("Location:elogin.php?msg=1");
}
?>

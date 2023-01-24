<?php
session_start();
$op=$_POST['op'];
//echo $op;
$np=$_POST['np'];
 //echo $np;
$cnp=$_POST['cnp'];
//echo $cnp;
$email=$_SESSION['user'];
include ("connect.php");
$query="select password from tbl_employee where email='$email'";
$res=mysql_query($query);
if ($row=mysql_fetch_array($res,MYSQL_BOTH)) 
{
	$pp=$row['password'];
	//echo $pp;
}
if($pp==$op)
{
if($op==$np)
{
	 echo "no change";
	header("Location:echange.php");
}
else if($np==$cnp)
{
	echo "change hoga";
	$query2="update tbl_employee set password='$cnp' where email='$email'";
	mysql_query($query2);
	session_destroy();
	header("Location:elogin.php?msg=4");
}
else
{
	echo "no change";
	header("Location:echange.php");
}
}
else
{
	echo "no change";
	header("Location:echange.php");
}
?>
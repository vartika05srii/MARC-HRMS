<?php
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
$deptid=$_POST['dept_id'];
$paygrade=$_POST['paygrade'];
//echo $deptid;
//echo $paygrade;
$basic=30*$paygrade;
//echo $basic;
//validation for checking the dept_id
$query="select * from tbl_salary where depid='$deptid'";
$res=mysql_query($query);
$count=mysql_num_rows($res);
if($count>=1)
{
// multiple records exist
	echo"<script>alert('Salary already added');window.location.href='addsalary.php'</script>";
}
else{
$insert="insert into tbl_salary(depid,paygrade,basic) values('$deptid','$paygrade','$basic')";
$check=mysql_query($insert);
if($check==true)
{
	echo "<script>alert('Paygrade add successfully');window.location.href='addsalary.php'</script>";
}
}//esle closing
?>
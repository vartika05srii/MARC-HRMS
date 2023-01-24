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
$attd_id=$_REQUEST['attd_id'];
echo $attd_id;
$query_update="update tbl_attendance set status='present' where	attd_id='$attd_id'";
$check=mysql_query($query_update);
if($check==true)
{
	header("Location:addatt.php");
}
?>
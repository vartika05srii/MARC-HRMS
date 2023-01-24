<?php
$id=$_REQUEST['id'];
//echo $id;
include("connect.php");
$query="delete from tbl_employee where empid='$id'";
mysql_query($query);
header("location:view.php");
?>
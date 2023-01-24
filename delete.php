<?php
$id=$_REQUEST['id'];
echo $id;
include("connect.php");
$query="delete from tbl_department where depid='$id'";
mysql_query($query);
header("location:depart.php");
?>
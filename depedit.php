<?php
$id=$_POST['id'];
$dept=$_POST['depart'];

include("connect.php");
$query="update tbl_department set department='$dept' where depid='$id'";
mysql_query($query);
header("Location:depart.php");
?>
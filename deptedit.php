<?php
$id=$_POST['id'];
$dept=$_POST['depart'];


mysql_connect("localhost","root","");
mysql_select_db("marc");
$query="update tbl_department set department='$dept' where depid='$id'";
mysql_query($query);
header("Location:depart.php");
?>
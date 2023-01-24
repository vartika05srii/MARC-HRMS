<?php
$depart=$_POST['depart'];
// echo $depart;
mysql_connect("localhost","root","");
mysql_select_db('marc');
$query="insert into tbl_department(department,date) values('$depart',curdate())";
mysql_query($query);
header("Location:depart.php");
?>
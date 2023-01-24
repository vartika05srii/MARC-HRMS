<?php
$noti=$_POST['noti'];
//echo $noti;
include ("connect.php");
$query="insert into tbl_noti(notice,date) values('$noti',curdate())";
mysql_query($query);
header("Location:addnoti.php");
?>
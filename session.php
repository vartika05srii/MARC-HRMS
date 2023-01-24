<?php
session_start();
if($_SESSION['admin']==""){
$_SESSION['result']="3";
header("Location:index.php");
}
?>
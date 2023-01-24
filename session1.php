<?php
session_start();
if($_SESSION['user']==""){
$_SESSION['result']="3";
header("Location:elogin.php");
}
?>
<?php
session_start();
if ($_SESSION['user']=="") {
	$_SESSION['result']="1";
	header("Location:elogin.php");
}
else{
 	$_SESSION['result']="2";
 	header("Location:elogin.php");
 }
?>
<?php
session_start();
if ($_SESSION['admin']=="") {
	$_SESSION['result']="1";
	header("Location:index.php");

}
 else{
 	$_SESSION['result']="2";
 	header("Location:index.php");
 }
?>
<?php 
session_start();
if($_SESSION['ad_id']){	
	session_destroy();
	header("location:../index.php");
}
else{
	header("location:../index.php");
}
?>
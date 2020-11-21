<?php require_once 'admin_session.php';
	// Check Admin Permission
	if(isset($_SESSION['adminAccess'])){
		echo "<script> document.location.href='dashboard.php';</script>";
	}else{
		echo "<script> document.location.href='adminlogin.php?permissionError=InvalidPermission';</script>";
	}
 ?>
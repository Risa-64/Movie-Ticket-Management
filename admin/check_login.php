<?php
session_start();
require_once('../dbconnect.php');

$rownum=0;
$email = ($_POST['email']);
$password = md5($_POST['password']);

$sql="SELECT * FROM tb_admin WHERE a_email='".$email."' && a_password ='".$password."'";
$result=mysqli_query($db, $sql);
if(!empty($result)){
	$rownum=mysqli_num_rows($result);	
}

if($rownum>0){
	$_SESSION['adminAccess']="Permit";
	echo "<script> document.location.href='dashboard.php?lstatus=success';</script>";
 }else{
	echo "<script> document.location.href='adminlogin.php?lfailed=failed';</script>";
 }
?>
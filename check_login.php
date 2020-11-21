<?php
session_start();
require_once('dbconnect.php');

$rownum=0;
$email = ($_POST['email']);
$password = md5($_POST['password']);
$sql="SELECT * FROM tb_user WHERE u_email='".$email."' && u_password ='".$password."'";
$result=mysqli_query($db, $sql);
if(!empty($result)){
	$rownum=mysqli_num_rows($result);	
}

if($rownum>0){
	$_SESSION['userAccess']="Permit";
    while ($row=mysqli_fetch_assoc($result)){
    	$_SESSION['userName']=$row['u_name'];
    	$_SESSION['userId']=$row['u_id'];
    }
	echo "<script> document.location.href='index.php?lstatus=success';</script>";
 }else{
	echo "<script> document.location.href='login.php?lfailed=failed';</script>";
 }
?>
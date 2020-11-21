<?php
require_once('dbconnect.php');
if($_POST['u_password']==$_POST['u_password_cnf']){
$u_name = $_POST['u_name'];
$u_email = $_POST['u_email'];
$u_phone = $_POST['u_phone'];
$u_password = md5($_POST['u_password']);

$sql="INSERT INTO tb_user(u_name, u_email, u_phone, u_password) VALUES ('$u_name', '$u_email', '$u_phone', '$u_password')";
$result=mysqli_query($db, $sql);

if($result){
	echo "Success";
	echo "<script> document.location.href='login.php?regsuccess=success';</script>";
 }else{
	echo "<script> document.location.href='registration.php?lfailed=failed';</script>";
 }
}else{
	echo "<script> document.location.href='registration.php?cnfpassword=failed';</script>";
}
?>
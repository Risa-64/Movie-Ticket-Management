<?php
require('../dbconnect.php');
date_default_timezone_set('Asia/Dhaka');
$id = base64_decode($_GET['id']);

$sql="UPDATE tb_ticket SET t_status='1' WHERE t_id='$id'";
$result=mysqli_query($db, $sql);

echo "<script> document.location.href='pending_list.php?tstatus=confirmed';</script>";
?>
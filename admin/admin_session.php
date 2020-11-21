<?php session_start();
if(!isset($_SESSION['adminAccess'])){
    echo "<script> document.location.href='adminlogin.php';</script>";
}
?>
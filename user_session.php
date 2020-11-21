<?php session_start();
if(!isset($_SESSION['userAccess'])){
    echo "<script> document.location.href='login.php';</script>";
}
?>
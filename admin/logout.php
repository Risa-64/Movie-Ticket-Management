<?php
session_start();
unset($_SESSION['adminAccess']);
echo "<script> document.location.href='index.php';</script>";
?>
<?php
session_start();
unset($_SESSION['userAccess']);
echo "<script> document.location.href='index.php';</script>";
?>
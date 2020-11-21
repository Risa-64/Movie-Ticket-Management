<?php
include('user_session.php');
require_once('dbconnect.php');
date_default_timezone_set('Asia/Dhaka');
$movie_id = ($_POST['movie_id']);
$time_id = ($_POST['time_id']);
$phone_number = ($_POST['phone_number']);
$total_ticket_price = ($_POST['total_ticket_price']);
$payment_info = ($_POST['payment_info']);
$userId = ($_SESSION['userId']);
$booking_date = date('Y-m-d');
$booking_time = date('h:ia');
$ticket_number = date('Ymdhi').rand(0,99);

$sql="INSERT INTO tb_ticket(t_number, movie_id, time_id, t_phone, user_id, booking_date, booking_time, t_payment_info, t_amount, t_status) VALUES ('$phone_number', '$movie_id', '$time_id', '$phone_number', '$userId', '$booking_date', '$booking_time', '$payment_info', '$total_ticket_price', '0')";
$result=mysqli_query($db, $sql);

$ticket_id = mysqli_insert_id($db);

foreach ($_POST['seat_ids'] as $value) {
	$sql="INSERT INTO tb_ticket_seat(ticket_id, seat_id, time_id, movie_id) VALUES ('$ticket_id', '$value', '$time_id', '$movie_id')";
	$result=mysqli_query($db, $sql);
}
unset($_SESSION['bookingProccess']);
echo "<script> document.location.href='print_ticket.php?ticket_id=".base64_encode($ticket_id)."';</script>";
?>
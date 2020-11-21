<?php
 include('user_session.php');
 include('dbconnect.php');

if (isset($_GET['ticket_id'])){
$ticket_id = base64_decode($_GET['ticket_id']);

$result = "SELECT * FROM tb_ticket LEFT JOIN tb_movie ON tb_movie.m_id=tb_ticket.movie_id LEFT JOIN tb_time ON tb_time.ti_id=tb_ticket.time_id WHERE tb_ticket.t_id = $ticket_id limit 0,1";
if ($result=mysqli_query($db,$result))
{
  while ($row=mysqli_fetch_assoc($result))
  {
    $ticket_number = $row['t_number'];
    $booking_date = $row['booking_date'];
    $booking_time = $row['booking_time'];
    $phone_number = $row['t_phone'];
    $payment_info = $row['t_payment_info'];
    $t_amount = $row['t_amount'];
    $ti_date = $row['ti_date'];
    $ti_time = $row['ti_time'];
    $movie_name = $row['m_name'];
  }
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ticket</title>
</head>
<body>
	<style type="text/css">
		@page { sheet-size: A4; }
		.table2{
			border-collapse: collapse;
			width: 100%;
		}
		.table5{
			width: 100%;
		}
		.table2 td{
            font-size: 16px;
			padding: 5px 5px;
		}
		.table2 th{
			font-size: 16px;
			padding: 3px 1px;
		}
		.table3{
			border-collapse: collapse;
			text-align: center;
			width: 100%;
			text-decoration: underline;
			font-weight: bold;
			font-size: 11px;
		}
		.table3 td{
			text-decoration: underline;
		}
		.table1{
			text-align: left;
			width: 100%;
		}
		.caddress{
			font-size: 11px;
		}
		.customerInfo{
			text-align: left;
		}
		.piDetails{
			text-align: right;
		}
		.table4{
			width: 100%;
			border-collapse: collapse;
			font-size: 13px;
		}
		.table4 td,th{
			border: 1px solid #333;
			padding: 6px 5px;
		}
		p{
			font-size: 11px;
		}
		.bankInfo{
			width: 100%;
			font-size: 11px;
		}
	</style>
    <table class="table2">
        <tr>
            <td style="text-align: center;">
                <h1><b>Online Movie Ticket Booking System</b></h1>
                <h3>(Star Cineplex)</h3>
                <hr>
            </td>
        </tr>
    </table>
    <table class="table4">
        <tr>
            <td width="35%">
                Movie Name:
            </td>
            <td>
                <?php echo $movie_name; ?>
            </td>
        </tr>
        <tr>
            <td>
                Show Time:
            </td>
            <td>
                <?php echo date('d-m-Y', strtotime($ti_date)); ?>
                (<?php echo date('h:ia', strtotime($ti_time)); ?>)
            </td>
        </tr>
        <tr>
            <td>
                Booked Seat List:
            </td>
            <td>
                <?php
                    $result = "SELECT * FROM tb_ticket_seat LEFT JOIN tb_seat ON tb_seat.s_id=tb_ticket_seat.seat_id  WHERE tb_ticket_seat.ticket_id ='$ticket_id'";
                    if ($result=mysqli_query($db,$result))
                    {
                      while ($row=mysqli_fetch_assoc($result))
                      {
                        echo $row['s_name'].", ";
                      }
                    }
                  ?>
                
            </td>
        </tr>
        <tr>
            <td>
                Booking Date:
            </td>
            <td>
                <?php echo date('d-m-Y', strtotime($booking_date)); ?>
            </td>
        </tr>
        <tr>
            <td>
                Booking Time:
            </td>
            <td>
                <?php echo date('h:ia', strtotime($booking_time)); ?>
            </td>
        </tr>
        <tr>
            <td>
                Phone Number:
            </td>
            <td>
                <?php echo $phone_number; ?>
            </td>
        </tr>
        <tr>
            <td>
                Total Amount:
            </td>
            <td>
                <?php echo $t_amount; ?>
            </td>
        </tr>
        <tr>
            <td>
                Payment Method:
            </td>
            <td>
                <?php echo $payment_info; ?>
            </td>
        </tr>
    </table>
    <script type="text/javascript">
    <!--
        window.print();
    //-->
    </script>
</body>
</html>

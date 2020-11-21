<?php require_once('../dbconnect.php'); ?>
<a href="dashboard.php">Dashboard
	<i class="fa fa-caret-down"></i>
</a>
<?php 
$pending_list=0;
$result = "SELECT COUNT(tb_ticket.t_id) as tcount FROM tb_ticket left join tb_user on tb_user.u_id = tb_ticket.user_id WHERE tb_ticket.t_status = 0";
    if ($result=mysqli_query($db,$result))
        {
          while ($row=mysqli_fetch_assoc($result)){
           $pending_list = $row['tcount'];
          }
        }
       ?>
<a href="pending_list.php">Pending Ticket <span class="badge badge-info"><?php echo $pending_list; ?></span>	</a>
<a href="approved_ticket_list.php">Approved Ticket</a>
<a href="Addvertisement.php">Advertisement Add</a>
<a href="movie_list.php">Movie List</a>
<a href="movie_time.php">Movie Time</a>
<a href="seat_list.php">Movie Seat</a>
<a href="category_list.php">Category List</a>
<a href="user_list.php">User List</a>
<a href="contactadd.php">Contact Us</a>
<a href="logout.php">Logout</a>
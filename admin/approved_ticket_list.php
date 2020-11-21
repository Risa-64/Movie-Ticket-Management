<?php require_once 'admin_session.php';
      require_once('../dbconnect.php'); ?>
      
<!DOCTYPE html>
<html>
<head>
    <title>Approved Ticket List</title>
    <link rel="stylesheet" href="../css/adminpanel_custom_css.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>

  <div class="sidenav">
    <?php require_once('admin_menu.php'); ?>
  </div>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">Hidden brand</a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"> </a>
        </li>
      </ul>
     
    </div>
  </nav>

 <div class="container">
        
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-11">
          <h2 style="color:black; margin-top: 65px; text-align: center;">Online Movie Ticket Booking System</h2>
          <hr>
          <div class="row">
            <div class="col-md-6">
              <h4><b>Approved Ticket List</b></h4>
            </div>
            
          </div>
          <hr>
          <table class="table table-bordered table-hover table-striped">
            <thead>
            <tr>
              <th style="text-align: center;"> Serial</th>
              <th style="text-align: center;"> Movie Name</th>
              <th style="text-align: center;"> User Name</th>
              <th style="text-align: center;"> Mobile Number</th>
              <th style="text-align: center;"> Booking Date & Time</th>
              <th style="text-align: center;"> Total Amount</th>
              <th style="text-align: center;"> Bkash Trans: ID </th>
            </tr>
          </thead>
          <tbody>
             <?php 
            $i=1;
            $result = "SELECT tb_ticket.*, tb_user.u_name, tb_movie.m_name FROM tb_ticket left join tb_user on tb_user.u_id = tb_ticket.user_id  left join tb_movie on tb_movie.m_id = tb_ticket.movie_id WHERE tb_ticket.t_status = 1";
              if ($result=mysqli_query($db,$result))
                {
                while ($row=mysqli_fetch_assoc($result))
                  {
                    ?>
                    <tr>
                        <td style="text-align: center;"><?php echo $i++; ?></td>
                        <td style="text-align: center;"><?php echo $row['m_name'];?> </td>
                        <td style="text-align: center;"><?php echo $row['u_name'];?> </td>
                        <td style="text-align: center;"><?php echo $row['t_number'];?> </td>
                        <td style="text-align: center;"><?php echo $row['booking_date']." ".$row['booking_time'];?> </td>
                        <td style="text-align: center;"><?php echo $row['t_amount'];?> </td>
                        <td style="text-align: center;"><?php echo $row['t_payment_info'];?> </td>
                  </tr>
              <?php } } ?>
            </tbody>
          </table>
        </div>
        <div class="col-md-1"></div>
      </div>

    </div>
</tr>
</tbody>
</table>
</div>
</div>
</div>

        <!-- Scripting Area -->
       <script src="../js/jquery-3.4.1.slim.min.js"></script>
       <script src="../js/bootstrap.min.js"></script>
       <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      

    <?php require_once('admin_footer.php'); ?>

    </body>
  </html>
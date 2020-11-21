<?php require_once 'admin_session.php';
      require_once('../dbconnect.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
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
                    <div class="col-md-12" style="text-align: center;">
                          <h4><b>Sales Summary Report</b></h4>
                    </div>
               </div>
            <div style="overflow: scroll; height: 450px;" class="panel-body">
                   <div class="table-responsive">
                         <hr>
                              <?php 
                                    $result = "SELECT tb_movie.*, (SELECT COUNT(ts_id) FROM tb_ticket_seat LEFT JOIN tb_ticket ON tb_ticket_seat.ticket_id = tb_ticket.t_id WHERE tb_ticket_seat.movie_id = tb_movie.m_id && tb_ticket.t_status=1) as `totalTicketNumber` FROM tb_movie ORDER BY totalTicketNumber DESC";
                               ?>
                               <table class="table table-bordered table-hover table-striped">
                             <thead>
                                  <tr>
                                  <th>Serial</th>
                                  <th>Movie Name</th>
                                  <th style="text-align: center;">Total Booked Ticket(Seat)</th>
                                  <th style="text-align: center;">Total Sale Amount</th>
                                  </tr>
                             </thead>
                         <tbody> 
                                <?php 
                                     $i=0;
                                      if ($result=mysqli_query($db,$result))
                                      {
                                        while ($row=mysqli_fetch_assoc($result))
                                         {
                                            $totalSaleAmount=0;
                                            $movieId=$row['m_id'];
                          
                                            $result1 = "SELECT tb_seat.s_price FROM tb_ticket_seat left join tb_seat ON tb_seat.s_id = tb_ticket_seat.seat_id  LEFT JOIN tb_ticket ON tb_ticket_seat.ticket_id = tb_ticket.t_id WHERE tb_ticket_seat.movie_id='$movieId'  && tb_ticket.t_status=1";
                        
                                             if ($result1=mysqli_query($db,$result1)){
                                               while ($row1=mysqli_fetch_assoc($result1)){
                                            $totalSaleAmount+=($row1['s_price']+$row['m_price']);
                                          }
                                       }

                                  ?>
                                    <tr>
                                    <td><?php echo ++$i; ?></td>
                                    <td><?php echo $row['m_name'] ?></td>
                                    <td style="text-align: center;"><?php echo $row['totalTicketNumber']; ?> </td>
                                    <td style="text-align: center;"><?php echo $totalSaleAmount; ?> </td>
                                    </tr>
                                  <?php
                                    }
                                   } ?>
                    
                              </tbody>

                           </table>

                    </div>

              

            </div>

          </div>

        </div>
  </div>

        <!-- Scripting Area -->
       <script src="../js/jquery-3.4.1.slim.min.js"></script>
       <script src="../js/bootstrap.min.js"></script>
       <script src="../js/bootstrap.bundle.min.js"></script>
    <?php require_once('admin_footer.php'); ?>
    </body>
  </html>
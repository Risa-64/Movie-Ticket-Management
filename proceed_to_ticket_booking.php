<?php 
 include('user_session.php'); 
 include('dbconnect.php');
 $seat_ids=$_POST['seat_id'];
 if(!isset($_SESSION['bookingProccess'])){
    echo "<script> document.location.href='index.php';</script>";
  }
  ?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
    <body>
      <?php require( 'part/header.php' ) ?>
      <div style="padding-left:16px">
      </div>
      <style>
      </style>
    </head>
    <body>
      <form method="POST" action="save_ticket_booking.php">
      <div class="container" style="text-align: center;"><br> <br>
        <div class="row">
          <?php
          if (isset($_POST['movie_id'])){
            $movie_id = $_POST['movie_id'];
            $result = "SELECT * FROM tb_movie WHERE m_id = $movie_id";
            if ($result=mysqli_query($db,$result))
            {
              while ($row=mysqli_fetch_assoc($result))
              {
                $movie_name = $row['m_name'];
              }
            }
          }

          $results = "SELECT * FROM tb_time WHERE movieid = $movie_id";
          ?>
          <?php $sql_seat = "SELECT * FROM tb_seat";
          $result_seat = mysqli_query($db, $sql_seat); ?>

          <div class="col-md-2"> </div>
          <div class="col-md-8"> 
            <div class="form-group">
              <label style="text-align: left;">Movie Name</label>
              <input type="text" name="" value="<?php  echo $movie_name; ?>" readonly=""  class="form-control">
              <input name="movie_id" value="<?php echo $_POST['movie_id']; ?>" hidden=""  >
              <input name="time_id" value="<?php echo $_POST['time_id']; ?>" hidden="" >
              <input name="movie_price" value="<?php echo $_POST['movie_price']; ?>" hidden="" >
            </div>
            <div class="form-group">
              <label style="text-align: left;">Movie Date & Time</label>
              <select class="form-control time_id" name="time_id" id="time_id" disabled="">
                <option value="">Select a date & time</option>
                <?php 
                  if ($results=mysqli_query($db,$results))
                  {
                    while ($row=mysqli_fetch_assoc($results))
                    { ?>
                      <option <?php if($row['ti_id']==$_POST['time_id']){ echo "selected"; } ?> value="<?php echo $row['ti_id']; ?>"><?php echo date('d-m-Y', strtotime($row['ti_date']))."(". date('h:ia', strtotime($row['ti_time'])) .")";?></option>
                   <?php
                    }
                  }
                  ?>
              </select>
            </div>
                     
            <div class="form-group">
              <label style="text-align: left;">Phone number</label>
              <input type="text" readonly="" value="<?php echo $_POST['phone_number']; ?>" placeholder="Phone number" class="form-control" name="phone_number" required="" >
            </div>

            <div class="form-group">
              <label style="text-align: left;">Selected Seats</label>
              <input type="text" readonly="" value="<?php 
              $result = "SELECT * FROM tb_seat WHERE s_id IN (".implode(',',$seat_ids).")";
                if ($result=mysqli_query($db,$result))
                {
                  while ($row=mysqli_fetch_assoc($result)){
                   echo $row['s_name'].", ";

                  }
                }
               ?>"  class="form-control">
            </div>

            <div class="form-group">
              <label style="text-align: left;">Total Ticket Price</label>
              <?php 
              $total_ticket_price=0;
              $total_movie_price = count($seat_ids)*$_POST['movie_price'];
              $result = "SELECT * FROM tb_seat WHERE s_id IN (".implode(',',$seat_ids).")";
                if ($result=mysqli_query($db,$result))
                {
                  while ($row=mysqli_fetch_assoc($result)){
                    $total_ticket_price+=$row['s_price'];
                    ?>
                    <input name="seat_ids[]" value="<?php echo $row['s_id']; ?>" hidden >
                    <?php
                  }
                }

               ?>
              <input type="text" readonly="" value="<?php echo ($total_ticket_price+$total_movie_price); ?>" placeholder="Total Ticket Price" class="form-control" name="total_ticket_price" required="" >
            </div>

            <div class="form-group">
              <label style="text-align: left;">Payment Method (Bkash)</label>
              <input placeholder="Bkash trans ID number" class="form-control" name="payment_info" required="" >
            </div>

          </div>
        <div class="col-md-2"></div>
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <hr>
            <button type="submit" class="btn btn-outline-success my-2 my-sm-0" name="seatSave">Confirm</button>
        </div>
            
          </div>
    </div>
    </form> 

      <?php require( 'part/footer.php' ) ?>
        <!-- Scripting Area -->
       <script src="js/jquery.min.js"></script>
       <script src="js/bootstrap.min.js"></script>
       <script src="js/bootstrap.bundle.min.js"></script>
    </body>
  </html>
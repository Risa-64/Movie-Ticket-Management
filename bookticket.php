<?php 
 include('user_session.php');
 include('dbconnect.php');
 $_SESSION['bookingProccess']=rand(0,999); ?>
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
      <form method="POST" action="proceed_to_ticket_booking.php">
      <div class="container" style="text-align: center;"><br> <br>
        <div class="row">
          <?php
          if (isset($_GET['id'])){
            $movie_id = $_GET['id'];
            $result = "SELECT * FROM tb_movie WHERE m_id = $movie_id";
            if ($result=mysqli_query($db,$result))
            {
              while ($row=mysqli_fetch_assoc($result))
              {
                $movie_name = $row['m_name'];
                $movie_price = $row['m_price'];
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
              <input type="text" name="" value="<?php  echo $movie_name; ?>" readonly=""  class="form-control">
              <input type="text" name="movie_id" value="<?php  echo $movie_id; ?>" hidden >
              <input type="text" name="movie_price" value="<?php  echo $movie_price; ?>" hidden >
            </div>
            <div class="form-group">
              <select class="form-control time_id" name="time_id" id="time_id" required="">
                <option value="">Select a date & time</option>
                <?php 
                  if ($results=mysqli_query($db,$results))
                  {
                    while ($row=mysqli_fetch_assoc($results))
                    { ?>
                      <option value="<?php echo $row['ti_id']; ?>"><?php echo date('d-m-Y', strtotime($row['ti_date']))."(". date('h:ia', strtotime($row['ti_time'])) .")";?></option>
                   <?php
                    }
                  }
                  ?>
              </select>
            </div>
                     
            <div class="form-group">
              <input type="number" placeholder="01xxxxxxxxx(who will pick up the tickets)" class="form-control" name="phone_number" required="" >
            </div>
           
          </div>
        <div class="col-md-12"></div>
        <div class="col-md-2"></div>
        <div class="col-md-8">
          
          <div class="available_seat">
            <h5 style="color: red; text-align: center;"><center><b>Please select date time first to view available seat.</b></center></h5>
          </div>

        </div>
        <div class="col-md-2"></div>
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <hr>
            <button type="submit" class="btn btn-outline-success my-2 my-sm-0" name="submit" onclick="valthis()">Confirm</button>
        </div>
            
          </div>
    </div>
    </form> 

      <?php require( 'part/footer.php' ) ?>
        <!-- Scripting Area -->
       <script src="js/jquery.min.js"></script>
       <script src="js/bootstrap.min.js"></script>
       <script src="js/bootstrap.bundle.min.js"></script>
       <script type="text/javascript">
          $("select.time_id").change(function () {
              var time_id= $(".time_id option:selected").val();
              if(!time_id){
                  var rr='<span style="color: red; font-weight:800;">Please select date time first to view available seat.</span>';
                  $('.available_seat').html(rr);
              }
              else {
                  $.ajax({
                      url: 'get_available_seat.php?time_id=' + time_id,
                      method: 'get',
                      dataType: 'html',
                      success: function (response) {
                          $('.available_seat').html(response);
                      }
                  });
              }
          });

            function validateGrp() {
              let things = document.querySelectorAll('.required_group')
              let checked = 0;
              for (let thing of things) {
                thing.checked && checked++
              }
              if (checked) {
                things[things.length - 1].setCustomValidity("");
                document.getElementById('checkGroup').submit();
              } else {
                things[things.length - 1].setCustomValidity("You must check at least one seat");
                things[things.length - 1].reportValidity();
              }
            }

            document.querySelector('[name=submit]').addEventListener('click', () => {
              validateGrp()
            });
       </script>
    </body>
  </html>
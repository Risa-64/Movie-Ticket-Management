<?php include('dbconnect.php'); ?>
  <style>
   #box {
  background-color: lightgrey;
  height: 100%;
  width: 100%;
  border: 5px solid green;
  padding: 25px;
  }
  </style>
  <div id="box">
    <div class="row">
      <div class="col-md-12">
        <b>Available Seat</b>
        <hr>
      </div>

      <?php
      $time_id=$_GET['time_id'];
      $result = "SELECT * FROM tb_seat WHERE s_id NOT IN (SELECT tb_ticket_seat.seat_id FROM tb_ticket_seat WHERE tb_ticket_seat.time_id ='$time_id')";
      if ($result=mysqli_query($db,$result))
      {
      while ($row=mysqli_fetch_assoc($result))
      {?>
          <div class="col-md-3">
            <ul  style="list-style-type:none;">
              <li class="seat">
                <input type="checkbox" class="required_group" id="s<?php echo $row['s_id']; ?>" value="<?php echo $row['s_id']; ?>" name="seat_id[]">
                <label for="s<?php echo $row['s_id']; ?>"><?php echo $row['s_name']; ?> - <?php echo $row['s_price']."Tk"; ?></label>
              </li>
             
            </ul>
          </div>

      <?php }} ?>
     
      </div>                           
    </div>
    <br>
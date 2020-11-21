<?php session_start(); 
 include('dbconnect.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>All Movie - Online Movie Ticket Booking System</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
  </head>
<?php require('part/header.php') ?>
    <body>
      <div class="container">
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
          $movie_photo = $row['m_photo'];
          $movie_price = $row['m_price'];
          $movie_details = $row['m_details'];
          $movie_cast = $row['m_cast'];
          $movie_director = $row['m_director'];
          $movie_duration = $row['m_duration'];
          $movie_tailor = $row['m_tailor'];
          $movie_status = $row['m_status'];
          }
          }
          }
          ?>
          <div class="col-md-6">
            <img style="height: 400px;width: 500px;margin-left:10px;" src="image/<?php echo $movie_photo ;?>">
            <center>
            <a href="bookticket.php<?php echo "?id=$movie_id"; ?>"><button class="btn btn-primary ">Book Ticket</button></a>
            </center>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="">Details for Movie : <b> <?php  echo $movie_name; ?></label></b>
            </div>
            
            <div class="form-group">
              <label for="">Price : <?php  echo $movie_price; ?>tk</label>
            </div>
            <div class="form-group">
              <label for="">Language: This Movie is <?php  echo $movie_details; ?> Movie</label>
            </div>
            <div class="form-group">
              <label for="">Cast :  <?php  echo $movie_cast; ?></label>
            </div>
            <div class="form-group">
              <label for="">Director: <?php  echo $movie_director; ?></label>
            </div>
            <div class="form-group">
              <label for="">Duration time: <?php  echo $movie_duration; ?></label>
            </div>
            <div class="form-group">
              <a href="<?php  echo $movie_tailor; ?>" target="blank"><label for=""><b>Trailer link:  <?php  echo $movie_tailor; ?></b>
              </a>
            </label>
          </div>
          <div class="form-group"><label for="">When Movie is Active Now for number 1 or Inactive for 0 : Status <?php  echo $movie_status; ?></label>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <img style="height: 100px;width: 150px;margin-right:1px;" src="image/cinema_image.jpg">
        </div>
      </div>
    </a>
  </div>
</label>
</div>
</div>
</div>
</div>
<?php require( './part/footer.php' ) ?>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php session_start(); 
 include('dbconnect.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>All Movie - Online Movie Ticket Booking System</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
  </head>
<?php require('part/header.php') ?>
 <div class="container">
<div class="row"style="margin-top: 5%; margin-left: 0%; margin-right:00%;">
<?php 
$result = "SELECT * FROM tb_movie ";
          if ($result=mysqli_query($db,$result))
            {
            while ($row=mysqli_fetch_assoc($result))
              {?>

  <div class="col-md-3">
    <?php 
          $id = $row['m_id'];
        ?>
    <div class="card">
<a href="showdetails.php<?php echo"?id=$id"; ?>"><img style="height: 250px;width: 250px;" src="image/<?php echo $row['m_photo'];?>"></a>
    </div>
    <div class="card-body">
      <center>        
      <h5 class="card-title">Movie name: <?php echo $row['m_name'] ?></h5>
      <h7 class="card-price">Movie price: <?php echo $row['m_price'] ?></h7>
      
      <?php if(isset($_SESSION['userAccess'])){ ?>
        <a href="bookticket.php<?php echo "?id=$id"; ?>" class="btn btn-primary btn-sm ct">Book Ticket</a>
      <?php } ?>
      </center>
    </div>
  </div>
<?php }} ?>
</div>
</div>
</div>
</div>

  <?php require( 'part/footer.php' ) ?>
    <!-- Scripting Area -->
   <script src="js/jquery-3.4.1.slim.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
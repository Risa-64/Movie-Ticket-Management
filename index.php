<?php session_start(); 
 include('dbconnect.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Home - Online Movie Ticket Booking System</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
  </head>
  <style>
  </style>
  <body>
    <?php require( 'part/header.php' ) ?>
  <div class="row">
    <div class="col-md-8">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="image/percentoff_image.jpg"style="width: 100%; height:400px; "alt="First slide">
          </div>
          <div class="carousel-item ">
            <img class="d-block w-100" src="image/off_image.jpg"style="width: 100%; height:400px; " alt="Second slide">
          </div>
          <div class="carousel-item ">
            <img class="d-block w-100" src="image/slide_image.jpg"style="width: 100%; height:400px; " alt="third slide">
          </div>
          <div class="carousel-item ">
            <img class="d-block w-100" src="image/offer_image.jpg"style="width: 100%; height:400px; " alt="fourth slide">
          </div>
          <div class="carousel-item ">
            <img class="d-block w-100" src="image/FB-03.jpg" alt= "Third slide" style="width: 100%; height:400px;">
          </div>
          <div class="carousel-item ">
            <img class="d-block w-100" src="image/avengers_image.jpeg"style="width: 100%; height:400px;" alt="fifth slide">
          </div>
          <div class="carousel-item ">
            <img class="d-block w-100" src="image/poramon_image.gif" style="width: 100%; height:400px;" alt="sixth slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      Online Movie Ticket Booking System is a website to provide the customers facility to book tickets for a movie online and to gather information about the movies and theaters. ... User can update his profile, take a print out of the ticket and also view his booking history.Customer will get a ticket with Confirm book Ticket, Basic details of Movie, Address of theater, Timing,Date etc. A ticket will be generated then and there only using Unique Ticket ID. ... Customer goes to the theater at Movie Time and theater manager can see booking ticket.
    </div>
  </div>
</div>
</div>
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
<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
  </head>
  <style>
  
  </style>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <a class="navbar-brand" href="home.php"style="color: #ffff;">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li style="font-size: 20px;" class="nav-item active">
            <a class="nav-link" href="../dash.php"style="color: #ffff;">Dashboard <span class="sr-only">(current)</span></a>
          </li>
          <li style="font-size: 20px;" class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="../movie.php"style="font-size: 20px;color: #ffff;" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Movie
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../movie.php">Movie List</a>
              <a class="dropdown-item" href="../movietime.php">Movie Time</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../contact.php">Movie Details</a>
            </div>
            <li class="nav-item">
              <a class="nav-link" href="../contact.php"style="font-size: 20px;color: #ffff;">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Logout.php"style="font-size: 20px;color: #ffff;">Login/Registration</a>
            </li>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <a href="dash.php" style="display: block;float: right"><i class="material-icons">account_box</i>Profile</a>
    <br>
    <div style="padding-left:16px">
    </div>
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
              <img class="d-block w-100" src="image/nodorai_image.jpg"style="width: 100%; height:400px;" alt="First slide">
            </div>
            <div class="carousel-item ">
              <img class="d-block w-100" src="image/kathbirali_image.jpg"style="width: 100%; height:400px;" alt="Second slide">
            </div>
            <div class="carousel-item ">
              <img class="d-block w-100" src="image/dolittle_image.png"style="width: 100%; height:400px;" alt= "Third slide">
            </div>
            <div class="carousel-item ">
              <img class="d-block w-100" src="image/avengers_image.jpeg"style="width: 100%; height:400px;" alt="fourth slide">
            </div>
            <div class="carousel-item ">
              <img class="d-block w-100" src="image/poramon_image.gif"style="width: 100%; height:400px;" alt="fifth slide">
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
        Online Movie Ticket Booking System is a website to provide the customers facility to book tickets for a movie online and to gather information about the movies and theaters. ... User can update his profile, take a print out of the ticket and also view his booking history.
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row"style="margin-top: 5%; margin-left: 0%; margin-right:00%;">
      <div class="col-md-3">
        <div class="card">
          <a href="moviedetails.php"><img style="width: 300px; height: 350px;" src="image/mulan.jpg"></a>
        </div>
        <div class="card-body">
          <center>
          <h5 class="card-title">Movie name:Mulan</h5>
          <h6 class="card-price"> Price 350tk</h6>
          <a href="#" class="btn btn-primary ct">Book Ticket</a>
          </center>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <a href="moviedetails.php"><img style="width: 300px; height: 350px;" src="image/dolittle_image.png"></a>
        </div>
        <div class="card-body">
          <center>
          <h5 class="card-title">Movie name:Dolittle</h5>
          <h6 class="card-price"> Price 400tk</h6>
          <a href="#" class="btn btn-primary ct">Book Ticket</a>
          </center>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <a href="moviedetails.php"><img style="width: 300px; height: 350px;" src="image/nodorai_image.jpg"></a>
        </div>
        <div class="card-body">
          <center>
          <h5 class="card-title">Movie name:Nodorai</h5>
          <h6 class="card-price"> Price 300tk</h6>
          <a href="#" class="btn btn-primary ct">Book Ticket</a>
          </center>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <a href="moviedetails.php"><img style="width: 300px; height: 350px;" src="image/poramon_image.gif"></a>
        </div>
        <div class="card-body">
          <center>
          <h5 class="card-title">Movie name:Poramon</h5>
          <h6 class="card-price"> Price 350tk</h6>
          <a href="orderwait.php" class="btn btn-primary ct">Book Ticket</a>
          </center>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
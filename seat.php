<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
  </head>
  <style>
    body {
  background-color: lightblue;
}
  </style>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <a class="navbar-brand" href="home.php" style="font-size:20px;color: #ffff;">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="dash.php"style="font-size:20px;color: #ffff;">Dashboard <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="movie.php"style="font-size:20px;color: #ffff;" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Movie
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="movie.php">Movie List</a>
              <a class="dropdown-item" href="movietime.php">Movie Time</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="seatdetails.php">Movie Seat</a>
            </div>
            <li style="font-size: 20px;" class="nav-item">
            <a class="nav-link" href="allmovie.php"style="color: #ffff;">All Movie</a>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php"style="font-size:20px;color: #ffff;">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Logout.php"style="font-size:20px;color: #ffff;">Login/Logout</a>
            </li>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <div style="padding-left:16px">
    </div>
    <div class="container">
    <style >

,*:before,*:after {
  box-sizing: border-box;
}
.cockpit {
  height: 250px; 
  position: relative;
  overflow: hidden;
  text-align: center;
  border-bottom: 5px solid #ffff;
  &:before {
    content: "";
    display: block;
    position: absolute;
    height: 500px;
    width: 200%;
    border-radius: 50%;
    border-right: 5px solid #ffff;
    border-left: 5px solid #ffff;
  }
  .fuselage {
  border-right: 5px solid #ffff;
  border-left: 5px solid #ffff;
}
</style>
  </div>
  </body>
  </html>
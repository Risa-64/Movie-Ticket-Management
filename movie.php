<?php include('connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
  
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>
body {
  background-color: skyblue;
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 17px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 300px; / Same as the width of the sidenav /
  font-size: 17px; / Increased text to enable scrolling /
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 10px;}
}
</style>
</head>
<body>

  <div class="sidenav">
    <a href="admin/dashboard.php"button class="dropdown-btn">Dashboard 
     
    <i class="fa fa-caret-down"></i>
  </button>
  <a href="home.php">Home</a>
    <a href="movie.php">Movie List</a>
    <a href="movietime.php">Movie Time</a>
    <a href="addseat.php">Movie Seat</a>
    <a href="allmovie.php">All Movie</a>
    <a href="category.php">Category</a>
    <a href="contactadd.php">Contact</a>
     <a href="Logout.php">Logout</a>
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
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    <div class="container">
        
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <h2 style="color:black; margin-top: 100px; text-align: center;">Online Movie Ticket Booking System</h2>
          <div class="form-group">
            <form method="POST" action="connection.php" enctype="multipart/form-data">  
                <label>Movie Category: </label>
                <select name="category_id" class="form-control">
                <?php
                  $category = mysqli_query($db, "SELECT * FROM tb_category");
                  while ($data = mysqli_fetch_assoc($category)) {
                ?>
                    <option value="<?php echo $data['cat_id']; ?>"><?php echo $data['cat_name']; ?></option>
                <?php
                  }
                ?>
                </select>
              </div>          
              <div class="form-group">
                <label>Movie Name: </label>
                <input type="text" name="name">
              </div>             
              <div class="form-group">
                <label>Language: </label>
                <input type="text" name="m_details">
              </div>
              <div class="form-group">
                <label>Price: </label>
                <input type="text" name="m_price">
              </div>
               <div class="form-group">
                <label>Movie cast: </label>
                <input type="text" name="m_cast">
              </div>
              <div class="form-group">
                <label>Movie Director: </label>
                <input type="text" name="m_director">
              </div>
              <div class="form-group">
                <label>Movie Duration: </label>
                <input type="text" name="m_duration">
              </div>
              <div class="form-group">
                <label>Movie Tailor: </label>
                <input type="text" name="m_tailor">
              </div>
              <div class="form-group">
                <label>Photo: </label>
                <input type="file" name="m_photo">
              </div> 

              <div class="form-group">
                <select name="m_status" class="form-control">
                  <option value="1">Active</option>
                  <option value="0">InActive</option>
                  option
                </select>
              </div>           
              <div class="form-group">
                <button type="submit" class="btn btn-success" name="save">Save</button>
              </div>
            </form>
          <div class="col-md-3"></div>
        </div>
        
      </div>
       <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    </body>
  </html>
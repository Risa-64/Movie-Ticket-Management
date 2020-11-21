<?php require_once 'admin_session.php';
      require_once('../dbconnect.php'); ?>
      
<!DOCTYPE html>
<html>
<head>
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
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

    <div class="container">
        
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <h2 style="color:black; margin-top: 65px; text-align: center;">Online Movie Ticket Booking System</h2>
          <hr>
          <div class="row">
            <div class="col-md-6">
              <h4><b>Add New Movie Time</b></h4>
            </div>
            <div class="col-md-6"  style="text-align: right " >
               <a href="movie_time.php"class="btn btn-primary">Movie Time List</a>
            </div>
          </div>
          <hr>
           <form method="POST" action="connection.php">         
              <div class="form-group">
                <label>Movie: </label>
                <select name="movieid" class="form-control">
                <?php
                  $movie = mysqli_query($db, "SELECT * FROM tb_movie");
                  while ($data = mysqli_fetch_assoc($movie)) {
                ?>
                    <option value="<?php echo $data['m_id']; ?>"><?php echo $data['m_name']; ?></option>
                <?php
                  }
                ?>
                </select>
              </div>
              <div class="form-group">
                <label>Date: </label>
                <input type="date" name="ti_date" class="form-control">
              </div> 
               <div class="form-group">
                <label>Available time: </label>
                <input type="time" name="ti_time" class="form-control">
              </div>             

              <div class="form-group">
                <select name="m_status" class="form-control">
                  <option value="1">Active</option>
                  <option value="0">InActive</option>
                  option
                </select>
              </div>           
              <div class="form-group">
                <button type="submit" class="btn btn-success" name="timeSave">Save</button>
              </div>
            </form>
        </div>
        <div class="col-md-2"></div>
      </div>

    </div>

        <!-- Scripting Area -->
       <script src="../js/jquery-3.4.1.slim.min.js"></script>
       <script src="../js/bootstrap.min.js"></script>
       <script src="../js/bootstrap.bundle.min.js"></script>
    <?php require_once('admin_footer.php'); ?>
    </body>
  </html>
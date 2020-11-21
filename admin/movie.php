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
              <h4><b>Add New Movie</b></h4>
            </div>
            <div class="col-md-6"  style="text-align: right " >
               <a href="movie_list.php"class="btn btn-primary">Movie List</a>
            </div>
          </div>
          <hr>
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
                <br>
                <div class="form-group">
                  <label>Movie Status: </label>
                <select name="m_status" class="form-control">
                  <option value="1">Active</option>
                  <option value="0">InActive</option>
                  option
                </select>
              </div>
            <div class="form-group">
             <label>Movie Name: </label>
                <input type="text" name="name" class="form-control"  >
              </div>             
              <div class="form-group">
                <label>Language: </label>
                <input type="text" name="m_details" class="form-control" required="" >
              </div>
              <div class="form-group">
                <label>Price: </label>
                <input type="text" name="m_price" class="form-control" required="" >
              </div>
               <div class="form-group">
                <label>Movie cast: </label>
                <input type="text" name="m_cast" class="form-control" required="" >
              </div>
              <div class="form-group">
                <label>Movie Director: </label>
                <input type="text" name="m_director" class="form-control" required="" >
              </div>
              <div class="form-group">
                <label>Movie Duration: </label>
                <input type="text" name="m_duration" class="form-control" required="" >
              </div>
              <div class="form-group">
                <label>Movie Trailer: </label>
                <input type="text" name="m_tailor" class="form-control" required="" >
              </div>
              <div class="form-group">
                <label>Photo: </label>
                <input type="file" name="m_photo">
              </div> 
               <div class="form-group">
                <button type="submit" class="btn btn-success" name="save">Save</button>
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
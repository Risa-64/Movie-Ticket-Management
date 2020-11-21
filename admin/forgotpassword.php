<?php include('../connection.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
  </head>
  <style>
  </style>
  <body>
    
    <header>
      <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #e3f2fd; ">
        <a class="navbar-brand" href="home.php"style="color: #black;">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li style="font-size: 20px;" class="nav-item">
              <a class="nav-link" href="../allmovie.php"style="color: #black;">All Movie</a>
            </li>
            <li class="nav-item dropdown">
              <a id="cat_id" class="nav-link dropdown-toggle" href="../movie.php"style="font-size:20px;color: #black;" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Category
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php
                $category = mysqli_query($db, "SELECT * FROM tb_category");
                while ($data = mysqli_fetch_assoc($category)) {
                ?>
                <a class="dropdown-item" id="category_id" href="../cat.php"><?php echo $data['cat_name']; ?></a>
                <?php }?>
              </div>
              <li style="font-size: 20px;" class="nav-item">
                <a class="nav-link" href="../contact.php"style="color: #black;">Contact</a>
              </li>
              <li style="font-size: 20px;" class="nav-item">
                <a class="nav-link" href="../Logout.php"style="color: #black;">Login/Registration</a>
              </li>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" action=""target="_blank" method="get">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </header>
    <body>
      
      <body style="background-image: url('../image/admin_image.jpg'); background-repeat: no-repeat; background-size: cover;">
        <div class="container">
          <div class="row">
            <div class="col-md-4"></div>
            <h2 style="color: #ffff; margin-top: 100px; text-align: center;">Online Movie Ticket Booking System</h2>
            <h3 style="color: #ffff; margin-top: 10px; text-align: center;">Admin</h3>
            <div class="col-md-4" style="opacity: 0.8; margin-top: 5%; margin-left: 30%; margin-right: 56px; height: 250px; width: 500px; background-color: black; ">
              <form method="post">
                <table align="center" border-collapse: collapse style="padding: 80px;">
                  <br>
                  <br>
                  <tr>
                    <td style="color:#ffff;">Email or Phone number</td>
                    <td ><input type="text" name="id"></td>
                  </tr>
                  <tr>
                    <td style="color: #ffff;">Change Password</td>
                    <td><input type="password" name="pass"></td>
                  </tr>
                  <tr>
                    <td style="color: #ffff;">Confirm Password</td>
                    <td><input type="password" name="pass"></td>
                  </tr>
                  <tr>
                    <td colspan="2" align="center"><button><a href="dashboard.php">Login</a></button></td>
                  </tr>
                </table>
                
              </form>
            </div>
            <div class="col-md-4"></div>
          </div>
          
        </div>
        
        <footer class="bg-dark py-5 mt-5">
          <p class="py-5 text-center text-white">© 2020 All rights reserved Design and Developed by -Rokiya</p>
        </footer>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
      </body>
    </html>
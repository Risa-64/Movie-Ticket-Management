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
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <h2 style="color:black; margin-top: 65px; text-align: center;">Online Movie Ticket Booking System</h2>
          <hr>
          <div class="row">
            <div class="col-md-6">
              <h4><b>Advertisement List</b></h4>
            </div>
            <div class="col-md-6"  style="text-align: right " >
               <a href="Addvertisement.php"class="btn btn-primary">Add New Advertisement</a>
            </div>
          </div>
          <hr>
            <div class="row" style="margin-top: 2%; margin-left: 0%; margin-right:00%;">
            <?php 
            $result = "SELECT * FROM tb_addvertisement ";
              if ($result=mysqli_query($db,$result))
                {
                while ($row=mysqli_fetch_assoc($result))
                  {
                    ?>
                <div class="col-md-3" style="padding: 6px; text-align: center; border: 1px solid #ddd; border-radius: 5px;" >
                <?php 
                      $id = $row['ad_id'];
                    ?>
                  <div class="card">
                      <img style="height: 250px; width: 100%;" src="../image/<?php echo $row['ad_photo'];?>">
                  </div>
                </div>
            <?php } } ?>
            </div>
        </div>
        <div class="col-md-1"></div>
      </div>

    </div>

        <!-- Scripting Area -->
       <script src="../js/jquery-3.4.1.slim.min.js"></script>
       <script src="../js/bootstrap.min.js"></script>
       <script src="../js/bootstrap.bundle.min.js"></script>
    <?php require_once('admin_footer.php'); ?>
    </body>
  </html>
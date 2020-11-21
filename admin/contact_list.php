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

    <h2 style="text-align: center">Contact Us</h2>
    <?php
    $result = "SELECT * FROM tb_place ";
    if ($result=mysqli_query($db,$result))
    {
    while ($row=mysqli_fetch_assoc($result))
    {?>
    <div class="col-md-12">
        <?php
        $id = $row['p_id'];
        ?>
        
        <div class="card-body" style="text-align: center;">
            <center>
            
            <h5 class="card-title" style="text-align: center;"><?php echo $row['p_name'] ?></h5>
            <br>
            <h7 class="card-price"style="text-align: center;">Location: <?php echo $row['p_location'] ?>,</h7>
            <h7 class="card-title"style= "text-align: center;">Address: <?php echo $row['p_address'] ?>,</h7>
            <h7 class="card-price"style="text-align: center;">Email: <?php echo $row['p_email'] ?>,</h7>
            <br>
            <h7 class="card-title" style="text-align: center;">Phone: <?php echo $row['p_phone'] ?>,</h7>
            <h7 class="card-price"style="text-align: center;">Closed Day: <?php echo $row['p_day'] ?>,</h7>
            <h7 class="card-title"style="text-align: center;">Status: <?php echo $row['p_status'] ?></h7>
            
            </center>
        </div>
    </div>
    <?php }} ?>
   <script src="../js/jquery-3.4.1.slim.min.js"></script>
       <script src="../js/bootstrap.min.js"></script>
       <script src="../js/bootstrap.bundle.min.js"></script>
    <?php require_once('admin_footer.php'); ?>
    </body>
  </html>
<?php session_start(); 
 include('dbconnect.php'); ?>
<html>
    <head>
        <title>Contact - Online Movie Ticket Booking System</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/bootstrap.css" />
        
    </head>
    
    <?php require( './part/header.php' ) ?>
    
    <h2 style="text-align: center">Contact Us</h2>
    <?php
    $result = "SELECT * FROM tb_place ";
    if ($result=mysqli_query($db,$result))
    {
    while ($row=mysqli_fetch_assoc($result))
    {?>
    <div class="col-md-6">
        <?php
        $id = $row['p_id'];
        ?>
        
        <div class="card-body">
            <center>
            
            <h5 class="card-title"><?php echo $row['p_name'] ?></h5>
            <br>
            <h7 class="card-price">Location: <?php echo $row['p_location'] ?>,</h7>
            <h7 class="card-title">Address: <?php echo $row['p_address'] ?>,</h7>
            <h7 class="card-price">Email: <?php echo $row['p_email'] ?>,</h7>
            <br>
            <h7 class="card-title">Phone: <?php echo $row['p_phone'] ?>,</h7>
            <h7 class="card-price">Closed Day: <?php echo $row['p_day'] ?>,</h7>
            <h7 class="card-title">Status: <?php echo $row['p_status'] ?></h7>
            
            </center>
        </div>
    </div>
    <?php }} ?>
    
  <?php require( 'part/footer.php' ) ?>
    <!-- Scripting Area -->
   <script src="js/jquery-3.4.1.slim.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   
</body>
</html>
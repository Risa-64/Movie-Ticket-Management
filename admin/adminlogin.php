<?php include('../dbconnect.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <!-- CSS Area  -->
    <link rel="stylesheet" href="../css/bootstrap.css" crossorigin="anonymous">
  </head>
    <body>
     
      <body style="background-image: url('../image/admin_image.jpg'); background-repeat: no-repeat; background-size: cover;">
        <div class="container">
          <div class="row">

            <div class="col-md-12">
                <h2 style="color: #ffff; margin-top: 100px; text-align: center;">Online Movie Ticket Booking System</h2>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4" style="opacity: 0.9; margin-top: 5%; margin-left: 30%; margin-right: 56px; height: 100%; width: 550px; background-color: black; ">
               <?php 
                 if(isset($_GET['lfailed'])){
               ?>
                 <div class="control-group normal_text">
                     <div class="alert alert-danger">
                      <button class="close" data-dismiss="alert">×</button>
                      <strong>Error!</strong> Wrong Email or Password. </div>
                 </div>
               <?php } ?>
               <?php 
                 if(isset($_GET['permissionError'])){
               ?>
                 <div class="control-group normal_text">
                     <div class="alert alert-danger">
                      <button class="close" data-dismiss="alert">×</button>
                      <strong>Error!</strong> Please Login First to Continue.</div>
                 </div>
               <?php } ?>
              <form method="post" action="check_login.php">
                <table align="center" width="100%">
                  <br>
                      <h3 style="color: #ffff; margin-top: 10px; text-align: center;">Admin Panel Login</h3>
                  <br>
                  <tr>
                    <td ><input type="email" name="email" class="form-control" placeholder="Your Email Address" autocomplete="off" > <br></td>
                  </tr>
                  <tr>
                    <td><input type="password" name="password" class="form-control" placeholder="Your Password"  autocomplete="off" ></td>
                  </tr>
                  <tr>
                    <td align="center">
                      <br>
                      <input type="submit" value="Login" class="btn btn-primary" name="login">
                    </td>
                  </tr>
                </table>
               <br>
              </form>
            </div>
            <div class="col-md-4"></div>
          </div>
        </div>

        <!-- Scripting Area -->
       <script src="../js/jquery-3.4.1.slim.min.js"></script>
       <script src="../js/bootstrap.min.js"></script>
       <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
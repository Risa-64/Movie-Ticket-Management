<?php include('connection.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
  </head>
  <style>
  </style>
  <?php require( './part/header.php' ) ?>
  <body style="background-image: url('image/theater_image.jpg'); background-repeat: no-repeat; background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <h2 style="color: #ffff; margin-top: 100px; text-align: center;">Online Movie Ticket Booking System</h2>
        <div class="col-md-4" style="opacity: 0.8; margin-top: 5%; margin-left: 30%; margin-right: 56px; height: 250px; width: 500px; background-color: black; ">
          <form method="post"action:>
            <table align="center" border-collapse: collapse style="padding: 80px;">
              <br>
              <br>
              <tr>
                <td style="color:#ffff;">Email or Phone Number</td>
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
                <td colspan="2" align="center"><button><a href="home.php">Login</a></button></td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
    <?php require( './part/footer.php' ) ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
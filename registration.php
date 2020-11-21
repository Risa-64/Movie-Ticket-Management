<?php
require_once('dbconnect.php');
?>
<!DOCTYPE html>
<html>
  <head>
  	<title>Online Movie Ticket Booking System</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
  </head>
  <style>
  </style>
  <body>
 
  	<?php require( './part/header.php' ) ?>
  
		<body  style="background-image: url('image/on_image.jpg'); background-repeat: no-repeat; background-size: cover;"> </body>
			<div class="container">
				<?php 
                 if(isset($_GET['cnfpassword'])){
               ?>
                 <div class="control-group normal_text">
                     <div class="alert alert-danger">
                      <button class="close" data-dismiss="alert">×</button>
                      <strong>Error!</strong> Passwords are not matched. </div>
                 </div>
               <?php } ?>
				<?php 
                 if(isset($_GET['lfailed'])){
               		?>
                 <div class="control-group normal_text">
                     <div class="alert alert-danger">
                      <button class="close" data-dismiss="alert">×</button>
                      <strong>Error!</strong> Something wrong. </div>
                 </div>
               <?php } ?>
            <div class="row">
            <div class="col-md-3"></div>
            <h2 style="color: #black; margin-top: 100px; text-align: center;">Online Movie Ticket Booking System</h2>
            <div class="col-md-5" style="opacity: 0.9; margin-top: 5%; margin-left: 25%; margin-right: 56px; height: 100%; width: 600px; background-color: black; ">
				<br>
			<form method="post" action="save_registration.php">
				    <table align="center" border-collapse: collapse style="padding: 30px;">
					<tr>
						<td colspan="2" style="text-align: center; margin-bottom: 10px; "><h3 style="color: white; border-bottom: 1px solid #eee; padding-bottom: 5px; ">New User Registration</h3><br></td>
					</tr>
					  <tr>
						<td style="color:#ffff;">Fullname </td>
						<td ><input type="text" name="u_name" placeholder="Fullname" class="form-control" required="" ></td>
					  </tr>
					  <tr>
						<td style="color: #ffff;">Email</td>
						<td><input type="email" name="u_email" placeholder="Email" class="form-control" required="" ></td>
					  </tr>
					  <tr>
						<td style="color: #ffff;">Phone number</td>
						<td><input type="phone" name="u_phone" placeholder="Phone number" class="form-control" required="" ></td>
					  </tr>
					  <tr>
						<td style="color: #ffff;">Password</td>
						<td><input type="password" name="u_password" placeholder="Password" class="form-control" required="" ></td>
					  </tr>
					  <tr>
						<td style="color: #ffff;">Confirm password</td>
						<td><input type="password" name="u_password_cnf" placeholder="Confirm password" class="form-control" required="" ></td>
					  </tr>
					  <tr>
						
					  <tr>
							<td colspan="2" align="center">
								<br>
								<input type="submit" value="Submit" class="btn btn-primary" name="">

								<br>
								<br>
							</td>
					  </tr>
					</tr>
				</div>
			</table>
		</form>
	</div>
</div>
</div>
</div>

    <?php require( 'part/footer.php' ) ?>
      <!-- Scripting Area -->
     <script src="js/jquery-3.4.1.slim.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/bootstrap.bundle.min.js"></script>

    </body>
</html>
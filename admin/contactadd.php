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
              <h4><b>Add New Address</b></h4>
            </div>
            <div class="col-md-6"  style="text-align: right " >
               <a href="contact_list.php"class="btn btn-primary">Contact List</a>
            </div>
          </div>
          <hr>
          <form method="POST" action="connection.php">
            <div class="form-group">
                    <label for="p_name">Hall Name</label>
                    <input name="p_name" type="text" class="form-control" id="p_name" placeholder="Enter full name"  />
                  </div>
                  <div class="form-group">
                    <label for="p_location">Location</label>
                    <input name="p_location" type="text" class="form-control" id="p_location" placeholder="Enter Location" />
                  </div>
                  <div class="form-group">
                    <label for="p_address">Address</label>
                    <input name="p_address" type="text" class="form-control" id="p_address" placeholder="Enter address" />
                  </div>
                  <div class="form-group">
                    <label for="p_email">Email</label>
                    <input name="p_email" type="email" class="form-control" id="p_email" placeholder="Enter email" />
                  </div>
                  <div class="form-group">
                    <label for="p_phone">Phone</label>
                    <input name="p_phone" type="text" class="form-control" id="p_phone" placeholder="Enter phone"/>
                  </div>                 
                  <div class="form-group">
                    <label for="p_day">Closed Day</label>
                    <input name="p_day" type="day" class="form-control" id="p_day" placeholder="Enter closed day" />
                  </div>
                  <div class="form-group">
                    <select name="p_status" class="form-control">
                      <option value="1">Active</option>
                      <option value="0">InActive</option>
                      option
                    </select>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-success" name="contactsave">Save</button>
                  </div>
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
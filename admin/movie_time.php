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
              <h4><b>Movie Time</b></h4>
            </div>
            <div class="col-md-6"  style="text-align: right " >
               <a href="add_movie_time.php"class="btn btn-primary">Add New Movie Time</a>
            </div>
          </div>
          <hr>
         <table id="users" class="table table-striped table-bordered table-hover table-sm">
          <thead>
            <tr>
              <th style="text-align: center;"> #</th>
              <th style="text-align: center;"> Movie Name</th>
              <th style="text-align: center;"> Movie Time</th>
              <th style="text-align: center;"> Movie Date</th>
              <th style="text-align: center;"> Action </th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i =1;
            $result = "SELECT tb_time.*, tb_movie.m_name FROM tb_time left join tb_movie on tb_movie.m_id=tb_time.movieid";
            if ($result=mysqli_query($db,$result))
            {
            while ($row=mysqli_fetch_assoc($result))
            { ?>
            <tr>
              <td style="text-align: center;"><?php echo $i++; ?></td>
              <td style="text-align: center;"><?php echo $row['m_name'];?> </td>
              <td style="text-align: center;"><?php echo date('d-m-Y', strtotime($row['ti_date'])); ?></td>
              <td style="text-align: center;"><?php echo date('h:ia', strtotime($row['ti_time'])); ?></td>
              <td style="line-height: 10px; text-align: center;">
                <button class="btn  btn-sm btn-warning" data-toggle="modal" data-target="#editmodal_<?php echo $row['ti_id'];?>"> Edit
                </button>
                <button type="button" class="btn  btn-sm btn-danger" data-toggle="modal" data-target="#deletemodal_<?php echo $row['ti_id'];?>"> Delete
                </button>
              </td>
            </tr>
              <div class="modal" tabindex="-1" role="dialog" id="editmodal_<?php echo $row['ti_id'];?>">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Time & Date</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="form-group">
                      <form method="POST" action="connection.php">
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Time & Date: </label>
                            <input type="text" name="ti_time" value="<?php  echo $row['ti_time'];?>" class="form-control">
                             <input type="text" name="ti_date" value="<?php  echo $row['ti_date'];?>" class="form-control">
                            <input hidden="" name="ti_id" value="<?php  echo $row['ti_id'];?>">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary" name="timeEditSave">Save changes</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </form>
                      </div>
                  </div>
                </div>
              </div>
                    
              <div class="modal" tabindex="-1" role="dialog" id="deletemodal_<?php echo $row['ti_id'];?>">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Category</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form method="POST" action="connection.php">
                    <div class="modal-body">
                      <div class="form-group">
                          <label>Time & Date: </label>
                          <input type="text" name="" readonly="" value="<?php  echo $row['ti_time'];?>" class="form-control">
                           <input type="text" name="" readonly="" value="<?php  echo $row['ti_date'];?>" class="form-control">
                            <input hidden="" name="ti_id" value="<?php  echo $row['ti_id'];?>">
                      </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger" name="deleteTimeSave">Delete</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
              <?php } }?>
            </tbody>
          </table>
        </div>
        <div class="col-md-1"></div>
      </div>

    </div>

        <!-- Scripting Area -->
       <script src="../js/jquery-3.4.1.slim.min.js"></script>
       <script src="../js/bootstrap.min.js"></script>
       <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <?php require_once('admin_footer.php'); ?>
    </body>
  </html>
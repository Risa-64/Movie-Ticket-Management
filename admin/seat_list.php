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
              <h4><b>Seat List</b></h4>
            </div>
            <div class="col-md-6"  style="text-align: right " >
               <a href="add_seat.php"class="btn btn-primary">Add New Seat</a>
            </div>
          </div>
          <hr>
          <table class="table table-bordered table-hover table-striped">
            <thead>
            <tr>
              <th style="text-align: center;"> Serial</th>
              <th style="text-align: center;"> Seat Name</th>
              <th style="text-align: center;"> Seat Price </th>
              <th style="text-align: center;"> Action </th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $i=1;
            $result = "SELECT * FROM tb_seat";
              if ($result=mysqli_query($db,$result))
                {
                while ($row=mysqli_fetch_assoc($result))
                  {
                    ?>
                    <tr>
              <td style="text-align: center;"><?php echo $i++; ?></td>
              <td style="text-align: center;"><?php echo $row['s_name'];?> </td>
              <td style="text-align: center;"><?php echo $row['s_price']."Tk";?> </td>
              <td style="line-height: 10px; text-align: center;">
            <button class="btn  btn-sm btn-warning" data-toggle="modal" data-target="#editmodal_<?php echo $row['s_id'];?>"> Edit
                </button>
                <button type="button" class="btn  btn-sm btn-danger" data-toggle="modal" data-target="#deletemodal_<?php echo $row['s_id'];?>"> Delete
                </button>
              </td>
            </tr>
              <div class="modal" tabindex="-1" role="dialog" id="editmodal_<?php echo $row['s_id'];?>">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Seat & Price</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="form-group">
                      <form method="POST" action="connection.php">
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Seat & Price: </label>
                            <input type="text" name="s_name" value="<?php  echo $row['s_name'];?>" class="form-control">
                             <input type="text" name="s_price" value="<?php  echo $row['s_price'];?>" class="form-control">
                            <input hidden="" name="s_id" value="<?php  echo $row['s_id'];?>">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary" name="seatEditSave">Save changes</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </form>
                      </div>
                  </div>
                </div>
              </div>
                    
              <div class="modal" tabindex="-1" role="dialog" id="deletemodal_<?php echo $row['s_id'];?>">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Seat</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form method="POST" action="connection.php">
                    <div class="modal-body">
                      <div class="form-group">
                          <label>Seat & Price: </label>
                          <input type="text" name="" readonly="" value="<?php  echo $row['s_name'];?>" class="form-control">
                           <input type="text" name="" readonly="" value="<?php  echo $row['s_price'];?>" class="form-control">
                            <input hidden="" name="s_id" value="<?php  echo $row['s_id'];?>">
                      </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger" name="deleteSeatSave">Delete</button>
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
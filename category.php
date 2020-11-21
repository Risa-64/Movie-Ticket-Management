<?php include('connection.php'); ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
    body {
    background-color: skyblue;
    font-family: "Lato", sans-serif;
    }
    .sidenav {
    height: 100%;
    width: 200px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
    }
    .sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 17px;
    color: #818181;
    display: block;
    }
    .sidenav a:hover {
    color: #f1f1f1;
    }
    .main {
    margin-left: 300px; / Same as the width of the sidenav /
    font-size: 17px; / Increased text to enable scrolling /
    padding: 0px 10px;
    }
    @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 10px;}
    }
    </style>
  </head>
  <body>
    <div class="sidenav">
      <a href="admin/dashboard.php"button class="dropdown-btn">Dashboard
        
        <i class="fa fa-caret-down"></i>
        </button>
        <a href="home.php">Home</a>
        <a href="movie.php">Movie List</a>
        <a href="movietime.php">Movie Time</a>
        <a href="addseat.php">Movie Seat</a>
        <a href="allmovie.php">All Movie</a>
        <a href="category.php">Category</a>
        <a href="contactadd.php">Contact</a>
        <a href="Logout.php">Logout</a>
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
      <div class="container">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-5">
            <h2 style="color:black; margin-top: 100px; text-align: center;">Online Movie Ticket Booking System</h2>
            <div class="form-group">
              <form method="POST" action="connection.php">
                <div class="form-group">
                  <label>Movie Category: </label>
                  <input type="text" name="cat_name">
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-success" name="categorysave">Save</button>
                </div>
              </form>
              <hr>
              <table id="users" class="table table-striped table-bordered table-hover table-sm">
                <thead>
                  <tr>
                    <td style="text-align: center;"> #</td>
                    <td style="text-align: center;"> Movie Category</td>
                    <td style="text-align: center;"> Action </td>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i =1;
                  $result = "SELECT * FROM tb_category ";
                  if ($result=mysqli_query($db,$result))
                  {
                  while ($row=mysqli_fetch_assoc($result))
                  {?>
                  <tr>
                    <th style="text-align: center;"><?php echo $i++; ?></th>
                    <th style="text-align: center;"><?php echo $row['cat_name'];?> </th>
                    <td style="line-height: 10px;">
                      <button class="btn-warning" data-toggle="modal" data-target="#editmodal_<?php echo $row['cat_id'];?>">Edit
                      </button>
                      <button type="button" class="btn-danger"data-toggle="modal" data-target="#deletemodal_<?php echo $row['cat_id'];?>">Delete
                      </button>
                    </tr>
                    <div class="modal" tabindex="-1" role="dialog" id="editmodal_<?php echo $row['cat_id'];?>">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="form-group">
                            <form method="POST" action="connection.php">
                              <div class="modal-body">
                                <div class="form-group">
                                  <label>Category: </label>
                                  <input type="text" name="cat_name" value="<?php  echo $row['cat_name'];?>">
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="editsave">Save changes</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </form>
                            </div>
                        </div>
                      </div>
                    </div>
                          
                          <div class="modal" tabindex="-1" role="dialog" id="deletemodal_<?php echo $row['cat_id'];?>">
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
                                      <label>Category: </label>
                                      <input type="text" name="" value="<?php  echo $row['cat_name'];?>">
                                  </div>
                                </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" name="deletesave">Delete</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php } }?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</td>
</tr>
</tbody>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
$(document).ready(function() {
$('#users').DataTable();
} );
</script>
</body>
</html>
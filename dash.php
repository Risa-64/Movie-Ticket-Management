<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
  </head>
  <style>
    body {
  background-color: lightblue;
}
  </style>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <a class="navbar-brand" href="home.php" style="font-size:20px;color: #ffff;">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="dash.php"style="font-size:20px;color: #ffff;">Dashboard <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="movie.php"style="font-size:20px;color: #ffff;" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Movie
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="movie.php">Movie List</a>
              <a class="dropdown-item" href="movietime.php">Movie Time</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="seatdetails.php">Movie Seat</a>
            </div>
            <li style="font-size: 20px;" class="nav-item">
            <a class="nav-link" href="allmovie.php"style="color: #ffff;">All Movie</a>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php"style="font-size:20px;color: #ffff;">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Logout.php"style="font-size:20px;color: #ffff;">Login/Logout</a>
            </li>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <div style="padding-left:16px">
    </div>
  <body>
  <div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="dashboard">Movie Ticket Booking System</a>
  </div>
  <ul class="nav navbar-right top-nav">
          <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>Movie Ticket Booking System<b class="caret"></b></a>
      </li>
      </ul>
  <div class="collapse navbar-collapse">
    <ul class="nav navbar-nav side-nav">
              <li class="active">
          <a href="dash.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>
                  <li>
            <a href="sale"><i class="fa fa-fw fa-shopping-cart"></i> Sale Ticket</a>
          </li>
                          <li>
            <a href="register"><i class="fa fa-fw fa-shopping-cart"></i>Total Ticket</a>
          </li>
                         
                          <li>
            <a href="JavaScript:void(0);" style="font-size: 1em; color: #286090;"><i class="fa fa-wrench"></i><b> Master</b></a>
          </li>
                          <li>
            <a href="item"><i class="fa fa-fw fa-cubes"></i> Item</a>
          </li>
                          <li>
            <a href="category"><i class="fa fa-fw fa-tags"></i> Category</a>
          </li>
                          <li>
            <a href="#"><i class="fa fa-medkit"></i> Medicine Type</a>
          </li>
                          <li>
            <a href="supplier"><i class="fa fa-fw fa-users"></i> Supplier</a>
          </li>
                          <li>
            <a href="#"><i class="fa fa-fw fa-users"></i> Customer</a>
          </li>
                          <li>
            <a href="employee"><i class="fa fa-fw fa-users"></i> Employee</a>
          </li>
                          <li>
            <a href="role"><i class="fa fa-fw fa-user-md"></i> Role</a>
          </li>
                          <li>
            <a href="payment_type"><i class="fa fa-fw fa-money"></i> Payment Type</a>
          </li>
                          <li>
            <a href="setting"><i class="fa fa-fw fa-cogs"></i> Setting</a>
          </li>
                          <li>
            <a href="" style="font-size: 1em; color: #286090;"><i class="fa fa-wrench"></i><b> Sale/Purchase Return</b></a>
          </li>
                <li>
          <a href="register"><i class="fa fa-fw fa-shopping-cart"></i> Sale return register</a>
        </li>
        <li>
          <a href="invoice"><i class="fa fa-fw fa-info"></i> Sale return invoice</a>
        </li>

                    <li>
                <a href="report"><i class="fa fa-fw fa-database"></i> Report</a>
            </li>
                  </ul>
  </div>
</nav>    <div id="page-wrapper" style="min-height: calc( 100vh - 51px );">
      <div class="container-fluid">
        
  <div class="row">

    <div class="col-md-12">

      <h2 class="page-header"><i style="color: #337ab7;" class="fa fa-fw fa-dashboard"></i> Dashboard</h2>

    </div>

  </div>

  <div class="row">

    <div class="col-md-3">

      <div class="panel panel-info">

        <div class="panel-heading">

          <div class="row">

            <div class="col-md-3">

              <i class="fa fa-cubes fa-3x"></i>

            </div>

            <div class="col-md-9 text-right">

              <div class="huge">1000</div>

              <div>Items</div>

            </div>

          </div>

        </div>


      </div>

    </div>

    
    
    <div class="col-md-3">

      <div class="panel panel-danger">

        <div class="panel-heading">

          <div class="row">

            <div class="col-md-3">

              <i class="fa fa-exclamation-triangle fa-3x"></i>

            </div>

            <div class="col-md-9 text-right">

              <div class="huge">999</div>

              <div>Stock Alert</div>

            </div>

          </div>

        </div>

        <a href="alert">
         <div class="panel-footer">

            <span style="color: rgb(169, 68, 66);" class="pull-left">View Details</span>

            <span style="color: rgb(169, 68, 66);" class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

            <div class="clearfix"></div>

          </div>

        </a>

      </div>

    </div>

    
    
    <div class="col-md-3">

      <div class="panel panel-warning">

        <div class="panel-heading">

          <div class="row">

            <div class="col-md-3">

              <i class="fa fa-shopping-cart fa-3x"></i>

            </div>

            <div class="col-md-9 text-right">

              <div class="huge">314</div>

              <div>Total Ticket</div>

            </div>

          </div>

        </div>

        <a href="#">

          <div class="panel-footer">

            <span style="color:rgb(138, 109, 59);" class="pull-left">View Details</span>

            <span style="color:rgb(138, 109, 59);" class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

            <div class="clearfix"></div>

          </div>

        </a>

      </div>

    </div>

    
    
    <div class="col-md-3">

      <div class="panel panel-success">

        <div class="panel-heading">

          <div class="row">

            <div class="col-md-3">

              <i class="fa fa-shopping-cart fa-3x"></i>

            </div>

            <div class="col-md-9 text-right">

              <div class="huge">70</div>

              <div>Sales</div>

            </div>

          </div>

        </div>

        <a class="navbar-link" href="#">

          <div class="panel-footer">

            <span style="color: rgb(60, 118, 61);" class="pull-left">View Details</span>

            <span style="color: rgb(60, 118, 61);" class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

            <div class="clearfix"></div>

          </div>

        </a>

      </div>

    </div>

    
  </div>

  <div class="row">

    
      
        <div class="col-md-6">

          <div class="panel panel-primary">

            <div class="panel-heading">

              <h3 class="panel-title"><i class="fa fa-money fa-fw"></i>Sales</h3>

            </div>

            <div style="overflow: scroll; height: 180px;" class="panel-body">

              <div class="table-responsive">

                <table class="table table-bordered table-hover table-condensed">

                  <thead>

                  <tr>

                    <th>#</th>

                    <th>Datetime</th>

                    <th>Amount</th>

                  </tr>

                  </thead>

                  <tbody>
                   
                    <tr>

                      <td>308</td>

                      <td>2020-02-20 13:55:08</td>

                      <td>Tk. 1995.00</td>

                    </tr>

                  
                    <tr>

                      <td>307</td>

                      <td>2020-02-20 13:34:12</td>

                      <td>Tk. 713.00</td>

                    </tr>

                  
                    <tr>

                      <td>306</td>

                      <td>2020-02-20 13:19:26</td>

                      <td>Tk. 1575.00</td>

                    </tr>

                  
                    <tr>

                      <td>305</td>

                      <td>2020-02-20 13:17:43</td>

                      <td>Tk. 595.00</td>

                    </tr>
        
                    <tr>

                      <td>300</td>

                      <td>2020-02-20 12:17:47</td>

                      <td>Tk. 6300.00</td>

                    </tr>

                    <tr>

                      <td>299</td>

                      <td>2020-02-20 12:12:47</td>

                      <td>Tk. 441.00</td>

                    </tr>

                  
                    <tr>

                      <td>298</td>

                      <td>2020-02-20 12:08:09</td>

                      <td>Tk. 1117.00</td>

                    </tr>

                  
                  </tbody>

                </table>

              </div>

              <div class="text-right">

                <a href="#">View All Booked Ticket <i class="fa fa-arrow-circle-right"></i></a>

              </div>

            </div>

          </div>

        </div>

      
    
    
      
        <div class="col-md-6">

          <div class="panel panel-primary">

            <div class="panel-heading">

              <h3 class="panel-title"><i class="fa fa-money fa-fw"></i>Total Sales</h3>

            </div>

            <div style="overflow: scroll; height: 180px;" class="panel-body">

              <div class="table-responsive">

                <table class="table table-bordered table-hover table-condensed">

                  <thead>

                  <tr>

                    <th>#</th>

                    <th>Datetime</th>

                    <th>Amount</th>

                  </tr>

                  </thead>

                  <tbody>

                  
                    <tr>

                      <td>70</td>

                      <td>2020-02-20 16:35:16</td>

                      <td>Tk. 499.00</td>

                    </tr>

                  
                    <tr>

                      <td>67</td>

                      <td>2020-02-20 16:33:25</td>

                      <td>Tk. 3691.00</td>

                    </tr>

                  
                    <tr>

                      <td>39</td>

                      <td>2020-02-20 11:56:22</td>

                      <td>Tk. 571.00</td>

                    </tr>

                  
                    <tr>

                      <td>35</td>

                      <td>2020-02-20 11:51:54</td>

                      <td>Tk. 504.00</td>

                    </tr>

                  
                    <tr>

                      <td>25</td>

                      <td>2020-02-19 04:23:49</td>

                      <td>Tk. 263.00</td>

                    </tr>

                  
                    <tr>

                      <td>18</td>

                      <td>2020-02-19 04:16:15</td>

                      <td>Tk. 6.00</td>

                    </tr>

                  
                    <tr>

                      <td>52</td>

                      <td>2020-02-19 00:00:00</td>

                      <td>Tk. 215.00</td>

                    </tr>

                  
                    <tr>

                      <td>53</td>

                      <td>2020-02-19 00:00:00</td>

                      <td>Tk. 63.00</td>

                    </tr>

                  
                    <tr>

                      <td>54</td>

                      <td>2020-02-19 00:00:00</td>

                      <td>Tk. 343.00</td>

                    </tr>

                  
                    <tr>

                      <td>55</td>

                      <td>2020-02-19 00:00:00</td>

                      <td>Tk. 1046.00</td>

                    </tr>

                  
                  </tbody>

                </table>

              </div>

              <div class="text-right">

                <a href="#">View All Sales <i class="fa fa-arrow-circle-right"></i></a>

              </div>

            </div>

          </div>

        </div>

      
    
  </div>

      </div>
    </div>
  </div>
<div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
 
        <a href="item">

          <div class="panel-footer">

            <span style="color: rgb(49, 112, 143);" class="pull-left">View Details</span>

            <span style="color: rgb(49, 112, 143);" class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

            <div class="clearfix"></div>

          </div>

        </a>

      </div>

    </div>
      </div>
    </div>
  </div>
</body>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
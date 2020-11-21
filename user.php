<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
			rel="stylesheet">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<style>
			body {
			margin: 0;
			font-family: Arial, Helvetica, sans-serif;
			}
			.topnav {
			overflow: hidden;
			background-color: #333;
			}
			.topnav a {
			float: left;
			color: #f2f2f2;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			font-size: 17px;
			}
			.topnav a:hover {
			background-color: #333;
			color: black;
			}
			.topnav a.active {
			background-color: #333;
			color: white;
			}
			</style>
		</head>
		<body>
			<div class="topnav" style="display: inline-block;width: 100%;">
				<a href="Logout.php" style="display: block;float: right"><i class="material-icons">settings_power</i>Login/Logout</a>
				<a href="contact.php" style="display: block;float: right"><i class="material-icons">supervisor_account</i>contact</a>
				<a href="user.php" style="display: block;float: right"><i class="material-icons">account_box</i>User</a>
				<a class="active" href="home.php" style="display: block;float: right"><i class="material-icons">account_balance</i>Home</a>
				<a href="dash.php" style="display: block;float: right"><i class="material-icons">dashboard</i>Dashboard</a>
			</div>
			<div style="padding-left:16px">
				
			</div>
			<body style="background-image: url('image/user_image.jpg'); background-repeat: no-repeat; background-size: cover;">
				<div class="container">
					
					<div class="row">
						<div class="col-md-8">
							<select class="form-control" name="" style="margin-top: 5%;">
								<option value="">Select location for movietime</option>
								<option value="">Bashundhora shopping mall,panthopath</option>
								<option value="">Shimanto Shambar,Dhanmondi 2</option>
								<option value="">Sks tower,Mohakhali</option>
							</select>
							<tr>
								<td colspan="2" align="center"><button><a href="dash.php">Submit</a></button></td>
							</tr>
						</div>
						<div class="col-md-4" style="opacity: 0.5; margin-top: 5%; margin-left: 50%; margin-right: 70px; height: 200px; width: 400px; background-color:#CCC; color:black; padding:20px;">
							
							<h4>Select Your Desired Location Now. </h4>
							
						</div>
					</div>
					
					
				</body>
			</html>
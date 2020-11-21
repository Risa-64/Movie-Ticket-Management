<?php include('connection.php'); ?>
<!DOCTYPE html>
<html>
  <head>
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
  </head>
  <style>
  </style>
  <body>
    <?php require( './part/header.php' ) ?>
<body>
		
				<div id="header">
					<div id="menu">
						<?php
							//include("includes/menu.inc.php");
						?>
					</div>
				</div>
			<center>	<h3 > Please pay the amount in bkash number 01619094952 </h3></center>
			<center>	<h4 > after the payment you will recieve a confirmation message at your mail </h4></center>
			<?php
			//$link = mysqli_connect("localhost","root","","final_shop") or die("error");
			//$name=$_REQUEST["moviename"];
	//$price=$_REQUEST["price"];
	  //$username=$_SESSION["unm"];
	  //$umail=$_REQUEST["mail"];
	
			//$sql="insert into pending(username,bookname,price,mail)
			//values('$username','$name','$price','$umail')";
			//$result=mysqli_query($link,$sql);


			?>
			
			<div class="container">
    <div class="row"style="margin-top: 5%; margin-left: 0%; margin-right:00%;">
		<div class="col-md-3 cart">
			<h3>New Movie</h3>
			<div class="col-md-3">
				<div class="singel_Movie">
					<img style="width: 300px; height: 350px;"src="image/alimovie_image.jpg" alt="Movie image">
					<p>Movie Name: Ali Movie</p>
					<a href="#" class="btn btn-primary ct" >Book Ticket</a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="singel_Movie">
					<img style="width: 300px; height: 350px;"src="image/Angaar_image.jpg"  alt="Movie image">
					<p>Movie Name: Angaar</p>
					<a href="#" class="btn btn-primary ct">Book Ticket</a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="singel_Movie">
					<img style="width: 300px; height: 350px;" src="image/mulan.jpg"  alt="movie image">
					<p>Movie Name: Mulan</p>
					
					<a href="#" class="btn btn-primary ct">Book Ticket</a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="singel_book">
					<img style="width: 300px; height: 350px;"src="image/nodorai_image.jpg"  alt="book image">
					<p>Movie Name:Nodorai</p>
					
					<a href="#" class="btn btn-primary ct">Book Ticket</a>
				</div>
			</div>
		</div>
	</div>
	
	
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>		
</body>
</html>
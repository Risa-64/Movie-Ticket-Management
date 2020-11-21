<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<style>
		body {
		font-family: "Lato", sans-serif;
		}
		.sidenav {
		height: 100%;
		width: 0;
		position: fixed;
		z-index: 1;
		top: 0;
		left: 0;
		background-color: #111;
		overflow-x: hidden;
		transition: 0.5s;
		padding-top: 60px;
		}
		.sidenav a {
		padding: 8px 8px 8px 32px;
		text-decoration: none;
		font-size: 25px;
		color: #818181;
		display: block;
		transition: 0.3s;
		}
		.sidenav a:hover {
		color: #f1f1f1;
		}
		.sidenav .closebtn {
		position: absolute;
		top: 0;
		right: 25px;
		font-size: 36px;
		margin-left: 50px;
		}
		@media screen and (max-height: 450px) {
		.sidenav {padding-top: 15px;}
		.sidenav a {font-size: 18px;}
		}
		</style>
		<style>
		/* Popup container - can be anything you want */
		.popup {
		position: relative;
		display: inline-block;
		cursor: pointer;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
		}
		/* The actual popup */
		.popup .popuptext {
		visibility: hidden;
		width: 160px;
		background-color: #555;
		color: #fff;
		text-align: center;
		border-radius: 6px;
		padding: 8px 0;
		position: absolute;
		z-index: 1;
		bottom: 125%;
		left: 50%;
		margin-left: -80px;
		}
		/* Popup arrow */
		.popup .popuptext::after {
		content: "";
		position: absolute;
		top: 100%;
		left: 50%;
		margin-left: -5px;
		border-width: 5px;
		border-style: solid;
		border-color: #555 transparent transparent transparent;
		}
		/* Toggle this class - hide and show the popup */
		.popup .show {
		visibility: visible;
		-webkit-animation: fadeIn 1s;
		animation: fadeIn 1s;
		}
		/* Add animation (fade in the popup) */
		@-webkit-keyframes fadeIn {
		from {opacity: 0;}
		to {opacity: 1;}
		}
		@keyframes fadeIn {
		from {opacity: 0;}
		to {opacity:1 ;}
		}
		</style>
		<?php
			include("includes/head.inc.php");
		?>
	</head>
	<body>
		<!-- start header -->
		
		<?php
			include("includes/menu.inc.php");
			
		?>
		
		
		
		<!-- end header -->
		
		<!-- start page -->
		<div class="img amader-slider owl-carousel">
			<img src="image/mulan.jpg" alt="slider image">
			<img src="image/user_image.jpg" alt="slider image">
		</div>
		<ul>
			
			
			
		</div>
		<script>
		function openNav() {
		document.getElementById("mySidenav").style.width = "250px";
		}
		function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
		}
		</script>
		<script>
		// When the user clicks on div, open the popup
		function myFunction() {
		var popup = document.getElementById("myPopup");
		popup.classList.toggle("show");
		}
		</script>
		<h1 class="title">Welcome to
		<?php
			if(isset($_SESSION['status']))
			{
				echo $_SESSION['unm'];
			}
			else
				{
				echo 'Movie ticket';
			}
		?>
		</h1>
		
		
		<div class="container">
			<?php
			$link=mysqli_connect("localhost","root","","dbmovie")or die("Can't Connect...");
			$query="select *from movie where m_id='1'";
			$res=mysqli_query($link,$query) or die("Can't Execute Query...");
			while($row=mysqli_fetch_assoc($res))
			{
			?>
			<div class="col-md-12 cart">
				<h2>New movie</h2>
				<div class="row">
					<div class="col-md-3">
						<div class="singel_movie">
							<img src="<?php echo $row['m_img'];?>" alt="movie image">
							<p>Movie  Name: <?php echo $row['m_nm'];?></p>
							<p>Publisher: <?php echo $row['m_publisher'];?> </p>
							<?php if(isset($_SESSION['status']))
														{
															echo '<a class="btn btn-primary ct" href="process_cart.php?nm='.$row['b_nm'].'&rate='.$row['b_price'].'">Add to Cart</a>';
														}
														else {
															
														
							?>
							<div class="popup"  onclick="myFunction()">Add to cart
								<span class="popuptext" id="myPopup">Please Login..</span>
								
							</div>
							
							<?php } ?>
							
						</div>
					</div>
					<?php } ?>
					<?php
					$link=mysqli_connect("localhost","root","","dbmovie")or die("Can't Connect...");
					$query="select *from book where b_id='52'";
					$res=mysqli_query($link,$query) or die("Can't Execute Query...");
					while($row=mysqli_fetch_assoc($res))
					{
					?>
					<div class="col-md-3">
						<div class="singel_book">
							<img src="<?php echo $row['b_img'];?>" alt="book image">
							<p>Book  Name: <?php echo $row['b_nm'];?></p>
							<p>Publisher: <?php echo $row['b_publisher'];?> </p>
							<?php if(isset($_SESSION['status']))
														{
															echo '<a class="btn btn-primary ct" href="process_cart.php?nm='.$row['b_nm'].'&rate='.$row['b_price'].'">Add to Cart</a>';
														}
														else {
															
														
							?>
							<div class="popup"  onclick="myFunction()">Add to cart
								<span class="popuptext" id="myPopup">Please Login..</span>
								
							</div>
							
							<?php } ?>
							
						</div>
					</div>
					<?php } ?>
					
					<?php
												$link=mysqli_connect("localhost","root","","dbmovie")or die("Can't Connect...");
												$query="select *from book where b_id='53'";
												$res=mysqli_query($link,$query) or die("Can't Execute Query...");
												while($row=mysqli_fetch_assoc($res))
												{
					?>
					<div class="col-md-3">
						<div class="singel_book">
							<img src="<?php echo $row['b_img'];?>" alt="book image">
							<p>Book  Name: <?php echo $row['b_nm'];?></p>
							<p>Publisher: <?php echo $row['b_publisher'];?> </p>
							<?php if(isset($_SESSION['status']))
														{
															echo '<a class="btn btn-primary ct" href="process_cart.php?nm='.$row['b_nm'].'&rate='.$row['b_price'].'">Add to Cart</a>';
														}
														else {
															
														
							?>
							<div class="popup"  onclick="myFunction()">Add to cart
								<span class="popuptext" id="myPopup">Please Login..</span>
								
							</div>
							
							<?php } ?>
							
						</div>
					</div>
					<?php } ?>
					<?php
												$link=mysqli_connect("localhost","root","","dbmovie")or die("Can't Connect...");
												$query="select *from book where b_id='13'";
												$res=mysqli_query($link,$query) or die("Can't Execute Query...");
												while($row=mysqli_fetch_assoc($res))
												{
					?>
					<div class="col-md-3">
						<div class="singel_book">
							<img src="<?php echo $row['b_img'];?>" alt="book image">
							<p>Book  Name: <?php echo $row['b_nm'];?></p>
							<p>Publisher: <?php echo $row['b_publisher'];?> </p>
							<?php if(isset($_SESSION['status']))
														{
															echo '<a class="btn btn-primary ct" href="process_cart.php?nm='.$row['b_nm'].'&rate='.$row['b_price'].'">Add to Cart</a>';
														}
														else {
															
														
							?>
							<div class="popup"  onclick="myFunction()">Add to cart
								<span class="popuptext" id="myPopup">Please Login..</span>
								
							</div>
							
							<?php } ?>
							
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="col-md-12 cart">
				<h2>All Movie</h2>
				
				
				<?php
				$pdo = mysqli_connect("localhost","root","","dbmovie")or die("Can't Connect...");
				// display the list of all members in table view
				$sql = "SELECT * FROM book";
				$result=mysqli_query($pdo,$sql);
				$list = mysqli_fetch_all($result,MYSQLI_ASSOC);
				?>
				<div class="item active ">
					<div class="row">
						<?php
						$pdo = mysqli_connect("localhost","root","","dbmovie")or die("Can't Connect...");
						// display the list of all members in table view
						$sql = "SELECT * FROM book";
						$result=mysqli_query($pdo,$sql);
						while($rs=mysqli_fetch_assoc($result)) {  ?>
						<div class="col-md-3"><a href="detail.php?id= <?php echo $rs['b_id'];  ?>" class="thumbnail"><img src="<?php echo $rs['b_img'];  ?>" alt="Image" style="max-width:80%;" ></a>
						Tk <?php echo $rs['b_price']; ?><br>
						<?php if(isset($_SESSION['status']))
																		{
																			echo '<a class="btn btn-primary ct" href="process_cart.php?nm='.$rs['b_nm'].'&rate='.$rs['b_price'].'">Add to Cart</a>';
																		}
																		else {
																			
																		
						?>
						<div class="popup"  onclick="myFunction()">Add to cart
							<span class="popuptext" id="myPopup">Please Login..</span>
							
						</div>
						<?php } ?>
					</div>
					<?php } ?>
					</div><!--.row-->
					</div><!--.item-->
				</div>
			</div>
		</div>
		
		<br><br><br>
		
		
		</center>
	</div>
	
</div>

</div>
<!-- end content -->
</div>

</div>

</div>
<!-- end content -->

<!-- start sidebar -->

<!-- end sidebar -->
<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script>
$('.amader-slider').owlCarousel({
	items:1,
	autoplay:true,
	loop:true,
	autoplayTimeout:2000,
	smartSpeed:1000,
	nav:true,
	navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
	animateIn:'slide',
});
</script>
<style>
	.img .amader-slider{
		position: relative;
	}
	.owl-nav {
		position: absolute;
	top: 50%;
	color: white;
}
.owl-next{
float:right;
}
</style>
<!-- start footer -->
<div id="footer">
<?php
	include("includes/footer.inc.php");
?>
</div>
</div>
<!-- end footer -->
</body>
</html>
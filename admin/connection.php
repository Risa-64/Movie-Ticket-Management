<?php 
	require('../dbconnect.php');

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$price=$_POST['m_price'];
		$details = $_POST['m_details'];
		$cast = $_POST['m_cast'];
		$duration = $_POST['m_duration'];
		$director = $_POST['m_director'];
		$tailor = $_POST['m_tailor'];
		$category=$_POST['category_id'];
		
		$photo=$_FILES['m_photo']['name'];
//movie save query
		if ($_FILES['m_photo']['name']) {
			$path = '../image/'.$photo;
			move_uploaded_file($_FILES["m_photo"]["tmp_name"], $path);
		}else{
			$photo = '';
		}
	
        $status=$_POST['m_status'];
		$sql = "INSERT INTO tb_movie (`category_id`,`m_name`,`m_details`,`m_price`,`m_cast`,`m_duration`,`m_director`,`m_tailor`,`m_photo`,`m_status`) VALUES ('$category','$name','$details','$price','$cast','$duration','$director','$tailor','$photo', $status)";
		mysqli_query($db, $sql);
		header('location: movie_list.php');
	}
//time save query
	if (isset($_POST['timeSave'])) {
		$date = $_POST['ti_date'];
		$time=$_POST['ti_time'];
		$movieid=$_POST['movieid'];
		
		$sql = "INSERT INTO tb_time (`movieid`,`ti_date`,`ti_time`) VALUES ($movieid,'$date','$time')";
		mysqli_query($db, $sql);
		header('location: movie_time.php');

	}
//seat save query
if (isset($_POST['seatsave'])) {
		$name = $_POST['s_name'];
		$price=$_POST['s_price'];
		
		
		echo $sql = "INSERT INTO tb_seat (`s_name`,`s_price`) VALUES ('$name','$price')";
		mysqli_query($db, $sql);
		header('location: seat_list.php');

	}
	//contact save query
	if (isset($_POST['contactsave'])) {
		$name = $_POST['p_name'];
		$address=$_POST['p_address'];
		$location = $_POST['p_location'];
		$email = $_POST['p_email'];
		$phone = $_POST['p_phone'];
		$day = $_POST['p_day'];
		$status = $_POST['p_status'];
		

		$sql = "INSERT INTO tb_place (`p_name`,`p_address`,`p_location`,`p_email`,`p_phone`,`p_day`,`p_status`) VALUES ('$name','$address','$location','$email','$phone','$day','$status')";
		mysqli_query($db, $sql);
		header('location: contactadd.php');

	}

	//category save query
	if (isset($_POST['categorysave'])) {
		$name = $_POST['cat_name'];
		
		$sql = "INSERT INTO tb_category (`cat_name`) VALUES ('$name')";
		mysqli_query($db, $sql);
		header('location: category_list.php');

	}

	//category edit query
	if (isset($_POST['editsave'])) {
		$cat_name = $_POST['cat_name'];
		$cat_id = $_POST['cat_id'];
		
		$sql = "UPDATE tb_category SET cat_name='$cat_name' WHERE cat_id='$cat_id'  ";
		mysqli_query($db, $sql);
		header('location: category_list.php');
	}
	
	//category edit query
	if (isset($_POST['deletesave'])) {
		$cat_id = $_POST['cat_id'];
		
		$sql = "DELETE FROM tb_category WHERE cat_id='$cat_id' ";
		mysqli_query($db, $sql);
		header('location: category_list.php');
	}
	//time edit query
	if (isset($_POST['timeEditSave'])) {
		$ti_time = $_POST['ti_time'];
		$ti_date = $_POST['ti_date'];
		$ti_id = $_POST['ti_id'];
		
		$sql = "UPDATE tb_time SET ti_time='$ti_time', ti_date='$ti_date' WHERE ti_id='$ti_id' ";
		mysqli_query($db, $sql);
		header('location: movie_time.php');
	}
	
	//time delete query
	if (isset($_POST['deleteTimeSave'])) {
		$ti_id = $_POST['ti_id'];
		
		$sql = "DELETE FROM tb_time WHERE ti_id='$ti_id' ";
		mysqli_query($db, $sql);
		header('location: movie_time.php');
	}
	//seat edit query
	if (isset($_POST['seatEditSave'])) {
		$s_name = $_POST['s_name'];
		$s_price = $_POST['s_price'];
		$s_id = $_POST['s_id'];
		
		$sql = "UPDATE tb_seat SET s_name='$s_name', s_price='$s_price' WHERE s_id='$s_id' ";
		mysqli_query($db, $sql);
		header('location: seat_list.php');
	}
	
	//seat delete query
	if (isset($_POST['deleteSeatSave'])) {
		$s_id = $_POST['s_id'];
		
		$sql = "DELETE FROM tb_seat WHERE s_id='$s_id' ";
		mysqli_query($db, $sql);
		header('location: seat_list.php');
	}
	

?>
<?php
	require_once 'config1.php';
	if(ISSET($_POST['save'])){
		$image_name = $_FILES['user_passport']['name'];
		$image_temp = $_FILES['user_passport']['tmp_name'];
		$user_name = $_POST['user_name'];
		$exp = explode(".", $image_name);
		$end = end($exp);
		$name = time().".".$end;
		if(!is_dir("./uploads"))
			mkdir("uploads");
		$path = "uploads/".$name;
		$allowed_ext = array("gif", "jpg", "jpeg", "png");
		if(in_array($end, $allowed_ext)){
			if(move_uploaded_file($image_temp, $path)){
				mysqli_query($conn, "INSERT INTO `user_tbl` VALUES('', '$user_name', '$path')") or die(mysqli_error());
				echo "<script>alert('User account saved!')</script>";
				header("location: index.php");
			}	
		}else{
			echo "<script>alert('Image only')</script>";
		}
	}
?>
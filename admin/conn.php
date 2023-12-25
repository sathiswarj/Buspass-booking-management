<?php
	$conn=mysqli_connect("localhost", "root", "", "buspass_db");
 
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>
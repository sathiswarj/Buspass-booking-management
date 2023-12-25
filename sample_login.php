


<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "buspass_db";

$con=mysqli_connect($servername,$username,$password,$dbname);
 if(mysqli_connect_error()) 
{ 
   die("Failed to connect with MYSQL".mysqli_connect_error()); 
}


$user_gmail=$_POST['user_gmail']; 
$user_password=$_POST['user_password']; 
// echo $admin_id.$password;
// exit;
$sql="SELECT * FROM `user_tbl` WHERE `user_gmail`='$user_gmail' and `user_password`='$user_password'";
// echo $sql;
// exit; 
$result=mysqli_query($con,$sql); 
$row=mysqli_fetch_array($result,MYSQLI_ASSOC); 
$count=mysqli_num_rows($result);
// echo $count;
// exit;
if($count>0 ) 
{ 
	// if($row['bus_pass_status']==1)
	// {
   session_start();
   $_SESSION['user_gmail'] = $user_gmail;
header('location:user_panel/production/form.php'); 

} 

// else {
// 		header('Location:login.php?res=2');
// 	}
// }

else
{ 
// echo "enter correct username";
 header('Location:login.php?res=0');
} 
?>






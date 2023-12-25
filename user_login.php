<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "buspass_db";

$con=mysqli_connect($servername,$username,$password,$dbname); if(mysqli_connect_error()) 
{ 
   die("Failed to connect with MYSQL".mysqli_connect_error()); 
}


$user_name=$_POST['user_name']; 
$user_password=$_POST['user_password']; 
// echo $admin_id.$password;
// exit;
$sql="SELECT * FROM `user_tbl` WHERE `user_name`='$user_name' and `user_password`='$user_password'";
// echo $sql;
// exit; 
$result=mysqli_query($con,$sql); 
$row=mysqli_fetch_array($result,MYSQLI_ASSOC); 
$count=mysqli_num_rows($result);
// echo $count;
// exit;
if($count>0) 
{ 
   session_start();
   $_SESSION['user_name'] = $user_name;
header('Location:mybuspass.php'); 

} 
else 
{ 

echo "<script>alert('login unsuccessfull')</script>";
// header('Location:login.php');
} 
?>
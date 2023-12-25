




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
$sql="select * from user_tbl where user_gmail='$user_gmail' and user_password='$user_password'"; 
$result=mysqli_query($con,$sql); 
$row=mysqli_fetch_array($result,MYSQLI_ASSOC); 
$count=mysqli_num_rows($result);
if($count==1) 
{ 
    session_start();
   $_SESSION['user_gmail'] = $user_gmail;  
    $_SESSION['user_password'] = $user_password;

// header('Location:index.php');
header('Location:user_panel/production/form.php'); 

} 
else 
{ 
  // echo "<h1><center><font color=black>LOGIN UNSUCCESSFULL</font></center></h1>";
  header('Location:login.php?res=0');
} 
?>
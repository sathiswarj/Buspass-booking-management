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


$user_no=$_POST['user_no']; 
// echo $admin_id.$password;
// exit;
$sql="SELECT * FROM `user_tbl` WHERE `user_no`='$user_no' ";
// echo $sql;
// exit; 
$result=mysqli_query($con,$sql); 
$row=mysqli_fetch_array($result,MYSQLI_ASSOC); 
$count=mysqli_num_rows($result);
// echo $count;
// exit;
if($count>0 ) 
{ 
   if($row['bus_pass_status']==1)
   
{ 
   session_start();
   $_SESSION['user_no'] = $user_no;
header('Location:mybuspass1.php'); 

} 
else{
      header('Location:buspass.php?res=2');
   } 
}
else
{ 

 header('Location:buspass.php?res=0');
// header('Location:login.php');
} 
?>
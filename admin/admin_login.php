<?php 
include('final.php'); 
$uname=$_POST['user_name']; 
$pword=$_POST['password_user']; 
$sql="select * from admin_tbl where username='$uname' and password='$pword'"; 
$result=mysqli_query($con,$sql); 
$row=mysqli_fetch_array($result,MYSQLI_ASSOC); 
$count=mysqli_num_rows($result);
if($count==1) 
{ 
  

// header('Location:index.php');
header('Location: buspasslist.php'); 

} 
else 
{ 
	//echo "<h1><center><font color=black>LOGIN UNSUCCESSFULL</font></center></h1>";
	header('Location:index.php?res=0');
} 
?>
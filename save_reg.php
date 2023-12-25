<?php 

$servername = "localhost";

$username = "root"; 

$password = ""; 

$dbname = "buspass_db"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}

?> 
<?php
$user_name = $_POST['user_name'];
$user_type = $_POST['user_type'];
$clg_name = $_POST['clg_name'];
$user_age = $_POST['user_age'];
$user_gender = $_POST['user_gender'];
$user_dob = $_POST['user_dob'];
$user_add = $_POST['user_add'];
$user_no = $_POST['user_no'];
$from_stop = $_POST['from_stop'];
$to_stop = $_POST['to_stop'];
$user_password = $_POST['user_password'];
$user_gmail = $_POST['user_gmail'];
$amount = "1000";

 

$filename1 = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "uploads/" . $filename1;
// exit;
 if (move_uploaded_file($tempname, $folder)) {
        echo "  ";
    } else {
        echo " ";
  
    }
    $filename2 = $_FILES["uploadfiles"]["name"];
    $tempname = $_FILES["uploadfiles"]["tmp_name"] ;
    $folder = "uploads/" . $filename2;
// exit;
 if (move_uploaded_file($tempname, $folder)) {
        echo " ";
    } else {
        echo " ";
  
    }
    $filename3 = $_FILES["uploadfiless"]["name"];
    $tempname = $_FILES["uploadfiless"]["tmp_name"];
    $folder = "uploads/" . $filename3;
// exit;
 if (move_uploaded_file($tempname, $folder)) {
        echo " ";
    } else {
        echo " ";
  
    }


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `user_tbl`(`user_name`, `user_type`, `clg_name`, `user_gender`, `user_dob`, `user_age`, `user_add`, `user_no`, `from_stop`, `to_stop`,
`user_password`,`user_gmail`,`user_proof`,`user_passport`,`user_aadhar_img`,`amount`) VALUES ('$user_name','$user_type','$clg_name','$user_gender','$user_dob','$user_age','$user_add','$user_no','$from_stop','$to_stop','$user_password','$user_gmail','$filename1','$filename2','$filename3','$amount')";

// echo $sql;
// exit;
//college student
//senior citizen
//physically challenged
//working employee
if($user_type=="school student")
{
    $u_type=1;
}
if($user_type=="college student")
{
    $u_type=2;
}
if($user_type=="senior citizen")
{
    $u_type=3;
}
if($user_type=="physically challenged")
{
    $u_type=4;
}if($user_type=="working employee")
{
    $u_type=5;
}

if ($conn->query($sql) === TRUE) {
header('location:payment.php?amnt='.$amount.'&user_type='.$u_type);

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
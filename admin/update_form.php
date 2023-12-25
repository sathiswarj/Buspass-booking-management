 
<?php

$servername = "localhost";

$username = "root"; 

$password = ""; 

$dbname = "buspass_db"; 

$conn = new mysqli($servername, $username, $password, $dbname);

 



$user_name=$_POST['user_name'];
$user_type=$_POST['user_type'];
$clg_name=$_POST['clg_name'];
$user_gender=$_POST['user_gender'];
$user_dob=$_POST['user_dob'];
$user_age=$_POST['user_age'];
$user_add=$_POST['user_add'];
$user_no=$_POST['user_no'];
$from_stop = $_POST['from_stop'];
$to_stop = $_POST['to_stop'];
$user_passport=$_POST['user_passport'];
$user_aadhar_img=$_POST['user_aadhar_img'];
$bus_pass_status = $_POST['bus_pass_status'];
$user_password = $_POST['user_password'];
$user_gmail = $_POST['user_gmail'];
$date_from = $_POST['date_from'];
$date_to = $_POST['date_to'];
$bus_pass_status=$_POST['bus_pass_status'];
$edit_id=$_POST['edit_id'];
$old_image=$_POST['old_image'];
$old_image2=$_POST['old_image2'];
$old_image3=$_POST['old_image3'];
// echo $old_image;
// exit;
// $edit_id=$_POST['edit_id'];

// echo $phone;
// exit;


// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
 $filename1 = $_FILES["uploadfile"]["name"];
 if($filename1=="")
 {
  $new_file = $old_image;
 }
 else
 {
  $new_file = $filename1;

 }
 // echo $filename1;
 // exit;
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../uploads/" . $filename1;
// exit;
 if (move_uploaded_file($tempname, $folder)) {
        echo "  ";
    } else {
        echo " ";
  
    }
///PASSPORT IMAGE UPDATE

    $filename2 = $_FILES["uploadfiles"]["name"];
 if($filename2=="")
 {
  $new_file2 = $old_image2;
 }
 else
 {
  $new_file2 = $filename2;

 }
 // echo $filename1;
 // exit;
    $tempname = $_FILES["uploadfiles"]["tmp_name"];
    $folder = "../uploads/" . $filename2;
// exit;
 if (move_uploaded_file($tempname, $folder)) {
        echo "  ";
    } else {
        echo " ";
  
    }

    // AADHAR IMAGE UPDATE
 $filename3 = $_FILES["uploadfiles1"]["name"];
 if($filename3=="")
 {
  $new_file3 = $old_image3;
 }
 else
 {
  $new_file3 = $filename3;

 }
 // echo $filename1;
 // exit;
    $tempname = $_FILES["uploadfiles1"]["tmp_name"];
    $folder = "../uploads/" . $filename3;
// exit;
 if (move_uploaded_file($tempname, $folder)) {
        echo "  ";
    } else {
        echo " ";
  
    }

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE user_tbl SET user_name='$user_name',user_type='$user_type',clg_name='$clg_name',user_gender='$user_gender',user_dob='$user_dob',user_age='$user_age',user_add='$user_add',user_no='$user_no',from_stop='$from_stop',to_stop='$to_stop' ,user_password='$user_password',user_gmail='$user_gmail',user_proof ='$new_file',user_passport='$new_file2',user_aadhar_img= '$new_file3',bus_pass_status='$bus_pass_status',date_from='$date_from',date_to='$date_to' WHERE id=$edit_id";
// echo $sql;
// exit;
if ($conn->query($sql) === TRUE) {
header('location:buspasslist.php?id='.$edit_id);
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
 
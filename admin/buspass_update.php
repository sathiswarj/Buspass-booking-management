<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = new mysqli('localhost', 'root','', 'buspass_db');


$from_stop = $_POST['from_stop'];
$to_stop = $_POST['to_stop'];
$bus_pass_rate = $_POST['bus_pass_rate'];
$validate_days = $_POST['validate_days'];
$note = $_POST['note'];
$status = $_POST['status'];
$edit_id=$_POST['edit_id'];

// echo $phone;
// exit;


// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE buspass_settings_tbl SET from_stop='$from_stop',to_stop='$to_stop',bus_pass_rate='$bus_pass_rate',note='$note',validate_days='$validate_days',status='$status' WHERE id=$edit_id";
// echo $sql;
// exit;
if ($conn->query($sql) === TRUE) {
header('location:buspass_settings .php');
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>

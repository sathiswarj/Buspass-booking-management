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


$card_number=$_POST['card_number'];
$exp_date=$_POST['exp_date'];
$cvv_number=$_POST['cvv_number'];
$card_holder=$_POST['card_holder'];
// $amount = "1000";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




$sql = "INSERT INTO `payment_tbl`(  `card_number`, `exp_date`, `cvv_number`, `card_holder`) VALUES ('$card_number','$exp_date','$cvv_number','$card_holder')";

// echo $sql;
// exit;
if ($conn->query($sql) === TRUE) {
 header('location:success.php');


} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
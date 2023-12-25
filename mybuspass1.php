<!DOCTYPE html>
<html>
<head>
  <title>Digital card</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   
    <link rel="stylesheet" href="dashboard.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
/*.home-section .home-content {
    position: relative;
    padding-top: 351px;
    padding-right: 110px;
    margin-left: -116px;
}*/
.home-content {
    padding: 277px;
    padding-top: 109px;
}
 img {
   
    float: left;
    padding: 20px;
    height: 194px;
    width: 17%;
}
label.date {
    margin-left: 121px;
    margin-top: -15px;
}
     </style>
   </head>
<body>

<!--       <div style="height: 100px; background-color: rgba(255,0,0,0.1);">
 -->      <!-- <div class="profile-details">
        <img src="images/profile.jpg" alt="">
        <span class="admin_name">Harsa</span>
      
      </div>
    </nav> -->



 <?php
session_start();
$user_no = $_SESSION['user_no'];
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
if ($_SERVER['HTTP_HOST'] == 'localhost') {
$conn = new mysqli('localhost', 'root', '', 'buspass_db');
}


$editID = $user_no;
// echo $editID;
// exit;
$stmt = $conn->prepare("SELECT * FROM `user_tbl` WHERE `user_no` = ? ");
$stmt->bind_param("s", $editID);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
// $cid = $row['c_id'];
// print_r($row);
// exit;
?>

  <h2 style="text-align: center;">Profile Card</h2>
  <div class="card" id="sample">
    <div class="container">

      <center><img src="uploads/<?php echo $row['user_passport'] ?>" alt="" style="float: left;    height: 194px;width: 17%;padding: 20px;"></center>
      <div class="datas" id="datas">
      <label style="float: center; margin-left: 50px"><h5><b>Name: <?php echo $row['user_name'] ?></b></h5>
      </label>
      <br>
      <label style="float: center; margin-left: 50px"><h5><b>Mobile.No:  <?php echo $row['user_no']; ?></b></h5> </label>
      <br>
      <label style="float: center; margin-left: 50px"><h5><b>School/Clg/Office Name:  <?php echo $row['clg_name']; ?></h5></b> </label>
      <br>
 
</div>
<div class = "container-fluid">  
    <div class = "text-center">  
  <!--   <img src =  
 "https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0"  
        class = "qr-code img-thumbnail img-responsive" />  --> 
    </div>  
    <div class = "form-horizontal">  
    <div class = "form-group">  
      
      <label style="margin-left: 50px; margin-top: 2px;"class="date"><h5><b>Apply Date: <?php echo $row['created_at']; ?></b></h5></label>
      <br>
      <div class="apply-date">
      <label style="margin-left: 50px;"><h5><b>From Date:<?php echo $row['date_from']; ?></h5></b></label>
      <label style="margin-left: 300px;"><h5 ><b>To Date:<?php echo $row['date_to']; ?></h5></b></label>
        </div>
      
      <br>
      <label style="margin-left: 245px;"><h5><b>start place : <?php echo $row['from_stop']; ?>  </h5></b></label>
      <label style="margin-left: 250px;"><h5 ><b>End place : <?php echo $row['to_stop']; ?></h5></b></label>
    </div>

    <div>
      <center><h5 class="head" style="">K.BAJAR DEEN<br> "Department Head"</h5></center>
    </div>
    <div>
      <h5 class="margin" style="padding-left: 15px;"><i style="font-size:20px;color: green" class="fa">&#xf095;</i>
 User:<?php echo $row['user_type'];?></h5>
    </div>
    <div>
      <h5 class="margin" style="padding-left: 15px;"><i style="font-size:20px;color: green" class="fa">&#xf095;</i>
 Ph.No:  789554565</h5>
    </div><div>
      <h5 class="margin" style="padding-left: 15px;"><i style="font-size:20px;color: green" class="fa">&#xf095;</i>
 amount:<strike><?php echo $row['amount']; ?></strike> </h5>
<?php
if($row['user_type']=="physically challenged")
{
?>
 <h5 class="margin" style="padding-left: 15px;"><i style="font-size:20px;color: green" class="fa">&#xf095;</i>
 amount for physically challenged:<b><?php echo $row['amount']-750; ?></b> </h5>
 <?php
}
else if($row['user_type']=="working employee" )
{
?>
 <h5 class="margin" style="padding-left: 15px;"><i style="font-size:20px;color: green" class="fa">&#xf095;</i>
 amount for working employee:<b><?php echo $row['amount']-250; ?></b> </h5>
 <?php
} else if($row['user_type']=="school student" )
{
?>
 <h5 class="margin" style="padding-left: 15px;"><i style="font-size:20px;color: green" class="fa">&#xf095;</i>
 amount for school student:<b>no amount</b></h5>
 <?php
}else if($row['user_type']=="senior citizen" )
{
?>
 <h5 class="margin" style="padding-left: 15px;"><i style="font-size:20px;color: green" class="fa">&#xf095;</i>
 amount for senior citizen:<b><?php echo $row['amount']-250; ?></b></h5>
 <?php
}
else
{
 ?>
<h5 class="margin" style="padding-left: 15px;"><i style="font-size:20px;color: green" class="fa">&#xf095;</i>
 amount for college student :<b>No amount</b> </h5>
 <?php
}
 ?>
    </div>
    <div>
      <h5 class="margin" style="padding-left: 15px;"><i style="font-size:20px;color: green" class="fa">&#xf0e0;</i> GMail:  test@gmail.com</h5>
    </div>
    <div>
      <h3 class="margin" style="padding-left: 15px;"><i style="font-size:20px;color: green" class="fa">&#xf2bc;</i><b> Address:  <?php echo $row['user_add']; ?></b></h3>
    </div>


 
    <div>
      
    </div>
      <p><button><a href="mybuspass1.php" i style="font-size:24px;color: green;margin-left:3px; " class="fa fa-download"></i>  Download</button></a></p>
  </div>
 
 
 
    <button onclick="window.print()">Print</button>
 
  

<style type="text/css">

  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
*{
font-family: 'Poppins', sans-serif;}
.card {
    box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%);
    max-width: 1001px;
    margin: auto;
    margin-right: 252px;
    font-family: Arial, Helvetica, sans-serif;
    background-color: white;
    margin-top: 62px;
}
body{

  border-style: groove;
      background:#fff;
    }
    /*.margin
    {
        margin:20px; 
        border-top: 2px solid black;
        border-bottom: 2px solid black;
    }*/
     
    img {
  border-radius: 12%;
}
    .container{
      background: #ffffff;

    }
    .title{
      color: grey;
      font-size: 18px;
    }
    #sample button{
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
      font-size: 18px;
      font-family: sans-serif;
    }
    a{
      padding-right: 5px;
      text-decoration: none;
      font-size: 16px;
      color: black;
    }
    button:hover, a:hover{
      opacity: 0.7;
    }
    .h1, .h2, .h3, h1, h2, h3 {
    margin-top: -4px;
    margin-bottom: 10px;
}
   
 
</style>
</div>
</div>     
</body>
</html>
 
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
$stmt = $conn->prepare("SELECT * FROM `user_tbl` WHERE `user_no` = ?");
$stmt->bind_param("s", $editID);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
// $cid = $row['c_id'];
// print_r($row);
// exit;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <style >

  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
 
    .text{font-size: 33px; 
      color: black;
font-family: 'Poppins', sans-serif;
padding:24px;   
}
.user-profile img {
    width: 76px;
    height: 84px;}
.btn {
    border-radius: 8px;
    margin-top: 15px;
    padding: 10px;
    padding-right: 24px;
    padding-left: 22px;
}
.top_nav .navbar-right {
    margin: 13px;
    width: auto;
    float: right;
    padding-bottom: 45px;
}
img.display {
    width: 68px;
    margin-top: 16px;
    margin-left: 19px;
    border-radius: 29px;
}
.col-sm-4 {
    margin-top: 18px;
}
  </style>


             <form name="form"  method="POST" enctype="multipart/form-data">
  
    <div class="col-sm-4"> 
      <label>Name</label>
     <input type="text" class="form-control" name="user_name" value="<?php echo $row['user_name'] ?>" />

    </div>
   <div class="col-sm-4">
      <label>Type of user</label>
     <input type="text" class="form-control" name="user_type" value="<?php echo $row['user_type'] ?>"/>
    </div><div class="col-sm-4">
      <label>User age</label>
     <input type="text" class="form-control" name="user_age" value="<?php echo $row['user_age'] ?>"/>
    </div><div class="col-sm-4">
      <label>Mobile no</label>
     <input type="text" class="form-control" name="user_no" value="<?php echo $row['user_no'] ?>"/>
    </div><div class="col-sm-4">
      <label>User DOB</label>
     <input type="date" class="form-control" name="user_dob" value="<?php echo $row['user_dob'] ?>"/>
    </div><div class="col-sm-4">
      <label>From stop</label>
     <input type="text" class="form-control" name="from_stop" value="<?php echo $row['from_stop'] ?>"/>
    </div><div class="col-sm-4">
      <label>To stop</label>
     <input type="text" class="form-control" name="to_stop" value="<?php echo $row['to_stop'] ?>"/>
    </div> <div class="col-sm-4">
        <label>User password</label>
     <input type="password" class="form-control" name="user_password" value="<?php echo $row['user_password'] ?>">
    </div><div class="col-sm-4">
        <label>User gmail</label>
     <input type="text" class="form-control" name="user_gmail" value="<?php echo $row['user_gmail'] ?>">
    </div><div class="col-sm-12">
        <label>User Address</label>
     <input type="text" class="form-control" name="user_add" value="<?php echo $row['user_add'] ?>">
    </div>
  </div>
  <div class="img">
  <div class="col-sm-4">
      <label>proof</label><br><br>
      
<img src="../uploads/<?php echo $row['user_proof'] ?>" height="100">
              

    </div><div class="col-sm-4">
              <label>Passport size image</label><br><br>

    <td><img src="../uploads/<?php echo $row['user_passport'] ?>" height= "70" width="100"></td>
     
    </div>
    <div class="col-sm-4">
        <label>Aadhar image</label><br><br>

    <img src="../uploads/<?php echo $row['user_aadhar_img'] ?>" height="70" width="100"></div>
    </div><br>
   <br></div>
   <div class="btn-class">
    <div class="col-sm-4">
     <input type="submit" class="btn btn-info" name="submit">
    </div>
   
    </div>
  </div>
            </div>
          </div>
        </div>
          <!-- /top tiles -->

          
         
          </form>
        </div>
      </div>
    </div>
  </li>
</ul>
        <!-- /page content -->

        <!-- footer content -->
 
	
  </body>
</html>

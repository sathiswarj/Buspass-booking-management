<?php
session_start();
$user_gmail = $_SESSION['user_gmail'];
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
if ($_SERVER['HTTP_HOST'] == 'localhost') {
$conn = new mysqli('localhost', 'root', '', 'buspass_db');
}


$editID = $user_gmail;
// echo $editID;
// exit;
$stmt = $conn->prepare("SELECT * FROM `user_tbl` WHERE `user_gmail` = ?");
$stmt->bind_param("s", $editID);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
// $cid = $row['c_id'];
// print_r($row);
// exit;
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="">
	 <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>


<div class="container">
  <form action="update_form.php" method="POST" enctype="multipart/form-data">
  <div class="row">
    <h2>Hello <?php echo $row['user_name'] ?> </h2>

    </div></h2>
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
    </div>
  </div>
  <div class="img">
  <div class="col-sm-4">
      <label>proof</label>
       <div class="col-md- pe-3">

      <input class="form-control form-control-lg"  name="uploadfile" id="uploadfile" type="file" value="<?php echo $row['user_proof']; ?>"/>
                <div class="small text-muted mt-2">Upload your Driving License. Max file
                  size 20 MB</div>
<input type="text" value="<?php echo $row['user_proof']; ?>" name="old_image">
              </div>
              <div class="small text-muted mt-2"><strong>UPLOADED IMAGE</strong></div>

<img src="../uploads/<?php echo $row['user_proof'] ?>" height="100">
              

    </div><div class="col-sm-4">
            <input class="form-control form-control-lg"  name="uploadfile" id="uploadfile" type="file" value="<?php echo $row['user_passport']; ?>"/>
                <div class="small text-muted mt-2">Upload your Driving License. Max file
                  size 20 MB</div>
<input type="text" value="<?php echo $row['user_passport']; ?>" name="old_image">
              </div>
              <div class="small text-muted mt-2"><strong>UPLOADED IMAGE</strong></div>

<img src="../uploads/<?php echo $row['user_passport'] ?>" height="100">
    <td><img src="../uploads/<?php echo $row['user_passport'] ?>" height= "70" width="100"></td>
     
    </div>
    <div class="col-sm-4">
        <label>Aadhar image</label>

    <img src="../uploads/<?php echo $row['user_aadhar_img'] ?>" height="100">
    </div><br>
   <br></div>
   <div class="btn-class">
    <div class="col-sm-4">
     <input type="submit" class="btn btn-info" name="submit">
    </div>
    <div class="col-sm-4">
      <a href="buspasslist.php"  class="btn btn-success" role=button>back to list</a>
    </div>
    </div>
  </div>
  <script type="text/javascript">
      document.getElementById("user_proof").onchange = function(){
          document.getElementById("form").submit();
      };
    </script>
<style>

.btn-success {
    color: #fff;
    background-color: #5cb85c;
    border-color: #4cae4c;
    padding: 7px;
    margin-left: -314px;
    margin-top: 50px;
}
.col-sm-4 {
    margin-top: 22px;
    width: 33.33333333%;
}
input.btn.btn-info {
    margin-bottom: -234px;
}

</style>
</body>
</html>
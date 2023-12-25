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
$stmt = $conn->prepare("SELECT * FROM `user_tbl` WHERE `user_no` = ?");
$stmt->bind_param("s", $editID);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
// $cid = $row['c_id'];
// print_r($row);
// exit;
?>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">



    
<table class="table">

    <thead>

        <tr>

        <th>S.No</th>
    <th>Name</th>
    <th>Type of User</th>
    <th>User Age</th>
    <th>User DOB</th>
    <th>From stop</th>
    <th>To stop</th>
    <th>Proof</th>
    <th>Action</th>

    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {
$i=1;
                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $row['user_no'];?></td>
<td><?php echo $row['user_type'];?></td>
<td><?php echo $row['user_age'];?></td>
<td><?php echo $row['user_dob'];?></td>
<td><?php echo $row['from_stop'];?></td>
<td><?php echo $row['to_stop'];?></td>
    <td><img src="../uploads/<?php echo $row['user_proof'];?>" height="50"></td>


                    <td><a class="btn btn-info" href="edit_user.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>

                    </tr>                       

        <?php  
        $i++; 
            }

            }

        ?>                

    </tbody>

</table>

</style>
</div>
</div>     
</body>
</html>

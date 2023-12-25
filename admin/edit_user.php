<?php 
$servername = "localhost";

$username = "root"; 

$password = ""; 

$dbname = "buspass_db"; 
$conn = new mysqli($servername, $username, $password, $dbname);

$editID = $_REQUEST['id'];
$stmt = $conn->prepare("SELECT * FROM user_tbl WHERE id = ?");
$stmt->bind_param("s", $editID);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();


?> 


<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   
    <link rel="stylesheet" href="style2.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <style >
    .status-bus {
    margin-top: 290px;
}

   </style>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class=''></i>
      <span class="logo_name">Admin</span>
    </div>
      <ul class="nav-links">
         <li>
          <a href="buspasslist.php" class="sidebar-button">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="buspasslist.php" class="sidebar-button">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Buspass management</span>
          </a>
        </li>
        <li>
          <a href="user_management.php" class="sidebar-button">
            <i class='bx bx-box' ></i>
            <span class="links_name">User management</span>
          </a>
        </li>
        <li>
          <a href="site_settings.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Site settings</span>
          </a>
        </li>
        <li>
          <a href="buspass_settings.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Buspass settings</span>
          </a>
        </li>
        
        <li>
          <a href="reports.php">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Reports</span>
          </a>
        </li>
        
        <li>
          <a href="track_pass.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">Track buspass</span>
          </a>
        </li>
        
        
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span> <h4 ><div id="circle"></div>Welcome sathis !!</h4>

      </div>
      <style >
        .h4, h4 {
    font-size: 18px;
    margin-left: 850px;
}
#circle {
    background: chartreuse;
    border-radius: 50%;
    width: 19px;
    height: 19px;
    margin-left: -33px;
    margin-bottom: -19px;
}
</style>
      </div>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">
</div>
</body>
</nav>
  <form action="update_form.php" method="POST" enctype="multipart/form-data">
  <div class="row">
    <div class="col-sm-4"> 
      <label>Name</label>
     <input type="text" class="form-control" name="user_name" value="<?php echo $row['user_name'] ?>" />
             <input type="hidden" value="<?php echo $_REQUEST['id'] ?>" name="edit_id">

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
    <div class="col-sm-4">
      <label>Gmail</label>
     <input type="text" class="form-control" name="user_gmail" value="<?php echo $row['user_gmail'] ?>"/>
    </div> <div class="col-sm-4">
      <label>Organization</label>
     <input type="text" class="form-control" name="clg_name" value="<?php echo $row['clg_name'] ?>"/>
    </div>
  
    <div class="status-bus">
<label for="bus_pass_status">status</label>
<select name="bus_pass_status" id="bus_pass_status">
  <option value="2">InActivate</option>
  <option value="1">Activate</option>
</select>
</div>
  </div>
  <div class="img">
  <div class="col-sm-4">
   

      <label>proof</label>
       <div class="col-md- pe-3">

      <input class="form-control form-control-lg"  name="uploadfile" id="uploadfile" type="file" value=""/>
      <div class="small text-muted mt-2">Upload your Driving License. Max file size 20 MB</div>
<input type="text" value="<?php echo $row['user_proof']; ?>" name="old_image"></div>
              <div class="small text-muted mt-2"><strong>UPLOADED IMAGE</strong></div>
<img src="../uploads/<?php echo $row['user_proof']; ?>" height="100">
              </div>
   


    <div class="col-sm-4">
        <label>PASSPORT SIZE</label>
       <div class="col-md- pe-3">

      <input class="form-control form-control-lg"  name="uploadfiles" id="uploadfiles" type="file" value=""/>
      <div class="small text-muted mt-2">Upload your Driving License. Max file size 20 MB</div>
<input type="text" value="<?php echo $row['user_passport']; ?>" name="old_image2"></div>
              <div class="small text-muted mt-2"><strong>UPLOADED IMAGE</strong></div>
<img src="../uploads/<?php echo $row['user_passport']; ?>" height="100">
              </div>
     
    </div>
    <div class="col-sm-4">
        <label>Aadhar image</label>
       <div class="col-md- pe-3">

      <input class="form-control form-control-lg"  name="uploadfiles1" id="uploadfiles1" type="file" value=""/>
      <div class="small text-muted mt-2">Upload your Driving License. Max file size 20 MB</div>
<input type="text" value="<?php echo $row['user_aadhar_img']; ?>" name="old_image3"></div>
   f           <div class="small text-muted mt-2"><strong>UPLOADED IMAGE</strong></div>
<img src="../uploads/<?php echo $row['user_aadhar_img']; ?>" height="100">
              </div>
    </div>
        <br>

 <div class="col-sm-4">
      <label>From date</label>
     <input type="date" class="form-control" name="date_from" />
    </div>

     <div class="col-sm-4">
      <label>To date</label>
     <input type="date" class="form-control" name="date_to" />
    </div>
      </div>

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


.container {
    
    margin-inline-start: 324px;
}
.col-sm-4 {
    margin-top: 22px;
    width: 33.33333333%;
}
form {
    padding-top: 84px;
    width: 95%;
    margin-left: 11px;
}
input.btn.btn-info {
    margin-bottom: -50px;
    margin-left: 187px;
}
</style>
</body>
</html>

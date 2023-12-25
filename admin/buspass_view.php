<?php 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = new mysqli('localhost', 'root', '', 'buspass_db');

$editID = $_REQUEST['id'];
$stmt = $conn->prepare("SELECT * FROM buspass_settings_tbl WHERE id = ?");
$stmt->bind_param("s", $editID);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();


   ?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   
    <link rel="stylesheet" href="style21.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style >
     .home-section .home-content{
     position: relative;
    padding-top: 450px;
    margin-right: 190px;
}
#submit-btn{

}
.col-md-6 {
    width: 50.0000%;
    margin-top: 36px;
    margin-right: -6px;
}
#note_span{
  color:red;
  padding-top: 20px;
}
#user_to_stop{
  padding-left:20px;
}
#dropdownMenu2{
  padding-right: 10px;
}

.home-section{
  position: relative;
  background: #f5f5f5;
  min-height: 6vh;
  width: calc(100% - 240px);
  left: 240px;
  transition: all 0.5s ease;
}
   </style>
   </head>
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
          <a href="#">
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
          <a href="deliverylogin.php">
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
        <span class="dashboard">Dashboard</span>
      </div>
<form action="buspass_update.php" method="POST">
    <div class="home-content">
       <div class="col-md-6">
        <label for="from_stop" id="from_stop">From stop</label></td>
        <input type="text" id="from_stop" name="from_stop" value="<?php echo $row['from_stop'] ?>"></td>
        <input type="hidden" value="<?php echo $_REQUEST['id'] ?>" name="edit_id">
        </div>
         <div class="col-md-6" class="user_to_stop">
        <label for="to_stop" id="to_stop">To stop</label></td>
        <input type="text" id="to_stop" name="to_stop" value= "<?php echo $row['to_stop'] ?>"></td>
        </div>
         <div class="col-md-6" class="bus_pass_rate">
        <label for="bus_pass_rate" id="bus_pass_rate">Buspass rate</label></td>
        <input type="number" id="bus_pass_rate" name="bus_pass_rate" value="<?php echo $row['bus_pass_rate'] ?>"></td>
        </div>
 <div class="col-md-6" class="validate_days">
        <label for="validate_days" id="validate_days">Validate days</label></td>
        <input type="number" id="validate_days" name="validate_days" value="<?php echo $row['validate_days'] ?>"></td>
        </div>
<div class="col-md-6">
<label for="status">status</label>
<select name="status" id="status" >
    <option value="0">select</option>
  <option value="Activate">Activate</option>
  <option value="Inactivate">Inactivate</option>
</select>
</div>
<div class="col-md-6">
  <label for="note" id="note">Note</label></td>

<textarea id="note" name="note" id="note" rows="4" cols="50" value="<?php echo $row['note'] ?>"></textarea></td>

  <div class="col-md-8">
<!-- <button type="submit"name="submit" id="submit"value="submit" class="btn btn-success">Submit</button> -->
<input type="submit" name="update" value=submit>
<a href="buspass_settings_tbl.php" class="btn btn-dark" role="button">Back to list
</a>

</div>
</div>
</form>
 
<br>
<br>

    </div>
 







<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>


    


    </div> 

        </div>
      </div>

     
  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");

 </script>

</body>
</html>

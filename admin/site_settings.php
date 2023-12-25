<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   
    <link rel="stylesheet" href="style4.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <style >
     .btn-primary{
  margin-top: 9px;
  margin-bottom: -65px;
margin-left: 190px;
padding-right: 80px;
}
div#from_date {
    margin-top: -8px;
    padding: 8px;
    padding-left: -1px;
    margin-left: 2px;
}
.btn-primary {
    color: #fff;
    background-color: #337ab7;
    border-color: #2e6da4;
    padding-top: 7px;
    margin-top: 1px;
}
.date{
  margin-left: 180px;
  margin-bottom: 10px;
  margin-top: 10px;

}
.home-section{
  position: relative;
  background: #f5f5f5;
  min-height: 5vh;
  width: calc(100% - 240px);
  left: 240px;
  transition: all 0.5s ease;
}
.home-section .home-content {
    position: relative;
    padding-top: 427px;
    padding-right: 71px;
    margin-left: -444px;
    width: 100%;
    margin-right: -43px;
}
.button_tbl{
    margin-right: -49px;


}

form {
    padding-inline-start: 246px;
    padding-top: 107px;
}
.date-tbl {
    margin-bottom: 9px;
    margin-left: 181px;
}form#buspasslist {
    margin-top: 216px;
    margin-left: 262px;
    width: 81%;



    margin-top: 77px;
}
 
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
    width: -39%;
    padding-left: 32px;
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
          <a href="dashboard.php" class="sidebar-button">
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
        <span class="dashboard">Dashboard</span><h4 ><div id="circle"></div>Welcome sathis !!</h4>

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
      
      <!-- <div class="profile-details">
        <img src="images/profile.jpg" alt="">
        <span class="admin_name">Harsa</span>
      
      </div>
    </nav> -->
  </nav>
</section>
</body>
    <div class="home-content">      
<?php 

include "config.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "buspass_db";
$sql = "SELECT * FROM user_tbl";

$result = $conn->query($sql);

?>




    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>
    <form action="sitee.php" method="POST">
<table class="table">

    <thead>

        <tr>
          <div class='date-tbl'>
<div class="col-md-4" id="from_date">
        <label for="from_date"  >From date</label>
        <input type="date" id="from_date" name="from_date" value="<?php echo isset($_POST['from_date']) ? $_POST['from_date'] : '' ?>" /> 
        </div>
        <div class="col-md-4" id="to_date">
        <label for="to_date" >To date</label>
        <input type="date" id="to_date" name="to_date" value="<?php echo isset($_POST['to_date']) ? $_POST['to_date'] : '' ?>" />  
        </div>
        <div class="button_tbl">
      <button class="btn btn-primary" name="search"><span class="glyphicon glyphicon-search"></span></button> <a href="" type="button" class="btn btn-success"><span class = "glyphicon glyphicon-refresh"><span></a>
</div>
      </div>
    </tr>
</form>
    <th>Name</th>
    <th>Type of User</th>
    <th>User Age</th>
    <th>From stop</th>
    <th>To stop</th>
    <th>Organization</th>
    <th>Apply date</th>


    </tr>

    </thead>

    <tbody> 
          <?php include'range.php' ?> 

    </tbody>

</table>

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
}
 </script>

</body>
</html>


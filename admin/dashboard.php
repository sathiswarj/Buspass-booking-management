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
        <span class="dashboard">Dashboard</span>
       
      </div>
      </nav></section>
<!--       <div style="height: 100px; background-color: rgba(255,0,0,0.1);">
 -->      <!-- <div class="profile-details">
        <img src="images/profile.jpg" alt="">
        <span class="admin_name">Harsa</span>
      
      </div>
    </nav> -->

    <div class="home-content"> 
  <!--  <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Primary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div> -->
<div class="form-card">
  <h3>user</h3>
    <p>count
 <?php
$conn = mysqli_connect("localhost", "root", "","buspass_db");

        $query="SELECT id from user_tbl order by id";
        $query_run=mysqli_query($conn,$query);
        $row=mysqli_num_rows($query_run);
        echo '<h3>'.$row.'</h3>';
        ?>
  </div></p>
  <style>

  </style>
</div>
</div>     
</body>
</html>


<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   
    <link rel="stylesheet" href="style3.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <style>.home-section .home-content {
    position: relative;
    padding-top: 414px;
    padding-right: 140px;
    margin-left: -459px;
}
.home-section{
  position: relative;
  background: #f5f5f5;
  min-height: 5vh;
  width: calc(100% - 240px);
  left: 240px;
  transition: all 0.5s ease;
}
form#buspasslist {
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
        </nav>
</section>
</body>
      <!-- <div class="profile-details">
        <img src="images/profile.jpg" alt="">
        <span class="admin_name">Harsa</span>
      
      </div>
    </nav> -->
     </nav>
</section>
</body>
<form id="buspasslist">

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


    
<table class="table">

    <thead>

        <tr>

        <th>S.No</th>
    <th>Name</th>
    <th>Type of User</th>
    <th>User Age</th>
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
                    <td><?php echo $row['user_name'];?></td>
<td><?php echo $row['user_type'];?></td>
<td><?php echo $row['user_age'];?></td>
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


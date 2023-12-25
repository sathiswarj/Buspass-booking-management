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
        <span class="dashboard">Dashboard</span>
      </div>
      </nav></section>
<!--       <div style="height: 100px; background-color: rgba(255,0,0,0.1);">
 -->      <!-- <div class="profile-details">
        <img src="images/profile.jpg" alt="">
        <span class="admin_name">Harsa</span>
      
      </div>
    </nav> -->



  <h2 style="text-align: center;">Profile Card</h2>
  <div class="card" id="sample">
    <div class="container">
      <center><img src="images/person.jpg" alt="" style="float: left;padding: 20px;height: 180px;width: 25%;"></center>
      <label style="float: center"><h6>Name</h1></label>
      <br>
      <label><h6>Mobile.No:</h6></label>
      <br>
      <label><h6>School/Clg/Office Name:</h6></label>
      <br>
      <label><h6>Apply Date:</h6></label>
      <br>
      <label><h6>From Date:</h6></label>
      <label style="margin-left: 300px;"><h6 >To Date:</h6></label>
      <br>
      <label style="margin-left: 215px;"><h6>start place:</h6></label>
      <label style="margin-left: 300px;"><h6 >End place:</h6></label>
    </div>
    <div>
      <center><h6 style="">K.BAJAR DEEN<br> "Sales Head(Apllinces)"</h6></center>
    </div>
    <div>
      <h6 class="margin" style="padding-left: 15px;"><i style="font-size:20px;color: green" class="fa">&#xf095;</i>
 Ph.No:  +91 88708 35034</h6>
    </div>
    <div>
      <h6 class="margin" style="padding-left: 15px;"><i style="font-size:20px;color: green" class="fa">&#xf0e0;</i> GMail:  test@gmail.com</h6>
    </div>
    <div>
      <h3 class="margin" style="padding-left: 15px;"><i style="font-size:20px;color: green" class="fa">&#xf2bc;</i> Address:   21,keelavithiya Nada Puram,Madurai-18.</h3>
    </div>
    <div>
      
    </div>
      <p><a href="https://wa.me/9385357607?text=I%20am%20the%20%22sales%20head%22%20of%20%22sri%20Meenachi%20Fan%20House%22"><button><i style="font-size:24px;color: green;margin-left:3px; " class="fa fa-download"></i>  Download</button></a></p>
  </div>
  
</body>
</html>


<style type="text/css">
body{
      background:#fff;
    }
    /*.margin
    {
        margin:20px; 
        border-top: 2px solid black;
        border-bottom: 2px solid black;
    }*/
    .card{
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      max-width: 900px;
      margin: auto;
      font-family: Arial, Helvetica, sans-serif;
      background-color: white;
    }
    img {
  border-radius: 50%;
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
   
.card {
    box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%);
    max-width: 900px;
    margin: auto;
    margin-right: 85px;
    font-family: Arial, Helvetica, sans-serif;
    background-color: white;
    margin-top: 62px;
}

</style>
</div>
</div>     
</body>
</html>

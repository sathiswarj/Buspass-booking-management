<?php
error_reporting(0);
$res = $_REQUEST['res'];
if($res=="")
{
  $res = 1;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
<!--     <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 -->    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<!--     <link href="css/sb-admin-2.min.css" rel="stylesheet">
 -->

</head>


<body class="bg-gradient-primary">
 <style >
     .container{
        padding-right: 550px;
     }
     .form-group{
     }
     .row {
    margin-right: -119px;
    margin-left: -40px;
}
.container {
    padding-right: 705px;
    padding-top: 555px;
    padding-left: -28px;
    margin-left: -64px;
}
 </style>

 <!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   
    <link rel="stylesheet" href="style2.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
          <a href="site_settings.php" class="sidebar-button">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Site settings</span>
          </a>
        </li>
        
        
        <li>
          <a href="track_pass.php" class="sidebar-button">
            <i class='bx bx-message' ></i>
            <span class="links_name">Track buspass</span>
          </a>
        </li>
        
        
        <li class="log_out">
          <a href="logout.php" class="sidebar-button">
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
      
      <!-- <div class="profile-details">
        <img src="images/profile.jpg" alt="">
        <span class="admin_name">Harsa</span>
      
      </div>
    </nav> -->

<form action="view_details.php" method="POST"> 

             <div class="container">


        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    </div>
                                                                                               <?php
    if($res==0)
    {
    
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Invalid Number</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div> ';
    }
   
    ?>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="user_no" name="user_no" aria-describedby="emailHelp"
                                                placeholder="Enter Phone no...">
                                        </div><br>
                                        <button name="submit" type="submit" class="btn btn-primary btn-user btn-block">
                                            Find
                                        </button>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
</div>
</form>
</nav>
</section>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
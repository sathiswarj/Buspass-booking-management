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
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Gentelella Alela!</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
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

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img class="display" src="../uploads/<?php echo $row['user_passport'] ?>" height= "70" width="100">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $row['user_name'] ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> My profile </a>
                   

                  <li><a><i class="fa fa-edit"></i> Forms </a>
                   
                  </li>
                  
                
              </div>
              <div class="menu_section">
              
                
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
                     <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></h3> </i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                 <img src="../uploads/<?php echo $row['user_passport'] ?>" ></a></img><?php echo $row['user_name'] ?> 
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Help</a>
                    <a class="dropdown-item"  href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>

               
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row" style="display: inline-block;" >
          <div class="tile_count">
             <form action="update_form.php" method="POST" enctype="multipart/form-data">
  <div class="row">
    <h2 class="text" >Hello <?php echo $row['user_name'] ?> !!</h2>

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
        <footer>
          <div class="pull-right">
          User profile <a href="https://colorlib.com"></a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>

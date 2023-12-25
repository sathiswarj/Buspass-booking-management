<?php
session_start();
$admin_id = $_SESSION['admin_id'];
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   
    <link rel="stylesheet" href="style2.css">
    
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
          <a href="#" class="sidebar-button">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="customerlist.php" class="sidebar-button">
            <i class='bx bx-box' ></i>
            <span class="links_name">Customer's</span>
          </a>
        </li>
        <li>
          <a href="cheflist.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Chef's</span>
          </a>
        </li>
        <li>
          <a href="deliveryguylist.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Delivery Guy</span>
          </a>
        </li>
        
        <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Order</span>
          </a>
        </li>
        
        <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
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
        <span class="dashboard">Dashboard  welcome <?php echo $admin_id; ?>:) TOTAL EARINGS:500</span>
      </div>
      
       <div class="sidebar-button">
        <span><?php include 'back.php';?></span>
        
      </div>
    </nav>

    <div class="home-content">

      <?php 
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = new mysqli('localhost', 'root', '', 'cloud_kitchen');

$editID = $_REQUEST['id'];
$stmt = $conn->prepare("SELECT * FROM customer_tbl WHERE customer_id = ?");
$stmt->bind_param("s", $editID);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
?>

<html>
<head>
  <link rel="stylesheet" href="style2.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
<body>
  <section class="vh-100 gradient-custom"style="height: 135vh!important;">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5"> Customer Registration Form</h3>
            <form  action="updatecustomer.php" method=POST enctype="multipart/form-data">
             <input type="hidden" value="<?php echo $_REQUEST['id'] ?>" name="edit_id">

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="Name" name= "Customer_name" class="form-control form-control-lg"value="<?php echo $row['Customer_name']; ?>" />
                    <label class="form-label" for="Name">Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Gender: </h6>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="Customer_gender" id="maleGender"
                      value="Male" checked />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="Customer_gender" id="femaleGender"
                      value="Female" checked />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                   

                </div>
              </div>
                

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input type="date" name="Customer_dob" class="form-control form-control-lg" id="dob" value="<?php echo $row['Customer_dob']; ?>" />
                    <label for="dob" class="form-label">DOB</label>
                  </div>

                </div>
                
              <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" name="Customer_address" id="Address" class="form-control form-control-lg"  value="<?php echo $row['Customer_address']; ?>" />
                    <label class="form-label" for="Address">Address</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" name="Customer_district" id="District" class="form-control form-control-lg"  value="<?php echo $row['Customer_district']; ?>" /> 
                    <label class="form-label" for="District">District</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" name ="Customer_pincode" id="Pincode" class="form-control form-control-lg" value="<?php echo $row['Customer_pincode']; ?>" />
                    <label class="form-label" for="Pincode">Pincode</label>
                  </div>

                </div>
              </div>

               <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel"  name="Customer_phone" id="ContactNumber" class="form-control form-control-lg" value="<?php echo $row['Customer_phone']; ?>" />
                    <label class="form-label" for="ContactNumber">Contact Number</label>
                  </div>

                </div>

                <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="password" name="Customer_password" id="Password" class="form-control form-control-lg" value="<?php echo $row['Customer_password']; ?>" />
                    <label class="form-label" for="Password">Password</label>
                  </div>

                </div>

                    <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="password" name="Customer_conpassword" id="ConfirmPassword" class="form-control form-control-lg" />
                    <label class="form-label" for="ConfirmPassword">Confirm Password</label>
                  </div>

                </div>
              </div>

              

              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Update" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
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
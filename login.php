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
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>About</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="admin.css">
      <!-- Responsive-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

      <!-- owl stylesheets --> 
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" referrerpolicy="no-referrer" />
   </head>
   <style >
    .form-bg{
        background-image:url(images/reg.jfif); 
    }

   .form-container {
    margin-right: -491px;
    margin-left: 438px;
    margin-bottom: 85px;
    padding-bottom: 134px;
}
[type=submit]:not(:disabled), button:not(:disabled) {
    cursor: pointer;
    margin-top: 33px;
    padding-left: 90px;
    padding-right: 99px;
}
      .form-container {
    background: #ecf0f3;
    font-family: 'Nunito', sans-serif;
    padding: -49px;
    margin-top: 19px;
    border-radius: 20px;
    box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
}
      img.logo {
    height: 230px;
    width: 168px;
}
.navbar-expand-lg .navbar-nav .nav-link {
    padding: 0px 20px;
    font-size: 16px;
    color: #717172;
    text-transform: uppercase;
}
   </style>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand"><a href="index.html"><img src="images/bus1.jfif" class="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="register.php">Register</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="login.php">Login</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="buspass.php">Buspass Status</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
               </ul>
             
            </div>
         </nav>
      </div>
<style>


</style>
<body>
<center>

<form class="login"action="sample_login.php" method="POST">
  
<div class="form-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="form-container">
                    <?php
    if($res==0)
    {
    
    echo '
<div class="alert">
    <div class="alert alert-danger alert-dismissible" role="alert">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle-fill me-2" viewBox="0 0 16 16">
      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </svg>
   Invalid user name or password
  </div>

</div>';

    }
    else
    {
    //   if($res==2) {
    //     echo "blocked";
    //   }   // header('Location:/start/index.html');
    }
    ?>
                    <div class="form-icon"><i class="fa fa-user"></i></div>
                    <h3 class="title">Login</h3>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label>Username</label>
                            <input class="form-control" type="text" placeholder="Username" name="user_gmail" id="user_gmail" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="password" name ="user_password" id="user_password" placeholder="password"  required>
                        </div>
                                    <button class="btn btn-primary btn-lg btn-block" type="submit" class="submit" name="submit">Login</button>
                                    <br>
                                    <br>               
                                       
               </form>
                </div>

        </div>
    </div>
</div>
</center>
</body>
</html>




</form>
</center>

  <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserve</p>
         </div>
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script >
      $("form").on('.submit',function(event){
  event.preventDefault();
});
    </script>
<!-- /* //PAGE3 */ -->
  

</body>
</html>

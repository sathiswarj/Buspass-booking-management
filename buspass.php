
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
      <title>News</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
            <link rel="stylesheet" type="text/css" href="css/style.css">
            <!-- buspass css -->
      <link rel="stylesheet" type="text/css" href="buspass.css">
      
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" referrerpolicy="no-referrer" />
 
   </head>
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
      <!-- header section end -->
      <!-- news section start -->
      <style>
      .alert-danger {

    font-size: 15px;
}
.alert-warning{
     font-size: 15px;
}
      .col-lg-6.d-none.d-lg-block.bg-login-image {
    padding-left: 325px;
    padding-bottom: 369px;
    margin-top: 38px;
}

         .form-container{
    background: #76c7ae;
   font-family: 'Nunito', sans-serif;
    padding: 40px;
    margin-top:68px;
    border-radius: 20px;
    box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
}
   .p-5 {
    padding: 3rem!important;
    margin-right: 273px;
    margin-left: -196px;

}
.form-group {
    margin-bottom: 1rem;
    margin-top: 3.5rem;
    margin-left: 3px;
}
.alert-warning {
    .alert-warning 
    font-size: 15px;
    width: 769px;
    margin-left: -176px;
    margin-top: -16px;
    text-align: -webkit-center;

}
h3 {
    font-size: 18px;
    padding-left: 235px;
    padding-top: 135px;
}
img.logo {
    height: 230px;
    width: 168px;
}
      </style>
      <!-- header section end -->
      <!-- donate section start -->
        <br>
       <br>
       <br>  <br>
       <br>
       <br>
      <div><h3>Once you apply the  bus pass in online,
       you will view your buspass status on the registered mobile number  : </h3></div>
       <br>
       <br>
       <br>
     <form action="samplepass.php" method="POST">
    <div class="container">

        <!-- Outer Row -->

            <div class="col-xl-4 col-xl-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-10">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">

                                <div class="p-5">

                                        <div class="form-group">
                                                            <?php
    if($res==0)
    {
    
    echo '<div class="success hide">
  <span class="click"><i class="fa fa-check-circle"></i></span>
  <span class="msg">This number not available in our database</span>
  <span class="crose"><i class="fa fa-times"></i></span>
</div>';
    }
    if($res==2){
        echo ' <div class="success hide">
  <span class="click"><i class="fa fa-check-circle"></i></span>
  <span class="msg">   <strong>Hello user!</strong> Your request is on process. So it would take some time.
</span>
  <span class="crose"><i class="fa fa-times"></i></span>
</div>';
    }
    ?>

                               <center> <h2>Buspass status</h2></center>
                                            <input type="text" class="form-control form-control-user" name="user_no"
                                                id="user_no" aria-describedby="emailHelp"
                                                placeholder="Enter Phone no..." required>
                                        </div>
                          
                                        <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Find</button>
                                  <!--   <input type="submit" class="submit" value="login"> -->                                                                             
                                    </form>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
</div>
</form>
<script>
  $('.alert-btn').click(function(){
      $('.success').addClass("show");
      $('.success').addClass("alert");
      $('.success').removeClass("hide");
}); $('.crose').click(function(){
      $('.success').removeClass("show");
          $('.success').addClass("hide");

});
</script>
      <!-- news section end -->
      <!-- footer section start -->
     
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved</p>
         </div>
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
   </body>
</html>

 

<style>*{
  margin:0;
  padding:0;
  box-sizing:border-box;
/*  font-family:cursive;*/
}
body{
  width:100%;
  height:100vh;
}
.success {
    position: absolute;
    top: 1%;
    right: 0%;
    padding: 15px 104px;
    background-color: #00b300;
    overflow: hidden;
    color: white;
    font-size: 16px;
}
.success.alert{
  opacity:1;
  pointer-events:auto;
}
.alert-btn{
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
  cursor:pointer;
  padding:5px 10px;
  font-size:30px;
  background-color:green;
}
/*.success{
  position:absolute;
  top:10%;
  right:0%;
  padding:15px 10px;
  background-color: #00b300;
  overflow:hidden;
  color:white;
  font-size: 15px;
}*/
.check{
  position:absolute;
  top:50%;
  left:20px;
  transform:translateY(-50%);
  font-size:30px;
  
}
.crose{
  
    transform:translateY(-50%);
cursor:pointer;
}
.success.show{
  animation: show_slide 5s ease forwards;
}

@keyframes show_slide{
  0%{
    transform:translateX(100%);
  }40%{
    transform:translateX(-10%);
  }80%{
    transform:translateX(0%);
  }100%{
    transform:translateX(-10px);
  }
}

.success.hide{
  animation: hide_slide 5s ease forwards;
}

@keyframes hide_slide{
  0%{
    transform:translateX(-10px);
  }40%{
    transform:translateX(0%);
  }80%{
    transform:translateX(-10%);
  }100%{
    transform:translateX(100%);
  }
}
.success.hide {
    margin-top: -78px;
    padding-right: 101px;
    padding-left: 73px;
}
  </style>
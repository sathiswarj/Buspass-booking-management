<?php
error_reporting(0);
$res = $_REQUEST['res'];
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Buspass booking</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css"></link>
</head>
<style>


</style>
<body>
<center>

<form class="login"action="admin_login.php" method="POST">
    <?php
    if($res!="")
    {
    
    echo '<div class="alert">
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
         // header('Location:/start/index.html');
    }
    ?>
<div class="form-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="form-container">
                    <div class="form-icon"><i class="fa fa-user"></i></div>
                    <h3 class="title">Login</h3>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label>Username</label>
                            <input class="form-control" type="text" placeholder="Username" name="user_name" id="user_name">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="password" name ="password_user" id="password_user" placeholder="password">
                        </div>
                                    <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Login</button>                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
</center>
</body>
</html>




</form>
</center>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
$('form').on('submit', function() 
    {
        var user_name = $("#user_name").val();
        var password_user = $("#password_user").val();
   

        //alert(student_name); 
           if( user_name=="" || password_user=="")
           {
                alert("missing fields!");
                return false;
           }
      else
      {
        //   alert(" Successfully submitted!");
      }      
    });
    </script>
<!-- /* //PAGE3 */ -->
  

</body>
</html>

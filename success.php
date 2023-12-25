<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<button class="alert-btn">click</button>
<div class="success hide">
  <span class="click"><i class="fa fa-check-circle"></i></span>
  <span class="msg">Success:Your message sent successfully</span>
  <span class="crose"><i class="fa fa-times"></i></span>
</div>

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
<style>*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:cursive;
}
body{
  width:100%;
  height:100vh;
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
.success{
  position:absolute;
  top:10%;
  right:0%;
  padding:15px 10px;
  background-color: #00b300;
  overflow:hidden;
}
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
  animation: show_slide 1s ease forwards;
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
  animation: hide_slide 1s ease forwards;
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

  </style> -->


<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bootstrap 5 Thank You Example</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="vh-100 d-flex justify-content-center align-items-center">
            <div class="card col-md-4 bg-white shadow-md p-5">
                <div class="mb-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="75" height="75"
                        fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path
                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                    </svg>
                </div>
                <div class="text-center">
                    <h1>Thank You !</h1>
                    <p>Your registration completed successfully ! </p>
                    <a href="index.php" class="btn btn-outline-success" role="button" >Back Home</a>
                </div>
            </div>
    </body>

</html> 



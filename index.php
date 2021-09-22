<?php
session_start();
?>
<html>
<head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <link rel="shortcut icon" href="izdiad.png" style="width: 100%; " type="image/png"> 

<title>شركة إزديــاد</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <style type="text/css">
        body{
            margin: 0;
            padding: 0;
            /*background: url(includes/pics/login-background.png);*/

        }

.body-cover{
    width: 100% ; 
    height: 100%; 
    position: absolute;
    background: rgba(0,0,0, 0.4);
   /*background-color: inherit;*/
    z-index: -2;
  }


.layer2{

    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #114F89;
    z-index: 1;
}


.layer1{
    position: absolute;
    top: 25%;
    left: 35%;
    width: 400px;
    height: 300px;
    border-radius: 10px;
    z-index: 1;     
 }

 ::placeholder {
  color: #FFF;
  opacity: 0.5; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
 color: #FFF;
 opacity: 0.5;
}

::-ms-input-placeholder { /* Microsoft Edge */
 color: #FFF;
 opacity: 0.5;
}

.title{
  margin-top:10%;
}

body{
  direction: rtl;
  float: right;
}
    </style>
<body class="layer2">
      <div class="body-cover"></div>
<div class="title">
  <center><h1 style="color: #fff;">مرحبا بك في إزديــاد  😊 </h1></center>

<div class="loginbox layer1">
  <form method="post" name="login" action="Login/loginAction.php">
                  <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span class='alert alert-danger'><b>$error</b></span>";
                    }
                ?>
    <br>
    <br>
    <label>اسم المستخدم</label>
    <input type="email" required="true" class="inputs" name="email" placeholder="Enter Username">
    <label>كلمة المرور</label>
    <input type="password" required="true" class="inputs" name="password" placeholder="Enter Password">
    <input type="submit" name="submit" value="Login">
  </form>
</div>

</div>
</body>
</head>
</html>
<?php 
ini_set('display_errors','0');
include "../../php/Admin/currentDayAttendanceInfo.php";
?>
<!DOCTYPE html>

<html lang="en">
    <head>
      
  <link rel="shortcut icon" href="../../pics/izdiad.png" style="width: 100%; " type="image/png">

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=Chrome" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no" />
        <title>إزديــاد</title>

        <link href="../../css/styles_rtl.css" rel="stylesheet" />
        <script src="../../libs/all.min.js" crossorigin="anonymous"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script> -->

        <script src="../../libs/jquery.min.js"></script>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script> -->
 

<style type="text/css">
.navbar-brand {
  width:150px;
  font-size: 24px;
}
.navbar-brand img {
  height: 50px;
  float: left;
  margin-right: 7px;
}
body{
    /*font-family: '../../includes/fonts/Alarabiya Font Normal.ttf';*/
    font-family: 'arial';
}
</style>
    </head>
    <body class="sb-nav-fixed">
        <?php include "../../includes/Admin/navbar.php" ?>

       <div id="welcomeDIV">
        <?php 
        if($today_attendance < 1){ 
          include 'attendanceForm.php';
        }
        if (($today_attendance > 0) && ($user_role == 'admin')) {
          include 'adminHome.php';
        }

        if (($today_attendance > 0) && ($user_role == 'manager')) {
          include 'managerHome.php';
        }
        ?>

       </div>                            


<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script> -->
<script src="../../libs/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> -->
<script src="../../libs/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="../../js/scripts.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script> -->
<!-- <script src="../../js/Charts/datatables-demo.js"></script> -->
<script src="../../libs/jquery.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    </body>
</html>

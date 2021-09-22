<?php ini_set('display_errors','0'); ?>
<?php include "../../php/User/getReportDetails.php"; ?>

<script type="text/javascript" src="../../js/User/reportDetails.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/User/reportDetails.css">

<div class="container-fluid"> 
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid">
        <div class="container">
        <h2 class="mt-4"><?= $reportInfo['report_title']; ?></h2>
        <div class="card col-sm-12"></div>
        <br>



          <div class="form-group ">
            <h4>التقرير  من:</h4>
            <?php 
              $reporterID = $reportInfo['reporter'];
              $getUsersQuery = "SELECT * FROM users WHERE id = '$reporterID'";
              $executeGetUser = mysqli_query($con,$getUsersQuery);
              $UserInfo = mysqli_fetch_array($executeGetUser);
              echo '<b><li class="mr-2">'.$UserInfo['ar_fullname'].'</li></b>';
            ?>
          </div>



          <div class="form-group ">
            <h4>التقرير إلى:</h4>
            <?php 
              $reporteeID = $reportInfo['reportee'];
              $reporteeIDEmpID = explode(' ', $reporteeID);
              foreach ($reporteeIDEmpID as $user) {

              $getUsersQuery = "SELECT * FROM users WHERE id = '$user'";
              $executeGetUser = mysqli_query($con,$getUsersQuery);
              $UserInfo = mysqli_fetch_array($executeGetUser);
              echo '<b><li class="mr-2">'.$UserInfo['ar_fullname'].'</li></b>';
              }
            ?>
          </div>

          <div class="form-group">
            <h4>تفاصيل التقرير: </h4>
            <p><?= $reportInfo['report_details']; ?></p>
          </div>
            <br>


        <br>
          <button class="btn btn-warning float-right backToReportList">عودة الى قائمة التقارير</button>        
        <br>
        <br>
        </div>
        </div>
      </div>         
    </main>
  </div>
</div>
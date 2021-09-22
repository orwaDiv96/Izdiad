<?php ini_set('display_errors','0'); ?>
<?php include "../../php/Admin/getUserData.php" ?>
<?php include "../../php/Admin/empAttendaceReport.php" ?>

<script type="text/javascript" src="../../js/Admin/empReport.js"></script>
<script type="text/javascript" src="../../js/Charts/Chart.js"></script>
<script type="text/javascript" src="../../js/Charts/Chart.bundle.js"></script>
<script type="text/javascript" src="../../js/Charts/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="../../css/admin/empReport.css">

<div class="container-fluid"> 
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid">
        <h2 class="mt-2"><?= $userData['ar_fullname']; ?></h2>
        <div class="card col-sm-12"></div>
<br>
  
  <?php include "../../includes/Admin/empOverallPieReport.php" ?> 

<br>
<br>
  <?php 
    if ($userData['department'] == 2) {
      include "../../includes/Admin/empTechnicalProjectTasksReport.php";
    }?> 

<br>
<br>

<div id="attendanceForm" class="forn-group">
  <h4>تقرير الحضور</h4>
  <h5>اختر السنة و الشهر</h5>
  <div class="row">
    <div class="col">
      <select class="form-control" id="year">
        <option>2021</option>
        <option>2022</option>
        <option>2023</option>
        <option>2024</option>
        <option>2025</option>
      </select>
    </div>

    <div class="col">
      <select class="form-control" id="month">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
      </select>
    </div>

    <div class="col">
      <button id="showAttendanceReport" class="btn btn-primary" data-empID = <?= $empID;?> >عرض </button>
    </div>
  </div>
</div>

<br>
<br>
<div id="attendanceInfo"></div>

<br>
<br>
</div>
    </main>
  </div>
</div>
<?php ini_set('display_errors','0'); ?>
<?php include "../../php/session_vars.php"; ?>
<?php include "../../php/Admin/getUsers.php" ?>
<?php include "../../php/Admin/getDepartmentInfo.php" ?>
<?php include "../../php/Admin/getDepartmentTasks.php" ?>
<?php include "../../php/Admin/getDepartmentProjectTasks.php" ?>

<script type="text/javascript" src="../../js/Admin/departmentInfo.js"></script>
<script type="text/javascript" src="../../js/Charts/Chart.js"></script>
<script type="text/javascript" src="../../js/Charts/Chart.bundle.js"></script>
<script type="text/javascript" src="../../js/Charts/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="../../css/admin/departmentInfo.css">

<div class="container-fluid"> 
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid">
 
        <h2 class="mt-2"><?= $departmentInfo['ar_department'] ?></h2>
<br>


<table class="table table-bordered" id="dataTable" width="80%" cellspacing="0">  <thead>

  <tr>
    <th>الإسم</th>
    <th>الوظيفة</th>
    <th>البريد الإكتروني</th>
    <th>الصلاحيات</th>
    <th>تقرير عن الموظف</th>
  </tr>

</thead>

  <tbody>
    <?php while($row = mysqli_fetch_array($executeGetUsers)){ ?>
      <tr>
      <td> <?= $row['ar_fullname']; ?> </td> 
      <td> <?= $row['ar_job']; ?> </td> 
      <td> <?= $row['email']; ?> </td> 
      <td> <?= $row['role']; ?> </td> 
      <td><button class="btn btn-primary empReport" data-empID="<?= $row['id']; ?>" >عرض التقرير</button></td>
    <?php } ?>
  </tbody>
</table>                                  

<br>
<br>
    <?php if ($department == 2) {
      include "getTechnicalTasks.php";
    } ?>

         
    <h2>التقارير </h2>
      <?php include "../../includes/Admin/teamOverallPieReport.php" ?>   
<br>
<br>
      </div>         
    </main>
  </div>
</div>
<div id="totalReportsDiv">
<?php ini_set('display_errors','0'); ?>
<?php include "../../php/Admin/getAllUserReports.php"; ?>

<script type="text/javascript" src="../../js/Admin/totalReports.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/Admin/totalReports.css">

<div class="container-fluid" > 
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid">

       <div class="alert alert-primary">
        <h3>التقارير الجديدة</h3>
        <table>
         <?php if ($report_count > 0) { 
          while ($reportData = mysqli_fetch_array($excecute)){ ?>
           <tr>
            <td><li class="report" data-reportID="<?= $reportData['id']; ?>"><?= $reportData['report_title']; ?></li></td>
            <td><?= $reportData['report_date']; ?></td>
          </tr>
         
         <?php }
       }else{ ?>
          <li class="text-danger">لا يوجد تقارير جديدة </li>
        <?php } ?>
        </table>
       </div>
<br>
       <div class="alert alert-success">
         <h3>التقارير السابقة</h3>
          <table>
         <?php if ($seenreport_count > 0) { 
         while ($seenReportData = mysqli_fetch_array($excecuteSeenReport)){ ?>
           <tr>
            <td><li class="report" data-reportID="<?= $seenReportData['id']; ?>"><?= $seenReportData['report_title']; ?></li></td>
            <td><?= $seenReportData['report_date']; ?></td>
          </tr>

         <?php }
       }
       else{ ?>
           <tr><td><li class="text-danger">لا يوجد تقارير سابقة </li></td></tr>
        <?php } ?>
         </table>
       </div>
      </div>         
    </main>
  </div>
</div>
</div>
<?php include "../../php/Admin/getUserAttendanceReport.php"; ?>

<script type="text/javascript">
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Pie Chart Example
var ctx = document.getElementById("attendanceChart");
var attendanceChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["من المكتب", "من البيت", "غياب"],
    datasets: [{
      data: [<?= $office; ?>,<?= $home; ?>, <?= $absence; ?>],
      backgroundColor: ['#28a745', '#007bff', '#dc3545'],
    }],
  },
});
</script>

<?php if (($office > 0) || ($home > 0) || ($absence > 0)) { ?>

<div class="row">

  <div class="col-md-7">
  	<div class="card mb-7">
  	  <div class="card-header"><b>تقرير الحضور <?= $year; ?> - <?= $month; ?></b></div>
  	  <div class="card-body">
  	    <canvas id="attendanceChart" width="50%" height="50%"></canvas>
  	  </div>
  	  <!-- <div class="card-footer small text-muted"></div> -->
  	</div>
  </div>
</div>

<br>
<br>

<h4>تفاصيل الحضور في شهر <?= $month; ?></h4>
<div class="row">
  <table class="table table-bordered col-md-12" id="dataTable" width="80%" cellspacing="0">  <thead>

  <tr>
    <th><b>#</b></th>
    <th>السنة</th>
    <th>الشهر</th>
    <th>اليوم</th>
    <th>حالة الحضور</th>
    <th>زنم الحضور</th>
    <th>زمن المغادرة</th>
    <th>ساعات العمل</th>
    <th>سبب الغياب </th>
  </tr>

</thead>

  <tbody>
    <?php 
    $count = 1;
    while($row = mysqli_fetch_array($executeAllAttendanceQuery)){ ?>
      <tr>
      <td><b> <?= $count; ?> </b></td> 
      <td> <?= $row['year']; ?> </td> 
      <td> <?= $row['month']; ?> </td> 
      <td> <?= $row['day']; ?> </td> 
      <td> <?= $row['attendance_type']; ?> </td> 
      <td> <?= $row['time']; ?> </td> 
      <td> <?= $row['leave_time']; ?> </td> 
      <td style="text-align: right; direction: ltr;"> <?= $row['working_hours']; ?> </td> 
      <td> <?= $row['comment']; ?> </td> 
    <?php 
      $count++;
      } ?>
  </tbody>
</table> 
</div>

<?php }else{
  echo "<div class='alert alert-primary'>لا يوجد سجل حضور  !</div>";
} ?>                               

<br>
<br>

</div>

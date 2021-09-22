<?php include "../../php/Admin/getUserProjectTasksReport.php" ?>
<script type="text/javascript">
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Pie Chart Example
var ctx = document.getElementById("myPieChart2");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["الجارية", "الجديدة", "المرئية", "المكتملة"],
    datasets: [{
      data: [<?= $OngoingTaskCount?>, <?= $PenddingTaskCount?>,<?= $SeenTaskCount?>, <?= $DoneTaskCount ?>],
      backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745'],
    }],
  },
});
</script>

<div id="reportDiv">
  <div class="col-lg-12">
  	<div class="card mb-12">
  	  <div class="card-header"><b>المهام داخل المشاريع</b></div>
  	  <div class="card-body">
  	    <canvas id="myPieChart2" width="100%" height="100%"></canvas>
  	  </div>
  	  <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
  	</div>
  </div>
</div>

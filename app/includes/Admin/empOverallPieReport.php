<?php include "../../php/Admin/getUserTasksReport.php" ?>
<script type="text/javascript">
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["الجارية", "الجديدة", "المرئية", "المكتملة"],
    datasets: [{
      data: [<?= $going_task_count?>, <?= $task_count?>,<?= $seen_task_count?>, <?= $done_task_count ?>],
      backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745'],
    }],
  },
});
</script>

<div id="reportDiv">
  <div class="col-lg-12">
  	<div class="card mb-12">
  	  <div class="card-header"><b>المهام خارج المشاريع</b></div>
  	  <div class="card-body">
  	    <canvas id="myPieChart" width="100%" height="100%"></canvas>
  	  </div>
  	  <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
  	</div>
  </div>
</div>

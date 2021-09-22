
<script type="text/javascript">
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["الجارية "+<?= $OngoingTaskCount?>, "الجديدة "+<?= $PenddingTaskCount?>, "المرئية "+<?= $SeenTaskCount?>, "المكتملة "+<?= $DoneTaskCount ?>],
    datasets: [{
      data: [<?= $OngoingTaskCount?>, <?= $PenddingTaskCount?>,<?= $SeenTaskCount?>, <?= $DoneTaskCount ?>],
      backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745'],
    }],
  },
});
</script>

<div class="col-lg-6">
	<div class="card mb-12">
	  <div class="card-header"><b>تقـرير المـهـام</b></div>
	  <div class="card-body">
	    <canvas id="myPieChart" width="100%" height="60%"></canvas>
	  </div>
	  <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
	</div>
</div>

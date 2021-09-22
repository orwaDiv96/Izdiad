<?php 

include "../../php/con_db.php";
$report_id = $_GET['r_id'];

$getReportDetails = "SELECT * FROM report WHERE id = '$report_id'";
$excecuteReportDetails = mysqli_query($con,$getReportDetails);

$reportInfo = mysqli_fetch_array($excecuteReportDetails);

$setSeenStatus = "UPDATE report set status = 1 WHERE id = '$report_id'";
$excecuteSetStatusDetails = mysqli_query($con,$setSeenStatus);
?>
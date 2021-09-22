<?php 
include "../session_vars.php";
include "../con_db.php";

$uniq_id = uniqid();

$report_date = date('Y-m-d');

$report_title = $_POST['report_title'];
$report_details = $_POST['report_details'];
$reportee = $_POST['reportee'];

$reportee = $_POST['reportee'];
$reporteeID = implode(' ', $reportee);

$reporter = $user_id;
$status = 0; 

$addTaskQuery = "INSERT INTO report VALUES (NULL,'$report_title','$report_details','$reporter','$reporteeID','$report_date','$status')";
$excecute = mysqli_query($con,$addTaskQuery);
?>
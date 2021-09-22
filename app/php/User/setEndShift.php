<?php 

include "../../php/session_vars.php";
include "../../php/con_db.php";

$current_year = date("Y");
$current_month = date("m");
$current_day = date("d");

$leave_time = date('H:i:s');


	$setLeaveTimeQuery = "UPDATE attendance_info SET leave_time = '$leave_time' WHERE user_id = '$user_id' AND year = '$current_year' AND month = '$current_month' AND day = '$current_day'";
	$excecute = mysqli_query($con,$setLeaveTimeQuery);
///////////////////////////////////////////////////////////////////////////

	$getStartTimeQuery = "SELECT * FROM attendance_info WHERE user_id = '$user_id' AND year = '$current_year' AND month = '$current_month' AND day = '$current_day'";
	$excecuteStartTime = mysqli_query($con,$getStartTimeQuery);
	$data = mysqli_fetch_array($excecuteStartTime);
	$startTime = $data['time'];

  $datetime1 = new DateTime($startTime);
  $datetime2 = new DateTime($leave_time);
  $interval = $datetime1->diff($datetime2);
  $duration = $interval->format('%h h %i min');

	$setWorkingHoursQuery = "UPDATE attendance_info SET working_hours = '$duration' WHERE user_id = '$user_id' AND year = '$current_year' AND month = '$current_month' AND day = '$current_day'";
	$excecuteWorkingHours = mysqli_query($con,$setWorkingHoursQuery);
?>
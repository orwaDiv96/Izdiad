<?php
  include "../../php/session_vars.php";
  include "../../php/con_db.php";

	$current_year = date("Y");
	$current_month = date("m");
	$current_day = date("d");


	$today_info = "SELECT * FROM attendance_info WHERE user_id = '$user_id' AND year = '$current_year' AND month = '$current_month'AND day = '$current_day'";
	$excecute = mysqli_query($con,$today_info);

	$data = mysqli_fetch_array($excecute);
	$today_attendance = $data[0];
?>
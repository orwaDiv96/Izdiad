<?php 
include "../session_vars.php";
include "../con_db.php";


$current_year = date("Y");
$current_month = date("n");
$current_day = date("d");
$current_time = date('H:i:s');
$leave_time = '';
$working_hours = '';

	$attendance_type = $_POST['attendance_type'];

	if ($attendance_type == 'Office') {
		$comment = 'N/A';
	}

	if ($attendance_type == 'Home') {
		$comment = $_POST['fromHomeComment'];
	}

	if ($attendance_type == 'Absence') {
		$comment = $_POST['noAttendanceComment'];
	}

	$attendance_type = $_POST['attendance_type'];

	$attendanceQuery = "INSERT INTO attendance_info VALUES (NULL,'$user_id','$attendance_type','$current_year','$current_month','$current_day','$current_time','$leave_time','$working_hours','$comment')";

	$excecute = mysqli_query($con,$attendanceQuery);
?>
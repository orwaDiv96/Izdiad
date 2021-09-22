<?php 
include "../../php/con_db.php";

$empID = $_GET['empID'];
$year = $_GET['year'];
$month = $_GET['month'];

///////////////////////////////////////////////////////////////////
// Working From Office Month Info

$officeAttendanceQuery = "SELECT * FROM attendance_info WHERE user_id = '$empID' AND year = '$year' AND month LIKE '%$month%' AND attendance_type = 'Office'";
$executeOfficeQuery = mysqli_query($con,$officeAttendanceQuery);
$office = mysqli_num_rows($executeOfficeQuery);

///////////////////////////////////////////////////////////////////
// Working From Home Month Info

$HomeAttendanceQuery = "SELECT * FROM attendance_info WHERE user_id = '$empID' AND year = '$year' AND month LIKE '%$month%' AND attendance_type = 'Home'";
$executeHomeQuery = mysqli_query($con,$HomeAttendanceQuery);
$home = mysqli_num_rows($executeHomeQuery);

///////////////////////////////////////////////////////////////////
// absance Month Info

$AbsenceAttendanceQuery = "SELECT * FROM attendance_info WHERE user_id = '$empID' AND year = '$year' AND month LIKE '%$month%' AND attendance_type = 'Absence'";
$executeAbsenceQuery = mysqli_query($con,$AbsenceAttendanceQuery);
$absence = mysqli_num_rows($executeAbsenceQuery);

///////////////////////////////////////////////////////////////////
// All Month Attendance Info

$allAttendanceQuery = "SELECT * FROM attendance_info WHERE user_id = '$empID' AND year = '$year' AND month LIKE '%$month%'";
$executeAllAttendanceQuery = mysqli_query($con,$allAttendanceQuery);
?>
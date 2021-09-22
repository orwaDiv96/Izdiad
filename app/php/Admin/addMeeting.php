<?php 
include "../session_vars.php";
include "../con_db.php";

$uniq_id = uniqid();
$add_date = date('Y-m-d');

$addedBy_id = $user_id;
$addedBy_name = $user_ar_fullname;

$meetingSubject = $_POST['meetingSubject'];
$meetingDate = $_POST['meetingDate'];
$meetingDetails = $_POST['meetingDetails'];

$responsibleEmp = $_POST['responsibleEmp'];
$responsibleEmpID = implode(' ', $responsibleEmp);
$outcome = '';


// for ($i=0; $i < $responsibleEmpCount; $i++) { 
	$addMeetingQuery = "INSERT INTO meetings VALUES (NULL,'$uniq_id','$addedBy_id','$addedBy_name','$add_date','$meetingSubject','$meetingDetails','$meetingDate','$responsibleEmpID','$outcome')";
	$excecuteAddMeetingQuery = mysqli_query($con,$addMeetingQuery);

// }
echo "Done";

?>
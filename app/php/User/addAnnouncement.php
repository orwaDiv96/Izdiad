<?php 
include "../session_vars.php";
include "../con_db.php";

$uniq_id = uniqid();
$add_date = date('Y-m-d');

$addedBy_id = $user_id;
$addedBy_department = $user_department;

$announcementSubject = $_POST['announcementSubject'];
$announcementDetails = $_POST['announcementDetails'];
$status = 1;

	$addMeetingQuery = "INSERT INTO com_announcements VALUES (NULL,'$uniq_id','$addedBy_id','$addedBy_department','$add_date','$announcementSubject','$announcementDetails','$status')";
	$excecuteAddMeetingQuery = mysqli_query($con,$addMeetingQuery);

echo "Done";

?>
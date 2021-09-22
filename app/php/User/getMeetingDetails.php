<?php 

include "../../php/con_db.php";
$meeting_id = $_GET['m_id'];

$getMeetingDetails = "SELECT * FROM meetings WHERE uniq_id = '$meeting_id'";
$excecuteMeetingDetails = mysqli_query($con,$getMeetingDetails);

$meetingInfo = mysqli_fetch_array($excecuteMeetingDetails);

?>
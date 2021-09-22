<?php 
include "../session_vars.php";
include "../con_db.php";

$meetingID = $_POST['meetingID'];
$meetingOutcome = $_POST['meetingOutcome'];

$setMeetingOutcomeQuery = "UPDATE meetings SET meet_outcome = '$meetingOutcome' WHERE uniq_id = '$meetingID'";
$excecuteMeetingOutcomeQuery = mysqli_query($con,$setMeetingOutcomeQuery);

if ($excecuteMeetingOutcomeQuery) {
	echo 'Done';
}

?>
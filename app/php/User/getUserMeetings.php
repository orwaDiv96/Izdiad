<?php

  // include "../../php/session_vars.php";
  session_start();
  $user_id = $_SESSION["uid"];
  include "../../php/con_db.php";


	$getUserMeeting_info = "SELECT * FROM meetings WHERE meeting_participants LIKE '%$user_id%' AND meet_outcome = ''";
	$excecuteMeetings = mysqli_query($con,$getUserMeeting_info);
	$meeting_count = mysqli_num_rows($excecuteMeetings);
	echo $meeting_count;

//////////////////////////////////////////////////////////////////////////////////

	$getUserDoneMeeting_info = "SELECT * FROM meetings WHERE meeting_participants LIKE '%$user_id%' AND meet_outcome != ''";
	$getUserDoneMeeting_info = "SELECT * FROM meetings WHERE meeting_participants LIKE '%$user_id%' AND meet_outcome != ''";
	$excecute_done_meetings = mysqli_query($con,$getUserDoneMeeting_info);
	$done_meetings_count = mysqli_num_rows($excecute_done_meetings);

//////////////////////////////////////////////////////////////////////////////////




?>

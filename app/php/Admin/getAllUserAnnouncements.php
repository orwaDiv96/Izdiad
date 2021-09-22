<?php 

include "../../php/session_vars.php";
include "../../php/con_db.php";


	$getUserAnnouncementsQuery = "SELECT * FROM com_announcements WHERE added_by = '$user_id' AND status = 0";
	$executeGetUserAnnouncements = mysqli_query($con,$getUserAnnouncementsQuery);
	$UserAnnouncements_count = mysqli_num_rows($executeGetUserAnnouncements);
?>
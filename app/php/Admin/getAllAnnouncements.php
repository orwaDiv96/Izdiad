<?php 

include "../../php/con_db.php";


	$getAnnouncementsQuery = "SELECT * FROM com_announcements WHERE status = 1";
	$executeGetAnnouncements = mysqli_query($con,$getAnnouncementsQuery);
	$announcements_count = mysqli_num_rows($executeGetAnnouncements);

	echo $announcements_count;
?>
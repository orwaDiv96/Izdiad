<?php
include "../../php/session_vars.php";
include "../../php/con_db.php";

  $announcementID = $_POST['announcementID'];
  $type = $_POST['type'];

if ($type == 'view') {
	$setViewAnnouncement = "UPDATE com_announcements SET status = 1 WHERE id  = '$announcementID'";
	$excecute = mysqli_query($con,$setViewAnnouncement);
}

if ($type == 'hide') {
	$setViewAnnouncement = "UPDATE com_announcements SET status = 0 WHERE id  = '$announcementID'";
	$excecute = mysqli_query($con,$setViewAnnouncement);
}

?>
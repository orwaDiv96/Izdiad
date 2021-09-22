<?php 

include "../../php/con_db.php";
$a_id = $_GET['a_id'];

$getAnnoncementDetails = "SELECT * FROM com_announcements INNER JOIN departments ON com_announcements.added_by_department = departments.d_id WHERE id = '$a_id'";
$excecuteGetAnnoncementDetails = mysqli_query($con,$getAnnoncementDetails);

$announcementInfo = mysqli_fetch_array($excecuteGetAnnoncementDetails);

?>
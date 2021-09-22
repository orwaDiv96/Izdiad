<?php 
	include "../../php/con_db.php";
	// $getProjectsQuery = "SELECT * FROM project_metadata WHERE initiator_id = '$user_id'";
	$getProjectsQuery = "SELECT * FROM project_metadata";
	$executeGetProjects = mysqli_query($con,$getProjectsQuery);
	
	$projectCount = mysqli_num_rows($executeGetProjects);
?>
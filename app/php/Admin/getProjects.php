<?php 
	include "../../php/con_db.php";
	$getProjectsQuery = "SELECT * FROM project_metadata";
	$executeGetProjects = mysqli_query($con,$getProjectsQuery);
?>
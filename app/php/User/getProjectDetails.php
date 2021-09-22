<?php 

include "../../php/con_db.php";
$pro_id = $_GET['pro_id'];

$getProjectDetails = "SELECT * FROM project_metadata INNER JOIN project_files ON project_metadata.uniq_id = project_files.project_uniq_id INNER JOIN project_data ON project_metadata.uniq_id = project_data.project_uniq_id WHERE uniq_id = '$pro_id'";
$excecuteGetProjectDetails = mysqli_query($con,$getProjectDetails);

$projectInfo = mysqli_fetch_array($excecuteGetProjectDetails);


$getTaskProjectDetails = "SELECT * FROM project_metadata INNER JOIN technical_project_tasks_info ON project_metadata.uniq_id = technical_project_tasks_info.project_id WHERE uniq_id = '$pro_id'";
$excecuteGetProjectTaskDetails = mysqli_query($con,$getTaskProjectDetails);
// $projectTaskInfo = mysqli_fetch_array($excecuteGetProjectTaskDetails);
$technical_taskCount = mysqli_num_rows($excecuteGetProjectTaskDetails);




?>
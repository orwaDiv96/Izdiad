<?php 
	include "../../php/con_db.php";
	include "../../php/session_vars.php";

	$department = $_GET['depart'];
/////////////////////////////////////////////////////////

	// Technical Tasks 

/////////////////////////////////////////////////////////
if ($department == 2) {
	$getDepartmentTasksQuery = "SELECT DISTINCT project_id FROM technical_project_tasks_info";
	$executeGetDepartmentTasks = mysqli_query($con,$getDepartmentTasksQuery);
	$technical_taskCount = mysqli_num_rows($executeGetDepartmentTasks);

	$projectIDsArray = array();	  
	   while($project_id = mysqli_fetch_array($executeGetDepartmentTasks)){
	    array_push($projectIDsArray, $project_id['project_id']);

	$getProjectNameQuery = "SELECT DISTINCT project_name FROM technical_project_tasks_info";
	$executeGetProject = mysqli_query($con,$getProjectNameQuery);
	$projectNamesArray = array();	  
	   while($project_name = mysqli_fetch_array($executeGetProject)){
	    array_push($projectNamesArray, $project_name['project_name']);
	   }
	  }


}

if ($user_department == 2) {
	$getDepartmentTasksQuery = "SELECT DISTINCT project_id FROM technical_project_tasks_info";
	$executeGetDepartmentTasks = mysqli_query($con,$getDepartmentTasksQuery);
	$technical_taskCount = mysqli_num_rows($executeGetDepartmentTasks);

	$projectIDsArray = array();	  
	   while($project_id = mysqli_fetch_array($executeGetDepartmentTasks)){
	    array_push($projectIDsArray, $project_id['project_id']);

	$getProjectNameQuery = "SELECT DISTINCT project_name FROM technical_project_tasks_info";
	$executeGetProject = mysqli_query($con,$getProjectNameQuery);
	$projectNamesArray = array();	  
	   while($project_name = mysqli_fetch_array($executeGetProject)){
	    array_push($projectNamesArray, $project_name['project_name']);
	   }

	   }


}

?>
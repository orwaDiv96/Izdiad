<?php 
$department = $_GET['depart'];


if ($department == 2){
	$departmentPenddingTaskQuery = "SELECT * FROM technical_project_tasks_info WHERE task_status = 'Pendding'";
	$exceutePenddingTaskQuery = mysqli_query($con,$departmentPenddingTaskQuery);
	$PenddingTaskCount = mysqli_num_rows($exceutePenddingTaskQuery);


	$departmentSeenTaskQuery = "SELECT * FROM technical_project_tasks_info WHERE task_status = 'Seen'";
	$exceuteSeenTaskQuery = mysqli_query($con,$departmentSeenTaskQuery);
	$SeenTaskCount = mysqli_num_rows($exceuteSeenTaskQuery);

	
	$departmentOngoingTaskQuery = "SELECT * FROM technical_project_tasks_info WHERE task_status = 'On Going'";
	$exceuteOngoingTaskQuery = mysqli_query($con,$departmentOngoingTaskQuery);
	$OngoingTaskCount = mysqli_num_rows($exceuteOngoingTaskQuery);

	
	$departmentDoneTaskQuery = "SELECT * FROM technical_project_tasks_info WHERE task_status = 'Done'";
	$exceuteDoneTaskQuery = mysqli_query($con,$departmentDoneTaskQuery);
	$DoneTaskCount = mysqli_num_rows($exceuteDoneTaskQuery);
}


?>
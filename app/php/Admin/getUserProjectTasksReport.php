<?php

  // include "../../php/session_vars.php";
  session_start();
  $user_id = $_GET['emp_id'];
  include "../../php/con_db.php";

///////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////

	$departmentPenddingTaskQuery = "SELECT * FROM technical_project_tasks_info WHERE responsible_emp_id LIKE '%$user_id%' AND task_status = 'Pendding'";
	$exceutePenddingTaskQuery = mysqli_query($con,$departmentPenddingTaskQuery);
	$PenddingTaskCount = mysqli_num_rows($exceutePenddingTaskQuery);


	$departmentSeenTaskQuery = "SELECT * FROM technical_project_tasks_info WHERE responsible_emp_id LIKE '%$user_id%' AND task_status = 'Seen'";
	$exceuteSeenTaskQuery = mysqli_query($con,$departmentSeenTaskQuery);
	$SeenTaskCount = mysqli_num_rows($exceuteSeenTaskQuery);

	
	$departmentOngoingTaskQuery = "SELECT * FROM technical_project_tasks_info WHERE responsible_emp_id LIKE '%$user_id%' AND task_status = 'On Going'";
	$exceuteOngoingTaskQuery = mysqli_query($con,$departmentOngoingTaskQuery);
	$OngoingTaskCount = mysqli_num_rows($exceuteOngoingTaskQuery);

	
	$departmentDoneTaskQuery = "SELECT * FROM technical_project_tasks_info WHERE responsible_emp_id LIKE '%$user_id%' AND task_status = 'Done'";
	$exceuteDoneTaskQuery = mysqli_query($con,$departmentDoneTaskQuery);
	$DoneTaskCount = mysqli_num_rows($exceuteDoneTaskQuery);
	
?>
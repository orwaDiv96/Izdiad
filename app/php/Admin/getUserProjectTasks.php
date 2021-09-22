<?php

  // include "../../php/session_vars.php";
  session_start();
  $user_id = $_SESSION["uid"];
  include "../../php/con_db.php";


	$project_tasks_info = "SELECT * FROM technical_project_tasks_info WHERE responsible_emp_id LIKE '%$user_id%' AND task_status = 'Pendding' AND see_date = ''";
	$project_task_excecute = mysqli_query($con,$project_tasks_info);
	$project_task_count = mysqli_num_rows($project_task_excecute);
	echo $project_task_count;

//////////////////////////////////////////////////////////////////////////////////

	$project_tasks_seen_info = "SELECT * FROM technical_project_tasks_info WHERE responsible_emp_id LIKE '%$user_id%' AND task_status = 'Seen'";
	$excecute_seen_project_task = mysqli_query($con,$project_tasks_seen_info);
	$project_seen_task_count = mysqli_num_rows($excecute_seen_project_task);

//////////////////////////////////////////////////////////////////////////////////

	$project_tasks_going_info = "SELECT * FROM technical_project_tasks_info WHERE responsible_emp_id LIKE '%$user_id%' AND task_status = 'On Going'";
	$excecute_project_going_task = mysqli_query($con,$project_tasks_going_info);
	$project_going_task_count = mysqli_num_rows($excecute_project_going_task);

//////////////////////////////////////////////////////////////////////////////////

	$project_tasks_done_info = "SELECT * FROM technical_project_tasks_info WHERE responsible_emp_id LIKE '%$user_id%' AND task_status = 'Done'";
	$excecute_done_project_task = mysqli_query($con,$project_tasks_done_info);
	$project_done_task_count = mysqli_num_rows($excecute_done_project_task);


// SELECT * FROM project_metadata INNER JOIN project_files ON project_metadata.uniq_id = project_files.project_uniq_id INNER JOIN project_data ON project_metadata.uniq_id = project_data.project_uniq_id



?>

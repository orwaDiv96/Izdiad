<?php

  // include "../../php/session_vars.php";
  session_start();
  $user_id = $_SESSION["uid"];
  include "../../php/con_db.php";


	$tasks_info = "SELECT * FROM abstract_tasks WHERE responsibleEmp_id = '$user_id' AND task_status = 'Pendding' AND see_date = ''";
	$excecute = mysqli_query($con,$tasks_info);
	$task_count = mysqli_num_rows($excecute);
	echo $task_count;

//////////////////////////////////////////////////////////////////////////////////

	$tasks_seen_info = "SELECT * FROM abstract_tasks WHERE responsibleEmp_id = '$user_id' AND task_status = 'Seen'";
	$excecute_seen_task = mysqli_query($con,$tasks_seen_info);
	$seen_task_count = mysqli_num_rows($excecute_seen_task);

//////////////////////////////////////////////////////////////////////////////////

	$tasks_going_info = "SELECT * FROM abstract_tasks WHERE responsibleEmp_id = '$user_id' AND task_status = 'On Going'";
	$excecute_going_task = mysqli_query($con,$tasks_going_info);
	$going_task_count = mysqli_num_rows($excecute_going_task);

//////////////////////////////////////////////////////////////////////////////////

	$tasks_done_info = "SELECT * FROM abstract_tasks WHERE responsibleEmp_id = '$user_id' AND task_status = 'Done'";
	$excecute_done_task = mysqli_query($con,$tasks_done_info);
	$done_task_count = mysqli_num_rows($excecute_done_task);
?>
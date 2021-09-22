<?php
include "../../php/session_vars.php";
include "../../php/con_db.php";

  $taskID = $_POST['taskID'];
  $start_date = date('Y-m-d');

$tasks_info = "UPDATE technical_project_tasks_info SET task_status = 'On Going', start_date = '$start_date' WHERE task_id = '$taskID'";
$excecute = mysqli_query($con,$tasks_info);

?>
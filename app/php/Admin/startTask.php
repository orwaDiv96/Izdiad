<?php
include "../../php/session_vars.php";
include "../../php/con_db.php";

  $taskID = $_POST['taskID'];
  $start_date = date('Y-m-d');

$tasks_info = "UPDATE abstract_tasks SET task_status = 'On Going', start_date = '$start_date' WHERE uniq_id = '$taskID'";
$excecute = mysqli_query($con,$tasks_info);

?>
<?php 

include "../../php/con_db.php";
$task_id = $_GET['t_id'];

$getTaskDetails = "SELECT * FROM technical_project_tasks_info WHERE task_id = '$task_id'";
$excecute = mysqli_query($con,$getTaskDetails);

$taskInfo = mysqli_fetch_array($excecute);



?>
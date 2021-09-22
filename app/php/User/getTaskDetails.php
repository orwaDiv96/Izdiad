<?php 

include "../../php/con_db.php";
$task_id = $_GET['t_id'];

$getTaskDetails = "SELECT * FROM abstract_tasks WHERE uniq_id = '$task_id'";
$excecute = mysqli_query($con,$getTaskDetails);

$taskInfo = mysqli_fetch_array($excecute);

?>
<?php 
include "../session_vars.php";
include "../con_db.php";

$uniq_id = uniqid();

$add_date = date('Y-m-d');

$taskTitle = $_POST['taskTitle'];
$taskDetails = $_POST['taskDetails'];
$taskDeadline = $_POST['taskDeadline'];
$responsible = $_POST['responsible'];
$responsibleEmpID = implode(' ', $responsible);


$task_priority = $_POST['task_priority'];

$addedBy = $user_id;
$task_status = 'Pendding';

$see_date = '';
$start_date = '';
$finish_date = '';

$addTaskQuery = "INSERT INTO abstract_tasks VALUES (NULL,'$uniq_id','$taskTitle','$taskDetails','$taskDeadline','$task_priority','$responsibleEmpID','$addedBy','$task_status','$add_date','$see_date','$start_date','$finish_date')";
$excecute = mysqli_query($con,$addTaskQuery);
?>
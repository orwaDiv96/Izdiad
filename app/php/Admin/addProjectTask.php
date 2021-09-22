<?php 
include "../session_vars.php";
include "../con_db.php";

$uniq_id = uniqid();

$addedBy = $user_id;



$projectId = $_POST['projectId'];
$projectName = $_POST['projectName'];

$unit = $_POST['unit'];
$features = $_POST['features'];

$frontEndTime = $_POST['frontEndTime'];
$backEndTime = $_POST['backEndTime'];

$taskStartDate = $_POST['taskStartDate'];
$taskEndDate = $_POST['taskEndDate'];

$responsibleEmp = $_POST['responsibleEmp'];
// $responsibleEmpName = $_POST['responsibleEmpName'];
$responsibleEmpCount = count($responsibleEmp);
$responsibleEmpID = implode(' ', $responsibleEmp);

$obstacles = 'N/A';
$notes = 'N/A';
$task_status = 'Pendding';

$add_date = date('Y-m-d');
$see_date = '';
$start_date = '';
$finish_date = '';



// for ($i=0; $i < $responsibleEmpCount; $i++) { 
	$addProjectTaskQuery = "INSERT INTO technical_project_tasks_info VALUES (NULL,'$uniq_id','$projectId','$projectName','$responsibleEmpID','$addedBy','$unit','$features','$frontEndTime','$backEndTime','$taskStartDate','$taskEndDate','$obstacles','$notes','$task_status','$add_date','$see_date','$start_date','$finish_date')";
	$excecuteProjectTaskQuery = mysqli_query($con,$addProjectTaskQuery);

// }
echo "Done";

?>
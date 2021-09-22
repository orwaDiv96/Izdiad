<?php 
include "../session_vars.php";
include "../con_db.php";


$comment_time = date("Y-m-d | h:i:s");
$commentarID = $user_id;
$commentarName = $user_ar_fullname;

$projectID = $_POST['projectID'];
$taskID = $_POST['taskID'];
$comment = $_POST['projectTaskComment'];

$addProjectTaskCommentQuery = "INSERT INTO project_task_comments VALUES (NULL,'$projectID','$taskID','$comment','$commentarID','$commentarName','$comment_time')";
$excecuteCommentsQuery = mysqli_query($con,$addProjectTaskCommentQuery);

if ($excecuteCommentsQuery) {
	echo 'Done';
}

?>
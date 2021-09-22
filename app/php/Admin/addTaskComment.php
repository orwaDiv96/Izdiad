<?php 
include "../session_vars.php";
include "../con_db.php";


$comment_time = date("Y-m-d | h:i:s");
$commentarID = $user_id;
$commentarName = $user_ar_fullname;

$taskID = $_POST['taskID'];
$comment = $_POST['taskComment'];

$addProjectTaskCommentQuery = "INSERT INTO task_comments VALUES (NULL,'$taskID','$comment','$commentarID','$commentarName','$comment_time')";
$excecuteCommentsQuery = mysqli_query($con,$addProjectTaskCommentQuery);

if ($excecuteCommentsQuery) {
	echo 'Done';
}

?>
<?php 
	include "../../php/con_db.php";

$task_id = $_GET['t_id'];

$getProjectTaskCommentsQuery = "SELECT * FROM project_task_comments WHERE task_uniq_id = '$task_id'";
$executeGetProjectTaskComments = mysqli_query($con,$getProjectTaskCommentsQuery);

while ($commentData = mysqli_fetch_array($executeGetProjectTaskComments)) {
           echo "<h5>".$commentData['commentar_name']."</h5>
            <p>".$commentData['comment']."</p>
            <small>".$commentData['comment_time']."</small>
          <hr>";
}

?>

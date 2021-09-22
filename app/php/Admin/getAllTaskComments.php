<?php 

include "../../php/con_db.php";

$task_id = $_GET['t_id'];

$getTaskCommentsQuery = "SELECT * FROM task_comments WHERE task_uniq_id = '$task_id'";
$executeGetTaskComments = mysqli_query($con,$getTaskCommentsQuery);


while ($commentData = mysqli_fetch_array($executeGetTaskComments)) {
      echo "<h5>".$commentData['commentar_name']."</h5>
        <p>".$commentData['comment']."</p>
        <small>".$commentData['comment_time']."</small>
      <hr>";
}

?>
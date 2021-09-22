<?php 

include "../../php/con_db.php";

$getUserInfo = "SELECT * FROM users WHERE id = '$user_id'";
$excecute = mysqli_query($con,$getUserInfo);

$userInfo = mysqli_fetch_array($excecute);

?>
<?php
include "../../php/session_vars.php";
include "../../php/con_db.php";

$oldPassword = $_POST['oldpassword'];
$newpassword = $_POST['newpassword'];

$decOldPassword = md5($oldPassword);
$encNewPassword = md5($newpassword);

  $sql = "SELECT * FROM users WHERE password = '$decOldPassword' AND id = '$user_id'";
  $run_query = mysqli_query($con,$sql);
  $count = mysqli_num_rows($run_query);

if ($count > 0) {
	$changePasswordQuery = "UPDATE users SET password = '$encNewPassword' WHERE password = '$decOldPassword' AND id = '$user_id'";
	$excecute = mysqli_query($con,$changePasswordQuery);


	echo "<div class='alert alert-success'>تم تغيير كلمة المرور</div>";

}else{
	die("<div class='alert alert-danger'>كلمة السر ليست صحيحة</div>");
}
?>
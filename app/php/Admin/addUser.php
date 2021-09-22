<?php 
	include "../../php/con_db.php";

	$ar_fullname = $_POST['ar_fullname'];
	$en_fullname = $_POST['en_fullname'];
	$ar_job = $_POST['ar_job'];
	$en_job = $_POST['en_job'];
	$email = $_POST['email'];
	$emp_num = $_POST['emp_num'];
	$phone = $_POST['phone'];
	$department = $_POST['department'];
	$role = $_POST['role'];
	$password = md5('12345');

	$addUserQuery = "INSERT INTO users VALUES (NULL,'$email','$password','$ar_fullname','$en_fullname','$ar_job','$en_job','$emp_num','$department','$phone','$role')";
	$executeAddUser = mysqli_query($con,$addUserQuery);
?>
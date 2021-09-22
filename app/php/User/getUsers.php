<?php 
	include "../../php/con_db.php";
	include "../../php/session_vars.php";

	$department = $_GET['depart'];

	if (($user_role == 'admin') && (empty($department))) {
$getUSersQuery = "SELECT * FROM users INNER JOIN departments ON users.department = departments.d_id";
$executeGetUsers = mysqli_query($con,$getUSersQuery);
	}

	if (($user_role == 'manager') && (empty($department))) {
		$getUSersQuery = "SELECT * FROM users INNER JOIN departments ON users.department = departments.d_id AND departments.d_id = '$user_department'";
		$executeGetUsers = mysqli_query($con,$getUSersQuery);
	}

	if (!empty($department)) {
		$getUSersQuery = "SELECT * FROM users WHERE department = '$department'";
		$executeGetUsers = mysqli_query($con,$getUSersQuery);
	}

	if ($user_role == 'emp') {
		$getUSersQuery = "SELECT * FROM users";
		$executeGetUsers = mysqli_query($con,$getUSersQuery);
	}
?>
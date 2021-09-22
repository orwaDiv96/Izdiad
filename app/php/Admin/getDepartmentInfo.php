<?php 
	include "../../php/con_db.php";
	$department = $_GET['depart'];

	$getDepartmentUsersQuery = "SELECT * FROM departments WHERE d_id = '$department'";
	$executeGetDepartmentUsers = mysqli_query($con,$getDepartmentUsersQuery);
	$departmentInfo = mysqli_fetch_array($executeGetDepartmentUsers);
?>
<?php 
	include "../../php/con_db.php";
	$getDepartmentsQuery = "SELECT * FROM departments";
	$executeGetDepartment = mysqli_query($con,$getDepartmentsQuery);
?>
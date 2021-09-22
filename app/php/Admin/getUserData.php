<?php 
	include "../../php/con_db.php";
	$empID = $_GET['emp_id'];

	$getUserDataQuery = "SELECT * FROM users WHERE id = '$empID'";
	$executeGetUserData = mysqli_query($con,$getUserDataQuery);
	$userData = mysqli_fetch_array($executeGetUserData);
?>
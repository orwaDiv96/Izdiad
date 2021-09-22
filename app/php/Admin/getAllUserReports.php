<?php

  // include "../../php/session_vars.php";
  session_start();
  $user_id = $_SESSION["uid"];
  include "../../php/con_db.php";

//////////////////////////////////////////////////////////
//Unseen Reports
	$tasks_info = "SELECT * FROM report WHERE reportee LIKE '%$user_id%' AND status = 0";
	$excecute = mysqli_query($con,$tasks_info);
	$report_count = mysqli_num_rows($excecute);
	echo $report_count;
//////////////////////////////////////////////////////////////////




//////////////////////////////////////////////////////////
	$reports_info = "SELECT * FROM report WHERE reportee LIKE '%$user_id%' AND status = 1";
	$excecuteSeenReport = mysqli_query($con,$reports_info);
	$seenreport_count = mysqli_num_rows($excecuteSeenReport);
//////////////////////////////////////////////////////////////////
?>
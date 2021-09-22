<?php 
session_start();
    $user_id = $_SESSION["uid"];
    $user_email = $_SESSION["email"];
    $user_ar_fullname = $_SESSION["ar_fullname"];
    $user_en_fullname = $_SESSION["en_fullname"];
    $user_ar_job = $_SESSION["ar_job"];
    $user_en_job = $_SESSION["en_job"];
    $user_emp_num = $_SESSION["emp_num"];
    $user_department = $_SESSION["department"];
    $user_phone = $_SESSION["phone"];
    $user_role = $_SESSION["role"];
?>
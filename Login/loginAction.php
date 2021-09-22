<?php
include "con_db.php";

$email = $_POST["email"];
$password = $_POST["password"];

$password = md5($password);

//.'@mtn.sd';
session_start();
$error = "خطأ في اسم المستخدم أو كلمة المرور، يرجى إعادة المحاولة.";

if (isset($_POST["submit"])) { 


  $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
  $run_query = mysqli_query($con,$sql);
  $count = mysqli_num_rows($run_query);

   if($count == 1){
    $row = mysqli_fetch_array($run_query);
    $_SESSION["uid"] = $row["id"];
    $_SESSION["email"] = $row["email"];
    $_SESSION["ar_fullname"] = $row["ar_fullname"];
    $_SESSION["en_fullname"] = $row["en_fullname"];
    $_SESSION["ar_job"] = $row["ar_job"];
    $_SESSION["en_job"] = $row["en_job"];
    $_SESSION["emp_num"] = $row["emp_num"];
    $_SESSION["department"] = $row["department"];
    $_SESSION["phone"] = $row["phone"];
    $_SESSION["role"] = $row["role"];

    if ($row['role'] == 'admin') {
      header("location:../app/pages/Admin");
    }

    if ($row['role'] == 'manager') {
      header("location:../app/pages/Admin");
    }

    if ($row['role'] == 'emp') {
      header("location:../app/pages/User");
    }

    }else{
    $_SESSION["error"] = $error;
    header("location: ../");
  
}
    }
?>

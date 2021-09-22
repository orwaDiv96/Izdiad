<?php



$servername = "localhost";

$username = "root";

$password = "";

$db = "ezdyad_app";





// Create connection

 $con = mysqli_connect($servername, $username, $password,$db);

 mysqli_query($con,'SET CHARACTER SET utf8');

 mysqli_query($con,"SET NAMES 'utf8'");



// Check connection

if (!$con) {

    die("Connection failed: " . mysqli_connect_error());

}



?>
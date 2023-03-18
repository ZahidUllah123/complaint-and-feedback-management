<?php
$cc=mysqli_connect("localhost","root","","project2");
session_start();
session_destroy();
header("location:login.php");



?>
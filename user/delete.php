<?php

$cc=mysqli_connect("localhost","root","","project2");
session_start();
$ccobj=$_REQUEST['cobj'];
mysqli_query($cc ,"DELETE FROM complaint WHERE complaint_no='$ccobj';");
header("location:manage-complaint.php");



?>
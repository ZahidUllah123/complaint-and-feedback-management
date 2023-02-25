<?php

$cc=mysqli_connect("localhost","root","","project2");
session_start();
$obj=$_REQUEST['cd'];
$result = mysqli_query($cc ,"DELETE from teacher_registration  where email='$obj'");
if($result){
    header("location:manage-staff.php");
}



?>

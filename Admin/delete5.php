<?php

$cc=mysqli_connect("localhost","root","","project2");
session_start();
$obj=$_REQUEST['sd'];
$result = mysqli_query($cc ,"DELETE from student_data  where email='$obj'");
if($result){
    header("location:student--data.php");
}



?>

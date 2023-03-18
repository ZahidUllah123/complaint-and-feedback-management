<?php

$cc=mysqli_connect("localhost","root","","project2");
session_start();
$ccobj=$_REQUEST['coob'];

$result = mysqli_query($cc ,"UPDATE complaint  set status1='deleted' where complaint='$ccobj'");
if($result){
    header("location:teacher-closedcomplaint.php");
}



?>
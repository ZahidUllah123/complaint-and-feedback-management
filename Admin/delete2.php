<?php

$cc=mysqli_connect("localhost","root","","project2");
session_start();
$obj=$_REQUEST['coood'];
$result = mysqli_query($cc ,"UPDATE complaint set status2='deleted' where complaint='$obj'");
if($result){
    header("location:completed-complaint.php");
}



?>
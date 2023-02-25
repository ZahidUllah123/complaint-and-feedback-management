<?php

$cc=mysqli_connect("localhost","root","","project2");
session_start();
$objj=$_REQUEST['see'];
$result = mysqli_query($cc ,"DELETE from feedback  where email ='$objj'");
if($result){
    header("location:admin-all-feedback.php");
}



?>
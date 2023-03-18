<?php
$cc=mysqli_connect("localhost","root","","project2");
session_start();
$khan=$_SESSION["email"];
$result2=mysqli_query($cc,"SELECT * from user_registration where email='$khan'");
$row=mysqli_fetch_Array($result2);
$id=$row['user_id'];
if(isset($_POST['submit'])){

    $subjict=mysqli_real_escape_string($cc,htmlentities(trim(strip_tags($_POST['subject']))));

    $complaiint=mysqli_real_escape_string($cc,htmlentities(trim(strip_tags($_POST['complaint']))));

    $ccobj=$_REQUEST['cobj'];
    $result = mysqli_query($cc ,"UPDATE complaint set subject='$subjict',complaint='$complaiint' where complaint_no ='$ccobj'");
        if($result){
        echo" <script> alert('Complaint successfully submited');</script>";
        header("location:manage-complaint.php");
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complant-page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
        crossorigin="anonymous"></script>
        <style>
            body{
                background-color: rgb(62, 64, 66);
            }
            .col-xs-12{
                background-color: blanchedalmond;
                border: 2px solid black;
                border-radius: 8px;
            }
            #file-a{
                margin-bottom: 20px;
            }
            h2{
                text-align: center;
                font-style: italic;
                font-weight: bolder;
                
            }
            
            
        </style>
</head>

<body>
    <div class="content-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-xs-12 ">
               <form action="" method="POST" onsubmit=" return req()">
               <div class="form-group">
                    <h2>Let's Update your Complaint Here</h2>
                    <label for="" style="font-weight: bold;">Subject</label>
                    <input required type="text" placeholder="About Subject" class="form-control" name="subject" ><br>
                     <br>
                    <textarea required placeholder="Feel Free For writing A Conplant"  class="form-control" id="text-t" name="complaint" cols="30" rows="10"></textarea>
                    <br>
                </div>
                <div class="form-group">
                <input type="submit" name="submit" class="btn btn-success btn-block">
            </div>
                
               </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>
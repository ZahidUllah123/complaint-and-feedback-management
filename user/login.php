<?php

$cc=mysqli_connect("localhost","root","","project2");
session_start();
if(isset($_POST['submit'])){
	$email= mysqli_real_escape_string($cc,htmlentities(trim(strip_tags($_POST['email']))));

    $passs=mysqli_real_escape_string($cc,htmlentities(trim(strip_tags($_POST['Password']))));

    $result2 = mysqli_query($cc,"SELECT * from user_registration where email='$email'  and password='$passs'");
    $abc=mysqli_fetch_Array($result2);
    if($abc>0){
        $_SESSION["email"]=$email;
        header("location:indeeeeeeeeeee.php");
    
    }
else{
    echo" <script> alert('Your Email And Password Is Incorrect');</script>";
}}


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <style>
        html{
            font-size: 100%;
        }
        body {
            background-image: url("ggg.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            width: 100%;
        }

        h1 {
            position: relative;
            bottom: 0.6rem;
            text-align: center;
            font-family: 'Combo.zip';
            font-weight: bold;
        }

        .col-md-5 {
            background-color: rgb(229, 233, 236);
            /* background-color: rgb(219, 83, 20); */
            position: absolute;
            /* margin-top: 8%; */
            padding: 2rem;
            border: 0.2rem solid black;
            border-radius: 0.9rem;
            position: absolute;
            /* left: 20rem; */
            top: 2.5rem;
        }

        .btn {
            border: 2rem blue;
            border-radius: 1.7rem;

        }

        img {
            position: relative;
            /* bottom: 0rem; */
            height: 7rem;
            width: 8rem;
            left: 2.5rem;
            bottom: 1rem;
        }

    </style>

</head>

<body class="bg-info">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 col-sm-8 col-12  ">
                <img hspace="25%" src="../user .png" alt="">
                <h1>User Login Here</h1>
                <div class="form">
                    <form action="" method="POST" onsubmit=" return valadation()" class="">

                        <input id="email" type="text" name="email" onkeyup="checkemailerror()" class="form-control"
                            placeholder="Email">
                        <span id="mail" style="color: red; font-weight: bold;"></span><br><br>
                        <input id="pass" type="Password" name="Password" onkeyup="checkpasserror()" class="form-control"
                            placeholder="Password">
                        <span id="pass1" style="color: red; font-weight: bold;"></span>
                        <br><a href="email.php" id="fpass">
                            <h6>Forgot Password?</h6>
                        </a><br>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class=" btn-primary form-control " name="submit" type="submit">Login</button>
                        </div> <br><br>
                        <div class="sign">
                            <h6 style="display: inline-block;">Not a Member?</h6>
                            <h6 style="display: inline-block;"> <a href="registration.php">SignUp!!</a></h6>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function valadation() {

            var Email = document.getElementById('email').value;
            var Pass = document.getElementById('pass').value;

            if (Email == '' || Email == 'null') {
                document.getElementById('mail').innerHTML = 'Email Is Requred';
                return false;
            }
            var atpo = Email.indexOf('@');
            var dotpo = Email.lastIndexOf('.');
            if (atpo < 1 || dotpo < atpo + 4 || dotpo + 4 > Email.length) {
                document.getElementById('mail').innerHTML = 'Invalid Email';
                return false;
            }
            if (Pass == '' || Pass == 'null') {
                document.getElementById('pass1').innerHTML = 'Type Password';
                return false;
            }
            if (Pass.length < 8) {
                document.getElementById('pass1').innerHTML = 'Password Must Be 8 Charater';
                return false;
            }
        }
        function checkemailerror() {
            if (Email == '' || Email == 'null') {
                var Email = document.getElementById('mail').innerHTML = 'Email Is Requred';
            }
            else {
                var Email = document.getElementById('mail').innerHTML = '';
            }
        }
        function checkpasserror() {
            if (Pass == '' || Pass == 'null') {
                var Pass = document.getElementById('pass1').innerHTML = 'Type Password';
            }
            else {
                var Pass = document.getElementById('pass1').innerHTML = '';
            }
        }
    </script>
</body>

</html>
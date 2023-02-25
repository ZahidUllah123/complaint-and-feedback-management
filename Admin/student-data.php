<?php
$cc=mysqli_connect("localhost","root","","project2");
session_start();
if(isset($_POST['submit'])){
	$fname= mysqli_real_escape_string($cc,htmlentities(trim(strip_tags($_POST['firstname']))));

    $lname=mysqli_real_escape_string($cc,htmlentities(trim(strip_tags($_POST['lastname']))));
    $fathername= mysqli_real_escape_string($cc,htmlentities(trim(strip_tags($_POST['fathername']))));
    $email= mysqli_real_escape_string($cc,htmlentities(trim(strip_tags($_POST['email']))));
    $dept=mysqli_real_escape_string($cc,htmlentities(trim(strip_tags($_POST['department']))));

    $semester= mysqli_real_escape_string($cc,htmlentities(trim(strip_tags($_POST['semester']))));

    $gender= mysqli_real_escape_string($cc,htmlentities(trim(strip_tags($_POST['gender']))));
    
      $result=mysqli_query($cc,"INSERT INTO student_data (f_name , l_name , father_name , email , department  , semester, gender)
                                 VALUE('$fname','$lname','$fathername','$email','$dept','$semester','$gender')");
                                 if($result){
                                    echo '<script>alert("your data is successfully inserted")</script>';
                                   
                                }
                                else {
                                    echo '<script>alert("Failed to insert")</script>';
                                }
}
     ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data</title>
    <link rel='stylesheet' type='text/css' media='screen' href='css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' href="custom.css">
    <script src='js/bootstrap.min.js'></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
           <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      
        <style>
            body{
                background-image: url('ggg.jpg');
                background-repeat: no-repeat;
                background-size: cover;
            }
            .col-md-7{
                background-color: rgb(229, 233, 236);
                border: 2px solid rgb(123, 123, 253);
                border-radius: 12px;
                padding: 7px;

            }
            header{
                border: 2px solid rgb(18, 111, 128);
                background-color: rgb(123, 253, 253);
                border-radius: 10px;
            }

        </style>
</head>
<body style="background:lightgray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 col-sm-10 col-12 mt-3">
                <fieldset>
                    <header>
                    <legend class="text-center" style="font-weight: bold; color: black; "  >Insert Student Data</legend>
                </header>
                <form action="" id="form" method="POST" >
                    <div id="form-group">
                        <label for="text">First Name</label>
                        <input type="text" id="firstname"  placeholder="First Name"  class="form-control"name="firstname">
                        <span style="color: red;" id="firstname-error"></span>
                    </div>
                    <div id="form-group">
                        <label for="text">Last Name</label>
                        <input type="text" id="lastname" placeholder="Last Name"  class="form-control"name="lastname">
                        <span style="color: red;" id="lastname-error"></span>
                    </div>
                    <div id="form-group">
                        <label for="text">Father Name</label>
                        <input type="text" id="lastname" placeholder="Father Name"  class="form-control"name="fathername">
                        <span style="color: red;" id="lastname-error"></span>
                    </div>
                    <div id="form-group">
                        <label for="">Email</label>
                        <input type="email" id="email" placeholder="Email"  class="form-control"name="email">
                        <span style="color: red;" id="email-error"></span>
                    </div>
                    <div id="form-group">
                        <label for="">Department</label>
                        <input type="text" id="password1" placeholder="Department"  class="form-control"name="department">
                        <span style="color: red;" id="pass1-error"></span>
                    </div>
                    <div id="form-group">
                        <label for="">Semester</label>
                        <input type="text" id="password2" placeholder="Current Semester"  class="form-control"name="semester">
                        <span style="color: red;" id="pass2-error"></span>
                    </div><br>
                    <div class="form-group">
                        <label for="">Gender</label><br>
                        <input type="radio" name="gender" value="Male" >Male
                        <input type="radio" name="gender" value="Female" >Female
                        <input type="radio" name="gender" value="Other" >Other
                    </div>
                <div id="form-group" class="lol">
                        <button type="submit"  name="submit"class="btn btn-block  btn-success">submit</button>
                    </div>
                    
                </form>
            </fieldset>
            </div>
        </div>
    </div>
</body>
</html>
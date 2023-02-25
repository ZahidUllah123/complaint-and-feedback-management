<?php
$cc=mysqli_connect("localhost","root","","project2");
session_start();
if(isset($_POST['submit'])){
	$fname= mysqli_real_escape_string($cc,htmlentities(trim(strip_tags($_POST['firstname']))));

    $lname=mysqli_real_escape_string($cc,htmlentities(trim(strip_tags($_POST['lastname']))));

    $email= mysqli_real_escape_string($cc,htmlentities(trim(strip_tags($_POST['email']))));

    $objeect=mysqli_real_escape_string($cc,htmlentities(trim(strip_tags($_POST['object']))));

    $pass=mysqli_real_escape_string($cc,htmlentities(trim(strip_tags($_POST['password']))));

    $repass= mysqli_real_escape_string($cc,htmlentities(trim(strip_tags($_POST['repassword']))));

    $gender= mysqli_real_escape_string($cc,htmlentities(trim(strip_tags($_POST['gender']))));

    $token= bin2hex(random_bytes(15));
    
    $result2 = mysqli_query($cc,"SELECT * from teacher_registration where email='$email'");
    $abc=mysqli_fetch_Array($result2);
    if($abc>0){
        echo" <script> alert('Already Added');</script>";
    
    }
    else{
    
     $result=   mysqli_query($cc,"INSERT INTO teacher_registration (f_name , l_name , object , email , password , repassword  , gender , token )
                                 VALUE('$fname','$lname','$objeect','$email','$pass','$repass','$gender' ,'$token')");
     if($result){

        echo" <script> alert('SUCCESSFULY ADDED');</script>";
        header("location:manage-staff.php");
        
     }

     
    }
 
    
    }
  

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>regester-form</title>
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
                border: 2px solid rgb(123, 123, 253);
                background-color: rgb(123, 123, 253);
                border-radius: 10px;
            }

        </style>
</head>
<body class="bg-info">



    <div class="container-wrapper">
        <div class="row  justify-content-center">
            <div class="col-md-7 col-sm-10 col-12 mt-3 ">
                <fieldset>
                    <header>
                    <legend class="text-center" style="font-weight: bold; color: black; "  >Registration Form</legend>
                </header>
                <form action="" id="form" method="POST" onsubmit="return valid()">
                    <div id="form-group">
                        <label for="text">First Name</label>
                        <input type="text" id="firstname"  placeholder="First Name" onkeyup="chickfnameerror()" class="form-control"name="firstname">
                        <span style="color: red;" id="firstname-error"></span>
                    </div>
                    <div id="form-group">
                        <label for="text">Last Name</label>
                        <input type="text" id="lastname" placeholder="Last Nmae" onkeyup="chicklnameerror()" class="form-control"name="lastname">
                        <span style="color: red;" id="lastname-error"></span>
                    </div>
                    <div id="form-group">
                        <label for="">Email</label>
                        <input type="text" id="email" placeholder="Email" onkeyup="chickemailerror()" class="form-control"name="email">
                        <span style="color: red;" id="email-error"></span>
                    </div>
                    <div id="form-group">
                        <label for="">Passion</label>
                        <select class="form-select form-control" name="object">
                        <option  >Select</option>
                        <option  value="Teacher" >Teacher</option>
                        <option  value="Lab Assistant">Lab Assistant</option>
                        <option  value="H O D">H O D</option>
                        <option  value="Secrecy">Secrecy</option>
                        <option  value="University">University</option>
                    </select>
                    </div>
                    <div id="form-group">
                        <label for="">Password</label>
                        <input type="password" id="password1" placeholder="Password" onkeyup="chickpasserror()" class="form-control"name="password">
                        <span style="color: red;" id="pass1-error"></span>
                    </div>
                    <div id="form-group">
                        <label for="">Repassword</label>
                        <input type="password" id="password2" placeholder="Retype-password" onkeyup="chickrepasserror()" class="form-control"name="repassword">
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

<script type="text/javascript">
    function valid(){
var Fname=document.getElementById('firstname').value;
var Lname=document.getElementById('lastname').value;
var Email=document.getElementById('email').value;
var Pass=document.getElementById('password1').value;
var Repass=document.getElementById('password2').value;

if(Fname=='' || Fname=="null"){
document.getElementById('firstname-error').innerHTML='Please Enter Your First Name';
return false;
}
if(Lname==''||Lname=="null"){
    document.getElementById('lastname-error').innerHTML='Please Enter Your Last Name';
    return false;
}
if(Email==''||Email=="null"){
    document.getElementById('email-error').innerHTML='Enter Your Email';
    return false;
}
            var atpo=Email.indexOf('@');
            var dotpo=Email.lastIndexOf('.');
            if(atpo<1 || dotpo<atpo+4 || dotpo+4>Email.length){
            alert('Enter Valid Email (z@xyz.xz)') ;
                return false;
            }
if(Pass==''||Pass=="null"){
    document.getElementById('pass1-error').innerHTML='Enter Your Password';
    return false;
}
if(Pass.length<8){
    // document.getElementById('pass1-error').innerHTML='Password Must Be 8 Character';
    alert('Password Must Be 8 Character');
    return false;
}
if(Repass==''||Repass=="null"){
    document.getElementById('pass2-error').innerHTML='Enter Your Password Again';
    return false;
}
if(Repass != Pass){
    document.getElementById('pass2-error').innerHTML='Password Not Matched';
    return false;
}

    }

    function chickfnameerror(){
        if(Fname=='' || Fname=="null"){
     var Fname = document.getElementById('firstname-error').innerHTML='Please Enter Your First Name';
        }
       else{
        var Fname = document.getElementById('firstname-error').innerHTML='';
       }
    }
    function chicklnameerror(){
        if(Lname=='' || Lname=="null"){
     var Lname = document.getElementById('lastname-error').innerHTML='Please Enter Your Last Name';
        }
       else{
        var Lname = document.getElementById('lastname-error').innerHTML='';
       }
    }
    function chickemailerror(){
        if(Email=='' || Email=="null"){
     var Email = document.getElementById('email-error').innerHTML='Please Enter Your Email';
        }
       else{
        var Email = document.getElementById('email-error').innerHTML='';
       }
    }
    function chickpasserror(){
        if(Pass=='' || Pass=="null"){
     var Pass = document.getElementById('pass1-error').innerHTML='Please Enter Your Password';
        }
        // else if(Pass.length<8){
        //     var pass = document.getElementById('').innerHTML='Password Must Be 8Character';
        // }
       else{
        var Pass = document.getElementById('pass1-error').innerHTML='';
       }
    }
    function chickrepasserror(){
        if(Repass=='' || Repass=="null"){
     var Repass = document.getElementById('pass2-error').innerHTML='Retype-Password';
        }
       else{
        var Repass = document.getElementById('pass2-error').innerHTML='';
       }
    }
    
</script>
</body>
</html>
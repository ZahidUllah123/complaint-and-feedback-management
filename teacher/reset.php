<?php

$cc=mysqli_connect("localhost","root","","project2");
session_start();
if(isset($_POST['submit'])){

    $pass=mysqli_real_escape_string($cc,htmlentities(trim(strip_tags($_POST['pass']))));

    $repass= mysqli_real_escape_string($cc,htmlentities(trim(strip_tags($_POST['repass']))));

    $token=$_REQUEST['token'];
    
    $result2 = mysqli_query($cc,"SELECT * from teacher_registration where token='$token'");
    $abc=mysqli_fetch_Array($result2);
    if($abc>0){
   mysqli_query($cc, "UPDATE teacher_registration set password='$pass', repassword='$repass' where token='$token'");
   echo" <script> alert('Successfully Reset Password');</script>";
    }
else{
    echo" <script> alert('Incorrect mail');</script>";
}}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>change-password</title>
    <script src='main.js'></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <style>
        body{
            background-color: antiquewhite; 
        }
        .col-md-5{
            position: absolute;
            top: 12rem;
            background-color: antiquewhite;
        }
      </style>
</head>
<body>
    <div class="container" style="position: relative;">
        <div class="row">
            <div class="col-md-5 col-sm-7 col-12 offset-3">
            <form action="" method="POST" onsubmit="return valid()">
                 <div class="form-group">
                     <label for="">New Password</label>
                     <input type="password" id="password2" placeholder="New Password" onkeyup="chickerror1()" name="pass" class="form-control" >
                     <span style="color: red;" id="pass2-error"></span>
                 </div>
                 <div class="form-group">
                     <label for="">Confirm Password</label>
                     <input type="password" id="password3" placeholder="Confirm Password" onkeyup="chickerror2()" name="repass" class="form-control" >
                     <span style="color: red;" id="repass-error"></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" placeholder="Retype New Password" name="submit" class="btn btn-block btn-success">
                       </div>
            </form>

            </div>
        </div>
    </div>


    <script type="text/javascript">
        function valid(){
    var pass2=document.getElementById('password2').value;
    var repass=document.getElementById('password3').value;
    
    if(pass2 ==''||pass2 =="null"){
        document.getElementById('pass2-error').innerHTML='Enter Your Password';
        return false;
    }
    if(pass2 .length<8){
        // document.getElementById('pass1-error').innerHTML='Password Must Be 8 Character';
        alert('Password Must Be 8 Character');
        return false;
    }
    if(repass==''||repass=="null"){
        document.getElementById('repass-error').innerHTML='Enter Your Password Again';
        return false;
    }
    if(repass != pass2 ){
        document.getElementById('repass-error').innerHTML='Password Not Matched';
        return false;
    }
}
        
        function chickerror1(){
            if(pass2 =='' || pass2 =="null"){
         var Pass = document.getElementById('pass2-error').innerHTML='Please Enter Your Password';
            }
           else{
            var pass2  = document.getElementById('pass2-error').innerHTML='';
           }
        }
        function chickerror2(){
            if(repass=='' || repass=="null"){
         var repass = document.getElementById('repass-error').innerHTML='Retype-Password';
            }
           else{
            var repass = document.getElementById('repass-error').innerHTML='';
           }
        }
        
    </script>
</body>
</html>
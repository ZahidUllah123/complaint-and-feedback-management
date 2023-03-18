<?php

$cc=mysqli_connect("localhost","root","","project2");
session_start();
if(isset($_POST['Submit'])){
$email= mysqli_real_escape_string($cc,htmlentities(trim(strip_tags($_POST['email']))));
$getemail=mysqli_query($cc,"SELECT * FROM teacher_registration where email='$email'");
$khan=mysqli_num_rows($getemail);

if($khan){
    $get=mysqli_fetch_array($getemail);

$fname=$get['f_name'];
$lname=$get['l_name'];
$token=$get['token'];

$to_email = $email; 
$subject = "password reset";
$body = "Hi, $fname.$lname . click here to reset your password 
http://localhost/lolll/teacher/reset.php?token=$token";
$headers = "From: fahid7888@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo" <script> alert('Email successfully sent to $to_email... $headers');</script>";
} else {
    echo" <script> alert('Email sending failed...');</script>";
}
}
else{
    echo" <script> alert('This Email Is Not Found');</script>";

}


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sent male</title>
    <style>
    body{
        background:url('../images/12.jpg') ;
        background-repeat: "no repeat";

    }
</style>
</head>
<body>

</head>

<body>
    
<div class="container">
    
<div class="col-lg-8 mt-5 bg-light ml-30px offset-2 pt-5 pb-5 ">
<p class="bg-info text-center"> <strong>Put Your Valid Email To Regenerate Your New Password</strong></p>
<form method="POST" action="">
<div class="form-group">
<label>Email</label>
<input class="form-control" type="email" placeholder="Email" name="email" required>
</div>
<input class="btn btn-block btn-danger" type="submit" name="Submit">
</form>
</div>



</div>

</body>


</html>
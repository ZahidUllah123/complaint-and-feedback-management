<?php
$cc=mysqli_connect("localhost","root","","project2");
session_start();
if(isset($_POST['submit'])){
	$status= mysqli_real_escape_string($cc,htmlentities(trim(strip_tags($_POST['repliy']))));

    $ccobj=$_REQUEST['rep'];
    $result = mysqli_query($cc ,"UPDATE complaint set status='$status' where complaint='$ccobj'");
    
    if($result){
     header("location:teacher-handlecomplaint.php");
    
    }
}
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repliy</title>
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
                border-radius: 10px;
            }

        </style>
</head>
<body>
    <div class="content-wrapper">
    <div class="container">
        <div class="row ">
            <div class="col-md-7 col-sm-10 col-12 mt-5 pt-5 offset-2 ">
                <fieldset>
                    <header class="bg-success">
                    <legend class="text-center" style="font-weight: bold; color: black; "  >Put your reply in simple words</legend>
                </header><br>
                <form action="" id="form" method="POST">
                    <div id="form-group">
                        <textarea name="repliy" placeholder="REPLIY HERE" id="firstname" class="form-control" cols="30" rows="10"></textarea>
                    </div><br>
                    <div class="form-group">
                    <input type="submit" name="submit" class="form-control btn btn-success">
                    </div>
                </form>
            </fieldset>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
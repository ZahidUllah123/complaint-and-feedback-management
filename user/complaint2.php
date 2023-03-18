<?php
$cc=mysqli_connect("localhost","root","","project2");
session_start();
$khan=$_SESSION["email"];
$result2=mysqli_query($cc,"SELECT * from user_registration where email='$khan'");
$row=mysqli_fetch_Array($result2);
$id=$row['user_id'];
if(isset($_POST['submit'])){
    $objeect=mysqli_real_escape_string($cc,htmlentities(trim(strip_tags($_POST['object']))));

    $subjict=mysqli_real_escape_string($cc,htmlentities(trim(strip_tags($_POST['subject']))));

    $complaiint=mysqli_real_escape_string($cc,htmlentities(trim(strip_tags($_POST['complaint']))));

    $name=mysqli_real_escape_string($cc,htmlentities(trim(strip_tags($_POST['name']))));

    $result = mysqli_query($cc,"INSERT INTO complaint (object,subject,complaint,name,id) VALUE('$objeect','$subjict','$complaiint','$name','$id')");
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
        <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
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
               <form action="" method="POST">
               <div class="form-group">
                    <h2>Complaint Here</h2>
                    <h1 id="user"></h1>
                    <label for="" style="font-weight: bold;" class="form-label">Object</label>
                    <select class="form-select form-control"  id="passion" name="object" aria-label="Default select example">
                        <option value="" disabled selected>-Select-</option>
                        
                        <?php
                     $cc=mysqli_connect("localhost","root","","project2");
                    $result= mysqli_query($cc,"SELECT * from passion");
                    while($row=mysqli_fetch_Array($result)){
                     ?>
                     <option value="<?php echo$row['passion_name'];?> " > <?php echo$row['passion_name'];?></option>
                     <?php }?>

                    </select>
                    </div>
                    

                    <div class="form-group">
                    <label for="" style="font-weight: bold">Name (Complaint On)</label>
                    <select class="form-select form-control" id="passion1" name="name" aria-label="Default select example">
                        <option value="" disabled selected>-Select-</option>
                        <?php
                     $cc=mysqli_connect("localhost","root","","project2");
                    $result= mysqli_query($cc,"SELECT * from teacher_registration");
                    while($row=mysqli_fetch_Array($result)){
                     ?>
                     <option value="<?php echo$row['f_name'] ." ". $row['l_name'];?> " > <?php echo$row['f_name'] . " ". $row['l_name'] ." ".  $row['object']  ;?></option>
                     <?php }?>
                 </select>
                    </div>
                 
                 <div class="form-group">
                    <label for="" style="font-weight: bold;">Subject</label>
                    <input type="text" placeholder="About Subject" class="form-control" name="subject" required><br>
                    <label for="" style="font-weight: bold;">Complaint Here</label>
                    <textarea required placeholder="Feel Free For writing A Complaint"  class="form-control" id="text-t" name="complaint" cols="30" rows="10"></textarea>
                    </div>
                    
                    <div class="form-group">
                    <button type="submit"  name="submit"class="btn btn-success btn-block">submit</button>
                    </div>
                
               </form>
            </div>
        </div>
    </div>
</div>





</body>

</html>
<?php
session_start();
if($_SESSION["email"]==true){

}
else{
  header("location:teacher_desh.php");
}
?>
<?php
$cc=mysqli_connect("localhost","root","","project2");
if(isset($_POST['submit'])){
	$radio=mysqli_real_escape_string($cc,htmlentities(trim(strip_tags($_POST['radio']))));
	$fname=mysqli_real_escape_string($cc,htmlentities(trim(strip_tags($_POST['f_name']))));
	$lname=mysqli_real_escape_string($cc,htmlentities(trim(strip_tags($_POST['l_name']))));
	$email=mysqli_real_escape_string($cc,htmlentities(trim(strip_tags($_POST['email']))));
	$topic=mysqli_real_escape_string($cc,htmlentities(trim(strip_tags($_POST['khan']))));
	$message=mysqli_real_escape_string($cc,htmlentities(trim(strip_tags($_POST['message']))));
 $query=mysqli_query($cc,"INSERT INTO   feedback (passion , f_name , l_name , email ,topic , message )
              VALUES('$radio','$fname','$lname','$email','$topic','$message')");
              if($query){

                echo" <script> alert('YOUR FEEDBACK SUCCESSFULY SUBMITED');</script>";
              }
}



?>

<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Complaint | HERE</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
     
        <style>
            body{
                background-color: white;
            }
            #khan{
                background-color: blanchedalmond;
                border: 2px solid black;
                border-radius: 8px;
            }
          
   form{
    border: 3px solid black;
    background-color: blanchedalmond;
     /* #11748181; */
   }
  h1{
    background-color: blanchedalmond;
  }


            
            
        </style>

      </head>
  <body>
  <?php
include 'header.php';
?>

    <div class="content-wrapper">
<div class="container ">
        <div class="row">
            <div class="col-md-6 col-sm-8 co-xs-12 offset-5">
                <h1 class="text-success text-center">Give Yours Feedback</h1>
                <form action="" method="POST">
                    <div class="form-group">
                        <label>I am a....</label><br>
                        <input type="radio" name="radio" value="Student">Student
                        <input type="radio" name="radio" value="Staff Member">Staff Member
                    </div>
                    <div class="form-group">
                        <label>First Name</label>
                        <input placeholder="First Name" class="form-control" type="text" name="f_name">
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input placeholder="Last Name Name" class="form-control" type="text" name="l_name">
                    </div>
                    <div class="form-group">
                        <label>University Email Address</label>
                        <input placeholder="Put Your Email" class="form-control" type="email" name="email">
                    </div>
                    <div class="form-group">
                        <label>Topic</label>
                        <select class="form-control" name="khan">
                            <option value="Campus Facilities">Campus Facilities</option>
                            <option value="Digital tools And Technology">Digital tools And Technology</option>
                            <option value="Health And Wellbeing">Health And Wellbeing</option>
                            <option value="Online Study">Online Study</option>
                            <option value="Opportunities And Activities">Opportunities And Activities</option>
                            <option value="Student Support">Student Support</option>
                            <option value="Supporting Your learning">Supporting Your learning</option>
                            <option value="Other">Other</option>
                             </select>
                    </div>
                    <div class="form-group">
                        <label>Message...</label>
                        <textarea name="message" class="form-control">

                        </textarea>
                    </div>

                    <div class="form-group ">
                        
                      <input type="submit" name="submit" class="btn btn-block btn-info">
                    </div>
                </form>
            </div>
        </div>
</div>
</div>
<?php
include 'footer.php';
?>


    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>
   
    <script src="../dist/js/app.min.js"></script>
    
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
  </body>
</html>

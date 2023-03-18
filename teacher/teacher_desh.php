<?php
session_start();
if($_SESSION["email"]==true){

}
else{
  header("location:teacher_login.php");
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
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="../plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <style>
    .main-footer{
      background-color: LightGray;
    }
  </style>

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
<?php
include 'header.php';
?>

      <div class="content-wrapper">
      <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
          <?php         
          $cc=mysqli_connect("localhost","root","","project2");
          $khan1=$_SESSION["email"];
          

          $result3=mysqli_query($cc,"SELECT * from teacher_registration where email='$khan1'");
          $row1=mysqli_fetch_Array($result3);
          $name1=$row1['f_name']." ".$row1['l_name'];
          $obj=$row1['object'];



          $def=mysqli_query($cc , "SELECT  * FROM  complaint where object='$obj' ");
          $countrow=mysqli_num_rows($def);
          $fetch=mysqli_fetch_Array($def);
          $obj1=$fetch['object'];


          if($obj1==$obj){ 
            $laa=mysqli_query($cc , "SELECT * FROM complaint
            WHERE object='$obj1' and name='$name1' and status='pending...'");
            $conrow=mysqli_num_rows($laa);

          }

          ?>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php  echo  $conrow;?></h3>
                  <p>New Complaints</p>
                </div>
                <div class="icon">
                  <i class="ion ion-clock"></i>
                </div>
                <a href="teacher-handlecomplaint.php" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <?php         
          $cc=mysqli_connect("localhost","root","","project2");
          $kha1=$_SESSION["email"];

          $result=mysqli_query($cc,"SELECT * from teacher_registration where email='$kha1'");
          $row=mysqli_fetch_Array($result);
          $name=$row['f_name']." ".$row['l_name'];
          $obj1=$row['object'];


          $def1=mysqli_query($cc , "SELECT  * FROM  complaint where object='$obj1' ");
          $countrow1=mysqli_num_rows($def1);
          $fetch1=mysqli_fetch_Array($def1);
          $nnn=$fetch1['name'];
          $obj11=$fetch1['object'];



          if($obj11==$obj1){ 
            $laa1=mysqli_query($cc , "SELECT * FROM complaint
            WHERE object='$obj1' and name='$nnn'  and status!='pending...' and status1='active'");
            $conrow1=mysqli_num_rows($laa1);

          }

          ?>

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php  echo $conrow1; ?></h3>
                  <p>Closed Complaints</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="teacher-closedcomplaint.php" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>

</section>
</div>


<?php
include 'footer.php';
?>

    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="../plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
  </body>
</html>

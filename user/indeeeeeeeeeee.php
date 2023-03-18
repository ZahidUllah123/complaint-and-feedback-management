<?php
session_start();
if($_SESSION["email"]==true){

}
else{
  header("location:login.php");
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

  <header class="main-header">
        <!-- Logo -->
        <a href="" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>H</b>ERE</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">Complaint<b>HERE</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
            <li class="dropdown tasks-menu">
                <a href="indeeeeeeeeeee.php">
                <button class="btn btn-primary">Home</button>
                </a>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="logout.php">
                <button class="btn btn-primary">LogOut</button>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </header>


 <aside class="main-sidebar">

<section class="sidebar">

  <div class="user-panel">
    <div class="pull-left image">
   <img src="../admin/user.png" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>
        <?php
          $cc=mysqli_connect("localhost","root","","project2");
          $khan=$_SESSION["email"];
          $result2=mysqli_query($cc,"SELECT * from user_registration where email='$khan'");
          $row=mysqli_fetch_Array($result2);
          $id=$row['f_name']." ".$row['l_name'];
          echo "<h4>$id</h4>";
        ?>
      </p>
    </div>
  </div>


  <ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="active treeview">
      <a href="indeeeeeeeeeee.php" >
        <span>Dashboard</span>
      </a>
    </li>
    <li>
      <a href="complaint2.php">
    <span>Create-Complaint</span>
      </a>
    </li>
    <li class="treeview">
      <a href="manage-complaint.php">
        <span>Manage-Complaint</span>
      </a>
    </li>
    <li class="treeview">
      <a href="complaintonpending.php">
        <span>Complaint_On_Panding</span>
      </a>
    </li>
    <li class="treeview">
      <a href="completed-complaints.php">
        <span>completed_Complaints</span>
      </a>
    </li>
    <li class="treeview">
      <a href="userfeedback.php">
    
        <span>Feedback</span>
      </a>
    </li>
    <li class="treeview">
      <a href="change-pass.php">
    <span>change-password</span>
      </a>
    </li>
    <li class="treeview">
      <a href="logout.php">
   <span>Sign-Out</span>
      </a>
    </li>
  </li>
  </ul>
</section>
<!-- /.sidebar -->
</aside>



      <?php
         $cc=mysqli_connect("localhost","root","","project2");
          $khan=$_SESSION["email"];
          echo $khan;
          $result2=mysqli_query($cc,"SELECT * from user_registration where email='$khan'");
          $row=mysqli_fetch_Array($result2);
          $id=$row['user_id'];
          $abc=mysqli_query($cc , "SELECT * from complaint where id='$id'");
          $row=mysqli_num_rows($abc);
          ?>
      <div class="content-wrapper">
      <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $row;?></h3>
                <h4>New Complaints</h4>
                </div>
                <div class="icon">
                  <i class="ion-android-chat"></i>
                </div>
                <a href="manage-complaint.php" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <?php
          $abc=mysqli_query($cc , "SELECT * from complaint where status='pending...' and id='$id'");
          $row11=mysqli_num_rows($abc);
          ?>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php  echo $row11;?></h3>
                  <p>Complaints On Pending...</p>
                </div>
                <div class="icon">
                  <i class="ion ion-clock"></i>
                </div>
                <a href="complaintonpending.php" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <?php
          $abc=mysqli_query($cc , "SELECT * from complaint where status!='pending...' and id='$id'");
          $row12=mysqli_num_rows($abc);
          ?>

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $row12;?></h3>
                  <p>Completed Complaints</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="completed-complaints.php" class="small-box-footer">View <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>

</section>
</div>

<footer class="main-footer text-center">
        <strong>Complaint &copy; 2022 <a href="">Islamia College Uinversity</a>.</strong>
      </footer>






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

<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Student | Data</title>
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
    
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
      </head>
  <body>
  <?php
    include 'header.php';
    ?>


<div class="content-wrapper">
    <section>
        <h2 style="text-align:center" class="bg-success">Enrolled Student Data</h2>
    </section>
  <section>
      <div class="row">
        <div class="col-xs-12">
        <div class="box">
      <div class="box-body">


        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr class="bg-success">
              <th>first name</th>
              <th>Last name</th>
              <th>Father name</th> 
              <th>email</th>
              <th>Department</th>
              <th>Semester</th>
              <th>Gender</th>
              <th>Manage</th>
             

                               
              
            </tr>
          </thead>
          <?php
         $cc=mysqli_connect("localhost","root","","project2");
          $abc=mysqli_query($cc , "SELECT * from student_data");
          while($xyz=mysqli_fetch_Array($abc)){
          ?>
          <tbody>
            <tr>
            <td><?php echo $xyz['f_name'];?></td>
              <td><?php echo $xyz['l_name']; ?></td>
              <td><?php echo $xyz['father_name'];?></td>
              <td><?php echo $xyz['email'];?></td>
              <td><?php echo $xyz['department'];?></td>
              <td><?php echo $xyz['semester'];?></td>
              <td><?php echo $xyz['gender'];?></td>
              <td><a href="delete5.php?sd=<?php echo $xyz['email'];?>"><button class="btn btn-danger">Delete</button></a></td>
             </tr>
          </tbody>
          <?php }?>
          <tfoot>
            <tr class="bg-success">
            <th>first name</th>
              <th>Last name</th>
              <th>Father name</th> 
              <th>email</th>
              <th>Department</th>
              <th>Semester</th>
              <th>Gender</th>
              <th>Manage</th>

            </tr>
          </tfoot>
        </table>
     
       </div>
       </div>
      </div><!-- /.box-body -->
</div><!-- /.row -->
</section>
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
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!-- page script -->
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


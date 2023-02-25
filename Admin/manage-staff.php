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
  <body>
  <?php
    include 'header.php';
    ?>


    <div class="content-wrapper">
    <section>
        <h2 style="text-align:center" class="bg-success">Manage Staff</h2>
    </section>
  <section>
      <div class="row">
        <div class="col-xs-12">
        <div class="box">
      <div class="box-body">

        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr class="bg-success">
            <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th> 
              <th>Passion</th>
              <th>Gender</th> 
              <th>Delete</th> 
              
            </tr>
          </thead>
          <?php
         $cc=mysqli_connect("localhost","root","","project2");
          $abc=mysqli_query($cc , "SELECT * from teacher_registration ");
          while($xyz=mysqli_fetch_Array($abc)){
          ?>
          <tbody>
            <tr>
            <td><?php echo $xyz['f_name'];?></td>
              <td><?php echo $xyz['l_name']; ?></td>
              <td><?php echo $xyz['email'];?></td>
              <td><?php echo $xyz['object'];?></td>
              <td><?php echo $xyz['gender'];?></td>
              <td><a href="delete3.php?cd=<?php echo $xyz['email'];?>"><button class="btn btn-danger">Delete</button></a></td>
             </tr>
          </tbody>
          <?php }?>
          <tfoot>
            <tr class="bg-success">
            <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th> 
              <th>Passion</th>
              <th>Gender</th> 
              <th>Delete</th>

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


<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin | Complaint</title>
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

        <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    
      </head>
  <body>
  <?php
    include 'header.php';
    ?>


    <div class="content-wrapper">
  <section>
      <div class="row">
        <div class="col-xs-12">
    <div class="box">
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped bg-success">
          <thead>
            <tr>
            <th>Staff name</th>
              <th>Designation</th>
              <th>Subject</th> 
              <th>Complaint</th>
                               
              
            </tr>
          </thead>
            <?php         
          $cc=mysqli_connect("localhost","root","","project2");

          $def=mysqli_query($cc , "SELECT  * FROM  complaint where status2='active' ");

          while($row=mysqli_fetch_Array($def)){
            
          ?>
          <tbody>
            <tr>
              <td><?php echo $row['name'];?></td>
              <td><?php echo $row['object']; ?></td>
              <td><?php echo $row['subject'];?></td>
              <td><?php echo $row['complaint'];?></td>

            

            </tr>
          </tbody>
          <?php }   ?>
      
          <tfoot>
            <tr>
            <th>Staff name</th>
              <th>Designation</th>
              <th>Subject</th> 
              <th>Complaint</th>
            </tr>
          </tfoot>
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!-- /.col -->
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

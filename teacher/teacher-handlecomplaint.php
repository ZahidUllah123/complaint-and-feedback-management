<?php
session_start();
if($_SESSION["email"]==true){

}
else{
  header("location:teacher_desh.php");
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
      <div class="row">
        <div class="col-xs-12">
    <div class="box">
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped bg-success">
          <h2 class="text-center bg-success">
            New Complaint
          </h2>
          <thead>
            <tr>
              <th>Object</th>
              <th>Subject</th> 
              <th>Complaint</th>
              <th>name</th>
              <th>Reply</th>
                               
              
            </tr>
          </thead>
            <?php         
          $cc=mysqli_connect("localhost","root","","project2");
          $khan1=$_SESSION["email"];

          $result3=mysqli_query($cc,"SELECT * from teacher_registration where email='$khan1'");
          $row1=mysqli_fetch_Array($result3);
          $name1=$row1['f_name']." ".$row1['l_name'];
          $obj=$row1['object'];



          $def=mysqli_query($cc , "SELECT  * FROM  complaint where  name='$name1' ");
          $fetch=mysqli_fetch_Array($def);
          $obj1=$fetch['object'];

          if($obj1==$obj){ 
            $laa=mysqli_query($cc , "SELECT * FROM complaint where object='$obj' and name='$name1' and status='pending...'");
            $conrow=mysqli_num_rows($laa);
          }
          for($i=1;$i<=$conrow;$i++){
            $row=mysqli_fetch_Array($laa);
          ?>
          <tbody>
            <tr>
              <td><?php echo $row['object']; ?></td>
              <td><?php echo $row['subject'];?></td>
              <td><?php echo $row['complaint'];?></td>
              <td><?php echo $row['name'];?></td>
              <td> <a href="teacher-repliy.php?rep=<?php echo $row['complaint']; ?>">
              <button class="btn btn-info">Take Action</button></a></td>
            

            </tr>
          </tbody>
          <?php }   ?>
      
          <tfoot>
            <tr>
              <th>Object</th>
              <th>Subject</th> 
              <th>Complaint</th>
              <th>name</th>
              <th>Reply</th>
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
include 'header.php';
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

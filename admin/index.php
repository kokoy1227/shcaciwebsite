<?php
include 'conn.php';
include 'auth.php';

$a=1;

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php include"title.php"; ?>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
   <?php include"topbar.php"; ?>
   
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include"sidebar.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
			<a href="view-services.php" class="small-box-footer">
            <div class="small-box bg-cyan"
            style="/* From https://css.glass */
background: rgba(255, 255, 255, 0.07);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(6.1px);
-webkit-backdrop-filter: blur(6.1px);
border: 1px solid rgba(255, 255, 255, 0.09);"
            >
                <div class="icon" >
                <i class="ion ion-calendar" style="left: 20px; right: -15px;"></i>
              </div>
              <div class="inner">
                <h3 style="font-size:24px; text-align: right;">Total School Events</h3>
                <?php
include_once('conn.php');

$sql="SELECT count(id) FROM services";
$total_count1=0;

$result1=mysqli_query($con,$sql);
$row1=mysqli_fetch_assoc($result1);
$total_count1=$row1['count(id)'];

?>
                <h4 style="font-size:30px; text-align: right;"><?php echo $total_count1; ?></h4>
              </div>
             </div>
			</a>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
			<a href="view-blog.php" class="small-box-footer">
            <div class="small-box bg-green"
            style="/* From https://css.glass */
background: rgba(255, 255, 255, 0.07);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(6.1px);
-webkit-backdrop-filter: blur(6.1px);
border: 1px solid rgba(255, 255, 255, 0.09);"
            >
                <div class="icon" >
                <i class="ion ion-ios-paper" style="left: 20px; right: -15px;"></i>
              </div>
              <div class="inner">
                <h3 style="font-size:24px; text-align: right;">Total News & Updates</h3>
                <?php
include_once('conn.php');

$sql="SELECT count(id) FROM blog";
$total_count1=0;

$result1=mysqli_query($con,$sql);
$row1=mysqli_fetch_assoc($result1);
$total_count1=$row1['count(id)'];

?>
                <h4 style="font-size:30px; text-align: right;"><?php echo $total_count1; ?></h4>
              </div>
             </div>
			</a>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
			<a href="view-teams.php" class="small-box-footer">
            <div class="small-box bg-orange"
            style="/* From https://css.glass */
background: rgba(255, 255, 255, 0.07);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(6.1px);
-webkit-backdrop-filter: blur(6.1px);
border: 1px solid rgba(255, 255, 255, 0.09);"
            >
                <div class="icon" >
                <i class="ion ion-ios-people" style="left: 20px; right: -15px;"></i>
              </div>
              <div class="inner">
                <h3 style="font-size:24px; text-align: right;">Total Teachers/Staffs</h3>
                <?php
include_once('conn.php');

$sql="SELECT count(id) FROM teams";
$total_count1=0;

$result1=mysqli_query($con,$sql);
$row1=mysqli_fetch_assoc($result1);
$total_count1=$row1['count(id)'];

?>
                <h4 style="font-size:30px; text-align: right;"><?php echo $total_count1; ?></h4>
              </div>
             </div>
			</a>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
			<a href="view-gallery.php" class="small-box-footer">
            <div class="small-box bg-red"
            style="/* From https://css.glass */
background: rgba(255, 255, 255, 0.07);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(6.1px);
-webkit-backdrop-filter: blur(6.1px);
border: 1px solid rgba(255, 255, 255, 0.09);"
            >
                <div class="icon" >
                <i class="ion ion-ios-camera" style="left: 20px; right: -15px;"></i>
              </div>
              <div class="inner">
                <h3 style="font-size:24px; text-align: right;">Total Gallery Photos</h3>
                <?php
include_once('conn.php');

$sql="SELECT count(id) FROM images";
$total_count1=0;

$result1=mysqli_query($con,$sql);
$row1=mysqli_fetch_assoc($result1);
$total_count1=$row1['count(id)'];

?>
                <h4 style="font-size:30px; text-align: right;"><?php echo $total_count1; ?></h4>
              </div>
             </div>
			</a>
          </div>
        </div><!-- end row -->
        <div class="row mb-2">
          <div class="col-sm-6">
              <section class='calendar'>
  <h1>August 2015</h1>
  <form action='#'>
    <label class='weekday'>Mo</label>
    <label class='weekday'>Tu</label>
    <label class='weekday'>We</label>
    <label class='weekday'>Th</label>
    <label class='weekday'>Fr</label>
    <label class='weekday'>Sa</label>
    <label class='weekday'>Su</label>
    <label class='day invalid' data-day='0'>
      <input class='appointment' date-day='-4' placeholder='What would you like to do?' required='true' type='text'>
      <span>-4</span>
      <em></em>
    </label>
    <label class='day invalid' data-day='1'>
      <input class='appointment' date-day='-3' placeholder='What would you like to do?' required='true' type='text'>
      <span>-3</span>
      <em></em>
    </label>
    <label class='day invalid' data-day='2'>
      <input class='appointment' date-day='-2' placeholder='What would you like to do?' required='true' type='text'>
      <span>-2</span>
      <em></em>
    </label>
    <label class='day invalid' data-day='3'>
      <input class='appointment' date-day='-1' placeholder='What would you like to do?' required='true' type='text'>
      <span>-1</span>
      <em></em>
    </label>
    <label class='day invalid' data-day='4'>
      <input class='appointment' date-day='0' placeholder='What would you like to do?' required='true' type='text'>
      <span>0</span>
      <em></em>
    </label>
    <label class='day' data-day='5'>
      <input class='appointment' date-day='1' placeholder='What would you like to do?' required='true' type='text'>
      <span>1</span>
      <em></em>
    </label>
    <label class='day' data-day='6'>
      <input class='appointment' date-day='2' placeholder='What would you like to do?' required='true' type='text'>
      <span>2</span>
      <em></em>
    </label>
    <label class='day' data-day='7'>
      <input class='appointment' date-day='3' placeholder='What would you like to do?' required='true' type='text'>
      <span>3</span>
      <em></em>
    </label>
    <label class='day' data-day='8'>
      <input class='appointment' date-day='4' placeholder='What would you like to do?' required='true' type='text'>
      <span>4</span>
      <em></em>
    </label>
    <label class='day' data-day='9'>
      <input class='appointment' date-day='5' placeholder='What would you like to do?' required='true' type='text'>
      <span>5</span>
      <em></em>
    </label>
    <label class='day' data-day='10'>
      <input class='appointment' date-day='6' placeholder='What would you like to do?' required='true' type='text'>
      <span>6</span>
      <em></em>
    </label>
    <label class='day' data-day='11'>
      <input class='appointment' date-day='7' placeholder='What would you like to do?' required='true' type='text'>
      <span>7</span>
      <em></em>
    </label>
    <label class='day' data-day='12'>
      <input class='appointment' date-day='8' placeholder='What would you like to do?' required='true' type='text'>
      <span>8</span>
      <em></em>
    </label>
    <label class='day' data-day='13'>
      <input class='appointment' date-day='9' placeholder='What would you like to do?' required='true' type='text'>
      <span>9</span>
      <em></em>
    </label>
    <label class='day' data-day='14'>
      <input class='appointment' date-day='10' placeholder='What would you like to do?' required='true' type='text'>
      <span>10</span>
      <em></em>
    </label>
    <label class='day' data-day='15'>
      <input class='appointment' date-day='11' placeholder='What would you like to do?' required='true' type='text'>
      <span>11</span>
      <em></em>
    </label>
    <label class='day' data-day='16'>
      <input class='appointment' date-day='12' placeholder='What would you like to do?' required='true' type='text'>
      <span>12</span>
      <em></em>
    </label>
    <label class='day' data-day='17'>
      <input class='appointment' date-day='13' placeholder='What would you like to do?' required='true' type='text'>
      <span>13</span>
      <em></em>
    </label>
    <label class='day' data-day='18'>
      <input class='appointment' date-day='14' placeholder='What would you like to do?' required='true' type='text'>
      <span>14</span>
      <em></em>
    </label>
    <label class='day' data-day='19'>
      <input class='appointment' date-day='15' placeholder='What would you like to do?' required='true' type='text'>
      <span>15</span>
      <em></em>
    </label>
    <label class='day' data-day='20'>
      <input class='appointment' date-day='16' placeholder='What would you like to do?' required='true' type='text'>
      <span>16</span>
      <em></em>
    </label>
    <label class='day' data-day='21'>
      <input class='appointment' date-day='17' placeholder='What would you like to do?' required='true' type='text'>
      <span>17</span>
      <em></em>
    </label>
    <label class='day' data-day='22'>
      <input class='appointment' date-day='18' placeholder='What would you like to do?' required='true' type='text'>
      <span>18</span>
      <em></em>
    </label>
    <label class='day' data-day='23'>
      <input class='appointment' date-day='19' placeholder='What would you like to do?' required='true' type='text'>
      <span>19</span>
      <em></em>
    </label>
    <label class='day' data-day='24'>
      <input class='appointment' date-day='20' placeholder='What would you like to do?' required='true' type='text'>
      <span>20</span>
      <em></em>
    </label>
    <label class='day' data-day='25'>
      <input class='appointment' date-day='21' placeholder='What would you like to do?' required='true' type='text'>
      <span>21</span>
      <em></em>
    </label>
    <label class='day' data-day='26'>
      <input class='appointment' date-day='22' placeholder='What would you like to do?' required='true' type='text'>
      <span>22</span>
      <em></em>
    </label>
    <label class='day' data-day='27'>
      <input class='appointment' date-day='23' placeholder='What would you like to do?' required='true' type='text'>
      <span>23</span>
      <em></em>
    </label>
    <label class='day' data-day='28'>
      <input class='appointment' date-day='24' placeholder='What would you like to do?' required='true' type='text'>
      <span>24</span>
      <em></em>
    </label>
    <label class='day' data-day='29'>
      <input class='appointment' date-day='25' placeholder='What would you like to do?' required='true' type='text'>
      <span>25</span>
      <em></em>
    </label>
    <label class='day' data-day='30'>
      <input class='appointment' date-day='26' placeholder='What would you like to do?' required='true' type='text'>
      <span>26</span>
      <em></em>
    </label>
    <label class='day' data-day='31'>
      <input class='appointment' date-day='27' placeholder='What would you like to do?' required='true' type='text'>
      <span>27</span>
      <em></em>
    </label>
    <label class='day' data-day='32'>
      <input class='appointment' date-day='28' placeholder='What would you like to do?' required='true' type='text'>
      <span>28</span>
      <em></em>
    </label>
    <label class='day' data-day='33'>
      <input class='appointment' date-day='29' placeholder='What would you like to do?' required='true' type='text'>
      <span>29</span>
      <em></em>
    </label>
    <label class='day' data-day='34'>
      <input class='appointment' date-day='30' placeholder='What would you like to do?' required='true' type='text'>
      <span>30</span>
      <em></em>
    </label>
    <label class='day' data-day='35'>
      <input class='appointment' date-day='31' placeholder='What would you like to do?' required='true' type='text'>
      <span>31</span>
      <em></em>
    </label>
    <div class='clearfix'></div>
  </form>
</section>
          </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <?php include"footer.php"; ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>

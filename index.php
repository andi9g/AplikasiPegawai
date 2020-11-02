<?php
  error_reporting(0);
  $pages = $_GET['pages'];
  $aksi = $_GET['aksi'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Aplikasi Pegawai</title>

  
    
   <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

  
   <!-- Font Awesome -->
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="styleku.css?v=<?php echo random_int(1,1000)?>">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="dist/css/googleapis.css?v=<?php echo random_int(1,1000)?>">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed text-sm">

<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-primary">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">  
        <input style="font-weight: bold;" class="form-control form-control-navbar text-center text-white" type="text" value="ADMIN" aria-label="Search" disabled>
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <i class="fa fa-moon-o pt-2 px-2 text-white"></i>
      </li>
      <li class="nav-item dropdown">
            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                <form action="darklight.php" method="post" class="mt-1">
                    
                    <input type="checkbox" onClick="submit();" name="darklight" checked class="custom-control-input" id="tampilan" style="height:100px;" value="bayu"> 
                    <label class="custom-control-label" for="tampilan"></label>
                    
                </form>
            </div>
      </li>

      <li class="nav-item dropdown">
        <i class="fa fa-sun-o pt-2  text-white"></i>
      </li>

      <li class="nav-item">
        <a href="?pages=logout" class="text-warning"><i class="fa fa-power-off fa-lg mt-2 ml-3"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-primary elevation-4 blueku">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link text-dark ">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light judul"><b>Aplikasi Pegawai</b></span>
    </a>



    <!-- Sidebar -->
    <div class="sidebar sidebarku">
      <nav class="mt-2 mr-2 pr-1">
        <ul class="nav nav-flat nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          

          <li class="nav-header"><b>MENU APLIKASI</b><hr class="m-0 p-0"></li>     
          <li class="nav-item hoverku <?php if(!isset($pages)){?>activeku" <?php }else if($pages=='home'){ echo 'activeku' ;}?>id="home">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>

          <li class="nav-item hoverku <?php if($pages=='data_pegawai'){ echo 'activeku' ;}?>">
            <a href="index.php?pages=data_pegawai" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data Pegawai
              </p>
            </a>
          </li>


          <li class="nav-item hoverku">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Data Pegawai Cuti
              </p>
            </a>
          </li>

          <li class="nav-item hoverku">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                KP4
              </p>
            </a>
          </li>
        
          
          <li class=""><br class=""></li>
          <li class=""></li>
          <li class=""></li>
        </ul>
      </nav>    </div>
  </aside>

  
  <div class="content-wrapper bodyku">
    <!-- Content Header (Page header) -->
    <div class="container-fluid m-0 p-0">
      <section class="content-header">
        <div class="container-fluid">
          <div class="breadcrumbku">
          <nav aria-label="breadcrumb">
            
              <h3 class="mx-3 p-0 my-0" style="text-transform: capitalize;">
                <i class="fa fa-home"></i>
                  <?php 
                    if(isset($_GET['pages'])){
                      echo str_replace('_',' ',$pages);

                    }else {
                      echo 'Home';
                    }
                   ?>
              </h3>
              <hr class="my-0">
            
            <ol class="breadcrumb py-0 px-3 m-0 ">
              <?php 
                if(isset($_GET['pages'])){
                  if($pages == 'home'){
                    ?>
                    <li class="breadcrumb-item active">Home</li>
                  <?php
                  }else {
                  ?>
                    <li class="breadcrumb-item"><a href="index.php?pages=home">Home</a></li>
                    <li class="breadcrumb-item" style="text-transform: capitalize;"><a href="index.php?pages=<?php echo $pages?>">
                      <?php
                        echo str_replace('_',' ', $pages);
                      ?>
                    </a></li>
                  <?php
                  }
                }else {
                  ?>
                    <li class="breadcrumb-item active">Home</li>
                  <?php
                }
              ?>
            </ol>
         </nav>
         </div>
        </div><!-- /.container-fluid -->
      </section>


      <section class="content container-fluid">
        <?php
         
          if($pages == 'home') {
            if($aksi == ''){
              include('home.php');
            }
          }else if($pages == 'data_pegawai'){
            if($aksi == ''){
              include('dataPegawai.php');
            }
          }
          
          
          else {
            include('home.php');
          }
        ?>
        
      </section>

    </div>
  </div>


  
  
  <footer class="main-footer copyrightku">
    <strong>Copyright &copy; <?php echo date('Y')?> <a href="#">Aplikasi Pegawai</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>


<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>




<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>

<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script> -->
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- ChartJS -->




<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>



</body>
</html>


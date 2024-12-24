<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Empire Luxury | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/project/QuanTriVien/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="/project/QuanTriVien/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/project/QuanTriVien/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/project/QuanTriVien/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/project/QuanTriVien/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/project/QuanTriVien/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/project/QuanTriVien/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/project/QuanTriVien/plugins/summernote/summernote-bs4.min.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ZO3HlrlQFSPJptW58B6L7yjrHg3Qa2B7LsHhlP3U5w6d1ED29D1fmn1qd4mVq7Bl" crossorigin="anonymous">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<?php require_once("header.php") ?>
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="" src="" alt="Admin" height="60" width="60">
  </div>
    
    <?php require_once("menu.php") ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Thống Kê Empire Luxury</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/project/QuanTriVien/MVC/Views/login/login.php">Log_Out</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
            <div class="card-body">
                <div class="table-reponsive">
                <?php
                if (isset($_SESSION['login_admin']) && $_SESSION['login_admin'] == true) {
                  $url = isset($_GET['url']) ? $_GET['url'] : "login";
                  $operation = isset($_GET['operation']) ? $_GET['operation'] : "admin";
                  switch ($url) {
                    case 'khuyenmai':
                      switch ($operation) {
                        case 'list':
                          require_once __DIR__ . '/../khuyenmai/list.php';
                          break;
                        case 'add':
                          require_once __DIR__ . '/../khuyenmai/add.php';
                          break;
                        case 'edit':
                          require_once __DIR__ . '/../khuyenmai/edit.php';
                          break;
                        default:
                          require_once __DIR__ . '/../khuyenmai/list.php';
                          break;
                      }
                      break;
                    case 'banner':
                      switch ($operation) {
                        case 'list':
                          require_once __DIR__ . '/../banner/list.php';
                          break;
                        case 'add':
                          require_once __DIR__ . '/../banner/add.php';
                          break;
                        case 'edit':
                          require_once __DIR__ . '/../banner/edit.php';
                          break;
                        default:
                          require_once __DIR__ . '/../banner/list.php';
                          break;
                      }
                      break;
                    case 'nguoidung':
                      switch ($operation) {
                        case 'list':
                          require_once __DIR__ . '/../nguoidung/list.php';
                          break;
                        case 'add':
                          require_once __DIR__ . '/../nguoidung/add.php';
                          break;
                        case 'edit':
                          require_once __DIR__ . '/../nguoidung/edit.php';
                          break;
                        default:
                          require_once __DIR__ . '/../nguoidung/list.php';
                          break;
                      }
                      break;
                    case 'binhluan':
                      switch ($operation) {
                        case 'list':
                          require_once __DIR__ . '/../binhluan/list.php';
                          break;
                        default:
                          require_once __DIR__ . '/../binhluan/list.php';
                          break;
                      }
                    case 'sanpham':
                      switch ($operation) {
                        case 'list':
                          require_once __DIR__ . '/../sanpham/list.php';
                          break;
                        case 'add':
                          require_once __DIR__ . '/../sanpham/add.php';
                          break;
                        case 'edit':
                          require_once __DIR__ . '/../sanpham/edit.php';
                          break;
                        default:
                          require_once __DIR__ . '/../sanpham/list.php';
                          break;
                      }
                      break;
                    case 'loaisanpham':
                      switch ($operation) {
                        case 'list':
                          require_once __DIR__ . '/../loaisanpham/list.php';
                          break;
                        case 'add':
                          require_once __DIR__ . '/../loaisanpham/add.php';
                          break;
                        case 'edit':
                          require_once __DIR__ . '/../loaisanpham/edit.php';
                          break;
                        default:
                          require_once __DIR__ . '/../loaisanpham/list.php';
                          break;
                      }
                      break;
                    case 'danhmuc':
                      switch ($operation) {
                        case 'list':
                          require_once __DIR__ . '/../danhmuc/list.php';
                          break;
                        case 'add':
                          require_once __DIR__ . '/../danhmuc/add.php';
                          break;
                        case 'edit':
                          require_once __DIR__ . '/../danhmuc/edit.php';
                          break;
                        default:
                          require_once __DIR__ . '/../danhmuc/list.php';
                          break;
                      }
                      break;
                    case 'login':
                      switch ($operation) {
                        case 'admin':
                         require_once __DIR__ . '/../login/admin.php';
                          break;
                        default:
                        require_once __DIR__ . '/../login/admin.php';
                          break;
                      }
                      break;
                    case 'hoadon':
                      switch ($operation) {
                        case 'list':
                          require_once __DIR__ . '/../hoadon/list.php';
                          break;
                        case 'chitiet':
                          require_once __DIR__ . '/../hoadon/detail.php';
                          break;
                        default:
                        require_once __DIR__ . '/../hoadon/list.php';
                          break;
                      }
                      break;
                  }
                } else {
                  if (isset($_SESSION['login_nhanvien']) && $_SESSION['login_nhanvien'] == true) {
                    $url = isset($_GET['url']) ? $_GET['url'] : "login";
                    $operation = isset($_GET['operation']) ? $_GET['operation'] : "admin";
                    switch ($url) {
                      case 'hoadon':
                        switch ($operation) {
                          case 'list':
                            require_once __DIR__ . '/../hoadon/list.php';
                            break;
                          case 'chitiet':
                            require_once __DIR__ . '/../hoadon/detail.php';
                            break;
                          default:
                          require_once __DIR__ . '/../hoadon/list.php';
                            break;
                        }
                        break;
                      case 'loaisanpham':
                        switch ($operation) {
                          case 'list':
                            require_once __DIR__ . '/../loaisanpham/list.php';
                            break;
                          default:
                          require_once __DIR__ . '/../loaisanpham/list.php';
                            break;
                        }
                        break;
                      case 'danhmuc':
                        switch ($operation) {
                          case 'list':
                            require_once __DIR__ . '/../danhmuc/list.php';
                            break;
                          default:
                          require_once __DIR__ . '/../danhmuc/list.php';
                            break;
                        }
                        break;
                      case 'sanpham':
                        switch ($operation) {
                          case 'list':
                            require_once __DIR__ . '/../sanpham/list.php';
                            break;
                          default:
                          require_once __DIR__ . '/../sanpham/list.php';
                            break;
                        }
                        break;
                      case 'khuyenmai':
                        switch ($operation) {
                          case 'list':
                            require_once __DIR__ . '/../khuyenmai/list.php';
                            break;
                          default:
                          require_once __DIR__ . '/../khuyenmai/list.php';
                            break;
                        }
                        break;
                    }
                  }
                }
                ?>
                </div>
            </div>

        <!-- /.row -->
        <!-- Main row -->
    <?php require_once("footer.php") ?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/project/QuanTriVien/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/project/QuanTriVien/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/project/QuanTriVien/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/project/QuanTriVien/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/project/QuanTriVien/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/project/QuanTriVien/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/project/QuanTriVien/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/project/QuanTriVien/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/project/QuanTriVien/plugins/moment/moment.min.js"></script>
<script src="/project/QuanTriVien/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/project/QuanTriVien/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/project/QuanTriVien/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/project/QuanTriVien/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/project/QuanTriVien/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/project/QuanTriVien/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/project/QuanTriVien/dist/js/pages/dashboard.js"></script>
<!-- Optional JavaScript Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3//project/QuanTriVien/dist/js/bootstrap.bundle.min.js" integrity="sha384-wQUt8dHgfwxOlPIprzn7ljsL9JtKoWCFQywxslMZ13eHhJxXYlgL42YBWh8KNICy" crossorigin="anonymous"></script>
</body>
</html>

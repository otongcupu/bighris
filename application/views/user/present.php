<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/summernote/summernote-bs4.min.css">
    <!-- icon bar -->
    <link rel="shortcut icon" href="<?= base_url('assets/'); ?>dist/img/logo.png" type="image/x-icon">
    <!-- Data Table -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
</head>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?= base_url('assets/'); ?>dist/img/Logo.png" alt="PT BIG Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">HRIS PT BIG</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('assets/'); ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $user['userid']; ?></a>
            </div>
        </div>


        <!-- QUERY MENU -->

        <?php
        $roleid = $this->session->userdata('roleid');
        $queryMenu = "SELECT `menu`.`idx`, `menu`
                        FROM `menu` JOIN `access_menu`
                          ON `menu`.`idx` = `access_menu`.`menuid`
                       WHERE `access_menu`.`roleid` = $roleid
                    ORDER BY `access_menu`.`menuid` ASC";
        $menu = $this->db->query($queryMenu)->result_array();

        ?>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <!-- LOOPING MENU -->
                <?php foreach ($menu as $m) : ?>
                    <li class="nav-header"><?= $m['menu']; ?></li>

                    <!-- SIAPKAN SUB-MENU SESUAI MENU -->
                    <?php
                    $menuid = $m['idx'];
                    $querySubMenu = "SELECT * FROM `sub_menu`
                                      WHERE `menuid` = $menuid
                                        AND `flag` = 1";
                    $subMenu = $this->db->query($querySubMenu)->result_array();
                    ?>

                    <?php foreach ($subMenu as $sm) : ?>
                        <li class="nav-item">
                            <a href="<?= base_url($sm['url']); ?>" class="nav-link">
                                <i class="<?= $sm['icon']; ?>"></i>
                                <p>
                                    <?= $sm['title']; ?>
                                </p>
                            </a>
                        </li>
                    <?php endforeach; ?>

                <?php endforeach; ?>


                <li class="nav-item">
                    <a href="<?= base_url('auth/logout'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> 8 friend requests
                    <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> 3 new reports
                    <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<body class="hold-transition sidebar-mini layout-fixed">
    <?php
    date_default_timezone_set("Asia/Jakarta");
    ?>
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?= $title; ?></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-auto">
                            <p>
                            <h4><?= date('l, d M Y') ?></h4>
                            </p>
                            <div class="col col-2">
                                <p>
                                <h4><span id="jam" style="font-size: 24;"></span></h4>
                                </p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="webcame-capture-body">
                            <span class="latitute d-none" id="latitute"></span>
                            <div class="webcam-capture"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; <?= date('Y'); ?> <a href="">PT BERHASIL INDONESIA GEMILANG</a>.</strong>
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url('assets/'); ?>plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url('assets/'); ?>plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('assets/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= base_url('assets/'); ?>plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?= base_url('assets/'); ?>plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?= base_url('assets/'); ?>plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= base_url('assets/'); ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= base_url('assets/'); ?>plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?= base_url('assets/'); ?>plugins/moment/moment.min.js"></script>
    <script src="<?= base_url('assets/'); ?>plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= base_url('assets/'); ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?= base_url('assets/'); ?>plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url('assets/'); ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/'); ?>dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!--<script src="<?= base_url('assets/'); ?>dist/js/pages/dashboard.js"></script>-->
    <!-- Webcam -->
    <script src="<?= base_url('assets/'); ?>dist\js\webcamjs\webcam.min.js"></script>
    <!-- Data Table & Plugins -->
    <script src="<?= base_url('assets/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/'); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('assets/'); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/'); ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('assets/'); ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>

    <script type="text/javascript">
        window.onload = function() {
            jam();
        }

        function jam() {
            var e = document.getElementById('jam'),
                d = new Date(),
                h, m, s;
            h = set(d.getHours());
            m = set(d.getMinutes());
            s = set(d.getSeconds());

            e.innerHTML = h + ':' + m + ':' + s;
            setTimeout('jam()', 1000);
        }

        function set(e) {
            e = e < 10 ? '0' + e : e;
            return e;
        }
    </script>
    <script type="text/javascript">
        var result;
        $(document).ready(function getLocation() {
            result = document.getElementById("latitude");
            // 
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
            } else {
                swal({
                    title: 'Oops!',
                    text: 'Maaf, browser Anda tidak mendukung geolokasi HTML5.',
                    icon: 'error',
                    timer: 3000,
                });
            }
        });

        // Define callback function for successful attempt
        function successCallback(position) {
            result.innerHTML = "" + position.coords.latitude + "," + position.coords.longitude + "";
        }

        // Define callback function for failed attempt
        function errorCallback(error) {
            if (error.code == 1) {
                swal({
                    title: 'Oops!',
                    text: 'Anda telah memutuskan untuk tidak membagikan posisi Anda, tetapi tidak apa-apa. Kami tidak akan meminta Anda lagi.',
                    icon: 'error',
                    timer: 3000,
                });
            } else if (error.code == 2) {
                swal({
                    title: 'Oops!',
                    text: 'Jaringan tidak aktif atau layanan penentuan posisi tidak dapat dijangkau.',
                    icon: 'error',
                    timer: 3000,
                });
            } else if (error.code == 3) {
                swal({
                    title: 'Oops!',
                    text: 'Waktu percobaan habis sebelum bisa mendapatkan data lokasi.',
                    icon: 'error',
                    timer: 3000,
                });
            } else {
                swal({
                    title: 'Oops!',
                    text: 'Waktu percobaan habis sebelum bisa mendapatkan data lokasi.',
                    icon: 'error',
                    timer: 3000,
                });
            }
        }

        // start webcame
        Webcam.set({
            width: 590,
            height: 460,
            image_format: 'jpeg',
            jpeg_quality: 80,
        });

        var cameras = new Array(); //create empty array to later insert available devices
        navigator.mediaDevices.enumerateDevices() // get the available devices found in the machine
            .then(function(devices) {
                devices.forEach(function(device) {
                    var i = 0;
                    if (device.kind === "videoinput") { //filter video devices only
                        cameras[i] = device.deviceId; // save the camera id's in the camera array
                        i++;
                    }
                });
            })

        Webcam.set('constraints', {
            width: 590,
            height: 460,
            image_format: 'jpeg',
            jpeg_quality: 80,
            sourceId: cameras[0]
        });

        Webcam.attach('.webcam-capture');
        // preload shutter audio clip
        var shutter = new Audio();
        //shutter.autoplay = true;
        shutter.src = navigator.userAgent.match(/Firefox/) ? './assets/dist/js/webcamjs/shutter.ogg' : './assets/dist/js/webcamjs/shutter.mp3';

        function captureimage() {
            var latitude = $('.latitude').html();
            // play sound effect
            shutter.play();
            // take snapshot and get image data
            Webcam.snap(function(data_uri) {
                // display results in page
                Webcam.upload(data_uri, './sw-proses?action=present&latitude=' + latitude + '', function(code, text) {
                    $data = '' + text + '';
                    var results = $data.split("/");
                    $results = results[0];
                    $results2 = results[1];
                    if ($results == 'success') {
                        swal({
                            title: 'Berhasil!',
                            text: $results2,
                            icon: 'success',
                            timer: 3500,
                        });
                        setTimeout("location.href = './';", 3600);
                    } else {
                        swal({
                            title: 'Oops!',
                            text: text,
                            icon: 'error',
                            timer: 3500,
                        });
                    }
                });
            });
        }
    </script>
</body>

</html>
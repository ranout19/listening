
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Admin | Listening</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
        <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="plugins/icon-kit/dist/css/iconkit.min.css">
        <link rel="stylesheet" href="plugins/ionicons/dist/css/ionicons.min.css">
        <link rel="stylesheet" href="plugins/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap.css">
        <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">
        <link rel="stylesheet" href="plugins/weather-icons/css/weather-icons.min.css">
        <link rel="stylesheet" href="plugins/c3/c3.min.css">
        <link rel="stylesheet" href="plugins/owl.carousel/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="plugins/owl.carousel/dist/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="dist/css/theme.min.css">
        <script src="plugins/sweetalert2/dist/sweetalert2.all.min.js"></script>
        <script src="src/js/vendor/modernizr-2.8.3.min.js"></script>
        <style type="text/css">
            @font-face{
                font-family: semua;
                src:url(lib/Montserrat-Regular.ttf);
            }
            *{
                font-family: semua;
            }
        </style>

        <?php 
            session_start();
            if (!$_SESSION['username']) {
                ?>
                <script>
                    Swal.fire({
                      type: 'warning',
                      title: 'Gagal',
                      text: 'Harap login dulu!',
                      showConfirmButton: false,
                      timer: 2000
                    }).then(()=>{
                        location.href='page/login.php'
                    });
                </script>
                <?php
            }
        ?>
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="wrapper">
            <header class="header-top" header-theme="light">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between">
                        <div class="top-menu d-flex align-items-center">
                            <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                            <div class="header-search">
                                <div class="input-group">
                                    <span class="input-group-addon search-close"><i class="ik ik-x"></i></span>
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon search-btn"><i class="ik ik-search"></i></span>
                                </div>
                            </div>
                            <button type="button" id="navbar-fullscreen" class="nav-link"><i class="ik ik-maximize"></i></button>
                        </div>
                        <div class="top-menu d-flex align-items-center">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="avatar" src="img/user.jpg" alt=""></a>
                            </div>

                        </div>
                    </div>
                </div>
            </header>

            <div class="page-wrap">
                <div class="app-sidebar colored">
                    <div class="sidebar-header">
                        <a class="header-brand" href="../template.html">
                            <div class="logo-img">
                               <img src="src/img/brand-white.svg" class="header-brand-img" alt="lavalite"> 
                            </div>
                        </a>
                        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
                        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                    </div>
                    
                    <div class="sidebar-content">
                        <div class="nav-container">
                            <nav id="main-menu-navigation" class="navigation-main">
                                <?php 
                                    $menuvar= '';
                                    if (isset($_GET['page']) && $_GET['page'] != '') {
                                        $menuvar=$_GET['page'];
                                    }
                                 ?>
                                <div class="nav-lavel">Umum</div>
                                <div class="nav-item <?php print $class=('' == $menuvar)? 'active' : ''; ?>">
                                    <a href="?page="><i class="ik ik-bar-chart-2 text-green"></i><span>Dashboard</span></a>
                                </div>
                                <div class="nav-item has-sub <?php print $class=('soal' == $menuvar)||('soalaktif' == $menuvar)? 'active' : ''; ?>">
                                    <a href="#"><i class="ik ik-book text-blue"></i><span>Soal</span></a>
                                    <div class="submenu-content">
                                        <a href="?page=soal" class="menu-item <?php print $class=('soal' == $menuvar)? 'active' : ''; ?>">Semua Soal</a>
                                        <a href="?page=soalaktif" class="menu-item <?php print $class=('soalaktif' == $menuvar)? 'active' : ''; ?>">Soal Aktif</a>
                                    </div>
                                </div>
                                <div class="nav-item <?php print $class=('kelas' == $menuvar)? 'active' : ''; ?>">
                                    <a href="?page=kelas"><i class="ik ik-home text-yellow"></i><span>Kelas</span></a>
                                </div>
                                <div class="nav-item <?php print $class=('bahasa' == $menuvar)? 'active' : ''; ?>">
                                    <a href="?page=bahasa"><i class="ik ik-mic text-pink"></i><span>Bahasa</span></a>
                                </div>
                                <div class="nav-lavel">Operator</div>
                                <div class="nav-item <?php print $class=('admin' == $menuvar)? 'active' : ''; ?>">
                                    <a href="?page=admin"><i class="ik ik-user text-aqua"></i><span>Admin</span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="?page=logout" onclick="return confirm('Anda yakin ingin keluar?')"><i class="ik ik-power text-danger"></i><span>Logout</span></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="main-content">
                    <div class="container-fluid">
                        <?php
                        error_reporting(0);
                        include 'lib/koneksi.php';
                        $page = $_GET['page'];
                        $aksi = $_GET['aksi'];

                        if($page == "bahasa") {
                            if($aksi =="") {
                                include 'page/bahasa/bahasa.php';
                            } if($aksi =="hapus") {
                                include 'page/bahasa/hapus.php';
                            }if($aksi =="edit") {
                                include 'page/bahasa/edit.php';
                            }
                        } elseif ($page == "kelas") {
                            if($aksi =="") {
                                include 'page/kelas/kelas.php';
                            } if($aksi =="hapus") {
                               include 'page/kelas/hapus.php';
                            } if($aksi =="edit") {
                               include 'page/kelas/edit.php';
                            }
                        }elseif ($page == "admin") {
                            if($aksi =="") {
                                include 'page/admin/admin.php';
                            } if($aksi =="hapus") {
                               include 'page/admin/hapus.php';
                            } if($aksi =="edit") {
                               include 'page/admin/edit.php';
                            }
                        }elseif ($page == "") {
                            if($aksi =="") {
                                include 'page/dashboard.php';
                            }
                        }elseif ($page == "soal") {
                            if($aksi =="") {
                                include 'page/soal/soal.php';
                            } if($aksi =="hapus") {
                               include 'page/soal/hapus.php';
                            } if($aksi =="edit") {
                               include 'page/soal/edit.php';
                            } if($aksi =="tambah") {
                               include 'page/soal/tambah.php';
                            }
                        }elseif ($page == "soalaktif") {
                            if($aksi =="") {
                                include 'page/soalaktif/soalaktif.php';
                            }if ($aksi=="aktif") {
                                include 'page/soalaktif/aktif.php';
                            }if ($aksi=="nonaktif") {
                                include 'page/soalaktif/nonaktif.php';
                            }
                        }elseif ($page == "logout") {
                            if($aksi =="") {
                                include 'page/logout.php';
                            }
                        }                      
                     ?>
                    </div>
                </div>

                <footer class="footer">
                    <div class="w-100 clearfix">
                        <span class="text-center text-sm-left d-md-inline-block">Copyright © 2019.</span>
                    </div>
                </footer>
                
            </div>
        </div>
        

        <div class="modal fade apps-modal" id="appsModal" tabindex="-1" role="dialog" aria-labelledby="appsModalLabel" aria-hidden="true" data-backdrop="false">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ik ik-x-circle"></i></button>
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="quick-search">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 ml-auto mr-auto">
                                    <div class="input-wrap">
                                        <input type="text" id="quick-search" class="form-control" placeholder="Search..." />
                                        <i class="ik ik-search"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="container">
                            <div class="apps-wrap">
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-mail"></i><span>Message</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-users"></i><span>Accounts</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-shopping-cart"></i><span>Sales</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-briefcase"></i><span>Purchase</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-server"></i><span>Menus</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-clipboard"></i><span>Pages</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-message-square"></i><span>Chats</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-map-pin"></i><span>Contacts</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-box"></i><span>Blocks</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-calendar"></i><span>Events</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-bell"></i><span>Notifications</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-pie-chart"></i><span>Reports</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-layers"></i><span>Tasks</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-edit"></i><span>Blogs</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-settings"></i><span>Settings</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-more-horizontal"></i><span>More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
        <script src="plugins/popper.js/dist/umd/popper.min.js"></script>
        <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="plugins/screenfull/dist/screenfull.js"></script>
        <script src="plugins/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="plugins/jvectormap/jquery-jvectormap.min.js"></script>
        <script src="plugins/moment/moment.js"></script>
        <script src="plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="plugins/d3/dist/d3.min.js"></script>
        <script src="plugins/c3/c3.min.js"></script>

<!--         <script src="js/tables.js"></script> -->
        <script src="js/datatables.js"></script>
        <script src="js/widgets.js"></script>
        <script src="js/charts.js"></script>
        <script src="js/form-components.js"></script>
        <script src="dist/js/theme.min.js"></script>
        <script src="plugins/ckeditor/ckeditor.js"></script>
        <script type="text/javascript">
             CKEDITOR.replace('ckeditor');
             CKEDITOR.replace('ckeditor2');
        </script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>

            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>

<!DOCTYPE tml>
<html lang="en">

<head>
    <?= csrf_meta(); ?>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="Aplikasi Pembayaran SPP Terpadu Berbasis Framework CodeIgniter 4">
    <meta name="author" content="Qori Chairawan">
    <meta name="keywords" content="Aplikasi Pembayaran SPP Terpadu Berbasis Framework CodeIgniter 4">

    <!-- Favicon -->
    <link rel="icon" href="<?= site_url('image/education.png') ?>" type="image/png" />

    <!-- Title -->
    <title><?= $this->renderSection('title'); ?></title>

    <!-- Bootstrap css-->
    <link id="style" href="<?= site_url('assets/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" />

    <!-- Icons css-->
    <link href="<?= site_url('assets/plugins/web-fonts/icons.css'); ?>" rel="stylesheet" />
    <link href="<?= site_url('assets/plugins/web-fonts/font-awesome/font-awesome.min.css'); ?>" rel="stylesheet">
    <link href="<?= site_url('assets/plugins/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet">
    <link href="<?= site_url('assets/plugins/web-fonts/plugin.css'); ?>" rel="stylesheet" />

    <!-- DATA TABLE CSS -->
    <link href="<?= site_url('assets/plugins/datatable/css/dataTables.bootstrap5.css'); ?>" rel="stylesheet" />
    <link href="<?= site_url('assets/plugins/datatable/css/buttons.bootstrap5.min.css'); ?>" rel="stylesheet">
    <link href="<?= site_url('assets/plugins/datatable/css/responsive.bootstrap5.css'); ?>" rel="stylesheet" />

    <!-- Style css-->
    <link href="<?= site_url('assets/css/style.css'); ?>" rel="stylesheet">
    <link href="<?= site_url('assets/css/modify.css'); ?>" rel="stylesheet">
    <link href="<?= site_url('assets/css/modify.css'); ?>" rel="stylesheet">

    <!--Bootstrap-datepicker css-->
    <link rel="stylesheet" href="<?= site_url('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.css'); ?>">

    <!-- Select2 css -->
    <link href="<?= site_url('assets/plugins/select2/css/select2.min.css'); ?>" rel="stylesheet">
    <!-- Internal Sweet-Alert css-->
    <link href="<?= site_url('assets/plugins/sweet-alert/sweetalert.css'); ?>" rel="stylesheet">

</head>

<body class="ltr main-body leftmenu">

    <!-- Loader -->
    <div id="global-loader">
        <img src="<?= site_url('assets/img/loader.svg'); ?>" class="loader-img" alt="Loader">
    </div>
    <!-- End Loader -->

    <!-- Page -->
    <div class="page">

        <!-- Main Header-->
        <div class="main-header side-header sticky">
            <div class="main-container container-fluid">
                <div class="main-header-left">
                    <a class="main-header-menu-icon" href="javascript:void(0)" id="mainSidebarToggle"><span></span></a>
                    <div class="hor-logo">
                        <a class="main-logo" href="<?= site_url('dashboard'); ?>">
                            <div class="logo-text">SPP Terpadu</div>
                        </a>
                    </div>
                </div>
                <div class="main-header-center">
                    <div class="responsive-logo">
                        <div class="logo-text-mobile">SPP Terpadu</div>
                    </div>

                </div>
                <div class="main-header-right">
                    <button class="navbar-toggler navresponsive-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
                    </button><!-- Navresponsive closed -->
                    <div class="navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark  ">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                            <div class="d-flex order-lg-2 ms-auto">

                                <!-- Theme-Layout -->
                                <div class="dropdown d-flex main-header-theme">
                                    <a class="nav-link icon layout-setting">
                                        <span class="dark-layout">
                                            <i class="fe fe-sun header-icons"></i>
                                        </span>
                                        <span class="light-layout">
                                            <i class="fe fe-moon header-icons"></i>
                                        </span>
                                    </a>
                                </div>
                                <!-- Theme-Layout -->

                                <!-- Full screen -->
                                <div class="dropdown ">
                                    <a class="nav-link icon full-screen-link">
                                        <i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
                                        <i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
                                    </a>
                                </div>
                                <!-- Full screen -->
                                <!-- Notification -->
                                <div class="dropdown main-header-notification">
                                    <a class="nav-link icon" href="">
                                        <i class="fe fe-bell header-icons"></i>
                                        <span class="badge bg-danger nav-link-badge">4</span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="header-navheading">
                                            <p class="main-notification-text">You have 1 unread notification<span class="badge bg-pill bg-primary ms-3">View all</span></p>
                                        </div>
                                        <div class="main-notification-list">
                                            <div class="media new">
                                                <div class="main-img-user online"><img alt="avatar" src="<?= site_url('assets/img/users/5.jpg'); ?>"></div>
                                                <div class="media-body">
                                                    <p>Congratulate <strong>Olivia James</strong> for New template
                                                        start</p>
                                                    <span>Oct 15 12:32pm</span>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="main-img-user"><img alt="avatar" src="<?= site_url('assets/img/users/2.jpg'); ?>">
                                                </div>
                                                <div class="media-body">
                                                    <p><strong>Joshua Gray</strong> New Message Received</p>
                                                    <span>Oct 13
                                                        02:56am</span>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="main-img-user online"><img alt="avatar" src="<?= site_url('assets/img/users/3.jpg'); ?>"></div>
                                                <div class="media-body">
                                                    <p><strong>Elizabeth Lewis</strong> added new schedule realease
                                                    </p><span>Oct
                                                        12 10:40pm</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown-footer">
                                            <a href="javascript:void(0)">View All Notifications</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Notification -->
                                <!-- Profile -->
                                <div class="dropdown main-profile-menu">
                                    <a class="d-flex" href="javascript:void(0)">
                                        <span class="main-img-user"><img alt="avatar" src="<?= site_url('assets/img/users/1.jpg'); ?>"></span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="header-navheading">
                                            <h6 class="main-notification-title"><?= $session->get('Status'); ?></h6>
                                            <p class="main-notification-text"><?= $session->get('NamaLengkap'); ?></p>
                                        </div>
                                        <a class="dropdown-item border-top" href="profile.html">
                                            <i class="fe fe-user"></i> Profil Saya
                                        </a>
                                        <a class="dropdown-item" href="profile.html">
                                            <i class="fe fe-settings"></i> Pengaturan Akun
                                        </a>
                                        <a class="dropdown-item" href="profile.html">
                                            <i class="fe fe-settings"></i> Konfigurasi Aplikasi
                                        </a>
                                        <a class="dropdown-item" href="profile.html">
                                            <i class="fe fe-compass"></i> Aktivitas Aplikasi
                                        </a>
                                        <a class="dropdown-item" href="<?= site_url('autentifikasi/logout/') . $session->get('LogStatus'); ?>">
                                            <i class="fe fe-power"></i> Logout
                                        </a>
                                    </div>
                                </div>
                                <!-- Profile -->
                                <!-- Sidebar -->
                                <div class="dropdown  header-settings">
                                    <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="sidebar-right" data-bs-target=".sidebar-right">
                                        <i class="fe fe-align-right header-icons"></i>
                                    </a>
                                </div>
                                <!-- Sidebar -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Header-->

        <!-- Sidemenu -->
        <div class="sticky">
            <div class="main-menu main-sidebar main-sidebar-sticky side-menu">
                <div class="main-sidebar-header main-container-1 active">
                    <div class="sidemenu-logo">
                        <a class="main-logo" href="<?= site_url('dashboard'); ?>">
                            <div class="logo-text">SPP Terpadu Ver. 01</div>
                        </a>
                    </div>
                    <div class="main-sidebar-body main-body-1">
                        <div class="slide-left disabled" id="slide-left"><i class="fe fe-chevron-left"></i></div>
                        <ul class="menu-nav nav">
                            <li class="nav-header"><span class="nav-label">Dashboard</span></li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= site_url('dashboard'); ?>">
                                    <span class="shape1"></span>
                                    <span class="shape2"></span>
                                    <i class="ti-home sidemenu-icon menu-icon "></i>
                                    <span class="sidemenu-label">Beranda</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link with-sub" href="javascript:void(0)">
                                    <span class="shape1"></span>
                                    <span class="shape2"></span>
                                    <i class="ti-layers sidemenu-icon menu-icon "></i>
                                    <span class="sidemenu-label">Master Pembayaran</span>
                                    <i class="angle fe fe-chevron-right"></i>
                                </a>
                                <ul class="nav-sub">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">SPP</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="javascript:void(0)">Pembayaran SPP</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="javascript:void(0)">Pembayaran Lainnya</a></li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link sub-with-sub" href="javascript:void(0)">
                                            <span class="sidemenu-label">Pengaturan</span>
                                            <i class="angle fe fe-chevron-right"></i>
                                        </a>
                                        <ul class="sub-nav-sub">
                                            <li class="nav-sub-item"><a class="nav-sub-link" href="javascript:void(0)">Denda</a></li>
                                            <li class="nav-sub-item"><a class="nav-sub-link" href="javascript:void(0)">Kode Pembayaran</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link with-sub" href="javascript:void(0)">
                                    <span class="shape1"></span>
                                    <span class="shape2"></span>
                                    <i class="ti-package sidemenu-icon menu-icon "></i>
                                    <span class="sidemenu-label">Master Siswa</span>
                                    <i class="angle fe fe-chevron-right"></i>
                                </a>
                                <ul class="nav-sub">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Siswa</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="<?= site_url('siswa/data_siswa'); ?>">Siswa</a></li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link sub-with-sub" href="javascript:void(0)">
                                            <span class="sidemenu-label">Pengaturan</span>
                                            <i class="angle fe fe-chevron-right"></i>
                                        </a>
                                        <ul class="sub-nav-sub">
                                            <li class="nav-sub-item"><a class="nav-sub-link" href="<?= site_url('siswa/data_kelas'); ?>">Kelas</a></li>
                                            <li class="nav-sub-item"><a class="nav-sub-link" href="<?= site_url('siswa/data_jurusan'); ?>">Jurusan</a></li>
                                            <li class="nav-sub-item"><a class="nav-sub-link" href="<?= site_url('siswa/data_tahun_ajaran'); ?>">Tahun Ajaran</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link with-sub" href="javascript:void(0)">
                                    <span class="shape1"></span>
                                    <span class="shape2"></span>
                                    <i class="ti-user sidemenu-icon menu-icon "></i>
                                    <span class="sidemenu-label">Master Pengguna</span>
                                    <i class="angle fe fe-chevron-right"></i>
                                </a>
                                <ul class="nav-sub">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Akun</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="<?= site_url('pengguna/akun_siswa'); ?>">Akun Siswa</a></li>
                                    <li class="nav-sub-item"><a class="nav-sub-link" href="<?= site_url('pengguna/akun_administrator'); ?>">Akun Administrator</a></li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link sub-with-sub" href="javascript:void(0)">
                                            <span class="sidemenu-label">Logs Aktivitas</span>
                                            <i class="angle fe fe-chevron-right"></i>
                                        </a>
                                        <ul class="sub-nav-sub">
                                            <li class="nav-sub-item"><a class="nav-sub-link" href="<?= site_url('logs/siswa'); ?>">Siswa</a></li>
                                            <li class="nav-sub-item"><a class="nav-sub-link" href="<?= site_url('logs/admin'); ?>">Administrator</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-header"><span class="nav-label">Pengaturan</span></li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= site_url('aplikasi/konfigurasi'); ?>">
                                    <span class="shape1"></span>
                                    <span class="shape2"></span>
                                    <i class="ti-settings sidemenu-icon menu-icon "></i>
                                    <span class="sidemenu-label">Aplikasi</span>
                                </a>
                            </li>
                        </ul>
                        <div class="slide-right" id="slide-right"><i class="fe fe-chevron-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Sidemenu -->

        <!-- Main Content-->
        <div class="main-content side-content pt-0">
            <div class="main-container container-fluid">
                <div class="inner-body">
                    <!-- Konten Website SPP Terpadu -->
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <?= session()->getFlashdata('pesan'); ?>
                    <?php endif; ?>
                    <?= $this->renderSection('content'); ?>
                    <!-- End Konten Website -->
                </div>
            </div>
        </div>
        <!-- End Main Content-->

        <!-- Main Footer-->
        <div class="main-footer text-center">
            <div class="container">
                <div class="row row-sm">
                    <div class="col-md-12">
                        <span>Copyright © 2022 <a href="#">Aplikasi Pembayaran SPP Terpadu</a>. Develop by <a href="https://web.facebook.com/qoryy17/">Qori Chairawan</a> All rights reserved.</span>
                    </div>
                </div>
            </div>
        </div>
        <!--End Footer-->

        <!-- Sidebar -->
        <div class="sidebar sidebar-right sidebar-animate">
            <div class="sidebar-icon">
                <a href="#" class="text-end float-end text-dark fs-20" data-bs-toggle="sidebar-right" data-bs-target=".sidebar-right"><i class="fe fe-x"></i></a>
            </div>
            <div class="sidebar-body">
                <h5>Todo</h5>
                <div class="d-flex p-3">
                    <label class="ckbox"><input checked type="checkbox"><span>Hangout With friends</span></label>
                    <span class="ms-auto">
                        <i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Edit"></i>
                        <i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Delete"></i>
                    </span>
                </div>
                <div class="d-flex p-3 border-top">
                    <label class="ckbox"><input type="checkbox"><span>Prepare for presentation</span></label>
                    <span class="ms-auto">
                        <i class="fe fe-edit-2 text-primary me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Edit"></i>
                        <i class="fe fe-trash-2 text-danger me-2" data-bs-toggle="tooltip" title="" data-bs-placement="top" data-bs-original-title="Delete"></i>
                    </span>
                </div>
                <h5>Overview</h5>
                <div class="p-4">
                    <div class="main-traffic-detail-item">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur exercitationem fugiat consequuntur necessitatibus sapiente deserunt perspiciatis in harum. Unde non iste sit. Dicta alias voluptatum nulla ad porro quibusdam accusamus!
                    </div>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

    </div>
    <!-- End Page -->

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

    <!-- Jquery js-->
    <script src="<?= site_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>

    <!-- Bootstrap js-->
    <script src="<?= site_url('assets/plugins/bootstrap/js/popper.min.js'); ?>"></script>
    <script src="<?= site_url('assets/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>

    <!-- Internal Sweet-Alert js-->
    <script src="<?= site_url('assets/plugins/sweet-alert/sweetalert.min.js'); ?>"></script>

    <!-- Perfect-scrollbar js -->
    <script src="<?= site_url('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js'); ?>"></script>

    <!-- Sidemenu js -->
    <script src="<?= site_url('assets/plugins/sidemenu/sidemenu.js'); ?>" id="leftmenu"></script>

    <!-- Sidebar js -->
    <script src="<?= site_url('assets/plugins/sidebar/sidebar.js'); ?>"></script>

    <!-- Internal Data Table js -->
    <script src="<?= site_url('assets/plugins/datatable/js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?= site_url('assets/plugins/datatable/js/dataTables.bootstrap5.js'); ?>"></script>
    <script src="<?= site_url('assets/plugins/datatable/js/dataTables.buttons.min.js'); ?>"></script>
    <script src="<?= site_url('assets/plugins/datatable/js/buttons.bootstrap5.min.js'); ?>"></script>
    <script src="<?= site_url('assets/plugins/datatable/js/jszip.min.js'); ?>"></script>
    <script src="<?= site_url('assets/plugins/datatable/pdfmake/pdfmake.min.js'); ?>"></script>
    <script src="<?= site_url('assets/plugins/datatable/pdfmake/vfs_fonts.js'); ?>"></script>
    <script src="<?= site_url('assets/plugins/datatable/js/buttons.html5.min.js'); ?>"></script>
    <script src="<?= site_url('assets/plugins/datatable/js/buttons.print.min.js'); ?>"></script>
    <script src="<?= site_url('assets/plugins/datatable/js/buttons.colVis.min.js'); ?>"></script>
    <script src="<?= site_url('assets/plugins/datatable/dataTables.responsive.min.js'); ?>"></script>
    <script src="<?= site_url('assets/plugins/datatable/responsive.bootstrap5.min.js'); ?>"></script>
    <script src="<?= site_url('assets/js/table-data.js'); ?>"></script>

    <!-- Select2 js-->
    <script src="<?= site_url('assets/plugins/select2/js/select2.min.js'); ?>"></script>
    <script src="<?= site_url('assets/js/select2.js'); ?>"></script>

    <!-- Internal Parsley js-->
    <script src="<?= site_url('assets/plugins/parsleyjs/parsley.min.js'); ?>"></script>

    <!-- Internal Form-validation js-->
    <script src="<?= site_url('assets/js/form-validation.js'); ?>"></script>

    <!--Bootstrap-datepicker js-->
    <script src="<?= site_url('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js'); ?>"></script>

    <!-- Color Theme js -->
    <script src="<?= site_url('assets/js/themeColors.js'); ?>"></script>

    <!-- Sticky js -->
    <script src="<?= site_url('assets/js/sticky.js'); ?>"></script>

    <!-- Custom js -->
    <script src="<?= site_url('assets/js/custom.js'); ?>"></script>

    <script>
        //Date picker
        $('#datepicker-date').bootstrapdatepicker({
            format: "dd-mm-yyyy",
            viewMode: "date",
            multidate: true,
            multidateSeparator: "-",
            autoclose: true
        })
    </script>

</body>

</html>
<!DOCTYPE html>
<html lang="id">

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
    <title>Login Aplikasi Pembayaran SPP Terpadu</title>

    <!-- Bootstrap css-->
    <link id="style" href="<?= site_url('assets/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" />

    <!-- Icons css-->
    <link href="<?= site_url('assets/plugins/web-fonts/icons.css'); ?>" rel="stylesheet" />
    <link href="<?= site_url('assets/plugins/web-fonts/font-awesome/font-awesome.min.css'); ?>" rel="stylesheet">
    <link href="<?= site_url('assets/plugins/web-fonts/plugin.css'); ?>" rel="stylesheet" />

    <!-- Style css-->
    <link href="<?= site_url('assets/css/style.css'); ?>" rel="stylesheet">
    <link href="<?= site_url('assets/css/modify.css'); ?>" rel="stylesheet">

    <!-- Internal Sweet-Alert css-->
    <link href="<?= site_url('assets/plugins/sweet-alert/sweetalert.css'); ?>" rel="stylesheet">

</head>

<body class="ltr main-body leftmenu error-1">

    <!-- Loader -->
    <div id="global-loader">
        <img src="<?= site_url('assets/img/loader.svg'); ?>" class="loader-img" alt="Loader">
    </div>
    <!-- End Loader -->

    <!-- Page -->
    <div class="page main-signin-wrapper">

        <!-- Row -->
        <div class="row signpages text-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="row row-sm">
                        <div class="col-lg-6 col-xl-5 d-none d-lg-block text-center " style="background-color: #0E0E23;">
                            <div class="mt-5 pt-4 p-2 pos-absolute">
                                <img src="<?= site_url('image/education.png'); ?>" class="d-lg-none header-brand-img text-start float-start mb-4 error-logo-light" alt="logo">
                                <img src="<?= site_url('image/education.png'); ?>" class=" d-lg-none header-brand-img text-start float-start mb-4 error-logo" alt="logo">
                                <div class="clearfix mt-3"></div>
                                <img src="<?= site_url('image/education.png'); ?>" class="ht-100 mb-0" alt="user">
                                <h5 class="mt-4 text-white">Azkara Cendana</h5>
                                <span class="tx-white-6 tx-13 mb-5 mt-xl-0">Aplikasi Pembayaran SPP Terpadu Berbasis Framework CodeIgniter 4</span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
                            <div class="main-container container-fluid">
                                <div class="row row-sm">
                                    <div class="card-body mt-2 mb-2">
                                        <img src="<?= site_url('image/education.png'); ?>" class=" d-lg-none header-brand-img text-start float-start mb-4" alt="logo">
                                        <div class="clearfix"></div>
                                        <?php if (session()->getFlashdata('pesan')) : ?>
                                            <?= session()->getFlashdata('pesan'); ?>
                                        <?php endif; ?>
                                        <?= $validation->listErrors(); ?>
                                        <?= form_open(site_url('autentifikasi/validasi_login_admin/'), 'enctype="multipart/form-data"'); ?>
                                        <h5 class="text-start mb-2">Login Akun Administrator</h5>
                                        <p class="mb-4 text-muted tx-13 ms-0 text-start">Silahkan Masuk Aplikasi Dengan Menggunakan Akun Yang Telah Terdaftar !</p>
                                        <?= csrf_field(); ?>
                                        <div class="form-group text-start">
                                            <label>Nama Pengguna <b style="color: red;">*</b></label>
                                            <input class="form-control" placeholder="Nama Pengguna..." type="text" maxlength="20" name="NamaPengguna" autocomplete="off" required>
                                        </div>
                                        <div class="form-group text-start">
                                            <label>Kata Sandi <b style="color: red;">*</b></label>
                                            <input class="form-control" placeholder="Kata Sandi..." type="password" name="KataSandi" autocomplete="off" required>
                                        </div>
                                        <button class="btn ripple btn-main-primary btn-block modify-bg-button"><i class="fa fa-unlock"></i> Login</button>
                                        <?= form_close(); ?>
                                        <div class="text-start mt-3 ms-0">
                                            <div class="text-small-login" style="font-size: 12px;">Belum Punya Akun ? Silahkan Hubungi Superadministrator</div>
                                            <?php
                                            //echo "Memory awal: ".memory_get_usage()." bytes \n";
                                            $memori_first = memory_get_usage() . " bytes \n";

                                            for ($i = 0; $i < 100000; $i++) {

                                                $array[] = md5($i);
                                            }

                                            for ($i = 0; $i < 50000; $i++) {

                                                unset($array[$i]);
                                            }

                                            //echo "Memory yang digunakan: ".memory_get_usage()." bytes \n";
                                            $memori_usage = memory_get_usage() . " bytes \n";

                                            //echo "Maksimum memory: ".memory_get_peak_usage()." bytes \n";
                                            $memori_max = memory_get_peak_usage() . " bytes \n";
                                            ?>
                                            <div class="text-small-login" style="font-size: 12px;">Memori Terpakai : <?= $memori_usage; ?> <br> Memori Maksimal : <?= $memori_max; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->

    </div>
    <!-- End Page -->

    <!-- Jquery js-->
    <script src="<?= site_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>

    <!-- Bootstrap js-->
    <script src="<?= site_url('assets/plugins/bootstrap/js/popper.min.js'); ?>"></script>
    <script src="<?= site_url('assets/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>

    <!-- Internal Sweet-Alert js-->
    <script src="<?= site_url('assets/plugins/sweet-alert/sweetalert.min.js'); ?>"></script>

    <!-- Select2 js-->
    <script src="<?= site_url('assets/plugins/select2/js/select2.min.js'); ?>"></script>

    <!-- Perfect-scrollbar js -->
    <script src="<?= site_url('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js'); ?>"></script>

    <!-- Color Theme js -->
    <script src="<?= site_url('assets/js/themeColors.js'); ?>"></script>

    <!-- Custom js -->
    <script src="<?= site_url('assets/js/custom.js'); ?>"></script>

</body>

</html>
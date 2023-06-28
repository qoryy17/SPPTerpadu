<?= $this->extend('/admin/V_Dashboard'); ?>
<?= $this->section('title') ?>Aplikasi Pembayaran SPP Terbaru - Beranda<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<!-- Page Header -->
<div class="page-header">
    <div>
        <h2 class="main-content-title tx-24 mg-b-5">Aplikasi Pembayaran SPP Terpadu</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('dashboard'); ?>">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Beranda</li>
        </ol>
    </div>
</div>
<!-- End Page Header -->

<div class="row row-sm">
    <div class="col-sm-6 col-md-6 col-xl-3">
        <div class="card custom-card">
            <div class="card-body text-center">
                <div class="icon-service bg-info-transparent rounded-circle text-success">
                    <i class="fe fe-dollar-sign"></i>
                </div>
                <p class="mb-1 text-muted">Total Pembayaran SPP</p>
                <h3 class="mb-0"><span>Rp.</span>1.500.000</h3>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-6 col-xl-3">
        <div class="card custom-card">
            <div class="card-body text-center">
                <div class="icon-service bg-info-transparent rounded-circle text-success">
                    <i class="fe fe-dollar-sign"></i>
                </div>
                <p class="mb-1 text-muted">Total Pembayaran Lainnya</p>
                <h3 class="mb-0"><span>Rp.</span>1.500.000</h3>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-6 col-xl-3">
        <div class="card custom-card">
            <div class="card-body text-center">
                <div class="icon-service bg-info-transparent rounded-circle text-warning">
                    <i class="fe fe-user"></i>
                </div>
                <p class="mb-1 text-muted">Total Siswa/i</p>
                <h3 class="mb-0">900 Orang</h3>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-6 col-xl-3">
        <div class="card custom-card">
            <div class="card-body text-center">
                <div class="icon-service bg-info-transparent rounded-circle text-danger">
                    <i class="fe fe-database"></i>
                </div>
                <p class="mb-1 text-muted">Total Jurusan</p>
                <h3 class="mb-0">900</h3>
            </div>
        </div>
    </div>


</div>
<!-- Row -->
<div class="row sidemenu-height">
    <div class="col-lg-12">
        <div class="card custom-card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        Aplikasi Server dibangun dengan menggunakan teknologi :
                        <ul>
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>Javascript</li>
                            <li>jQuery</li>
                            <li>Bootstrap</li>
                            <li>Framework PHP 7+ CodeIgniter</li>
                            <li>Template Spruha Premium Themeforest</li>
                            <li>Apache Server</li>
                            <li>MySQL</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        Aplikasi Client dibangun dengan menggunakan teknologi :
                        <ul>
                            <li>React Native</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Row -->
<?= $this->endSection(); ?>
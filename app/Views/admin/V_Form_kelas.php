<?= $this->extend('/admin/V_Dashboard'); ?>
<?= $this->section('title') ?>Master Siswa | <?= $status_form; ?> Data Kelas<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<!-- Page Header -->
<div class="page-header">
    <div>
        <h2 class="main-content-title tx-24 mg-b-5">Aplikasi Pembayaran SPP Terpadu</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Master Kelas</li>
            <li class="breadcrumb-item"><a href="<?= site_url('siswa/data_siswa'); ?>">Kelola Data Kelas</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $status_form; ?> Data Kelas</li>
        </ol>
    </div>
</div>
<!-- End Page Header -->

<!-- Row -->
<div class="row sidemenu-height">
    <div class="col-lg-12">
        <div class="card custom-card">
            <div class="card-header">
                <h6 class="main-content-label mb-1"><?= $status_form; ?> Data Kelas</h6>
                <p class="text-muted card-sub-title">Aplikasi Pembayaran SPP Terpadu</p>
            </div>
            <div class="card-body">
                <div class="alert alert-warning" role="alert">
                    <button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button">
                        <span aria-hidden="true">&times;</span></button>
                    <strong>Perhatian !</strong> Harap teliti dalam pengisian data kelas. Isilah data sesuai dengan inputan yang tersedia dalam formulir tambah data kelas
                </div>

                <form action="<?= site_url('siswa/simpan_kelas/') . encrypt_url($status_form); ?>" method="POST" enctype="multipart/form-data" data-parsley-validate="">
                    <?= csrf_field(); ?>
                    <div class="row row-sm">
                        <div class="col-lg-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label class="form-label">ID Kelas <span class="tx-danger">*</span></label>
                                <label class="text-label">ID Kelas Terbuat Otomatis Oleh Sistem...</label>
                                <input class="form-control" name="IDKelas" placeholder="ID Kelas" required autocomplete="off" type="text" maxlength="12" value="<?= $kelas['IDKelas']; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Kelas <span class="tx-danger">*</span></label>
                                <label class="text-label">Kelas Menggunakan Huruh Kapital Dan Angka Romawi...</label>
                                <input class="form-control" name="Kelas" placeholder="Kelas" required autocomplete="off" type="text" maxlength="30" value="<?= $kelas['NamaKelas']; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <a href="<?= site_url('siswa/data_kelas'); ?>" class="btn btn-sm btn-warning" type="button"><i class="fa fa-reply"></i> Kembali</a>
                            <button class="btn btn-sm btn-secondary" type="reset"><i class="fa fa-recycle"></i> Batal</button>
                            <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-save"></i> Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <p class="text-muted"><i class="fa fa-desktop"></i> Aplikasi Pembayaran SPP Terpadu</p>
            </div>
        </div>
    </div>
</div>
<!-- End Row -->
<?= $this->endSection(); ?>
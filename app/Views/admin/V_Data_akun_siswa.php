<?= $this->extend('/admin/V_Dashboard'); ?>
<?= $this->section('title') ?>Master Pengguna | Kelola Akun Siswa<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<!-- Page Header -->
<div class="page-header">
    <div>
        <h2 class="main-content-title tx-24 mg-b-5">Aplikasi Pembayaran SPP Terpadu</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('dashboard'); ?>">Master Pengguna</a></li>
            <li class="breadcrumb-item active" aria-current="page">Kelola Akun Siswa</li>
        </ol>
    </div>
</div>
<!-- End Page Header -->

<!-- Row -->
<div class="row sidemenu-height">
    <div class="col-lg-12">
        <div class="card custom-card">
            <div class="card-header">
                <h6 class="main-content-label mb-1">Data Seluruh Akun Siswa</h6>
                <p class="text-muted card-sub-title">Silahkan Kelola Akun Siswa Pada Halaman Ini...</p>
            </div>
            <div class="card-body">
                <button style="margin-left: 15px;" class="btn btn-primary btn-sm mb-2"><i class="fa fa-plus"></i> Tambah</button>
                <div class="table-responsive">

                    <table class="table table-bordered" id="example2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Akun</th>
                                <th>NISN</th>
                                <th>Nama Pengguna</th>
                                <th>Aktivasi</th>
                                <th>Kelola</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>A09935</td>
                                <td>20324242</td>
                                <td>qori</td>
                                <td><span class="badge bg-success"><i class="fa fa-user"></i> Aktif</span></td>
                                <td>
                                    <a href="" title="Blokir" class="btn btn-warning btn-sm"><i class="fa fa-lock"></i></a>
                                    <a href="" title="Edit" class="btn btn-secondary btn-sm"><i class="fa fa-pencil"></i></a>
                                    <a href="" title="Hapus" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <p class="text-muted"><i class="fa fa-desktop"></i> Aplikasi Pembayaran SPP Terpadu</p>
            </div>
        </div>
    </div>
</div>
<!-- End Row -->
<?= $this->endSection(); ?>
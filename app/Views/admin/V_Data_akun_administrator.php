<?= $this->extend('/admin/V_Dashboard'); ?>
<?= $this->section('title') ?>Master Pengguna | Kelola Akun Administrator<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<!-- Page Header -->
<div class="page-header">
    <div>
        <h2 class="main-content-title tx-24 mg-b-5">Aplikasi Pembayaran SPP Terpadu</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('dashboard'); ?>">Master Pengguna</a></li>
            <li class="breadcrumb-item active" aria-current="page">Kelola Akun Administrator</li>
        </ol>
    </div>
</div>
<!-- End Page Header -->

<!-- Row -->
<div class="row sidemenu-height">
    <div class="col-lg-12">
        <div class="card custom-card">
            <div class="card-header">
                <h6 class="main-content-label mb-1">Data Seluruh Akun Administrator</h6>
                <p class="text-muted card-sub-title">Silahkan Kelola Akun Administrator Pada Halaman Ini...</p>
            </div>
            <div class="card-body">
                <a href="<?= site_url('pengguna/form_akun_administrator/') . encrypt_url('Tambah'); ?>" style="margin-left: 15px;" class="btn btn-primary btn-sm mb-2"><i class="fa fa-plus"></i> Tambah</a>
                <div class="table-responsive">
                    <table class="table table-bordered" id="example2" style="font-size: 14px;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Nama Pengguna</th>
                                <th>Status</th>
                                <th>Aktivasi</th>
                                <th>Kelola</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($administrator as $data) {
                                if ($data['Aktivasi'] == 'Y') {
                                    $color = 'bg-success';
                                    $status = 'Aktif';
                                } else {
                                    $color = 'bg-danger';
                                    $status = 'Blokir';
                                }
                            ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $data['NamaLengkap']; ?></td>
                                    <td><?= $data['NamaPengguna']; ?></td>
                                    <td><?= $data['Status']; ?></td>
                                    <td><span class="badge <?= $color; ?>"><i class="fa fa-user"></i> <?= $status; ?></span></td>
                                    <td>
                                        <a href="<?= site_url('pengguna/blokir_administrator/'); ?><?= encrypt_url($data['IDAkunAdmin']); ?>" title="Blokir" class="btn btn-warning btn-sm"><i class="fa fa-lock"></i></a>
                                        <a href="" title="Edit" class="btn btn-secondary btn-sm"><i class="fa fa-pencil"></i></a>
                                        <a href="" title="Hapus" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                            <?php
                                $no++;
                            }
                            ?>
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
<?= $this->extend('/admin/V_Dashboard'); ?>
<?= $this->section('title') ?>Master Siswa | Kelola Data Tahun Ajaran<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<!-- Page Header -->
<div class="page-header">
    <div>
        <h2 class="main-content-title tx-24 mg-b-5">Aplikasi Pembayaran SPP Terpadu</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('dashboard'); ?>">Master Siswa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Kelola Data Tahun Ajaran</li>
        </ol>
    </div>
</div>
<!-- End Page Header -->

<!-- Row -->
<div class="row sidemenu-height">
    <div class="col-lg-12">
        <div class="card custom-card">
            <div class="card-header">
                <h6 class="main-content-label mb-1">Data Seluruh Tahun Ajaran</h6>
                <p class="text-muted card-sub-title">Silahkan Kelola Data Tahun Ajaran Pada Halaman Ini...</p>
            </div>
            <div class="card-body">
                <a href="<?= site_url('siswa/form_tahun_ajaran/') . encrypt_url('Tambah'); ?>" style="margin-left: 15px;" class="btn btn-primary btn-sm mb-2"><i class="fa fa-plus"></i> Tambah</a>
                <div class="table-responsive">
                    <table class="table table-bordered" id="example1" style="font-size: 14px;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tahun Ajaran</th>
                                <th>Dibuat Oleh</th>
                                <th>Dibuat</th>
                                <th>Diperbarui</th>
                                <th>Kelola</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($kelas as $data) {
                            ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $data['TahunAjaran']; ?></td>
                                    <td><?= $data['NamaLengkap']; ?></td>
                                    <td><?= $data['created_at']; ?></td>
                                    <td><?= $data['updated_at']; ?></td>
                                    <td>
                                        <a href="<?= site_url('siswa/form_tahun_ajaran/') . encrypt_url('Perbarui') . '/' . encrypt_url($data['IDTahunAjaran']); ?>" title="Edit" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                        <a onclick="swal({
                                            title: 'Ingin Menghapus Tahun Ajaran <?= $data['TahunAjaran']; ?> ?',
                                            text: 'Data yang dihapus tidak dapat dikembalikan !',
                                            type: 'warning',
                                            showCancelButton: true,
                                            confirmButtonClass: 'btn-danger',
                                            confirmButtonText: 'Ya, Hapus',
                                            cancelButtonText: 'Tidak, Batalkan Hapus',
                                            closeOnConfirm: false,
                                            closeOnCancel: false
                                            },
                                            function(isConfirm) {
                                            if (isConfirm) {
                                                document.location = '<?= base_url('siswa/hapus_tahun_ajaran'); ?>/<?php echo encrypt_url($data['IDTahunAjaran']); ?>';
                                                swal('Tahun Ajaran', 'Tahun Ajaran Berhasil Dihapus !.', 'success');
                                            } else {
                                                swal('Tahun Ajaran', 'Tahun Ajaran Batal Dihapus !', 'error');
                                            }
                                            });" href="#" title="Hapus" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php
                                $no++;
                            } ?>
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
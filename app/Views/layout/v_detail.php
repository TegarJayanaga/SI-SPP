<?=
$this->extend('templating');
$this->section('content');
?>
<div class="content-wrapper">
    <div class="container mt-5 mb-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Data Siswa</h3>
                    </div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-4">Nama</dt>
                            <dd class="col-sm-8"><?= $siswa['nama'] ?></dd>
                            <dt class="col-sm-4">NIS</dt>
                            <dd class="col-sm-8"><?= $siswa['nis'] ?></dd>
                            <dt class="col-sm-4">Kelas</dt>
                            <dd class="col-sm-8"><?= $siswa['kelas'] ?></dd>
                            <dt class="col-sm-4">Tagihan</dt>
                            <dd class="col-sm-8"><?= $siswa['tagihan'] ?></dd>
                            <dt class="col-sm-4">Status</dt>
                            <dd class="col-sm-8"><?= $siswa['status'] ?></dd>
                            <dt class="col-sm-4">Cicilan</dt>
                            <dd class="col-sm-8"><?= $siswa['cicil'] ?></dd>
                        </dl>
                        <div>
                            <a href="/editsiswa/<?= $siswa['id_siswa'] ?>" class="btn btn-lg btn-warning me-1"><i class="fa fa-edit"></i>Ubah</a>
                            <a href="/deletesiswa/<?= $siswa['id_siswa'] ?>" class="btn btn-lg btn-danger" onclick="return confirm('Apakah Anda yakin?');"><i class="fa fa-trash"></i>Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?=
$this->endSection();
?>
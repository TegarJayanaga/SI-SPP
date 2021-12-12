<?=
$this->extend('templating');
$this->section('content');
?>
<div class="content-wrapper">
    <div class="container mt-5 mb-4">
        <div class="row">
            <div class="col-md-12">
                <h1>
                    Laporan
                </h1>
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3><?= count($siswa); ?></h3>

                                <p>Jumlah Data Siswa</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="/siswa" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3><?= count($sudah); ?><sup style="font-size: 20px"></sup></h3>

                                <p>Siswa Sudah Bayar</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="/siswa" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3><?= count($belum); ?></h3>

                                <p>Siswa Belum Bayar</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="/siswa" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3><?= count($cicil); ?></h3>

                                <p>Siswa Sudah Bayar Sebagian</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="/siswa" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <?php foreach ($siswa as $s) :
                ?>
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Data Siswa</h3>
                        </div>
                        <div class="card-body">
                            <dl class="row">
                                <dt class="col-sm-4">Nama</dt>
                                <dd class="col-sm-8"><?= $s['nama'] ?></dd>
                                <dt class="col-sm-4">NIS</dt>
                                <dd class="col-sm-8"><?= $s['nis'] ?></dd>
                                <dt class="col-sm-4">Kelas</dt>
                                <dd class="col-sm-8"><?= $s['kelas'] ?></dd>
                                <dt class="col-sm-4">Tagihan</dt>
                                <dd class="col-sm-8"><?= $s['tagihan'] ?></dd>
                                <dt class="col-sm-4">Status</dt>
                                <dd class="col-sm-8"><?= $s['status'] ?></dd>
                                <dt class="col-sm-4">Cicilan</dt>
                                <dd class="col-sm-8"><?= $s['cicil'] ?></dd>
                            </dl>
                        </div>
                    </div>
                <?php endforeach;
                ?>
                <!-- <p>Jumlah Siswa Terdaftar : </p>
                <p>Jumlah Siswa yang Lunas : </p> -->
            </div>
        </div>
    </div>
</div>
<?=
$this->endSection();
?>
<?= $this->section('myscript'); ?>
<script>
    // window.print();
</script>
<?= $this->endSection(); ?>
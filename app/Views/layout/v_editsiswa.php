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
                        <h3 class="card-title">Form Ubah Data Siswa</h3>
                    </div>
                    <div class="card-body">
                        <form action="/saveeditSiswa/<?= $siswa['id_siswa']; ?>" method="post">
                            <input type="hidden" id="id_siswa" name="id_siswa" value="<?= $siswa['id_siswa']; ?>">
                            <div class="mb-3">
                                <label for="Nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $siswa['nama']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="NIS" class="form-label">NIS</label>
                                <input type="text" class="form-control" id="nis" name="nis" value="<?= $siswa['nis']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Kelas" class="form-label">Kelas</label>
                                <input type="text" class="form-control" id="kelas" name="kelas" value="<?= $siswa['kelas']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="tagihan" class="form-label">Tagihan</label>
                                <select class="form-control" aria-label="Default select example" id="tagihan" name="tagihan">
                                    <option selected value="<?= $siswa['tagihan']; ?>"><?= $siswa['tagihan']; ?></option>
                                    <option value="Rp.500.000,00">Rp.500.000,00</option>
                                    <option value="Rp.700.000,00">Rp.700.000,00</option>
                                    <option value="Rp.1.000.000,00">Rp.1.000.000,00</option>
                                    <option value="Rp.1.000.000,00+">Rp.1.000.000,00+</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-control" aria-label="Default select example" id="status" name="status">
                                    <option selected value="<?= $siswa['status']; ?>"><?= $siswa['status']; ?></option>
                                    <option value="Sudah Bayar">Sudah Bayar</option>
                                    <option value="Belum Bayar">Belum Bayar</option>
                                    <option value="Cicil">Cicil</option>
                                </select>
                            </div>
                            <div class="mb-3" id="jikacicil">
                                <label for="cicil" class="form-label">Jumlah yang Telah Dibayar</label>
                                <input type="number" class="form-control" id="cicil" name="cicil" placeholder="<?= $siswa['cicil']; ?>">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?=
$this->endSection();
?>
<?= $this->section('myscript'); ?>
<script>
    $("#status").change(function() {
        if ($(this).val() == "Cicil") {
            $('#jikacicil').show();
            $('#cicil').attr('required', '');
            $('#cicil').attr('data-error', 'This field is required.');
        } else {
            $('#jikacicil').hide();
            $('#cicil').removeAttr('required');
            $('#cicil').removeAttr('data-error');
        }
    });
    $("#status").trigger("change");
    $(function() {
        $('#nama').attr('required', '');
        $('#nama').attr('data-error', 'This field is required.');
        $('#kelas').attr('required', '');
        $('#kelas').attr('data-error', 'This field is required.');
        $('#nis').attr('required', '');
        $('#nis').attr('data-error', 'This field is required.');
        $('#tagihan').attr('required', '');
        $('#tagihan').attr('data-error', 'This field is required.');
        $('#status').attr('required', '');
        $('#status').attr('data-error', 'This field is required.');
    });
</script>
<?= $this->endSection(); ?>
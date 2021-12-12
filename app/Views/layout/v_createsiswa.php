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
                        <h3 class="card-title">Form Tambah Data Siswa</h3>
                    </div>
                    <div class="card-body">
                        <form action="/saveSiswa" method="post">
                            <div class="mb-3">
                                <label for="Nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama kamu">
                            </div>
                            <div class="mb-3">
                                <label for="NIS" class="form-label">NIS</label>
                                <input type="number" class="form-control" id="nis" name="nis" placeholder="nis">
                            </div>
                            <div class="mb-3">
                                <label for="Kelas" class="form-label">Kelas</label>
                                <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Kelas">
                            </div>
                            <div class="mb-3">
                                <label for="tagihan" class="form-label">Tagihan</label>
                                <select class="form-control" aria-label="Default select example" id="tagihan" name="tagihan">
                                    <option selected value="">Tagihan</option>
                                    <option value="Rp.500.000,00">Rp.500.000,00</option>
                                    <option value="Rp.700.000,00">Rp.700.000,00</option>
                                    <option value="Rp.1.000.000,00">Rp.1.000.000,00</option>
                                    <option value="Rp.1.000.000,00+">Rp.1.000.000,00+</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-control" aria-label="Default select example" id="status" name="status">
                                    <option selected value="">Status</option>
                                    <option value="Sudah Bayar">Sudah Bayar</option>
                                    <option value="Belum Bayar">Belum Bayar</option>
                                    <option value="Cicil">Cicil</option>
                                </select>
                            </div>
                            <div class="mb-3" id="jikacicil">
                                <label for="cicil" class="form-label">Jumlah yang Telah Dibayar</label>
                                <input type="number" class="form-control" id="cicil" name="cicil" placeholder="Jumlah dibayar">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
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
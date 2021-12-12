<?=
$this->extend('templating');
$this->section('content');
?>

<div class="content-wrapper">
    <div class="container mt-3 text-center">
        <a href="/createsiswa" class="btn btn-primary">Tambah</a>
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">NIS</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($siswa as $s) :
                ?>
                    <tr>
                        <td scope="row"><?= $i++; ?></td>
                        <td><?= $s['nama'] ?></td>
                        <td><?= $s['nis'] ?></td>
                        <td><?= $s['status'] ?></td>
                        <td>
                            <a href="/detailSiswa/<?= $s['id_siswa'] ?>" class="btn btn-success">Detail</a>
                        </td>
                    </tr>
                <?php endforeach;
                ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('myscript'); ?>
<script>
    $(function() {
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
<?= $this->endSection(); ?>
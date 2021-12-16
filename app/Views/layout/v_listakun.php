<?=
$this->extend('templating');
$this->section('content');
?>

<div class="content-wrapper">
    <div class=" container mt-5">
        <table class="table table-striped table-hover">
            <a href="/akun" class="btn btn-primary">Tambah</a>
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($akun as $a) :
                ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $a['name'] ?></td>
                        <td><?= $a['password'] ?></td>
                        <td>
                            <a href="/Ale/arwendi/<?= $a['id'] ?>" class="btn btn-warning">Edit</a>
                            <a href="/akun/delete/<?= $a['id'] ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach;
                ?>
            </tbody>
        </table>
    </div>
</div>
<?=
$this->endSection();
?>

<?=
$this->extend('templating');
$this->section('content');
?>
<div class="container mt-5 mb-4">
    <form action="/akun/editakun/<?= $akun['id'] ?>" method="post">

        <input type="hidden" id="id" name="id" value="<?= $akun['id']; ?>">

        <div class="mb-3">
            <label for="Username" class="form-label">Username</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= $akun['name']; ?>">
        </div>
        <div class="mb-3">
            <label for="Password" class="form-label">Password</label>
            <input type="text" class="form-control" id="password" name="password" value="<?= $akun['password']; ?>">
        </div>
        <button type=" submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?=
$this->endSection();
?>
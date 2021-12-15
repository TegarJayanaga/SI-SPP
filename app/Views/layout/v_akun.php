<?=
$this->extend('templating');
$this->section('content');
?>
<div class="container mt-5 mb-4">
    <form action="/saveAkun" method="post">
        <div class="mb-3">
            <label for="Username" class="form-label">Username</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nama kamu">
        </div>
        <div class="mb-3">
            <label for="Password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?=
$this->endSection();
?>
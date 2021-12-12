<?=
$this->extend('templating');
$this->section('content');
?>

<div class="content-wrapper" style="background-image: url('')">
    <div class="text-center">
        <h1 class="display-4">
            Hallo <?= user()->username; ?>
        </h1>
        <br>
        <p>
            Selamat Datang Di Sistem Admin Pembayaran SPP
        </p>
        <img src="/assets/sekolah.jpg" alt="" width="600">
    </div>
</div>

<?=
$this->endSection();
?>
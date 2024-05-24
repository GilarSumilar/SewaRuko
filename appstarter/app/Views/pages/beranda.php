<?= $this->extend('pages/template') ?>

<?= $this->section('content') ?>
<div class="jumbotron mt-3">
    <div class="jumbotron-desc">
        <h2>Selamat Datang!</h2>
        <p>Kami memberikan solusi kepada anda sewa ruko dengan mudah menggunakan jari anda.</p>
        <div class="btn-cta">
            <a href="<?= base_url('/daftar-ruko') ?>">Lihat Ruko</a>
            <a href="">Lokasi</a>
        </div>
    </div>
    <div class="jumbotron-img">
        <img src="<?= base_url('/images/1.jpg') ?>" alt="">
    </div>
</div>
<?= $this->endSection() ?>
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
<div class="profile mt-5">
    <h3>Tentang Pemilik</h3>
    <div class="profile-card mt-3">
        <img src="<?= base_url('/images/person.jpg') ?>" alt="">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error asperiores dolore nemo ad cupiditate tempore quia adipisci maiores, molestias sint odit, autem iure cumque amet quod sed quo. Quidem eum laudantium reiciendis fugit nobis ducimus magni illum deleniti, ipsam quibusdam sint ea soluta. Repudiandae dolor dolores necessitatibus illo animi laboriosam ducimus soluta voluptatibus atque dolorem dolorum, alias nostrum placeat quis nemo voluptate, veritatis, nihil non facilis! Earum, maiores qui necessitatibus dolorem sapiente, sint dolores praesentium magni, quo totam vel libero! In omnis, aliquam, asperiores eligendi architecto molestiae similique enim deserunt vitae, est illo nostrum nemo nulla rem impedit quam aperiam. Tempore tenetur asperiores explicabo dolorum ratione pariatur porro esse eaque quisquam, laborum, ducimus minus cumque alias dolore quidem sunt unde quis autem facere laboriosam, architecto minima labore nulla. Voluptatum, atque explicabo vel ad excepturi consequatur iusto ea odit expedita enim porro ab. Aspernatur soluta temporibus quidem nobis? Debitis, perferendis sit?</p>
    </div>
</div>
<div class="testimoni mt-5">
    <h3>Kata Mereka</h3>
    <div class="testimoni-list__card">
        <div class="testimoni-card mt-3">
            <div class="testimoni-card__photo">
                <img src="<?= base_url('/images/person.jpg') ?>" alt="" width="100" height="100">
                <div class="testimono-card__username__star">
                    <h6>username</h6>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
            </div>
            <p>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim, cumque dolore maxime velit ipsa corrupti! Quia veniam beatae cum velit porro ullam sint! Fugit, nostrum!"</p>
        </div>
        <div class="testimoni-card mt-3">
            <div class="testimoni-card__photo">
                <img src="<?= base_url('/images/person.jpg') ?>" alt="" width="100" height="100">
                <div class="testimono-card__username__star">
                    <h6>username</h6>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
            </div>
            <p>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim, cumque dolore maxime velit ipsa corrupti! Quia veniam beatae cum velit porro ullam sint! Fugit, nostrum!"</p>
        </div>
        <div class="testimoni-card mt-3">
            <div class="testimoni-card__photo">
                <img src="<?= base_url('/images/person.jpg') ?>" alt="" width="100" height="100">
                <div class="testimono-card__username__star">
                    <h6>username</h6>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
            </div>
            <p>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim, cumque dolore maxime velit ipsa corrupti! Quia veniam beatae cum velit porro ullam sint! Fugit, nostrum!"</p>
        </div>
        <div class="testimoni-card mt-3">
            <div class="testimoni-card__photo">
                <img src="<?= base_url('/images/person.jpg') ?>" alt="" width="100" height="100">
                <div class="testimono-card__username__star">
                    <h6>username</h6>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
            </div>
            <p>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim, cumque dolore maxime velit ipsa corrupti! Quia veniam beatae cum velit porro ullam sint! Fugit, nostrum!"</p>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?php

require_once 'config/app.php';

?>

<!DOCTYPE html>
<html lang="en">
<?php include_once 'layouts/head.php' ?>

<body>

    <?php include_once 'layouts/navbar.php' ?>

    <section id="content">
        <section id="tentang kontak">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title mb-5">Tentang Saya</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="text-center profile">
                            <div class="row">
                                <div class="col-md-12">
                                    <img src="assets/img/header-foto.png" alt="" class="img-fluid rounded-circle" />
                                    <h3>Web Developer</h3>
                                    <h2><?= $setting['nama'] ?></h2>
                                </div>
                            </div>
                            <div class="row mt-3 justify-content-center">
                                <div class="col-3">
                                    <div class="text-center">
                                        <a href="https://wa.me/<?= $setting['nomor_wa'] ?>" class="sm" target="_blank">
                                            <img src="assets/img/logo-whatsapp.png" alt="" class="img-fluid" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="text-center">
                                        <a href="{{ $setting->instagram_link }}" target="_blank" class="sm">
                                            <img src="assets/img/logo-instagram.png" alt="" class="img-fluid" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="text-center">
                                        <a href="{{ $setting->facebook_link }}" target="_blank" class="sm">
                                            <img src="assets/img/logo-facebook.png" alt="" class="img-fluid" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="text-center">
                                        <a href="mailto:{{ $setting->email }}" target="_blank" class="sm">
                                            <img src="assets/img/logo-email.png" alt="" class="img-fluid" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 align-self-center">
                    <?= $setting['deskripsi'] ?>
                    </div>
                </div>
            </div>
        </section>
        <section id="portofolio_terbaru" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Portofolio Terbaru</h3>
                </div>
            </div>
            <div class="row mt-3">
               <?php foreach($projects as $project) : ?>
                <div class="col-md-4 mt-3">
                        <div class="c-card-portofolio2">
                            <a href="<?= url . 'detail_portofolio.php' ?>">
                                <span class="label-kategori-1" title="Kategori Web"><?= $project['kategori'] ?></span>
                            </a>
                            <a href="<?= url . 'detail_portofolio.php' ?>">
                                <img src="<?= $project['gambar'] ?>" alt="" class="img-fluid" />
                                <h2 class="title">
                                <?= $project['nama'] ?>
                                </h2>
                            </a>
                        </div>
                    </div>
               <?php endforeach; ?>
            </div>
        </div>
    </section>
    </section>

    <?php include_once 'layouts/footer.php' ?>
    <?php include_once 'layouts/icon_whatsapp.php' ?>

</body>

</html>
<?php

require_once 'config/app.php';
require_once 'config/function.php';

$projects = getProjectLimit();
$posts = getPostLimit();
?>

<!DOCTYPE html>
<html lang="en">
<?php include_once 'layouts/head.php' ?>

<body>

    <?php include_once 'layouts/navbar.php' ?>

    <section id="content">
        <header class="header-home">
            <div class="container">
                <div class="row header-content">
                    <div class="col-md-5 align-self-center order-2 order-md-0">
                        <h5>Halo Dunia, Saya <?= $setting['nama'] ?></h5>
                        <h1><?= $setting['pekerjaan'] ?></h1>
                        <p>
                            Saya seorang mahasiswa Teknik Informatika telah belajar mengenai pemrogramman yang pada khususnya dibidang Web
                        </p>
                        <div class="d-flex justify-content-between header-sosmed">
                            <a href="mailto:<?= $setting['email'] ?>" target="_blank" class="btn btn-secondary"><i class="fas fa-fw fa-envelope"></i> Email</a>
                            <a href="https://wa.me/<?= $setting['nomor_wa'] ?>" target="_blank" class="btn btn-success"><i class="fab fa-fw fa-whatsapp"></i> Whatsapp</a>
                            <a href="javascript:void(0)" target="_blank" class="btn btn-secondary"><i class="fas fa-fw fa-download"></i> Download CV</a>
                        </div>
                    </div>
                    <!-- <div class="col-md-6 order-md-0 order-1">
                        <div class="text-right image-header">
                            <img src="assets/img/header-foto.png') }}" alt="" class="img-fluid" />
                        </div>
                    </div> -->
                </div>
            </div>
        </header>

        <section id="saya-siapa">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title-section">Tentang Saya?</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            Saya adalah mahasiswa aktif Teknik Informatika asal kampus STT
                            Wastukancana Purwakarta. <br> <br> Pada saat ini saya lagi menempuh semester
                            5.
                        </p>
                        <p>
                            Saya belajar pemrogramman ketika semester 1 yang dimana
                            pada saat itu saya belajar mengenai Bahasa Pemrograman PHP,
                            CSS dan Javascript.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            Tidak hanya itu saya juga belajar mengenai frontend yaitu
                            Bootstrap. <br> Sampai saat ini saya lagi belajar framework laravel,
                            karena menurut pendapat orang lain yang mempunya kemampuan dibidang itu, framework ini sangatlah powerpul untuk membuat
                            suatu aplikasi web dan juga dapat mempercepat pengerjaan aplikasi
                            web.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="apa-saja-yang-pernah-saya-buat">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title-section">Apa Saja Yang Pernah Saya Buat?</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="subtitle-section">
                            Ada beberapa aplikasi berbasis web yang pernah saya buat selama di perkuliahan.
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <?php foreach ($projects as $porto) : ?>
                        <div class="col-md-4 mt-3">
                            <div class="c-card-portofolio1">
                                <a href="<?= url . 'detail_portofolio.php?id=' . $porto['id'] ?>">
                                    <span class="label-kategori-1" title="Kategori Web"><?= $porto['kategori'] ?></span>
                                </a>
                                <a href="<?= url . 'detail_portofolio.php?id=' . $porto['id'] ?>">
                                    <img src="<?= $porto['gambar'] ?>" class="img-fluid" />
                                    <h2 class="title">
                                        <?= $porto['nama'] ?>
                                    </h2>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="text-center">
                            <a href="<?= url . 'portofolio.php' ?>" class="btn btn-lihat-semua">Lihat Semua</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="tool-dan-alat">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title-section">Teknologi Yang Digunakan</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="subtitle-section">
                            Tool andalan yang sering saya gunakan untuk membuat aplikasi web
                            hingga saat ini adalah sebagai berikut.
                        </div>
                    </div>
                </div>
                <div class="row mt-3 justify-content-center">
                    <div class="col-md col-12">
                        <div class="text-center">
                            <img src="<?= url ?>assets/img/logo-laravel.png" alt="" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-md col-12">
                        <div class="text-center">
                            <img src="<?= url ?>assets/img/logo-codeigniter.png" alt="" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-md col-12">
                        <div class="text-center">
                            <img src="<?= url ?>assets/img/logo-bootstrap.png" alt="" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-md col-12">
                        <div class="text-center">
                            <img src="<?= url ?>assets/img/logo-vscode.png" alt="" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="tulisan-saya">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title-section">Artikel</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="subtitle-section">
                            Tidak hanya membuat aplikasi, saya juga membuat artikel mengenai
                            pemrogramman maupun yang lainnya yang mungkin bermanfaat
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($posts as $post) : ?>
                        <div class="col-md-4 mt-3">
                            <div class="c-card-artikel">
                                <a href="<?= url . 'detail_artikel.php?id=' . $post['id'] ?>">
                                    <img src="<?= $post['gambar'] ?>" alt="" class="img-fluid" />
                                    <h2 class="title">
                                        <?= $post['judul'] ?>
                                    </h2>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="text-center">
                            <a href="<?= url . 'artikel.php' ?>" class="btn btn-lihat-semua">Lihat Semua</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="tertarik-dengan-saya">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title-section">Tertarik Dengan Saya?</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="subtitle-section">
                            Jika anda tertarik dengan saya untuk bekerja sama ataupun ingin
                            membuat aplikasi, silahkan hubungi kontak saya dibawah ini.
                        </div>
                    </div>
                </div>
                <div class="row mt-3 justify-content-center">
                    <div class="col-md-2 col-3">
                        <div class="text-center">
                            <a href="https://wa.me/<?= $setting['nomor_wa'] ?>" class="sm" target="_blank">
                                <img src="<?= url ?>assets/img/logo-whatsapp.png" alt="" class="img-fluid" />
                                <!-- {{-- <h2>{{ $setting->whatsapp_number }}</h2> --}} -->
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2 col-3">
                        <div class="text-center">
                            <a href="<?= $setting['link_instagram'] ?>" target="_blank" class="sm">
                                <img src="<?= url ?>assets/img/logo-instagram.png" alt="" class="img-fluid" />
                                <!-- {{-- <h2>@agung_uf21</h2> --}} -->
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2 col-3">
                        <div class="text-center">
                            <a href="<?= $setting['link_facebook'] ?>" target="_blank" class="sm">
                                <img src="<?= url ?>assets/img/logo-facebook.png" alt="" class="img-fluid" />
                                <!-- {{-- <h2>Mas Agung</h2> --}} -->
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2 col-3">
                        <div class="text-center">
                            <a href="mailto:<?= $setting['email'] ?>" target="_blank" class="sm">
                                <img src="<?= url ?>assets/img/logo-email.png" alt="" class="img-fluid" />
                                <!-- {{-- <h2>{{ $setting->email }}</h2> --}} -->
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <?php include_once 'layouts/footer.php' ?>
    <?php include_once 'layouts/icon_whatsapp.php' ?>

</body>

</html>
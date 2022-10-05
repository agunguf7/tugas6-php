<?php

require_once 'config/app.php';
require_once 'config/function.php';

$id = $_GET['id'];
$project = getProjectById($id);
$projects = getProjectLimit();
?>

<!DOCTYPE html>
<html lang="en">
<?php include_once 'layouts/head.php' ?>
<link rel="stylesheet" href="assets/lightbox2-2.11.3/dist/css/lightbox.min.css">

<body>

    <?php include_once 'layouts/navbar.php' ?>

    <section id="content">
        <section id="detail-blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= url ?>">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?= url . 'portofolio.php' ?>">Portofolio</a></li>
                                <li class="breadcrumb-item"><a href="#"><?= $project['kategori'] ?></a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <?= $project['nama'] ?>
                                </li>
                            </ol>
                        </nav>
                        <img src="<?= $project['gambar'] ?>" alt="<?= $project['nama'] ?>" class="img-fluid w-100 image-title" />
                        <h1 class="blog-title"><?= $project['nama'] ?></h1>
                        <div class="blog-info">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="{{ route('about">
                                        <i class="fas fa-user"></i> <span>Agung Kusaeri</span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ route('project-categories.project',$project->category->slu">
                                        <i class="fas fa-tag"></i> <span><?= $project['kategori'] ?></span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)">
                                        <i class="fas fa-calendar-alt"></i>
                                        <span><?= $project['dibuat'] ?></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="blog-deskripsi text-justify">
                        <?= $project['deskripsi'] ?>
                        </div>
                        <div class="portofolio-galeri mt-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5>Galeri Foto</h5>
                                </div>
                            </div>
                            <div class="row">
                              <?php foreach ($galleries as $gallery) : ?>
                                <div class="col-md-3 col-6">
                                    <a class="img-fluid" href="<?= $gallery['gambar'] ?>" data-lightbox="example-set" data-title="<?= $gallery['nama'] ?>">
                                        <img class="example-image mb-3 img-fluid" src="<?= $gallery['gambar'] ?>" alt />
                                    </a>
                                </div>
                              <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="blog-bagikan mt-5">
                            <h5 class="mb-3">Bagikan Ke</h5>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" onclick="alert('Fitur Belum Selesai!')">
                                        <img src="assets/img/logo-whatsapp.png" alt="" class="img-fluid" />
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" onclick="alert('Fitur Belum Selesai!')">
                                        <img src="assets/img/logo-facebook.png" alt="" class="img-fluid" />
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" onclick="alert('Fitur Belum Selesai!')">
                                        <img src="assets/img/logo-email.png" alt="" class="img-fluid" />
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" onclick="alert('Fitur Belum Selesai!')">
                                        <img src="assets/img/logo-print.png" alt="" class="img-fluid" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="blog-tags mt-5">
                            <h5>Tags :</h5>
                            <ul class="list-inline">
                               <?php foreach ($tag_portofolios as $tp) : ?>
                                <li class="list-inline-item">
                                    <a href="#" class="badge badge-secondary"><?= $tp ?></a>
                                </li>
                               <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                    <aside class="mt-3">
                        <div class="sidebar-heading">
                        <h2>Portofolio Terbaru</h2>
                        </div>
                        <?php foreach($projects as $project) : ?>
                            <div class="row">
                                <div class="col-md-3 col-3">
                                <a href="<?= url . 'detail_portofolio.php' ?>">
                                    <img
                                    src="<?= $project['gambar'] ?>"
                                    alt="<?= $project['nama'] ?>"
                                    class="img-fluid sidebar-item-image"
                                    />
                                </a>
                                </div>
                                <div class="col-md-9 col-9 align-self-center">
                                <a href="<?= url . 'detail_portofolio.php?id=' . $project['id'] ?>" class="sidebar-item-name">
                                    <h2><?= $project['nama'] ?></h2>
                                </a>
                                </div>
                            </div>
                            <hr>
                        <?php endforeach; ?>
                    </aside>
            </div>
        </section>
    </section>

    <?php include_once 'layouts/footer.php' ?>
    <?php include_once 'layouts/icon_whatsapp.php' ?>
    <script src="assets/lightbox2-2.11.3/dist/js/lightbox-plus-jquery.min.js"></script>
    <script>
        lightbox.option({
            'resizeDuration': 100,
            'wrapAround': true,
            'fitImagesInViewport': true
        })
    </script>
</body>

</html>
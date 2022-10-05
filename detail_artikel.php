<?php

require_once 'config/app.php';
require_once 'config/function.php';

$id = $_GET['id'];
$post = getPostById($id);
$postLimits = getPostLimit();
?>

<!DOCTYPE html>
<html lang="en">
<?php include_once 'layouts/head.php' ?>

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
                                <li class="breadcrumb-item"><a href="#"> <?= $post['kategori'] ?></a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <?= $post['judul'] ?>
                                </li>
                            </ol>
                        </nav>
                        <img src=" <?= $post['gambar'] ?>" alt="" class="img-fluid w-100 image-title" />
                        <h1 class="blog-title">
                        <?= $post['judul'] ?>
                        </h1>
                        <div class="blog-info">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="">
                                        <i class="fas fa-user"></i> <span> <?= $post['penulis'] ?></span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ route('categories.post',$post->category->slug) }}">
                                        <i class="fas fa-tag"></i> <span> <?= $post['kategori'] ?></span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="">
                                        <i class="fas fa-calendar-alt"></i>
                                        <span> <?= $post['tanggal_dibuat'] ?></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="blog-deskripsi text-justify">
                        <?= $post['deskripsi'] ?>
                        </div>
                        <div class="blog-bagikan mt-5">
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
                        <section id="artikel-terkait" class="mt-5">
                            <div class="row">
                                <div class="col-md-7">
                                    <h4 class="section-title">Artikel Terkait</h4>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <?php foreach($postLimits as $pl) : ?>
                                    <div class="col-md-4 mt-3">
                                    <div class="c-card-artikel">
                                        <a href="<?= url . 'detail_artikel.php?id=' . $pl['id'] ?>">
                                            <img src="<?= $pl['gambar'] ?>" alt="<?= $pl['judul'] ?>" class="img-fluid" />
                                            <h2 class="title">
                                                <?= $pl['judul'] ?>
                                            </h2>
                                        </a>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </section>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </section>
    </section>

    <?php include_once 'layouts/footer.php' ?>
    <?php include_once 'layouts/icon_whatsapp.php' ?>

</body>

</html>
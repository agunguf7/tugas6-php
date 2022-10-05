<?php

require_once 'config/app.php';
require_once 'config/function.php';

$projects = getAllProject();
?>

<!DOCTYPE html>
<html lang="en">
<?php include_once 'layouts/head.php' ?>

<body>

    <?php include_once 'layouts/navbar.php' ?>

    <section id="content">
        <section id="portofolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-8"></div>
                    <div class="col-md-4 order-md-0 order-1">
                        <form action="#" class="d-inline form-pencarian" id="">
                            <div class="form-row">
                                <div class="form-group col-md-9">
                                    <input type="text" class="form-control" name="q" placeholder="Cari Program" value="" />
                                </div>
                                <div class="form-group col-md-3">
                                    <button class="btn btn-block">Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-4">
                    <?php foreach($projects as $project) : ?>
                        <div class="col-md-4 mt-3">
                        <div class="c-card-portofolio1">
                            <a href="<?= url . 'detail_portofolio.php?id=' . $project['id'] ?>">
                                <span class="label-kategori-1" title="Kategori <?= $project['kategori'] ?>"><?= $project['kategori'] ?></span>
                            </a>
                            <a href="<?= url . 'detail_portofolio.php?id=' . $project['id'] ?>">
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
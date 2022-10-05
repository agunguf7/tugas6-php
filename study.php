<?php

require_once 'config/app.php';
require_once 'config/function.php';
$studies = getAllStudy();

?>

<!DOCTYPE html>
<html lang="en">
<?php include_once 'layouts/head.php' ?>

<body>

    <?php include_once 'layouts/navbar.php' ?>

    <section id="content">
        <section id="kontak">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title mb-5">Study Saya</h2>
                    </div>
                </div>
                <?php foreach($studies as $study) : ?>
                <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5><?= $study['nama'] ?></h5>
                                <h6><?= $study['jurusan'] ?></h6>
                                <p><?= $study['tahun_masuk'] . ' sampai ' . $study['tahun_keluar'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
    </section>

    <?php include_once 'layouts/footer.php' ?>
    <?php include_once 'layouts/icon_whatsapp.php' ?>

</body>

</html>
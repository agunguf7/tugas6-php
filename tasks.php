<?php

require_once 'config/app.php';
require_once 'config/function.php';

$tasks = getAllTask();

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
                        <h2 class="section-title mb-5">Task Saya</h2>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($tasks as $task) : ?>
                        <div class="col-md-3">
                            <a href="<?= url . 'detail_task.php?id=' . $task['id'] . '&nama=' . $task['nama'] ?>" class="text-dark text-decoration-none">
                            <div class="card mb-2">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="<?= $task['gambar'] ?>" alt="" class="img-fluid mb-2">
                                        <h6 class="text-center mt-3"><?= $task['nama'] ?></h6>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
        </section>
    </section>

    <?php include_once 'layouts/footer.php' ?>
    <?php include_once 'layouts/icon_whatsapp.php' ?>

</body>

</html>
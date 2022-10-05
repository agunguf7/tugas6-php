<?php

require_once 'config/app.php';
require_once 'config/function.php';

$posts = getAllPost();
?>

<!DOCTYPE html>
<html lang="en">
<?php include_once 'layouts/head.php' ?>

<body>

    <?php include_once 'layouts/navbar.php' ?>

    <section id="content">
    <section id="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-4">
          <form action="" class="d-inline form-pencarian" id="">
            <div class="form-row">
              <div class="form-group col-md-9">
                <input
                  type="text"
                  class="form-control" name="q"
                  placeholder="Cari Judul Artikel"
                />
              </div>
              <div class="form-group col-md-3">
                <button class="btn btn-block">Cari</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
       <?php foreach($posts as $post) : ?>
        <div class="col-md-4 mt-3">
            <div class="c-card-artikel">
              <a href="<?= url . 'detail_artikel.php?id=' . $post['id'] ?>">
                <img
                  src="<?= $post['gambar'] ?>"
                  alt="<?= $post['judul'] ?>"
                  class="img-fluid"
                />
                <h2 class="title">
                 <?= $post['judul'] ?>
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
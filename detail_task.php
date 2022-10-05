<?php

require_once 'config/app.php';
require_once 'config/function.php';

$id = $_GET['id'];
$nama = $_GET['nama'];
$data_tugas = getTugasByTask($id);

?>

<!DOCTYPE html>
<html lang="en">
<?php include_once 'layouts/head.php' ?>

<body>

    <?php include_once 'layouts/navbar.php' ?>

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-4">Tugas Task <?= $nama ?></h5>
                            <ul class="list-group">
                                <?php foreach($data_tugas as $tugas) : ?>
                                    <li class="list-group-item d-flex justify-content-between">
                                    <span><?= $tugas['nama'] . ' - Pertemuan ' . $tugas['pertemuan'] ?></span>
                                    <span>
                                        <button class="btn btn-sm btn-warning btnDetail text-white" data-gambar="<?= $tugas['gambar'] ?>" data-nama="<?= $tugas['nama'] ?>"><i class="fas fa-eye"></i> Lihat</button>
                                    </span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="" class="img-fluid w-100 imageModal" alt="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

    <?php include_once 'layouts/footer.php' ?>
    <?php include_once 'layouts/icon_whatsapp.php' ?>
                                
    <script>
        $(function(){
            $('body').on('click','.btnDetail', function(){
                let gambar = $(this).data('gambar');
                let nama = $(this).data('nama');
               $('#modalDetail .modal-title').text(`Gambar Tugas ${nama}`);
               $('#modalDetail .imageModal').attr('src',gambar);
               $('#modalDetail').modal('show');
            })
        })
    </script>
</body>

</html>
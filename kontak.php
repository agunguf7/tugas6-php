<?php

require_once 'config/app.php';

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
                        <h2 class="section-title mb-5">Kontak Saya</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <p>
                            Apabila anda berminat bekerja sama dengan saya, ataupun lagi
                            mencari kandidat seorang Web Developer, anda bisa menghubungi
                            saya dibawah ini :
                        </p>
                        <div>
                            <h6>Alamat</h6>
                            <p>

                               <?= $setting['alamat'] ?>
                            </p>
                            <table class="table table-borderless">
                                <tr>
                                    <td class="my-0 pl-0 py-0">Email</td>
                                    <td class="my-0 pl-0 py-0">:</td>
                                    <td class="my-0 pl-0 py-0"> <?= $setting['email'] ?></td>
                                </tr>
                                <tr>
                                    <td class="my-0 pl-0 py-0">No. Whatsapp</td>
                                    <td class="my-0 pl-0 py-0">:</td>
                                    <td class="my-0 pl-0 py-0"> <?= $setting['nomor_wa'] ?></td>
                                </tr>
                            </table>
                        </div>
                        <div>
                            <h6 class="mb-3">Sosial Media</h6>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href=" <?= $setting['link_facebook'] ?>" target="_blank">
                                        <img src="assets/img/logo-facebook.png" alt="">
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href=" <?= $setting['link_instagram'] ?>">
                                        <img src="assets/img/logo-instagram.png" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <form action="#" method="post">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" name="name" class="form-control" placeholder="Masukan Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Masukan Alamat Email">
                            </div>
                            <div class="form-group">
                                <label for="subject">Subjek</label>
                                <input type="text" name="subject" class="form-control" placeholder="Masukan Subjek Pesan">
                            </div>
                            <div class="form-group">
                                <label for="text">Pesan</label>
                                <textarea name="text" id="text" cols="30" rows="3" class="form-control" placeholder="Masukan Isi Pesan"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn float-right">Kirim Pesan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <?php include_once 'layouts/footer.php' ?>
    <?php include_once 'layouts/icon_whatsapp.php' ?>

</body>

</html>
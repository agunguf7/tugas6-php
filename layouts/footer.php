<footer>
    <div class="footer-atas">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Kontak Saya</h2>
            <table class="table table-borderless">
              <tr>
                <td class="my-0 py-1">Email</td>
                <td class="my-0 py-1">:</td>
                <td class="my-0 py-1"><?= $setting['email'] ?></td>
              </tr>
              <tr>
                <td class="my-0 py-1">No. Whatsapp</td>
                <td class="my-0 py-1">:</td>
                <td class="my-0 py-1"><?= $setting['nomor_wa'] ?></td>
              </tr>
              <tr>
                <td class="my-0 py-1">Facebook</td>
                <td class="my-0 py-1">:</td>
                <td class="my-0 py-1">Mas Agung</td>
              </tr>
              <tr>
                <td class="my-0 py-1">Instagram</td>
                <td class="my-0 py-1">:</td>
                <td class="my-0 py-1">@agung_uf21</td>
              </tr>
            </table>
          </div>
          <div class="col-md-6">
            <h2>Jalan Pintas</h2>
            <ul class="list-unstyled">
              <li class="list-item my-1">
                <a href="<?= url ?>">Home</a>
              </li>
              <li class="list-item my-1">
                <a href="<?= url . 'artikel.php' ?>">Blog</a>
              </li>
              <li class="list-item my-1">
                <a href="<?= url . 'portofolio.php' ?>">Portofolio</a>
              </li>
              <li class="list-item my-1">
                <a href="<?= url . 'kontak.php' ?>">Kontak</a>
              </li>
              <li class="list-item my-1">
                <a href="<?= url . 'tentang.php' ?>">Tentang</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bawah">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="text-center">
                      <p class="p-0 m-0">Build By Agung Kusaeri</p>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </footer>

  <?php require_once 'script.php' ?>

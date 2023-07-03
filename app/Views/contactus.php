<?= $this->extend('Layout/header') ?>

<?= $this->section('header') ?>
<title>Contact us</title>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
<div class=" py-4">
  <main>
    <div class="p-5 mb-4 shadow-sm " style="background-color:mediumseagreen;">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold judul">Kontak Kami</h1>
        <p class="col-md-8 fs-4 tulisan">Kami siap membantu Anda</p>
      </div>
    </div>
    <div class=" py-4 banner" style="background-color:seagreen;">

      <body>
        <div class="footer-top text-light">
          <div class="container">
            <div class="row">
              <div class="col-md-3 mt-4 footer-about wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                <p>
                  Kami adalah perusahaan muda yang selalu mencari ide-ide baru dan kreatif untuk membantu Anda dengan produk kami dalam pekerjaan sehari-hari Anda. AAAMIIINNN
                </p>
              </div>
              <div class="col-md-4 offset-md-1 footer-contact wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                <h3>Contacts</h3>
                <p><i class="fas fa-map-marker-alt"></i>Ridwanullah : Malang</p>
                <p><i class="fas fa-map-marker-alt"></i>Dewana Firman : Jakarta</p>
                <p><i class="fas fa-map-marker-alt"></i>Amin : Bandung</p>
                <p><i class="fas fa-phone"></i> Whatshap (08977676552)</p>
                <p><i class="fas fa-envelope"></i> Email: hello@domain.com</a></p>
              </div>
              <div class="col-md-4 footer-links wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                <div class="row">
                  <div class="col">
                    <h3>Social</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <p><i class="fas fa-map-marker-alt"></i>Ig : @uasgis</p>
                    <p><i class="fas fa-map-marker-alt"></i>Twitter : @uasgis</p>
                    <p><i class="fas fa-map-marker-alt"></i>Facebook : @uasgis</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </body>
    </div>
    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 2022 SPBU Guide</p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
      </ul>
    </footer>
    <?= $this->endSection() ?>
  </main>
</div>
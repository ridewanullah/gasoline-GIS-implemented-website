<?= $this->extend('Layout/header') ?>

<?= $this->section('header') ?>
<title>Home</title>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
<main>
  <div class=" py-4">
    <div class="p-5 mb-4 rounded-3 shadow-sm " style="background-color:mediumseagreen;">
      <div class="container-fluid py-5">
        <h1 class="display-5 text-white fw-bold judul">SPBU GUIDE</h1>
        <p class="col-md-8 fs-5 text-white tulisan">Kami membantu dengan sepenuh hati untuk memberikan panduan ke SPBU terdekat Anda</p>
        <a class="btn btn-outline-light btn-lg" type="button" href="<?= base_url('/viewmap'); ?>/">Find Now</a>
      </div>
    </div>

    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-dark rounded-3" style="background-color:chartreuse;">
          <h2>Learn us</h2>
          <a class="btn btn-outline-dark" type="button" href="<?= base_url('/learn'); ?>/">Learn</a>
        </div>
      </div>

      <div class="col-md-6">
        <div class="h-100 p-5 border text-dark rounded-3" style="background-color:chartreuse;">
          <h2>Contact Us</h2>
          <a class="btn btn-outline-dark" type="button" href="<?= base_url('/contact'); ?>/">Contact Us</a>
        </div>
      </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 2022 SPBU Guide</p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
      </ul>
    </footer>
  </div>
</main>
<?= $this->endSection() ?>
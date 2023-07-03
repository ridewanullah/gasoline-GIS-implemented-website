<?= $this->extend('Layout/headeradmin') ?>

<?= $this->section('header') ?>
<title>Update</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container py-4">
  <main>

    <div class="p-5 mb-4 bg-light rounded-3 shadow-sm banner">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold judul">Edit Data Diri Pemberi Zakat</h1>
        <p class="col-md-8 fs-4 tulisan">Berikut Merupakan form Edit data diri pemberi Zakat</p>
      </div>
    </div>

    <form action="<?= base_url('/update') ?>" method="Post">


      <input type="hidden" class="form-control" id="id" name="id" value="<?= $datadiri['id'] ?>">

      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" value="<?= $datadiri['nama'] ?>" name="nama">
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">alamat</label>
        <input type="text" class="form-control" id="alamat" value="<?= $datadiri['alamat'] ?>" name="alamat">
      </div>
      <div class="mb-3">
        <label for="lat" class="form-label">Latitude</label>
        <input type="text" class="form-control" id="lat" value="<?= $datadiri['lat'] ?>" name="lat">
      </div>
      <div class="mb-3">
        <label for="long" class="form-label">Longitude</label>
        <input type="text" class="form-control" id="long" value="<?= $datadiri['long'] ?>" name="long">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 2017–2022 Zakatkan</p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
      </ul>
    </footer>
</div>
<?= $this->endSection() ?>
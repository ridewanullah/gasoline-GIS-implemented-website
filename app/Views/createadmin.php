<?= $this->extend('Layout/headeradmin') ?>

<?= $this->section('header') ?>
<title>Insert</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container py-4">
  <main>

    <div class="p-5 mb-4 bg-light rounded-3 shadow-sm banner">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold judul">Data SPBU</h1>
      </div>
    </div>

    <form action="<?= base_url('/saveadmin') ?>" method="Post">

      <div class="mb-3">
        <label for="id" class="form-label">ID</label>
        <input type="text" class="form-control" id="id" name="id">
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama">
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat">
      </div>
      <div class="mb-3">
        <label for="lat" class="form-label">Latitude</label>
        <input type="text" class="form-control" id="lat" name="lat">
      </div>
      <div class="mb-3">
        <label for="long" class="form-label">Longitude</label>
        <input type="text" class="form-control" id="long" name="long">
      </div>

      <button type="submit" class="btn btn-primary mb-5">Submit</button>
    </form>

    <form>
      <div class="card card-info card-outline">
        <div class="card-header">
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Latitude</th>
              <th>Longitude</th>
            </tr>
            <?php foreach ($datadiri as $item) : ?>
              <tr>
                <td><?= $item['id']; ?></td>
                <td><?= $item['nama']; ?></td>
                <td><?= $item['alamat']; ?></td>
                <td><?= $item['lat']; ?></td>
                <td><?= $item['long']; ?></td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>
      </div>
    </form>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 2022 SPBU Guide</p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
      </ul>
    </footer>
</div>
<?= $this->endSection() ?>
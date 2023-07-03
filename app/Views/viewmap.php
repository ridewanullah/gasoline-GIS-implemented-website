<?= $this->extend('Layout/header') ?>

<?= $this->section('header') ?>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

<title>View Map</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container py-4">
  <main>
    <div class="p-5 mb-4 rounded-3 shadow-sm">

      <div id="map" style="width: auto; height: 600px;"></div>

      <script>
        var map = L.map('map').setView([-7.9839, 112.621], 13);

        var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
          maxZoom: 19,
          attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        <?php foreach ($datadiri as $item) : ?>
          var marker = L.marker([<?= $item['lat']; ?>, <?= $item['long']; ?>]).addTo(map);
        <?php endforeach; ?>
      </script>
    </div>

    <form>
      <div class="card card-info card-outline">
        <div class="card-header">
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <tr>
              <th>NO.</th>
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
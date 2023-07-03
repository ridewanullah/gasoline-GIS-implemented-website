<?= $this->extend('Layout/headeradmin') ?>

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
                var map = L.map('map').setView([-7.9839, 112.621], 12);

                var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                }).addTo(map);

                <?php foreach ($datadiri as $item) : ?>
                    var marker = L.marker([<?= $item['lat']; ?>, <?= $item['long']; ?>]).addTo(map)
                        .bindPopup("<p>ID : <?= $item['id']; ?></p><p>lat : <?= $item['lat']; ?></p><p> long : <?= $item['long']; ?></p>");
                <?php endforeach; ?>
            </script>
        </div>

        <div class="content">
            <div class="card card-info card-outline">
                <div class="card-header">
                    <div class="card-tools">
                        <a href="<?= base_url('/createadmin'); ?>/" class="btn btn-success">Tambah Data<i class="fas fa-plus-square"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>NO.</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                        </tr>
                        <?php foreach ($datadiri as $item) : ?>
                            <tr>
                                <td><?= $item['id']; ?></td>
                                <td><?= $item['nama']; ?></td>
                                <td><?= $item['alamat']; ?></td>
                                <td>
                                    <a href="<?= base_url('menu/delete') ?>/<?= $item['id']; ?>" class="btn btn-danger">Delete <i class="fas fa-plus-square"></i></a>
                                    <a href="<?= base_url('menu/find') ?>/<?= $item['id']; ?>" class="btn btn-info">Update <i class="fas fa-plus-square"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
    </main>

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
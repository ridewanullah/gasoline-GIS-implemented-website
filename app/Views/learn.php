<?= $this->extend('Layout/header') ?>

<?= $this->section('header') ?>
<title>Learn us</title>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
<div class="py-4">
    <main>
        <div class="p-5 mb-4 shadow-sm " style="background-color:mediumseagreen;">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold judul">SPBU GUIDE</h1>
                <p class="col-md-8 fs-4 tulisan">Website GIS yang bertujuan untuk membantu user menemukan SPBU terdekat di Kota Malang</p>
            </div>
        </div>
        <div class="p-3 mb-4 rounded-3 shadow-sm" style="background-color:mediumseagreen;">
            <div class="container-fluid py-10">
                <p class="col fs-4 tulisanbiasa">Final Exam of GIS Class</p>
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
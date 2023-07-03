<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= base_url(); ?>leaflet/leaflet.css">
  <script src="<?= base_url(); ?>leaflet/leaflet.js"></script>
  <style {csp-style-nonce}>
    body {}

    .banner {
      background-image: linear-gradient(rgba(0, 0, 0, 0.5),
          rgba(0, 0, 0, 0.5)), url('https://www.kpmi.or.id/assets/images/artikel/7e0e9b1d-d7fd-4cc1-895f-2825009dbc91/ae502f0e3eaf29979f20b23834d2787b.jpg');
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.07),
        0 2px 4px rgba(0, 0, 0, 0.07),
        0 4px 8px rgba(0, 0, 0, 0.07),
        0 8px 16px rgba(0, 0, 0, 0.07),
        0 16px 32px rgba(0, 0, 0, 0.07),
        0 32px 64px rgba(0, 0, 0, 0.07);
    }

    .containerr {
      background-color: rgba(255, 255, 255, .15);
      backdrop-filter: blur(5px);
    }

    .judul {
      font-weight: bold;
      color: white;
    }

    .tulisan {
      font-weight: bold;
      color: white;
    }

    .tulisanbiasa {
      font-weight: lighter;
      color: white;
    }

    .navbar-brand {
      font-family: sans-serif;
      font-size: 32px;
    }

    @media (min-width: 992px) {
      .nav-link {
        text-transform: capitalize;
        margin-right: 30px;
        font-family: sans-serif;
      }

      .nav-link:hover {
        border-bottom: 3px solid #0b63dc;
        margin-bottom: -3px;
      }
    }
  </style>
  <link rel="stylesheet" href="<?= base_url('handling.css'); ?>">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <?= $this->renderSection('header') ?>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light shadow-sm" style="background-color:palegreen;">
    <div class="container-fluid">
      <a class="navbar-brand">SPBU GIUDE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= base_url('/mapadmin'); ?>/">Database</a>
          </li>
        </ul>
      </div>
      <a href="<?= base_url('login/logout'); ?>/" class="btn btn-outline-danger">Logout</a>
    </div>
  </nav>

  <?= $this->renderSection('content') ?>
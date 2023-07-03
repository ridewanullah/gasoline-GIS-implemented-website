<main>
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


        <!-- Css handler -->
        <style {csp-style-nonce}>
            @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Viga&display=swap');

            select {
                width: 100%;
                border: 1px solid;
                border-radius: 05px;
                box-shadow: 1px 1px 2px 1px grey;
                padding: 10px 15px 10px;

            }

            .navbar-brand {
                font-family: Viga;
                font-size: 32px;
            }

            .jumbotron {
                background-image: url(https://res.cloudinary.com/yourmechanic/image/upload/dpr_auto,f_auto,q_auto/v1/article_images/RS_1_4_Gas_Tank);
                background-size: cover;
                height: 800px;
                text-align: center;
            }

            .login {
                padding: 10px 16px;
                font-size: 18px;
            }


            .jumbotron .display-4 {
                color: white;
                margin-top: 150px;
                font-weight: 200px;
                text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.9);
                font-size: 62px;
            }

            body {
                font-family: 'Poppins', sans-serif;
                background: rgb(2, 0, 36);
                background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 52%, rgba(0, 212, 255, 1) 100%);
            }

            .content {
                margin: 8%;
                background-color: #fff;
                padding: 4rem 1rem 4rem 1rem;
                box-shadow: 0 0 5px 5px rgba(0, 0, 0, .05);

            }

            .signin-text {
                font-style: normal;
                font-weight: 600;
            }

            .form-control {
                display: block;
                width: 100%;
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.5;
                border-color: #00ac96;
                border-style: solid;
                border-width: 0 0 1px 0;
                padding: 0px;
                color: #496057;
                height: auto;
                border-radius: 0;
                background-color: #fff;
                padding-bottom: 20px;
            }

            @media (min-width: 992px) {
                .nav-link {
                    text-transform: uppercase;
                    margin-right: 30px;
                    font-family: Viga;
                }

                .nav-link:hover {
                    border-bottom: 3px solid #0b63dc;
                    margin-bottom: -3px;
                }
            }
        </style>
        <link rel="stylesheet" href="<?= base_url('handling.css'); ?>">
        <title>SPBU Guide</title>
    </head>

    <body>
        <!--Awal Navbar-->
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Zakatkan</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="btn btn-primary" href="/login">Login</a>
                </div>
            </div>
        </div>

    </nav> -->
        <!--Akhir Navbar-->

        <!-- Awal Jumbotron -->
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-4 text-dark">Welcome To SPBU GUIDE</h1>
                <a href="<?= base_url('/home') ?>" class="btn login btn-dark">Start</a>
            </div>
        </div>


        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
    </body>

    </html>
</main>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="handling.css">
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
            background-image: url(1209573.jpg);
            background-size: cover;
            height: 900px;
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
            margin-bottom: 30px;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 52%, rgba(0, 212, 255, 1) 100%);
        }

        .gambar3 {
            background-image: url(https://static.vecteezy.com/system/resources/thumbnails/005/879/539/small_2x/cloud-computing-modern-flat-concept-for-web-banner-design-man-enters-password-and-login-to-access-cloud-storage-for-uploading-and-processing-files-illustration-with-isolated-people-scene-free-vector.jpg);
            background-size: cover;
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
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row content">
            <img class="gambar3 gambar3-fluid col-md-6">
            <!-- <div class="gambar3 gambar3-fluid">
            </div> -->
            <div class="col-md-6">
                <h3 class="signin-text mb-3"> Login </h3>
                <form action="" method="POST">
                    <?php if (session()->getFlashdata('error')) { ?>
                        <div class="alert alert-danger">
                            <?php echo session()->getFlashdata('error') ?>
                        </div>
                    <?php } ?>
                    <div class="mb-3">
                        <label for="inputUsername">Username</label>
                        <input type="text" name="member_username" class="form-control" id="inputUsername" placeholder="......">
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword">Password</label>
                        <input type="password" name="member_password" class="form-control" id="inputPassword" placeholder="......">
                    </div>
                    <button type="submit" name="login" class="btn btn-outline-success" value="LOGIN">Login</button>
                </form>
                <div class="text-center">
                    <a class="small text-dark" href="<?= base_url('/home') ?>">Back to Home</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>
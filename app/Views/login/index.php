<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AMACO | Rental PS</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>/dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/dashboard/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/dashboard/css/style.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="<?= base_url(); ?>/dashboard/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body>
    <div class="row m-0">
        <div class="col-6 hero">
            <div class="row">
                <div class="col-12">
                    <img src="<?= base_url() ?>/dashboard/img/ps-logo.png" class="img-fluid logo-header" alt="logo">
                </div>
                <div class="col-12">
                    <img src="<?= base_url() ?>/dashboard/img/ps-logo.png" class="img-fluid hero-logo" alt="logo">
                    <div class="overlay"></div>
                </div>
            </div>
        </div>
        <div class="col-6 login d-flex justify-content-center">
            <div class="form w-100">
                <h1>LOGIN</h1>
                <p>Rental Playstation Amaco</p>
                <?= view('Myth\Auth\Views\_message_block') ?>
                <div class="col-12">
                    <form action="<?= url_to('login') ?>" method="POST">
                    <?= csrf_field(); ?>
                        <div class="form-group row">
                            <div class="col-sm-8">
                                <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" id="username" placeholder="Username" name="login">
                                    <div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-8">
                                <input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" id="password" placeholder="Password" name="password">
                                    <div class="invalid-feedback">
								<?= session('errors.password') ?>
							</div>
                            </div>
                        </div>
                        <?php if ($config->allowRemembering): ?>
                        <div class="form-check">
                            <input class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?> type="checkbox" name="remember" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Remember Me
                            </label>
                        </div>
                        <?php endif; ?>
                        <div class="form-group row d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Log In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>









    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>/dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>/dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>/dashboard/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url(); ?>/dashboard/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>/dashboard/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url(); ?>/dashboard/js/demo/datatables-demo.js"></script>


    <!-- <script src="<?= base_url(); ?>/dashboard/js/jquery-1.11.2.min.js"></script> -->
    <script src="<?= base_url(); ?>/dashboard/js/script.js"></script>

</body>

</html>
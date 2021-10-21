<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>/public/sbadmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>/public/sbadmin/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/public/css/style.css">
    <title><?= $title; ?></title>
</head>

<body id="page-top">

    <div id="wrapper">

        <!-- Load sidebar  -->
        <?= $this->include('layout/sidebar'); ?>

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Load navbar -->
                <?= $this->include('layout/navbar'); ?>

                <!-- Load content -->
                <?= $this->renderSection('content'); ?>
            </div>

            <!-- Load footer -->
            <?= $this->include('layout/footer'); ?>

        </div>


    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>/public/sbadmin/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>/public/sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>/public/sbadmin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>/public/sbadmin/js/sb-admin-2.min.js"></script>
    <script src="<?php echo base_url() ?>/public/js/script.js"></script>


</body>

</html>
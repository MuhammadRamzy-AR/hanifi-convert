<!doctype html>
<html lang="en">

<head>
    <?= $this->include('_parts/head'); ?>
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


</body>

</html>
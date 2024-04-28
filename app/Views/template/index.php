<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title><?= $title; ?></title>


    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/uliya/css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url(); ?>/uliya/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="<?= base_url(); ?>/uliya/css/responsive.css" rel="stylesheet" />
</head>

<body>

    <div class="hero_area">
        <!-- header section strats -->
        <?= $this->include('template/navbar') ?>
        <!-- end header section -->
        <!-- slider section -->
        <?= $this->include('template/slider') ?>
        <!-- end slider section -->
    </div>

    <!-- about section -->
    <?= $this->renderSection('content') ?>
    <!-- end client section -->


    <!-- info section -->
    <?= $this->include('template/footer') ?>
    <!-- footer section -->

    <script type="text/javascript" src="<?= base_url(); ?>/uliya/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>/uliya/js/bootstrap.js"></script>

</body>

</html>
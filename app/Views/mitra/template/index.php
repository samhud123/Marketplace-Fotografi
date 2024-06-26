<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="<?= base_url(); ?>/template/img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />

    <title><?= $title; ?></title>

    <link href="<?= base_url(); ?>/template/css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <!-- Start Sidebar -->
            <?= $this->include('/mitra/template/sidebar') ?>
            <!-- End Sidebar -->
        </nav>

        <div class="main">
            <!-- Start Navbar -->
            <?= $this->include('/mitra/template/navbar') ?>
            <!-- End Navbar -->

            <main class="content">
                <!-- Start Content -->
                <?= $this->renderSection('content') ?>
                <!-- End Content -->
            </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                &copy; <?= date("Y"); ?>
                                <a class="text-muted" href="/" target="_blank"><strong>FOTOGRAFI.</strong></a>
                                All rights reserved.
                            </p>
                        </div>
                        <!-- <div class="col-6 text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="<?= base_url(); ?>/template/js/app.js"></script>
</body>

</html>
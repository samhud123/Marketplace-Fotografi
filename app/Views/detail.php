<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>PHOTOGRAPHY</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="/o/checkout.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-info">
            <div class="container">
                <a href="/" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                        <circle cx="12" cy="13" r="4" />
                    </svg>
                    <strong>PHOTOGRAPHY</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-4 fw-bold">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/photo">Photo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/customer">My Account</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="mb-5">
        <div class="px-4 pt-5 my-5 text-center">
            <img class="d-block mx-auto mb-4" src="/img/mitra/<?= $service[0]['photo']; ?>" alt="" height="200">
            <span class="badge text-bg-primary mb-2">Rp <?= $service[0]['price']; ?></span>
            <h3 class="display-6 fw-bold text-body-emphasis"><?= $service[0]['name_service']; ?></h3>
            <p class="lead mb-4"><?= $service[0]['description']; ?></p>
            <div class="mb-4">
                <a href="/M/<?= $service[0]['id']; ?>" class="text-decoration-none">
                    <img src="/template/img/avatars/avatar.jpg" class="rounded-circle d-inline me-2" alt="" width="40">
                    <p class="d-inline fs-6"><?= $service[0]['nama']; ?></p>
                </a>
            </div>
            <a href="/order?service=<?= $service[0]['service_id']; ?>" class="btn btn-primary w-50">Order</a>
        </div>

        <hr>

        <!-- Page Content -->
        <div class="container">
            <div class="d-flex justify-content-center">
                <h1 class="fw-light text-lg-start mt-4 mb-5">Gallery Mitra</h1>
            </div>
            <div class="row text-center text-lg-start">
                <?php if (count($galleries) === 0) : ?>
                    <div class="text-center">
                        <h6>No Photo</h6>
                    </div>
                <?php else : ?>
                    <?php foreach ($galleries as $g) : ?>
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="#" class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="/img/gallery/<?= $g['photo']; ?>" alt="">
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>

        <?php foreach ($comments as $comment) : ?>
            <div class="container">
                <h3 class="fs-5 mb-4">Rating</h3>
                <div class="d-flex">
                    <img src="/img/customers/<?= $comment['foto']; ?>" alt="" width="40" height="40" class="rounded-circle me-2">
                    <div class="d-inline-block">
                        <p class="d-inline">@<?= $comment['username']; ?></p>
                        <?php $date = new DateTime($comment['created_at']); ?>
                        <p class="d-inline fs-7 ms-2 text-secondary"><?= $date->format('d F Y'); ?></p>
                        <p><?= $comment['nama']; ?></p>
                    </div>
                </div>
                <div class="d-inline-block">
                    <?php $rating = $comment['rating']; ?>
                    <?php for ($i = 1; $i <= $rating; $i++) : ?>
                        <i class="fas fa-star text-warning"></i>
                    <?php endfor; ?>
                    <p><?= $comment['comment']; ?></p>
                </div>
                <hr class="mt-0">
            </div>
        <?php endforeach; ?>
    </main>

    <footer class="text-white py-5 bg-dark">
        <div class="container">
            <a href="/" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24">
                    <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                    <circle cx="12" cy="13" r="4" />
                </svg>
                <strong>PHOTOGRAPHY</strong>
            </a>
            <p>
                &copy; <?= date('Y'); ?> All Rights Reserved By
                <a href="/">FOTOGRAFI</a>
            </p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="/o/checkout.js"></script>

</body>

</html>
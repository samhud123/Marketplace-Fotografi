<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Checkout</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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

<body class="bg-body-tertiary">
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

    <div class="container">
        <main>
            <div class="py-5 text-center">
                <h2>Checkout form</h2>
                <p class="lead">fill in the form below and make sure all the data is correct.</p>
            </div>

            <?php $disabled = false; ?>
            <?php if (user()->nama == null || user()->no_tlp == null || user()->alamat == null) : ?>
                <?php $disabled = true; ?>
                <div class="alert alert-warning" role="alert">
                    Complete your profile! <a href="/customer" class="fw-bold text-decoration-none">Go Setting!</a>
                </div>
            <?php endif ?>

            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <div class="card" style="width: 18rem;">
                        <img src="/img/mitra/<?= $service['photo']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <span class="badge text-bg-primary mb-2">Rp <?= $service['price']; ?></span>
                            <h5 class="card-title"><?= $service['name_service']; ?></h5>
                            <p class="card-text"><?= $service['description']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Form Data</h4>

                    <div class="row g-3">
                        <div class="col-12">
                            <label for="firstName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="<?= user()->nama; ?>" disabled>
                        </div>

                        <div class="col-12">
                            <label for="username" class="form-label">Username</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text">@</span>
                                <input type="text" class="form-control" id="username" placeholder="Username" value="<?= user()->username; ?>" disabled>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">No Hp</label>
                            <input type="tel" class="form-control" id="no_tlp" value="<?= user()->no_tlp; ?>" disabled>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com" value="<?= user()->email; ?>" disabled>
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" name="address" id="address" cols="30" rows="3" disabled><?= user()->alamat; ?></textarea>
                        </div>

                    </div>

                    <hr class="my-4">

                    <h4 class="mb-3">Order</h4>
                    <form action="/order" method="post">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="serviceId" value="<?= $service['service_id']; ?>">
                        <input type="hidden" name="mitraId" value="<?= $service['user_id']; ?>">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" class="form-control" name="date" id="date" required>
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" name="message" id="message" cols="30" rows="3"></textarea>
                            </div>
                            <div class="col-12">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" class="form-control" name="price" id="price" placeholder="" disabled value="Rp <?= $service['price']; ?>">
                            </div>
                            <button class="w-100 btn btn-primary btn-lg <?= $disabled == true ? 'disabled' : ''; ?>" type="submit">Order</button>
                        </div>
                    </form>

                </div>
        </main>

        <footer class="my-5 pt-5 text-body-secondary text-center text-small">
            <p class="mb-1">&copy; 2017–2024 Company Name</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="/o/checkout.js"></script>
</body>

</html>
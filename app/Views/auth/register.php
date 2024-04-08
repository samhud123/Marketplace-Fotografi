<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-up.html" />

    <title>Register</title>

    <link href="<?= base_url(); ?>/template/css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-4">
                            <h1 class="h2 mb-4"><?= lang('Auth.register') ?></h1>
                        </div>
                        
                        <?= view('Myth\Auth\Views\_message_block') ?>
                        
                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <form action="<?= url_to('register') ?>" method="post">
                                        <?= csrf_field() ?>
                                        <div class="mb-3">
                                            <label class="form-label">Username</label>
                                            <input class="form-control form-control-lg <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" type="text" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input class="form-control form-control-lg <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" type="email" name="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" />
                                            <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">No HP</label>
                                            <input class="form-control form-control-lg <?php if (session('errors.noHP')) : ?>is-invalid<?php endif ?>" type="tel" name="noHP" placeholder="No HP" value="<?= old('noHP') ?>" required />
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 mb-3">
                                                <label class="form-label">Password</label>
                                                <input class="form-control form-control-lg <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" type="password" name="password" placeholder="<?= lang('Auth.password') ?>" autocomplete="off" />
                                            </div>
                                            <div class="col-sm-6 mb-3">
                                                <label class="form-label"><?= lang('Auth.repeatPassword') ?></label>
                                                <input class="form-control form-control-lg <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" type="password" name="pass_confirm" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off" />
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Register as</label>
                                            <select class="form-select form-select-lg" name="role" aria-label="Default select example" required>
                                                <option selected disabled>-- Select Role --</option>
                                                <option value="Mitra">Mitra</option>
                                                <option value="Customer">Customer</option>
                                                <!-- <option value="Admin">Admin</option> -->
                                            </select>
                                        </div>
                                        <div class="text-center mt-3">
                                            <button type="submit" class="btn btn-lg btn-primary"><?= lang('Auth.register') ?></button>
                                        </div>
                                    </form>
                                    <hr>
                                    <p><?= lang('Auth.alreadyRegistered') ?> <a href="<?= url_to('login') ?>"><?= lang('Auth.signIn') ?></a></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="<?= base_url(); ?>/template/js/app.js"></script>

</body>

</html>
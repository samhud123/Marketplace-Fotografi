<?= $this->extend('mitra/template/index') ?>

<?= $this->section('content') ?>
<div class="container-fluid p-0">

    <div class="mb-3">
        <h1 class="h3 d-inline align-middle">Profile</h1>
    </div>
    <?php if (session()->get('message')) : ?>
        <div class="alert alert-success mb-4 text-success">
            <?= session()->get('message'); ?>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">Photo</h5>
                </div>
                <div class="card-body text-center">
                    <img src="/img/mitra/profile/<?= user()->foto; ?>" alt="Christina Mason" class="img-fluid rounded-circle mb-2" width="128" height="128">
                    <h5 class="card-title mb-0"><?= user()->nama; ?></h5>
                    <div class="text-muted mb-2">@<?= user()->username; ?></div>
                </div>
                <hr class="my-0">
                <!-- <div class="card-body">
                    <h5 class="h6 card-title">About</h5>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home feather-sm me-1">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg> Lives in <a href="#">San Francisco, SA</a></li>

                        <li class="mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase feather-sm me-1">
                                <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                            </svg> Works at <a href="#">GitHub</a></li>
                        <li class="mb-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin feather-sm me-1">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg> From <a href="#">Boston</a></li>
                    </ul>
                </div> -->
            </div>
        </div>

        <div class="col-md-8 col-xl-9">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Profile</h5>
                </div>
                <div class="card-body h-100">
                    <div class="row">
                        <div class="col-sm-2">
                            <h5 class="mb-0 fw-bold">Full Name</h5>
                        </div>
                        <div class="col-sm-10 text-secondary">
                            <?= user()->nama ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-2">
                            <h5 class="mb-0 fw-bold">Username</h5>
                        </div>
                        <div class="col-sm-10 text-secondary">
                            <?= user()->username ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-2">
                            <h5 class="mb-0 fw-bold">Email</h5>
                        </div>
                        <div class="col-sm-10 text-secondary">
                            <?= user()->email ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-2">
                            <h5 class="mb-0 fw-bold">Phone</h5>
                        </div>
                        <div class="col-sm-10 text-secondary">
                            <?= user()->no_tlp ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-2">
                            <h5 class="mb-0 fw-bold">Address</h5>
                        </div>
                        <div class="col-sm-10 text-secondary">
                            <?= user()->alamat ?>
                        </div>
                    </div>
                    <hr>
                    <div class="d-grid">
                        <a href="/mitra/profile/edit" class="btn btn-primary">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
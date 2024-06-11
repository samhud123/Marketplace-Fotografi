<?= $this->extend('admin/template/index') ?>

<?= $this->section('content') ?>
<a href="/admin/mitra" class="btn btn-sm btn-primary mb-3"><i class="align-middle" data-feather="arrow-left"></i> Back</a>
<div class="row">
    <div class="col-md-4 col-xl-3">
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="card-title mb-0">Photo</h5>
            </div>
            <div class="card-body text-center">
                <img src="/img/mitra/profile/<?= $mitra->foto; ?>" alt="Christina Mason" class="img-fluid rounded-circle mb-2" width="128" height="128">
                <h5 class="card-title mb-0"><?= $mitra->nama; ?></h5>
                <div class="text-muted mb-2">@<?= $mitra->username; ?></div>
            </div>
            <hr class="my-0">
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
                        <?= $mitra->nama ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-2">
                        <h5 class="mb-0 fw-bold">Username</h5>
                    </div>
                    <div class="col-sm-10 text-secondary">
                        <?= $mitra->username ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-2">
                        <h5 class="mb-0 fw-bold">Email</h5>
                    </div>
                    <div class="col-sm-10 text-secondary">
                        <?= $mitra->email ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-2">
                        <h5 class="mb-0 fw-bold">Phone</h5>
                    </div>
                    <div class="col-sm-10 text-secondary">
                        <?= $mitra->no_tlp ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-2">
                        <h5 class="mb-0 fw-bold">Address</h5>
                    </div>
                    <div class="col-sm-10 text-secondary">
                        <?= $mitra->alamat ?>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>

<div class="my-3">
    <h1 class="h3 mb-3 fw-bold">Services</h1>
    <div class="row">
        <?php foreach ($services as $service) : ?>
            <div class="col-6 col-md-4">
                <div class="card">
                    <img class="card-img-top" src="/img/mitra/<?= $service['photo']; ?>">
                    <div class="card-header">
                        <h5 class="card-title text-center mb-2"><?= $service['name_service']; ?></h5>
                        <h5 class="text-center">Rp <?= $service['price']; ?></h5>
                        <p class="text-center"><?= $service['description']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection(); ?>
<?= $this->extend('admin/template/index') ?>

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
                    <img src="<?= base_url(); ?>/img/admin/<?= user()->foto; ?>" alt="Christina Mason" class="img-fluid rounded-circle mb-2" width="128" height="128">
                    <h5 class="card-title mb-0"><?= user()->nama; ?></h5>
                    <div class="text-muted mb-2">@<?= user()->username; ?></div>
                </div>
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
                    <div class="d-grid">
                        <a href="/admin/profile/edit" class="btn btn-primary">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection() ?>
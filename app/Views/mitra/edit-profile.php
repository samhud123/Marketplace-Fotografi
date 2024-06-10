<?= $this->extend('mitra/template/index') ?>

<?= $this->section('content') ?>
<div class="mb-3">
    <h1 class="h3 d-inline align-middle">Form</h1>
</div>
<?php if (session()->get('errors')) : ?>
    <div class="alert alert-danger mb-4 text-danger">
        <?php foreach (session()->get('errors') as $error) : ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
<div class="card">
    <div class="card-header">
        <a href="/mitra/profile" class="btn btn-sm btn-primary"><i class="align-middle" data-feather="arrow-left"></i> Back</a>
    </div>
    <form action="/mitra/profile/edit/" method="post" enctype="multipart/form-data">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-sm-2">
                    <h5 class="fw-bold">Full Name</h5>
                </div>
                <div class="col-sm-10">
                    <input type="text" name="nama" id="nama" class="form-control" value="<?= user()->nama ?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-2">
                    <h5 class="fw-bold">Username</h5>
                </div>
                <div class="col-sm-10">
                    <input type="text" name="username" id="username" class="form-control" value="<?= user()->username ?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-2">
                    <h5 class="fw-bold">Email</h5>
                </div>
                <div class="col-sm-10">
                    <input type="email" name="email" id="email" class="form-control" value="<?= user()->email ?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-2">
                    <h5 class="fw-bold">Phone</h5>
                </div>
                <div class="col-sm-10">
                    <input type="tel" name="phone" id="phone" class="form-control" value="<?= user()->no_tlp ?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-2">
                    <h5 class="fw-bold">Address</h5>
                </div>
                <div class="col-sm-10">
                    <textarea name="address" id="address" class="form-control" rows="2"><?= user()->alamat; ?></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-2">
                    <h5 class="fw-bold">Photo</h5>
                </div>
                <div class="col-sm-10">
                    <input type="hidden" name="fotoLama" id="fotoLama" value="<?= user()->foto; ?>">
                    <input type="file" name="picture" id="picture" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-info">Update</button>
                </div>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection() ?>
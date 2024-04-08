<?= $this->extend('mitra/template/index') ?>

<?= $this->section('content') ?>
<h1 class="h3 mb-3">Edit Gallery</h1>
<?php if (session()->get('errors')) : ?>
    <div class="alert alert-danger mb-4 text-danger">
        <?php foreach (session()->get('errors') as $error) : ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
<div class="card">
    <div class="card-header">
        <a href="/mitra/gallery" class="btn btn-info"><i class="align-middle" data-feather="arrow-left"></i> <span class="align-middle">Back</span></a>
    </div>
    <form action="/mitra/gallery/edit/<?= $photo['gallery_id']; ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <input type="hidden" name="oldPhoto" value="<?= $photo['photo']; ?>">
        <div class="card-body">
            <div class="card-body">
                <div class="mb-3">
                    <label class="service">Title</label>
                    <input type="text" class="form-control form-control-lg <?= session()->get('errors.title') ? 'is-invalid' : ''; ?>" name="title" id="title" autofocus value="<?= (old('title')) ? old('title') : $photo['title']; ?>">
                </div>
                <div class="mb-4">
                    <label class="photo">Photo</label><br>
                    <img src="/img/gallery/<?= $photo['photo']; ?>" alt="" height="200" class="mb-3">
                    <input type="file" name="photo" id="photo" class="form-control form-control-lg <?= session()->get('errors.photo') ? 'is-invalid' : ''; ?>">
                </div>
                <button class="btn btn-secondary" type="reset"><i class="align-middle" data-feather="rotate-ccw"></i> <span class="align-middle">Reset</span></button>
                <button class="btn btn-primary" type="submit"><i class="align-middle" data-feather="save"></i> <span class="align-middle">Save</span></button>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>
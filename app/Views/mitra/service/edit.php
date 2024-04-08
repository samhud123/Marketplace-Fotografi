<?= $this->extend('mitra/template/index') ?>

<?= $this->section('content') ?>
<h1 class="h3 mb-3">Edit Service</h1>
<?php if (session()->get('errors')) : ?>
    <div class="alert alert-danger mb-4 text-danger">
        <?php foreach (session()->get('errors') as $error) : ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
<div class="card">
    <div class="card-header">
        <a href="/mitra/service" class="btn btn-info"><i class="align-middle" data-feather="arrow-left"></i> <span class="align-middle">Back</span></a>
    </div>
    <form action="/mitra/service/update/<?= $service['service_id']; ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <input type="hidden" name="oldPhoto" value="<?= $service['photo']; ?>">
        <div class="card-body">
            <div class="mb-3">
                <label class="service">Name Service</label>
                <input type="text" class="form-control form-control-lg <?= session()->get('errors.service') ? 'is-invalid' : ''; ?>" name="service" id="service" autofocus value="<?= (old('service')) ? old('service') : $service['name_service']; ?>">
            </div>
            <div class="mb-3">
                <label class="price">Price</label>
                <input type="text" class="form-control form-control-lg <?= session()->get('errors.price') ? 'is-invalid' : ''; ?>" name="price" id="price" value="<?= (old('price')) ? old('price') : $service['price']; ?>">
            </div>
            <div class="mb-3">
                <label class="description">Description</label>
                <textarea class="form-control form-control-lg <?= session()->get('errors.description') ? 'is-invalid' : ''; ?>" id="description" name="description" rows="3"><?= (old('description')) ? old('description') : $service['description']; ?></textarea>
            </div>
            <div class="mb-4">
                <label class="photo mb-2">Photo</label><br>
                <img src="/img/mitra/<?= $service['photo']; ?>" alt="" height="200" class="mb-3">
                <input type="file" name="photo" id="photo" class="form-control form-control-lg <?= session()->get('errors.photo') ? 'is-invalid' : ''; ?>">
            </div>
            <button class="btn btn-secondary" type="reset"><i class="align-middle" data-feather="rotate-ccw"></i> <span class="align-middle">Reset</span></button>
            <button class="btn btn-primary" type="submit"><i class="align-middle" data-feather="save"></i> <span class="align-middle">Save</span></button>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>
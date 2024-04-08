<?= $this->extend('mitra/template/index') ?>

<?= $this->section('content') ?>
<div class="container-fluid p-0">
    <h1 class="h3 mb-3">Add Gallery</h1>
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
        <form action="/mitra/gallery/add" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="card-body">
                <div class="mb-3">
                    <label class="service">Title</label>
                    <input type="text" class="form-control form-control-lg <?= session()->get('errors.title') ? 'is-invalid' : ''; ?>" name="title" id="title" autofocus value="<?= old('title'); ?>">
                </div>
                <div class="mb-4">
                    <label class="photo">Photo</label>
                    <input type="file" name="photo" id="photo" class="form-control form-control-lg <?= session()->get('errors.photo') ? 'is-invalid' : ''; ?>" required>
                </div>
                <button class="btn btn-secondary" type="reset"><i class="align-middle" data-feather="rotate-ccw"></i> <span class="align-middle">Reset</span></button>
                <button class="btn btn-primary" type="submit"><i class="align-middle" data-feather="save"></i> <span class="align-middle">Save</span></button>
            </div>
        </form>
    </div>

</div>
<?= $this->endSection(); ?>
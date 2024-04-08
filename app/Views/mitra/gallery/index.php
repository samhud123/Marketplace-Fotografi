<?= $this->extend('mitra/template/index') ?>

<?= $this->section('content') ?>
<div class="container-fluid p-0">

    <div class="mb-3">
        <h1 class="h3 d-inline align-middle">Gallery Mitra</h1>
    </div>

    <a href="/mitra/gallery/add" class="btn btn-primary mb-3"><i class="align-middle" data-feather="upload-cloud"></i> <span class="align-middle">Post Photo</span></a>

    <?php if (session()->get('message')) : ?>
        <div class="alert alert-danger mb-3 text-primary" role="alert">
            <?= session()->get('message'); ?>
        </div>
    <?php endif; ?>

    <div class="row">
        <?php foreach ($photos as $photo) : ?>
            <div class="col-6 col-md-4">
                <div class="card">
                    <img class="card-img-top" src="/img/gallery/<?= $photo['photo']; ?>" alt="Unsplash">
                    <div class="card-header">
                        <h5 class="card-title mb-0 text-center"><?= $photo['title']; ?></h5>
                    </div>
                    <div class="card-body d-flex justify-content-center">
                        <a href="/mitra/gallery/edit/<?= $photo['gallery_id']; ?>" class="btn btn-sm btn-primary me-2"><i class="align-middle" data-feather="edit"></i> <span class="align-middle">Edit</span></a>

                        <form action="/mitra/gallery/delete/<?= $photo['gallery_id']; ?>" method="post" class="d-inline">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"><i class="align-middle" data-feather="trash-2"></i> <span class="align-middle">Delete</span></button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>
<?= $this->endSection(); ?>
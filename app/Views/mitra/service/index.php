<?= $this->extend('mitra/template/index') ?>

<?= $this->section('content') ?>
<div class="container-fluid p-0">
    <h1 class="h3 mb-3">Manage Service</h1>
    <a href="/mitra/service/add" class="btn btn-primary mb-3">(+) Add New Service</a>
    <?php if (session()->get('message')) : ?>
        <div class="alert alert-danger mb-3 text-primary" role="alert">
            <?= session()->get('message'); ?>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-12 col-xxl-9 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <h5 class="card-title mb-0">Service List</h5>
                </div>
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Photo</th>
                            <th>Service</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($services as $service) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><img src="/img/mitra/<?= $service['photo']; ?>" alt="" width="60" height="60" class="rounded-4"></td>
                                <td><?= $service['name_service']; ?></td>
                                <td>Rp <?= $service['price']; ?></td>
                                <td>
                                    <a href="/mitra/service/edit/<?= $service['service_id']; ?>" class="btn btn-sm btn-primary"><i class="align-middle" data-feather="edit"></i> <span class="align-middle">Edit</span></a>
                                    <form action="/mitra/service/delete/<?= $service['service_id']; ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"><i class="align-middle" data-feather="trash-2"></i> <span class="align-middle">Delete</span></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->extend('admin/template/index') ?>

<?= $this->section('content') ?>
<div class="container-fluid p-0">
    <h1 class="h3 mb-3">Manage Mitra</h1>
    <?php if (session()->get('message')) : ?>
        <div class="alert alert-danger mb-3 text-primary" role="alert">
            <?= session()->get('message'); ?>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-12 col-xxl-9 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <h5 class="card-title mb-0">List Mitra</h5>
                </div>
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($mitras as $mitra) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $mitra['nama']; ?> <br> <span class="text-secondary">@<?= $mitra['username']; ?></span></td>
                                <td><?= $mitra['email']; ?></td>
                                <?php if ($mitra['active'] === '1') : ?>
                                    <td><span class="text-success fw-bold">Active</span></td>
                                <?php else : ?>
                                    <td><span class="text-danger fw-bold">In-Active</span></td>
                                <?php endif; ?>
                                <td>
                                    <a href="/mitra/service/edit/" class="btn btn-sm btn-primary"><i class="align-middle" data-feather="edit"></i> <span class="align-middle">Detil</span></a>
                                    <?php if ($mitra['active'] == 1) : ?>
                                        <a href="/admin/mitra/disabled/<?= $mitra['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"><i class="align-middle" data-feather="trash-2"></i> <span class="align-middle">Disabled</span></a>
                                    <?php elseif ($mitra['active'] == 0) : ?>
                                        <a href="/admin/mitra/enabled/<?= $mitra['id']; ?>" class="btn btn-sm btn-success" onclick="return confirm('Are you sure?')"><i class="align-middle" data-feather="check-circle"></i> <span class="align-middle">Enabled</span></a>
                                    <?php endif; ?>
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
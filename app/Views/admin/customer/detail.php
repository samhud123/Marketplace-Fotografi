<?= $this->extend('admin/template/index') ?>

<?= $this->section('content') ?>
<a href="/admin/customers" class="btn btn-sm btn-primary mb-3"><i class="align-middle" data-feather="arrow-left"></i> Back</a>
<div class="row">
    <div class="col-md-4 col-xl-3">
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="card-title mb-0">Photo</h5>
            </div>
            <div class="card-body text-center">
                <img src="/img/customers/<?= $customer->foto; ?>" alt="Christina Mason" class="img-fluid rounded-circle mb-2" width="128" height="128">
                <h5 class="card-title mb-0"><?= $customer->nama; ?></h5>
                <div class="text-muted mb-2">@<?= $customer->username; ?></div>
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
                        <?= $customer->nama ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-2">
                        <h5 class="mb-0 fw-bold">Username</h5>
                    </div>
                    <div class="col-sm-10 text-secondary">
                        <?= $customer->username ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-2">
                        <h5 class="mb-0 fw-bold">Email</h5>
                    </div>
                    <div class="col-sm-10 text-secondary">
                        <?= $customer->email ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-2">
                        <h5 class="mb-0 fw-bold">Phone</h5>
                    </div>
                    <div class="col-sm-10 text-secondary">
                        <?= $customer->no_tlp ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-2">
                        <h5 class="mb-0 fw-bold">Address</h5>
                    </div>
                    <div class="col-sm-10 text-secondary">
                        <?= $customer->alamat ?>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>

<div class="my-3">
    <h1 class="h3 mb-3 fw-bold">History Orders</h1>
    <div class="row">
        <div class="col-12 col-xxl-9 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <h5 class="card-title mb-0">List of Orders</h5>
                </div>
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Mitra</th>
                            <th>Service</th>
                            <th>Price</th>
                            <th>Date</th>
                            <th>Status Order</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($orders as $order) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $order['username']; ?></td>
                                <td><?= $order['name_service']; ?></td>
                                <td><?= $order['price']; ?></td>
                                <td>
                                    <?php $date = new DateTime($order['created_at']); ?>
                                    <p class="mb-0 fw-normal"><?= $date->format('d F Y'); ?></p>
                                    <span><?= $date->format('H:i:s'); ?></span>
                                </td>
                                <?php

                                if ($order['status_order'] === 'process') {
                                    $td = 'text-warning';
                                } elseif ($order['status_order'] === 'approved') {
                                    $td = 'text-primary';
                                } elseif ($order['status_order'] === 'finished') {
                                    $td = 'text-success';
                                } else {
                                    $td = 'text-danger';
                                }
                                ?>
                                <td><span class="<?= $td; ?> fw-bold"><?= $order['status_order']; ?></span></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
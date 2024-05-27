<?= $this->extend('admin/template/index') ?>

<?= $this->section('content') ?>
<?php d($mitras) ?>
<?php d($buyers) ?>
<div class="container-fluid p-0">
    <h1 class="h3 mb-3">Transaction</h1>
    <div class="row">
        <div class="col-12 col-xxl-9 d-flex">
            <div class="card flex-fill">
                <div class="card-header">
                    <h5 class="card-title mb-0">List of Transaction</h5>
                </div>
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Buyer</th>
                            <th>Mitra</th>
                            <th>Service</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($buyers as $buyer) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $buyer['username']; ?></td>
                                <td></td>
                                <td><?= $buyer['name_service']; ?></td>
                                <td><?= $buyer['status_order']; ?></td>
                                <td><?= $buyer['created_at']; ?></td>
                                <td><a href="" class="btn btn-primary">Detail</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->extend('admin/template/index') ?>

<?= $this->section('content') ?>
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
                        <?php foreach ($orders as $order) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $order['buyer']; ?></td>
                                <td><?= $order['mitra']; ?></td>
                                <td><?= $order['name_service']; ?></td>
                                <?php 
                                
                                if($order['status_order'] === 'process'){
                                    $td = 'text-warning';
                                } elseif($order['status_order'] === 'approved'){
                                    $td = 'text-primary';
                                } elseif($order['status_order'] === 'finished'){
                                    $td = 'text-success';
                                } else {
                                    $td = 'text-danger';
                                }
                                ?>
                                <td><span class="<?= $td; ?> fw-bold"><?= $order['status_order']; ?></span></td>
                                <td>
                                    <?php $date = new DateTime($order['created_at']); ?>
                                    <p class="mb-0 fw-normal"><?= $date->format('d F Y'); ?></p>
                                    <span><?= $date->format('H:i:s'); ?></span>
                                </td>
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
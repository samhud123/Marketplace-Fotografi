<?= $this->extend('mitra/template/index') ?>

<?= $this->section('content') ?>
<div class="container-fluid p-0">
    <h1 class="h3 mb-3">Manage Orders</h1>
    <div class="row">
        <div class="col-12 col-xxl-9 d-flex">
            <div class="card flex-fill">
                <div class="card-header">

                    <h5 class="card-title mb-0">Order List</h5>
                </div>
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Buyer</th>
                            <th>Service</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($orders as $order) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td>
                                    <h6 class="fw-semibold mb-1"><?= $order['username']; ?></h6>
                                    <span class="fw-normal"><?= $order['email']; ?></span>
                                </td>
                                <td><?= $order['name_service']; ?></td>
                                <td><?= $order['date']; ?></td>
                                <?php if ($order['status_order'] === 'process') : ?>
                                    <?php $bg = 'bg-warning'; ?>
                                <?php elseif ($order['status_order'] === 'approved') : ?>
                                    <?php $bg = 'bg-primary'; ?>
                                <?php elseif ($order['status_order'] === 'finished') : ?>
                                    <?php $bg = 'bg-success'; ?>
                                <?php elseif($order['status_order'] === 'rejected' || $order['status_order'] === 'cancelled') : ?>
                                    <?php $bg = 'bg-danger'; ?>
                                <?php endif; ?>
                                <td><span class="badge <?= $bg; ?>"><?= $order['status_order']; ?></span></td>
                                <td>
                                    <a href="/mitra/orders/detail/<?= $order['order_id']; ?>" class="btn btn-info">Detail</a>
                                    <?php if ($order['status_order'] === 'finished' || $order['status_order'] === 'cancelled') : ?>
                                        <?php $disabled = 'disabled' ?>
                                    <?php else : ?>
                                        <?php $disabled = '' ?>
                                    <?php endif; ?>
                                    <a href="/mitra/orders/confirm/<?= $order['order_id']; ?>" class="btn btn-primary <?= $disabled; ?>">Confirm</a>
                                    <a href="/mitra/orders/reject/<?= $order['order_id']; ?>" class="btn btn-danger <?= $disabled; ?>">Reject</a>
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
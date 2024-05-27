<?= $this->extend('customer/template/index') ?>

<?= $this->section('content') ?>
<div class="col-lg-8 pb-5">
    <?php if (session()->get('message')) : ?>
        <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
            <?= session()->get('message'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

    <?php if (session()->get('errors')) : ?>
        <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
            <?php foreach (session()->get('errors') as $error) : ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <table class="table">
        <thead class="table-info">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Service</th>
                <th scope="col">Price</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($orders as $order) : ?>
                <?php if ($order['status_order'] === 'process' || $order['status_order'] === 'approved') : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $order['name_service']; ?></td>
                        <td>Rp <?= $order['price']; ?></td>
                        <?php if ($order['status_order'] === 'process') : ?>
                            <?php $bg = 'text-bg-warning'; ?>
                        <?php elseif ($order['status_order'] === 'approved') : ?>
                            <?php $bg = 'text-bg-primary'; ?>
                        <?php endif; ?>
                        <td><span class="badge <?= $bg; ?>"><?= $order['status_order']; ?></span></td>
                        <td>
                            <a href="/customer/order/detail/<?= $order['order_id']; ?>" class="btn btn-sm btn-info">Detail</a>
                            <?php if ($order['status_order'] === 'process') : ?>
                                <a href="/customer/order/cancel/<?= $order['order_id']; ?>" class="btn btn-sm btn-danger">Cancel</a>
                            <?php elseif ($order['status_order'] === 'approved') : ?>
                                <a href="/customer/order/finish/<?= $order['order_id']; ?>" class="btn btn-sm btn-success">Finished</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
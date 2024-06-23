<?= $this->extend('customer/template/index') ?>

<?= $this->section('content') ?>
<div class="col-lg-8 pb-5">
    <?php if (session()->get('message')) : ?>
        <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
            <?= session()->get('message'); ?>
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
                <?php if ($order['status_order'] === 'cancelled' || $order['status_order'] === 'rejected' || $order['status_order'] === 'finished') : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $order['name_service']; ?></td>
                        <td>Rp <?= $order['price']; ?></td>
                        <?php if ($order['status_order'] === 'cancelled' || $order['status_order'] === 'rejected') : ?>
                            <?php $bg = 'text-bg-danger'; ?>
                        <?php elseif ($order['status_order'] === 'finished') : ?>
                            <?php $bg = 'text-bg-primary'; ?>
                        <?php endif; ?>
                        <td><span class="badge <?= $bg; ?>"><?= $order['status_order']; ?></span></td>
                        <td>
                            <a href="/customer/history/detail/<?= $order['order_id']; ?>" class="btn btn-sm btn-info">Detail</a>
                            <?php if ($order['status_order'] === 'finished') : ?>
                                <a href="/customer/history/comment/<?= $order['order_id']; ?>" class="btn btn-sm btn-secondary">Review</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>
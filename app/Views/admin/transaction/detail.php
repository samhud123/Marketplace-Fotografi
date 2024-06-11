<?= $this->extend('admin/template/index') ?>

<?= $this->section('content') ?>
<a href="/admin/transaction" class="btn btn-sm btn-primary mb-3"><i class="align-middle" data-feather="arrow-left"></i> Back</a>
<div class="row">
    <div class="col-md-5 col-xl-4">
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="card-title mb-0">Service</h5>
            </div>
            <div class="card-body text-center">
                <img src="/img/mitra/<?= $order_detail->photo; ?>" alt="Christina Mason" class="mb-2" width="200">
                <h5 class="card-title mb-0"><?= $order_detail->name_service; ?></h5>
                <p class="text-secondari"><?= $order_detail->price; ?></p>
                <div class="text-muted mb-2">
                </div>
            </div>
            <hr class="my-0">
        </div>
    </div>

    <div class="col-md-7 col-xl-8">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Detail Buyer</h5>
            </div>
            <div class="card-body h-100">
                <div class="row">
                    <div class="col-sm-2">
                        <h5 class="mb-0 fw-bold">Full Name</h5>
                    </div>
                    <div class="col-sm-10 text-secondary">
                        <?= $order_detail->nameBuyer; ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-2">
                        <h5 class="mb-0 fw-bold">Username</h5>
                    </div>
                    <div class="col-sm-10 text-secondary">
                        <?= $order_detail->buyer; ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-2">
                        <h5 class="mb-0 fw-bold">Email</h5>
                    </div>
                    <div class="col-sm-10 text-secondary">
                    <?= $order_detail->emailBuyer; ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-2">
                        <h5 class="mb-0 fw-bold">Phone</h5>
                    </div>
                    <div class="col-sm-10 text-secondary">
                    <?= $order_detail->tlpBuyer; ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-2">
                        <h5 class="mb-0 fw-bold">Address</h5>
                    </div>
                    <div class="col-sm-10 text-secondary">
                    <?= $order_detail->alamatBuyer; ?>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Detail Order</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-2">
                    <h5 class="mb-0 fw-bold">Service</h5>
                </div>
                <div class="col-sm-10 text-secondary">
                <?= $order_detail->name_service; ?>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-2">
                    <h5 class="mb-0 fw-bold">Order Date</h5>
                </div>
                <div class="col-sm-10 text-secondary">
                <?= $order_detail->created_at; ?>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-2">
                    <h5 class="mb-0 fw-bold">Booking date</h5>
                </div>
                <div class="col-sm-10 text-secondary">
                <?= $order_detail->date; ?>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-2">
                    <h5 class="mb-0 fw-bold">Status Order</h5>
                </div>
                <div class="col-sm-10 text-secondary">
                <?= $order_detail->status_order; ?>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-2">
                    <h5 class="mb-0 fw-bold">Message</h5>
                </div>
                <div class="col-sm-10 text-secondary">
                <?= $order_detail->message; ?>
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
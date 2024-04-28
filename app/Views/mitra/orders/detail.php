<?= $this->extend('mitra/template/index') ?>

<?= $this->section('content') ?>
<h1 class="h3 mb-3">Detail Order</h1>

<div class="card">
    <div class="card-header">
        <a href="/mitra/orders" class="btn btn-info"><i class="align-middle" data-feather="arrow-left"></i> <span class="align-middle">Back</span></a>
    </div>

    <div class="card-body">
        <div class="text-center mb-3">
            <img src="/img/mitra/<?= $order[0]['photo']; ?>" alt="" width="300">
        </div>
        <div class="text-center">
            <h4><?= $order[0]['name_service']; ?></h4>
        </div>
        <div class="text-center mb-3">
            <p><?= $order[0]['description']; ?></p>
        </div>

        <hr class="my-3">

        <div class="w-75">
            <h4 class="fw-bold mb-3">Order :</h4>
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" class="form-control" value="<?= $order[0]['nama']; ?>" disabled>
            </div>
            <div class="mb-3">
                <label>Username</label>
                <input type="text" class="form-control" value="@<?= $order[0]['username']; ?>" disabled>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="text" class="form-control" value="<?= $order[0]['email']; ?>" disabled>
            </div>
            <div class="mb-3">
                <label>No HP</label>
                <input type="text" class="form-control" value="<?= $order[0]['no_tlp']; ?>" disabled>
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" cols="30" rows="4" disabled><?= $order[0]['alamat']; ?></textarea>
            </div>
            <div class="mb-3">
                <label>Date</label>
                <input type="text" class="form-control" value="<?= $order[0]['date']; ?>" disabled>
            </div>
            <div class="mb-3">
                <label>Message</label>
                <textarea name="alamat" class="form-control" cols="30" rows="4" disabled><?= $order[0]['message']; ?></textarea>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
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
    <form class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="account-fn">Username</label>
                <input class="form-control" type="text" id="account-fn" value="@<?= user()->username; ?>" disabled>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="account-ln">Full Name</label>
                <input class="form-control" type="text" id="account-ln" value="<?= user()->nama; ?>" disabled>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="account-email">E-mail Address</label>
                <input class="form-control" type="email" id="account-email" value="<?= user()->email; ?>" disabled>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="account-phone">Phone Number</label>
                <input class="form-control" type="text" id="account-phone" value="<?= user()->no_tlp; ?>" disabled>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="account-pass">Address</label>
                <textarea name="alamat" class="form-control" cols="20" rows="4" disabled><?= user()->alamat; ?></textarea>
            </div>
        </div>
        <div class="col-12">
            <div class="d-flex flex-wrap justify-content-between align-items-center">
                <button class="btn btn-style-1 btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Update Profile</button>
            </div>
        </div>
    </form>
</div>

<!-- Modal Change Profile-->
<div class="modal fade mt-5" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Profile</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/customer/profile" method="post">
                <?= csrf_field(); ?>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" value="<?= user()->username; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="fullname">Full Name</label>
                        <input type="text" name="fullname" class="form-control" value="<?= user()->nama; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" value="<?= user()->email; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone">Phone Number</label>
                        <input type="tel" name="phone" class="form-control" value="<?= user()->no_tlp; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="address">Address</label>
                        <textarea name="address" id="address" class="form-control"><?= user()->alamat; ?></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
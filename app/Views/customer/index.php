<?= $this->extend('customer/template/index') ?>

<?= $this->section('content') ?>
<div class="col-lg-8 pb-5">
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
                <label for="account-pass">Alamat</label>
                <textarea name="alamat" class="form-control" cols="20" rows="4" disabled><?= user()->alamat; ?></textarea>
            </div>
        </div>
        <div class="col-12">
            <div class="d-flex flex-wrap justify-content-between align-items-center">
                <button class="btn btn-style-1 btn-primary" type="button" data-toast="" data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Success!" data-toast-message="Your profile updated successfuly.">Update Profile</button>
            </div>
        </div>
    </form>
</div>

<?= $this->endSection() ?>
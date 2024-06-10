<div class="col-lg-4 pb-5">
    <!-- Account Sidebar-->
    <div class="author-card pb-3">
        <div class="author-card-cover" style="background-image: url(https://bootdey.com/img/Content/flores-amarillas-wallpaper.jpeg);"></div>
        <div class="author-card-profile">
            <div class="author-card-avatar">
                <img src="/img/customers/<?= user()->foto; ?>" title="<?= user()->username; ?>">
            </div>
            <div class="author-card-details">
                <h5 class="author-card-name text-lg">@<?= user()->username; ?></h5><span class="author-card-position"><?= user()->email; ?></span>
            </div>
        </div>
        <div class="w-100">
            <button class="btn btn-sm btn-outline-primary ms-4" type="button" data-bs-toggle="modal" data-bs-target="#photo">Change Picture</button>
        </div>
    </div>
    <div class="wizard">
        <nav class="list-group list-group-flush">
            <a class="list-group-item <?= $title == "Customer | Profile" ? 'active' : ''; ?>" href="/customer"><i class="fe-icon-map-pin text-muted"></i>Profile</a>
            <a class="list-group-item <?= $title == "Customer | Order" ? 'active' : ''; ?>" href="/customer/order"><i class="fe-icon-map-pin text-muted"></i>Orders</a>
            <a class="list-group-item <?= $title == "Customer | History" ? 'active' : ''; ?>" href="/customer/history"><i class="fe-icon-map-pin text-muted"></i>History</a>
            <a class="list-group-item " href="/logout"><i class="fe-icon-map-pin text-muted"></i>Logout</a>
        </nav>
    </div>
</div>

<!-- Modal Change Profile-->
<div class="modal fade mt-5" id="photo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Photo</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/customer/photo" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="picture">Choose Photo</label>
                        <input type="file" name="picture" id="picture" class="form-control">
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
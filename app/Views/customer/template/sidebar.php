<div class="col-lg-4 pb-5">
    <!-- Account Sidebar-->
    <div class="author-card pb-3">
        <div class="author-card-cover" style="background-image: url(https://bootdey.com/img/Content/flores-amarillas-wallpaper.jpeg);"></div>
        <div class="author-card-profile">
            <div class="author-card-avatar"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Daniel Adams">
            </div>
            <div class="author-card-details">
                <h5 class="author-card-name text-lg">@<?= user()->username; ?></h5><span class="author-card-position"><?= user()->email; ?></span>
            </div>
        </div>
    </div>
    <div class="wizard">
        <nav class="list-group list-group-flush">
            <a class="list-group-item <?= $title == "Customer | Profile" ? 'active' : ''; ?>" href="/customer"><i class="fe-icon-map-pin text-muted"></i>Profile</a>
            <a class="list-group-item <?= $title == "Customer | Order" ? 'active' : ''; ?>" href="/customer/order"><i class="fe-icon-map-pin text-muted"></i>Orders</a>
            <a class="list-group-item " href="/customer"><i class="fe-icon-map-pin text-muted"></i>History</a>
            <a class="list-group-item " href="/logout"><i class="fe-icon-map-pin text-muted"></i>Logout</a>
        </nav>
    </div>
</div>
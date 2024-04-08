<div class="sidebar-content js-simplebar">
    <a class="sidebar-brand" href="/">
        <span class="align-middle">PHOTOGRAPHY</span>
    </a>

    <ul class="sidebar-nav">
        <li class="sidebar-header">
            PAGES
        </li>

        <li class="sidebar-item <?= $title == "Admin | Dashboard" ? 'active' : ''; ?>">
            <a class="sidebar-link" href="/mitra">
                <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
        </li>


        <li class="sidebar-item <?= $title == "Admin | Mitra" ? 'active' : ''; ?>">
            <a class="sidebar-link" href="/admin/mitra">
                <i class="align-middle" data-feather="users"></i> <span class="align-middle">Manage Mitra</span>
            </a>
        </li>
        <li class="sidebar-item <?= $title == "Mitra | Orders" ? 'active' : ''; ?>">
            <a class="sidebar-link" href="/mitra/orders">
                <i class="align-middle" data-feather="users"></i> <span class="align-middle">Manage Customer</span>
            </a>
        </li>
        <li class="sidebar-item <?= $title == "Mitra | Orders" ? 'active' : ''; ?>">
            <a class="sidebar-link" href="/mitra/orders">
                <i class="align-middle" data-feather="book-open"></i> <span class="align-middle">Transaction</span>
            </a>
        </li>
        <li class="sidebar-item <?= $title == "Mitra | Gallery" ? 'active' : ''; ?>">
            <a class="sidebar-link" href="/mitra/gallery">
                <i class="align-middle" data-feather="message-square"></i> <span class="align-middle">Chat</span>
            </a>
        </li>

        <li class="sidebar-header">
            ACCOUNT
        </li>

        <li class="sidebar-item <?= $title == "Mitra | Profile" ? 'active' : ''; ?>">
            <a class="sidebar-link" href="/mitra/profile">
                <i class="align-middle" data-feather="user"></i> <span class="align-middle">My Profile</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a class="sidebar-link" href="/logout">
                <i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Logout</span>
            </a>
        </li>
</div>
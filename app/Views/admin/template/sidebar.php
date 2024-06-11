<div class="sidebar-content js-simplebar">
    <a class="sidebar-brand" href="/">
        <span class="align-middle">PHOTOGRAPHY</span>
    </a>

    <ul class="sidebar-nav">
        <li class="sidebar-header">
            PAGES
        </li>

        <li class="sidebar-item <?= $title == "Admin | Dashboard" ? 'active' : ''; ?>">
            <a class="sidebar-link" href="/admin">
                <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
        </li>


        <li class="sidebar-item <?= $title == "Admin | Mitra" ? 'active' : ''; ?>">
            <a class="sidebar-link" href="/admin/mitra">
                <i class="align-middle" data-feather="users"></i> <span class="align-middle">Manage Mitra</span>
            </a>
        </li>
        <li class="sidebar-item <?= $title == "Admin | Customers" ? 'active' : ''; ?>">
            <a class="sidebar-link" href="/admin/customers">
                <i class="align-middle" data-feather="users"></i> <span class="align-middle">Manage Customer</span>
            </a>
        </li>
        <li class="sidebar-item <?= $title == "Admin | Transaction" ? 'active' : ''; ?>">
            <a class="sidebar-link" href="/admin/transaction">
                <i class="align-middle" data-feather="book-open"></i> <span class="align-middle">Transaction</span>
            </a>
        </li>
        <!-- <li class="sidebar-item">
            <a class="sidebar-link" href="/mitra/gallery">
                <i class="align-middle" data-feather="message-square"></i> <span class="align-middle">Chat</span>
            </a>
        </li> -->

        <li class="sidebar-header">
            ACCOUNT
        </li>

        <li class="sidebar-item <?= $title == "Admin | Profile" ? 'active' : ''; ?>">
            <a class="sidebar-link" href="/admin/profile">
                <i class="align-middle" data-feather="user"></i> <span class="align-middle">My Profile</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a class="sidebar-link" href="/logout">
                <i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Logout</span>
            </a>
        </li>
</div>
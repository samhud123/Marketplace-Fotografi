<header class="header_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-11 offset-lg-1">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="/">
                        <img src="<?= base_url(); ?>/uliya/images/logo.png" alt="">
                        <span>
                            PHOTOGRAPHY
                        </span>
                    </a>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav  ">
                                <li class="nav-item <?= $title == "FOTOGRAFI" ? 'active' : ''; ?>">
                                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html"> About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/photo">Photo</a>
                                </li>
                                <?php if (!(in_groups('Customer') || in_groups('Mitra') || in_groups('Admin'))) : ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/login">Login</a>
                                    </li>
                                <?php endif; ?>

                                <?php if (in_groups('Customer')) : ?>
                                    <li class="nav-item <?= $title == "Customer | Profile" ? 'active' : ''; ?>">
                                        <a class="nav-link" href="/customer">My Account</a>
                                    </li>
                                <?php endif; ?>

                                <?php if (in_groups('Mitra')) : ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/mitra">My Account</a>
                                    </li>
                                <?php endif; ?>

                                <?php if (in_groups('Admin')) : ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/admin">Admin Panel</a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                            <form class="form-inline" method="get" action="/photo">
                                <input type="search" name="search" class="form-control" placeholder="Search...">
                                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                            </form>
                        </div>

                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<?= $this->extend('mitra/template/index') ?>

<?= $this->section('content') ?>
<h1 class="h3 mb-3">Dashboard Mitra</h1>

<div class="row">
    <div class="w-100">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-0">
                                <h5 class="card-title">Orders come in</h5>
                            </div>

                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-in align-middle">
                                        <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                                        <polyline points="10 17 15 12 10 7"></polyline>
                                        <line x1="15" y1="12" x2="3" y2="12"></line>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <h1 class="mt-1 mb-3"><?= $orders_comein; ?></h1>
                        <div class="mb-0">
                            <span class="text-muted">total incoming orders</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-0">
                                <h5 class="card-title">Orders failed</h5>
                            </div>

                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x align-middle">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <h1 class="mt-1 mb-3"><?= $orders_failed; ?></h1>
                        <div class="mb-0">
                            <span class="text-muted">Total failed orders</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-0">
                                <h5 class="card-title">Orders completed</h5>
                            </div>

                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check align-middle">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <h1 class="mt-1 mb-3"><?= $orders_complate; ?></h1>
                        <div class="mb-0">
                            <span class="text-muted">Total completed orders</span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-0">
                                <h5 class="card-title">Total service</h5>
                            </div>

                            <div class="col-auto">
                                <div class="stat text-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book align-middle">
                                        <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                        <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <h1 class="mt-1 mb-3"><?= $total_service; ?></h1>
                        <div class="mb-0">
                            <span class="text-muted">Total services offered</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<div class="row">
    {{-- Stats Grid --}}
    <div class="col-xxl-3 col-md-6">
        <div class="card custom-card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-0">
                    <div class="me-3">
                        <span class="avatar avatar-md avatar-rounded bg-primary"><i class="bx bx-wallet fs-20"></i></span>
                    </div>
                    <div class="flex-fill">
                        <p class="mb-0 text-muted">Total Invested</p>
                        <h5 class="fw-semibold mb-0">{{ currency_converter($user->deposit) }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-md-6">
        <div class="card custom-card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-0">
                    <div class="me-3">
                        <span class="avatar avatar-md avatar-rounded bg-success"><i
                                class="bx bx-trending-up fs-20"></i></span>
                    </div>
                    <div class="flex-fill">
                        <p class="mb-0 text-muted">Total Profit</p>
                        <h5 class="fw-semibold mb-0 text-success">
                            {{ currency_converter($user->totalProfitEarned) }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-md-6">
        <div class="card custom-card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-0">
                    <div class="me-3">
                        <span class="avatar avatar-md avatar-rounded bg-danger"><i
                                class="bx bx-money-withdraw fs-20"></i></span>
                    </div>
                    <div class="flex-fill">
                        <p class="mb-0 text-muted">Total Withdrawn</p>
                        <h5 class="fw-semibold mb-0 text-danger">
                            {{ $user->withdrawal == null ? currency_converter(0) : currency_converter($user->withdrawal->amount) ?? 0 }}
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-md-6">
        <div class="card custom-card">
            <div class="card-body">
                <div class="d-flex align-items-center mb-0">
                    <div class="me-3">
                        <span class="avatar avatar-md avatar-rounded bg-info"><i
                                class="bx bx-gift fs-20"></i></span>
                    </div>
                    <div class="flex-fill">
                        <p class="mb-0 text-muted">Bonus</p>
                        <h5 class="fw-semibold mb-0 text-info">
                            {{ currency_converter($user->bonus ?? 0) }}
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

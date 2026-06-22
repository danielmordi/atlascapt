@extends('layouts.base')

<style>
    .filter-white {
        filter: invert(98%) sepia(2%) saturate(7%) hue-rotate(339deg) brightness(101%) contrast(104%);
        height: 75px !important;
    }

    .pending-card {
        border: none;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.12);
    }

    .pending-icon-wrap {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.25rem;
        background: linear-gradient(135deg, rgba(255, 193, 7, 0.15), rgba(255, 193, 7, 0.3));
        font-size: 2rem;
        color: #f59e0b;
        animation: pulse-icon 2s ease-in-out infinite;
    }

    @keyframes pulse-icon {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.08); }
    }

    .step-item {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        padding: 10px 0;
        border-bottom: 1px solid rgba(0,0,0,0.05);
    }

    .step-item:last-child { border-bottom: none; }

    .step-num {
        width: 28px;
        height: 28px;
        min-width: 28px;
        border-radius: 50%;
        background: linear-gradient(135deg, #4361ee, #7209b7);
        color: #fff;
        font-size: 12px;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

@section('content')
    <div class="nxl-content">

        <div class="container-fluid">

            <!-- Page Header -->
            <div class="py-4 d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                <h1 class="mb-0 page-title fw-semibold fs-18">Account Status</h1>
            </div>
            <!-- Page Header Close -->

            <!-- Start::row-1 -->
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="card pending-card">
                        <div class="card-body p-4 p-md-5 text-center">

                            <div class="pending-icon-wrap">
                                <i class="bx bx-time-five"></i>
                            </div>

                            <h4 class="fw-bold mb-2">Account Pending Approval</h4>
                            <p class="text-muted mb-4">
                                Thank you for registering with <strong>{{ config('app.name') }}</strong>!
                                Your account has been created and is currently under review by our admin team.
                            </p>

                            <div class="alert alert-warning text-start py-3 px-3 mb-4" role="alert"
                                style="border-radius: 10px; border-left: 4px solid #f59e0b;">
                                <div class="d-flex align-items-center gap-2 mb-1">
                                    <i class="bx bx-info-circle fs-18 text-warning"></i>
                                    <strong>What happens next?</strong>
                                </div>
                                <div class="mt-2">
                                    <div class="step-item">
                                        <div class="step-num">1</div>
                                        <div class="text-start">
                                            <small class="text-muted">Your account details have been submitted to our team for review.</small>
                                        </div>
                                    </div>
                                    <div class="step-item">
                                        <div class="step-num">2</div>
                                        <div class="text-start">
                                            <small class="text-muted">An administrator will review and approve your account shortly.</small>
                                        </div>
                                    </div>
                                    <div class="step-item">
                                        <div class="step-num">3</div>
                                        <div class="text-start">
                                            <small class="text-muted">Once approved, you will have full access to your dashboard.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <p class="text-muted fs-13 mb-4">
                                If you have any questions, please contact our support team.
                            </p>

                            <a class="btn btn-danger btn-wave w-100" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="bx bx-log-out me-1"></i> Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>

                    <p class="text-center text-muted mt-3 fs-13">
                        <script>document.write(new Date().getFullYear())</script> &copy; {{ config('app.name') }}. All rights reserved.
                    </p>
                </div>
            </div>
            <!--End::row-1 -->

        </div>

    </div>
@endsection

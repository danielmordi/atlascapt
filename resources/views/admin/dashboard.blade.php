@extends('layouts.base')

@section('title')
    {{ config('app.name') }} - Admin Dashboard
@endsection

@section('content')
    @push('style')
        <style>
            .custom-card {
                transition: transform 0.2s ease, box-shadow 0.2s ease;
                border: 1px solid rgba(0, 0, 0, 0.05) !important;
                border-radius: 12px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.02);
            }

            .custom-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05) !important;
            }

            .avatar-lg {
                width: 60px;
                height: 60px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .avatar-soft-primary {
                background-color: rgba(var(--primary-rgb), 0.1);
                color: var(--primary-color);
            }

            .avatar-soft-success {
                background-color: rgba(var(--success-rgb), 0.1);
                color: var(--success-color);
            }

            .avatar-soft-info {
                background-color: rgba(var(--info-rgb), 0.1);
                color: var(--info-color);
            }

            .avatar-soft-warning {
                background-color: rgba(var(--warning-rgb), 0.1);
                color: var(--warning-color);
            }

            .page-header-title {
                font-weight: 700;
                letter-spacing: -0.5px;
            }

            .stat-label {
                font-size: 0.85rem;
                font-weight: 500;
                color: #6c757d;
                text-transform: uppercase;
                letter-spacing: 0.5px;
            }
        </style>
    @endpush

    <div class="nxl-content">
        <div class="container-fluid">
            <!-- Start::page-header -->
            <div class="row align-items-center py-4">
                <div class="col-md-6">
                    <h4 class="page-header-title mb-1">Dashboard Overview</h4>
                    <p class="mb-0 text-muted">Welcome back, {{ Auth::user()->name }}! Here's what's happening today.</p>
                </div>
                <div class="col-md-6 text-md-end mt-3 mt-md-0">
                    <div class="d-inline-block bg-white px-3 py-2 rounded shadow-sm text-muted fs-13">
                        <i class="bx bx-calendar me-2 text-primary"></i> {{ now()->format('l, j F Y') }}
                    </div>
                </div>
            </div>
            <!-- End::page-header -->

            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show shadow-sm border-0" role="alert">
                    <i class="bx bx-check-circle me-2"></i> {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <!-- Stats Grid -->
            <div class="row">
                <!-- Total Users -->
                <div class="col-xxl-3 col-xl-4 col-md-6 mb-4">
                    <div class="card custom-card h-100 border-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-lg avatar-soft-primary rounded-circle me-3">
                                    <i class="bx bx-user fs-24"></i>
                                </div>
                                <div>
                                    <p class="stat-label mb-1">Total Users</p>
                                    <h3 class="fw-bold mb-0 text-dark">{{ $users->count() }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Investment -->
                <div class="col-xxl-3 col-xl-4 col-md-6 mb-4">
                    <div class="card custom-card h-100 border-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-lg avatar-soft-success rounded-circle me-3">
                                    <i class="bx bx-wallet fs-24"></i>
                                </div>
                                <div>
                                    <p class="stat-label mb-1">Total Investment</p>
                                    <h3 class="fw-bold mb-0 text-dark">{{ currency_converter($TotalInvestment) }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Deposits -->
                <div class="col-xxl-3 col-xl-4 col-md-6 mb-4">
                    <div class="card custom-card h-100 border-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-lg avatar-soft-info rounded-circle me-3">
                                    <i class="bx bx-import fs-24"></i>
                                </div>
                                <div>
                                    <p class="stat-label mb-1">Completed Deposits</p>
                                    <h3 class="fw-bold mb-0 text-dark">{{ $deposits }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Withdrawals -->
                <div class="col-xxl-3 col-xl-4 col-md-6 mb-4">
                    <div class="card custom-card h-100 border-0">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-lg avatar-soft-warning rounded-circle me-3">
                                    <i class="bx bx-export fs-24"></i>
                                </div>
                                <div>
                                    <p class="stat-label mb-1">Total Withdrawals</p>
                                    <h3 class="fw-bold mb-0 text-dark">{{ $withdrawals }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Users Table -->
            <div class="card custom-card border-0">
                <div class="card-header bg-transparent border-bottom-0 pt-4 pb-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title fw-bold mb-0">Registered Users</h5>
                        <div class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill">
                            {{ $users->count() }} Active Users
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @livewire('users-table')
                </div>
            </div>

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->
@endsection

@extends('layouts.base')

@section('title')
    {{ config('app.name') }} - Copy Traders
@endsection

@section('content')
    <div class="nxl-content">

        <div class="container-fluid">

            <!-- Start::page-header -->
            <div class="py-4 d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                <div>
                    <p class="mb-0 fw-semibold fs-18">Copy Traders</p>
                    <span class="op-7 fs-12 text-muted">Select professional traders to mirror their trades and performance.</span>
                </div>
            </div>
            <!-- End::page-header -->
            {{-- Place this in your layout file or view where you want to display flash messages --}}

            {{-- Success message --}}
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- Error message --}}
            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- Info message --}}
            @if(session('info'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    {{ session('info') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- Warning message --}}
            @if(session('warning'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('warning') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- Validation errors --}}
            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <style>
                .trader-card {
                    transition: all 0.3s ease;
                    border: 1px solid rgba(0, 0, 0, 0.05);
                    border-radius: 15px;
                    overflow: hidden;
                    background: var(--bs-card-bg);
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.02);
                }
                [data-bs-theme="dark"] .trader-card {
                    border-color: rgba(255, 255, 255, 0.1);
                    background: rgba(255, 255, 255, 0.05);
                    backdrop-filter: blur(10px);
                }
                .trader-card:hover {
                    transform: translateY(-5px);
                    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
                    border-color: var(--bs-primary);
                }
                .trader-avatar-container {
                    width: 60px;
                    height: 60px;
                    border-radius: 50%;
                    overflow: hidden;
                    border: 2px solid var(--bs-primary);
                    flex-shrink: 0;
                }
                .trader-avatar {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                }
                .stat-box {
                    background: rgba(0, 0, 0, 0.02);
                    border-radius: 12px;
                    padding: 12px 8px;
                    text-align: center;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                    border: 1px solid rgba(0, 0, 0, 0.03);
                    height: 100%;
                }
                [data-bs-theme="dark"] .stat-box {
                    background: rgba(255, 255, 255, 0.03);
                    border: 1px solid rgba(255, 255, 255, 0.05);
                }
                .stat-icon {
                    font-size: 1.4rem;
                    margin-bottom: 4px;
                    color: var(--bs-primary);
                }
                .stat-label {
                    font-size: 0.65rem;
                    text-transform: uppercase;
                    letter-spacing: 0.8px;
                    color: var(--bs-secondary-color);
                    font-weight: 600;
                    margin-bottom: 2px;
                }
                .stat-value {
                    font-size: 0.9rem;
                    font-weight: 700;
                    color: var(--bs-heading-color);
                }
                .rating-stars {
                    color: #FFD700;
                    font-size: 13px;
                }
                /* Ensure descriptions aren't too long */
                .description-text {
                    display: -webkit-box;
                    -webkit-line-clamp: 2;
                    -webkit-box-orient: vertical;
                    overflow: hidden;
                    height: 42px;
                    margin-bottom: 20px;
                }
            </style>

                <div class="row g-4">
                    @foreach ($copyTraders as $copyTrader)
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="card trader-card">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="trader-avatar-container me-3">
                                            <img src="{{ asset('storage/' . $copyTrader->avatar) }}" alt="{{ $copyTrader->username }}" class="trader-avatar">
                                        </div>
                                        <div class="flex-grow-1">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div>
                                                <h5 class="mb-0 fw-bolder text-truncate" style="max-width: 150px;">{{ $copyTrader->username }}</h5>
                                                <div class="text-muted fs-11 mt-1 d-flex align-items-center">
                                                    <i class="bx bxs-map me-1 text-primary"></i>{{ $copyTrader->location }}
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <div class="bg-warning-subtle text-warning px-2 py-1 rounded fs-10 fw-bold d-inline-flex align-items-center mb-1">
                                                    {{ number_format($copyTrader->rating, 1) }} <i class="bx bxs-star ms-1"></i>
                                                </div>
                                                @if($copyTrader->equity_growth > 10)
                                                    <div class="d-block">
                                                        <span class="badge bg-success-subtle text-success border border-success-subtle py-1 px-2" style="font-size: 9px;">POPULAR</span>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    </div>

                                    <p class="description-text text-secondary fs-14">
                                        {{ $copyTrader->description }}
                                    </p>

                                    <div class="row g-2 mb-4">
                                        <div class="col-4">
                                            <div class="stat-box">
                                                <i class="bx bx-trending-up stat-icon"></i>
                                                <div class="stat-label">Growth</div>
                                                <div class="stat-value text-success">+{{ $copyTrader->equity_growth }}%</div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="stat-box">
                                                <i class="bx bx-shield-quarter stat-icon"></i>
                                                <div class="stat-label">Risk</div>
                                                <div class="stat-value">{{ $copyTrader->risk_level }}</div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="stat-box">
                                                <i class="bx bx-calendar stat-icon"></i>
                                                <div class="stat-label">Monthly</div>
                                                <div class="stat-value">{{ $copyTrader->avg_per_month }}%</div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="stat-box">
                                                <i class="bx bx-medal stat-icon"></i>
                                                <div class="stat-label">Total PIPs</div>
                                                <div class="stat-value text-info">{{ $copyTrader->total_pips }}</div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="stat-box">
                                                <i class="bx bx-wallet stat-icon"></i>
                                                <div class="stat-label">Min. Cap</div>
                                                <div class="stat-value">{{ currency_converter($copyTrader->mininum_capital) }}</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-grid">
                                        @php
                                            $is_followed = \App\Models\UserCopyTrader::where('user_id', auth()->user()->id)
                                                ->where('copy_trader_id', $copyTrader->id)
                                                ->where('status', 'followed')
                                                ->first();
                                        @endphp

                                        @if($is_followed)
                                            <form action="{{ route('user.copy-traders.follow') }}" method="post" class="w-100">
                                                @csrf
                                                <input type="hidden" name="user" value="{{ auth()->user()->id }}">
                                                <input type="hidden" name="copy_trader" value="{{ $copyTrader->id }}">
                                                <button type="submit" class="btn btn-outline-danger w-100 text-uppercase fw-bold py-2 shadow-sm">
                                                    <i class="bx bx-user-minus me-1"></i> Unfollow
                                                </button>
                                            </form>
                                        @else
                                            <button type="button" class="btn btn-primary w-100 text-uppercase fw-bold py-2 shadow-sm" data-bs-toggle="modal" data-bs-target="#followModal{{ $copyTrader->id }}">
                                                <i class="bx bx-user-plus me-1"></i> Follow Trader
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if(!$is_followed)
                            <!-- Follow Modal -->
                            <div class="modal fade text-start" id="followModal{{ $copyTrader->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content border-0 shadow">
                                        <div class="modal-header bg-primary text-white border-0">
                                            <h5 class="modal-title">Follow {{ $copyTrader->username }}</h5>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('user.copy-traders.follow') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="user" value="{{ auth()->user()->id }}">
                                            <input type="hidden" name="copy_trader" value="{{ $copyTrader->id }}">
                                            <div class="modal-body p-4 text-start">
                                                <div class="mb-4 p-3 bg-light rounded text-start">
                                                    <div class="d-flex justify-content-between mb-2">
                                                        <span class="text-secondary">Minimum Capital:</span>
                                                        <span class="fw-bold text-dark">${{ number_format($copyTrader->mininum_capital, 2) }}</span>
                                                    </div>
                                                    <div class="d-flex justify-content-between mb-0">
                                                        <span class="text-secondary">Available Balance (Deposit):</span>
                                                        <span class="text-success fw-bold">${{ number_format(Auth::user()->deposit, 2) }}</span>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label fw-semibold text-dark">Amount to Invest ($)</label>
                                                    <div class="input-group">
                                                        <input type="number" step="0.01" name="amount" class="form-control form-control-lg @error('amount') is-invalid @enderror" 
                                                            placeholder="Enter amount to invest" min="{{ $copyTrader->mininum_capital }}" 
                                                            max="{{ Auth::user()->deposit }}" 
                                                            value="{{ $copyTrader->mininum_capital }}" required>
                                                        <span class="input-group-text bg-white">USD</span>
                                                    </div>
                                                    <div class="form-text small mt-2">
                                                        Min: ${{ number_format($copyTrader->mininum_capital, 2) }} | Max: ${{ number_format(Auth::user()->deposit, 2) }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer border-0 p-4 pt-0">
                                                <button type="button" class="btn btn-light px-4" data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-primary px-4 shadow">
                                                    Confirm Follow
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        @include('includes.script')

@endsection

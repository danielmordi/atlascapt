@extends('layouts.base')

@section('title')
    Stock Market / IPOs
@endsection

@section('content')
    <div class="nxl-content">
        <div class="container-fluid">
            <!-- Start::page-header -->
            <div class="py-4 d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                <div>
                    <h2 class="mb-0 fw-semibold fs-18">Stock Market / IPO Listings</h2>
                    <p class="mb-0 text-muted">Invest in early-stage companies and established stocks.</p>
                </div>
                <div class="mt-md-0 mt-2">
                    <a href="{{ route('user.ipos.purchased') }}" class="btn btn-secondary shadow-sm">
                        <i class="bi bi-journal-bookmark me-1"></i> My Portfolio
                    </a>
                </div>
            </div>
            <!-- End::page-header -->

            @if (session()->has('success'))
                <div class="mb-3 alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('error'))
                <div class="mb-3 alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="row">
                @forelse ($ipos as $ipo)
                    <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12">
                        <div class="mb-4 border-0 shadow-sm card h-100 overflow-hidden">
                            <div class="p-4 card-body d-flex flex-column">
                                <div class="mb-3 d-flex justify-content-between align-items-start">
                                    <div>
                                        <h5 class="mb-1 fw-bold text-primary">{{ $ipo->symbol }}</h5>
                                        <h6 class="mb-0 text-dark">{{ $ipo->name }}</h6>
                                    </div>  
                                    @if($ipo->status == "active")
                                    <span class="badge bg-soft-success text-success">
                                        <i class="bi bi-graph-up-arrow me-1"></i> Active
                                    </span>
                                    @elseif ($ipo->status == "upcoming")
                                    <span class="badge bg-soft-warning text-warning">
                                        <i class="bi bi-graph-up-arrow me-1"></i> Upcoming
                                    </span>
                                    @endif
                                </div>
                                
                                <p class="mb-4 text-muted small flex-grow-1">
                                    {{ $ipo->description ?? 'No description available for this stock listing.' }}
                                </p>

                                <div class="mb-4 p-3 bg-light rounded-3">
                                    <div class="mb-2 d-flex justify-content-between">
                                        <span class="text-muted small">Price:</span>
                                        <span class="fw-bold text-dark">${{ number_format($ipo->price, 2) }}</span>
                                    </div>
                                    <div class="mb-2 d-flex justify-content-between">
                                        <span class="text-muted small">Available:</span>
                                        <span class="text-dark">{{ number_format($ipo->available_quantity) }} Shares</span>
                                    </div>
                                    <div class="d-flex justify-content-between border-top pt-2 mt-2">
                                        <span class="text-muted small">Min Order:</span>
                                        <span class="text-dark">{{ $ipo->min_purchase }} Shares</span>
                                    </div>
                                </div>

                                <button class="btn {{ $ipo->status == 'upcoming' ? 'btn-warning' : 'btn-primary' }} w-100 py-2 shadow-sm" data-bs-toggle="modal" data-bs-target="#buyModal{{ $ipo->id }}">
                                    <i class="bi {{ $ipo->status == 'upcoming' ? 'bi-clock-history' : 'bi-cart-plus' }} me-1"></i> 
                                    {{ $ipo->status == 'upcoming' ? 'Pre-order Now' : 'Invest Now' }}
                                </button>
                            </div>
                        </div>

                        <!-- Buy Modal -->
                        <div class="modal fade" id="buyModal{{ $ipo->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content border-0 shadow">
                                    <div class="modal-header {{ $ipo->status == 'upcoming' ? 'bg-warning' : 'bg-primary' }} text-white border-0">
                                        <h5 class="modal-title">{{ $ipo->status == 'upcoming' ? 'Pre-order' : 'Invest in' }} {{ $ipo->name }}</h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('user.ipos.purchase') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="ipo_id" value="{{ $ipo->id }}">
                                        <div class="modal-body p-4">
                                            <div class="mb-4 p-3 bg-light rounded">
                                                <div class="d-flex justify-content-between mb-2">
                                                    <span>Current Price:</span>
                                                    <span class="fw-bold">${{ number_format($ipo->price, 2) }}</span>
                                                </div>
                                                <div class="d-flex justify-content-between mb-0">
                                                    <span>Available Balance:</span>
                                                    <span class="text-success fw-bold">${{ number_format(Auth::user()->deposit, 2) }}</span>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label fw-semibold">Quantity to Purchase</label>
                                                <div class="input-group">
                                                    <input type="number" name="quantity" class="form-control form-control-lg @error('quantity') is-invalid @enderror" 
                                                        placeholder="Enter number of shares" min="{{ $ipo->min_purchase }}" 
                                                        max="{{ min($ipo->available_quantity, $ipo->max_purchase ?? 999999999) }}" 
                                                        value="{{ $ipo->min_purchase }}" required
                                                        oninput="document.getElementById('totalCost{{ $ipo->id }}').innerText = (this.value * {{ $ipo->price }}).toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2})">
                                                    <span class="input-group-text bg-white">Shares</span>
                                                </div>
                                                <div class="form-text small mt-2">
                                                    Min: {{ $ipo->min_purchase }} | Max: {{ $ipo->max_purchase ?? 'Unlimited' }}
                                                </div>
                                            </div>

                                            <div class="mt-4 pt-3 border-top d-flex justify-content-between align-items-center">
                                                <span class="fs-16 fw-bold">Estimated Total:</span>
                                                <span class="fs-20 fw-bold text-primary">$<span id="totalCost{{ $ipo->id }}">{{ number_format($ipo->price * $ipo->min_purchase, 2) }}</span></span>
                                            </div>
                                        </div>
                                        <div class="modal-footer border-0 p-4 pt-0">
                                            <button type="button" class="btn btn-light px-4" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn {{ $ipo->status == 'upcoming' ? 'btn-warning' : 'btn-primary' }} px-4 shadow">
                                                Confirm {{ $ipo->status == 'upcoming' ? 'Pre-order' : 'Purchase' }}
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="card card-body text-center py-5 border-0 shadow-sm">
                            <div class="mb-3">
                                <i class="bi bi-inbox fs-1 text-muted"></i>
                            </div>
                            <h4 class="text-muted">No active IPOs or Stocks available at the moment.</h4>
                            <p class="text-muted mb-0">Check back later for new investment opportunities.</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection

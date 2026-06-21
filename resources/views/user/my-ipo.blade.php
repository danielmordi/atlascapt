@extends('layouts.base')

@section('title')
    My IPO Portfolio
@endsection

@section('content')
    <div class="nxl-content">
        <div class="container-fluid">
            <!-- Start::page-header -->
            <div class="py-4 d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                <div>
                    <h2 class="mb-0 fw-semibold fs-18">My IPO Portfolio</h2>
                    <p class="mb-0 text-muted">View and track your stock market investments.</p>
                </div>
                <div class="mt-md-0 mt-2">
                    <a href="{{ route('user.ipos.index') }}" class="btn btn-primary shadow-sm">
                        <i class="bi bi-cart-plus me-1"></i> Browse Markets
                    </a>
                </div>
            </div>
            <!-- End::page-header -->

            @if (session()->has('success'))
                <div class="mb-4 alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="row">
                <div class="col-12">
                    <div class="border-0 shadow-sm card">
                        <div class="p-0 card-body">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle mb-0">
                                    <thead class="bg-light">
                                        <tr>
                                            <th class="ps-4 border-0 text-uppercase small fw-bold">Stock</th>
                                            <th class="border-0 text-uppercase small fw-bold">Quantity</th>
                                            <th class="border-0 text-uppercase small fw-bold">Purchase Price</th>
                                            <th class="border-0 text-uppercase small fw-bold">Total Investment</th>
                                            <th class="border-0 text-uppercase small fw-bold">Date</th>
                                            <th class="pe-4 border-0 text-uppercase small fw-bold">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($myIpos as $item)
                                            <tr>
                                                <td class="ps-4">
                                                    <div class="d-flex align-items-center">
                                                        <div class="p-2 me-3 rounded-circle bg-soft-primary text-primary fs-18 fw-bold" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                                            {{ substr($item->ipo->symbol, 0, 1) }}
                                                        </div>
                                                        <div>
                                                            <h6 class="mb-0 fw-bold">{{ $item->ipo->symbol }}</h6>
                                                            <span class="small text-muted">{{ $item->ipo->name }}</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="fw-semibold text-dark">{{ number_format($item->quantity) }}</span>
                                                </td>
                                                <td>
                                                    <span class="text-dark">${{ number_format($item->purchase_price, 2) }}</span>
                                                </td>
                                                <td>
                                                    <span class="fw-bold text-primary">${{ number_format($item->total_amount, 2) }}</span>
                                                </td>
                                                <td>
                                                    <span class="small text-muted">{{ $item->created_at->format('M d, Y') }}</span><br>
                                                    <span class="small text-muted smaller">{{ $item->created_at->format('h:i A') }}</span>
                                                </td>
                                                <td class="pe-4">
                                                    @if ($item->status == 'active')
                                                        <span class="badge bg-soft-success text-success border-0 px-3">Active</span>
                                                    @else
                                                        <span class="badge bg-soft-secondary text-secondary border-0 px-3">{{ ucfirst($item->status) }}</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="py-5 text-center">
                                                    <div class="mb-3">
                                                        <i class="bi bi-folder2-open fs-1 text-muted"></i>
                                                    </div>
                                                    <h5 class="text-muted">You haven't purchased any IPOs yet.</h5>
                                                    <p class="text-muted mb-3 small">Start investing today to build your portfolio.</p>
                                                    <a href="{{ route('user.ipos.index') }}" class="btn btn-sm btn-primary rounded-pill px-4 shadow-sm">Explore Markets</a>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @if ($myIpos->hasPages())
                            <div class="px-4 py-3 card-footer bg-white border-0 shadow-none">
                                {{ $myIpos->links() }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.base')

@section('title')
    {{ config('app.name') }} - Plan details
@endsection

@section('content')
    <div class="nxl-content">
        <div class="container-fluid">
            <!-- Start::page-header -->
            <div class="py-4 d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                <div>
                    <p class="mb-0 fw-semibold fs-18">Investment Details</p>
                </div>
            </div>
            <!-- End::page-header -->

            <div class="card custom-card overflow-hidden">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div>
                            <h4 class="fw-bold mb-1">{{ $plan->package->name }} - {{ $plan->package->percentage }}% for
                                {{ $plan->package->duration }} Days</h4>
                            @if ($plan->status == 'completed')
                                <span class="badge bg-success">Active</span>
                            @elseif($plan->status == 'pending' || $plan->status == 'Reinvest pending')
                                <span class="badge bg-warning">Pending</span>
                            @else
                                <span class="badge bg-light text-muted">{{ ucfirst($plan->status) }}</span>
                            @endif
                        </div>
                    </div>

                    <hr class="opacity-10 my-4">

                    <div class="row text-center mb-5">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <h3 class="fw-bold mb-1">${{ number_format($plan->amount, 2) }}</h3>
                            <p class="text-muted fs-12 mb-0">Invested amount</p>
                        </div>
                        <div class="col-md-1 d-none d-md-flex align-items-center justify-content-center">
                            <span class="fs-20 text-muted">+</span>
                        </div>
                        <div class="col-md-2 mb-3 mb-md-0">
                            <h3 class="fw-bold text-success mb-1">${{ number_format($plan->totalProfitEarned, 2) }}
                            </h3>
                            <p class="text-muted fs-12 mb-0">Profit earned</p>
                        </div>
                        <div class="col-md-1 d-none d-md-flex align-items-center justify-content-center">
                            <span class="fs-20 text-muted">=</span>
                        </div>
                        <div class="col-md-4">
                            <h3 class="fw-bold text-success mb-1">
                                ${{ number_format($plan->amount + $plan->totalProfitEarned, 2) }}</h3>
                            <p class="text-muted fs-12 mb-0">Total Return</p>
                        </div>
                    </div>

                    <div class="row mb-5">
                        <div class="col-md-4 mb-4">
                            <p class="text-muted fs-12 mb-1">Duration:</p>
                            <h6 class="fw-bold">{{ $plan->package->duration }} Days</h6>
                        </div>
                        <div class="col-md-4 mb-4">
                            <p class="text-muted fs-12 mb-1">Start Date:</p>
                            <h6 class="fw-bold">{{ $plan->created_at->format('D, M d, Y g:i A') }}</h6>
                        </div>
                        <div class="col-md-4 mb-4">
                            <p class="text-muted fs-12 mb-1">End Date:</p>
                            <h6 class="fw-bold">
                                {{ $plan->created_at->addDays($plan->package->duration)->format('D, M d, Y g:i A') }}</h6>
                        </div>
                        <div class="col-md-4 mb-4">
                            <p class="text-muted fs-12 mb-1">Maximum Return:</p>
                            <h6 class="fw-bold">{{ $plan->package->percentage }}%</h6>
                        </div>
                        <div class="col-md-4 mb-4">
                            <p class="text-muted fs-12 mb-1">ROI Interval:</p>
                            <h6 class="fw-bold">Daily</h6>
                        </div>
                    </div>

                    <div class="mt-5">
                        <h5 class="fw-bold mb-4">ROI History</h5>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Amount</th>
                                        <th class="text-end">Date Created</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($roiHistory as $history)
                                        <tr>
                                            <td class="fw-semibold text-success">+${{ number_format($history->amount, 2) }}
                                            </td>
                                            <td class="text-end text-muted">
                                                {{ $history->created_at->format('M d, Y g:i A') }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="2" class="text-center py-4 text-muted">No ROI record yet</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-3">
                            {{ $roiHistory->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

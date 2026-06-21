@extends('layouts.base')

@section('title')
    {{ config('app.name') }} - My investment plans
@endsection

@section('content')
    <div class="nxl-content">
        <div class="container-fluid">
            <!-- Start::page-header -->
            <div class="py-4 d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                <div>
                    <p class="mb-0 fw-semibold fs-18">My Investment Plans</p>
                    <span class="op-7 fs-12 text-muted">A list of all your active and previous investment plans.</span>
                </div>
                <a href="{{ route('user.mining') }}" class="btn btn-primary">Buy a Plan</a>
            </div>
            <!-- End::page-header -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">Investment History</div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0 text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Plan Name</th>
                                            <th>Amount</th>
                                            <th>ROI</th>
                                            <th>Profit</th>
                                            <th>Duration</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($plans as $plan)
                                            <tr>
                                                <td>{{ $plan->created_at->format('M d, Y') }}</td>
                                                <td>
                                                    <span class="fw-semibold">{{ $plan->package->name ?? 'N/A' }}</span>
                                                </td>
                                                <td class="fw-semibold text-teal">${{ number_format($plan->amount, 2) }}
                                                </td>
                                                <td>{{ $plan->package->percentage ?? '0' }}%</td>
                                                <td class="fw-semibold text-success">
                                                    {{ currency_converter($plan->totalProfitEarned) }}</td>
                                                <td>{{ $plan->package->duration ?? '0' }} Days</td>
                                                <td>
                                                    @if ($plan->status == 'completed' || $plan->status == 'active')
                                                        <span
                                                            class="badge bg-success-transparent text-success">Active</span>
                                                    @elseif($plan->status == 'pending' || $plan->status == 'Reinvest pending')
                                                        <span
                                                            class="badge bg-warning-transparent text-warning">Pending</span>
                                                    @else
                                                        <span
                                                            class="badge bg-light text-muted">{{ ucfirst($plan->status) }}</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('user.my-plans.details', $plan->id) }}"
                                                        class="btn btn-sm btn-light">View</a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center py-4 text-muted">No investment plans
                                                    found.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="p-3">
                                {{ $plans->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .text-teal {
            color: #1aa199;
        }

        .bg-success-transparent {
            background-color: rgba(38, 191, 148, 0.1);
        }

        .bg-warning-transparent {
            background-color: rgba(255, 193, 7, 0.1);
        }
    </style>
@endsection

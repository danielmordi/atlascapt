@extends('layouts.base')

@section('title')
    Withdrawal logs
@endsection

@section('content')
    <div class="nxl-content">

        <div class="container-fluid">

            <!-- Start::page-header -->

            <div class="py-4 d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                <div>
                    <p class="mb-0 fw-semibold fs-18">Withdrawal Request Logs</p>
                </div>
            </div>

            <!-- End::page-header -->

            <div class="card">
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-striped table-counter">
                            <thead class="text-uppercase">
                                <th>Username</th>
                                <th>Amount</th>
                                <th>Method</th>
                                <th>Coin / Account</th>
                                <th>Wallet / Address</th>
                                <th>Withdraw from</th>
                                <th>Withdrawal Code</th>
                                <th>Transfer Code</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th></th>
                            </thead>
                            <tbody>
                                @foreach ($withdrawalogs as $log)
                                    <tr>
                                        <td>{{ $log->user->name }}</td>
                                        <td>{{ $log->amount }}</td>
                                        <td>
                                            @if ($log->payout_method === 'bank_transfer')
                                                <span class="badge bg-success-transparent text-success">Bank Transfer</span>
                                            @elseif ($log->payout_method === 'revolut')
                                                <span class="badge" style="background:rgba(0,128,249,0.1);color:#0080f9;">Revolut</span>
                                            @else
                                                <span class="badge bg-warning-transparent text-warning">Crypto</span>
                                            @endif
                                        </td>
                                        <td>{{ $log->coin->name ?? '—' }}</td>
                                        <td>{{ $log->wallet_id }}</td>
                                        <td>{{ $log->withdraw_from == 'deposit' ? 'Profits' : $log->withdraw_from }}
                                        </td>
                                        <td>
                                            <span class="badge bg-warning-transparent text-warning fw-bold fs-13 px-3 py-2"
                                                title="Withdrawal Code for {{ $log->user->name }}"
                                                style="letter-spacing: 0.25em; font-family: monospace;">
                                                {{ $log->withdrawal_code ?? '—' }}
                                            </span>
                                            @if($log->withdrawal_code_verified)
                                                <span class="badge bg-success-transparent text-success ms-1">
                                                    <i class="bx bx-check"></i> Verified
                                                </span>
                                            @endif
                                        </td>
                                        <td>
                                            <span class="badge bg-info-transparent text-info fw-bold fs-13 px-3 py-2"
                                                title="Transfer Code for {{ $log->user->name }}"
                                                style="letter-spacing: 0.25em; font-family: monospace;">
                                                {{ $log->transfer_code ?? '—' }}
                                            </span>
                                            @if($log->transfer_code_verified)
                                                <span class="badge bg-success-transparent text-success ms-1">
                                                    <i class="bx bx-check"></i> Verified
                                                </span>
                                            @endif
                                        </td>
                                        <td>
                                            <div style="letter-spacing: 1.3px"
                                                class="text-uppercase font-weight-bolder badge bg-orange">
                                                {{ $log->status }}</span>
                                        </td>
                                        <td>{{ $log->created_at->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{ route('admin.confirmWithdrawal', $log->id) }}"
                                                class="btn btn-primary btn-sm">Confirm</a>
                                            <a href="{{ route('admin.cancelWithdrawal', $log->id) }}"
                                                class="btn btn-danger btn-sm">Cancel</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div> <!-- container-fluid -->
    </div>
@endsection

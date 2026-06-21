@extends('layouts.base')

@section('title')
    {{ config('app.name') }} - Withdraw
@endsection

@section('content')
    <div class="nxl-content">

        <div class="container-fluid">

            <!-- Start::page-header -->
            <div class="py-4 d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                <div>
                    <p class="mb-0 fw-semibold fs-18">Withdraw Funds</p>
                    <span class="op-7 fs-12 text-muted">Securely withdraw your earnings to your external wallet.</span>
                </div>
            </div>
            <!-- End::page-header -->

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ $error }}
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                @endforeach
            @endif

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            @endif

            <div class="row">
                <div class="col-lg-8">
                    <form action="{{ route('user.withdraw.store') }}" method="post" id="withdraw-form">
                        @csrf
                        <div class="card custom-card">
                            <div class="card-body">
                                <!-- Amount Input -->
                                <div class="mb-4">
                                    <h6 class="fw-semibold mb-2">Withdrawal Amount</h6>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-text bg-light">$</span>
                                        <input type="text" name="amount" value="{{ old('amount') }}" pattern="[0-9.]+"
                                            placeholder="0.00" class="form-control @error('amount') is-invalid @enderror"
                                            required>
                                    </div>
                                    @error('amount')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Source Selection -->
                                <div class="mb-4">
                                    <h6 class="fw-semibold mb-2">Withdrawal Source</h6>
                                    <div class="row g-2">
                                        <div class="col-md-6">
                                            <label class="source-card w-100">
                                                <input type="radio" name="withdraw_from" value="bonus" class="d-none"
                                                    {{ old('withdraw_from') == 'bonus' ? 'checked' : '' }} required>
                                                <div class="card mb-0 shadow-none border p-3">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div
                                                            class="avatar avatar-sm bg-brown-transparent text-brown rounded-circle">
                                                            <i class="bx bxs-gift fs-18"></i>
                                                        </div>
                                                        <div>
                                                            <span class="d-block fw-semibold h6 mb-0">Bonus Balance</span>
                                                            <span
                                                                class="fs-12 text-muted">{{ currency_converter(Auth::user()->bonus) }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="source-card w-100">
                                                <input type="radio" name="withdraw_from" value="totalProfitEarned"
                                                    class="d-none"
                                                    {{ old('withdraw_from') == 'totalProfitEarned' ? 'checked' : '' }}
                                                    required>
                                                <div class="card mb-0 shadow-none border p-3">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div
                                                            class="avatar avatar-sm bg-primary-transparent text-primary rounded-circle">
                                                            <i class="bx bxs-wallet fs-18"></i>
                                                        </div>
                                                        <div>
                                                            <span class="d-block fw-semibold h6 mb-0">Profit Balance</span>
                                                            <span
                                                                class="fs-12 text-muted">{{ currency_converter(Auth::user()->totalProfitEarned) }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    @error('withdraw_from')
                                        <div class="text-danger fs-12 mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Coin Selection -->
                                <div class="mb-4">
                                    <h6 class="fw-semibold mb-3">Choose Payout Method</h6>
                                    <div class="row g-3">
                                        @foreach ($coins as $coin)
                                            <div class="col-md-6">
                                                <label class="payment-method-card w-100">
                                                    <input type="radio" name="coin" value="{{ $coin->id }}"
                                                        class="d-none" {{ old('coin') == $coin->id ? 'checked' : '' }}
                                                        required>
                                                    <div class="card mb-0 shadow-none border" style="cursor: pointer;">
                                                        <div
                                                            class="card-body p-3 d-flex align-items-center justify-content-between">
                                                            <div class="d-flex align-items-center gap-3">
                                                                <div
                                                                    class="avatar avatar-sm bg-light text-primary rounded-circle">
                                                                    <i
                                                                        class="bx {{ strtolower($coin->name) == 'bitcoin' ? 'xl-bitcoin' : (strtolower($coin->name) == 'ethereum' ? 'xl-ethereum' : 'bx-wallet') }} fs-20"></i>
                                                                </div>
                                                                <span class="fw-semibold">{{ $coin->name }}</span>
                                                            </div>
                                                            <div class="custom-radio">
                                                                <div class="radio-circle"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>
                                    @error('coin')
                                        <div class="text-danger fs-12 mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Wallet ID -->
                                <div class="mb-4">
                                    <h6 class="fw-semibold mb-2">Destination Wallet Address</h6>
                                    <input type="text" name="wallet_id" value="{{ old('wallet_id') }}"
                                        class="form-control form-control-lg @error('wallet_id') is-invalid @enderror"
                                        placeholder="Enter your wallet address" required>
                                    @error('wallet_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <div class="alert alert-warning-transparent border-0 mt-3 mb-0 d-flex gap-3">
                                        <i class="bx bx-error-circle fs-20 mt-1"></i>
                                        <span class="fs-12">
                                            <strong>Double-check your address!</strong> Funds sent to an incorrect address
                                            cannot be recovered. Ensure you are using the correct network for the selected
                                            coin.
                                        </span>
                                    </div>
                                </div>

                                <button type="submit"
                                    class="btn btn-primary btn-lg px-5 d-inline-flex align-items-center gap-2">
                                    Confirm Withdrawal <i class="bx bx-right-arrow-circle"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-4">
                    <!-- Balance Summary -->
                    <div class="card custom-card overflow-hidden">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-top justify-content-between mb-3">
                                <div>
                                    <p class="text-muted mb-1 text-uppercase fs-11 fw-semibold">Available for Withdrawal
                                    </p>
                                    <h3 class="fw-bold mb-0">
                                        {{ currency_converter(Auth::user()->totalProfitEarned + Auth::user()->bonus) }}
                                    </h3>
                                </div>
                                <div class="avatar avatar-md bg-primary-transparent text-primary rounded-circle">
                                    <i class="bx bxs-wallet fs-24"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="flex-fill">
                                    <span class="fs-12 text-muted d-block">Profit</span>
                                    <span
                                        class="fw-semibold">{{ currency_converter(Auth::user()->totalProfitEarned) }}</span>
                                </div>
                                <div class="flex-fill">
                                    <span class="fs-12 text-muted d-block">Bonus</span>
                                    <span class="fw-semibold">{{ currency_converter(Auth::user()->bonus) }}</span>
                                </div>
                            </div>
                            <hr class="my-3 opacity-10">
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="fs-12 text-muted">Daily ROI Rate</span>
                                <span
                                    class="badge bg-success-transparent text-success">{{ $packages->percentage ?? '0' }}%</span>
                            </div>
                        </div>
                    </div>

                    <!-- Instructions -->
                    <div class="card custom-card bg-light border-0">
                        <div class="card-body">
                            <h6 class="fw-semibold mb-3">Withdrawal Instructions</h6>
                            <div class="d-flex gap-3 mb-3">
                                <div class="avatar avatar-sm bg-primary-transparent text-primary fw-bold">1</div>
                                <div>
                                    <p class="mb-0 fw-semibold">Select Source & Coin</p>
                                    <span class="fs-12 text-muted">Choose whether to withdraw from your profit or bonus
                                        balance, and select your preferred coin.</span>
                                </div>
                            </div>
                            <div class="d-flex gap-3 mb-3">
                                <div class="avatar avatar-sm bg-primary-transparent text-primary fw-bold">2</div>
                                <div>
                                    <p class="mb-0 fw-semibold">Enter Amount & Address</p>
                                    <span class="fs-12 text-muted">Enter the amount in USD and paste your exact wallet
                                        address.</span>
                                </div>
                            </div>
                            <div class="d-flex gap-3">
                                <div class="avatar avatar-sm bg-primary-transparent text-primary fw-bold">3</div>
                                <div>
                                    <p class="mb-0 fw-semibold">Processing Time</p>
                                    <span class="fs-12 text-muted">Withdrawals are processed manually for security, usually
                                        within 2-24 hours.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Withdrawal History -->
            <div class="card custom-card mt-4">
                <div class="card-header justify-content-between">
                    <div class="card-title">Withdrawal History</div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0 text-nowrap">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Withdrawal Details</th>
                                    <th>Wallet Address</th>
                                    <th>Amount (USD)</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($withdrawals as $withdrawal)
                                    <tr>
                                        <td>{{ $withdrawal->created_at->format('M d, Y') }}</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="avatar avatar-xs bg-light rounded-circle text-primary">
                                                    <i
                                                        class="bx {{ strtolower($withdrawal->coin->name) == 'bitcoin' ? 'xl-bitcoin' : (strtolower($withdrawal->coin->name) == 'ethereum' ? 'xl-ethereum' : 'bx-wallet') }}"></i>
                                                </div>
                                                <span class="fw-semibold">{{ $withdrawal->coin->name }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span
                                                class="text-muted fs-12">{{ Str::limit($withdrawal->wallet_id, 20) }}</span>
                                            <a href="javascript:void(0);"
                                                onclick="navigator.clipboard.writeText('{{ $withdrawal->wallet_id }}')"
                                                class="ms-1 text-primary">
                                                <i class="bx bx-copy"></i>
                                            </a>
                                        </td>
                                        <td class="fw-semibold">${{ number_format($withdrawal->amount, 2) }}</td>
                                        <td>
                                            @if ($withdrawal->status == 'completed')
                                                <span class="badge bg-success-transparent text-success">Completed</span>
                                            @elseif($withdrawal->status == 'pending')
                                                <span class="badge bg-warning-transparent text-warning">Pending</span>
                                            @else
                                                <span
                                                    class="badge bg-light text-muted">{{ ucfirst($withdrawal->status) }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-4 text-muted">No withdrawal records
                                            found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="p-3">
                        {{ $withdrawals->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>

        </div>
    </div>

    <style>
        .source-card input:checked+.card {
            border-color: #5c67f7 !important;
            background-color: rgba(92, 103, 247, 0.05);
        }

        .bg-brown-transparent {
            background-color: rgba(139, 69, 19, 0.1);
        }

        .text-brown {
            color: #8B4513;
        }

        .payment-method-card input:checked+.card {
            border-color: #5c67f7 !important;
            background-color: rgba(92, 103, 247, 0.02);
        }

        .payment-method-card input:checked+.card .radio-circle {
            border-color: #5c67f7;
        }

        .payment-method-card input:checked+.card .radio-circle::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 8px;
            height: 8px;
            background-color: #5c67f7;
            border-radius: 50%;
        }

        .radio-circle {
            width: 18px;
            height: 18px;
            border: 2px solid #dee2e6;
            border-radius: 50%;
            position: relative;
        }

        .custom-radio {
            display: flex;
            align-items: center;
        }

        .alert-warning-transparent {
            background-color: rgba(255, 193, 7, 0.1);
            color: #856404;
        }

        .bg-primary-transparent {
            background-color: rgba(92, 103, 247, 0.1);
        }
    </style>
@endsection

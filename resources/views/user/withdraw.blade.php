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

                                <!-- Payout Method Selection -->
                                <div class="mb-4">
                                    <h6 class="fw-semibold mb-3">Payout Method</h6>
                                    <div class="row g-3" id="payout-method-cards">

                                        <!-- Crypto -->
                                        <div class="col-md-4">
                                            <label class="payout-method-label w-100" style="cursor:pointer;">
                                                <input type="radio" name="payout_method" value="crypto"
                                                    class="d-none payout-radio"
                                                    {{ old('payout_method', 'crypto') == 'crypto' ? 'checked' : '' }}
                                                    required>
                                                <div class="card mb-0 shadow-none border payout-card text-center p-3" id="card-crypto">
                                                    <div class="d-flex flex-column align-items-center gap-2 py-1">
                                                        <div class="avatar avatar-md bg-warning-transparent text-warning rounded-circle">
                                                            <i class="bx bx-bitcoin fs-22"></i>
                                                        </div>
                                                        <span class="fw-semibold fs-14">Crypto</span>
                                                        <span class="text-muted fs-11">BTC, ETH & more</span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>

                                        <!-- Bank Transfer -->
                                        <div class="col-md-4">
                                            <label class="payout-method-label w-100" style="cursor:pointer;">
                                                <input type="radio" name="payout_method" value="bank_transfer"
                                                    class="d-none payout-radio"
                                                    {{ old('payout_method') == 'bank_transfer' ? 'checked' : '' }}>
                                                <div class="card mb-0 shadow-none border payout-card text-center p-3" id="card-bank_transfer">
                                                    <div class="d-flex flex-column align-items-center gap-2 py-1">
                                                        <div class="avatar avatar-md bg-success-transparent text-success rounded-circle">
                                                            <i class="bx bx-buildings fs-22"></i>
                                                        </div>
                                                        <span class="fw-semibold fs-14">Bank Transfer</span>
                                                        <span class="text-muted fs-11">Wire / SEPA</span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>

                                        <!-- Revolut -->
                                        <div class="col-md-4">
                                            <label class="payout-method-label w-100" style="cursor:pointer;">
                                                <input type="radio" name="payout_method" value="revolut"
                                                    class="d-none payout-radio"
                                                    {{ old('payout_method') == 'revolut' ? 'checked' : '' }}>
                                                <div class="card mb-0 shadow-none border payout-card text-center p-3" id="card-revolut">
                                                    <div class="d-flex flex-column align-items-center gap-2 py-1">
                                                        <div class="avatar avatar-md rounded-circle" style="background:rgba(0,128,249,0.1);color:#0080f9;">
                                                            <i class="bx bx-credit-card-alt fs-22"></i>
                                                        </div>
                                                        <span class="fw-semibold fs-14">Revolut</span>
                                                        <span class="text-muted fs-11">@tag or phone</span>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>

                                    </div>
                                    @error('payout_method')
                                        <div class="text-danger fs-12 mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Crypto: Coin Selection (shown only when crypto is selected) -->
                                <div id="section-coin" class="mb-4" style="display:none;">
                                    <h6 class="fw-semibold mb-3">Choose Coin</h6>
                                    <div class="row g-3">
                                        @foreach ($coins as $coin)
                                            <div class="col-md-6">
                                                <label class="payment-method-card w-100">
                                                    <input type="radio" name="coin" value="{{ $coin->id }}"
                                                        class="d-none" {{ old('coin') == $coin->id ? 'checked' : '' }}>
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

                                <!-- Bank Transfer: Extra fields (shown only when bank_transfer is selected) -->
                                <div id="section-bank" class="mb-4" style="display:none;">
                                    <h6 class="fw-semibold mb-3">Bank Details</h6>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label class="form-label fw-semibold fs-13">Bank Name</label>
                                            <input type="text" name="bank_name" value="{{ old('bank_name') }}"
                                                class="form-control" placeholder="e.g. Barclays, Chase">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label fw-semibold fs-13">Account Name</label>
                                            <input type="text" name="account_name" value="{{ old('account_name') }}"
                                                class="form-control" placeholder="Full name on account">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label fw-semibold fs-13">IBAN / Account Number</label>
                                            <input type="text" name="iban" value="{{ old('iban') }}"
                                                class="form-control" placeholder="GB29 NWBK 6016 1331 9268 19">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label fw-semibold fs-13">SWIFT / BIC (optional)</label>
                                            <input type="text" name="swift" value="{{ old('swift') }}"
                                                class="form-control" placeholder="e.g. BARCGB22">
                                        </div>
                                    </div>
                                </div>

                                <!-- Destination Address / Account (label changes based on method) -->
                                <div class="mb-4">
                                    <h6 class="fw-semibold mb-2" id="wallet-label">Destination Wallet Address</h6>
                                    <input type="text" name="wallet_id" id="wallet_id_input"
                                        value="{{ old('wallet_id') }}"
                                        class="form-control form-control-lg @error('wallet_id') is-invalid @enderror"
                                        placeholder="Enter your wallet address" required>
                                    @error('wallet_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <div class="alert alert-warning-transparent border-0 mt-3 mb-0 d-flex gap-3" id="wallet-warning">
                                        <i class="bx bx-error-circle fs-20 mt-1"></i>
                                        <span class="fs-12" id="wallet-warning-text">
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
                                    <p class="mb-0 fw-semibold">Select Source &amp; Coin</p>
                                    <span class="fs-12 text-muted">Choose whether to withdraw from your profit or bonus
                                        balance, and select your preferred coin.</span>
                                </div>
                            </div>
                            <div class="d-flex gap-3 mb-3">
                                <div class="avatar avatar-sm bg-primary-transparent text-primary fw-bold">2</div>
                                <div>
                                    <p class="mb-0 fw-semibold">Enter Amount &amp; Address</p>
                                    <span class="fs-12 text-muted">Enter the amount in USD and paste your exact wallet
                                        address.</span>
                                </div>
                            </div>
                            <div class="d-flex gap-3 mb-3">
                                <div class="avatar avatar-sm bg-primary-transparent text-primary fw-bold">3</div>
                                <div>
                                    <p class="mb-0 fw-semibold">Enter Verification Codes</p>
                                    <span class="fs-12 text-muted">Contact support via live chat or email to receive your
                                        withdrawal &amp; transfer codes.</span>
                                </div>
                            </div>
                            <div class="d-flex gap-3">
                                <div class="avatar avatar-sm bg-primary-transparent text-primary fw-bold">4</div>
                                <div>
                                    <p class="mb-0 fw-semibold">Processing Time</p>
                                    <span class="fs-12 text-muted">Withdrawals are processed manually for security, usually
                                        within 2-24 hours.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Support Card -->
                    <div class="card custom-card border-primary" style="border-left: 4px solid #5c67f7 !important;">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="avatar avatar-sm bg-primary-transparent text-primary rounded-circle">
                                    <i class="bx bx-support fs-18"></i>
                                </div>
                                <h6 class="fw-semibold mb-0">Need your codes?</h6>
                            </div>
                            <p class="fs-12 text-muted mb-3">Contact our support team to receive your withdrawal and
                                transfer verification codes.</p>
                            <a href="mailto:support@atlascapt.com"
                                class="btn btn-outline-primary btn-sm w-100 mb-2 d-flex align-items-center justify-content-center gap-2">
                                <i class="bx bx-envelope"></i> support@atlascapt.com
                            </a>
                            <a href="#" onclick="Tawk_API && Tawk_API.toggle()"
                                class="btn btn-primary btn-sm w-100 d-flex align-items-center justify-content-center gap-2">
                                <i class="bx bx-chat"></i> Live Chat Support
                            </a>
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
                                                @if ($withdrawal->payout_method === 'bank_transfer')
                                                    <div class="avatar avatar-xs bg-success-transparent rounded-circle text-success">
                                                        <i class="bx bx-buildings"></i>
                                                    </div>
                                                    <span class="fw-semibold">Bank Transfer</span>
                                                @elseif ($withdrawal->payout_method === 'revolut')
                                                    <div class="avatar avatar-xs rounded-circle" style="background:rgba(0,128,249,0.1);color:#0080f9;">
                                                        <i class="bx bx-credit-card-alt"></i>
                                                    </div>
                                                    <span class="fw-semibold">Revolut</span>
                                                @else
                                                    <div class="avatar avatar-xs bg-light rounded-circle text-primary">
                                                        <i class="bx {{ $withdrawal->coin ? (strtolower($withdrawal->coin->name) == 'bitcoin' ? 'xl-bitcoin' : (strtolower($withdrawal->coin->name) == 'ethereum' ? 'xl-ethereum' : 'bx-wallet')) : 'bx-wallet' }}"></i>
                                                    </div>
                                                    <span class="fw-semibold">{{ $withdrawal->coin->name ?? 'Crypto' }}</span>
                                                @endif
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

    {{-- ============================================================
         MODAL: Step 1 — Withdrawal Code
    ============================================================ --}}
    <div class="modal fade" id="withdrawalCodeModal" tabindex="-1" aria-labelledby="withdrawalCodeModalLabel"
        aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-header border-0 pb-0">
                    <div class="d-flex align-items-center gap-3">
                        <div class="avatar avatar-md bg-primary-transparent text-primary rounded-circle">
                            <i class="bx bx-lock-alt fs-22"></i>
                        </div>
                        <div>
                            <h5 class="modal-title fw-bold mb-0" id="withdrawalCodeModalLabel">Withdrawal Code Required</h5>
                            {{-- <span class="fs-12 text-muted">Step 1 of 2</span> --}}
                        </div>
                    </div>
                </div>
                <form action="{{ route('user.withdraw.verify-code') }}" method="POST">
                    @csrf
                    <div class="modal-body pt-3">
                        <div class="alert alert-info-transparent border-0 d-flex gap-3 mb-4">
                            <i class="bx bx-info-circle fs-20 mt-1 flex-shrink-0"></i>
                            <span class="fs-13">
                                Your withdrawal request has been received. To proceed, please enter your
                                <strong>5-digit withdrawal code</strong>. Contact our support team to receive this code.
                            </span>
                        </div>

                        <!-- Support contact options -->
                        <div class="d-flex gap-2 mb-4">
                            <a href="mailto:support@atlascapt.com"
                                class="btn btn-outline-secondary btn-sm flex-fill d-flex align-items-center justify-content-center gap-2">
                                <i class="bx bx-envelope"></i> Email Support
                            </a>
                            <a href="#" onclick="Tawk_API && Tawk_API.toggle()"
                                class="btn btn-outline-primary btn-sm flex-fill d-flex align-items-center justify-content-center gap-2">
                                <i class="bx bx-chat"></i> Live Chat
                            </a>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Enter Withdrawal Code</label>
                            <input type="text" name="withdrawal_code" id="withdrawal_code_input"
                                class="form-control form-control-lg text-center fw-bold fs-24 code-input"
                                maxlength="5" pattern="[0-9]{5}" placeholder="• • • • •" required
                                autocomplete="off" inputmode="numeric">
                            <div class="text-muted fs-12 mt-1 text-center">Enter the 5-digit code provided by support</div>
                        </div>
                    </div>
                    <div class="modal-footer border-0 pt-0">
                        <button type="submit" id="verifyCodeBtn"
                            class="btn btn-primary btn-lg w-100 d-flex align-items-center justify-content-center gap-2">
                            <i class="bx bx-check-shield"></i> Verify Code &amp; Continue
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- ============================================================
         MODAL: Step 2 — Transfer Code
    ============================================================ --}}
    <div class="modal fade" id="transferCodeModal" tabindex="-1" aria-labelledby="transferCodeModalLabel"
        aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-header border-0 pb-0">
                    <div class="d-flex align-items-center gap-3">
                        <div class="avatar avatar-md bg-success-transparent text-success rounded-circle">
                            <i class="bx bx-transfer fs-22"></i>
                        </div>
                        <div>
                            <h5 class="modal-title fw-bold mb-0" id="transferCodeModalLabel">Transfer Code Required</h5>
                            {{-- <span class="fs-12 text-muted">Step 2 of 2</span> --}}
                        </div>
                    </div>
                </div>
                <form action="{{ route('user.withdraw.verify-transfer') }}" method="POST">
                    @csrf
                    <div class="modal-body pt-3">
                        <div class="alert alert-success-transparent border-0 d-flex gap-3 mb-4">
                            <i class="bx bx-check-circle fs-20 mt-1 flex-shrink-0 text-success"></i>
                            <span class="fs-13">
                                <strong>Withdrawal code verified!</strong> Now please enter your
                                <strong>5-digit transfer code</strong> to complete the process. Contact support if you
                                haven't received it yet.
                            </span>
                        </div>

                        <!-- Support contact options -->
                        <div class="d-flex gap-2 mb-4">
                            <a href="mailto:support@atlascapt.com"
                                class="btn btn-outline-secondary btn-sm flex-fill d-flex align-items-center justify-content-center gap-2">
                                <i class="bx bx-envelope"></i> Email Support
                            </a>
                            <a href="#" onclick="Tawk_API && Tawk_API.toggle()"
                                class="btn btn-outline-primary btn-sm flex-fill d-flex align-items-center justify-content-center gap-2">
                                <i class="bx bx-chat"></i> Live Chat
                            </a>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Enter Transfer Code</label>
                            <input type="text" name="transfer_code" id="transfer_code_input"
                                class="form-control form-control-lg text-center fw-bold fs-24 code-input"
                                maxlength="5" pattern="[0-9]{5}" placeholder="• • • • •" required
                                autocomplete="off" inputmode="numeric">
                            <div class="text-muted fs-12 mt-1 text-center">Enter the 5-digit code provided by support</div>
                        </div>
                    </div>
                    <div class="modal-footer border-0 pt-0">
                        <button type="submit" id="verifyTransferBtn"
                            class="btn btn-success btn-lg w-100 d-flex align-items-center justify-content-center gap-2">
                            <i class="bx bx-send"></i> Confirm Transfer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- ============================================================
         MODAL: Processing / Success
    ============================================================ --}}
    <div class="modal fade" id="processingModal" tabindex="-1" aria-labelledby="processingModalLabel"
        aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg">
                <div class="modal-body text-center py-5 px-4">
                    <div class="processing-animation mb-4">
                        <div class="processing-ring"></div>
                        <div class="processing-icon">
                            <i class="bx bx-transfer-alt text-primary fs-32"></i>
                        </div>
                    </div>
                    <h4 class="fw-bold mb-2">Withdrawal Being Processed</h4>
                    <p class="text-muted fs-14 mb-4">
                        Your withdrawal request has been submitted and is now being processed by our team.
                        You will receive a confirmation once it is completed.
                    </p>
                    <div class="alert alert-info-transparent border-0 text-start d-flex gap-3 mb-4">
                        <i class="bx bx-time-five fs-20 mt-1 flex-shrink-0"></i>
                        <div>
                            <strong class="d-block">Estimated Processing Time</strong>
                            <span class="fs-13 text-muted">Usually within 2–24 hours depending on network congestion.</span>
                        </div>
                    </div>
                    <div class="d-flex gap-2">
                        <a href="mailto:support@atlascapt.com"
                            class="btn btn-outline-secondary flex-fill d-flex align-items-center justify-content-center gap-2">
                            <i class="bx bx-envelope"></i> Email Support
                        </a>
                        <button type="button" class="btn btn-primary flex-fill" data-bs-dismiss="modal">
                            <i class="bx bx-check"></i> Done
                        </button>
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

        .alert-info-transparent {
            background-color: rgba(13, 110, 253, 0.08);
            color: #0d6efd;
        }

        .alert-success-transparent {
            background-color: rgba(25, 135, 84, 0.08);
        }

        /* Payout method cards */
        .payout-card {
            transition: border-color 0.2s ease, background-color 0.2s ease, transform 0.15s ease;
        }
        .payout-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 16px rgba(92, 103, 247, 0.12) !important;
        }
        .payout-radio:checked + .payout-card {
            border-color: #5c67f7 !important;
            background-color: rgba(92, 103, 247, 0.05);
            box-shadow: 0 2px 12px rgba(92, 103, 247, 0.18) !important;
        }

        /* Code input styling */
        .code-input {
            letter-spacing: 0.4em;
            font-family: 'Courier New', monospace;
            border: 2px solid #dee2e6;
            border-radius: 12px;
            transition: border-color 0.2s ease;
        }

        .code-input:focus {
            border-color: #5c67f7;
            box-shadow: 0 0 0 0.2rem rgba(92, 103, 247, 0.15);
        }

        /* Processing animation */
        .processing-animation {
            position: relative;
            width: 90px;
            height: 90px;
            margin: 0 auto;
        }

        .processing-ring {
            position: absolute;
            top: 0;
            left: 0;
            width: 90px;
            height: 90px;
            border: 4px solid rgba(92, 103, 247, 0.15);
            border-top-color: #5c67f7;
            border-radius: 50%;
            animation: spin 1.5s linear infinite;
        }

        .processing-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 60px;
            height: 60px;
            background: rgba(92, 103, 247, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        .bg-success-transparent {
            background-color: rgba(25, 135, 84, 0.1);
        }

        .text-success {
            color: #198754 !important;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // -------------------------------------------------------
            // Auto-open the correct modal based on DB state (resume support)
            // -------------------------------------------------------
            @if ($verificationStep === 'withdrawal_code' || session('require_withdrawal_code'))
                var wcModal = new bootstrap.Modal(document.getElementById('withdrawalCodeModal'));
                wcModal.show();
            @elseif ($verificationStep === 'transfer_code' || session('require_transfer_code'))
                var tcModal = new bootstrap.Modal(document.getElementById('transferCodeModal'));
                tcModal.show();
            @elseif ($verificationStep === 'processing' || session('withdrawal_processing'))
                var pmModal = new bootstrap.Modal(document.getElementById('processingModal'));
                pmModal.show();
            @endif

            // -------------------------------------------------------
            // Only allow digits in the code inputs
            // -------------------------------------------------------
            ['withdrawal_code_input', 'transfer_code_input'].forEach(function (id) {
                var el = document.getElementById(id);
                if (el) {
                    el.addEventListener('input', function () {
                        this.value = this.value.replace(/\D/g, '').substring(0, 5);
                    });
                }
            });

            // -------------------------------------------------------
            // Payout Method — dynamic section switcher
            // -------------------------------------------------------
            var payoutRadios  = document.querySelectorAll('.payout-radio');
            var sectionCoin   = document.getElementById('section-coin');
            var sectionBank   = document.getElementById('section-bank');
            var walletLabel   = document.getElementById('wallet-label');
            var walletInput   = document.getElementById('wallet_id_input');
            var walletWarning = document.getElementById('wallet-warning');
            var walletWarnTxt = document.getElementById('wallet-warning-text');

            var config = {
                crypto: {
                    label:       'Destination Wallet Address',
                    placeholder: 'Enter your wallet address',
                    warning:     '<strong>Double-check your address!</strong> Funds sent to an incorrect address cannot be recovered. Ensure you are using the correct network for the selected coin.',
                    showCoin:    true,
                    showBank:    false,
                },
                bank_transfer: {
                    label:       'Beneficiary Account Number / IBAN',
                    placeholder: 'e.g. GB29 NWBK 6016 1331 9268 19',
                    warning:     '<strong>Important:</strong> Ensure the account details below exactly match your bank records to avoid delays or loss of funds.',
                    showCoin:    false,
                    showBank:    true,
                },
                revolut: {
                    label:       'Revolut @Tag or Phone Number',
                    placeholder: 'e.g. @johndoe or +447911123456',
                    warning:     '<strong>Tip:</strong> You can find your Revolut @tag in the Revolut app under your profile. Make sure to use the correct tag or phone number.',
                    showCoin:    false,
                    showBank:    false,
                },
            };

            function applyPayoutMethod(value) {
                var cfg = config[value] || config.crypto;
                sectionCoin.style.display  = cfg.showCoin ? '' : 'none';
                sectionBank.style.display  = cfg.showBank ? '' : 'none';
                walletLabel.textContent    = cfg.label;
                walletInput.placeholder    = cfg.placeholder;
                walletWarnTxt.innerHTML    = cfg.warning;
            }

            payoutRadios.forEach(function (radio) {
                radio.addEventListener('change', function () {
                    applyPayoutMethod(this.value);
                });
            });

            // Apply on page load (handles old() values after form errors)
            var checkedRadio = document.querySelector('.payout-radio:checked');
            if (checkedRadio) {
                applyPayoutMethod(checkedRadio.value);
            }
        });
    </script>
@endsection

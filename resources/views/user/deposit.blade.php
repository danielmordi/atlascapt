@extends('layouts.base')

@section('title')
    {{ config('app.name') }} - Deposit
@endsection

@section('content')
    <div class="nxl-content">

        <div class="container-fluid">

            <!-- Start::page-header -->
            <div class="py-4 d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                <div>
                    <p class="mb-0 fw-semibold fs-18">Make a Deposit</p>
                    <span class="op-7 fs-12 text-muted">Add funds to your account balance.</span>
                </div>
            </div>
            <!-- End::page-header -->

            <!-- Reinvest Modal (Placeholder as it was before) -->
            <div id="reinvest" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <h5 class="card-title" id="myModalLabel">Reinvest from Deposit Balance</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="p-1 card-body">
                                    <h6>Deposit Balance: {{ currency_converter(Auth::user()->wallet_balance) }}</h6>
                                    <p class="fs-12 text-muted">Total amount deposited:
                                        {{ currency_converter(Auth::user()->total_deposited) }}</p>
                                    <div id="reinvestAlert"></div>
                                    <form action="{{ route('user.reinvest') }}" method="post">
                                        @csrf
                                        <div class="mb-2">
                                            <label class="form-label">Choose a coin</label>
                                            <select name="coin" class="form-control select2" required>
                                                <option value="">Select</option>
                                                @foreach ($coins as $coin)
                                                    <option value="{{ $coin->id }}">{{ $coin->name }}</option>
                                                @endforeach
                                            </select>
                                            <strong id="coinAlert" class="text-danger"></strong>
                                        </div>
                                        <div class="mb-2">
                                            <label for="deposit_amount" class="form-label">Deposit Amount</label>
                                            <input type="number" name="deposit_amount" placeholder="0.00"
                                                class="form-control" required
                                                value="{{ preg_replace('/[^0-9.]/', '', Auth::user()->wallet_balance) }}"
                                                readonly>
                                            <small>You can only reinvest
                                                {{ currency_converter(Auth::user()->wallet_balance) }}</small>
                                            <strong id="depositgAlert" class="text-danger"></strong>
                                        </div>
                                        <button type="submit" class="btn btn-primary" id="reinvestBtn">Reinvest</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <form action="{{ route('user.deposit.store') }}" method="post" id="deposit-form">
                        @csrf
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="mb-4">
                                    <h6 class="fw-semibold mb-2">Enter Amount</h6>
                                    <input type="number" name="deposit_amount" min="100"
                                        class="form-control form-control-lg @error('deposit_amount') is-invalid @enderror"
                                        placeholder="Enter Amount here" value="{{ old('deposit_amount') }}" required>
                                    @error('deposit_amount')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="mb-4">
                                    <h6 class="fw-semibold mb-3">Choose your method of payment from the list below</h6>
                                    <div class="row g-3" id="coin-cards-container">
                                        @foreach ($coins as $coin)
                                            <div class="col-md-12">
                                                <label class="payment-method-card w-100">
                                                    <input type="radio" name="coin" value="{{ $coin->id }}"
                                                        class="d-none" {{ old('coin') == $coin->id ? 'checked' : '' }}
                                                        required>
                                                    <div class="card mb-0 shadow-none border @error('coin') border-danger @enderror"
                                                        style="cursor: pointer;">
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

                                <button type="submit"
                                    class="btn btn-teal btn-lg px-4 d-inline-flex align-items-center gap-2">
                                    Proceed to Payment <i class="bx bx-right-arrow-circle"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-4">
                    <div class="card custom-card">
                        <div class="card-body p-4">
                            <p class="text-muted mb-1 text-uppercase fs-11 fw-semibold">Total Deposited</p>
                            <h3 class="fw-bold mb-3">
                                {{ currency_converter(Auth::user()->total_deposited) }}
                            </h3>
                            <hr class="my-3 opacity-10">
                            <a href="#deposit-history" class="text-teal fw-semibold d-inline-flex align-items-center gap-1">
                                View deposit history
                            </a>
                        </div>
                    </div>

                    <div class="card custom-card bg-light border-0">
                        <div class="card-body">
                            <h6 class="fw-semibold mb-3">Deposit instructions</h6>
                            <div class="d-flex gap-3 mb-3">
                                <div class="avatar avatar-sm bg-teal-transparent text-teal fw-bold">1</div>
                                <div>
                                    <p class="mb-0 fw-semibold">Enter Amount</p>
                                    <span class="fs-12 text-muted">Enter the amount you wish to deposit in USD.</span>
                                </div>
                            </div>
                            <div class="d-flex gap-3">
                                <div class="avatar avatar-sm bg-teal-transparent text-teal fw-bold">2</div>
                                <div>
                                    <p class="mb-0 fw-semibold">Submit & Pay</p>
                                    <span class="fs-12 text-muted">Click submit and follow the payment instructions.
                                        Confirms in 5-15 mins.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4" id="deposit-history">
                <div class="col-md-12">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">Deposit History</div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0 text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Description</th>
                                            <th>Amount</th>
                                            <th>Coin</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($logs as $log)
                                            <tr>
                                                <td>{{ $log->created_at->format('M d, Y') }}</td>
                                                <td>
                                                    <span class="text-muted fs-12">Deposit via
                                                        {{ $log->coin->name ?? 'N/A' }}</span>
                                                </td>
                                                <td class="fw-semibold text-teal">${{ number_format($log->amount, 2) }}
                                                </td>
                                                <td>{{ $log->coin->name ?? 'N/A' }}</td>
                                                <td>
                                                    @if ($log->status == 'completed')
                                                        <span
                                                            class="badge bg-success-transparent text-success">Completed</span>
                                                    @elseif($log->status == 'pending')
                                                        <span
                                                            class="badge bg-warning-transparent text-warning">Pending</span>
                                                    @else
                                                        <span
                                                            class="badge bg-light text-muted">{{ ucfirst($log->status) }}</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center py-4 text-muted">No deposit records
                                                    found.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="p-3">
                                {{ $logs->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <style>
                .btn-teal {
                    background-color: #1aa199;
                    border-color: #1aa199;
                    color: #fff;
                }

                .btn-teal:hover {
                    background-color: #158a83;
                    border-color: #158a83;
                    color: #fff;
                }

                .text-teal {
                    color: #1aa199;
                }

                .bg-teal-transparent {
                    background-color: rgba(26, 161, 153, 0.1);
                }

                .payment-method-card input:checked+.card {
                    border-color: #1aa199 !important;
                    background-color: rgba(26, 161, 153, 0.02);
                }

                .payment-method-card input:checked+.card .radio-circle {
                    border-color: #1aa199;
                }

                .payment-method-card input:checked+.card .radio-circle::after {
                    content: '';
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    width: 8px;
                    height: 8px;
                    background-color: #1aa199;
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
            </style>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        {{-- @include('includes.script') --}}

        <script>
            $(document).ready(function() {
                $("#reinvestBtn").click(function(e) {
                    e.preventDefault();
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    })

                    if ($('input[name="deposit_amount"]').val() == '') {
                        $('#depositgAlert').html('<br>Deposit amount is required!');
                        return false;
                    }

                    if ($('select[name="coin"]').val() == '') {
                        $('#coinAlert').html('Coin field is required!');
                        return false;
                    }

                    if ($('select[name="package"]').val() == '') {
                        $('#pckgAlert').html('package field is required!');
                        return false;
                    }

                    let formData = {
                        amount: $('input[name="deposit_amount"]').val(),
                        coin_id: $('select[name="coin"]').val(),
                        package_id: $('select[name="package"]').val(),
                    };

                    let type = 'POST';
                    let url = 'reinvest';

                    $.ajax({
                        type: type,
                        url: url,
                        data: formData,
                        dataType: "json",
                        success: function(response) {
                            console.log(response);
                            $("#reinvestAlert").removeClass('text-danger mb-2');
                            $("#reinvestAlert").addClass('text-success mb-2');
                            $("#reinvestAlert").html(response);
                            // setTimeout(function () {
                            //   $("#success").hide().html('');
                            //   location.reload();
                            // }, 1000);
                        },
                        error: function(response) {
                            console.log(response.responseJSON);
                            $("#reinvestAlert").addClass('text-danger');
                            $("#reinvestAlert").html(response.responseJSON);
                        }
                    });
                });
            });
        </script>
    @endsection

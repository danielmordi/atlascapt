@extends('layouts.base')

@section('title')
    {{ config('app.name') }} - Mining plans
@endsection

@section('content')
    <div class="nxl-content">
        <div class="container-fluid">
            <!-- Start::page-header -->
            <div class="py-4 d-md-flex d-block align-items-center justify-content-between page-header-breadcrumb">
                <div>
                    <p class="mb-0 fw-semibold fs-18">Buy investment plan</p>
                </div>
            </div>
            <!-- End::page-header -->

            <div class="row">
                <div class="col-lg-8">
                    <div class="card custom-card">
                        <div class="card-body">
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Choose a plan</label>
                                <select id="plan-select" class="form-control form-control-lg select2">
                                    @foreach ($packages as $package)
                                        <option value="{{ $package->id }}" data-name="{{ $package->name }}"
                                            data-min="{{ $package->min_val }}" data-max="{{ $package->max_val }}"
                                            data-duration="{{ $package->duration }}" data-roi="{{ $package->hash_rate }}"
                                            data-percentage="{{ $package->percentage }}">
                                            {{ $package->name }} - ${{ number_format($package->min_val, 2) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Choose Quick Amount to Invest</label>
                                <div class="d-flex flex-wrap gap-2">
                                    @foreach ([100, 250, 500, 1000, 1500, 2000, 3000] as $amount)
                                        <button type="button" class="btn btn-outline quick-amount-btn border"
                                            data-amount="{{ $amount }}">${{ number_format($amount) }}</button>
                                    @endforeach
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Or Enter Your Amount</label>
                                <input type="number" id="investment-amount" class="form-control form-control-lg"
                                    placeholder="0.00">
                            </div>

                            <div class="mb-0">
                                <label class="form-label fw-semibold text-muted mb-1">Payment Method</label>
                                <div class="d-flex align-items-center justify-content-between border rounded p-3">
                                    <div>
                                        <p class="mb-0 text-muted fs-12">Deposit Balance</p>
                                        <h5 class="mb-0 fw-bold">{{ currency_converter(Auth::user()->deposit) }}
                                        </h5>
                                    </div>
                                    <div class="text-teal">
                                        <i class="bx bxs-check-circle fs-24"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card custom-card">
                        <div class="card-body p-4">
                            <h6 class="fw-semibold mb-4">Plan Details</h6>

                            <div class="row mb-3">
                                <div class="col-6">
                                    <p class="text-muted fs-12 mb-1">Name of plan</p>
                                    <h6 id="summary-plan-name" class="fw-bold text-teal">---</h6>
                                </div>
                                <div class="col-6">
                                    <p class="text-muted fs-12 mb-1">Plan Price</p>
                                    <h6 id="summary-plan-price" class="fw-bold text-teal">$0.00</h6>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-6">
                                    <p class="text-muted fs-12 mb-1">Duration</p>
                                    <h6 id="summary-duration" class="fw-bold text-teal">---</h6>
                                </div>
                                <div class="col-6">
                                    <p class="text-muted fs-12 mb-1">ROI</p>
                                    <h6 id="summary-roi" class="fw-bold text-teal">---</h6>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-6">
                                    <p class="text-muted fs-12 mb-1">Minimum Amount</p>
                                    <h6 id="summary-min" class="fw-bold text-teal">$0.00</h6>
                                </div>
                                <div class="col-6">
                                    <p class="text-muted fs-12 mb-1">Maximum Amount</p>
                                    <h6 id="summary-max" class="fw-bold text-teal">$0.00</h6>
                                </div>
                            </div>

                            {{-- <div class="row mb-3">
                                <div class="col-6">
                                    <p class="text-muted fs-12 mb-1">Minimum Return</p>
                                    <h6 id="summary-min-return" class="fw-bold text-teal">2.00%</h6>
                                </div>
                                <div class="col-6">
                                    <p class="text-muted fs-12 mb-1">Maximum Return</p>
                                    <h6 id="summary-max-return" class="fw-bold text-teal">5.00%</h6>
                                </div>
                            </div> --}}

                            <div class="mb-4">
                                <p class="text-muted fs-12 mb-1">Bonus</p>
                                <h6 id="summary-bonus" class="fw-bold text-teal">$0.00</h6>
                            </div>

                            <hr class="my-3 opacity-10">

                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <p class="text-muted mb-0">Payment method:</p>
                                <h6 class="mb-0 fw-bold text-teal">Deposit Balance</h6>
                            </div>

                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <p class="fw-bold mb-0">Amount to Invest:</p>
                                <h5 id="total-invest-display" class="mb-0 fw-bold text-teal">$0</h5>
                            </div>

                            <form id="invest-form" action="{{ route('user.reinvest') }}" method="POST">
                                @csrf
                                <input type="hidden" name="package_id" id="hidden-package-id">
                                <input type="hidden" name="amount" id="hidden-amount">
                                <input type="hidden" name="coin_id" value="1">
                                <!-- Default to BTC or similar if required by backend, though reinvest doesn't technically need a coin if using balance -->

                                <button type="submit" class="btn btn-teal-confirm w-100 fw-semibold">Confirm &
                                    Invest</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .text-teal {
            color: #1aa199 !important;
        }

        .btn-teal-confirm {
            background-color: #72bdb7;
            border-color: #72bdb7;
            color: #fff;
        }

        .btn-teal-confirm:hover {
            background-color: #1aa199;
            border-color: #1aa199;
            color: #fff;
        }

        .quick-amount-btn.active {
            background-color: #1aa199;
            border-color: #1aa199;
            color: #fff;
        }
    </style>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            function updateSummary() {
                const selectedPlan = $('#plan-select option:selected');
                const amount = $('#investment-amount').val() || 0;

                $('#summary-plan-name').text(selectedPlan.data('name'));
                $('#summary-plan-price').text('$' + parseFloat(selectedPlan.data('min')).toLocaleString());
                $('#summary-duration').text(selectedPlan.data('duration') + ' Days');
                $('#summary-roi').text(selectedPlan.data('percentage') + '%');
                $('#summary-min').text('$' + parseFloat(selectedPlan.data('min')).toLocaleString());
                $('#summary-max').text('$' + parseFloat(selectedPlan.data('max')).toLocaleString());
                // $('#summary-min-return').text(selectedPlan.data('roi') + '%');
                // $('#summary-max-return').text(selectedPlan.data('percentage') + '%');

                $('#total-invest-display').text('$' + parseFloat(amount).toLocaleString());

                $('#hidden-package-id').val($('#plan-select').val());
                $('#hidden-amount').val(amount);
            }

            $('#plan-select').on('change', updateSummary);

            $('#investment-amount').on('input', function() {
                const amount = $(this).val();
                $('.quick-amount-btn').removeClass('active');
                updateSummary();
            });

            $('.quick-amount-btn').on('click', function() {
                const amount = $(this).data('amount');
                $('#investment-amount').val(amount);
                $('.quick-amount-btn').removeClass('active');
                $(this).addClass('active');
                updateSummary();
            });

            // Initialize summary
            updateSummary();

            // Handle Form Submission
            $('#invest-form').on('submit', function(e) {
                e.preventDefault();
                const amount = $('#investment-amount').val();
                const selectedPlan = $('#plan-select option:selected');
                const minVal = parseFloat(selectedPlan.data('min'));
                const maxVal = parseFloat(selectedPlan.data('max'));

                if (!amount || amount <= 0) {
                    alert('Please enter a valid amount to invest.');
                    return;
                }

                if (parseFloat(amount) < minVal) {
                    alert('The minimum amount for this plan is $' + minVal.toLocaleString());
                    return;
                }

                if (parseFloat(amount) > maxVal) {
                    alert('The maximum amount for this plan is $' + maxVal.toLocaleString());
                    return;
                }

                const formData = $(this).serialize();
                $.ajax({
                    url: $(this).attr('action'),
                    method: 'POST',
                    data: formData,
                    success: function(response) {
                        alert(response);
                        location.reload();
                    },
                    error: function(xhr) {
                        alert(xhr.responseText || 'An error occurred. Please try again.');
                    }
                });
            });
        });
    </script>
@endpush
